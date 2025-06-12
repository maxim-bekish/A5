<section id="popUpCustom" class="popUpCustom" style="display: none;">
  <div class="popUp-custom-box">
    <button type="button" class="js-popUp-closed popUp-custom__closed">
      <svg width="24" height="24" viewBox="0 0 24 24">
        <use href="<?php echo SVG_PATH; ?>icons.svg#icon-closed-24"></use>
      </svg>
    </button>
    <div class="popUp-custom__header">
      <h2 id="popUpTitle" class="popUp-custom__title"></h2>
      <p id="popUpDescription" class="popUp-custom__description"> </p>
    </div>

    <?php


    $data = [
      'class' => "form-col form-gray input_2 ",
      'id' => uniqid(),
      'variable' => [
        'name' => true,
        'phone' => true,
        'mail' => false,
      ],
      'checkbox' => [
        'required' => true,
        'class' => 'checkbox--white'
      ],
      'actions' => 'js-myForm js-popApp-OK'
    ];

    $fields = [
      'name' => [
        'type' => 'text',
        'label' => 'Ваше имя',
        'class' => 'form-group__input name'
      ],
      'phone' => [
        'type' => 'tel',
        'label' => 'Телефон',
        'class' => 'form-group__input phone',
        'pattern' => '\+7 \([0-9]{3}\) [0-9]{3}-[0-9]{2}-[0-9]{2}'
      ],
      'mail' => [
        'type' => 'email',
        'label' => 'Email',
        'class' => 'form-group__input mail'
      ],

    ];

    $buttonSettings = [
      'label' => 'Подобрать',
      'class' => 'button button--blue js-popUp-submitBtn ',
      'disabled' => true
    ];
    ?>

    <form id="<?= htmlspecialchars($data['id']) ?>-form" class="<?= htmlspecialchars($data['actions']) ?>">
      <div class="<?= htmlspecialchars($data['class']) ?>">
        <?php foreach ($fields as $name => $field): ?>
          <div class="form-group">
            <input
              class="<?= htmlspecialchars($field['class']) ?>"
              name="<?= htmlspecialchars($data["id"]) ?>-<?= htmlspecialchars($name) ?>"
              id="<?= htmlspecialchars($data["id"]) ?>-<?= htmlspecialchars($name) ?>"
              type="<?= htmlspecialchars($field['type']) ?>"
              placeholder=" "
              <?= isset($field['pattern']) ? 'pattern="' . htmlspecialchars($field['pattern']) . '"' : '' ?>
              <?= !empty($data['variable'][$name]) ? 'required' : '' ?>>
            <label class="form-group__label" for="<?= htmlspecialchars($data["id"]) ?>-<?= htmlspecialchars($name) ?>">
              <?= htmlspecialchars($field['label']) ?>
            </label>
          </div>
        <?php endforeach; ?>
      </div>


      <div class="checkbox <?= $data['checkbox']['class'] ?>">
        <input
          class="custom-checkbox checkbox__input"
          type="checkbox"
          name="privacy_policy"
          id="<?= htmlspecialchars($data["id"]) ?>-checkbox"
          <?= $data['checkbox']['required'] ? 'required' : '' ?>>
        <label class="checkbox__label" for="<?= htmlspecialchars($data["id"]) ?>-checkbox">
          Согласен с политикой конфиденциальности
        </label>
      </div>


      <button disabled class="button  <?= htmlspecialchars($data["id"]) ?>-button-custom <?= htmlspecialchars($buttonSettings['class']) ?>" type="button">
        <?= htmlspecialchars($buttonSettings['label']) ?>
      </button>
    </form>
  </div>
</section>






