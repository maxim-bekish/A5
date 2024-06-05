$(document).ready(function () {
    let lastScrollTop = 0;
    const $header = $('#header');
    const $main = $('#js-main');

    function updateHeaderHeight() {
        const headerHeight = $header.outerHeight(); // Получаем полную высоту шапки, включая padding и border
        $main.css('margin-top', headerHeight + 'px');
        return headerHeight;
    }

    let headerHeight = updateHeaderHeight();

    $(window).on('scroll', function () {
        let scrollTop = $(this).scrollTop();

        if (scrollTop > lastScrollTop) {
            // Скролл вниз
            $header.css('top', -headerHeight + 'px'); // Скрыть шапку
        } else {
            // Скролл вверх
            $header.css('top', '0');
        }

        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // Для мобильных или чтобы избежать отрицательных значений
    });

    $(window).on('resize', function () {
        headerHeight = updateHeaderHeight();
    });
});