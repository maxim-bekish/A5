
$(document).ready(function () {
   $('.open-button-ask').on('click', function () {
      $('.sidebar-ask').addClass('open');
      $('.app').addClass('blurred');
      $('body').css('overflow', 'hidden');
   });

   $('.popUp__sidebar-closed').on('click', function () {
      $('.sidebar-ask').removeClass('open');
      $('.app').removeClass('blurred');
      $('body').css('overflow', 'auto');
   });
});
