<link rel="stylesheet" href="src/components/page/clients/index.css">
<?php
$activeNavItem = isset($_GET['section']) ? $_GET['section'] : ' ';
$listTitle = [
  [
    'title' => "Общие условия",
    'code' => "general-conditions"
  ],
  [
    'title' => "Документы",
    'code' => "client-documents"
  ],
  [
    'title' => "Государственная поддержка для малого и среднего бизнеса",
    'code' => "partners"
  ],
  [
    'title' => "Правила лизинга",
    'code' => "leasing-guide"
  ]
]

?>


<section class="clients-partners-program grid_1-3-box container">
  <div class="aside-bar">
    <h3>Клиентам</h3>
  
    <div class="mobile__select">

      <div class="mobile__title js-open-select">
        <p> </p>
        <svg class="rt0 js-svg-upend" width="14px" height="9px" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
          <use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-down"></use>
        </svg>
      </div>
      <ul id="js-leasing-ul" class="mobile__list-content">
        <?php foreach ($listTitle as $el) : ?>
          <li  class="mobile__list-content--item">
            <a
              href="?section=<?php echo htmlspecialchars($el['code']); ?>"
              class="jsListItemProgram <?php if ($activeNavItem === $el['code']) echo 'program__navigation--active' ?>">
              <?php echo htmlspecialchars($el['title']); ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>


  <script>
    $(document).ready(function() {
      let $active = $('.program__navigation-mob--active').text()
      $('.mobile__title p').text();
      $('.mobile__title p').text($active);

    })
  </script>
  <div class="clients-partners-program__content">
    <?php

    switch ($activeNavItem) {
      case 'general-conditions':
        include 'src/components/page/clients/general-conditions/general-conditions.php';
        break;
      case 'partners':
        include 'src/components/page/clients/support-businesses/support-businesses.php';
        break;
      case 'client-documents':
        include 'src/components/page/clients/client-documents/client-documents.php';
        break;
      case 'leasing-guide':
        include 'src/components/page/clients/leasing-guide/leasing-guide.php';
        break;
      default:
        include 'src/components/page/clients/support-businesses/support-businesses.php';
        break;
    }
    ?>
  </div>
</section>

<script>
  $(document).ready(function () {
  $(".mobile__title p").text($(".program__navigation--active").text());
});

</script>