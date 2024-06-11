<section class="about-clients container mt-160px">
   <div class="about-clients__header">
      <div class="about-clients__header-text">
         <p>Клиенты</p>
      </div>
      <div class="about-clients__header-title">
         <h3 class="about-clients__title title-page-h3">
            Решили логистические проблемы на рынке 2022
         </h3>
      </div>
   </div>
   <div class="about-clients__content">
      <div class="about-clients__text">
         <p></p>
      </div>
      <div class="about-clients__text">
         <p>
            Востребованность лизинга за 9 месяцев 2023 года возросла в 2 раза по сравнению с аналогичным периодом
            2022 года. Резкий скачок связан с геополитическим кризисом, нехваткой техники и быстрым реагированием
            лизинговых компаний.
         </p>
      </div>
      <div class="about-clients__text">
         <p>
            Мы своевременно адаптировались к новым условиям, перестроили свою логистическую цепочку и сделали упор
            на сотрудничество с дружественными странами. Компания А5 совместно с коллегами не дала «просесть»
            отечественному производству, а также вывела российский бизнес на показатели выше, чем в докризисный 2021
            год.
         </p>
      </div>
   </div>
   <div class="about-clients__slider">
      <!--тут будет слайдер-->
   </div>
</section>



<style>
   .about-clients {
      display: flex;
      flex-direction: column;
   }

   .about-clients__header {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      grid-template-rows: 1fr;
      grid-column-gap: 40px;
      grid-row-gap: 0px;
   }

   .about-clients__header-text {
      grid-area: 1 / 1 / 2 / 2;
   }

   .about-clients__header-title {
      grid-area: 1 / 2 / 2 / 5;
   }


   .about-clients__content {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      grid-template-rows: 1fr;
      grid-column-gap: 40px;
      margin-top: 20px;
   }

   .about-clients__content div:nth-child(1) {
      grid-area: 1 / 1 / 2 / 2;
   }

   .about-clients__content div:nth-child(2) {
      grid-area: 1 / 2 / 2 / 3;
   }

   .about-clients__content div:nth-child(3) {
      grid-area: 1 / 3 / 2 / 5;
      max-width: 553px;
   }
</style>