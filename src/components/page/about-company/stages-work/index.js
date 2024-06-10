$(document).ready(function () {
   var $window = $(window);
   var $items = $(".stages-work__item");
   var backgroundBottom = $('.stages-work').offset().top + $('.stages-work').height();
   var index = 0;
 
   function showNextItem() {
     if (index < $items.length) {
       $items.eq(index).addClass("visible");
       index++;
     }
   }
 
   $window.on("scroll", function () {
     var scrollTop = $window.scrollTop();
     var windowHeight = $window.height();
 
     if (scrollTop + windowHeight > backgroundBottom) {
       // Добавляем обработчик события прокрутки после достижения нижней части фона
       $window.on("scroll.showItems", function () {
         var itemOffsetTop = $items.eq(index).offset().top;
         if (scrollTop + windowHeight > itemOffsetTop) {
           showNextItem();
         }
       });
     } else {
       $window.off("scroll.showItems");
     }
   });
 });
 