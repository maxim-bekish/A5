<link rel="stylesheet" href="src/components/page/home/home-partners/home-partners.css">
<!-- <script src="src/components/page/home/home-partners/home-partners.js"></script> -->


<section id="partners" class="partners-box mt-160px container">
  <div class="partners-box__up grid_1fr-600-box">
    <div class="partners-box__content">
      <h3 class="title-page-h3">Не нашли нужный вам продукт?</h3>
      <p class="partners-box__text">
        Мы сотрудничаем с более 1000 поставщиками в России, СНГ и странах ближнего востока. Подберём лизинговые
        условия индивидуально для вас
      </p>
      <div class="partners-box__time">
        <div class="partners-box__time-item">
          <p class="partners-box__time-value">25 минут</p>
          <p class="partners-box__time-description">на подбор продукта из нашей базы.</p>
        </div>
        <div class="partners-box__time-item">
          <p class="partners-box__time-value">До 2-х дней</p>
          <p class="partners-box__time-description">занимает время на согласование условий предоставлений лизинга с
            поставщиком.</p>
        </div>
        <div class="partners-box__time-item">
          <p class="partners-box__time-value">В течение 2-х дней</p>
          <p class="partners-box__time-description">будет заключён договор.</p>
        </div>
      </div>
    </div>
    <div class="home-partners__form" >
      <?php
      require_once 'src/components/ui/forms/form_1/form.php';
      $formData = [
        'class' => "form-items-100 form-gray ",
        'id' => 'partners',
        'variable' => [
          'name' => true,
          'phone' => true,
        ],
        'checkbox' => [
          'required' => true,
          'class' => 'checkbox--white'
        ],
        'button' => [
          'label' => 'Подобрать',
          'class' => 'button button--blue js-btn-footer js-popUp-submitBtn ',
        ],
        'actions' => 'js-myForm js-popApp-OK '
      ];
      echo generateDynamicForm($formData);
      ?></div>
  </div>
</section>