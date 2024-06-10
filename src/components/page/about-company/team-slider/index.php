<!--<script src="src/components/page/about-company/team-slider/index.js"></script>-->

<!--<link rel="stylesheet" href="src/components/page/about-company/team-slider/index.css" />-->

<section class="team-slider container mt-160px">
   <h3 class="team-slider__title title-page-h3">Команда</h3>

   <div class="all-slide">
      <div class="custom-slider__buttons">
         <button class="custom-slider__button js-partners-slider-prev button--visible prev-button" type="button">
            <svg class="custom-slider__icon" width="50" height="50" viewBox="0 0 50 50">
               <use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-left-circle"></use>
            </svg>
         </button>
         <button class="custom-slider__button js-partners-slider-next button--visible next-button" type="button">
            <svg class="custom-slider__icon" width="50" height="50" viewBox="0 0 50 50">
               <use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-left-circle"></use>
            </svg>
         </button>
      </div>
      <div class="all-sliders">
         <div class="custom-slider">
            <div id="custom-slider__line--1" class="custom-slider__line"></div>
         </div>
         <div class="custom-slider">
            <div id="custom-slider__line--2" class="custom-slider__line"></div>
         </div>
         <div class="custom-slider">
            <div id="custom-slider__line--3" class="custom-slider__line"></div>
         </div>
         <div class="custom-slider">
            <div id="custom-slider__line--4" class="custom-slider__line"></div>
         </div>
      </div>
   </div>
</section>

<style>
   .all-sliders {
      display: flex;
      gap: 40px;
   }

   .box-slid {
      display: flex;
   }

   .box-slid img {
      width: 100%;
   }

   .custom-slider {
      box-sizing: border-box;
      width: 410px;
      height: 410px;
      position: relative;
      overflow: hidden;
      margin: 0;
   }

   .custom-slider__line {
      position: relative;
      display: flex;
      width: 410px;
      left: -410px;
   }

   .custom-slider__line img {
      max-width: 410px;
      width: 100%;
      height: 410px;
   }
</style>

