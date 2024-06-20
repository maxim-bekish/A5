<div class="leasing-calculator__result">
   <div class="leasing-calculator__header">
      <div class="leasing-calculator__header-item leasing-calculator__header-item--big">
         <p class="leasing-calculator__header-title">Годовое удорожание:</p>
         <p id="annualCost" class="leasing-calculator__header-value leasing-calculator__header-value--big"></p>
      </div>
      <div class="leasing-calculator__header-item">
         <p class="leasing-calculator__header-title">Возврат 20% НДС:</p>
         <p id="vatReturn" class="leasing-calculator__header-value"></p>
      </div>
      <div class="leasing-calculator__header-item leasing-calculator__header-item--big">
         <p class="leasing-calculator__header-title">Ежемесячный платеж:</p>
         <p id="monthlyPayment" class="leasing-calculator__header-value leasing-calculator__header-value--medium"></p>
      </div>
      <div class="leasing-calculator__header-item">
         <p class="leasing-calculator__header-title">Сумма договора лизинга:</p>
         <p id="leaseTotal" class="leasing-calculator__header-value"></p>
      </div>
   </div>
   <div>
      <button id="js-popUp-offer"  class="button button--white">
         Получить коммерческое предложение
      </button>
      <p class="leasing-calculator__info">
         Стоимость предмета лизинга и приведенные расчеты через калькулятор являются предварительными. Для точного
         определения процентной ставки по договору, пожалуйста, заполните онлайн-заявку на расчет коммерческого
         предложения.
      </p>
   </div>
</div>

<style>
   .leasing-calculator__result {
      background-color: var(--back-blue);
      color: var(--white);
      padding: 50px;
      display: flex;
      max-width: 600px;
      flex-direction: column;
      justify-content: space-between;
   }

   .leasing-calculator__header {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      grid-template-rows: repeat(2, 1fr);
      row-gap: 40px;
      justify-items: start;
      align-items: center;
   }

   .leasing-calculator__box--content {
      display: flex;
      justify-content: space-between;
   }

   .leasing-calculator__header-title {
      font-family: var(--font-inter);
      font-size: 16px;
      font-weight: 400;
      line-height: 16px;
      text-align: left;
      color: rgba(241, 241, 241, 1);
   }

   .leasing-calculator__header-item--big .leasing-calculator__header-value--big {
      font-family: var(--font-inter);
      font-size: 48px;
      font-weight: 600;
      line-height: 58.08px;
      text-align: left;
      color: rgba(255, 255, 255, 1);
   }

   .leasing-calculator__header-item--big .leasing-calculator__header-value--medium {
      font-family: var(--font-inter);
      text-align: left;
      color: rgba(255, 255, 255, 1);
      font-size: 35px;
      font-weight: 600;
      line-height: 42.35px;
   }

   .leasing-calculator__header-item {
      display: flex;
      gap: 5px;
      flex-direction: column;
      width: 100%;
      height: 100%;
      align-items: center;
      justify-content: flex-end;
   }

   .leasing-calculator__header-value {
      font-family: var(--font-inter);
      font-size: 28px;
      font-weight: 600;
      line-height: 33.88px;
      text-align: left;
      color: rgba(255, 255, 255, 0.75);
   }

   .leasing-calculator__header-item p {
      width: 100%;
      max-width: 200px;
   }

   .leasing-calculator__result button {
      margin-bottom: 20px;
   }

   .leasing-calculator__info {
      font-family: var(--font-inter);
      font-size: 12px;
      font-weight: 400;
      line-height: 16.8px;
      color: rgba(128, 162, 216, 1);
   }

   @media (max-width: 768px) {

      .leasing-calculator__result {
         max-width: 100%;
         gap: 60px;
         padding: 40px;
      }

      .leasing-calculator__header-title {
         font-size: 15px;
         line-height: 15px;
      }

      .leasing-calculator__header-item--big .leasing-calculator__header-value--big,
      .leasing-calculator__header-item--big .leasing-calculator__header-value--medium {
         font-size: 30px;
         line-height: 36.3px;
      }

      .leasing-calculator__header-value {
         font-size: 20px;
         line-height: 24.2px;
      }

      .leasing-calculator__header .leasing-calculator__header-item:nth-child(1) {
         grid-area: 1 / 1 / 2 / 2;
      }

      .leasing-calculator__header .leasing-calculator__header-item:nth-child(2) {
         grid-area: 2 / 2 / 3 / 3;
      }

      .leasing-calculator__header .leasing-calculator__header-item:nth-child(3) {
         grid-area: 1 / 2 / 2 / 3;
      }

      .leasing-calculator__header .leasing-calculator__header-item:nth-child(4) {
         grid-area: 2 / 1 / 3 / 2;
      }

      .leasing-calculator__header-item {
         align-items: start;
      }
   }
</style>