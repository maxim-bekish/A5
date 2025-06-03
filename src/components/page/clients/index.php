<link rel="stylesheet" href="src/components/page/clients/index.css">
<?php
$activeNavItem = isset($_GET['section']) ? $_GET['section'] : ' ';
?>

<section class="clients-partners-program grid_1-3-box container">
  <div class="aside-bar">
    <h3>Клиентам</h3>
    <ul class="aside-bar">

      <li>
        <a href="?section=general-conditions" class="<?php if ($activeNavItem === 'general-conditions') echo 'program__navigation--active'; ?>">Общие условия</a>
      </li>
      <li>
        <a href="?section=client-documents" class="<?php if ($activeNavItem === 'client-documents') echo 'program__navigation--active'; ?>">Документы</a>
      </li>
      <li>
        <a href="?section=partners" class="<?php if ($activeNavItem === 'partners') echo 'program__navigation--active'; ?>"> Государственная поддержка для малого и среднего бизнеса</a>
      </li>
      <li>
        <a href="?section=leasing-guide" class="<?php if ($activeNavItem === 'leasing-guide') echo 'program__navigation--active'; ?>">Правила лизинга</a>
      </li>
    </ul>
  </div>

  <div class="clients-partners-program__content">
    <?php

    switch ($activeNavItem) {
      case 'general-conditions':
        include 'src/components/page/clients/general-conditions/general-conditions.php';
        break;
      case 'partners':
        include 'src/components/page/clients/partners-program/partners-program.php';
        break;
      case 'client-documents':
        include 'src/components/page/clients/client-documents/client-documents.php';
        break;
      case 'leasing-guide':
        include 'src/components/page/clients/leasing-guide/leasing-guide.php';
        break;
      default:
        include 'src/components/page/clients/partners-program/partners-program.php';
        break;
    }
    ?>
  </div>
</section>
