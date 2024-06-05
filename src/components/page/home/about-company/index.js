$(document).ready(function () {
   $(".jsListItemAbout").click(function () {
       // Удаляем класс у всех блоков
       $(".jsListItemAbout").removeClass("list-item-active");
       // Добавляем класс только к текущему блоку
       $(this).addClass("list-item-active");
   });
});
