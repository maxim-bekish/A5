<link rel="stylesheet" href="src/components/ui/card-docs/card-docs.css">

<?php
function generateDynamicCardDocs($data = [])
{
  ob_start();
?>
  <section class="client-documents">
    <?php foreach ($data as $item) : ?>
      <div class="client-documents__item">
        <p>
          <?= htmlspecialchars($item['title']) ?>
        </p>
        <div class="client-documents__controller">
          <?php if (!empty($item['dowland'])): ?>

            <a class="dowland" href="<?= htmlspecialchars($item['link']) ?>" download="filename.pdf" target="_blank" rel="noopener noreferrer">
              <svg class="dowland__default" viewBox="0 0 50 50" fill="none">
                <use href="<?php echo SVG_PATH; ?>icons.svg#icon-dowland"></use>
              </svg>
              <svg class="dowland__hover" viewBox="0 0 50 50" fill="none">
                <use href="<?php echo SVG_PATH; ?>icons.svg#icon-dowland-hover"></use>
              </svg>
            </a>
          <?php endif; ?>
          <?php if (!empty($item['show'])): ?>
            <a class="view" target="_blank" href="<?= htmlspecialchars($item['link']) ?>">
              <svg class="view__default" viewBox="0 0 50 50" fill="none">
                <use href="<?php echo SVG_PATH; ?>icons.svg#icon-eye"></use>
              </svg>
              <svg class="view__hover" viewBox="0 0 50 50" fill="none">
                <use href="<?php echo SVG_PATH; ?>icons.svg#icon-eye-hover"></use>
              </svg>
            </a>
          <?php endif; ?>
        </div>
      </div>
    <?php endforeach; ?>
  </section>
<?php
  return ob_get_clean();
}
