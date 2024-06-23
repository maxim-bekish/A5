




$(document).ready(function () {
   const $sliderContainer = $(".clients__slider .slider__container");
   const $slides = $sliderContainer.children();
   const slideCount = $slides.length;
   const slideWidth = Math.ceil($(".clients__slider .slider__slide").outerWidth(true)) ;
   const step = -slideWidth;
   const timeAnimate = 700;
   let isAnimating = false;

   // Копируем первые два слайда и добавляем их в конец контейнера
   $slides.slice(0, 2).clone().appendTo($sliderContainer);
   // Копируем последние два слайда и добавляем их в начало контейнера
   $slides.slice(-2).clone().prependTo($sliderContainer);

   $sliderContainer.css("left", -slideWidth * 2 + "px");

   $(".clients__slider .slider__button--prev").click(function () {
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

   $(".clients__slider  .slider__button--next").click(function () {
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

