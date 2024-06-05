<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/src/config/path.php';

function listHeader($name)
{
  ?>
  <div class="select w264px">
    <div class="select-head d-flex align-items-center justify-content-between">
      <p> <?php echo ($name); ?></p>
      <svg class="pointer rt0" width="14" height="9" viewBox="0 0 14 9">
        <use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-down"></use>
      </svg>
    </div>
    <ul class="select-list" style="display: none">
      <li class="select-item select-item-active">Доставка</li>
      <li class="select-item"> Самовывоз</li>
      <li class="select-item"> Доставка Строймаркет</li>
    </ul>
  </div>
  <?php
}
?>

<link rel="stylesheet" href="/src/components/header/header.css">
<script src="/src/components/header/header.js"></script>
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
      <?php
      listHeader("О лизинге");
      listHeader("Программы лизинга");
      ?>
    </div>
    <div class="nav mt-21">
      <?php
      listHeader("Клиентам");
      ?>
      <a href="#">Программы лизинга</a>
      <a href="#">Калькулятор</a>
    </div>
    <div class="contacts mt-21">
      <a href="tel:+73452999999">7 (3452) 99 99 99</a>
      <a href="#">Задать вопрос</a>
      <a href="#">Контакты</a>
    </div>
  </section>
</header>