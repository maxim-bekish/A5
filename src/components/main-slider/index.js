$(document).ready(function () {
    $(".slide").click(function () {
        // Удаляем класс у всех блоков
        $(".slide").removeClass("slide-active");
        // Добавляем класс только к текущему блоку
        $(this).addClass("slide-active");
    });

    // Функция для переключения активного слайда
    function switchSlide() {
        // Находим текущий активный слайд
        var $current = $(".slide-active");
        // Если текущий активный слайд существует и есть следующий слайд
        if ($current.length && $current.next(".slide").length) {
            // Переключаемся на следующий слайд
            $current.removeClass("slide-active").next(".slide").addClass("slide-active");
        } else {
            // Если текущий слайд последний, переключаемся на первый
            $current.removeClass("slide-active");
            $(".slide").first().addClass("slide-active");
        }
    }

    // Устанавливаем интервал для автоматического переключения слайдов
    setInterval(switchSlide, 5000); // 5000 миллисекунд = 5 секунд
});
