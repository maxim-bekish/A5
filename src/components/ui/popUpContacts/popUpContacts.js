
$(document).ready(function () {
   $('.open-button-contact').on('click', function () {
      $('.sidebar').addClass('open');
      $('.app').addClass('blurred');
      $('body').css('overflow', 'hidden');
   });

   $('.popup-contacts-closed').on('click', function () {
      $('.sidebar').removeClass('open');
      $('.app').removeClass('blurred');
      $('body').css('overflow', 'auto');
   });
});
