<?php
function freeConsultation($text, $class)
{
?>
  <button
    type="button"
    class="openPopUpButton button  <?php echo $class ?>" data-title="Бесплатная консультация"
    data-description="Оставьте свои контактные данные и наш менеджер перезвонит в ближайшее время">
    <?php echo $text ?>
  </button>
<?php
}

function  commercialOffer($text, $class)
{
?>
  <button
    type="button"
    class="openPopUpButton button  <?php echo $class ?>"
    data-title="Получите коммерческое предложение"
    data-email="true">
    <?php echo $text ?>
  </button>
<?php
}

function desiredProduct($text, $class)
{
?>
  <button
    type="button"
    class="openPopUpButton button  <?php echo $class ?>"
    data-title="Не нашли нужный вам продукт?"
    data-description="Оставьте свои контактные данные и наш менеджер перезвонит в ближайшее время">
    <?php echo $text ?>
  </button>
<?php
}
?>