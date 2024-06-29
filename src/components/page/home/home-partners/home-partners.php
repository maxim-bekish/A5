<!--<link rel="stylesheet" href="src/components/page/home/home-partners/home-partners.css">
<script src="src/components/page/home/home-partners/home-partners.js"></script>-->

<?php
$partners = array(
   array(
      "image" => "1-zoomlin.svg",
      "alt" => "Zoomlin Logo",
   ),
   array(
      "image" => "2-translift.svg",
      "alt" => "Translift Logo",
   ),
   array(
      "image" => "3-medizina.svg",
      "alt" => "Medizina Logo",
   ),
   array(
      "image" => "4-jood.svg",
      "alt" => "Jood Logo",
   ),
   array(
      "image" => "5-agrolider.svg",
      "alt" => "Agrolider Logo",
   ),
   array(
      "image" => "6-agrodoc.svg",
      "alt" => "Agrodoc Logo",
   ),
   array(
      "image" => "7-rustorg.svg",
      "alt" => "Rustorg Logo",
   ),
   array(
      "image" => "8-pkuspt.svg",
      "alt" => "Pkuspt Logo",
   ),
   array(
      "image" => "9-UralSpecTrans.svg",
      "alt" => "UralSpecTrans Logo",
   ),
   array(
      "image" => "10-geocentr.svg",
      "alt" => "geocentr Logo",
   ),
   array(
      "image" => "11-LBR.svg",
      "alt" => "LBR Logo",
   ),
   array(
      "image" => "12-gorci.svg",
      "alt" => "gorci Logo",
   ),
   array(
      "image" => "13-pесо.svg",
      "alt" => "pесо Logo",
   ),
   array(
      "image" => "14-ingostrah.svg",
      "alt" => "ingostrah Logo",
   ),
   array(
      "image" => "15-jugiria.svg",
   ),
   array(
      "image" => "16-sogaz.svg",
      "alt" => "sogaz Logo",
   ),
   array(
      "image" => "17-energogrant.svg",
      "alt" => "energogrant Logo",
   ),
   array(
      "image" => "18-bsk.svg",
      "alt" => "bsk Logo",
   ),
   array(
      "image" => "19-alfa.svg",
      "alt" => "alfa Logo",
   ),
   array(
      "image" => "20-mezcentr.svg",
      "alt" => "mezcentr Logo",
   ),
);
?>


<section class="partners-box mt-160px container">
   <div class="partners-box__up grid_1-3-box">
      <div>

         <p class="p20px">Партнеры</p>
      </div>
      <div class="partners-box__content">
         <h3 class="title-page-h3">
            Не нашли нужный вам продукт?
         </h3>
         <p class="partners-box__text">
            Мы сотрудничаем с более 1000 поставщиками в России, СНГ и странах ближнего востока. Подберём лизинговые
            условия
            индивидуально для вас
         </p>
         <div class="partners-box__time">
            <div class="partners-box__time-item">
               <p class="partners-box__time-value">25 минут</p>
               <p class="partners-box__time-description">на подбор продукта из нашей базы.</p>
            </div>
            <div class="partners-box__time-item">
               <p class="partners-box__time-value">До 2-х дней</p>
               <p class="partners-box__time-description">занимает время на согласование условий предоставлений лизинга с
                  поставщиком.</p>
            </div>
            <div class="partners-box__time-item">
               <p class="partners-box__time-value">
                  В течение 2-х дней

               </p>
               <p class="partners-box__time-description">
                  будет заключён договор.

               </p>
            </div>
         </div>
         <div class="partners-box__button">
            <button type="button" class="openPopUpButton button button--blue" data-title="Не нашли нужный
            вам продукт?" data-description="true" data-email="false">
               Подобрать
            </button>

         </div>
      </div>
   </div>
   <section class="partners-slider">
      <div class="custom-slider__buttons ">
         <button class="custom-slider__button js-partners-slider-prev " type="button">
            <svg class="custom-slider__icon" width="50" height="50" viewBox="0 0 50 50">
               <use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-left-circle"></use>
            </svg>
         </button>
         <button class="custom-slider__button js-partners-slider-next " type="button">
            <svg class="custom-slider__icon" width="50" height="50" viewBox="0 0 50 50">
               <use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-left-circle"></use>
            </svg>
         </button>
      </div>
      <div class="partners-slider__box">
         <div id="slides-container">
            <?php
            // Определяем заглушку
            $placeholder = array(
               "image" => "placeholder.svg",
               "alt" => "Placeholder",
               "text" => "This is a placeholder"
            );

            // Выводим все слайды сразу
            foreach ($partners as $el) {
            ?>
               <div class="slide-item">
                  <img src="<?php echo SVG_PATH; ?>custom-slider/<?php echo $el["image"] ?>" alt="<?php echo $el["alt"] ?>">
                  <p><?php echo $el["text"] ?></p>
               </div>
            <?php
            }

            // Добавляем заглушки, чтобы общее количество элементов было кратно 4
            $totalSlides = count($partners);
            while ($totalSlides % 4 != 0) {
            ?>
               <div class="slide-item">
                  <img src="<?php echo SVG_PATH; ?>custom-slider/<?php echo $placeholder["image"] ?>" alt="<?php echo $placeholder["alt"] ?>">
                  <p><?php echo $placeholder["text"] ?></p>
               </div>

            <?php
               $totalSlides++;
            }
            ?>
         </div>
         <div class="partners-slider__container" id="grouped-slides"></div>
      </div>
   </section>