<script>
   document.addEventListener('DOMContentLoaded', () => {
      const images = [
         { id: '1', image: "1-zoomlin.svg", alt: "Zoomlin Logo" },
         { id: '2', image: "2-translift.svg", alt: "Translift Logo" },
         { id: '3', image: "3-medizina.svg", alt: "Medizina Logo" },
         { id: '4', image: "4-jood.svg", alt: "Jood Logo" },
         { id: '5', image: "5-agrolider.svg", alt: "Agrolider Logo" },
         { id: '6', image: "6-agrodoc.svg", alt: "Agrodoc Logo" },
         { id: '7', image: "7-rustorg.svg", alt: "Rustorg Logo" },
         { id: '8', image: "8-pkuspt.svg", alt: "Pkuspt Logo" },
         { id: '9', image: "9-UralSpecTrans.svg", alt: "UralSpecTrans Logo" },
         { id: '10', image: "10-geocentr.svg", alt: "geocentr Logo" },
         { id: '11', image: "11-LBR.svg", alt: "LBR Logo" },
         { id: '12', image: "12-gorci.svg", alt: "gorci Logo" },
         { id: '13', image: "13-pесо.svg", alt: "pесо Logo" },
         { id: '14', image: "14-ingostrah.svg", alt: "ingostrah Logo" },
         { id: '15', image: "15-jugiria.svg", alt: "jugiria Logo" },
         { id: '16', image: "16-sogaz.svg", alt: "sogaz Logo" },
         { id: '17', image: "17-energogrant.svg", alt: "energogrant Logo" },
         { id: '18', image: "18-bsk.svg", alt: "bsk Logo" },
         { id: '19', image: "19-alfa.svg", alt: "alfa Logo" },
         { id: '20', image: "20-mezcentr.svg", alt: "mezcentr Logo" },
         { id: '21', image: "21-logo.svg", alt: "mezcentr Logo" },
      ];

      const slidersData = [
         images.filter((_, index) => index % 4 === 0),
         images.filter((_, index) => index % 4 === 1),
         images.filter((_, index) => index % 4 === 2),
         images.filter((_, index) => index % 4 === 3)
      ];

      const maxLength = Math.max(...slidersData.map(arr => arr.length));
      const placeholder = { id: 'placeholder', image: "placeholder.svg", alt: "Placeholder" };

      slidersData.forEach(arr => {
         while (arr.length < maxLength) {
            arr.push(placeholder);
         }
      });

      const maxStep = Math.ceil(images.length) - 1;
      let activeImage = 0;
      const widthOffset = document.querySelector('.custom-slider').clientWidth;
      let flag = true;

      const sliderPlaces = Array.from(document.querySelectorAll('.custom-slider__line'));
      sliderPlaces.forEach(sliderPlace => {
         sliderPlace.style.width = 3 * widthOffset + 'px';
         sliderPlace.style.height = widthOffset + 'px';
         sliderPlace.style.left = '-' + widthOffset + 'px';
      });

      const initSlider = () => {
         slidersData.forEach((sliderData, index) => {
            const slide = sliderPlaces[index];
            createImageElement(slide, sliderData[activeImage].image);
            nextImageGenerate(sliderData, slide);
            prevImageGenerate(sliderData, slide);
         });
      };

      const createImageElement = (slide, imageSrc, isBefore = false) => {
         const img = document.createElement('img');
         img.src = '/src/assets/images/svg/custom-slider/' + imageSrc;
         if (isBefore) {
            slide.prepend(img);
         } else {
            slide.append(img);
         }
      };

      const nextImageGenerate = (sliderData, slide) => {
         let nextImage = activeImage + 1;
         if (nextImage >= sliderData.length) nextImage = 0;
         if (sliderData[nextImage]?.image) {
            createImageElement(slide, sliderData[nextImage].image);
         } else {
            const img = document.createElement('div');
            slide.append(img);
         }
      };

      const prevImageGenerate = (sliderData, slide) => {
         let prevImage = activeImage - 1;
         if (prevImage < 0) prevImage = sliderData.length - 1;
         createImageElement(slide, sliderData[prevImage].image, true);
      };

      const animate = ({ duration, draw, removeElement }) => {
         const start = performance.now();
         requestAnimationFrame(function animate(time) {
            let step = (time - start) / duration;
            if (step > 1) step = 1;
            draw(step);
            if (step < 1) {
               requestAnimationFrame(animate);
            } else {
               removeElement.remove();
               flag = true;
            }
         });
      };

      const nextSlide = () => {
         if (!flag) return;
         flag = false;
         activeImage++;
         slidersData.forEach((sliderData, index) => {
            const slide = sliderPlaces[index];
            if (activeImage >= sliderData.length) activeImage = 0;
            nextImageGenerate(sliderData, slide);
            animate({
               duration: 1000,
               draw: progress => {
                  slide.querySelector('img').style.width = (widthOffset * (1 - progress)) + 'px';
               },
               removeElement: slide.querySelector('img')
            });
         });
      };

      const prevSlide = () => {
         if (!flag) return;
         flag = false;
         activeImage--;
         slidersData.forEach((sliderData, index) => {
            const slide = sliderPlaces[index];
            if (activeImage < 0) activeImage = sliderData.length - 1;
            prevImageGenerate(sliderData, slide);
            animate({
               duration: 1000,
               draw: progress => {
                  slide.querySelector('img').style.width = (widthOffset * progress) + 'px';
               },
               removeElement: slide.querySelector('img:last-child')
            });
         });
      };

      initSlider();
      document.querySelector('.next-button').addEventListener('click', nextSlide);
      document.querySelector('.prev-button').addEventListener('click', prevSlide);
   });
</script>


<!--<section class="team-slider container mt-160px">
   <h3 class="team-slider__title title-page-h3">Команда</h3>

   <div class="sliders">
      <div class="slider" id="slider1"></div>
      <div class="slider" id="slider2"></div>
      <div class="slider" id="slider3"></div>
      <div class="slider" id="slider4"></div>
   </div>
   <div class="controls">
      <button id="prevAll">Предыдущий</button>
      <button id="nextAll">Следующий</button>
   </div>
