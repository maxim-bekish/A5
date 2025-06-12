<link rel="stylesheet" href="src/components/ui/calculator-result/calculator-result.css">

<div class="leasing-calculator__result">
  <div class="leasing-calculator__header">

    <div class="leasing-calculator__header-item leasing-calculator__header-item--big ">
      <p class="leasing-calculator__header-title">Ежемесячный платеж:</p>
      <p id="monthlyPayment" class="leasing-calculator__header-value "></p>
    </div>
    <div class="leasing-calculator__header-item ">
      <p class="leasing-calculator__header-title">Возврат 20% НДС:</p>
      <p id="vatReturn" class="leasing-calculator__header-value"></p>
    </div>
    <div class="leasing-calculator__header-item ">
      <p class="leasing-calculator__header-title">Сумма договора :</p>
      <p id="leaseTotal" class="leasing-calculator__header-value"></p>
    </div>
  </div>
  <div>
    <?php
    require_once 'src/components/ui/button-popup/index.php';
    commercialOffer("  Получить коммерческое предложение", "button--white")
    ?>
    <p class="leasing-calculator__info">
      Стоимость предмета лизинга и приведенные расчеты через калькулятор являются предварительными. Для точного
      определения процентной ставки по договору, пожалуйста, заполните онлайн-заявку на расчет коммерческого
      предложения.
    </p>
  </div>
</div>