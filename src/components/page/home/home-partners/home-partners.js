$(document).ready(function () {
   const container = $('#slides-container');
   const slidesPartners = Array.from(container.children());
   container.hide();

   function groupSlides() {
      const width = $(window).width();
      let groupSize;

      if (width >= 1280) {
         groupSize = 4;
      } else if (width >= 768) {
         groupSize = 3;
      } else {
         groupSize = 2;
      }

      const groupedSlidesContainer = $('#grouped-slides');
      groupedSlidesContainer.empty();

      for (let i = 0; i < slidesPartners.length; i += groupSize) {
         const slideGroup = slidesPartners.slice(i, i + groupSize);
         const groupDiv = $('<div>').addClass('partners-slider__slide');
         slideGroup.forEach(slide => groupDiv.append(slide));
         groupedSlidesContainer.append(groupDiv);
      }

      const lastGroup = groupedSlidesContainer.children().last();
      while (lastGroup && lastGroup.children().length < groupSize) {
         const placeholderDiv = $('<div>').addClass('slide-item').html(`
             <img src="<?php echo SVG_PATH . 'custom-slider/' . $placeholder['image']; ?>" alt="<?php echo $placeholder['alt']; ?>">
             <p><?php echo $placeholder['text']; ?></p>
         `);
         lastGroup.append(placeholderDiv);
      }
   }

   groupSlides();
   $(window).resize(groupSlides);

   let $partnersSliderContainer = $("#grouped-slides");
   let $partnersSlides = $partnersSliderContainer.children();
   let partnersSlideCount = $partnersSlides.length;
   let slideHeight = Math.ceil($(".partners-box .partners-slider__slide").outerHeight());

   let customSliderBox = $(".partners-box .slide-item img")[0];
   let rowHeight = customSliderBox.scrollHeight;
   $(".partners-box .partners-slider__box").css("height", `${rowHeight}px`);

   let stepPartners = -slideHeight;
   let timeAnimate = 700;
   let isAnimating = false;

   $partnersSlides.slice(0, 1).clone().appendTo($partnersSliderContainer);
   $partnersSlides.slice(-1).clone().prependTo($partnersSliderContainer);
   $partnersSliderContainer.css("top", -slideHeight + "px");

   function partnersPrevSlide() {
      if (!isAnimating) {
         isAnimating = true;
         let currentTop = parseInt($partnersSliderContainer.css("top")) || 0;
         $partnersSliderContainer.animate({
            top: (currentTop - stepPartners) + "px"
         }, timeAnimate, function () {
            if (parseInt($partnersSliderContainer.css("top")) >= 0) {
               $partnersSliderContainer.css("top", -partnersSlideCount * slideHeight + "px");
            }
            isAnimating = false;
         });
      }
   }
   function partnersNextSlide() {
      if (!isAnimating) {
         isAnimating = true;
         let currentTop = parseInt($partnersSliderContainer.css("top")) || 0;
         $partnersSliderContainer.animate({
            top: (currentTop + stepPartners) + "px"
         }, timeAnimate, function () {
            if (parseInt($partnersSliderContainer.css("top")) <= -(partnersSlideCount + 1) * slideHeight) {
               $partnersSliderContainer.css("top", -slideHeight + "px");
            }
            isAnimating = false;
         });
      }
   }

   $(".partners-box .js-partners-slider-prev").click(() => partnersPrevSlide());
   $(".partners-box .js-partners-slider-next").click(() => partnersNextSlide());

   var hammerPartners = new Hammer($partnersSliderContainer[0]);
   hammerPartners.get('swipe').set({
      direction: Hammer.DIRECTION_VERTICAL
   });
   hammerPartners.on("swipedown", function () {
      partnersPrevSlide();
   });
   hammerPartners.on("swipeup", function () {
      partnersNextSlide();
   });
});