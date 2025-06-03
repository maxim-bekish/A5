<link rel="stylesheet" href="src/components/page/about-company/about-company/about-company.css">
<script src="src/components/page/about-company/about-company/about-company.js"></script>

<?php

$list = [
  ['subTitle' => "Сотрудничаем с бизнесом любого масштаба"],
  ['subTitle' => "Поставляем технику, транспорт, оборудование по всей России"],
  ['subTitle' => "Лизинг без границ: поставщики из любых стран мира"],
  ['subTitle' => "Лизинг на индивидуальных условиях, подходящих вашему бизнесу: только адресные предложения с гибкими условиями"],

];
?>

<section class="about-banner">
  <h3 class="about-banner__title">
    А5 Формула
    <br>
    успешного бизнеса
  </h3>
</section>

<section class="about-company about-company__map">
  <div class="about-company__map-wrapper">
    <div class="about-company__stats container ">
      <div class="about-company__stat-item">
        <h5 class="about-company__stat-number">14 лет</h5>
        <p class="about-company__stat-desc">лет на рынке</p>
      </div>
      <div class="about-company__stat-item">
        <h5 class="about-company__stat-number">>5 000</h5>
        <p class="about-company__stat-desc">лизинговых сделок</p>
      </div>
    </div>
    <div class="about-company__map-icon">
      <svg viewBox="0 0 1300 804" fill="none">
        <use href="<?php echo SVG_PATH; ?>icons.svg#icon-map"></use>
      </svg>
    </div>
  </div>

  <?php
  require_once 'src/components/ui/corner-list/corner-list.php';
  echo generateCornerList($list, 'col-4 container subtitle-big')
  ?>
</section>

<section class="about-company about-company__banners mt-160px">
  <div class="about-company__banner about-company__banner--main">
    <div class="about-company__banner-img">
      <img src="<?php echo IMG_PATH; ?>banner-info-1.png" alt="">
    </div>
    <div class="about-company__banner-content container">
      <h4 class="about-company__banner-title">
        Знаем формулу<br>идеального лизинга
      </h4>
    </div>
  </div>

  <div class="about-company__banner about-company__banner--info container ">
    <div class="about-company__info-block">
      <!-- <svg class="about-company__info-svg" width="1297" height="696" viewBox="0 0 1297 696" fill="none">
        <use href="<?php echo SVG_PATH; ?>icons.svg#icon-map"></use>
      </svg> -->
      <p class="about-company__info-text">Лизинговая компания А5 может предложить <br> бизнесу индивидуальные графики платежей</p>
      <h5 class="about-company__info-highlight">с НДС 20% и 5%</h5>
    </div>

    <div class="about-company__info-details">
      <p class="about-company__info-paragraph">
        Большинство лизинговых компаний, если поставщик предмета лизинга находится на упрощённой системе налогообложения, вынуждено назначает 20% НДС, А5 – только 5%, что значительно удешевляет график лизинговых платежей.
        <br>
        Свяжитесь сейчас с вашим персональным менеджером и узнайте, как это работает.
      </p>

      <p class="about-company__info-quote">
        Мыслим прогрессивно<br>
        Готовы к нестандартным решениям
      </p>
    </div>
    <svg class="about-company__info-icon" viewBox="0 0 804 419">
      <use href="<?php echo SVG_PATH; ?>icons.svg#icon-polygons-1"></use>
    </svg>
  </div>

  <div class="about-company__banner about-company__banner--main">
    <div class="about-company__banner-img">
      <img src="<?php echo IMG_PATH; ?>banner-info-2.png" alt="">
    </div>
    <div class="about-company__banner-content container ">
      <h4 class="about-company__banner-title">Лизинг с А5 – это просто!</h4>
      <button class="button button--white" type="button">Хочу бесплатную консультацию!</button>
    </div>
  </div>

  <div class="grid_0-1 about-company__banner about-company__banner--list container ">
    <div>
      <?php
      include 'src/components/ui/list-big-number/list-big-number.php';
      ?>
    </div>
  </div>

</section>

