<?php
$slidesClients = [
   [
      "image" => "ats-1.png",
      "name" => "ООО «АТС» — многопрофильная компания, активно развивающая сферу электроэнергетики, а также занимающаяся строительством буровых установок /n и крупногабаритными перевозками. Техника и оборудование являются решающими инструментами в развитии ООО «АТС», поэтому они обратились к нам.",
      "description" => "Мы передали в лизинг модульную транспортную систему Goldhofer  /n из Германии, её грузоподъёмность составляет до 600 тонн.",

   ],
   [
      "image" => "novec-2.png",
      "name" => "ООО «Новэк» — компания, которая занимается сбором неопасных отходов и участвует в нацпроекте «Экология».",
      "description" => "Мы передали в лизинг ООО «Новэк» оборудование для развития значимого инвестиционного проекта Тюменской области.",

   ],
   [
      "image" => "med-3.png",
      "name" => "Медицинский центр «ЮниМед» — популярный в Тюмени многопрофильный центр, предоставляющий большой спектр медицинских услуг.",
      "description" => "Для одного из новых отделений мы осуществили поставку и передачу комплекса оборудования, чем обеспечили непрерывное развитие центра.",
   ],
   [
      "image" => "GPKiO-4.png",
      "name" => "ООО «ГПКиО» — компания, организовавшая и обслуживающая один из самых популярных парков развлечений на Цветном бульваре.",
      "description" => "Мы вместе с компанией создаем настроение праздника для жителей и гостей Тюмени: передаём в лизинг аттракционы и вспомогательную технику.
",
   ],
   [
      "image" => "kascad-5.png",
      "name" => "ООО «Каскад Строй Групп» — московская компания, занимающаяся строительством жилых и нежилых зданий.",
      "description" => "Благодаря нашему сотрудничеству осуществилось несколько проектов 
по строительству многоквартирных жилых домов в Москве и Московской области.",
   ],
   [
      "image" => null,
      "name" => "ООО «АйТи Лайт» — московская компания, которая занимается IT-сопровождением, с базой клиентов более 30 тыс.",
      "description" => "Мы сотрудничали с «АйТи Лайт» и передали ей в лизинг передовое IT-оборудование: ПК, системы безопасности и хранения данных, серверы, комплектующие и т.д.",
   ],
   [
      "image" => "nikitino-7.png",
      "name" => "ООО «Никитино» — нижегородская компания, которая занимается разведением крупнорогатого скота, производством молока и другой сельскохозяйственной деятельностью.",
      "description" => "Мы передали компании в лизинг более 50 единиц сельскохозяйственной техники.",
   ],
];
?>


<section class="partners container mt-160px">

   <div class="partners__title">
      <p>Клиенты</p>
   </div>

   <div class="partners__slider">
      <div class="slider__box">
         <div class="slider__container">
            <?php foreach ($slidesClients as $slide): ?>
               <div class="slider__slide">
                  <p class="dop-info">Подробнее</p>
                  <div class="slider__slide--front">
                     <img class="slider__image"
                        src="<?php echo IMG_PATH . 'slider-clients/' . (!empty($slide['image']) ? htmlspecialchars($slide['image']) : 'placeholder.png'); ?>"
                        alt="logo">
                  </div>
                  <div class="slider__slide--back">
                     <p class="slider__text"><?php echo nl2br(htmlspecialchars($slide['name'])); ?></p>
                     <p class="slider__text"><?php echo nl2br(htmlspecialchars($slide['description'])); ?></p>
                  </div>
               </div>
            <?php endforeach; ?>
         </div>
      </div>
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
   </div>

</section>


<style>
   .partners {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      grid-template-rows: 1fr;
      grid-column-gap: 40px;
      grid-row-gap: 0px;
   }

   .partners__title {
      grid-area: 1 / 1 / 2 / 2;
   }

   .partners__title p {
      font-size: 20px;
   }

   .partners__slider {
      display: flex;
      grid-area: 1 / 2 / 2 / 5;
      flex-direction: column;
      gap: 20px;
      align-items: flex-end;
   }

   .partners__slider .slider__buttons {
      display: flex;
      gap: 20px;
      max-width: 120px;
   }

   .partners__slider .slider__button {
      width: 50px;
      height: 50px;
   }

   .partners__slider .slider__button--next {
      transform: rotate(180deg);
   }

   .partners__slider .slider__icon {
      fill: #fff;
      stroke: #0045B2;
      transition: all 200ms ease;
   }

   .partners__slider .slider__button:hover .slider__icon {
      fill: #0045B2;
      stroke: #fff;
      --stroke-width: 0;
      --circle-radius: 25;
      transition: all 200ms ease;
   }

   .partners__slider .slider__box {
      position: relative;
      height: 410px;
      width: 100%;
      overflow: hidden;
   }

   .partners__slider .slider__container {
      position: absolute;
      top: 0px;
      display: flex;
      height: 100%;
   }

   .partners__slider .slider__slide--back {
      display: flex;
      padding: 40px;
      gap: 20px;
      flex-direction: column;
      z-index: 1;
      transform: rotateY(180deg);
      opacity: 0;
   }


   .partners__slider .slider__slide--front {
      z-index: 2;
   }

   .partners__slider .slider__slide--front,
   .partners__slider .slider__slide--back {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      backface-visibility: hidden;
      transition: transform 0.6s ease, opacity 0.6s ease;
   }


   .partners__slider .dop-info:hover~.slider__slide--front {
      transform: rotateY(180deg);
      opacity: 0;
   }

   .partners__slider .dop-info:hover~.slider__slide--back {
      transform: rotateY(0);
      opacity: 1;
   }

   .partners__slider .dop-info {
      line-height: 21.78px;
      color: rgba(151, 151, 151, 1);
      text-decoration: underline;
      position: absolute;
      bottom: 20px;
      right: 20px;
      z-index: 99;
      cursor: pointer;
   }

   .partners__slider .slider__slide {
      width: 635px;
      height: 100%;
      display: flex;
      flex-direction: column;
      position: relative;
      margin-right: 40px;
      background-color: var(--back-gray-light);
      justify-content: flex-start;
      align-items: center;
      overflow: hidden;
   }

   .partners__slider .slider__image {
      width: 100%;
      height: 100%;
      object-fit: none;
   }

   .partners__slider .slider__text {
      font-size: 20px;
      line-height: 32px;
   }
</style>


<script>



   $(document).ready(function () {
      const $sliderContainer = $(".partners__slider .slider__container");
      const $slides = $sliderContainer.children();
      const slideCount = $slides.length;
      const slideWidth = Math.ceil($(".partners__slider .slider__slide").outerWidth()) + 40;
      const step = -slideWidth;
      const timeAnimate = 700;
      let isAnimating = false;

      // Копируем первые два слайда и добавляем их в конец контейнера
      $slides.slice(0, 2).clone().appendTo($sliderContainer);
      // Копируем последние два слайда и добавляем их в начало контейнера
      $slides.slice(-2).clone().prependTo($sliderContainer);

      $sliderContainer.css("left", -slideWidth * 2 + "px");

      $(".partners__slider .slider__button--prev").click(function () {
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

      $(".partners__slider  .slider__button--next").click(function () {
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