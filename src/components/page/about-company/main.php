<main class="js-main">
   <section class="bread-crumbs container">
      <a href="111">Главная</a>
      <svg class="bread-crumbs__arrow" fill="none">
         <use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-right"></use>
      </svg>
      <a href="#">О компании</a>
   </section>
   <?php
   include 'src/components/page/about-company/banner/banner.php';
   include 'src/components/page/about-company/about-company/about-company.php';
   include 'src/components/page/about-company/stages-work/index.php';
   include 'src/components/page/about-company/team-slider/index.php';
   include 'src/components/page/about-company/about-clients/index.php';
   ?>
</main>