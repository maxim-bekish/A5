function initCustomCursor($activeSlide) {
  $(".mainSliderSlide").on("click", function () {
    const url = $(this).data("url");

    if (url) {
      window.location.href = url;
    } else {
      console.warn("Атрибут data-url не задан для элемента:", this);
    }
  });

  if (window.innerWidth <= 768) {
    return;
  }
  const $customCursor = $("#customCursor");
  $(".mainSliderSlide").off("mouseenter mouseleave mousemove");
  $customCursor.hide();
  $activeSlide.on("mouseenter", function () {
    $customCursor.show();
  });

  $activeSlide.on("mouseleave", function () {
    $customCursor.hide();
  });

  $activeSlide.on("mousemove", function (e) {
    $customCursor.show();
    const mainBlockOffset = $activeSlide.parent().offset();
    const relativeX = e.pageX - mainBlockOffset.left;
    const relativeY = e.pageY - mainBlockOffset.top;

    $customCursor.css({
      left: relativeX - $customCursor.width() / 2 + "px",
      top: relativeY - $customCursor.height() / 2 + "px",
    });
  });

  $customCursor.on("mouseenter", function () {
    $activeSlide.trigger("mouseenter");
  });
  $customCursor.on("mouseleave", function () {
    $activeSlide.trigger("mouseleave");
  });
}

function initSlider(speed = 0.5) {
  // Параметр для скорости в миллисекундах
  const slider = $("#mainSliderContainer");
  const slides = $(".mainSliderSlide");
  const slideCount = slides.length;

  // Дублируем первый и последний слайды для бесшовности
  const firstSlide = slides.first().clone();
  const lastSlide = slides.last().clone();

  slider.append(firstSlide); // Добавляем копию первого слайда в конец
  slider.prepend(lastSlide); // Добавляем копию последнего слайда в начало

  const totalSlides = slideCount + 2; // Общее количество слайдов с учетом дублированных
  const slideWidth = $("#mainSliderContainer .mainSliderSlide").outerWidth();

  slider.css({
    width: slideWidth * totalSlides,
    transform: `translateX(-${slideWidth}px)`, // Смещение на первый оригинальный слайд
  });

  let currentIndex = 1;
  let startX = 0;
  let moveX = 0;
  let isSwiping = false;

  function moveToSlide(index) {
    slider.css({
      transform: `translateX(-${slideWidth * index}px)`,
      transition: `transform ${speed * 1000}ms ease-in-out`, // Используем скорость
    });

    currentIndex = index;

    // После завершения анимации, если мы на дублированных слайдах
    slider.one("transitionend", function () {
      if (currentIndex === 0) {
        slider.css({
          transform: `translateX(-${slideWidth * slideCount}px)`,
          transition: "none", // Убираем анимацию
        });
        currentIndex = slideCount;
      } else if (currentIndex === slideCount + 1) {
        slider.css({
          transform: `translateX(-${slideWidth}px)`,
          transition: "none", // Убираем анимацию
        });
        currentIndex = 1;
      }
    });
  }

  $("#navigationNext").click(function () {
    moveToSlide(currentIndex + 1);
  });

  $("#navigationPrev").click(function () {
    moveToSlide(currentIndex - 1);
  });

  // Обработчики для свайпов
  slider.on("touchstart", function (e) {
    startX = e.originalEvent.touches[0].pageX;
    isSwiping = true;
  });

  slider.on("touchmove", function (e) {
    if (!isSwiping) return;

    moveX = e.originalEvent.touches[0].pageX - startX;
    slider.css({
      transform: `translateX(calc(-${slideWidth * currentIndex}px + ${moveX}px))`,
      transition: "none", // Убираем анимацию во время свайпа
    });
  });

  slider.on("touchend", function () {
    if (!isSwiping) return;

    isSwiping = false;

    if (Math.abs(moveX) > slideWidth / 4) {
      // Если свайп значительный, перемещаем слайд
      if (moveX < 0) {
        moveToSlide(currentIndex + 1); // Свайп влево
      } else {
        moveToSlide(currentIndex - 1); // Свайп вправо
      }
    } else {
      // Если свайп незначительный, возвращаемся на текущий слайд
      moveToSlide(currentIndex);
    }

    // Сбрасываем значения
    startX = 0;
    moveX = 0;
  });
}

$(document).ready(function () {
  initCustomCursor($("#mainSliderContainer"));
  initSlider();
});
