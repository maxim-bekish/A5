<script src="src/components/page/program-leasing/program-leasing.js"></script>
<link rel="stylesheet" href="src/components/page/program-leasing/program-leasing.css">


<!-- тут вся инфа о всех страницах в массиве. если если раздела нет то обычную проверку на наличей конкретного блока. примеры есть 171 строчка и 219 -->
<?php
require 'src/assets/helpers/format.php';
$programLeasingData = [
  [
    "asideTitle" => "Легковой автотранспорт",
    "section" => "passenger-vehicles",
    "image" => "photo-1.png",
    "title" => "Легковые \n автомобили с А5",
    "subTitle" => "Быстрое решение для бизнеса в любом городе России!",
    "text" => [
      "Мы передаём в лизинг легковые автомобили с различным типом кузова: седан, лифтбек, внедорожник, купе, пикапы, фургоны и др.",
      "Работаем с официальными дилерами на всей территории Российской Федерации."
    ],
    "obtainingLeasing" => [
      "minAdvance" => 5,
      "maxLeasingPeriod" => 5,
    ],
    "requirementsLessees" => [
      "title" => null,
      "list" => [
        [
          "title" => "Подберём автомобиль ",
          "text" => "Не тратьте время и силы на поиски нужного автомобиля — мы сделаем это за вас"
        ],
        [
          "title" => "Индивидуальные условия сделки ",
          "text" => "Определите комфортный ежемесячный платёж, сформируйте удобный график лизинговых платежей"
        ],
        [
          "title" => "Быстрый выход на сделку",
          "text" => "Быстрый выход на сделку. Одобрим заявку за пару дней, автомобиль будет доступен в максимально сжатые сроки"
        ],


      ],
    ],
  ],
  [
    "asideTitle" => "Грузовой автотранспорт и спецтехника",
    "section" => "freight-vehicles",
    "image" => "photo-1.png",
    "title" => "Легковые \n автомобили с А5",
    "subTitle" => "Быстрое решение для бизнеса в любом городе России!",
    "text" => [

      "Мы передаём в лизинг легковые автомобили с различным типом кузова: седан, лифтбек, внедорожник, купе, пикапы, фургоны и др.",
      "Работаем с официальными дилерами на всей территории Российской Федерации."
    ],
    "obtainingLeasing" => [
      "minAdvance" => 5,
      "maxLeasingPeriod" => 5,
    ],
    "info" => [
      ['subTitle' => 'При возвратном лизинге поставщик и лизингополучатель является одним лицом'],
      ['subTitle' => 'Компания продаёт лизинговой компании своё имущество и его же приобретает в лизинг'],
      ['subTitle' => 'Компания продолжает использовать имущество в коммерческих целях'],
      ['subTitle' => 'Компания получает оборотные средства от лизинговой компании, которые можно направить на любые бизнес-цели, как оплату по договору купли-продажи'],
      ['subTitle' => 'Компания зачитывает НДС по лизинговым платежам в соответствие с лизинговым договором']


    ],
    "simpleSolution" => true,
    "requirementsLessees" => [
      "title" => 'Test',
      "list" => [
        [
          "subTitle" => "Подберём автомобиль ",
          "text" => "Не тратьте время и силы на поиски нужного автомобиля — мы сделаем это за вас"
        ],
        [
          "subTitle" => "Индивидуальные условия сделки ",
          "text" => "Определите комфортный ежемесячный платёж, сформируйте удобный график лизинговых платежей"
        ],
        [
          "subTitle" => "Быстрый выход на сделку",
          "text" => "Быстрый выход на сделку. Одобрим заявку за пару дней, автомобиль будет доступен в максимально сжатые сроки"
        ],
      ],
    ],
  ],
];



$activeNavItem = isset($_GET['section']) ? $_GET['section'] : '';

// Функция для поиска данных по активной секции
function getProgramData($programLeasingData, $activeNavItem)
{
  foreach ($programLeasingData as $program) {
    if ($program['section'] === $activeNavItem) {
      return $program;
    }
  }
  return null;
}

$activeProgram = getProgramData($programLeasingData, $activeNavItem);
?>

