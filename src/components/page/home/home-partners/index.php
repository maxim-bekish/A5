<?php
$slides = array(
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
   <div class="partners-box__up">
      <p class="partners-box__title">Партнеры</p>
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
               <p class="partners-box__time-value">В течение 2-х дней</p>
               <p class="partners-box__time-description">будет заключён договор.</p>
            </div>
         </div>
         <button type="button" class="partners-box__button button button--blue">Подобрать</button>
      </div>
   </div>
   <section class="custom-slider">
      <div class="custom-slider__buttons">
         <button class="custom-slider__button js-partners-slider-prev button--visible" type="button">
            <svg class="custom-slider__icon" width="50" height="50" viewBox="0 0 50 50">
               <use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-left-circle"></use>
            </svg>
         </button>
         <button class="custom-slider__button js-partners-slider-next button--visible" type="button">
            <svg class="custom-slider__icon" width="50" height="50" viewBox="0 0 50 50">
               <use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-left-circle"></use>
            </svg>
         </button>
      </div>
      <div class="custom-slider__box">
         <div class="custom-slider__container">
            <?php
            // Разбиваем массив $slides на части по 4 элемента
            $chunkedSlides = array_chunk($slides, 4);
            // Определяем заглушку
            $placeholder = array(
               "image" => "placeholder.svg",
               "alt" => "Placeholder",
               "text" => "This is a placeholder"
            );
            // Перебираем каждую часть (группу из 4 слайдов)
            foreach ($chunkedSlides as $slideChunk) {
               // Начинаем блок слайда
               echo '<div class="custom-slider__slide">';
               // Добавляем заглушки, если в группе меньше 4 слайдов
               while (count($slideChunk) < 4) {
                  $slideChunk[] = $placeholder;
               }
               // Перебираем каждый слайд внутри текущей группы
               foreach ($slideChunk as $slide) {
                  // Выводим изображение с соответствующим атрибутом alt
                  echo '<div class="slide-item">';
                  echo '<img src="' . SVG_PATH . 'custom-slider/' . $slide["image"] . '" alt="' . $slide["alt"] . '">';
                  // Выводим текст в теге <p>
                  echo '</div>';
               }
               // Заканчиваем блок слайда
               echo '</div>';
            }
            ?>
         </div>
      </div>
   </section>
</section>



<style>
   .partners-box__content {
      display: flex;
      flex-direction: column;
   }

   .slide-item img {
      width: 100%;
   }

   .slide-item {
      background: rgba(242, 242, 242, 1);
      width: 410px;
      display: flex;
      flex-direction: column;
   }

   .partners-box__up {
      display: flex;
      column-gap: 40px;
      row-gap: 20px;
   }

   .partners-box__time-value {
      font-size: 24px;
      font-weight: 400;
      line-height: 29.04px;
   }

   .partners-box__title {
      margin-top: 14px;
      min-width: 410px;
      font-size: 20px;
      font-weight: 400;
      line-height: 20.82px;
      text-align: left;
   }

   .partners-box__text {
      font-family: var(--font-inter);
      font-size: 24px;
      font-weight: 400;
      line-height: 29.04px;
      color: var(--text-gray-dark);
      margin: 30px 0 40px 0;
   }

   .custom-slider__icon {
      fill: #fff;
      stroke: #0045B2;
      transition: all 200ms ease;
   }

   .custom-slider__button:hover .custom-slider__icon {
      fill: #0045B2;
      stroke: #fff;
      transition: all 200ms ease;
   }


   .partners-box__time {
      display: flex;
      gap: 40px;
      margin-bottom: 60px;
   }

   .partners-box__time-item {
      width: 410px;
   }

   .partners-box__time-description {
      margin-top: 10px;
      font-size: 18px;
      line-height: 21.78px;
   }

   .partners-box__button {
      max-width: 410px;
   }


   .custom-slider__buttons {
      display: flex;
      gap: 20px;
      max-width: 120px;
   }

   .custom-slider__button {
      width: 50px;
      height: 50px;
   }

   .custom-slider__button:last-child {
      transform: rotate(180deg);
   }

   .custom-slider {
      display: flex;
      flex-direction: column;
      gap: 20px;
   }

   .custom-slider--reverse {
      flex-direction: column-reverse;
      align-items: end;
   }

   .custom-slider__box {
      position: relative;
      height: 410px;
      width: 100%;
      overflow: hidden;
   }

   .custom-slider__container {
      position: absolute;
      top: 0px;
      width: 100%;
      display: flex;
      flex-direction: column;
   }

   .custom-slider__slide {
      width: 100%;
      display: flex;
      grid-template-columns: 1fr 1fr;
      grid-template-rows: 1fr 1fr;
      gap: 40px;
      width: 100%;
      height: 410px;

   }
</style>


<script>
   $(document).ready(function () {
      // Объявление переменных
      let $sliderContainer = $(".partners-box .custom-slider__container"); // Селектор контейнера слайдера
      let $slides = $sliderContainer.children(); // Получаем все слайды
      let slideCount = $slides.length; // Количество слайдов
      let slideHeight = $(".partners-box .custom-slider__slide").outerHeight(); // Высота одного слайда
      let step = -slideHeight; // Шаг анимации (высота одного слайда)
      let timeAnimate = 700; // Длительность анимации в миллисекундах
      let isAnimating = false; // Флаг для предотвращения многократного нажатия

      // Клонируем последний слайд и вставляем его перед первым, чтобы создать бесшовную прокрутку
      $slides.first().before($slides.last().clone());
      // Клонируем первый слайд и вставляем его после последнего, чтобы создать бесшовную прокрутку
      $slides.last().after($slides.first().clone());

      // Устанавливаем начальное положение контейнера на высоту одного слайда вверх
      $sliderContainer.css("top", -slideHeight + "px");

      // Обработчик события для кнопки "предыдущий слайд"
      $(".js-partners-slider-prev").click(function () {
         if (!isAnimating) { // Проверяем, не идет ли сейчас анимация
            isAnimating = true; // Устанавливаем флаг анимации
            let currentTop = parseInt($sliderContainer.css("top")) || 0; // Текущее положение контейнера
            $sliderContainer.animate({ top: (currentTop - step) + "px" }, timeAnimate, function () { // Анимируем перемещение вверх на шаг
               if (parseInt($sliderContainer.css("top")) >= 0) { // Если достигли верхней границы
                  // Перемещаем контейнер на последнее положение, чтобы создать бесшовный эффект
                  $sliderContainer.css("top", -slideCount * slideHeight + "px");
               }
               isAnimating = false; // Сбрасываем флаг анимации
            });
         }
      });

      // Обработчик события для кнопки "следующий слайд"
      $(".js-partners-slider-next").click(function () {
         if (!isAnimating) { // Проверяем, не идет ли сейчас анимация
            isAnimating = true; // Устанавливаем флаг анимации
            let currentTop = parseInt($sliderContainer.css("top")) || 0; // Текущее положение контейнера
            $sliderContainer.animate({ top: (currentTop + step) + "px" }, timeAnimate, function () { // Анимируем перемещение вниз на шаг
               if (parseInt($sliderContainer.css("top")) <= -(slideCount + 1) * slideHeight) { // Если достигли нижней границы
                  // Перемещаем контейнер на начальное положение, чтобы создать бесшовный эффект
                  $sliderContainer.css("top", -slideHeight + "px");
               }
               isAnimating = false; // Сбрасываем флаг анимации
            });
         }
      });
   });

</script>