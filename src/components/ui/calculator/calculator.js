//import { formatNumberWithSymbol } from '/src/assets/helpers/format.js'

//let data = {
//    contractPrice: {
//        value: 0,
//    },
//    firstPayment: {
//        percent: 0,
//        value: 0
//    },
//    contractTime: {
//        value: 0
//    },
//};

//function calculate() {
//    const R = 20.5 / 100;                       // Ставка банка, %
//    const F = 0.00 / 100;                       // Ставка компании, %
//    const A = 0.00 / 100;                       // Ставка агента, %
//    const S = 9500;                             // Дополнительные расходы, руб.
//    const T = 1200;                             // Выкупной платеж, руб.

//    let X = data.contractPrice.value;           // Стоимость предмета лизинга, руб.
//    let Y = data.firstPayment.percent / 100;    // Размер аванса, %
//    let Z = data.contractTime.value;            // Срок договора лизинга, мес.
//    let H = X * Y                               // Размер аванса, руб

//    let O = X * 0.03 / 12 * Z * 1.2;            // Маржа, руб.

//    let C = X * (1 - Y) * R / 12 * Math.pow((1 + R / 12), Z) / (Math.pow((1 + R / 12), Z) - 1) + (Z * X * (1 - Y) * R / 12 * Math.pow((1 + R / 12), Z) / (Math.pow((1 + R / 12), Z) - 1) - X * (1 - Y)) * 0.2 / Z + (X * A + S) * R / 12 * Math.pow((1 + R / 12), Z) / (Math.pow((1 + R / 12), Z) - 1) * 1.2 + X * F * 1.2 + O / Z;                                // Ежемесячный платеж, руб.

//    let D = (Z * C) + (X * Y) + T;              // Сумма договора лизинга, руб.
//    let E = (((D - X) / X) * 100) / (Z / 12)    // Удорожание в год, %
//    let P = D * 0.2
//    return {
//        monthlyPayment: C,
//        leaseTotal: D,
//        vatReturn: P,
//    };
//}

//function updateResults() {
//    const { monthlyPayment, leaseTotal, vatReturn } = calculate();

//    $("#monthlyPayment").text(formatNumberWithSymbol(Number(monthlyPayment.toFixed(0)))); //Ежемесячный платеж
//    $("#leaseTotal").text(formatNumberWithSymbol(Number(leaseTotal.toFixed(0)))); // Сумма договора лизинга
//    $("#vatReturn").text(formatNumberWithSymbol(Number(vatReturn.toFixed(0)))); // Возврат 20% НДС

//}

//function progressRange(range, valueInput) {
//    const min = parseInt(range.attr("min"));
//    const max = parseInt(range.attr("max"));
//    const progress = ((valueInput - min) / (max - min)) * 100;
//    range.val(valueInput);
//    range.css("background", `linear-gradient(to right, #0045b2 ${progress}%, #cbcbcb ${progress}%)`);
//}
//function validValue($this) {
//    let valueInput = parseInt($this.val());
//    const min = parseInt($this.attr("min"));
//    const max = parseInt($this.attr("max"));
//    if (valueInput > max) {
//        valueInput = max;
//    }
//    if (isNaN(valueInput) || valueInput < min) {
//        valueInput = min;
//    }
//    return valueInput;
//}

//$(document).ready(function () {
//    const $inputRange = $("input[type='range']");
//    function updateContractPrice(valueInput, $valueDisplay) {
//        data.contractPrice.value = valueInput;
//        $valueDisplay.text(formatNumberWithSymbol(valueInput));
//        updateFirstPayment($("#range2").val(), $("#range2").closest(".calculator-item").find(".js-value"));
//    }

//    function updateFirstPayment(valueInput, $valueDisplay) {
//        data.firstPayment.value = data.contractPrice.value / 100 * valueInput;
//        data.firstPayment.percent = valueInput;
//        $valueDisplay.text(`${valueInput} % / ${formatNumberWithSymbol(Math.round(data.firstPayment.value))}`);
//    }

