$(document).ready(function () {
   let slideCount = $(".thanks-box .slider__slide").length - 3; // 5 - 2
   let slideWidth = $(".thanks-box .slider__slide").outerWidth() + 40; //560 + 40
   let timeAnimate = 700;
   let isAnimating = false;
console
   $(".slider__button--prev").click(function () {
      if (!isAnimating) {
         isAnimating = true;
         let currentLeft = parseInt($(".thanks-box .slider__container").css("left")) || 0;
         if (currentLeft >= 0) {
            $(".thanks-box .slider__container").css("left", 0 + "px");
            isAnimating = false;
         } else {
            $(".thanks-box .slider__container").animate({ left: (currentLeft + slideWidth) + "px" }, timeAnimate, function () {
               isAnimating = false;
            });
         }
      }
   });

   $(".slider__button--next").click(function () {
      if (!isAnimating) {
         isAnimating = true;
         let currentLeft = parseInt($(".thanks-box .slider__container").css("left")) || 0;
         console.log(currentLeft)
         if (currentLeft <= -((slideCount - 1) * slideWidth)) {
            $(".thanks-box .slider__container").css("left", 0 + "px");
            isAnimating = false;
         } else {
            $(".thanks-box .slider__container").animate({ left: (currentLeft - slideWidth) + "px" }, timeAnimate, function () {
               isAnimating = false;
            });
         }
      }
   });
});
