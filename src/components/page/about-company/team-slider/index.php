<!--<script src="src/components/page/about-company/team-slider/index.js"></script>-->


<?php
$slides = [
   [
      "image" => "people.jpeg",
      "name" => "Владимир Петров",
      "jobTitle" => "1Генеральный директор",
   ],
   [
      "image" => "people.jpeg",
      "name" => "Вася Пупкин",
      "jobTitle" => "2Генеральный директор",
   ],
   [
      "image" => "people.jpeg",
      "name" => "Вася Пупкин",
      "jobTitle" => "3Генеральный директор",
   ],
   [
      "image" => "people.jpeg",
      "name" => "Вася Пупкин",
      "jobTitle" => "4Генеральный директор",
   ],
   [
      "image" => "people.jpeg",
      "name" => "Вася Пупкин",
      "jobTitle" => "5Генеральный директор",
   ],
   [
      "image" => "people.jpeg",
      "name" => "Вася Пупкин",
      "jobTitle" => "6Генеральный директор",
   ],
   [
      "image" => "people.jpeg",
      "name" => "Вася Пупкин",
      "jobTitle" => "7Генеральный директор",
   ],
];
?>

<link rel="stylesheet" href="src/components/page/about-company/team-slider/index.css" />

<section class="team-slider container mt-160px">
   <h3 class="team-slider__title title-page-h3">Команда</h3>

   <section class="slider">
      <div class="slider__buttons">
         <button class="slider__button slider__button--prev" type="button">
            <svg class="slider__icon" width="50" height="50" viewBox="0 0 50 50">
               <use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-left-circle"></use>
            </svg>
         </button>
         <button class="slider__button slider__button--next" type="button">
            <svg class="slider__icon" width="50" height="50" viewBox="0 0 50 50">
               <use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-left-circle"></use>
            </svg>
         </button>
      </div>
      <div class="slider__box">
         <div class="slider__container">
            <?php foreach ($slides as $slide): ?>
               <div class="slider__slide">
                  <div class="slider__header">

                     <img class="slider__image" src="<?php echo IMG_PATH . htmlspecialchars($slide['image']); ?>"
                        alt="people">

                  </div>
                  <div class="slider__main">
                     <p class="slider__text"><?php echo nl2br(htmlspecialchars($slide['name'])); ?></p>
                     <p class="slider__text"><?php echo nl2br(htmlspecialchars($slide['jobTitle'])); ?></p>

                  </div>

               </div>
            <?php endforeach; ?>
         </div>
      </div>
   </section>
</section>


<style>
   .first-visible .slider__main {
      opacity: 1;
      display: flex;
      flex-direction: column;
   }


   .slider__slide {
      display: flex;
      flex-direction: column;
      position: relative;
      box-sizing: border-box;
      width: 560px;
      height: 560px;
      margin-right: 40px;

   }

   .slider__main {
      opacity: 0;
   }

   .slider__buttons {
      display: flex;
      gap: 20px;
      max-width: 120px;
   }

   .slider__button {
      width: 50px;
      height: 50px;
   }

   .slider__button--next {
      transform: rotate(180deg);
   }

   .team-slider .slider {
      display: flex;
      flex-direction: column-reverse;
      align-items: flex-end;
      gap: 20px;
   }

   .slider__box {
      position: relative;
      height: 560px;
      width: 100%;
      overflow: hidden;
   }

   .slider__container {
      position: absolute;
      top: 0px;
      display: flex;
   }

   .slider__header {
      position: relative;
      width: 100%;
      height: 100%;
   }

   .slider__title {
      font-family: var(--font-inter);
      font-size: 24px;
      font-weight: 500;
      line-height: 33.6px;
      color: rgba(81, 81, 81, 1);
   }

   .slider__image {
      position: absolute;
      width: 100%;
      height: 100%;
      object-fit: cover;
      top: 0px;
      left: 0px;
   }

   .slider__text:first-child {
      font-size: 30px;
      font-weight: 400;
      margin: 15px 0 10px 0;
      line-height: 30px;
      color: rgba(81, 81, 81, 1);
   }

   .slider__text:last-child {
      font-size: 20px;
      font-weight: 400;
      line-height: 20px;
      color: rgba(151, 151, 151, 1);
   }

   .slider__link {
      bottom: 20px;
      right: 20px;
      position: absolute;
   }

   @media(max-width:768px) {}

   .slider__icon {
      fill: #fff;
      stroke: #0045B2;
      transition: all 200ms ease;
   }

   .slider__button:hover .slider__icon {
      fill: #0045B2;
      stroke: #fff;
      --stroke-width: 0;
      --circle-radius: 25;
      transition: all 200ms ease;
   }