//    function updateContractTime(valueInput, $valueDisplay) {
//        data.contractTime.value = valueInput;
//        //$valueDisplay.text(dateFormat(valueInput));
//        $valueDisplay.text(valueInput);
//    }

//    function updateRange($range, $valueDisplay) {
//        let valueInput = validValue($range)

//        switch ($range.attr("id")) {

//            case 'range1':
//                updateContractPrice(valueInput, $valueDisplay);
//                progressRange($('#range1'), valueInput)
//                break;

//            case 'range2':
//                updateFirstPayment(valueInput, $valueDisplay);
//                progressRange($('#range2'), valueInput)
//                break;

//            case 'range3':
//                updateContractTime(valueInput, $valueDisplay);
//                progressRange($('#range3'), valueInput)
//                break;
//        }
//        updateResults();
//    }

//    function updateInput($input, $valueDisplay) {
//        let valueInput = validValue($input)

//        switch ($input.attr("id")) {

//            case 'inputCalculator1':
//                updateContractPrice(valueInput, $valueDisplay);
//                progressRange($('#range1'), valueInput)
//                break;

//            case 'inputCalculator2':
//                updateFirstPayment(valueInput, $valueDisplay);
//                progressRange($('#range2'), valueInput)
//                break;
//            case 'inputCalculator3':
//                updateContractTime(valueInput, $valueDisplay);
//                progressRange($('#range3'), valueInput)
//                break;
//        }
//        updateResults()
//    }

//    // Initial update on page load
//    $inputRange.each(function () {
//        const $range = $(this);
//        const $valueDisplay = $range.closest(".calculator-item").find(".js-value");
//        updateRange($range, $valueDisplay);
//    });

//    // Update on input
//    $inputRange.on("input", function () {
//        const $range = $(this);
//        const $valueDisplay = $range.closest(".calculator-item").find(".js-value");
//        updateRange($range, $valueDisplay);
//    });

//    $(".js-value").on("click", function () {
//        if (!$(this).hasClass("not-input")) {
//            $(this).prev().val('');
//            $(this).css("display", "none");
//            $(this).prev("input").css("display", "block").focus();
//        }
//    });

//    $(".inputCalculator").on("blur", function () {
//        const $range = $(this);
//        const $valueDisplay = $range.closest(".calculator-item").find(".js-value");
//        $(this).css("display", "none");
//        $(this).next("p").css("display", "block");
//        updateInput($range, $valueDisplay);
//    });
//    let timer;
//    let timer2;
//    $(".inputCalculator").on("input", function () {
//        let $this = $(this);

//        clearTimeout(timer2);
//        timer2 = setTimeout(function () {
//            let valueInput = validValue($this)
//            $this.val(valueInput);
//        }, 0);
//        clearTimeout(timer);
//        timer = setTimeout(function () {
//            $this.css("display", "none");
//            $this.next("p").css("display", "block");
//        }, 2000);
//    });
//});



import { formatNumberWithSymbol } from '/src/assets/helpers/format.js'

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
    const R = 20.5 / 100;                       // Ставка банка, %
    const F = 0.00 / 100;                       // Ставка компании, %
    const A = 0.00 / 100;                       // Ставка агента, %
    const S = 9500;                             // Дополнительные расходы, руб.
    const T = 1200;                             // Выкупной платеж, руб.

    let X = data.contractPrice.value;           // Стоимость предмета лизинга, руб.
    let Y = data.firstPayment.percent / 100;    // Размер аванса, %
    let Z = data.contractTime.value;            // Срок договора лизинга, мес.
    let H = X * Y                               // Размер аванса, руб

    let O = X * 0.03 / 12 * Z * 1.2;            // Маржа, руб.

    let C = X * (1 - Y) * R / 12 * Math.pow((1 + R / 12), Z) / (Math.pow((1 + R / 12), Z) - 1) + (Z * X * (1 - Y) * R / 12 * Math.pow((1 + R / 12), Z) / (Math.pow((1 + R / 12), Z) - 1) - X * (1 - Y)) * 0.2 / Z + (X * A + S) * R / 12 * Math.pow((1 + R / 12), Z) / (Math.pow((1 + R / 12), Z) - 1) * 1.2 + X * F * 1.2 + O / Z;                                // Ежемесячный платеж, руб.

    let D = (Z * C) + (X * Y) + T;              // Сумма договора лизинга, руб.
    let E = (((D - X) / X) * 100) / (Z / 12)    // Удорожание в год, %
    let P = D * 0.2
    return {
        monthlyPayment: C,
        leaseTotal: D,
        vatReturn: P,
    };
}

