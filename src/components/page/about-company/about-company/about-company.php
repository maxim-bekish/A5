<link rel="stylesheet" href="src/components/page/about-company/about-company/about-company.css">
<script src="src/components/page/about-company/about-company/about-company.js"></script>

<?php
$list = [
  "Сотрудничаем с бизнесом любого масштаба",
  "Поставляем технику, транспорт, оборудование по всей России",
  "Лизинг без границ: поставщики из любых стран мира",
  "Лизинг на индивидуальных условиях, подходящих вашему бизнесу: только адресные предложения с гибкими условиями"
];

?>


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
      <svg width="1297" height="696" viewBox="0 0 1297 696" fill="none">
        <use href="<?php echo SVG_PATH; ?>icons.svg#icon-map"></use>
      </svg>
    </div>
  </div>

  <div class="list">
    <?php foreach ($list as $index => $item): ?>
      <div class="card-corner__item">
        <div class="list__content">
          <h5>
            <?= htmlspecialchars($item) ?>
          </h5>
        </div>
        <svg class="card-corner__svg" width="75" height="24" viewBox="0 0 75 24" fill="none">
          <use href="<?php echo SVG_PATH; ?>icons.svg#icon-corner-card"></use>
        </svg>
      </div>
    <?php endforeach; ?>
  </div>
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
    <svg class="about-company__info-icon" width="804" height="419" viewBox="0 0 804 419">
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
  <div class="grid_0-1 about-company__banner about-company__banner--list ">
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
      'id' => 'contact',
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
  /* map */
  .about-company__map {
    display: flex;
    flex-direction: column;
    gap: 60px;
  }

  .about-company__map-wrapper {
    display: grid;
    grid-template-columns: minmax(200px, 410px) minmax(800px, 100%);
  }

  .about-company__stats {
    display: flex;
    flex-direction: column;
    justify-content: center;
    gap: 100px;
  }

  .about-company__stat-item {
    display: flex;
    flex-direction: column;
    gap: 15px;
  }

  .about-company__stat-number,
  .about-company__info-highlight {
    font-size: 90px;
    line-height: 100%;
    font-weight: var(--font-w4);
    letter-spacing: -6%;
    color: var(--black);

  }

  .about-company__stat-desc {
    font-weight: var(--font-w4);
    font-size: 18px;
    line-height: 100%;
    color: rgb(var(--gray-text));
  }

  .about-company__map-icon {
    display: flex;
    justify-content: flex-end;
  }

  /* map */
</style>
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

  /* Модификатор инфо-баннера */
  .about-company__banner--cta {}

  /* Модификатор CTA-баннера */
  .about-company__banner-img {
    position: absolute;
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
  }

  /* Цитата/выделенная фраза */
</style>

<style>
  .about-company__partnership {
    background-color: var(--light-gray);
    display: grid;
    grid-template-columns: 1fr 1fr;
    column-gap: 40px;
    row-gap: 40px;
    padding: 100px;
  }

  .about-company__banner--list {
    margin-top: 50px;
  }

  /* Основной контейнер */
  .about-company__partnership-content {
    display: flex;
    flex-direction: column;
    gap: 20px;
    max-width: 510px;
  }

  /* Контентная часть */
  .about-company__partnership-title {
    color: var(--black);
  }

  /* Заголовок */
  .about-company__partnership-text {
    font-size: 24px;
    line-height: 100%;
  }

  /* Текст */
  .about-company__form {}

  /* Форма */
</style>