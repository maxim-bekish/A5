const formatNumberAddSymbol = (number, symbol = '₽') => {
    if (isNaN(number)) {
        alert('Входное значение не является числом!');
        return;
    }
    let formattedNumber = Number(number).toLocaleString('ru-RU');
    return `${formattedNumber} ${symbol}`;
};

const readyValue = (sliderValue, min, max) => {
    const range = max - min;
    const percentageValue = ((sliderValue - min) / range) * 100;
    return `${sliderValue}% / ${formatNumberAddSymbol(percentageValue.toFixed(1))}`;
};

function dateFormat(num) {
    let years = Math.floor(num / 12);
    let months = num % 12;
    return `${years} ${years <= 4 ? 'года' : 'лет'} ${months} месяцев`;
}
let data = {
    contractPrice: {
        value: 0
    },
    firstPayment: {
        percent: 0,
        value: 0
    },
    contractTime: {
        value: 0
    },
    lastPayment: {
        percent: 0,
        value: 0
    },

}


$(document).ready(function () {
    const $sliders = $("input[type='range']");

    function updateContractPrice(sliderValue, $valueDisplay) {
        data.contractPrice.value = sliderValue;
        $valueDisplay.text(formatNumberAddSymbol(sliderValue));
        // Добавляем вызов функции updateFirstPayment для пересчета первого платежа
        updateFirstPayment($("#range2").val(), $("#range2").closest(".calculator-item").find(".value"));
    }


    function updateFirstPayment(sliderValue, $valueDisplay) {
        data.firstPayment.value = data.contractPrice.value / 100 * sliderValue;
        data.firstPayment.percent = sliderValue;

        $valueDisplay.text(`${sliderValue} % / ${formatNumberAddSymbol(data.firstPayment.value)}`);
    }

    function updateContractTime(sliderValue, $valueDisplay) {
        data.contractTime.value = sliderValue;
        $valueDisplay.text(dateFormat(sliderValue));
    }

    function updateLastPayment(sliderValue, $valueDisplay) {
        data.lastPayment.value = data.contractPrice.value + 1;
        data.firstPayment.percent = sliderValue;
        $valueDisplay.text(`${sliderValue}% / ${sliderValue}`);
    }

    function updateSlider($slider, $valueDisplay) {
        const sliderValue = parseInt($slider.val());
        const min = parseInt($slider.attr("min"));
        const max = parseInt($slider.attr("max"));
        const progress = ((sliderValue - min) / (max - min)) * 100;

        switch ($slider.attr("id")) {
            case 'range1':
                updateContractPrice(sliderValue, $valueDisplay);
                break;
            case 'range2':
                updateFirstPayment(sliderValue, $valueDisplay);
                break;
            case 'range3':
                updateContractTime(sliderValue, $valueDisplay);
                break;
            case 'range4':
                updateLastPayment(sliderValue, $valueDisplay);
                break;
        }

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
