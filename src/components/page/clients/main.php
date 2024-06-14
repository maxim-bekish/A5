<main class="js-main">
   <section class="bread-crumbs container">
      <a href="#">Главная</a>
      <svg class="bread-crumbs__arrow" fill="none">
         <use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-right"></use>
      </svg>
      <a href="#">Клиентам</a>
   </section>

   <section class="clients-partners-program container">
      <div class="clients-partners-program__navigation">
         <h3>Клиентам</h3>
         <ul>
            <li>
               <a href="src/components/page/about-company/main.php">О компании</a>
            </li>
            <li>
               <a class="program__navigation--active" href="#">Клиенты и партнеры</a>
            </li>
            <li>
               <a href="#">Документы</a>
            </li>
            <li>
               <a href="#">Гид по лизингу</a>
            </li>
         </ul>
      </div>
      <div class="clients-partners-program__content">
         <?php
         //клиенты и партнеры

         //include 'src/components/page/clients/partners-program/index.php';

         //клиенты и партнеры
         //____________
         //документы

         //include 'src/components/page/clients/client-documents/index.php';

         //документы

         //гид по лизингу
         
         include 'src/components/page/clients/leasing-guide/index.php';
         
         //гид по лизингу
         ?>
      </div>
   </section>
   <!--клиенты и партнеры -->
   <?php
   //include 'src/components/page/clients/partners-items/index.php';
   //include 'src/components/page/clients/partners/index.php';
   ?>
   <!--клиенты и партнеры-->
</main>


<style>
   .clients-partners-program {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      grid-template-rows: 1fr;
      grid-column-gap: 40px;
      grid-row-gap: 0px;
   }

   .clients-partners-program__navigation {
      grid-area: 1 / 1 / 2 / 2;
   }

   .clients-partners-program__navigation ul {
      display: flex;
      flex-direction: column;
      gap: 30px;
      padding-left: 20px;
      border-left: 2px solid rgba(0, 69, 178, 1)
   }

   .clients-partners-program__navigation ul li a {
      text-wrap: nowrap;
   }

   .clients-partners-program__navigation ul li a:hover {
      color: rgba(0, 69, 178, 1);
   }

   .clients-partners-program__navigation ul li .program__navigation--active {
      text-decoration: underline;
      color: rgba(0, 69, 178, 1);
   }

   .clients-partners-program__navigation h3 {
      font-size: 30px;
      margin-bottom: 43px;
      line-height: 31.22px;
      color: rgba(0, 69, 178, 1);
   }

   .clients-partners-program__content {
      grid-area: 1 / 2 / 2 / 5;
   }
</style>