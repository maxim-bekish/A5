<?php
include 'src/state/state.php';
?>

<section class="grid_1-3-box container production mt-160px">
   <div class="grid_1-3_1">
      <p class="p20px">
         Продукция
      </p>
   </div>
   <div class="grid_1-3_3 production">
      <?php
      include 'src/components/page/program-leasing/production/production-select.php';
      ?>
      <div class="production__cards">
         <?php foreach ($production as $el) : ?>
            <a href="<?php echo htmlspecialchars($el['href']); ?>?item=<?php echo htmlspecialchars($el['name']); ?>&id=<?php echo htmlspecialchars($el['id']); ?>">
               <div class="production__cards--item--img">
                  <img src="<?php echo IMG_PATH . 'inventory/' . htmlspecialchars($el['imagePreview']); ?>" alt="img">
               </div>
               <div class="production__cards--item--text">
                  <p>
                     <?php echo nl2br(htmlspecialchars($el['name'])); ?>
                  </p>
                  <p>
                     от <?php echo format($el['priceMonth'], "₽/мес."); ?>
                  </p>
                  <p>
                     стоимость: от <?php echo format($el['price'], "₽"); ?>
                  </p>
               </div>
            </a>
         <?php endforeach; ?>
         <div class="production__module-window">
            <h2 class="production__module-window__title">Не нашли нужный вам продукт?</h2>
            <p class="production__module-window__description">
               Оставьте свои контактные данные и наш
               <br>
               менеджер перезвонит в ближайшее время
            </p>
            <form class="js-myForm production__module-window__form">
               <div class="form-items-100 form-gray production__module-window__form-items">
                  <div class="form-group production__module-window__form-group">
                     <input class="form-group__input name" name="production-name" id="production-name" type="text" placeholder="" required>
                     <label class="form-group__label" for="production-name">Ваше имя</label>
                  </div>
                  <div class="form-group production__module-window__form-group">
                     <input class="form-group__input phone" name="production-phone" id="production-phone" type="tel" placeholder="" required>
                     <label class="form-group__label" for="production-phone">Телефон</label>
                  </div>
               </div>
               <div class="checkbox production__module-window__checkbox">
                  <input class="custom-checkbox checkbox__input" type="checkbox" id="free-production" required>
                  <label class="checkbox__label" for="free-production">
                     Согласен с политикой конфиденциальности
                  </label>
               </div>
               <button class="button button--blue js-popUp-submitBtn  production__module-window__submitBtn" type="button" disabled>
                  Оставить заявку
               </button>
            </form>
            <img class="production__module-window-img" src="<?php echo IMG_PATH ?>dopForm.png" alt="">
         </div>
      </div>
   </div>
</section>




<script>
   $(document).ready(function() {
      function formatPhoneNumber(value) {
         if (!value) return '+7 '; // Если значение пустое, возвращаем "+7 "
         const phoneNumber = value.replace(/[^\d]/g, ''); // Удаляем все нецифровые символы, кроме цифр
         const phoneNumberWithoutSeven = phoneNumber.startsWith('7') ? phoneNumber.slice(1) : phoneNumber; // Убираем начальную 7, если она есть
         const phoneNumberLength = phoneNumberWithoutSeven.length; // Определяем длину оставшегося телефонного номера
         // Форматируем номер в зависимости от его длины
         if (phoneNumberLength <= 0) return '+7 (';
         if (phoneNumberLength <= 3) return `+7 (${phoneNumberWithoutSeven.slice(0, 3)}`;
         if (phoneNumberLength <= 6) return `+7 (${phoneNumberWithoutSeven.slice(0, 3)}) ${phoneNumberWithoutSeven.slice(3, 6)}`;
         if (phoneNumberLength <= 8) return `+7 (${phoneNumberWithoutSeven.slice(0, 3)}) ${phoneNumberWithoutSeven.slice(3, 6)}-${phoneNumberWithoutSeven.slice(6, 8)}`;
         return `+7 (${phoneNumberWithoutSeven.slice(0, 3)}) ${phoneNumberWithoutSeven.slice(3, 6)}-${phoneNumberWithoutSeven.slice(6, 8)}-${phoneNumberWithoutSeven.slice(8, 10)}`;
      }

      function checkFormValidity() {
         const name = $('.production__module-window__form .name').val();
         const phone = $('.production__module-window__form .phone').val();
         const checkbox = $('.production__module-window__form .checkbox__input').is(':checked');
         const isFormValid = name && phone && checkbox;
         $('.production__module-window__form .js-popUp-submitBtn').prop('disabled', !isFormValid);
      }

      function resetForm() {
         $('.production__module-window .js-myForm').removeClass('submitted-error');
         $('.production__module-window__form .name').val('')
         $('.production__module-window__form .phone').val('')
         $('.production__module-window__form .checkbox__input').prop('checked', false)
         checkFormValidity(); // Проверяем валидность формы после сброса
      }

      $('.production__module-window__form .phone').on('input', function() {
         const formattedPhoneNumber = formatPhoneNumber(this.value);
         this.value = formattedPhoneNumber;
         checkFormValidity();
      });

      checkFormValidity();

      $('.production__module-window__form .name, .production__module-window__form .checkbox__input').on('input change', checkFormValidity);

      $('#js-production__module-window').click(function() {
         resetForm(); // Сбрасываем форму при каждом открытии
         $('.production__module-window').css('display', 'block');
         $('.app').addClass('blurred');
         $('body').css('overflow', 'hidden');
      });

      $('.production__module-window .js-popUp-submitBtn').click(function() {
         if (!$(this).prop('disabled')) $('.production__module-window-box').css('display', 'none');
         resetForm(); // 
      });
      if ($('.production__cards a').length % 3 === 1) {
         $('.production__module-window-img').css("display", "none")
         $('.production__cards').css("flex-direction", "row-reverse")
      }
   });
</script>



<style>
   .production__module-window-box {
      display: flex;
      width: 100%;
   }


   .production__module-window-img {
      max-width: 450px;
      right: -450px;
      height: 100%;
      top: 0;
      position: absolute;
   }

   .production__module-window {
      padding: 50px;
      background: #F2F2F2;
      max-width: 860px;
      width: 100%;
      position: relative;
   }

   .production__module-window__checkbox {
      margin: 20px 0 30px 0;
   }

   .production__module-window__form-group {
      margin: 0 !important;

   }

   .production__module-window__form-items {
      gap: 20px !important;
      margin: 0 !important;
   }

   .production__module-window__title {
      text-wrap: nowrap;
      font-size: 50px;
      line-height: 52px;
      color: #0045B2;
   }

   .production__module-window__description {
      margin: 15px 0 40px 0;
      font-size: 20px;
      line-height: 28px;
   }
</style>


<style>
   .production__cards {
      margin-top: 40px;
      display: flex;
      column-gap: 40px;
      row-gap: 60px;
      flex-wrap: wrap;
      flex-direction: row;
   }

   .production__cards--item--img {
      width: 410px;
      height: 410px;
      background-color: #F2F2F2;
      margin-bottom: 8px
   }

   .production__cards--item--img img {
      object-fit: none;
      object-position: center;
      height: 100%;
   }

   .inventory__content--item--text p:nth-child(1) {
      font-size: 20px;
   }

   .production__cards--item--text p:nth-child(2) {
      font-size: 20px;
      font-weight: 500;
      color: #979797;
      margin: 8px 0;
   }

   .production__cards--item--text p:nth-child(3) {
      font-size: 16px;
      line-height: 19.36px;
      color: #979797;
   }
</style>