$(document).ready(function () {
   const $buttons = $('.leasing-guide__button');
   const $items = $('.leasing-guide__list .leasing-guide__item');

   $buttons.on('click', function () {
      const index = $(this).data('index');

      $buttons.removeClass('leasing-guide__button-active');
      $(this).addClass('leasing-guide__button-active');

      $items.each(function () {
         $(this).toggle($(this).data('index') === index);
      });
   });

   $('.leasing-guide__icon-down').click(function () {
      $(this).find('.js-svg-upend').toggleClass('rt180');
      $(this).closest('.leasing-guide__list-title').next('.leasing-guide__text').toggleClass('open');
   });


   $('.mobile__title p').text($('.leasing-guide__button-active').text())

   //$('.js-open-select').click(function () {
   //   $(this).find('.js-svg-upend').toggleClass('rt180');
   //   $('.mobile__list-content').toggleClass("mobile__title--open");
   //   $('.mobile__title p').toggleClass("mobile__title--closed");
   //});

   //$('.mobile__list-content--item').click(function () {
   //   $('.mobile__title .js-open-select').toggleClass('rt180');
   //   $('.mobile__list-content').toggleClass("mobile__title--open");
   //   $('.leasing-guide .mobile__title p').text($(this).text());
   //   $('.leasing-guide .mobile__title p').removeClass("mobile__title--closed");
   //});



});
