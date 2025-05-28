$(document).ready(function () {
  function checkVisibility() {
    $(".stages-work__item").each(function () {
      var blockTop = $(this).offset().top;
      var windowBottom = $(window).scrollTop() + $(window).height();

      if (blockTop < windowBottom) {
        $(this).addClass("visible");
      }
    });
  }

  $(window).on("scroll", function () {
    checkVisibility();
  });

  // Проверяем видимость элементов при загрузке страницы
  checkVisibility();
});
