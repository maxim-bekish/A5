$(document).ready(function () {
   let slideCount = Math.round($(".thanks-box .container-custom-slider").height());
   let step = -Math.round($(".thanks-box .custom-slide").height());
   let timeAnimate = 700;
   let isAnimating = false;

   $(".js-thanks-slider-prev").click(function () {
      if (!isAnimating) {
         isAnimating = true;
         let currentTop = parseInt($(".thanks-box .container-custom-slider").css("top")) || 0;
         if (currentTop >= 0) {
            $(".thanks-box .container-custom-slider").css("top", 0 + "px");
            isAnimating = false;
         } else {
            $(".thanks-box .container-custom-slider").animate({ top: (currentTop - step) + "px" }, timeAnimate, function () {
               isAnimating = false;
            });
         }
      }
   });

   $(".js-thanks-slider-next").click(function () {
      if (!isAnimating) {
         isAnimating = true;
         let currentTop = parseInt($(".thanks-box .container-custom-slider").css("top")) || 0;
         if (currentTop <= -slideCount + Math.abs(step)) {
            $(".thanks-box .container-custom-slider").css("top", 0 + "px");
            isAnimating = false;
         } else {
            $(".thanks-box .container-custom-slider").animate({ top: (currentTop + step) + "px" }, timeAnimate, function () {
               isAnimating = false;
            });
         }
      }
   });
});
