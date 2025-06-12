<?php
function generateCornerList($data, $class)
{
  ob_start();
?>
  <div class="list <?= htmlspecialchars($class) ?>">
    <?php foreach ($data as $index => $item): ?>
      <div class="card-corner__item">
        <div class="list__content">
          <?php if (!empty($item['titleBig'])): ?>
            <h5 class="list__content-title-big">
              <?= htmlspecialchars($item['titleBig']) ?>
            </h5>
          <?php endif; ?>
          <?php if (!empty($item['title'])): ?>
            <h5 class="list__content-title">
              <?= htmlspecialchars($item['title']) ?>
            </h5>
          <?php endif; ?>

          <?php if (!empty($item['subTitle'])): ?>
            <p class="list__content-subtitle"><?= htmlspecialchars($item['subTitle']) ?></p>
          <?php endif; ?>
          <?php if (!empty($item['text'])): ?>
            <p class="list__content-text"><?= htmlspecialchars($item['text']) ?></p>
          <?php endif; ?>

        </div>
        <svg class="card-corner__svg" width="75" height="24" viewBox="0 0 75 24" fill="none">
          <use href="<?php echo SVG_PATH; ?>icons.svg#icon-corner-card"></use>
        </svg>
      </div>
    <?php endforeach; ?>
  </div>
<?php
  return ob_get_clean();
}
