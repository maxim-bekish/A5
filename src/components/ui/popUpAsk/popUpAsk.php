<link rel="stylesheet" href="/src/components/ui/popUpAsk/popUpAsk.css">
<script src="/src/components/ui/popUpAsk/popUpAsk.js"></script>


<section class="sidebar-ask popUp__sidebar">

   <div class="popUp__sidebar-box">

      <button class="popUp__sidebar-closed">
         <svg width="32" height="32" viewBox="0 0 32 32">
            <use href="<?php echo SVG_PATH; ?>icons.svg#icon-closed"></use>
         </svg>
      </button>

      <div class="popUp__sidebar-title">
         <h3> Есть вопросы? <br> Бесплатно проконсультируем </h3>
      </div>



      <div class="popup-ask-info">
         <p class="text-html">
            Выберите c кем связаться, оставьте контактные данные и наш специалист свяжется с вами в ближайшее время
         </p>
      </div>
      <div class="popup-ask-buttons">
         <button type="button" class="button button--outline">
            Консультация по лизингу
         </button>
         <button type="button" class="button button--outline">
            Бухгалтерия
         </button>
         <button type="button" class="button button--outline">
            Получить коммерческое предложение
         </button>
         <button type="button" class="button button--outline">
            Стать партнером
         </button>
      </div>
      <form class="js-myForm-popup-ask js-popApp-OK">
         <div class="popup-ask-newsletter-form">
            <div class="form-items-100 form-gray">
               <div class="form-group ">
                  <input name="name" id="name-ask" type="text" placeholder="" required>
                  <label for="name-ask">Ваше имя</label>
               </div>
               <div class="form-group ">
                  <input name="tel" id="tel-ask" class="phone" type="tel" pattern="\+7 \([0-9]{3}\) [0-9]{3}-[0-9]{2}-[0-9]{2}" placeholder="" required>
                  <label for="tel-ask">Телефон</label>
               </div>
               <div class="form-group ">
                  <input name="ask" id="ask" type="text" placeholder="">
                  <label for="ask">Задайте вопрос или опишите проблему...</label>
               </div>
            </div>
            <div class="checkbox checkbox--white">
               <input class="custom-checkbox " type="checkbox" id="option-ask" required>
               <label for="option-ask">
                  Согласен с политикой конфиденциальности
               </label>
            </div>
            <button type="button" class="button button--blue js-popUp-submitBtn js-submitBtn js-submitBtn-popup-ask">
               Отправить
            </button>
         </div>
      </form>


   </div>
</section>