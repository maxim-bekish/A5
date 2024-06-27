$(document).ready(function () {
   const $sliderContainer = $(".team-slider .slider__container");
   const $slides = $sliderContainer.children(".slider__slide");
   const slideCount = $slides.length;
   const slideWidth = Math.ceil($(".team-slider .slider__slide").outerWidth(true));
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
      const currentSlides = $sliderContainer.children(".slider__slide");
      currentSlides.removeClass('first-visible');
      const images = currentSlides.find('.slider__header .slider__image');
      images.css('height', '80%'); // Устанавливаем height для всех изображений

      const currentLeft = parseInt($sliderContainer.css("left")) || 0;
      const firstVisibleIndex = Math.abs(currentLeft) / slideWidth; // Индекс первого видимого слайда

      const firstVisibleSlide = $(currentSlides[firstVisibleIndex]);
      firstVisibleSlide.addClass('first-visible');
      firstVisibleSlide.find('.slider__header .slider__image').css('height', '100%'); // Устанавливаем height для первого видимого изображения

      // Обновляем содержимое .slider__main
      const title = firstVisibleSlide.data('title');
      const description = firstVisibleSlide.data('description');
      $(".slider__main .slider__title").text(title);
      $(".slider__main .slider__description").text(description);
   }

   updateFirstVisibleSlide();
   function prevSlide() {
      if (!isAnimating) {
         isAnimating = true;
         const currentLeft = parseInt($sliderContainer.css("left")) || 0;
         const newLeft = currentLeft - step;
         const currentSlide = $sliderContainer.children().eq(Math.abs(currentLeft / slideWidth)); // Текущий первый видимый слайд
         const nextSlide = $sliderContainer.children().eq(Math.abs(newLeft / slideWidth));

         currentSlide.find('.slider__header .slider__image').animate({
            height: '80%'
         }, timeAnimate); // Плавное изменение height текущего слайда
         nextSlide.find('.slider__header .slider__image').css('height', '80%'); // Начальное состояние изображения

         $sliderContainer.animate({
            left: newLeft + "px"
         }, timeAnimate, function () {
            if (parseInt($sliderContainer.css("left")) >= 0) {
               $sliderContainer.css("left", -slideCount * slideWidth + "px");
            }
            updateFirstVisibleSlide();
            isAnimating = false;
         });

         nextSlide.find('.slider__header .slider__image').animate({
            height: '100%'
         }, timeAnimate); // Плавное изменение height
      }
   }
   function nextSlide() {
      if (!isAnimating) {
         isAnimating = true;
         const currentLeft = parseInt($sliderContainer.css("left")) || 0;
         const newLeft = currentLeft + step;
         const currentSlide = $sliderContainer.children().eq(Math.abs(currentLeft / slideWidth)); // Текущий первый видимый слайд
         const nextSlide = $sliderContainer.children().eq(Math.abs(newLeft / slideWidth));

         currentSlide.find('.slider__header .slider__image').animate({
            height: '80%'
         }, timeAnimate); // Плавное изменение height текущего слайда
         nextSlide.find('.slider__header .slider__image').css('height', '80%'); // Начальное состояние изображения

         $sliderContainer.animate({
            left: newLeft + "px"
         }, timeAnimate, function () {
            if (parseInt($sliderContainer.css("left")) <= -(slideCount + 1) * slideWidth) {
               $sliderContainer.css("left", -slideWidth + "px");
            }
            updateFirstVisibleSlide();
            isAnimating = false;
         });

         nextSlide.find('.slider__header .slider__image').animate({
            height: '100%'
         }, timeAnimate); // Плавное изменение height
      }
   }
   $(".team-slider .slider__button--prev").click(() => prevSlide());

   $(".team-slider .slider__button--next").click(() => nextSlide());
   var hammer = new Hammer($sliderContainer[0]);

   hammer.get('swipe').set({ direction: Hammer.DIRECTION_HORIZONTAL });
   hammer.on("swiperight", () => prevSlide());
   hammer.on("swipeleft", () => nextSlide());
});
