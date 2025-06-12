<link rel="stylesheet" href="/src/components/page/inventory-card/inventory-card.css">

<?php
require 'src/assets/helpers/format.php';
include 'src/state/state.php';

$id = isset($_GET['id']) ? intval($_GET['id']) : null;

$selectedItem = null;

foreach ($inventory as $item) {
  if ($item['id'] === $id) {
    $selectedItem = $item;
    break;
  }
}

if ($selectedItem !== null) {
  $imagePath = isset($selectedItem['image']) ? IMG_PATH . 'inventory/' . $selectedItem['image'] : IMG_PATH . 'placeholder.png';
  $name = $selectedItem['name'];
  $price = format($selectedItem['price']);
  $priceMonth = format($selectedItem['priceMonth']);
  $term = $selectedItem['term'] . ' мес.';


?>

  <section class="card container">
    <h2 class="card__title__mobile"><?php echo $name ?></h2>
    <div class="card__image-container">
      <img class="card__image" src="<?php echo $imagePath ?>" alt="">
    </div>
    <div class="card__content">
      <h2 class="card__title"><?php echo $name ?></h2>
      <div class="card__details">
        <div class="card__detail">
          <p class="card__detail-label">Стоимость</p>
          <p class="card__detail-value">от <?php echo $price ?></p>
        </div>
        <div class="card__detail">
          <p class="card__detail-label">Ежемесячный платеж:</p>
          <p class="card__detail-value">от <?php echo $priceMonth ?></p>
        </div>
        <div class="card__detail">
          <p class="card__detail-label">Срок</p>
          <p class="card__detail-value"><?php echo $term ?></p>
        </div>
      </div>
      <div class="card__characteristics">
        <div class="card__tabs">
          <h4 class="card__characteristics-title active" data-tab="characteristics">Характеристики</h4>
          <h4 class="card__characteristics-title" data-tab="description">Описание</h4>
        </div>

        <div class="card__tab-content">
          <ul class="tab-pane active tab-pane--characteristics " id="characteristics-tab">
            <?php foreach ($selectedItem['characteristics'] as $index => $el) : ?>
              <li class="card__characteristic">
                <p class="card__characteristic-label"><?php echo htmlspecialchars($el['title']); ?></p>
                <p class="card__characteristic-value"><?php echo htmlspecialchars($el['value']); ?></p>
              </li>
            <?php endforeach; ?>
          </ul>
          <div class="tab-pane tab-pane--description" id="description-tab">
            <p><?php echo nl2br(htmlspecialchars($selectedItem['description'])) ?></p>
          </div>
        </div>
      </div>

      <?php
      require_once 'src/components/ui/button-popup/index.php';
      desiredProduct("Оставить заявку", "button--blue inventory-card__button")
      ?>
    </div>
  </section>;
<?php
} else {
  echo "<p>Элемент с указанным ID не найден.</p>";
}

?>

<script>
  $(document).ready(function() {
    $('.card__characteristics-title').on('click', function() {
      // Удаляем active у всех вкладок
      $('.card__characteristics-title').removeClass('active');

      // Добавляем active к текущей вкладке
      $(this).addClass('active');

      // Скрываем все содержимое вкладок
      $('.tab-pane').removeClass('active');

      // Показываем соответствующее содержимое
      const tabId = $(this).data('tab') + '-tab';
      $('#' + tabId).addClass('active');
    });
  });
</script>

<style>
  .tab-pane {
    display: none;
  }

  .tab-pane.active {
    display: flex;
  }
</style>