$(document).ready(function() {

   $(".slider__slide--front").addClass('visible');
   $(".dop-info").click(function() {
      let parent = $(this).parent();
      let front = parent.find('.slider__slide--front');
      let back = parent.find('.slider__slide--back');

      if (front.hasClass('visible')) {
         front.removeClass('visible');
         back.addClass('visible');
      } else {
         back.removeClass('visible');
         front.addClass('visible');
      }
   });

});