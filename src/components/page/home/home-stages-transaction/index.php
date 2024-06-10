<!--<link rel="stylesheet" href="/src/components/page/home/home-stages-transaction/index.css">-->
<script src="/src/components/page/home/home-stages-transaction/index.js"></script>

<section class="stages-transaction mt-160px container">
   <h3 class="title-page-h3">Этапы сделки</h3>
   <div class="stages-transaction__box">
      <div class="stages-transaction__content">
         <hr class="stages-transaction__separator">
         <div class="stages-transaction__item">
            <h4 class="stages-transaction__item-title">Подтверждение заявки</h4>
            <p class="stages-transaction__item-text">
               Вы оставляете заявку на сайте. <br>
               В течение 2-х часов наш сотрудник связывается с вами и подтверждает заявку
            </p>
         </div>
         <hr class="stages-transaction__separator">
         <div class="stages-transaction__item">
            <h4 class="stages-transaction__item-title">Подготовка документов</h4>
            <p class="stages-transaction__item-text">
               Персональный менеджер курирует вас, объясняет, какие документы нужно предъявить и направляет их на
               одобрение
            </p>
         </div>
         <hr class="stages-transaction__separator">
         <div class="stages-transaction__item">
            <h4 class="stages-transaction__item-title">Одобрение и оплата</h4>
            <p class="stages-transaction__item-text">
               Мы принимаем решение, подписываем договор, только тогда вы вносите аванс
            </p>
         </div>
         <hr class="stages-transaction__separator">
         <div class="stages-transaction__item">
            <h4 class="stages-transaction__item-title">Передача <br> предмета лизинга</h4>
            <p class="stages-transaction__item-text">
               Далее поставщик передаёт вам в пользование автотранспорт, оборудование или недвижимость
            </p>
         </div>
         <hr class="stages-transaction__separator">
      </div>
      <button type="button" class="button button--blue stages-transaction__button">Бесплатная консультация</button>
   </div>
</section>



<style>
   .stages-transaction {
      display: flex;
      justify-content: space-between;
   }

   .stages-transaction__box {
      width: calc(50% - 20px);
   }

   .stages-transaction__content {
      display: flex;
      flex-direction: column;
   }

   .stages-transaction__separator {
      margin: 0;
   }

   .stages-transaction__item {
      display: flex;
      align-items: center;
      height: 110px;
   }

   .stages-transaction__item-title {
      font-family: var(--font-inter);
      font-size: 35px;
      font-weight: 400;
      line-height: 36.43px;
      text-align: left;
      color: rgba(0, 69, 178, 1);
      width: 50%;
   }

   .stages-transaction__item-text {
      width: 50%;
   }

   .stages-transaction__button {
      margin-top: 60px;
      max-width: 330px;
   }

   @media (max-width: 768px) {
      .stages-transaction {
         flex-direction: column;
         gap: 20px;
      }

      .stages-transaction__box {
         width: 100%;
      }

      .stages-transaction__item-title {
         font-size: 24px;
         line-height: 24.98px;
      }

      .stages-transaction__button {
         margin-top: 50px;
      }
   }
</style>