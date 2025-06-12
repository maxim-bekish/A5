<link rel="stylesheet" href="/src/components/header/header.css">
<script src="/src/components/header/header.js"></script>

<?php
$headerListProgram = (object) [
  'title' => 'Программы лизинга',
  'list' => [
    (object) [
      'name' => 'Легковой автотранспорт',
      'link' => '/program-leasing?section=passenger-vehicles'
    ],
    (object) [
      'name' => 'Грузовой автотранспорт и спецтехника',
      'link' => '/program-leasing?section=freight-transport'
    ],
    (object) [
      'name' => 'Оборудование',
      'link' => '/program-leasing?section=equipment'
    ],
    (object) [
      'name' => 'Возвратный лизинг',
      'link' => '/program-leasing?section=refusal-leasing'
    ],
    (object) [
      'name' => 'Недвижимость',
      'link' => '/program-leasing?section=real-estate'
    ],
  ]
];

$headerHomePage = (object) [
  'title' => 'Главная страница',
  'list' => [
    (object) [
      'name' => 'Лизинговый калькулятор',
      'link' => '#home-calculator'
    ],
    (object) [
      'name' => 'Сотрудничество',
      'link' => '#partners'
    ],
    (object) [
      'name' => 'Этапы сделки',
      'link' => '#stages-transaction'
    ],
    (object) [
      'name' => 'Преимущества',
      'link' => '#partners'
    ],
    (object) [
      'name' => 'Информация для клиентов',
      'link' => '#stages-transaction'
    ],
    (object) [
      'name' => 'Контакты',
      'link' => '#contacts'
    ],
  ]
];
$headerListClients = (object) [
  'title' => 'Клиентам',
  'list' => [
    (object) [
      'name' => 'Общие условия',
      'link' => '/clients?section=general-conditions',
    ],
    (object) [
      'name' => 'Документы',
      'link' => '/clients?section=client-documents'
    ],
    (object) [
      'name' => 'Государственная поддержка для малого и среднего бизнеса',
      'link' => '/clients?section=partners'
    ],
    (object) [
      'name' => 'Правила лизинга',
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

<?php
function listHeaderBurger($data)
{
?>
  <div class="burger-menu-box-item">
    <div class="burger-menu-box-item-row">
      <h5 class="item-title"><?php echo htmlspecialchars($data->title); ?></h5>
      <svg class="rt0" fill="none" width="22" height="13" viewBox="0 0 22 13">
        <use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-burger"></use>
      </svg>
    </div>

    <ul class="burger-menu-box-list" >

      <?php foreach ($data->list as $item) : ?>
        <li class="underline-box js-burger-menu-item">
          <a class="underline-el underline-el-white <?php if ($data->title === "Главная страница") echo 'js-anchor-link'; ?>" href="<?php echo htmlspecialchars($item->link); ?>"><?php echo htmlspecialchars($item->name); ?></a>
        </li>
      <?php endforeach; ?>
    </ul>

  </div>
<?php
}
?>



<header id="header">
  <section class="container header">
    <div class="header__logo">
      <div class="logo">
        <a href="/" rel="noopener noreferrer">
          <svg width="100%" height="100%" viewBox="0 0 155 110" fill="none" xmlns="http://www.w3.org/2000/svg">
            <use href="<?php echo SVG_PATH; ?>icons.svg#icon-logo"></use>
          </svg>
        </a>
      </div>
      <button type="button" id="open-burger-menu" class="burger-button mt-21">
        <img src="<?php echo IMG_PATH; ?>burger.png" alt="">
      </button>
    </div>

    <div class="nav">
      <div class="select select-program"> <?php listHeader($headerListProgram); ?> </div>

      <div class="underline-box">
        <a class="nav__item underline-el underline-el-blue" href="/about-company">
          О компании
        </a>
      </div>
      <div class="select select-clients"> <?php listHeader($headerListClients); ?> </div>
      <div class="underline-box">
        <a class="nav__item underline-el underline-el-blue" href="/inventory?section=Легковой%20автотранспорт">
          Каталог изьятой техники
        </a>
      </div>

    </div>
    <div class="contacts-header ">
      <button class="underline-box">
        <a class="underline-el underline-el-blue" href="tel:+73452999999">7 (3452) 99 99 99</a>
      </button>
      <button type="button" class="open-button-ask underline-box">
        <p blurred=true class="underline-el underline-el-blue"> Задать вопрос</p>
      </button>
      <button type="button" class="open-button-contact underline-box">
        <p blurred=true class="underline-el underline-el-blue">Контакты</p>
      </button>
    </div>
  </section>
  <section id="burger-menu" class="burger-menu">
    <div class="burger-menu-header">


      <button id="closed-burger-menu" class="button-closed" type="button">
        <svg width="28" height="28" viewBox="0 0 32 32">
          <use href="<?php echo SVG_PATH; ?>icons.svg#icon-closed"></use>
        </svg>
      </button>
    </div>
    <div class="burger-menu-box burger-menu-box-content ">

      <?php listHeaderBurger($headerHomePage); ?>

      <?php listHeaderBurger($headerListClients); ?>
      <?php listHeaderBurger($headerListProgram); ?>
      <div class="burger-menu-box-item burger-menu-box-item-last">
        <h5 class="item-title underline-box item-title-last"> <a class="underline-el underline-el-white" href="/inventory" rel="noopener noreferrer">
            О компании
          </a></h5>

        <h5 class="item-title underline-box"> <a class="underline-el underline-el-white" href="/inventory?section=Легковой%20автотранспорт" rel="noopener noreferrer">
            Каталог изьятого имущества
          </a></h5>

      </div>
    </div>

    <div class="burger-menu-box ">
      <div class="underline-box mob-tel">
        <a class="burger-tel underline-el underline-el-white" href="tel:+73452999999">7 (3452) 99-99-99</a>
      </div>
      <div>

        <?php require 'src/components/ui/network/network.php'; ?>
      </div>
      <!-- <div class="burger-menu-network">
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

      </div> -->
    </div>
  </section>
</header>