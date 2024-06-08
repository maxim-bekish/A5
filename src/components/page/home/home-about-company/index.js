$(document).ready(function () {
    $(".jsListItemAbout").click(function () {
        // Удаляем класс у всех блоков
        $(".jsListItemAbout").removeClass("about-home__list-item--active");
        // Добавляем класс только к текущему блоку
        $(this).addClass("about-home__list-item--active");
    });
});
