$(document).ready(function () {
   let slideCount = Math.round($(".partners-box .container-custom-slider").height());
   let step = -Math.round($(".partners-box .custom-slide").outerHeight());
   console.log($(".partners-box .custom-slide").height())
   let timeAnimate = 700;
   let isAnimating = false;

   $(".js-partners-slider-prev").click(function () {
      if (!isAnimating) {
         isAnimating = true;
         let currentTop = parseInt($(".partners-box .container-custom-slider").css("top")) || 0;
         if (currentTop >= 0) {
            $(".partners-box .container-custom-slider").css("top", 0 + "px");
            isAnimating = false;
         } else {
            $(".partners-box .container-custom-slider").animate({ top: (currentTop - step) + "px" }, timeAnimate, function () {
               isAnimating = false;
            });
         }
      }
   });

   $(".js-partners-slider-next").click(function () {
      if (!isAnimating) {
         isAnimating = true;
         let currentTop = parseInt($(".partners-box .container-custom-slider").css("top")) || 0;
         if (currentTop <= -slideCount + Math.abs(step)) {
            $(".partners-box .container-custom-slider").css("top", 0 + "px");
            isAnimating = false;
         } else {
            console.log(currentTop)
       
            $(".partners-box .container-custom-slider").animate({ top: (currentTop + step) + "px" }, timeAnimate, function () {
               isAnimating = false;
            });
         }
      }
   });
});
