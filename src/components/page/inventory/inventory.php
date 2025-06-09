<link rel="stylesheet" href="src/components/page/program-leasing/program-leasing.css">
<?php
require 'src/assets/helpers/format.php';
include 'src/state/state.php';

$programLeasingData = [
  [
    "asideTitle" => "Легковой автотранспорт",
    "section" => "Легковой автотранспорт",
  ],
  [
    "asideTitle" => "Грузовой автотранспорт и спецтехника",
    "section" => "Грузовой автотранспорт и спецтехника",
  ],
  [
    "asideTitle" => "Оборудование",
    "section" => "Оборудование",
  ],
  [
    "asideTitle" => "Недвижимость",
    "section" => "Недвижимость",
  ],
];
$activeNavItem = isset($_GET['section']) ? $_GET['section'] : '';

?>

<link rel="stylesheet" href="src/components/page/inventory/inventory.css">
<script src="src/components/page/inventory/inventory.js"></script>

<section class='grid_1-3-box inventory container'>
  <div class="inventory__header">
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

  </div>

  <div class="inventory__content ">
    <?php
    include 'src/components/ui/production/production-select/production-select.php';
    ?>
    <div class="grid__item__3">
      <?php foreach ($inventory as $el) : ?>
        <a class="inventory__card" href="<?php echo htmlspecialchars($el['href']); ?>?item=<?php echo htmlspecialchars($el['name']); ?>&id=<?php echo htmlspecialchars($el['id']); ?>">
          <div class="inventory__card-tag">
            <p>тегтегтегтег</p>

            <svg width="36" height="12" viewBox="0 0 36 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path opacity="0.1" d="M19 0.5L0.5 12L36 6.79167L19 0.5Z" fill="#122B8F" />
              <path d="M36 12.0003V6.79199L0.5 12.0003H36Z" fill="#FAFAFA" />
            </svg>

          </div>
          <div class="inventory__content--item--img">
            <img src="<?php echo IMG_PATH . 'inventory/' . htmlspecialchars($el['imagePreview']); ?>" alt="img">
          </div>
          <div class="inventory__content--item--text">
            <p>
              <?php echo nl2br(htmlspecialchars($el['name'])); ?>
            </p>
            <p>
              от <?php echo format($el['priceMonth'], "₽/мес."); ?>
            </p>
            <p>
              стоимость: от <?php echo format($el['price']); ?>
            </p>
          </div>
        </a>
      <?php endforeach; ?>


    </div>
  </div>

  <button class="button button--outline js-leady-loading leady-loading" type="button">Загрузить еще</button>
</section>