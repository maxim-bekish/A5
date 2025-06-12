<link rel="stylesheet" href="/src/components/footer/footer.css">
<script type="module" src="/src/components/footer/footer.js"></script>
<footer class="footer mt-160px container">
  <div class="footer__logo">
    <svg class="" viewBox="0 0 85 56">
      <use href="<?php echo SVG_PATH; ?>icons.svg#icon-A5"></use>
    </svg>
  </div>
  <div class="footer__form">
    <?php
    require_once 'src/components/ui/forms/form_1/form.php';
    $formData = [
      'class' => "form-items-50 form-blue input_4 ",
      'id' => 'footer',
      'title' => "Получите бесплатную \n консультацию",
      'variable' => [
        'name' => true,
        'phone' => false,
        'mail' => false,
        'company' => false,
      ],
      'checkbox' => [
        'required' => true,
        'class' => 'checkbox--blue'
      ],
      'button' => [
        'label' => 'Подобрать',
        'class' => 'button button--white js-btn-footer js-popUp-submitBtn ',

      ],
      'actions' => 'js-myForm js-popApp-OK'
    ];

    echo generateDynamicForm($formData);

    ?>
  </div>
  <div class="footer__info">
    <div class="footer__info-contacts">
      <div class='footer__info-contacts__list footer__info-list'>
        <h4>Контакты</h4>
        <ul>
          <li>Тюмень, ул. ​Грибоедова, 6 к1/7​ 3/28 офис</li>
          <li>Нижний Новгород, ул. Октябрьская,
            дом 33, помещ. 3, офис 12</li>
          <li>С понедельника по пятницу с 9.00 до 18.00</li>
          <li>
            <a href="tel:+73452595069">+7 (3452) 59 50 69</a>
          </li>
          <li> <a href="mailto:artfin-t@yandex.ru">artfin-t@yandex.ru</a></li>
        </ul>
      </div>
      <div class="footer__info-contacts__network">

        <?php require 'src/components/ui/network/network.php'; ?>
      </div>

    </div>
    <div class="footer__info-menu footer__info-list">
      <h4>Меню</h4>
      <ul>
        <li> <a href="#"> Программы лизинга</a></li>
        <li> <a href="#"> О компании</a></li>
        <li> <a href="#"> Клиентам</a></li>
        <li> <a href="#"> Каталог изьятого имущества</a></li>
      </ul>
    </div>
  </div>
  <div class="footer__down">
    <div class="footer__down-info">
      <p class="footer__down-copyright">© 2024 ООО «Лизинговая компания А5»</p>
      <p class="footer__down-policy">Политика обработки персональных данных</p>
    </div>
    <div class="footer__down-credits">
      <p>
        Разработка сайта
      </p>
      <a class="footer__down-link" href="#" target="_blank" rel="noopener noreferrer">Негодяев маркетинг</a>
    </div>
  </div>
</footer>