$(document).ready(function () {



   $('.select').hover(
      function () {
         $(this).addClass('active');
         
         $(this).find('.select-list').stop(true, true).slideDown(200);
      },
      function () {
         $(this).removeClass('active');
         $(this).find('.select-list').stop(true, true).slideUp(200);
      }
   );


})