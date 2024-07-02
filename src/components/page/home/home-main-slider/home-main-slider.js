function initCustomCursor($activeSlide) {
    const $customCursor = $('#customCursor');
    $('.slide').off('mouseenter mouseleave mousemove');
    $customCursor.hide();
    $activeSlide.on('mouseenter', function () {
        $customCursor.show();
    });

    $activeSlide.on('mouseleave', function () {
        $customCursor.hide();
    });


    $activeSlide.on('mousemove', function (e) {
        const mainBlockOffset = $activeSlide.parent().offset();
        const relativeX = e.pageX - mainBlockOffset.left;
        const relativeY = e.pageY - mainBlockOffset.top;

        $customCursor.css({
            left: relativeX - 45 + 'px',
            top: relativeY - 45 + 'px'
        });
    });


}



$(document).ready(function () {
    let speedAnimation = 1000; // скорость перелистывания 1000 = 1s
    let intervalAnimation = 8000;  // интервал перелистывания 3000 = 3s
    let widthOneSlide = '1530px';
    let widthInactiveSlide = '130px';
    let widthZeroSlide = '0px';
    let isAnimating = false; // Флаг для отслеживания состояния анимации

    // Устанавливаем второй слайд активным при загрузке страницы
    let $slidesContainer = $(".main-slider__container");
    let $firstSlideClone = $(".slide").first().clone().addClass('clone');
    let $lastSlideClone = $(".slide").last().clone().addClass('clone');
    $slidesContainer.append($firstSlideClone);
    $slidesContainer.prepend($lastSlideClone);

    // Инициализация начального состояния
    $('.main-slider-dot-item').first().addClass('main-slider-dot-active').css({ width: '60px', opacity: 1 });
    $('.main-slider-dot-item:not(.main-slider-dot-active)').css({ width: '20px', opacity: 0.7 });
    $(".slide").eq(1).addClass("slide--active").css("width", widthOneSlide);


    if ($(window).width() > 768) {
        $firstSlideClone.hide();
        $lastSlideClone.hide();

        // Инициализация кастомного курсора для первого активного слайда
        initCustomCursor($(".slide--active"));
        let isAnimating = false;
        let slideInterval;

        function goToNextSlide() {
            if (isAnimating) return;

            isAnimating = true;
            let $currentSlide = $(".slide--active");
            let $nextSlide = $currentSlide.next(".slide");

            while ($nextSlide.hasClass("clone")) {
                $nextSlide = $nextSlide.next(".slide");
                if ($nextSlide.length === 0) {
                    $nextSlide = $(".slide").first();
                }
            }

            if ($nextSlide.length === 0) {
                $nextSlide = $(".slide").first();
            }

            $currentSlide.removeClass("slide--active").animate({ width: widthInactiveSlide }, speedAnimation);
            $nextSlide.addClass("slide--active").animate({ width: widthOneSlide }, speedAnimation, function () {
                isAnimating = false;
                initCustomCursor($nextSlide);
            });
        }

        $(".slide").click(function () {
            if (isAnimating) return;
            if ($(this).hasClass("slide--active")) {
                if ($(this).hasClass("slide--active")) {
                    const url = $(this).data('url');
                    console.log(url);
                    window.location.href = url;
                }
                return;
            }

            isAnimating = true;
            let $currentSlide = $(".slide--active");
            let $nextSlide = $(this);

            $currentSlide.removeClass("slide--active").animate({ width: widthInactiveSlide }, speedAnimation);
            $nextSlide.addClass("slide--active").animate({ width: widthOneSlide }, speedAnimation, function () {
                isAnimating = false;
                initCustomCursor($nextSlide);
            });

            clearInterval(slideInterval);
            slideInterval = setInterval(goToNextSlide, intervalAnimation);
        });

        // Запускаем автоматическое переключение слайдов каждые 3 секунды
        slideInterval = setInterval(goToNextSlide, intervalAnimation);




    } else {
        function nextSlide() {
            if (isAnimating) return;
            isAnimating = true;
            let $current = $(".slide--active");
            let $next = $current.next(".slide").length ? $current.next(".slide") : $(".slide").first();

            $current.removeClass("slide--active").animate({ width: widthZeroSlide }, speedAnimation);
            $next.addClass("slide--active").animate({ width: widthOneSlide }, speedAnimation, function () {
                if ($next.is($firstSlideClone)) {
                    $next.removeClass("slide--active");
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

            let $current = $(".slide--active");
            let $prev = $current.prev(".slide").length ? $current.prev(".slide") : $(".slide").last();
            $current.removeClass("slide--active").animate({ width: widthZeroSlide }, speedAnimation);
            $prev.addClass("slide--active").animate({ width: widthOneSlide }, speedAnimation, function () {
                if ($prev.is($lastSlideClone)) {
                    $prev.removeClass("slide--active");
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

        $(".slide").on('click', function () {
            const url = $(this).data('url');
            window.location.href = url;
        });

        setInterval(nextSlide, intervalAnimation);

        // Инициализация Hammer.js для обработки свайпов
        let hammer = new Hammer($slidesContainer[0]);
        hammer.get('swipe').set({ direction: Hammer.DIRECTION_HORIZONTAL });
        hammer.on("swiperight", () => prevSlide());
        hammer.on("swipeleft", () => nextSlide());
    }



});




