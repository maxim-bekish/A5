<link rel="stylesheet" href="/src/components/ui/popUpAsk/popUpAsk.css">
<script type="module" src="/src/components/ui/popUpAsk/popUpAsk.js"></script>


<section class="sidebar-ask popUp__sidebar closed-blurred">

  <div class="popUp__sidebar-box">

    <button class="popUp__sidebar-closed">
      <svg>
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
      <button type="button" class="button button--outline bottom-select-ask">
        Консультация по лизингу
      </button>
      <button type="button" class="button button--outline bottom-select-ask ">
        Бухгалтерия
      </button>
      <button type="button" class="button button--outline bottom-select-ask ">
        Получить коммерческое предложение
      </button>
      <button type="button" class="button button--outline bottom-select-ask ">
        Стать партнером
      </button>
    </div>
 

    <div class="popup-ask-newsletter-form">
      <?php
      require_once 'src/components/ui/forms/form_1/form.php';
      $formData = [
        'class' => "form-col form-gray input_2 ",
        'id' => 'popup-ask',
        'variable' => [
          'name' => false,
          'phone' => false,
          'message' => false,

        ],
        'checkbox' => [
          'required' => true,
          'class' => 'checkbox--white'
        ],
        'button' => [
          'label' => 'Оставить заявку',
          'class' => 'button button--blue js-btn-footer js-popUp-submitBtn ',

        ],
        'actions' => 'js-myForm js-popApp-OK'
      ];
      echo generateDynamicForm($formData);
      ?>
    </div>

  </div>
</section>