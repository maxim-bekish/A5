<?php
function popUp($title = '', $description = false, $email = false)
{
?>

   <section id="popUpCustom" class="popUpCustom" style="display: none;">
      <div class="popUp-custom-box">
         <button type="button" class="js-popUp-closed popUp-custom__closed">
            <svg width="24" height="24" viewBox="0 0 24 24">
               <use href="<?php echo SVG_PATH; ?>icons.svg#icon-closed-24"></use>
            </svg>
         </button>
         <h2 id="popUpTitle" class="popUp-custom__title"><?php echo $title ?></h2>
         <p id="popUpDescription" class="popUp-custom__description" style="display: <?php echo $description ? 'block' : 'none'; ?>">
            Оставьте свои контактные данные и наш менеджер перезвонит в ближайшее время
         </p>
         <form class="js-myForm popUp-custom__form">
            <div class="form-items-100 form-gray popUp-custom__form-items">
               <div class="form-group popUp-custom__form-group">
                  <input class="form-group__input name" name="custom-name" id="custom-name" type="text" placeholder=" " required>
                  <label class="form-group__label" for="custom-name">Ваше имя</label>
               </div>
               <div class="form-group popUp-custom__form-group">
                  <input class="form-group__input phone" pattern="\+7 \([0-9]{3}\) [0-9]{3}-[0-9]{2}-[0-9]{2}" name="custom-phone" id="custom-phone" type="tel" placeholder=" " required>
                  <label class="form-group__label" for="custom-phone">Телефон</label>
               </div>
               <div id="emailGroup" class="form-group" style="display: <?php echo $email ? 'block' : 'none'; ?>">
                  <input class="email" name="offer-email" id="email" type="email" placeholder=" " <?php echo $email ? "required" : ''; ?>>
                  <label for="offer-email">Email</label>
               </div>
            </div>
            <div class="checkbox popUp-custom__checkbox checkbox--white">
               <input class="custom-checkbox  checkbox__input" name="privacy_policy" type="checkbox" id="free-custom" required>
               <label class="checkbox__label" for="free-custom">
                  Согласен с политикой конфиденциальности
               </label>
            </div>
            <button class=" button button--blue popUp-custom__submitBtn" type="button" disabled>
               Оставить заявку
            </button>
         </form>
      </div>
   </section>

<?php
}
?>