</section>

<script>
   $(document).ready(function() {
      const container = $('#slides-container');
      const slidesPartners = Array.from(container.children());
      container.hide();

      function groupSlides() {
         const width = $(window).width();
         let groupSize;

         if (width >= 1280) {
            groupSize = 4;
         } else if (width >= 768) {
            groupSize = 3;
         } else {
            groupSize = 2;
         }

         const groupedSlidesContainer = $('#grouped-slides');
         groupedSlidesContainer.empty();

         for (let i = 0; i < slidesPartners.length; i += groupSize) {
            const slideGroup = slidesPartners.slice(i, i + groupSize);
            const groupDiv = $('<div>').addClass('partners-slider__slide');
            slideGroup.forEach(slide => groupDiv.append(slide));
            groupedSlidesContainer.append(groupDiv);
         }

         const lastGroup = groupedSlidesContainer.children().last();
         while (lastGroup && lastGroup.children().length < groupSize) {
            const placeholderDiv = $('<div>').addClass('slide-item').html(`
                <img src="<?php echo SVG_PATH . 'custom-slider/' . $placeholder['image']; ?>" alt="<?php echo $placeholder['alt']; ?>">
                <p><?php echo $placeholder['text']; ?></p>
            `);
            lastGroup.append(placeholderDiv);
         }
      }

      groupSlides();
      $(window).resize(groupSlides);

      let $partnersSliderContainer = $("#grouped-slides");
      let $partnersSlides = $partnersSliderContainer.children();
      let partnersSlideCount = $partnersSlides.length;
      let slideHeight = Math.ceil($(".partners-box .partners-slider__slide").outerHeight());

      let customSliderBox = $(".partners-box .slide-item img")[0];
      let rowHeight = customSliderBox.scrollHeight;
      $(".partners-box .partners-slider__box").css("height", `${rowHeight}px`);

      let stepPartners = -slideHeight;
      let timeAnimate = 700;
      let isAnimating = false;

      $partnersSlides.slice(0, 2).clone().appendTo($partnersSliderContainer);
      $partnersSlides.slice(-2).clone().prependTo($partnersSliderContainer);

      $partnersSliderContainer.css("top", -slideHeight + "px");



      function partnersPrevSlide() {
         if (!isAnimating) {
            isAnimating = true;
            let currentTop = parseInt($partnersSliderContainer.css("top")) || 0;
            $partnersSliderContainer.animate({
               top: (currentTop - stepPartners) + "px"
            }, timeAnimate, function() {
               if (parseInt($partnersSliderContainer.css("top")) >= 0) {
                  $partnersSliderContainer.css("top", -partnersSlideCount * slideHeight + "px");
               }
               isAnimating = false;
            });
         }
      }



      function partnersNextSlide() {
         if (!isAnimating) {
            isAnimating = true;
            let currentTop = parseInt($partnersSliderContainer.css("top")) || 0;
            $partnersSliderContainer.animate({
               top: (currentTop + stepPartners) + "px"
            }, timeAnimate, function() {
               if (parseInt($partnersSliderContainer.css("top")) <= -(partnersSlideCount + 1) * slideHeight) {
                  $partnersSliderContainer.css("top", -slideHeight + "px");
               }
               isAnimating = false;
            });
         }
      }



      $(".partners-box .js-partners-slider-prev").click(() => partnersPrevSlide());
      $(".partners-box .js-partners-slider-next").click(() => partnersNextSlide());

      var hammerPartners = new Hammer($partnersSliderContainer[0]);
      hammerPartners.get('swipe').set({
         direction: Hammer.DIRECTION_VERTICAL
      });
      hammerPartners.on("swipedown", function() {
         partnersPrevSlide();
      });
      hammerPartners.on("swipeup", function() {
         partnersNextSlide();
      });
   });
