import { formatNumberWithSymbol } from '/src/assets/helpers/formatPhone.js'


//function dateFormat(num) {
//    let years = Math.floor(num / 12);
//    let months = num % 12;
//    let yearsText = years === 1 ? '1 год' : (years <= 4 ? `${years} года` : `${years} лет`);
//    let monthsText = months === 0 ? '' : (months === 1 ? '1 месяц' : (months <= 4 ? `${months} месяца` : `${months} месяцев`));
//    return `${yearsText} ${monthsText}`.trim();
//}

let data = {
    contractPrice: {
        value: 0,
    },
    firstPayment: {
        percent: 0,
        value: 0
    },
    contractTime: {
        value: 0
    },
};

function calculate() {
    const r = 40.00 / 100; //  Ставка банка, %
    const f = 0.17 / 100;  //  Ставка компании, %
    const a = 0.00 / 100;  //  Ставка агента, %
    const s = 0.00;        // Дополнительные расходы, руб.

    let x = data.contractPrice.value;
    let y = data.firstPayment.percent / 100;
    let z = data.contractTime.value;
    let c = x * (1 - y) * r / 12 * (Math.pow(1 + r / 12, z) / (Math.pow(1 + r / 12, z) - 1))
        + (z * x * (1 - y) * r / 12 * (Math.pow(1 + r / 12, z) / (Math.pow(1 + r / 12, z) - 1)) - x * (1 - y)) * 0.2 / z
        + (x * a + s) * r / 12 * (Math.pow(1 + r / 12, z) / (Math.pow(1 + r / 12, z) - 1)) * 1.2
        + x * f * 1.2;

    let d = z * c + x * y;


    return {
        monthlyPayment: c,
        leaseTotal: d,
        vatReturn: 0.2 * x,


    };
}

function updateResults() {
    const { monthlyPayment, leaseTotal, vatReturn } = calculate();

    $("#monthlyPayment").text(formatNumberWithSymbol(Number(monthlyPayment.toFixed(0)))); //Ежемесячный платеж
    $("#leaseTotal").text(formatNumberWithSymbol(Number(leaseTotal.toFixed(0)))); // Сумма договора лизинга
    $("#vatReturn").text(formatNumberWithSymbol(Number(vatReturn.toFixed(0)))); // Возврат 20% НДС

}

function progressRange(range, sliderValue) {
    const min = parseInt(range.attr("min"));
    const max = parseInt(range.attr("max"));
    const progress = ((sliderValue - min) / (max - min)) * 100;
    range.val(sliderValue);
    range.css("background", `linear-gradient(to right, #0045b2 ${progress}%, #cbcbcb ${progress}%)`);
}
function validValue($this) {
    let sliderValue = parseInt($this.val());
    const min = parseInt($this.attr("min"));
    const max = parseInt($this.attr("max"));
    if (sliderValue > max) {
        sliderValue = max;
    }
    if (isNaN(sliderValue) || sliderValue < min) {
        sliderValue = min;
    }
    return sliderValue;
}

$(document).ready(function () {
    const $sliders = $("input[type='range']");
    function updateContractPrice(sliderValue, $valueDisplay) {
        data.contractPrice.value = sliderValue;
        $valueDisplay.text(formatNumberWithSymbol(sliderValue));
        updateFirstPayment($("#range2").val(), $("#range2").closest(".calculator-item").find(".js-value"));
    }

    function updateFirstPayment(sliderValue, $valueDisplay) {
        data.firstPayment.value = data.contractPrice.value / 100 * sliderValue;
        data.firstPayment.percent = sliderValue;
        $valueDisplay.text(`${sliderValue} % / ${formatNumberWithSymbol(Math.round(data.firstPayment.value))}`);
    }

    function updateContractTime(sliderValue, $valueDisplay) {
        data.contractTime.value = sliderValue;
        //$valueDisplay.text(dateFormat(sliderValue));
        $valueDisplay.text(sliderValue);
    }

    function updateRange($slider, $valueDisplay) {
        let sliderValue = validValue($slider)

        switch ($slider.attr("id")) {

            case 'range1':
                updateContractPrice(sliderValue, $valueDisplay);
                progressRange($('#range1'), sliderValue)
                break;

            case 'range2':
                updateFirstPayment(sliderValue, $valueDisplay);
                progressRange($('#range2'), sliderValue)
                break;

            case 'range3':
                updateContractTime(sliderValue, $valueDisplay);
                progressRange($('#range3'), sliderValue)
                break;
        }
        updateResults();
    }

    function updateInput($slider, $valueDisplay) {
        let sliderValue = validValue($slider)

        switch ($slider.attr("id")) {

            case 'inputCalculator1':
                updateContractPrice(sliderValue, $valueDisplay);
                progressRange($('#range1'), sliderValue)
                break;

            case 'inputCalculator2':
                updateFirstPayment(sliderValue, $valueDisplay);
                progressRange($('#range2'), sliderValue)
                break;

            case 'inputCalculator3':
                updateContractTime(sliderValue, $valueDisplay);
                progressRange($('#range3'), sliderValue)
                break;
        }
        updateResults()
    }



    // Initial update on page load
    $sliders.each(function () {
        const $slider = $(this);
        const $valueDisplay = $slider.closest(".calculator-item").find(".js-value");
        updateRange($slider, $valueDisplay);
    });

    // Update on input
    $sliders.on("input", function () {
        const $slider = $(this);
        const $valueDisplay = $slider.closest(".calculator-item").find(".js-value");
        updateRange($slider, $valueDisplay);
    });

    $(".js-value").on("click", function () {
        $(this).css("display", "none");
        $(this).prev("input").css("display", "block").focus();
        $(this).prev("input").val('');
    });

    $(".inputCalculator").on("blur", function () {

        const $slider = $(this);
        const $valueDisplay = $slider.closest(".calculator-item").find(".js-value");
        $(this).css("display", "none");
        $(this).next("p").css("display", "block");
        updateInput($slider, $valueDisplay);
    });

});
