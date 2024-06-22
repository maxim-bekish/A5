
$(document).ready(function () {
   const container = $('#slides-container');
   const slides = Array.from(container.children());
   container.hide();

   function groupSlides() {
      const width = $(window).width();
      let groupSize;

      if (width >= 1280) {
         groupSize = 4; // 4 слайда на большие экраны
      } else if (width >= 768) {
         groupSize = 3; // 3 слайда на средние экраны
      } else {
         groupSize = 2; // 2 слайда на малые экраны
      }

      const groupedSlidesContainer = $('#grouped-slides');
      groupedSlidesContainer.empty();

      for (let i = 0; i < slides.length; i += groupSize) {
         const slideGroup = slides.slice(i, i + groupSize);
         const groupDiv = $('<div>').addClass('custom-slider__slide');
         slideGroup.forEach(slide => groupDiv.append(slide));
         groupedSlidesContainer.append(groupDiv);
      }

      // Добавляем заглушки, если в последней группе меньше слайдов, чем требуется
      const lastGroup = groupedSlidesContainer.children().last();
      while (lastGroup && lastGroup.children().length < groupSize) {
         const placeholderDiv = $('<div>').addClass('slide-item').html(`
               <img src="<?php echo SVG_PATH . 'custom-slider/' . $placeholder['image']; ?>" alt="<?php echo $placeholder['alt']; ?>">
               <p><?php echo $placeholder['text']; ?></p>
            `);
         lastGroup.append(placeholderDiv);
      }
   }

   groupSlides(); // вызываем при загрузке страницы
   $(window).resize(groupSlides);

   let $sliderContainer = $("#grouped-slides"); // Изменение селектора на новый контейнер
   let $slides = $sliderContainer.children(); // Получаем все слайды
   let slideCount = $slides.length; // Количество слайдов
   let slideHeight = Math.ceil($(".partners-box .custom-slider__slide").outerHeight()); // Высота одного слайда

   let customSliderBox = $(".partners-box .slide-item img")[0];
   let rowHeight = customSliderBox.scrollHeight;
   $(".partners-box .custom-slider__box").css("height", `${rowHeight}px`);

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
         $sliderContainer.animate({
            top: (currentTop - step) + "px"
         }, timeAnimate, function () { // Анимируем перемещение вверх на шаг
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
         $sliderContainer.animate({
            top: (currentTop + step) + "px"
         }, timeAnimate, function () { // Анимируем перемещение вниз на шаг
            if (parseInt($sliderContainer.css("top")) <= -(slideCount + 1) * slideHeight) { // Если достигли нижней границы
               // Перемещаем контейнер на начальное положение, чтобы создать бесшовный эффект
               $sliderContainer.css("top", -slideHeight + "px");
            }
            isAnimating = false; // Сбрасываем флаг анимации
         });
      }
   });
});
