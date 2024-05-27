<?php
function listHeader($name, $isSelect = false)
{
  $logoPath = "/src/assets/images/svg/logo.svg";
  ?>
  <div class="list-box">
    <p>
      <?php echo ($name); ?>
    </p>
    <?php if ($isSelect): ?>
      <svg class="pointer" class="rt0" width="14" height="9" viewBox="0 0 14 9" xmlns="http://www.w3.org/2000/svg">
        <use href="<?php echo htmlspecialchars($logoPath); ?>#icon-arrow-down"></use>
      </svg>
    <?php endif; ?>
  </div>
  <?php
}
?>

<link rel="stylesheet" href="/src/components/header/header.css">

<header class="container header">
  <div class="logo">
    <svg width="151" height="107" viewBox="0 0 151 107" fill="none" xmlns="http://www.w3.org/2000/svg">
      <use href="/src/assets/images/svg/logo.svg#icon-logo"></use>
    </svg>
  </div>
  <div class="burger-button mt-21">
    <div></div>
    <div></div>
  </div>
  <div class="leasing mt-21">
    <?php
    listHeader("О лизинге", true);
    listHeader("Программы лизинга", true);
    ?>
  </div>
  <div class="nav mt-21">
    <?php
    listHeader("Клиентам", true);
    ?>
    <a href="#">Программы лизинга</a>
    <a href="#">Калькулятор</a>
  </div>
  <div class="contacts mt-21">
    <a href="tel:+73452999999">7 (3452) 99 99 99</a>
    <a href="#">Задать вопрос</a>
    <a href="#">Контакты</a>
  </div>
</header>