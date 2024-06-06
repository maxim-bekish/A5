<link rel="stylesheet" href="/src/components/ui/popUpContacts/index.css">
<script src="/src/components/ui/popUpContacts/index.js"></script>
<section class="sidebar">
   <div class="popup-contacts">
      <button class="popup-contacts-closed">
         <svg width="32" height="32" viewBox="0 0 32 32">
            <use href="<?php echo SVG_PATH; ?>icons.svg#icon-closed"></use>
         </svg>
      </button>
      <div class="popup-contacts-title max-w-462px">
         <h3>Контакты</h3>
      </div>
      <div class="popup-contacts-radio max-w-462px">
         <div class=" radio-button">
            <label class="custom-radio">
               <input type="radio" name="1">
               <span class="text-html">Нижний Новгород</span>
               <span class="radio-checkmark"></span>
            </label>
         </div>
         <div class=" radio-button">
            <label class="custom-radio">
               <input checked type="radio" name="1">
               <span class="text-html">Тюмень</span>
               <span class="radio-checkmark"></span>
            </label>
         </div>
      </div>
      <div class="popup-contacts-tel max-w-462px">
         <a href="tel:+73452595069">7 (3452) 59-50-69</a>
      </div>
      <div class="popup-contacts-contacts max-w-462px">
         <div class="popup-contacts-contacts-office">
            <h5>Офис</h5>
            <p>
               Тюмень, ул. Грибоедова, дом 6, <br>
               корпус 1/7, офис 3/2
            </p>
            <p class="working-hours">9:00 — 18:00</p>
            <a href="mailto:artfin-t@yandex.ru">artfin-t@yandex.ru</a>
         </div>
         <div class="popup-contacts-contacts-network">
            <h5>Соцсети</h5>
            <a href="#">Telegram</a>
            <a href="#">Vkontakte</a>
            <a href="#">WhatsAPP</a>
         </div>
      </div>
      <div class="popup-contacts-map">
         <p>должна быть карта</p>
      </div>
      <div class="popup-contacts-newsletter">
         <p class="max-w-462px">
            Подпишись, чтобы быть в курсе последних новостей А5
         </p>
         <form class="js-myForm-popup-contacts">
            <div class="popup-contacts-newsletter-form" >
               <div class="form-items-100 form-gray">
                  <div class="form-group ">
                     <input name="email" id="email" type="email" placeholder="" required>
                     <label for="email">Email</label>
                  </div>
               </div>
               <button class="button button-blue js-submitBtn-popup-contacts">
                  Подписаться
               </button>
            </div>


            <div class="checkbox">
               <input class="custom-checkbox " type="checkbox" id="option-two">
               <label for="option-two">
                  Согласен с политикой конфиденциальности
               </label>
            </div>

            
         </form>
      </div>
   </div>
</section>