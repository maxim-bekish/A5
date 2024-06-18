<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/src/config/path.php';

$headerListProgram = (object) [
  'title' => 'Программы лизинга',
  'list' => [
    (object) [
      'name' => 'Легковой автотранспорт',
      'link' => '/program-leasing?section=passenger-vehicles'
    ],
    (object) [
      'name' => 'Грузовой автотранспорт',
      'link' => '/program-leasing?section=freight-transport'
    ],
    (object) [
      'name' => 'Спецтехника',
      'link' => '/program-leasing?section=special-equipment'
    ],
    (object) [
      'name' => 'Оборудование',
      'link' => '/program-leasing?section=equipment'
    ],
    (object) [
      'name' => 'Медицинское оборудование',
      'link' => '/program-leasing?section=medical-equipment'
    ],
    (object) [
      'name' => 'Ресторанное оборудование',
      'link' => '/program-leasing?section=restaurant-equipment'
    ],
    (object) [
      'name' => 'Б/У продукция',
      'link' => '/program-leasing?section=used-products'
    ],
    (object) [
      'name' => 'Недвижимость',
      'link' => '/program-leasing?section=real-estate'
    ],
  ]
];
$headerListLeasing = (object) [
  'title' => 'О лизинге',
  'list' => [
    (object) [
      'name' => 'Общие условия',
      'link' => 'about-leasing?section=general-terms'
    ],
    (object) [
      'name' => 'Субсидии малому и среднему бизнесу',
      'link' => 'about-leasing?section=subsidies'
    ],
  ]
];
$headerListClients = (object) [
  'title' => 'Клиентам',
  'list' => [
    (object) [
      'name' => 'О компании',
      'link' => '/about-company',
    ],
    (object) [
      'name' => 'Клиенты и партнеры',
      'link' => '/clients'
    ],
    (object) [
      'name' => 'Документы',
      'link' => '/clients?section=client-documents'
    ],
    (object) [
      'name' => 'Гид по лизингу',
      'link' => '/clients?section=leasing-guide'
    ],
  ]
];



function listHeader($data)
{
?>
  <div class="select-head ">
    <p><?php echo htmlspecialchars($data->title); ?></p>
    <svg class="pointer rt0 svg-item" width="14" height="9" viewBox="0 0 14 9" fill="none">
      <use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-down"></use>
    </svg>
  </div>
  <ul class="select-list" style="display: none">
    <?php foreach ($data->list as $item) : ?>
      <li class="underline-box">
        <a class="underline-el underline-el-blue select-item" href="<?php echo htmlspecialchars($item->link); ?>"><?php echo htmlspecialchars($item->name); ?></a>
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
    <div class="header__logo" >
      <div class="logo">
        <a href="/" rel="noopener noreferrer">
          <svg width="100%" height="100%" viewBox="0 0 155 110" fill="none" xmlns="http://www.w3.org/2000/svg">
            <use href="<?php echo SVG_PATH; ?>icons.svg#icon-logo"></use>
          </svg>
        </a>
      </div>
      <button type="button" id="open-burger-menu" class="burger-button mt-21">
        <div></div>
        <div></div>
      </button>
    </div>
    <div class="leasing mt-21">
      <div class="select select-program"> <?php listHeader($headerListProgram); ?> </div>
      <div class="select select-leasing"> <?php listHeader($headerListLeasing); ?> </div>
    </div>
    <div class="nav mt-21">
      <div class="select select-clients"> <?php listHeader($headerListClients); ?> </div>
      <div class="underline-box">
        <a class="nav__item underline-el underline-el-blue" href="/inventory">
          Каталог изьятой техники
        </a>
      </div>
      <div class="underline-box">
        <a class="nav__item underline-el underline-el-blue" href="/#home-calculator">Калькулятор</a>
      </div>
    </div>
    <div class="contacts-header mt-21">
      <button class="underline-box">
        <a class="underline-el underline-el-blue" href="tel:+73452999999">7 (3452) 99 99 99</a>
      </button>
      <button type="button" class="toggle-button-ask underline-box">
        <p class="underline-el underline-el-blue"> Задать вопрос</p>
      </button>
      <button type="button" class="toggle-button underline-box">
        <p class="underline-el underline-el-blue">Контакты</p>
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
        <li class="underline-box">
          <a class="underline-el underline-el-white" href="#" target="_blank">Лизинговый калькулятор</a>
        </li>
        <li class="underline-box">
          <a class="underline-el underline-el-white" href="#" target="_blank">Партнеры</a>
        </li>
        <li class="underline-box">
          <a class="underline-el underline-el-white" href="#" target="_blank">Этапы сделки</a>
        </li>
        <li class="underline-box">
          <a class="underline-el underline-el-white" href="#" target="_blank">Контакты</a>
        </li>
      </ul>
      <ul>
        <h5 class="item-title">О лизинге</h5>
        <li class="underline-box">
          <a class="underline-el underline-el-white" href="#" target="_blank">Общие условия</a>
        </li>
        <li class="underline-box">
          <a class="underline-el underline-el-white" href="#" target="_blank">Субсидии малому <br> и среднему
            бизнесу</a>
        </li>
      </ul>
      <ul>
        <h5 class="item-title">Клиентам</h5>
        <li class="underline-box">
          <a class="underline-el underline-el-white" href="#" target="_blank">О компании</a>
        </li>
        <li class="underline-box">
          <a class="underline-el underline-el-white" href="#" target="_blank">Клиенты и партнеры</a>
        </li>
        <li class="underline-box">
          <a class="underline-el underline-el-white" href="#" target="_blank">Документы</a>
        </li>
      </ul>
      <ul>
        <h5 class="item-title">Услуги лизинга</h5>
        <li class="underline-box">
          <a class="underline-el underline-el-white" href="#" target="_blank">Легковой автотранспорт</a>
        </li>
        <li class="underline-box">
          <a class="underline-el underline-el-white" href="#" target="_blank">Грузовой автотранспорт</a>
        </li>
        <li class="underline-box">
          <a class="underline-el underline-el-white" href="#" target="_blank">Спецтехника</a>
        </li>
        <li class="underline-box">
          <a class="underline-el underline-el-white" href="#" target="_blank">Оборудование</a>
        </li>
        <li class="underline-box">
          <a class="underline-el underline-el-white" href="#" target="_blank">Медицинское оборудование</a>
        </li>
        <li class="underline-box">
          <a class="underline-el underline-el-white" href="#" target="_blank">Ресторанное оборудование</a>
        </li>
        <li class="underline-box">
          <a class="underline-el underline-el-white" href="#" target="_blank">Б/У продукция</a>
        </li>
        <li class="underline-box">
          <a class="underline-el underline-el-white" href="#" target="_blank">Недвижимость</a>
        </li>
      </ul>
      <ul>
        <h5 class="item-title underline-box">
          <a class="underline-el underline-el-white" href="/inventory" target="_blank" rel="noopener noreferrer">
            Каталог изьятой техники
          </a>
        </h5>
      </ul>
    </div>
    <div class="burger-menu-box ">
      <div class="underline-box">
        <a class="burger-tel underline-el underline-el-white" href="tel:+73452999999">7 (3452) 99-99-99</a>
      </div>
      <div class="burger-menu-network">
        <a>
          <svg class="svg_items" width="20" height="16" viewBox="0 0 20 16">
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
          <svg class="svg_items" width="22" height="12" viewBox="0 0 22 12">
            <use href="<?php echo SVG_PATH; ?>icons.svg#icon-VK"></use>
          </svg>
        </a>

      </div>
    </div>
  </section>
</header>


