$(document).ready(function () {

    // Устанавливаем первый слайд активным при загрузке страницы
    $(".slide").first().addClass("slide--active").css("width", "1530px");

    $(".slide").click(function () {
        // Удаляем класс у всех блоков и возвращаем их ширину к исходной
        $(".slide").not(this).removeClass("slide--active").animate({ width: "130px" }, 400);

        // Добавляем класс только к текущему блоку и изменяем его ширину
        $(this).addClass("slide--active").animate({ width: "1530px" }, 400);
    });
});
