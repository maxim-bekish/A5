    <!-- 
      interface data {
        id: string;
        class?: string;
        title?: string;
        subtitle?: string;
        variable: {
          name?: boolean;
          phone?: boolean;
          mail?: boolean;
          company?: boolean;
        };
        checkbox: {
          required: boolean;
          class?: string;
        };
        button: {
          label: string;
          class: string;
        };
        actions?: string;
      }

    --> <?php

        function generateDynamicForm($data)
        {
          // Проверка обязательных полей
          if (!isset($data['id']) || !isset($data['variable'])) {
            return '';
          }

          // Массив с данными полей
          $allFields = [
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
            'company' => [
              'type' => 'text',
              'label' => 'Компания',
              'class' => 'form-group__input company'
            ],
            'message' => [
              'type' => 'text',
              'label' => 'Задайте вопрос или опишите проблему...',
              'class' => 'form-group__input message'
            ]
          ];

          $defaultButton = [
            'label' => 'Подобрать',
            'class' => 'button button--blue',
            'disabled' => true
          ];

          // Получаем настройки кнопки (если есть)
          $buttonSettings = isset($data['button']) ? array_merge($defaultButton, $data['button']) : $defaultButton;

          // Фильтруем поля - включаем если ключ присутствует в variable
          $fields = [];
          foreach ($allFields as $name => $field) {
            if (array_key_exists($name, $data['variable'])) {
              $fields[$name] = $field;
            }
          }

          // Если нет выбранных полей, возвращаем пустую строку
          if (empty($fields)) {
            return '';
          }

          $id = $data['id'];
          $actions = isset($data['actions']) ? $data['actions'] : '';

          ob_start();
        ?>
      <form id="<?= htmlspecialchars($id) ?>-form" class="<?= htmlspecialchars($actions) ?>">
        <?php if (!empty($data['title']) || !empty($data['subtitle'])): ?>
          <div>
            <?php if (!empty($data['title'])): ?>
              <h4><?= nl2br(htmlspecialchars($data['title'])) ?></h4>
            <?php endif; ?>

            <?php if (!empty($data['subtitle'])): ?>
              <p><?= htmlspecialchars($data['subtitle']) ?></p>
            <?php endif; ?>
          </div>
        <?php endif; ?>
        <div class="<?= htmlspecialchars($data['class']) ?>">
          <?php foreach ($fields as $name => $field): ?>
            <div class="form-group">



              <input
                class="<?= htmlspecialchars($field['class']) ?>"
                name="<?= htmlspecialchars($id) ?>-<?= htmlspecialchars($name) ?>"
                id="<?= htmlspecialchars($id) ?>-<?= htmlspecialchars($name) ?>"
                type="<?= htmlspecialchars($field['type']) ?>"
                placeholder=" "
                <?= isset($field['pattern']) ? 'pattern="' . htmlspecialchars($field['pattern']) . '"' : '' ?>
                <?= !empty($data['variable'][$name]) ? 'required' : '' ?>>



              <label class="form-group__label" for="<?= htmlspecialchars($id) ?>-<?= htmlspecialchars($name) ?>">
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
            id="<?= htmlspecialchars($id) ?>-checkbox"
            <?= $data['checkbox']['required'] ? 'required' : '' ?>>
          <label class="checkbox__label" for="<?= htmlspecialchars($id) ?>-checkbox">
            Согласен с политикой конфиденциальности
          </label>
        </div>


        <button disabled class="button  <?= htmlspecialchars($id) ?>-button-custom <?= htmlspecialchars($buttonSettings['class']) ?>" type="button">
          <?= htmlspecialchars($buttonSettings['label']) ?>
        </button>
      </form>

      <script>
        $(document).ready(function() {
          var $form = $('#<?= htmlspecialchars($id) ?>-form');
          var $submitBtn = $form.find('.<?= htmlspecialchars($id) ?>-button-custom');
          var $inputs = $form.find('input:not([type="checkbox"])');
          var $checkbox = $form.find('input[type="checkbox"]');
          var $phoneInputs = $form.find('input[type="tel"]');

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

          // Слушаем изменения во всех полях
          $inputs.on('input change', checkFormValidity);
          $checkbox.on('change', checkFormValidity);

          // Проверяем при загрузке
          checkFormValidity();
        });
      </script>
    <?php
          return ob_get_clean();
        }
