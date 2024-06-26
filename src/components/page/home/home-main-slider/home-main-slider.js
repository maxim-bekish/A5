$(document).ready(function () {


    let speedAnimation = 2000

    // Устанавливаем первый слайд активным при загрузке страницы
    $(".slide").first().addClass("slide--active").css("width", "1530px");

    $(".slide").click(function () {
        // Удаляем класс у всех блоков и возвращаем их ширину к исходной
        $(".slide").not(this).removeClass("slide--active").animate({ width: "130px" }, speedAnimation);

        // Добавляем класс только к текущему блоку и изменяем его ширину
        $(this).addClass("slide--active").animate({ width: "1530px" }, speedAnimation);
    });






    if ($(window).width() <= 360) {

        function nextSlide() {
            var $current = $(".slide--active");
            var $activeDot = $(".main-slider-dot-active");
            var $next = $current.next(".slide").length ? $current.next(".slide") : $(".slide").first();
            var $nextDot = $activeDot.next(".main-slider-dot-item").length ? $activeDot.next(".main-slider-dot-item") : $(".main-slider-dot-item").first();

            // Удаляем класс у текущего слайда и изменяем его ширину
            $current.removeClass("slide--active").animate({ width: "0px" }, speedAnimation);

            // Добавляем класс к следующему слайду и изменяем его ширину
            $next.addClass("slide--active").animate({ width: "1530px" }, speedAnimation);

            // Обновляем индикаторы с анимацией изменения ширины
            $activeDot.removeClass("main-slider-dot-active").animate({ width: "20px", opacity: 0.7 }, speedAnimation);
            $nextDot.addClass("main-slider-dot-active").animate({ width: "60px", opacity: 1 }, speedAnimation);
        }

        // Устанавливаем интервал автопереключения слайдов
        var autoSwitch = setInterval(nextSlide, speedAnimation);

        // Инициализация начального состояния
        $('.slide').first().addClass('slide--active');
        $('.main-slider-dot-item').first().addClass('main-slider-dot-active').css({ width: '60px', opacity: 1 });
        $('.main-slider-dot-item:not(.main-slider-dot-active)').css({ width: '20px', opacity: 0.7 });

    }

});
