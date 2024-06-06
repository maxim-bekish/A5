<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/src/config/path.php';

$headerListProgram = (object) [
  'title' => 'Программы лизинга',
  'list' => [
    (object) [
      'name' => 'Легковой автотранспорт',
      'link' => '#'
    ],
    (object) [
      'name' => 'Грузовой автотранспорт',
      'link' => '#'
    ],
    (object) [
      'name' => 'Спецтехника',
      'link' => '#'
    ],
    (object) [
      'name' => 'Оборудование',
      'link' => '#'
    ],
    (object) [
      'name' => 'Медицинское оборудование',
      'link' => '#'
    ],
    (object) [
      'name' => 'Ресторанное оборудование',
      'link' => '#'
    ],
    (object) [
      'name' => 'Б/У продукция',
      'link' => '#'
    ],
    (object) [
      'name' => 'Недвижимость',
      'link' => '#'
    ],
  ]
];
$headerListLeasing = (object) [
  'title' => 'О лизинге',
  'list' => [
    (object) [
      'name' => 'Общие условия',
      'link' => '#'
    ],
    (object) [
      'name' => 'Субсидии малому и среднему бизнесу',
      'link' => '#'
    ],
  ]
];
$headerListClients = (object) [
  'title' => 'Клиентам',
  'list' => [
    (object) [
      'name' => 'О компании',
      'link' => '#'
    ],
    (object) [
      'name' => 'Клиенты и партнеры',
      'link' => '#'
    ],
    (object) [
      'name' => 'Документы',
      'link' => '#'
    ],
  ]
];



function listHeader($data)
{
  ?>
  <div class="select-head ">
    <p><?php echo htmlspecialchars($data->title); ?></p>
    <!--это дефолтное состояние свг-->
    <svg class="pointer rt0 default" width="14" height="9" viewBox="0 0 14 9">
      <use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-down"></use>
    </svg>
    <!--это при ховере свг-->
    <svg class="pointer rt0 hover" width="14" height="9" viewBox="0 0 14 9">
      <use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-down-blue"></use>
    </svg>
  </div>
  <ul class="select-list" style="display: none">
    <?php foreach ($data->list as $item): ?>
      <li>
        <a class="select-item"
          href="<?php echo htmlspecialchars($item->link); ?>"><?php echo htmlspecialchars($item->name); ?></a>
      </li>
    <?php endforeach; ?>
  </ul>
  <?php
}
?>


<link rel="stylesheet" href="/src/components/header/header.css">
<script src="/src/components/header/header.js"></script>
<script src="/src/components/header/select.js"></script>
<header id="header">
  <section class="container header">
    <div class="logo">
      <svg width="151" height="107" viewBox="0 0 151 107" fill="none" xmlns="http://www.w3.org/2000/svg">
        <use href="<?php echo SVG_PATH; ?>icons.svg#icon-logo"></use>
      </svg>
    </div>
    <div class="burger-button mt-21">
      <div></div>
      <div></div>
    </div>
    <div class="leasing mt-21">
      <div class="select select-program"> <?php listHeader($headerListProgram); ?> </div>
      <div class="select select-leasing"> <?php listHeader($headerListLeasing); ?> </div>
    </div>
    <div class="nav mt-21">
      <div class="select select-clients"> <?php listHeader($headerListClients); ?> </div>
      <a href="#">Программы лизинга</a>
      <a href="#home-calculator">Калькулятор</a>
    </div>
    <div class="contacts mt-21">
      <a href="tel:+73452999999">7 (3452) 99 99 99</a>
      <a href="#" class="toggle-button-ask" >Задать вопрос</a>
      <a href="#" class="toggle-button">Контакты</a>
    </div>
  </section>
</header>