function updateResults() {
    const { monthlyPayment, leaseTotal, vatReturn } = calculate();
    $("#monthlyPayment").text(formatNumberWithSymbol(Number(monthlyPayment.toFixed(0)))); //Ежемесячный платеж
    $("#leaseTotal").text(formatNumberWithSymbol(Number(leaseTotal.toFixed(0)))); // Сумма договора лизинга
    $("#vatReturn").text(formatNumberWithSymbol(Number(vatReturn.toFixed(0)))); // Возврат 20% НДС
}

function progressRange(valueInput, range) {
    const min = parseInt(range.attr("min"));
    const max = parseInt(range.attr("max"));

    const progress = ((valueInput - min) / (max - min)) * 100;
    range.val(valueInput);
    range.css("background", `linear-gradient(to right, #0045b2 ${progress}%, #cbcbcb ${progress}%)`);
}
function validValue($this) {
    let valueInput = parseInt($this.val().replace(/[^\d.-]/g, ''));
    const min = parseInt($this.attr("min"));
    const max = parseInt($this.attr("max"));

    if (valueInput > max) {
        valueInput = max;
    }
    if (isNaN(valueInput) || valueInput < min) {
        valueInput = min;
    }
    return valueInput;
}


$(document).ready(function () {
    const $inputRange = $("input[type='range']");
    const $inputManual = $(".inputCalculator");


    function updateContractPrice(valueInput, $valueDisplay) {
        data.contractPrice.value = valueInput;
        $valueDisplay.val(formatNumberWithSymbol(valueInput))
        updateFirstPayment($("#range2").val(), $("#range2").closest(".calculator-item").find(".inputCalculator"));
    }

    function updateFirstPayment(valueInput, $valueDisplay) {
        data.firstPayment.value = data.contractPrice.value / 100 * valueInput;
        data.firstPayment.percent = valueInput;
        $valueDisplay.val(formatNumberWithSymbol(Number(valueInput), "%"))
        $valueDisplay.next().text(formatNumberWithSymbol(Number(data.firstPayment.value.toFixed(0))))
    }

    function updateContractTime(valueInput, $valueDisplay) {
        data.contractTime.value = valueInput;
        $valueDisplay.val(formatNumberWithSymbol(valueInput, "мес"))
    }


    function updateAll($tag) {
        let $value = validValue($tag)
        switch ($tag.attr("id")) {
            case "inputCalculator1":
            case "range1":
                updateContractPrice($value, $('#inputCalculator1').closest(".calculator-item").find(".inputCalculator"));
                progressRange($value, $('#range1'))
                break;

            case 'inputCalculator2':
            case 'range2':
                updateFirstPayment($value, $('#inputCalculator2').closest(".calculator-item").find(".inputCalculator"));
                progressRange($value, $('#range2'))
                break;

            case 'inputCalculator3':
            case 'range3':
                updateContractTime($value, $('#inputCalculator3').closest(".calculator-item").find(".inputCalculator"));
                progressRange($value, $('#range3'))
                break;
        }
        updateResults()
    };


    $inputRange.each(function () {
        updateAll($(this));
    });

    $inputRange.add($inputManual).on("input", function () {
        updateAll($(this));
    });
    ($inputManual).on("focus", function () {
        $(this).val("");
        updateAll($(this));
    });

});
