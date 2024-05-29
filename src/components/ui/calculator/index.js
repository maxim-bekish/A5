
$(document).ready(function () {
    const $sliders = $("input[type='range']");

    function updateSlider($slider, $valueDisplay) {
        const tempSliderValue = $slider.val();
        console.log(tempSliderValue)
        console.log($slider.attr("max"))
        $valueDisplay.text(tempSliderValue);
        const progress = (tempSliderValue / $slider.attr("max")) * 100;
        console.log(progress)
        $slider.css("background", `linear-gradient(to right, #0045b2 ${progress}%, #cbcbcb ${progress}%)`);
    }

    // Initial update on page load
    $sliders.each(function () {
        const $slider = $(this);
        const $valueDisplay = $slider.closest(".calculator-item").find(".value");
        updateSlider($slider, $valueDisplay);
    });

    // Update on input
    $sliders.on("input", function () {
        const $slider = $(this);
        const $valueDisplay = $slider.closest(".calculator-item").find(".value");
        updateSlider($slider, $valueDisplay);
    });
});