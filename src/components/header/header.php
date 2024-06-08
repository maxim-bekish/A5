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
      <svg width="100%" height="100%" viewBox="0 0 151 107" fill="none" xmlns="http://www.w3.org/2000/svg">
        <use href="<?php echo SVG_PATH; ?>icons.svg#icon-logo"></use>
      </svg>
    </div>
    <button type="button" id="open-burger-menu" class="burger-button mt-21">
      <div></div>
      <div></div>
    </button>
    <div class="leasing mt-21">
      <div class="select select-program"> <?php listHeader($headerListProgram); ?> </div>
      <div class="select select-leasing"> <?php listHeader($headerListLeasing); ?> </div>
    </div>
    <div class="nav mt-21">
      <div class="select select-clients"> <?php listHeader($headerListClients); ?> </div>
      <a href="#">Программы лизинга</a>
      <a href="#home-calculator">Калькулятор</a>
    </div>
    <div class="contacts-header mt-21">
      <button>
        <a href="tel:+73452999999">7 (3452) 99 99 99</a>
      </button>
      <button type="button" class="toggle-button-ask">
        <p> Задать вопрос</p>
      </button>
      <button type="button" class="toggle-button">
        <p>Контакты</p>
      </button>
    </div>
  </section>
  <section id="burger-menu" class="burger-menu">
    <button id="closed-burger-menu" class="button-closed" type="button">
      <svg width="28" height="28" viewBox="0 0 32 32">
        <use href="<?php echo SVG_PATH; ?>icons.svg#icon-closed"></use>
      </svg>
    </button>
    <div class="burger-menu-box">
      <ul>
        <h5 class="item-title">Главная страница</h5>
        <li class="item-box">
          <a class="item-content" href="#" target="_blank">Лизинговый калькулятор</a>
        </li>
        <li class="item-box">
          <a class="item-content" href="#" target="_blank">Партнеры</a>
        </li>
        <li class="item-box">
          <a class="item-content" href="#" target="_blank">Этапы сделки</a>
        </li>
        <li class="item-box">
          <a class="item-content" href="#" target="_blank">Контакты</a>
        </li>
      </ul>
      <ul>
        <h5 class="item-title">О лизинге</h5>
        <li class="item-box">
          <a class="item-content" href="#" target="_blank">Общие условия</a>
        </li>
        <li class="item-box">
          <a class="item-content" href="#" target="_blank">Субсидии малому <br> и среднему бизнесу</a>
        </li>
      </ul>
      <ul>
        <h5 class="item-title">Клиентам</h5>
        <li class="item-box">
          <a class="item-content" href="#" target="_blank">О компании</a>
        </li>
        <li class="item-box">
          <a class="item-content" href="#" target="_blank">Клиенты и партнеры</a>
        </li>
        <li class="item-box">
          <a class="item-content" href="#" target="_blank">Документы</a>
        </li>
      </ul>
      <ul>
        <h5 class="item-title">Услуги лизинга</h5>
        <li class="item-box">
          <a class="item-content" href="#" target="_blank">Легковой автотранспорт</a>
        </li>
        <li class="item-box">
          <a class="item-content" href="#" target="_blank">Грузовой автотранспорт</a>
        </li>
        <li class="item-box">
          <a class="item-content" href="#" target="_blank">Спецтехника</a>
        </li>
        <li class="item-box">
          <a class="item-content" href="#" target="_blank">Оборудование</a>
        </li>
        <li class="item-box">
          <a class="item-content" href="#" target="_blank">Медицинское оборудование</a>
        </li>
        <li class="item-box">
          <a class="item-content" href="#" target="_blank">Ресторанное оборудование</a>
        </li>
        <li class="item-box">
          <a class="item-content" href="#" target="_blank">Б/У продукция</a>
        </li>
        <li class="item-box">
          <a class="item-content" href="#" target="_blank">Недвижимость</a>
        </li>
      </ul>
      <ul>
        <h5 class="item-title">Каталог изьятой техники</h5>
      </ul>
    </div>
    <div class="burger-menu-box ">
      <div class="item-box">
        <a class="burger-tel item-content" href="tel:+73452999999">7 (3452) 99-99-99</a>
      </div>
      <div class="burger-menu-network">
        <a>
          <svg class="hover" width="20" height="16" viewBox="0 0 20 16">
            <use href="<?php echo SVG_PATH; ?>icons.svg#icon-telegram-hover"></use>
          </svg>
          <svg class="no-hover" width="20" height="16" viewBox="0 0 20 16">
            <use href="<?php echo SVG_PATH; ?>icons.svg#icon-telegram"></use>
          </svg>
        </a>

        <a>
          <svg class="hover" width="20" height="19" viewBox="0 0 20 19">
            <use href="<?php echo SVG_PATH; ?>icons.svg#icon-viber-hover"></use>
          </svg>
          <svg class="no-hover" width="20" height="19" viewBox="0 0 20 19">
            <use href="<?php echo SVG_PATH; ?>icons.svg#icon-viber"></use>
          </svg>

        </a>

        <a>
          <svg class="hover" width="22" height="12" viewBox="0 0 22 12">
            <use href="<?php echo SVG_PATH; ?>icons.svg#icon-VK-hover"></use>
          </svg>
          <svg class="no-hover" width="22" height="12" viewBox="0 0 22 12">
            <use href="<?php echo SVG_PATH; ?>icons.svg#icon-VK"></use>
          </svg>
        </a>

      </div>
    </div>
  </section>
</header>