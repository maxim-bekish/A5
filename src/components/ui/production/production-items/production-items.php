<link rel="stylesheet" href="src/components/ui/production/production-items/production-items.css">
<script type="module" src="src/components/ui/production/production-items/production-items.js"></script>

<?php
include 'src/state/state.php';
require_once 'src/assets/helpers/format.php';
?>

<section class="production ">
  <?php
  include 'src/components/ui/production/production-select/production-select.php';
  ?>
  <div class="production__cards ">
    <?php foreach ($production as $el) : ?>
      <a href="<?php echo htmlspecialchars($el['href']); ?>?item=<?php echo htmlspecialchars($el['name']); ?>&id=<?php echo htmlspecialchars($el['id']); ?>" class="production__cards--item">
        <div class="production__cards--item--img">
          <img src="<?php echo IMG_PATH . 'inventory/' . htmlspecialchars($el['imagePreview']); ?>" alt="img">
        </div>
        <div class="production__cards--item--text">
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
    <button class="button button--outline js-leady-loading leady-loading" type="button">Загрузить еще</button>
    <div class="production__form">
      <div class="production__module-window">
        <h2 class="production__module-window__title">Не нашли нужный вам продукт?</h2>
        <p class="production__module-window__description">
          Оставьте свои контактные данные и наш
          <br>
          менеджер перезвонит в ближайшее время
        </p>
        <form class="js-myForm js-popApp-OK production__module-window__form">
          <div class="form-items-100 form-gray production__module-window__form-items">
            <div class="form-group production__module-window__form-group">
              <input class="form-group__input name" name="name" id="production-name" type="text" placeholder=" " required>
              <label class="form-group__label" for="production-name">
                Ваше имя
              </label>
            </div>
            <div class="form-group production__module-window__form-group">
              <input class="form-group__input phone" name="phone" pattern="\+7 \([0-9]{3}\) [0-9]{3}-[0-9]{2}-[0-9]{2}" id="production-phone" type="tel" placeholder=" " required>
              <label class="form-group__label" for="production-phone">
                Телефон
              </label>
            </div>
          </div>


          <div class="checkbox checkbox--white production__module-window__checkbox">
            <input class="custom-checkbox checkbox__input " type="checkbox" name="privacy_policy" id="option-production" required>
            <label class="checkbox__label" for="option-production">
              Согласен с политикой конфиденциальности
            </label>
          </div>
    
          <button disabled class="button button--blue js-btn-production js-popUp-submitBtn " type="button">
            Оставить заявку
          </button>
        </form>

      </div>
      <img class="production__module-window-img" src="<?php echo IMG_PATH ?>dopForm.png" alt="">
    </div>
  </div>
</section>