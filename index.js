$(document).ready(function () {
   $('.js-popUp-submitBtn').click(function () {
      console.log(``)
      let form = $(this).closest('.js-popApp-OK');
      if (form[0].checkValidity()) {
         $('.popUp-end-box').css('display', 'block');
         $('.app').addClass('blurred');
         $('body').css('overflow', 'hidden');
         form.addClass('submitted').removeClass('submitted-error');
         form[0].reset();
         $('.sidebar-ask').removeClass('open');
         $('.sidebar').removeClass('open');
         console.log('submitted');
      } else {
         console.log('noo');
         form.removeClass('submitted').addClass('submitted-error');
      }

   });
   $('.js-popUp-closed').click(function () {
      $('.popUp-end-box').css('display', 'none');
   });

   $('.mobile__select .js-open-select').click(function () {
      $(this).find('.js-svg-upend').toggleClass('rt180');
      $('.mobile__list-content').toggleClass("mobile__title--open");
   });

   $('.mobile__list-content--item').click(function () {
      $('.mobile__select .js-open-select svg').toggleClass('rt180');
      $('.mobile__list-content').toggleClass("mobile__title--open");
      $('.mobile__title p').text($(this).text());
   });


   $(window).on('load', function () {
      console.log("Window loaded, fading out loader-overlay");
      $(".loader-overlay").fadeOut("slow");
   });

   // Если страница не загружена за 4 секунды, скрываем спиннер
   setTimeout(function () {
      console.log("4 seconds passed, fading out loader-overlay");
      $(".loader-overlay").fadeOut("slow");
   }, 4000);

   $(window).resize(function () {
      if ($(window).width() >= 768) {
         $('.burger-menu-box-item-row').find('svg').removeClass('rt180');
         $('.burger-menu-box-item-row').next('ul').removeAttr('style');
      }
   });

   $(document).on('click', function (e) {
      if (!$(e.target).attr('blurred')) {
         if (!$(e.target).closest('.closed-blurred').length &&
            !$(e.target).closest('.openPopUpButton').length &&
            !$(e.target).closest('.js-btn-footer').length &&
            !$(e.target).closest('.js-btn-production').length &&
            !$(e.target).closest('.partners-program__button').length &&
            !$(e.target).closest('.popUp-custom-box').length
         ) {
            $('.app').removeClass('blurred');
            $('body').css('overflow', 'auto');
         }
      }
   });
});



