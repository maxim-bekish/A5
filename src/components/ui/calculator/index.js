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
    lastPayment: {
        percent: 0,
        value: 0
    }
};

$(document).ready(function () {
    const $sliders = $("input[type='range']");



    const r = 40.00 / 100; //  Ставка банка, %
    const f = 0.17 / 100;  //  Ставка компании, %
    const a = 0.00 / 100;  //  Ставка агента, %
    const s = 0.00;        // Дополнительные расходы, руб.
    //const t = 1000.00;     // Выкупной платеж, руб.

    function calculate() {
        let x = data.contractPrice.value;
        let y = data.firstPayment.percent / 100;
        let z = data.contractTime.value;
        let t = data.lastPayment.percent / 100 * x;
        let c = x * (1 - y) * r / 12 * (Math.pow(1 + r / 12, z) / (Math.pow(1 + r / 12, z) - 1))
            + (z * x * (1 - y) * r / 12 * (Math.pow(1 + r / 12, z) / (Math.pow(1 + r / 12, z) - 1)) - x * (1 - y)) * 0.2 / z
            + (x * a + s) * r / 12 * (Math.pow(1 + r / 12, z) / (Math.pow(1 + r / 12, z) - 1)) * 1.2
            + x * f * 1.2;


        let d = z * c + x * y + t;
        let e = ((d - x) / x * 100) / (z / 12);

        console.log(t)
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
        updateFirstPayment($("#range2").val(), $("#range2").closest(".calculator-item").find(".value"));
        updateResults();
    }

    function updateFirstPayment(sliderValue, $valueDisplay) {
        data.firstPayment.value = data.contractPrice.value / 100 * sliderValue;
        data.firstPayment.percent = sliderValue;
        $valueDisplay.text(`${sliderValue} % / ${formatNumberAddSymbol(data.firstPayment.value)}`);
        updateResults();
    }

    function updateContractTime(sliderValue, $valueDisplay) {
        data.contractTime.value = sliderValue;
        $valueDisplay.text(dateFormat(sliderValue));
        updateResults();
    }

    function updateLastPayment(sliderValue, $valueDisplay) {

        //console.log(data.lastPayment.percent)
        data.lastPayment.value = data.contractPrice.value * sliderValue / 100;
        data.lastPayment.percent = sliderValue;
        $valueDisplay.text(`${sliderValue}% / ${formatNumberAddSymbol(data.lastPayment.value)}`);
        updateResults();
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

    function updateResults() {
        const results = calculate();

        $("#monthlyPayment").text(formatNumberAddSymbol(results.monthlyPayment.toFixed(0))); //Ежемесячный платеж
        $("#annualCost").text(results.annualCost.toFixed(2) + ' %'); // Годовое удорожание
        $("#leaseTotal").text(formatNumberAddSymbol(results.leaseTotal.toFixed(0))); // Сумма договора лизинга
        $("#vatReturn").text(formatNumberAddSymbol(results.vatReturn.toFixed(0))); // Возврат 20% НДС
        //$("#taxReduction").text(formatNumberAddSymbol(results.taxReduction.toFixed(2))); // Снижение налога на прибыль
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
