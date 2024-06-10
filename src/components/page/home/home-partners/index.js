$(document).ready(function () {
   let slideCount = Math.round($(".partners-box .custom-slider__container").height());
   let step = -Math.round($(".partners-box .custom-slider__slide").outerHeight());
   let timeAnimate = 700;
   let isAnimating = false;

   $(".js-partners-slider-prev").click(function () {
      if (!isAnimating) {
         isAnimating = true;
         let currentTop = parseInt($(".partners-box .custom-slider__container").css("top")) || 0;
         if (currentTop >= 0) {
            $(".partners-box .custom-slider__container").css("top", 0 + "px");
            isAnimating = false;
         } else {
            $(".partners-box .custom-slider__container").animate({ top: (currentTop - step) + "px" }, timeAnimate, function () {
               isAnimating = false;
            });
         }
      }
   });

   $(".js-partners-slider-next").click(function () {
      if (!isAnimating) {
         isAnimating = true;
         let currentTop = parseInt($(".partners-box .custom-slider__container").css("top")) || 0;
         if (currentTop <= -slideCount + Math.abs(step)) {
            $(".partners-box .custom-slider__container").css("top", 0 + "px");
            isAnimating = false;
         } else {
            $(".partners-box .custom-slider__container").animate({ top: (currentTop + step) + "px" }, timeAnimate, function () {
               isAnimating = false;
            });
         }
      }
   });
});
