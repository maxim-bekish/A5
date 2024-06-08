<link rel="stylesheet" href="/src/components/ui/popUpAsk/index.css">
<script src="/src/components/ui/popUpAsk/index.js"></script>
<section class="sidebar-ask">
   <div class="popup-ask">
      <button class="popup-ask-closed">
         <svg width="32" height="32" viewBox="0 0 32 32">
            <use href="<?php echo SVG_PATH; ?>icons.svg#icon-closed"></use>
         </svg>
      </button>
      <div class="popup-ask-title">
         <h3>
            Есть вопросы? <br>
            Бесплатно проконсультируем
         </h3>
      </div>
      <div class="popup-ask-info">
         <p class="text-html">
            Выберите с кем связаться, оставьте контактные данные
            <br>
            и наш специалист свяжется с вами в ближайшее время
         </p>
      </div>
      <div class="popup-ask-buttons">
         <button type="button" class="button button-outline">
            Консультация по лизингу
         </button>
         <button type="button" class="button button-outline">
            Бухгалтерия
         </button>
         <button type="button" class="button button-outline">
            Получить коммерческое предложение
         </button>
         <button type="button" class="button button-outline">
            Стать партнером
         </button>
      </div>
      <form class="js-myForm-popup-ask">
         <div class="popup-ask-newsletter-form">
            <div class="form-items-100 form-gray">
               <div class="form-group ">
                  <input name="name" id="name-ask" type="text" placeholder="" required>
                  <label for="name-ask">Ваше имя</label>
               </div>
               <div class="form-group ">
                  <input name="tel" id="tel-ask" type="tel" placeholder="" required>
                  <label for="tel-ask">Телефон</label>
               </div>
               <div class="form-group ">
                  <input name="ask" id="ask" type="text" placeholder="">
                  <label for="ask">Задайте вопрос или опишите проблему...</label>
               </div>
            </div>
            <div class="checkbox">
               <input class="custom-checkbox" type="checkbox" id="option-ask">
               <label for="option-ask">
                  Согласен с политикой конфиденциальности
               </label>
            </div>
            <button class="button button-blue js-submitBtn-popup-ask">
               Отправить
            </button>
         </div>
      </form>
   </div>
</section>