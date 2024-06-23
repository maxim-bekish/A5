$(document).ready(function () {
   const $buttons = $('.leasing-guide__buttons .button');
   const $items = $('.leasing-guide__list .leasing-guide__item');
   $('.leasing-guide__mobile-title p').text($('.leasing-guide__button-active').text())
   $buttons.on('click', function () {
      const index = $(this).data('index');

      $buttons.removeClass('leasing-guide__button-active');
      $(this).addClass('leasing-guide__button-active');

      $items.each(function () {
         $(this).toggle($(this).data('index') === index);
      });
   });

   $('.leasing-guide__icon-down').click(function () {
      $(this).toggleClass('rt180');
      $(this).closest('.leasing-guide__list-title').next('.leasing-guide__text').toggleClass('open');
   });

   $('.leasing-guide__mobile-title .js-open-select').click(function () {
      $(this).toggleClass('rt180');
      $('.leasing-guide__buttons').toggleClass("leasing-guide__buttons--open");
      $('.leasing-guide__mobile-title p').toggleClass("leasing-guide__buttons--closed");

   });
   $('.leasing-guide__buttons--item').click(function () {
      $('.leasing-guide__mobile-title .js-open-select').toggleClass('rt180');
      $('.leasing-guide__buttons').toggleClass("leasing-guide__buttons--open");
      $('.leasing-guide__mobile-title p').text($(this).text());
      $('.leasing-guide__mobile-title p').removeClass("leasing-guide__buttons--closed");

   });



});
