$(document).ready(function () {
    $(".list-item").click(function () {
        // Удаляем класс у всех блоков
        $(".list-item").removeClass("list-item-active");
        // Добавляем класс только к текущему блоку
        $(this).addClass("list-item-active");
    });
});
