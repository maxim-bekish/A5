$(document).ready(function () {
   function debounce(func, wait, immediate) {
      var timeout;
      return function () {
         var context = this, args = arguments;
         var later = function () {
            timeout = null;
            if (!immediate) func.apply(context, args);
         };
         var callNow = immediate && !timeout;
         clearTimeout(timeout);
         timeout = setTimeout(later, wait);
         if (callNow) func.apply(context, args);
      };
   }

   function updateSlider() {
      $(".slider__custom").each(function () {

         const $sliderContainer = $(this).find(".slider__container");
         const $sliderBox = $(this).find(".slider__box");
         const $sliderSlides = $(this).find(".slider__slide");

         let slide = Number($sliderContainer.attr("data-slide"));
         let margin = 40;
         let subtractMargin = 40;

         if ($(window).width() <= 1280) {
            margin = 20;
            subtractMargin = 20;
         }
         if ($(window).width() <= 768) {
            margin = 10;
            subtractMargin = 10;
            slide -= 1;
         }
         if ($(window).width() <= 0) {
            if ($(this).closest('.thanks-box')) {
               slide = 1;
            }
         }
         if ($(window).width() <= 430) {
            margin = 10;
            subtractMargin = 10;
            slide -= 2;
         }
         if (slide > 0) {
            subtractMargin = (slide - 1) * subtractMargin;
         } else {
            slide = 1
            subtractMargin = 0;
         }

         $sliderBox.css("height", $sliderSlides.outerHeight());
         $sliderSlides.css("marginRight", margin);
         $sliderSlides.css("width", ($sliderBox.outerWidth() - subtractMargin) / slide);

         const $slides = $sliderContainer.children();
         const slideCount = $slides.length;
         const slideWidth = Math.ceil($sliderSlides.outerWidth(true));
         const step = -slideWidth;
         const timeAnimate = 700;

         let isAnimating = false;

         $slides.slice(0, 2).clone().appendTo($sliderContainer);
         $slides.slice(-2).clone().prependTo($sliderContainer);
         $sliderContainer.css("left", -slideWidth * 2 + "px");

         function prevSlide() {
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
         }

         function nextSlide() {
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
         }

         $(this).find(".slider__button--prev").off('click').on('click', prevSlide);
         $(this).find(".slider__button--next").off('click').on('click', nextSlide);

         var hammer = new Hammer($sliderContainer[0]);
         hammer.get('swipe').set({ direction: Hammer.DIRECTION_HORIZONTAL });
         hammer.off('swiperight').on('swiperight', prevSlide);
         hammer.off('swipeleft').on('swipeleft', nextSlide);
      });
   }
   updateSlider()
   var debouncedUpdateSlider = debounce(updateSlider, 400);

   $(window).on('resize', debouncedUpdateSlider).trigger('resize');
});
