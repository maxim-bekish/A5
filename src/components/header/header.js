$(document).ready(function () {
  let lastScrollTop = 0;
  const $header = $("#header");
  const $main = $(".js-main");
  const $mainSlider = $("#mainSlider");

  function updateHeaderHeight() {
    const headerHeight = $header.outerHeight(); // Получаем полную высоту шапки, включая padding и border
    $main.css("margin-top", headerHeight + "px");
   $mainSlider.css("height", `calc(100dvh - ${headerHeight}px)`);
    return headerHeight;
  }

  let headerHeight = updateHeaderHeight();

  $(window).on("scroll", function () {
    let scrollTop = $(this).scrollTop();

    if (scrollTop > lastScrollTop) {
      // Скролл вниз
      $header.css("top", -headerHeight + "px"); // Скрыть шапку
    } else {
      // Скролл вверх
      $header.css("top", "0");
    }

    lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // Для мобильных или чтобы избежать отрицательных значений
  });

  $(window).on("resize", function () {
    headerHeight = updateHeaderHeight();
  });

  $("#open-burger-menu").click(function () {
    $(".burger-menu").addClass("js-flex");
    $("body").css("overflow", "hidden");
  });
  $("#closed-burger-menu").click(function () {
    $(".burger-menu").removeClass("js-flex");
    $("body").css("overflow", "auto");
  });
  $(".js-burger-menu-item").click(function () {
    $(".burger-menu").removeClass("js-flex");
    $("body").css("overflow", "auto");
  });
  $(".select").hover(
    function () {
      $(this).addClass("active");
      $(this).find(".select-list").stop(true, true).slideDown(200);
    },
    function () {
      $(this).removeClass("active");
      $(this).find(".select-list").stop(true, true).slideUp(200);
    },
  );

  $(".burger-menu-box-item-row").click(function () {
    if ($(window).width() <= 768) {
      $(".burger-menu-box-item-row").not(this).find("svg").removeClass("rt180");
      $(".burger-menu-box-item-row").not(this).next("ul").slideUp();
      let isOpen = $(this).next("ul").is(":visible");
      $(this).find("svg").toggleClass("rt180", !isOpen);
      $(this).next("ul").slideToggle();
    }
  });

  // Обработчик клика по якорной ссылке
  $(".js-anchor-link").click(function (event) {
    event.preventDefault(); // Предотвращаем стандартное поведение

    // Получаем ID цели из атрибута href
    let targetId = $(this).attr("href");

    if (window.location.pathname !== "/") {
      // Если мы не на главной странице, перенаправляем на главную страницу с якорем
      window.location.href = "/" + targetId;
    } else {
      // Если мы уже на главной странице, скроллим к элементу
      scrollToTarget(targetId);
    }
  });

  function scrollToTarget(targetId) {
    let $target = $(targetId);

    if ($target.length) {
      // Скроллим к элементу
      $("html, body").animate(
        {
          scrollTop: $target.offset().top - 220,
        },
        1000,
      );
    }
  }
  if (window.location.hash) {
    let targetId = window.location.hash;
    scrollToTarget(targetId);
  }
});