</section>

<style>
   .sliders {
      display: flex;
      justify-content: space-around;
      margin: 20px;
   }

   .slider {
      width: 200px;
      height: 200px;
      overflow: hidden;
      border: 1px solid #ccc;
      position: relative;
   }

   .slider img {
      width: 100%;
      position: absolute;
      top: 0;
      transition: left 0.5s ease;
   }

   .slider img.active {
      left: 0;
   }

   .slider img.next {
      left: 100%;
   }

   .slider img.prev {
      left: -100%;
   }

   .controls {
      text-align: center;
      margin-top: 20px;
   }

   button {
      padding: 10px 20px;
      margin: 5px;
      font-size: 16px;
   }
</style>

<script>
   const slidesTeam = [
      { id: '1', image: "1-zoomlin.svg", alt: "Zoomlin Logo" },
      { id: '2', image: "2-translift.svg", alt: "Translift Logo" },
      { id: '3', image: "3-medizina.svg", alt: "Medizina Logo" },
      { id: '4', image: "4-jood.svg", alt: "Jood Logo" },
      { id: '5', image: "5-agrolider.svg", alt: "Agrolider Logo" },
      { id: '6', image: "6-agrodoc.svg", alt: "Agrodoc Logo" },
      { id: '7', image: "7-rustorg.svg", alt: "Rustorg Logo" },
      { id: '8', image: "8-pkuspt.svg", alt: "Pkuspt Logo" },
      { id: '9', image: "9-UralSpecTrans.svg", alt: "UralSpecTrans Logo" },
      { id: '10', image: "10-geocentr.svg", alt: "geocentr Logo" },
      { id: '11', image: "11-LBR.svg", alt: "LBR Logo" },
      { id: '12', image: "12-gorci.svg", alt: "gorci Logo" },
      { id: '13', image: "13-pесо.svg", alt: "pесо Logo" },
      { id: '14', image: "14-ingostrah.svg", alt: "ingostrah Logo" },
      { id: '15', image: "15-jugiria.svg", alt: "jugiria Logo" },
      { id: '16', image: "16-sogaz.svg", alt: "sogaz Logo" },
      { id: '17', image: "17-energogrant.svg", alt: "energogrant Logo" },
      { id: '18', image: "18-bsk.svg", alt: "bsk Logo" },
      { id: '19', image: "19-alfa.svg", alt: "alfa Logo" },
      { id: '20', image: "20-mezcentr.svg", alt: "mezcentr Logo" }
   ];

   const slidersData = [
      slidesTeam.filter((_, index) => index % 4 === 0),
      slidesTeam.filter((_, index) => index % 4 === 1),
      slidesTeam.filter((_, index) => index % 4 === 2),
      slidesTeam.filter((_, index) => index % 4 === 3)
   ];

   $(document).ready(function () {


      slidersData.forEach((sliderData, index) => {
         const slider = $(`#slider${index + 1}`);
         sliderData.forEach((slide, slideIndex) => {
            const imgClass = slideIndex === 0 ? 'active' : 'next';
            slider.append(`<img src="/src/assets/images/svg/custom-slider/${slide.image}" alt="${slide.alt}" class="slide ${imgClass}">`);
         });
      });


      function changeSlide(slider, direction) {
         const active = slider.find('.active');
         let newActive, newClass;

         if (direction === 'next') {
            newActive = active.next('img').length ? active.next('img') : slider.find('img').first();
            newClass = 'next';
         } else {
            newActive = active.prev('img').length ? active.prev('img') : slider.find('img').last();
            newClass = 'prev';
         }

         active.removeClass('active').addClass(direction === 'next' ? 'prev' : 'next');
         newActive.removeClass(newClass).addClass('active');
      }

      $('#prevAll').click(function () {
         $('.slider').each(function () {
            changeSlide($(this), 'prev');
         });
      });

      $('#nextAll').click(function () {
         $('.slider').each(function () {
            changeSlide($(this), 'next');
         });
      });
   });
</script>-->