<script type="module">
   import { formatPhoneNumber } from '/src/assets/helpers/format.js'

   $(document).ready(function() {

      function checkFormValidity() {
         const name = $('.popUp-custom__form .name').val();
         const phone = $('.popUp-custom__form .phone').val();
         const checkbox = $('.popUp-custom__form .checkbox__input').is(':checked');
         const emailGroupVisible = $('#emailGroup').is(':visible');
         const email = emailGroupVisible ? $('.popUp-custom__form .email').val() : true;

         const isFormValid = name && phone && checkbox && email;
         $('.popUp-custom__form .popUp-custom__submitBtn').prop('disabled', !isFormValid);
      }

      function resetForm() {
         $('.popUp-custom__form').removeClass('submitted-error');
         $('.popUp-custom__form .name').val('');
         $('.popUp-custom__form .phone').val('');
         $('.popUp-custom__form .checkbox__input').prop('checked', false);
         if ($('#emailGroup').is(':visible')) {
            $('.popUp-custom__form .email').val('');
         }
         checkFormValidity(); // Проверяем валидность формы после сброса
      }

      // Форматирование номера телефона и проверка валидности формы на ввод
      $('.popUp-custom__form .phone').on('input', function() {
         const formattedPhoneNumber = formatPhoneNumber(this.value);
         this.value = formattedPhoneNumber;
         checkFormValidity();
      });

      // Проверка валидности формы при загрузке страницы
      checkFormValidity();

      // Проверка валидности формы на изменение имени и состояния чекбокса
      $('.popUp-custom__form .name, .popUp-custom__form .checkbox__input, .popUp-custom__form .email').on('input change', checkFormValidity);

      // Обработка открытия поп-апа при нажатии на кнопку
      var openPopUpButtons = document.querySelectorAll('.openPopUpButton');
      var popUpCustom = document.getElementById('popUpCustom');
      var popUpTitle = document.getElementById('popUpTitle');
      var popUpDescription = document.getElementById('popUpDescription');
      var emailGroup = document.getElementById('emailGroup');

      openPopUpButtons.forEach(function(button) {
         button.addEventListener('click', function() {
            var title = button.getAttribute('data-title');
            var description = button.getAttribute('data-description') === 'true';
            var email = button.getAttribute('data-email') === 'true';

            popUpTitle.innerText = title;
            popUpDescription.style.display = description ? 'block' : 'none';
            emailGroup.style.display = email ? 'block' : 'none';

            resetForm(); // Сбрасываем форму при каждом открытии
            popUpCustom.style.display = 'block';
            $('.app').addClass('blurred');
            $('body').css('overflow', 'hidden');
         });
      });

      // Обработка закрытия поп-апа
      $('.js-popUp-closed').click(function() {
         $('.popUpCustom').css('display', 'none');
         $('.app').removeClass('blurred');
         $('body').css('overflow', 'auto');
      });

      // Обработка отправки формы
      $('.popUp-custom-box .popUp-custom__submitBtn').click(function() {
         var form = $(this).closest('.js-myForm')[0]; // Найти ближайший элемент формы с классом 'js-myForm'
         var isValid = form.checkValidity();
         if (isValid) { // Проверка валидности формы
            // Собираем данные формы для вывода в консоль
            var formData = {
               name: $('.popUp-custom__form .name').val(),
               phone: $('.popUp-custom__form .phone').val(),
               email: $('.popUp-custom__form .email').val(),
               checkbox: $('.popUp-custom__form .checkbox__input').is(':checked')
            };
            console.log('Данные формы:', formData);
            $('.popUp-end-box').css('display', 'block');
            resetForm(); // Сброс формы
            $('.popUpCustom').css('display', 'none'); // Скрытие элемента
            $('.app').removeClass('blurred');
            $('body').css('overflow', 'auto');
         } else {
            $(form).addClass('submitted-error'); // Добавление класса ошибки
         }
      });
   });
</script>

<style>
   .popUpCustom {
      display: none;
      width: 100vw;
      height: 100vh;
      min-height: -webkit-fill-available;
      z-index: 9999999;
      position: fixed;
      background-color: #9797974D;
      top: 0;
      left: 0;
   }

   .popUp-custom__closed {
      position: absolute;
      top: 25px;
      right: 25px;
   }

   .popUp-custom__checkbox {
      margin: 20px 0 30px 0;
   }

   .popUp-custom__form-group {
      margin: 0 !important;
   }

   .popUp-custom__form-items {
      gap: 30px !important;
      margin: 0 !important;
   }

   .popUp-custom-box {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      padding: 60px;
      background: #F2F2F2;
      max-width: 700px;
      width: 100%;
   }

   .popUp-custom__title {

      font-size: 50px;
      line-height: 52px;
      color: #0045B2;

   }

   .popUp-custom__form {
      margin-top: 40px;
   }

   .popUp-custom__description {
      margin-top: 15px;
      font-size: 20px;
      max-width: 400px;
      line-height: 28px;
   }

   @media (max-width:1280px) {
      .popUp-custom__title {
         font-size: 40px;
         line-height: 41.6px;
      }

   }

   @media (max-width:768px) {
      .popUp-custom__title {
         font-size: 30px;
         line-height: 31.6px;
      }

      .popUp-custom-box {
         padding: 60px 20px;
      }

      .popUp-custom__form {
         margin-top: 30px;
      }

      .popUp-custom-box {
         width: 95%;
      }
   }
</style>