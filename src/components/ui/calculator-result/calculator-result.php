<link rel="stylesheet" href="src/components/ui/calculator-result/calculator-result.css">

<div class="leasing-calculator__result">
   <div class="leasing-calculator__header">
      <div class="leasing-calculator__header-item leasing-calculator__header-item--big w-50">
         <p class="leasing-calculator__header-title">Годовое удорожание:</p>
         <p id="annualCost" class="leasing-calculator__header-value leasing-calculator__header-value--big"></p>
      </div>
      <div class="leasing-calculator__header-item w-50">
         <p class="leasing-calculator__header-title">Возврат 20% НДС:</p>
         <p id="vatReturn" class="leasing-calculator__header-value"></p>
      </div>
      <div class="leasing-calculator__header-item leasing-calculator__header-item--big w-50">
         <p class="leasing-calculator__header-title">Ежемесячный платеж:</p>
         <p id="monthlyPayment" class="leasing-calculator__header-value leasing-calculator__header-value--medium"></p>
      </div>
      <div class="leasing-calculator__header-item w-50">
         <p class="leasing-calculator__header-title">Сумма договора лизинга:</p>
         <p id="leaseTotal" class="leasing-calculator__header-value"></p>
      </div>
   </div>
   <div>
      <button id="js-popUp-offer" class="button button--white">
         Получить коммерческое предложение
      </button>
      <p class="leasing-calculator__info">
         Стоимость предмета лизинга и приведенные расчеты через калькулятор являются предварительными. Для точного
         определения процентной ставки по договору, пожалуйста, заполните онлайн-заявку на расчет коммерческого
         предложения.
      </p>
   </div>
</div>