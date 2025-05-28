$(document).ready(function () {
  const $buttons = $(".leasing-guide__button");
  const $items = $(".leasing-guide__list .leasing-guide__item");

  $buttons.on("click", function () {
    const index = $(this).data("index");

    $buttons.removeClass("leasing-guide__button-active");
    $(this).addClass("leasing-guide__button-active");

    $items.each(function () {
      $(this).toggle($(this).data("index") === index);
    });
  });

  $(".leasing-guide__list-title").click(function () {
    $(this).find(".js-svg-upend").toggleClass("rt180");
    $(this).next(".leasing-guide__text").toggleClass("open");
  });

  $(".mobile__title p").text($(".leasing-guide__button-active").text());
});
