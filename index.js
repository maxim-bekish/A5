$(document).ready(function () {
   //$('.js-submitBtn').click(function () {
   //   var form = $(this).closest('.js-form');
   //   if (form[0].checkValidity()) {
   //      form.addClass('submitted');
   //   } else {
   //      form.removeClass('submitted').addClass('submitted-error');
   //   }
   //});
   //$('.js-submitBtn-popup-contacts').click(function () {
   //   var form = $('.js-myForm-popup-contacts');
   //   if (form[0].checkValidity()) {
   //      form.addClass('submitted');
   //   } else {
   //      form.removeClass('submitted').addClass('submitted-error');
   //   }
   //});
   //$('.js-submitBtn-popup-ask').click(function () {
   //   var form = $('.js-myForm-popup-ask');
   //   if (form[0].checkValidity()) {
   //      form.addClass('submitted');
   //   } else {
   //      form.removeClass('submitted').addClass('submitted-error');
   //   }
   //});

   $('.mobile__title .js-open-select').click(function () {
      $(this).find('.js-svg-upend').toggleClass('rt180');
      $('.mobile__list-content').toggleClass("mobile__title--open");
      $('.mobile__title p').toggleClass("mobile__title--closed");
   });

   $('.mobile__list-content--item').click(function () {
      $('.mobile__title .js-open-select').toggleClass('rt180');
      $('.mobile__list-content').toggleClass("mobile__title--open");
      $('.mobile__title p').text($(this).text());
      $('.mobile__title p').removeClass("mobile__title--closed");
   });

   $(window).on('load', function () {
      $(".loader-overlay").fadeOut("slow");
   });

   $(window).resize(function () {
      if ($(window).width() >= 768) {
         $('.burger-menu-box-item-row').find('svg').removeClass('rt180');
         $('.burger-menu-box-item-row').next('ul').removeAttr('style');
      }
      //updateSubsidiesText();
   });

   //function updateSubsidiesText() {
   //   if ($(window).width() <= 768) {
   //      $('.aside-bar__subsidies').text('Субсидиии малому');
   //   } else {
   //      $('.aside-bar__subsidies').text('Субсидиии малому и среднему бизнесу');
   //   }
   //}






   //$(".slider__custom").each(function () {
   //   const $sliderContainer = $(this).find(".slider__container");
   //   const $sliderBox = $(this).find(".slider__box");

   //   let slide = Number($sliderContainer.attr("data-slide"));
   //   let slider__slide = $(this).find(".slider__slide");
   //   let margin = 40;
   //   let subtractMargin = 40;

   //   if ($(window).width() <= 768) { margin = 10; subtractMargin = 10; slide -= 1 }
   //   if ($(window).width() <= 1280) { margin = 20; subtractMargin = 20 }

   //   if (slide > 0) {
   //      subtractMargin = (slide - 1) * subtractMargin;
   //   } else {
   //      subtractMargin = 0;
   //   }
   //   $sliderBox.css("height", slider__slide.outerHeight());
   //   slider__slide.css("marginRight", margin)
   //   slider__slide.css("width", ($sliderBox.outerWidth() - subtractMargin) / slide)
   //   const $slides = $sliderContainer.children();
   //   const slideCount = $slides.length;
   //   const slideWidth = Math.ceil(slider__slide.outerWidth(true));
   //   const step = -slideWidth;

   //   const timeAnimate = 700;



   //   let isAnimating = false;

   //   // Копируем первые два слайда и добавляем их в конец контейнера
   //   $slides.slice(0, 2).clone().appendTo($sliderContainer);
   //   // Копируем последние два слайда и добавляем их в начало контейнера
   //   $slides.slice(-2).clone().prependTo($sliderContainer);

   //   $sliderContainer.css("left", -slideWidth * 2 + "px");

   //   function prevSlide() {
   //      if (!isAnimating) {
   //         isAnimating = true;
   //         const currentLeft = parseInt($sliderContainer.css("left")) || 0;
   //         $sliderContainer.animate({ left: (currentLeft - step) + "px" }, timeAnimate, function () {
   //            if (parseInt($sliderContainer.css("left")) >= 0) {
   //               $sliderContainer.css("left", -slideCount * slideWidth + "px");
   //            }
   //            isAnimating = false;
   //         });
   //      }
   //   }

   //   function nextSlide() {
   //      if (!isAnimating) {
   //         isAnimating = true;
   //         const currentLeft = parseInt($sliderContainer.css("left")) || 0;
   //         $sliderContainer.animate({ left: (currentLeft + step) + "px" }, timeAnimate, function () {
   //            if (parseInt($sliderContainer.css("left")) <= -(slideCount + 1) * slideWidth) {
   //               $sliderContainer.css("left", -slideWidth + "px");
   //            }
   //            isAnimating = false;
   //         });
   //      }
   //   }

   //   $(this).find(".slider__button--prev").click(() => prevSlide());
   //   $(this).find(".slider__button--next").click(() => nextSlide());

   //   var hammer = new Hammer($sliderContainer[0]);
   //   hammer.get('swipe').set({ direction: Hammer.DIRECTION_HORIZONTAL });
   //   hammer.on("swiperight", () => prevSlide());
   //   hammer.on("swipeleft", () => nextSlide());
   //});

});