<section class="grid_1-3-box container">
  <div class="program-leasing-page__navigation ">
    <h3>Программы лизинга</h3>
    <div class="mobile__select">
      <div class="mobile__title js-open-select">
        <p></p>
        <svg class="rt0 js-svg-upend" width="14px" height="9px" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
          <use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-down"></use>
        </svg>
      </div>
      <ul class="mobile__list-content">
        <?php foreach ($programLeasingData as $el) : ?>
          <li class="mobile__list-content--item">
            <a href="?section=<?php echo $el['section'] ?>" class="<?php if ($activeNavItem === $el['section']) echo 'program__navigation--active'; ?>"> <?php echo $el['asideTitle'] ?> </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>

  <div class="program-leasing-page__content">
    <?php if ($activeProgram) : ?>
      <div class="program-leasing-page__content-up">
        <div class="program-leasing-page__content-up--image">
          <img src="<?php echo IMG_PATH . 'program-leasing-page/' . htmlspecialchars($activeProgram['image']); ?>" alt="">
        </div>
        <div class="program-leasing-page__content-up--text">
          <h3><?php echo nl2br(htmlspecialchars($activeProgram['title'])); ?></h3>
          <p><?php echo htmlspecialchars($activeProgram['subTitle']); ?></p>
        </div>
      </div>
      <?php if (!empty($activeProgram['text']) && is_array($activeProgram['text'])): ?>
        <div class="program-leasing-page__content--down  ">
          <?php foreach ($activeProgram['text'] as $line): ?>
            <p><?= htmlspecialchars($line) ?></p>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

    <?php endif; ?>
  </div>
</section>

<?php if (!empty($activeProgram['info'])): ?>
  <section class="grid_0-1 container mt-100px">


    <?php
    require_once 'src/components/ui/corner-list/corner-list.php';
    echo generateCornerList($activeProgram["info"], 'col-3   subtitle-big')
    ?>
  </section>
<?php endif; ?>

<section class=" grid_0-1 container mt-100px">
  <?php if ($activeProgram) : ?>

    <div class="">
      <h4 class="program-leasing__title obtaining-leasing__title">
        Условия лизинга
      </h4>
      <div class="obtaining-leasing__content">
        <div class="obtaining-leasing__content--item">


          <h4>
            от <?php echo format($activeProgram['obtainingLeasing']['minAdvance'], "%"); ?>
          </h4>
          <p>Минимальный аванс</p>
        </div>
        <div class="obtaining-leasing__content--item">
          <h4>
            <?php echo dateFormat($activeProgram['obtainingLeasing']['maxLeasingPeriod']); ?>
          </h4>
          <p>Максимальный срок лизинга</p>
        </div>

      </div>
    </div>
  <?php endif; ?>
</section>

<?php if (!empty($activeProgram['simpleSolution'])): ?>
  <section class="grid_0-1 container mt-100px">

    <div>

      <div class="simpleSolution">
        <div class="program-leasing-calculator-title">
          <h4 class="program-leasing__title">
            Недвижимость в лизинг с компанией А5
          </h4>
          <p class="">
            Простое решение
          </p>
        </div>
        <div class="simpleSolution__button">

          <button type="button" class="button button--blue ">Хочу бесплатную консультацию! </button>
        </div>
      </div>
      <?php
      include 'src/components/ui/list-big-number/list-big-number.php';
      ?>
    </div>
  </section>
<?php endif; ?>

<section class="grid_0-1 container mt-100px">

  <?php if ($activeProgram) : ?>

    <div>
      <?php if (!empty($activeProgram['requirementsLessees']['title'])): ?>
        <h3 class="program-leasing__title"><?= htmlspecialchars($activeProgram['requirementsLessees']['title']) ?></h3>
      <?php endif; ?>



      <?php
      require_once 'src/components/ui/corner-list/corner-list.php';
      echo generateCornerList($activeProgram["requirementsLessees"]["list"], 'col-3   subtitle-big')
      ?>

    </div>
  <?php endif; ?>

</section>

<section class="grid_0-1 container mt-100px">
  <div>
    <div class="program-leasing-calculator-title">
      <h4 class="program-leasing__title">
        Лизинговый калькулятор
      </h4>
      <p class="">
        Укажите все параметры и получите точный расчет
      </p>
    </div>
    <div class="program-leasing-calculator">
      <?php

      ini_set('display_errors', 1);  // Включение отображения ошибок
      ini_set('display_startup_errors', 1); // Включение отображения ошибок запуска
      error_reporting(E_ALL); // Сообщать обо всех ошибках
      include 'src/components/ui/calculator/calculator.php';


      include 'src/components/ui/calculator-result/calculator-result.php';
      ?>
    </div>
  </div>
</section>

<section class="grid_0-1 container mt-100px">
  <div>
    <?php
    include 'src/components/ui/docsTransition/docsTransition.php';
    ?>
  </div>
</section>