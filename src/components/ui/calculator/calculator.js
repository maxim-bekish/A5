const formatNumberAddSymbol = (number, symbol = '₽') => {
    number
    if (isNaN(number)) {

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
    let yearsText = years === 1 ? '1 год' : (years <= 4 ? `${years} года` : `${years} лет`);
    let monthsText = months === 0 ? '' : (months === 1 ? '1 месяц' : (months <= 4 ? `${months} месяца` : `${months} месяцев`));
    return `${yearsText} ${monthsText}`.trim();
}

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

$(document).ready(function () {
    const $sliders = $("input[type='range']");
    const $slidersInput = $(".calculator-range input[type='number']");

    const r = 40.00 / 100; //  Ставка банка, %
    const f = 0.17 / 100;  //  Ставка компании, %
    const a = 0.00 / 100;  //  Ставка агента, %
    const s = 0.00;        // Дополнительные расходы, руб.

    function calculate() {
        let x = data.contractPrice.value;
        let y = data.firstPayment.percent / 100;
        let z = data.contractTime.value;
        let c = x * (1 - y) * r / 12 * (Math.pow(1 + r / 12, z) / (Math.pow(1 + r / 12, z) - 1))
            + (z * x * (1 - y) * r / 12 * (Math.pow(1 + r / 12, z) / (Math.pow(1 + r / 12, z) - 1)) - x * (1 - y)) * 0.2 / z
            + (x * a + s) * r / 12 * (Math.pow(1 + r / 12, z) / (Math.pow(1 + r / 12, z) - 1)) * 1.2
            + x * f * 1.2;

        let d = z * c + x * y;
        let e = ((d - x) / x * 100) / (z / 12);

        return {
            monthlyPayment: c,
            annualCost: e,
            leaseTotal: d,
            vatReturn: 0.2 * x,
            taxReduction: 0.2 * x
        };
    }

    function updateContractPrice(sliderValue, $valueDisplay) {

        data.contractPrice.value = sliderValue;
        $valueDisplay.text(formatNumberAddSymbol(sliderValue));
        updateFirstPayment($("#range2").val(), $("#range2").closest(".calculator-item").find(".js-value"));
        updateResults();
    }

    function updateFirstPayment(sliderValue, $valueDisplay) {
        data.firstPayment.value = data.contractPrice.value / 100 * sliderValue;
        data.firstPayment.percent = sliderValue;
        $valueDisplay.text(`${sliderValue} % / ${formatNumberAddSymbol(Math.round(data.firstPayment.value))}`);
        updateResults();
    }

    function updateContractTime(sliderValue, $valueDisplay) {
        data.contractTime.value = sliderValue;
        $valueDisplay.text(dateFormat(sliderValue));
        updateResults();
    }



    function updateSlider($slider, $valueDisplay) {
        let sliderValue = parseInt($slider.val());
        const min = parseInt($slider.attr("min"));
        const max = parseInt($slider.attr("max"));


        if (sliderValue > max) {
            sliderValue = max;
        }
        if (isNaN(sliderValue) || sliderValue < min) {
            sliderValue = min;
        }
        const progress = ((sliderValue - min) / (max - min)) * 100;

        switch ($slider.attr("id")) {

            case 'range1':
                updateContractPrice(sliderValue, $valueDisplay);
                $('#range1').css("background", `linear-gradient(to right, #0045b2 ${progress}%, #cbcbcb ${progress}%)`);
                $('#inputCalculator1').val(sliderValue);
                break;
            case 'inputCalculator1':
                $('#inputCalculator1').val(sliderValue);
                updateContractPrice(sliderValue, $valueDisplay);
                $('#range1').css("background", `linear-gradient(to right, #0045b2 ${progress}%, #cbcbcb ${progress}%)`);
                $('#range1').val(sliderValue);
                break;


            case 'range2':
                updateFirstPayment(sliderValue, $valueDisplay);
                $('#range2').css("background", `linear-gradient(to right, #0045b2 ${progress}%, #cbcbcb ${progress}%)`);
                $('#inputCalculator2').val(sliderValue);
                break;
            case 'inputCalculator2':
                $('#inputCalculator2').val(sliderValue);
                updateFirstPayment(sliderValue, $valueDisplay);
                $('#range2').css("background", `linear-gradient(to right, #0045b2 ${progress}%, #cbcbcb ${progress}%)`);
                $('#range2').val(sliderValue);
                break;


            case 'range3':
                $('#inputCalculator3').val(sliderValue);
                updateContractTime(sliderValue, $valueDisplay);
                $('#range3').css("background", `linear-gradient(to right, #0045b2 ${progress}%, #cbcbcb ${progress}%)`);
                break;
            case 'inputCalculator3':
                $('#inputCalculator3').val(sliderValue);
                updateContractTime(sliderValue, $valueDisplay);
                $('#range3').css("background", `linear-gradient(to right, #0045b2 ${progress}%, #cbcbcb ${progress}%)`);
                $('#range3').val(sliderValue);
                break;

        }
    }

    function updateResults() {
        const results = calculate();

        $("#monthlyPayment").text(formatNumberAddSymbol(results.monthlyPayment.toFixed(0))); //Ежемесячный платеж
        $("#leaseTotal").text(formatNumberAddSymbol(results.leaseTotal.toFixed(0))); // Сумма договора лизинга
        $("#vatReturn").text(formatNumberAddSymbol(results.vatReturn.toFixed(0))); // Возврат 20% НДС

    }

    // Initial update on page load
    $sliders.each(function () {
        const $slider = $(this);
        const $valueDisplay = $slider.closest(".calculator-item").find(".js-value");
        updateSlider($slider, $valueDisplay);
    });

    // Update on input
    $sliders.on("input", function () {
        const $slider = $(this);
        const $valueDisplay = $slider.closest(".calculator-item").find(".js-value");
        updateSlider($slider, $valueDisplay);
    });
    $(".js-value").on("click", function () {
        $(this).css("display", "none");
        $(this).prev("input").css("display", "block").focus();

    });
    $(".inputCalculator").on("blur", function () {
        $(this).css("display", "none");
        $(this).next("p").css("display", "block");
    });
    let timer;

    //$(".inputCalculator").on("input", function () {
    //    let $this = $(this);
    //    clearTimeout(timer);
    //    timer = setTimeout(function () {
    //        $this.css("display", "none");
    //        $this.next("p").css("display", "block");
    //        console.log("Прошла 1 секунда с момента ввода");
    //    }, 1000);
    //});

    $slidersInput.on("input", function () {
        const $slider = $(this);
        const $valueDisplay = $slider.closest(".calculator-item").find(".js-value");
        updateSlider($slider, $valueDisplay);

    });
});
