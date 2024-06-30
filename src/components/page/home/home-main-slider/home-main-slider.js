$(document).ready(function () {
    let speedAnimation = 1000;
    let intervalAnimation = 11000;
    let widthOneSlide = '100%';
    let widthInactiveSlide = '130px';
    let widthZeroSlide = '0px';
    let isAnimating = false; // Флаг для отслеживания состояния анимации

    // Устанавливаем второй слайд активным при загрузке страницы
    let $slidesContainer = $(".main-slider__container");
    let $firstSlideClone = $(".slide").first().clone();
    let $lastSlideClone = $(".slide").last().clone();
    $slidesContainer.append($firstSlideClone);
    $slidesContainer.prepend($lastSlideClone);
    
    // Инициализация начального состояния
    $('.main-slider-dot-item').first().addClass('main-slider-dot-active').css({ width: '60px', opacity: 1 });
    $('.main-slider-dot-item:not(.main-slider-dot-active)').css({ width: '20px', opacity: 0.7 });
    $(".slide").eq(1).addClass("slide--active").css("width", widthOneSlide);
    
    if ($(window).width() > 768) {
        $firstSlideClone.hide();
        $lastSlideClone.hide();
        $(".slide").click(function () {
            if (isAnimating) return;
            isAnimating = true;
            $(".slide").not(this).removeClass("slide--active").animate({ width: widthInactiveSlide }, speedAnimation);
            $(this).addClass("slide--active").animate({ width: widthOneSlide }, speedAnimation, function () {
                isAnimating = false;
            });
        });
    } else {
        function nextSlide() {
            if (isAnimating) return;
            isAnimating = true;

            var $current = $(".slide--active");
            var $next = $current.next(".slide").length ? $current.next(".slide") : $(".slide").first();

            $current.removeClass("slide--active").animate({ width: widthZeroSlide }, speedAnimation);
            $next.addClass("slide--active").animate({ width: widthOneSlide }, speedAnimation, function () {
                if ($next.is($firstSlideClone)) {
                    $(".slide").eq(1).addClass("slide--active").css("width", widthOneSlide);
                    $firstSlideClone.css("width", widthZeroSlide);
                } else if ($current.is($lastSlideClone)) {
                    $(".slide").eq(1).addClass("slide--active").css("width", widthOneSlide);
                }
                isAnimating = false;
            });
            runDot($next);
        }

        function prevSlide() {
            if (isAnimating) return;
            isAnimating = true;

            var $current = $(".slide--active");
            var $prev = $current.prev(".slide").length ? $current.prev(".slide") : $(".slide").last();
            $current.removeClass("slide--active").animate({ width: widthZeroSlide }, speedAnimation);
            $prev.addClass("slide--active").animate({ width: widthOneSlide }, speedAnimation, function () {
                if ($prev.is($lastSlideClone)) {
                    $(".slide").eq(-2).addClass("slide--active").css("width", widthOneSlide);
                    $lastSlideClone.css("width", widthZeroSlide);
                } else if ($current.is($firstSlideClone)) {
                    $(".slide").eq(-2).addClass("slide--active").css("width", widthOneSlide);
                }
                isAnimating = false;
            });
            runDot($prev);
        }

        function runDot($activeSlide) {
            let actualIndex = $activeSlide.index() - 1; // Исключаем клон слайда перед первым слайдом
            if (actualIndex >= $(".slide").length - 2) {
                actualIndex = 0;
            } else if (actualIndex < 0) {
                actualIndex = $(".slide").length - 3;
            }
            $('.main-slider-dot-item').stop(true, true).removeClass('main-slider-dot-active').animate({ width: '20px', opacity: 0.7 }, speedAnimation);
            $('.main-slider-dot-item').eq(actualIndex).stop(true, true).addClass('main-slider-dot-active').animate({ width: '60px', opacity: 1 }, speedAnimation);
        }

        setInterval(nextSlide, intervalAnimation);

        // Инициализация Hammer.js для обработки свайпов
        var hammer = new Hammer($slidesContainer[0]);
        hammer.get('swipe').set({ direction: Hammer.DIRECTION_HORIZONTAL });
        hammer.on("swiperight", () => prevSlide());
        hammer.on("swipeleft", () => nextSlide());
    }
});