</style>

<script>
   $(document).ready(function () {
      const $sliderContainer = $(".team-slider .slider__container");
      const $slides = $sliderContainer.children();
      const slideCount = $slides.length;
      const slideWidth = Math.ceil($(".team-slider .slider__slide").outerWidth()) + 40;
      const step = -slideWidth;
      const timeAnimate = 700;
      let isAnimating = false;

      // Копируем первые два слайда и добавляем их в конец контейнера
      $slides.slice(0, 2).clone().appendTo($sliderContainer);
      // Копируем последние два слайда и добавляем их в начало контейнера
      $slides.slice(-2).clone().prependTo($sliderContainer);

      $sliderContainer.css("left", -slideWidth * 2 + "px");

      function updateFirstVisibleSlide() {
         // Пересчитываем $slides после клонирования
         const currentSlides = $sliderContainer.children();
         currentSlides.removeClass('first-visible');
         const images = currentSlides.find('.slider__header .slider__image');
         images.css('height', '80%'); // Устанавливаем height для всех изображений

         const currentLeft = parseInt($sliderContainer.css("left")) || 0;
         const firstVisibleIndex = Math.abs(currentLeft) / slideWidth; // Индекс первого видимого слайда

         const firstVisibleSlide = $(currentSlides[firstVisibleIndex]);
         firstVisibleSlide.addClass('first-visible');
         firstVisibleSlide.find('.slider__header .slider__image').css('height', '100%'); // Устанавливаем height для первого видимого изображения
      }

      updateFirstVisibleSlide();

      $(".team-slider .slider__button--prev").click(function () {
         if (!isAnimating) {
            isAnimating = true;
            const currentLeft = parseInt($sliderContainer.css("left")) || 0;
            const newLeft = currentLeft - step;
            const currentSlide = $sliderContainer.children().eq(Math.abs(currentLeft / slideWidth)); // Текущий первый видимый слайд
            const nextSlide = $sliderContainer.children().eq(Math.abs(newLeft / slideWidth));

            currentSlide.find('.slider__header .slider__image').animate({ height: '80%' }, timeAnimate); // Плавное изменение height текущего слайда
            nextSlide.find('.slider__header .slider__image').css('height', '80%'); // Начальное состояние изображения

            $sliderContainer.animate({ left: newLeft + "px" }, timeAnimate, function () {
               if (parseInt($sliderContainer.css("left")) >= 0) {
                  $sliderContainer.css("left", -slideCount * slideWidth + "px");
               }
               updateFirstVisibleSlide();
               isAnimating = false;
            });

            nextSlide.find('.slider__header .slider__image').animate({ height: '100%' }, timeAnimate); // Плавное изменение height
         }
      });

      $(".team-slider .slider__button--next").click(function () {
         if (!isAnimating) {
            isAnimating = true;
            const currentLeft = parseInt($sliderContainer.css("left")) || 0;
            const newLeft = currentLeft + step;
            const currentSlide = $sliderContainer.children().eq(Math.abs(currentLeft / slideWidth)); // Текущий первый видимый слайд
            const nextSlide = $sliderContainer.children().eq(Math.abs(newLeft / slideWidth));

            currentSlide.find('.slider__header .slider__image').animate({ height: '80%' }, timeAnimate); // Плавное изменение height текущего слайда
            nextSlide.find('.slider__header .slider__image').css('height', '80%'); // Начальное состояние изображения

            $sliderContainer.animate({ left: newLeft + "px" }, timeAnimate, function () {
               if (parseInt($sliderContainer.css("left")) <= -(slideCount + 1) * slideWidth) {
                  $sliderContainer.css("left", -slideWidth + "px");
               }
               updateFirstVisibleSlide();
               isAnimating = false;
            });

            nextSlide.find('.slider__header .slider__image').animate({ height: '100%' }, timeAnimate); // Плавное изменение height
         }
      });
   });

</script>