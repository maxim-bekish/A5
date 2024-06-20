<section class="popUp-offer-box">
   <div class="popUp-offer ">
      <button type="button" class="js-popUp-closed popUp-offer__closed">
         <svg width="24" height="24" viewBox="0 0 24 24">
            <use href="<?php echo SVG_PATH; ?>icons.svg#icon-closed-24"></use>
         </svg>
      </button>
      <h2 class="popUp-offer__title">Получите коммерческое <br> предложение</h2>
      <p class="popUp-offer__description"> </p>
      <form class="js-myForm popUp-offer__form">
         <div class="form-items-100 form-gray popUp-offer__form-items">
            <div class="form-group popUp-offer__form-group">
               <input class="form-group__input name" name="offer-name" id="offer-name" type="text" placeholder="" required>
               <label class="form-group__label" for="offer-name">Ваше имя</label>
            </div>
            <div class="form-group popUp-offer__form-group">
               <input class="form-group__input phone" name="offer-phone" id="offer-phone" type="tel" placeholder="" required>
               <label class="form-group__label" for="offer-phone">Телефон</label>
            </div>
            <div class="form-group">
               <input class="email" name="offer-email" id="email" type="offer-email" placeholder="" required>
               <label for="offer-email">Email</label>
            </div>
         </div>
         <div class="checkbox popUp-offer__checkbox">
            <input class="custom-checkbox checkbox__input" type="checkbox" id="free-offer">
            <label class="checkbox__label" for="free-offer">
               Согласен с политикой конфиденциальности
            </label>
         </div>
         <button class="button button--blue js-popUp-submitBtn  popUp-offer__submitBtn " type="button">
            Оставить заявку
         </button>
      </form>
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
         const name = $('.popUp-offer__form .name').val();
         const phone = $('.popUp-offer__form .phone').val();
         const email = $('.popUp-offer__form .email').val();
         const checkbox = $('.popUp-offer__form .checkbox__input').is(':checked');
         const isFormValid = name && phone && checkbox && email;
         $('.popUp-offer__form .js-popUp-submitBtn').prop('disabled', !isFormValid);
      }

      function resetForm() {
         $('.popUp-offer-box .js-myForm').removeClass('submitted-error');
         $('.popUp-offer__form .name').val('')
         $('.popUp-offer__form .phone').val('')
         $('.popUp-offer__form .email').val('')
         $('.popUp-offer__form .checkbox__input').prop('checked', false)
         checkFormValidity(); // Проверяем валидность формы после сброса
      }

      $('.popUp-offer__form .phone').on('input', function() {
         const formattedPhoneNumber = formatPhoneNumber(this.value);
         this.value = formattedPhoneNumber;
         checkFormValidity();
      });

      checkFormValidity();

      $('.popUp-offer__form .name, .popUp-offer__form .checkbox__input').on('input change', checkFormValidity);

      $('#js-popUp-offer').click(function() {
         resetForm(); // Сбрасываем форму при каждом открытии
         $('.popUp-offer-box').css('display', 'block');
         $('.app').addClass('blurred');
         $('body').css('overflow', 'hidden');
      });

      $('.js-popUp-closed').click(function() {
         $('.popUp-offer-box').css('display', 'none');
         $('.app').removeClass('blurred');
         $('body').css('overflow', 'auto');
      });

      $('.popUp-offer .js-popUp-submitBtn').click(function() {
         if (!$(this).prop('disabled')) $('.popUp-offer-box').css('display', 'none');

      });
   });
</script>


<style>
   .popUp-offer-box {
      display: none;
      width: 100vw;
      height: 100vh;
      z-index: 9999999;
      position: fixed;
      background-color: #9797974D;
      top: 0;
      left: 0;
   }

   .popUp-offer__closed {
      position: absolute;
      top: 25px;
      right: 25px;
   }

   .popUp-offer__checkbox {
      margin: 20px 0 30px 0;
   }

   .popUp-offer__form-group {
      margin: 0 !important;
   }

   .popUp-offer__form-items {
      gap: 30px !important;
      margin: 0 !important;
   }

   .popUp-offer {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      padding: 60px;
      background: #F2F2F2;
      max-width: 700px;
      width: 100%;
   }

   .popUp-offer__title {
      text-wrap: nowrap;
      font-size: 50px;
      line-height: 52px;
      color: #0045B2;
   }

   .popUp-offer__description {
      margin: 15px 0;
      /*margin: 15px 0 40px 0;*/
      font-size: 20px;
      line-height: 28px;
   }
</style>