<section class="about-company about-company__partnership mt-160px  container">
  <div class="about-company__partnership-content">
    <h4 class="about-company__partnership-title">Мы открыты для сотрудничества!</h4>
    <p class="about-company__partnership-text">
      Если вы хотите стать партнёром лизинговой компании А5, оставьте заявку, и мы свяжемся с вами в ближайшее время!
    </p>
  </div>
  <div class="about-company__form">
    <?php
    require_once 'src/components/ui/forms/form_1/form.php';
    $formData = [
      'class' => "form-items-100 form-gray input_2 ",
      'id' => 'about-company',
      'variable' => [
        'name' => false,
        'phone' => false,

      ],
      'checkbox' => [
        'required' => true,
        'class' => 'checkbox--white'
      ],
      'button' => [
        'label' => 'Подобрать',
        'class' => 'button button--blue js-btn-footer js-popUp-submitBtn ',

      ],
      'actions' => 'js-myForm js-popApp-OK'
    ];
    echo generateDynamicForm($formData);
    ?>
  </div>
</section>




<style>
  /* Базовый стиль баннера */
  .about-company__banner {
    position: relative;
  }

  .about-company__banner--main {
    height: 377px;
    display: flex;
    align-items: center;
  }

  /* Модификатор главного баннера */
  .about-company__banner--info {
    display: grid;
    grid-template-columns: 1fr 1fr;
    padding-block: 160px;
    gap: 40px;
  }


  /* Модификатор CTA-баннера */
  .about-company__banner-img {
    position: absolute;
    height: 100%;
    width: 100%;
  }

  .about-company__banner-img img {

    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
  }

  /* Изображение баннера */
  .about-company__banner-content {
    display: flex;
    flex-direction: column;
    gap: 50px;
    position: relative;
  }

  .about-company__banner-content .button {
    max-width: 336px;
  }

  /* Контент баннера */
  .about-company__banner-title {
    color: var(--white);
  }

  /* Заголовок баннера */
  .about-company__info-block,
  .about-company__info-details {
    display: flex;
    flex-direction: column;
    gap: 40px;
  }

  /* Инфо-блок */
  .about-company__info-text {
    font-weight: var(--font-w4);
    font-size: 24px;
    line-height: 120%;
    color: var(--black);
  }

  /* Выделенный текст */
  /* Детальная информация */
  .about-company__info-paragraph {
    font-weight: var(--font-w4);
    font-size: 18px;
    line-height: 140%;
    color: rgb(var(--gray-text));
  }

  /* Абзац текста */
  .about-company__info-quote {
    padding-left: 20px;
    border-left: 3px solid var(--dark-blue);
    color: var(--dark-blue);
    font-weight: var(--font-w4);
    font-size: 24px;
    line-height: 120%;
  }

  .about-company__info-icon {
    position: absolute;
    bottom: 0;
    left: 80px;
    z-index: -1;
    width: 804px;
    height: 419px;
  }

  /* Цитата/выделенная фраза */



  @media (max-width: 1280px) {
    .about-company__banner--main {
      height: 250px;
    }

    .about-company__banner-content {
      gap: 30px;
    }

    .about-company__banner--info {
      grid-template-columns: 1fr;
      padding-block: 120px;
      gap: 50px;
    }

    .about-company__info-block {
      gap: 20px;
    }

    .about-company__info-text {
      font-size: 18px;
      line-height: 130%;
    }

    .about-company__info-paragraph {
      font-size: 16px;
      line-height: 130%;
    }

    .about-company__info-quote {
      font-size: 18px;
      line-height: 130%;
    }

    .about-company__info-icon {
      left: 45px;
      width: calc(100% - 90px);
      height: auto;
      max-width: 680px;
    }
  }

  @media (max-width: 400px) {
    .about-company__banner--main {
      height: 210px;
    }

    .about-company__banner-content {
      padding-block: 30px;
      height: 100%;
      justify-content: space-between;
    }

    .about-company__banner--info {
      padding-block: 80px;
      gap: 40px;
    }

    .about-company__info-block {
      gap: 10px
    }

    .about-company__info-details {
      gap: 20px
    }

    .about-company__info-text,
    .about-company__info-quote {
      font-size: 16px;
    }

    .about-company__info-paragraph {
      font-size: 14px;
    }

    .about-company__info-icon {
      left: 8%;
      width: 84%;
    }
  }
</style>