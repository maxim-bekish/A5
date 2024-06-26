$(document).ready(function () {
   $('.js-submitBtn').click(function () {
      var form = $('.js-myForm');
      if (form[0].checkValidity()) {
         form.addClass('submitted');
      } else {
         form.removeClass('submitted').addClass('submitted-error');
      }
   });
   $('.js-submitBtn-popup-contacts').click(function () {
      var form = $('.js-myForm-popup-contacts');
      if (form[0].checkValidity()) {
         form.addClass('submitted');
      } else {
         form.removeClass('submitted').addClass('submitted-error');
      }
   });
   $('.js-submitBtn-popup-ask').click(function () {
      var form = $('.js-myForm-popup-ask');
      if (form[0].checkValidity()) {
         form.addClass('submitted');
      } else {
         form.removeClass('submitted').addClass('submitted-error');
      }
   });

   $('.js-open-select').click(function () {
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



   $(window).resize(function () {
      if ($(window).width() >= 360) {
         $('.burger-menu-box-item-row').find('svg').removeClass('rt180');
         $('.burger-menu-box-item-row').next('ul').removeAttr('style');
      }
   });
});



