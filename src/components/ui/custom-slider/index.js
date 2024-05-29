$(document).ready(function () {
    let slideCount = Math.round($(".container-custom-slider").height());
    let step = -Math.round($(".custom-slide").height());
    let timeAnimate = 700;
    let isAnimating = false;

    $(".js-custom-slider-prev").click(function () {
        if (!isAnimating) {
            isAnimating = true;
            let currentTop = parseInt($(".container-custom-slider").css("top")) || 0;
            if (currentTop >= 0) {
                $(".container-custom-slider").css("top", 0 + "px");
                isAnimating = false;
            } else {
                $(".container-custom-slider").animate({ top: (currentTop - step) + "px" }, timeAnimate, function () {
                    isAnimating = false;
                });
            }
        }
    });

    $(".js-custom-slider-next").click(function () {
        if (!isAnimating) {
            isAnimating = true;
            let currentTop = parseInt($(".container-custom-slider").css("top")) || 0;
            if (currentTop <= -slideCount + Math.abs(step)) {
                $(".container-custom-slider").css("top", 0 + "px");
                isAnimating = false;
            } else {
                $(".container-custom-slider").animate({ top: (currentTop + step) + "px" }, timeAnimate, function () {
                    isAnimating = false;
                });
            }
        }
    });
});
