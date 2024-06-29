$(document).ready(function () {
    let speedAnimation = 2000;
    let intervalAnimation = 4000;
    let widthOneSlide = '100%';
    // Устанавливаем первый слайд активным при загрузке страницы
    $(".slide").first().addClass("slide--active").css("width", widthOneSlide);



    let xxx = $(".main-slider__container");

    if ($(window).width() <= 768) {

        function nextSlide() {
            var $current = $(".slide--active");
            var $activeDot = $(".main-slider-dot-active");
            var $next = $current.next(".slide").length ? $current.next(".slide") : $(".slide").first();
            var $nextDot = $activeDot.next(".main-slider-dot-item").length ? $activeDot.next(".main-slider-dot-item") : $(".main-slider-dot-item").first();

            // Удаляем класс у текущего слайда и изменяем его ширину
            $current.removeClass("slide--active").animate({ width: "0px" }, speedAnimation);

            // Добавляем класс к следующему слайду и изменяем его ширину
            $next.addClass("slide--active").animate({ width: widthOneSlide }, speedAnimation);

            // Обновляем индикаторы с анимацией изменения ширины
            $activeDot.removeClass("main-slider-dot-active").animate({ width: "20px", opacity: 0.7 }, speedAnimation);
            $nextDot.addClass("main-slider-dot-active").animate({ width: "60px", opacity: 1 }, speedAnimation);
        }

        function prevSlide() {
            var $current = $(".slide--active");
            var $activeDot = $(".main-slider-dot-active");
            var $prev = $current.prev(".slide").length ? $current.prev(".slide") : $(".slide").last();
            var $prevDot = $activeDot.prev(".main-slider-dot-item").length ? $activeDot.prev(".main-slider-dot-item") : $(".main-slider-dot-item").last();

            // Удаляем класс у текущего слайда и изменяем его ширину
            $current.removeClass("slide--active").animate({ width: "0px" }, speedAnimation);

            // Добавляем класс к предыдущему слайду и изменяем его ширину
            $prev.addClass("slide--active").animate({ width: widthOneSlide }, speedAnimation);

            // Обновляем индикаторы с анимацией изменения ширины
            $activeDot.removeClass("main-slider-dot-active").animate({ width: "20px", opacity: 0.7 }, speedAnimation);
            $prevDot.addClass("main-slider-dot-active").animate({ width: "60px", opacity: 1 }, speedAnimation);
        }

        // Инициализация начального состояния
        $('.slide').first().addClass('slide--active');
        $('.main-slider-dot-item').first().addClass('main-slider-dot-active').css({ width: '60px', opacity: 1 });
        $('.main-slider-dot-item:not(.main-slider-dot-active)').css({ width: '20px', opacity: 0.7 });
        setInterval(nextSlide, intervalAnimation)

        // Инициализация Hammer.js для обработки свайпов
        var hammer = new Hammer(xxx[0]);
        hammer.get('swipe').set({ direction: Hammer.DIRECTION_HORIZONTAL });
        hammer.on("swiperight", () => prevSlide());
        hammer.on("swipeleft", () => nextSlide());
    }
    else {
        $(".slide").click(function () {
            // Удаляем класс у всех блоков и возвращаем их ширину к исходной
            $(".slide").not(this).removeClass("slide--active").animate({ width: "130px" }, speedAnimation);

            // Добавляем класс только к текущему блоку и изменяем его ширину
            $(this).addClass("slide--active").animate({ width: widthOneSlide }, speedAnimation);
        });
    }
});
