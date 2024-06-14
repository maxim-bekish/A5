<?php
$leasingGuide = [
   [
      'title' => 'Работаете ли вы с клиентами, использующими упрощённую систему налогообложения?',
      'text' => "test"
   ],
   [
      'title' => 'Нужен ли залог при заключении договора лизинга?',
      'text' => 'При принятии решения о предоставлении услуг лизинга система налогообложения не имеет никакого значения. Сроки принятия решений и проведения сделки в целом такие же, как и по другим клиентам. В частности, клиенты на упрощённой системе налогообложения могут пользоваться предложениями экспресс-лизинга — в Альфа-Лизинг такие сделки могут быть оформлены в срок от 1 дня всего по 2 документам — паспорту и свидетельству ФНС'
   ],
   [
      'title' => 'Могу ли я получить одобрение новой заявки на финансирование, если мой действующий договор лизинга ещё не завершён?',
      'text' => null
   ],
   [
      'title' => 'Могу ли я оформить лизинг, если у меня уже есть кредит?',
      'text' => null
   ],
   [
      'title' => 'Меня не устраивает тариф, который вы предлагаете',
      'text' => null
   ],
];
?>


<section class="leasing-guide">
   <div class="leasing-guide__buttons">
      <button disabled class="button button--outline">
         Структура сделки
      </button>
      <button class="button button--outline">
         Оформление
      </button>
      <button disabled class="button button--outline">
         Для физ. лиц
      </button>
      <button disabled class="button button--outline">
         Выгода лизинга
      </button>
      <button disabled class="button button--outline">
         Правила пользования
      </button>
   </div>
   <div class="leasing-guide__list">

      <?php foreach ($leasingGuide as $el) : ?>
         <div class="leasing-guide__item">
            <div class="leasing-guide__list-title">
               <h4>
                  <?php echo htmlspecialchars($el['title']); ?>
               </h4>
               <svg class=" leasing-guide__icon-down" width="32" height="18" viewBox="0 0 32 18" fill="none">
                  <use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-down-big"></use>
               </svg>
            </div>


            <?php if ($el['text']) : ?>
               <p class="leasing-guide__text hidden">
               <?php echo htmlspecialchars($el['text']); ?>
            </p>
            <?php endif; ?>

            
         </div>
      <?php endforeach; ?>
   </div>
</section>


<style>
   .leasing-guide__list-title h4 {
      font-size: 24px;
      line-height: 24px;
      color: #0045B2;
      max-width: 900px;
   }

   .leasing-guide__text {
      margin-top: 30px;
      transition: all 0.3s ease;
      max-height: 500px;
      max-width: 900px;
      /* Подберите значение в зависимости от вашего контента */
      opacity: 1;
      overflow: hidden;
   }

   .leasing-guide__text.hidden {
      max-height: 0;
      opacity: 0;
      margin-top: 0px;
   }

   .leasing-guide__list-title .rt180 {
      transform: rotateX(180deg);
   }

   .leasing-guide__icon-down {
      cursor: pointer;
      transition: transform 0.3s ease;
   }

   .leasing-guide__item {
      padding: 30px 38px 30px 0px;
      border-top: 1px solid #979797;
   }

   .leasing-guide__item:last-child {
      border-bottom: 1px solid #979797;
   }

   .leasing-guide__buttons {
      display: flex;
      gap: 20px;
      margin-bottom: 40px;
   }

   .leasing-guide__buttons button {
      max-width: 191px;
      height: 45px;
      font-size: 16px;
      font-weight: 500;
      line-height: 19.36px;
      padding: 0;
   }

   .leasing-guide__list-title {
      display: flex;
      align-items: center;

      justify-content: space-between;
   }
</style>

<script>
   $(document).ready(function() {
      $('.leasing-guide__icon-down').click(function() {
         $(this).toggleClass('rt180');
         $(this).closest('.leasing-guide__list-title').next('.leasing-guide__text').toggleClass('hidden');
      });
   });
</script>