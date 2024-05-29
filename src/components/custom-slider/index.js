$(document).ready(function () {
    $(".slide").click(function () {
        // Удаляем класс у всех блоков
        $(".slide").removeClass("slide-active");
        // Добавляем класс только к текущему блоку
        $(this).addClass("slide-active");
    });

    
});