<script type="module">
  $(document).ready(function() {

    // Обработка открытия поп-апа при нажатии на кнопку
    var openPopUpButtons = document.querySelectorAll('.openPopUpButton');
    var popUpCustom = document.getElementById('popUpCustom');
    var popUpTitle = document.getElementById('popUpTitle');
    var popUpDescription = document.getElementById('popUpDescription');
    var $form = $('#<?= htmlspecialchars($data["id"]) ?>-form');
    var $submitBtn = $form.find('.<?= htmlspecialchars($data["id"]) ?>-button-custom');
    var $inputs = $form.find('input:not([type="checkbox"])');
    var $checkbox = $form.find('input[type="checkbox"]');
    var $phoneInputs = $form.find('input[type="tel"]');
    var $button = $form.find('[type="button"]');


    openPopUpButtons.forEach(function(button) {
      button.addEventListener('click', function() {
        var title = button.getAttribute('data-title');
        var subTitle = button.getAttribute('data-subTitle');
        var email = button.getAttribute('data-email');
        var buttonText = button.getAttribute('data-button');

        if (email) {
          $('[type="email"]').parent().show();
        } else {
          $('[type="email"]').parent().hide();

        }
        if (buttonText) {
          $button.text(buttonText)
        } else {
          $button.text("Отправить")

        }

        popUpTitle.innerText = title;


        popUpDescription.style.display = subTitle ? 'block' : 'none';
        popUpDescription.innerText = subTitle;

        popUpCustom.style.display = 'block';
        $('.app').addClass('blurred');
        $('body').css('overflow', 'hidden');
      });
    });

    // Обработка закрытия поп-апа
    $('.js-popUp-closed').click(function() {
      resetForm()
    });

    $(document).on('click', function(e) {
      if ($(e.target).hasClass('popUpCustom')) {
        resetForm()
      }
    });



    // Функция форматирования телефонного номера
    function formatPhoneNumber(value) {
      if (!value) return "+7 ";
      var phoneNumber = value.replace(/\D/g, "");
      var phoneNumberWithoutSeven = phoneNumber.startsWith("7") ?
        phoneNumber.substring(1) :
        phoneNumber;
      var phoneNumberLength = phoneNumberWithoutSeven.length;

      if (phoneNumberLength <= 0) return "+7 (";
      if (phoneNumberLength <= 3) return "+7 (" + phoneNumberWithoutSeven.substring(0, 3);
      if (phoneNumberLength <= 6) return "+7 (" + phoneNumberWithoutSeven.substring(0, 3) + ") " + phoneNumberWithoutSeven.substring(3, 6);
      if (phoneNumberLength <= 8) return "+7 (" + phoneNumberWithoutSeven.substring(0, 3) + ") " + phoneNumberWithoutSeven.substring(3, 6) + "-" + phoneNumberWithoutSeven.substring(6, 8);
      return "+7 (" + phoneNumberWithoutSeven.substring(0, 3) + ") " + phoneNumberWithoutSeven.substring(3, 6) + "-" + phoneNumberWithoutSeven.substring(6, 8) + "-" + phoneNumberWithoutSeven.substring(8, 10);
    }
    $phoneInputs.on('input', function() {
      var $this = $(this);
      var cursorPosition = this.selectionStart;
      var oldValue = $this.val();
      var newValue = formatPhoneNumber(oldValue);

      $this.val(newValue);

      // Восстанавливаем позицию курсора
      var diff = newValue.length - oldValue.length;
      this.setSelectionRange(cursorPosition + diff, cursorPosition + diff);

      // Триггерим проверку валидности
      checkFormValidity();
    });

    function checkFormValidity() {
      var allValid = true;

      // Проверяем текстовые поля
      $inputs.each(function() {
        var $input = $(this);
        if ($input.prop('required') && !$input.val()) {
          allValid = false;
          return false; // прерываем each
        }
      });

      // Проверяем чекбокс, если он требуется
      if ($checkbox.length && $checkbox.prop('required') && !$checkbox.prop('checked')) {
        allValid = false;
      }

      // Обновляем состояние кнопки
      $submitBtn.prop('disabled', !allValid);
    }

    function resetForm() {
      [...$inputs].forEach(input => {
        input.value = ''
      });

      $checkbox.prop('checked', false);
      $('.app').removeClass('blurred');
      $('body').css('overflow', 'auto');
      $('.popUpCustom').css('display', 'none');
    }
    // Слушаем изменения во всех полях
    $inputs.on('input change', checkFormValidity);
    $checkbox.on('change', checkFormValidity);

    // Проверяем при загрузке
    checkFormValidity();
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

  .popUp-custom-box {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 60px;
    background: var(--light-gray);
    max-width: 700px;
    width: 100%;
  }

  .popUp-custom__header {
    display: flex;
    flex-direction: column;
    gap: 25px;
    margin-bottom: 50px;
  }

  .popUp-custom__title {
    font-size: 40px;
    line-height: 108%;
    color: var(--black);
  }

  .popUp-custom__description {
    font-size: 18px;
    line-height: 100%;
  }

  @media (max-width:1280px) {

    .popUp-custom__header {
      gap: 15px;
      margin-bottom: 35px;
    }

    .popUp-custom__title {
      font-size: 38px;
      line-height: 120%;
    }

    .popUp-custom__description {
      line-height: 130%;
    }
  }

  @media (max-width:768px) {
    .popUp-custom__closed {
      top: 20px;
      right: 20px;
    }

    .popUp-custom__header {
      margin-bottom: 50px;
    }

    .popUp-custom__title {
      font-size: 24px;
      line-height: 110%;
    }

    .popUp-custom__description {
      font-size: 18px;
    }

    .popUp-custom-box {
      padding: 60px 20px;
      width: 95%;
    }
  }

  @media (max-width:410px) {
    .popUp-custom-box {
      padding: 50px 15px;
      width: 100%;
    }
  }
</style>