</script>

<style>
   .partners-box .partners-slider__slide .slide-item {
      width: 100%;
      height: 100%;
      max-width: 410px;
      max-height: 410px;
   }

   .partners-box .partners-slider__slide {
      width: 100%;
      display: flex;
      grid-template-columns: 1fr 1fr;
      grid-template-rows: 1fr 1fr;
      gap: 40px;
      width: 100%;
      max-height: 410px;
      min-height: 165px;
      height: 100%;
   }

   .partners-box__content {
      display: flex;
      flex-direction: column;
   }

   .partners-box__time-value {
      font-size: 24px;
      line-height: 29.04px;
   }

   .partners-box__text {
      font-size: 24px;
      line-height: 29.04px;
      color: var(--medium-gray);
      margin: 30px 0 40px 0;
   }

   .partners-box__time {
      display: grid;
      gap: 40px;
      margin-bottom: 60px;
      grid-template-columns: repeat(3, minmax(30%, 410px));
      justify-content: space-between;
   }

   .partners-box__time-description {
      margin-top: 10px;
      font-size: 18px;
      line-height: 21.78px;
   }

   .partners-box__button {
      display: grid;
      gap: 40px;
      grid-template-columns: repeat(3, minmax(30%, 410px));

   }

   .partners-box .partners-slider {
      display: flex;
      flex-direction: column;
      gap: 20px;
   }

   .partners-box .partners-slider--reverse {
      flex-direction: column-reverse;
      align-items: end;
   }

   .partners-box .partners-slider__box {
      position: relative;
      max-height: 410px;
      min-height: 165px;
      width: 100%;
      height: 100%;
      overflow: hidden;
   }


   .partners-box .partners-slider__container {
      position: absolute;
      top: 0px;
      width: 100%;
      display: flex;
      flex-direction: column;
   }

   @media(max-width:1280px) {

      .partners-box__text {
         margin: 20px 0 40px 0;
      }

      .partners-box__time {
         margin-bottom: 50px;
         gap: 20px;
      }

      .partners-box .partners-slider {
         margin-top: 70px;
      }

      .partners-box .partners-slider {
         flex-direction: column-reverse;
         align-items: flex-end;
      }

      .partners-box .partners-slider__slide {
         gap: 20px
      }

      .partners-box__button {
         gap: 20px;

      }
   }

   @media (max-width: 768px) {

      .partners-box__text {
         font-size: 14px;
         line-height: 19.6px;
         margin: 20px 0;
      }

      .partners-box__time {
         grid-template-columns: 1fr;
         gap: 35px;
         margin-bottom: 40px
      }

      .partners-box__time-value {
         font-size: 18px;
         font-weight: var(--font-w5);
         line-height: 21.78px;
      }

      .partners-box__button {
         grid-template-columns: 1fr;
      }

      .partners-box__time-description {
         margin-top: 5px;
         font-size: 14px;
         line-height: 19.6px;
      }

      .partners-box .partners-slider {
         margin-top: 60px;
         gap: 10px;
      }

      .partners-box .partners-slider__slide {
         gap: 10px;
      }
   }
</style>