<!--<link rel="stylesheet" href="/src/components/page/home/home-thanks/index.css">-->
<!--<script src="/src/components/page/home/home-thanks/index.js"></script>-->

<?php
$slides = [
   [
      "title" => "111 Свидетельство о членстве обьединенной лизинговой ассоциации",
      "date" => "2020",
      "image" => "logo1.svg",
      "text" => null,
      "href" => 'file.pdf'
   ],
   [
      "title" => "222 Благодарность от Объединенной лизинговой ассоциации",
      "date" => "2022",
      "image" => "logo1.svg",
      "text" => null,
      "href" => 'file.pdf'
   ],
   [
      "title" => "333 Свидетельство о членстве Ассоциаций кредитных организаций Тюменской области",
      "date" => "23.10.2023",
      "image" => null,
      "text" => "Ассоциация \n кредитных организаций \n тюменской области",
      "href" => 'file.pdf'
   ],
   [
      "title" => "444 Благодарственное письмо от ООО «Юнимед»",
      "date" => null,
      "image" => "logo4.png",
      "text" => null,
      "href" => 'file.pdf'
   ],
   [
      "title" => "555 Благодарственное письмо \n от ООО «СК Согласие»",
      "date" => null,
      "image" => "logo5.png",
      "text" => null,
      "href" => 'file.pdf'
   ],
];
?>

<section class="thanks-box mt-160px container">
   <h3 class="thanks-box__title title-page-h3">Благодарности и сертификаты</h3>
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
                     <?php if ($slide['title']): ?>
                        <p class="slider__title"><?php echo htmlspecialchars($slide['title']); ?></p>
                     <?php endif; ?>
                     <?php if ($slide['date']): ?>
                        <p class="slider__date"><?php echo htmlspecialchars($slide['date']); ?></p>
                     <?php endif; ?>
                  </div>
                  <div class="slider__main">
                     <?php if ($slide['image']): ?>
                        <img class="slider__image"
                           src="<?php echo SVG_PATH . 'slider-thanks/' . htmlspecialchars($slide['image']); ?>"
                           alt="<?php echo htmlspecialchars($slide['title']); ?>">
                     <?php endif; ?>
                     <?php if ($slide['text']): ?>
                        <p class="slider__text"><?php echo nl2br(htmlspecialchars($slide['text'])); ?></p>
                     <?php endif; ?>
                  </div>
                  <a class="slider__link" target="_blank" href="<?php echo htmlspecialchars($slide['href']); ?>">
                     <svg class="slider__pointer" width="50" height="50" viewBox="0 0 50 50" fill="none">
                        <use href="<?php echo SVG_PATH; ?>icons.svg#icon-eye"></use>
                     </svg>
                     <svg class="slider__pointer--hover" width="50" height="50" viewBox="0 0 50 50" fill="none">
                        <use href="<?php echo SVG_PATH; ?>icons.svg#icon-eye-hover"></use>
                     </svg>
                  </a>
               </div>
            <?php endforeach; ?>
         </div>
      </div>
   </section>
</section>

<style>
   .slider__pointer--hover,
   .slider__link:hover .slider__pointer {
      display: none;
   }

   .slider__link:hover .slider__pointer--hover {
      display: block;
   }

   .thanks-box {
      display: flex;
      flex-direction: column;
      gap: 40px;
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

   .thanks-box .slider {
      display: flex;
      flex-direction: column-reverse;
      align-items: flex-end;
      gap: 20px;
   }

   .slider__box {
      position: relative;
      height: 360px;
      width: 100%;
      overflow: hidden;
   }

   .slider__container {
      position: absolute;
      top: 0px;
      display: flex;
      /*gap: 40px;*/
   }

   .slider__slide {
      width: 560px;
      height: 360px;
      display: flex;
      flex-direction: column;
      padding: 35px 20px;
      position: relative;
      margin-right: 40px;
      background-color: var(--back-gray-light);
   }

   .slider__title {
      font-family: var(--font-inter);
      font-size: 24px;
      font-weight: 500;
      line-height: 33.6px;
      color: rgba(81, 81, 81, 1);
   }

   .slider__main {
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
   }

   .slider__date {
      font-family: var(--font-inter);
      font-size: 16px;
      font-weight: 400;
      line-height: 16.65px;
      color: rgba(151, 151, 151, 1);
   }

   .slider__image {
      max-height: 162px;
      width: 100%;
      height: 100%;
      object-fit: none;
   }

   .slider__text {
      text-transform: uppercase;
      font-family: Arial;
      font-size: 24px;
      font-style: italic;
      font-weight: 400;
      line-height: 24.98px;
      color: rgba(0, 69, 178, 1);
   }

   .slider__link {
      height: 50px;
      width: 50px;
      bottom: 20px;
      right: 20px;
      position: absolute;
   }

   @media(max-width:768px) {
      .thanks-box {
         display: none;
      }
   }

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
      const $sliderContainer = $(".thanks-box .slider__container");
      const $slides = $sliderContainer.children();
      const slideCount = $slides.length;
      const slideWidth = Math.ceil($(".thanks-box .slider__slide").outerWidth()) + 40;
      const step = -slideWidth;
      const timeAnimate = 700;
      let isAnimating = false;

      // Копируем первые два слайда и добавляем их в конец контейнера
      $slides.slice(0, 2).clone().appendTo($sliderContainer);
      // Копируем последние два слайда и добавляем их в начало контейнера
      $slides.slice(-2).clone().prependTo($sliderContainer);

      $sliderContainer.css("left", -slideWidth * 2 + "px");

      $(".slider__button--prev").click(function () {
         if (!isAnimating) {
            isAnimating = true;
            const currentLeft = parseInt($sliderContainer.css("left")) || 0;
            $sliderContainer.animate({ left: (currentLeft - step) + "px" }, timeAnimate, function () {
               if (parseInt($sliderContainer.css("left")) >= 0) {
                  $sliderContainer.css("left", -slideCount * slideWidth + "px");
               }
               isAnimating = false;
            });
         }
      });

      $(".slider__button--next").click(function () {
         if (!isAnimating) {
            isAnimating = true;
            const currentLeft = parseInt($sliderContainer.css("left")) || 0;
            $sliderContainer.animate({ left: (currentLeft + step) + "px" }, timeAnimate, function () {
               if (parseInt($sliderContainer.css("left")) <= -(slideCount + 1) * slideWidth) {
                  $sliderContainer.css("left", -slideWidth + "px");
               }
               isAnimating = false;
            });
         }
      });
   });

</script>