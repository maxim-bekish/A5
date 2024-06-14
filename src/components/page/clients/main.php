<?php
$activeNavItem = isset($_GET['section']) ? $_GET['section'] : ' ';
?>

<section class="clients-partners-program container">
   <div class="clients-partners-program__navigation">
      <h3>Клиентам</h3>
      <ul>
         <li>
            <a href="/about-company">О компании</a>
         </li>
         <li>
            <a href="?section=partners" class="<?php if ($activeNavItem === 'partners' || $activeNavItem === ' ') echo 'program__navigation--active'; ?>">Клиенты и партнеры</a>
         </li>
         <li>
            <a href="?section=client-documents" class="<?php if ($activeNavItem === 'client-documents') echo 'program__navigation--active'; ?>">Документы</a>
         </li>
         <li>
            <a href="?section=leasing-guide" class="<?php if ($activeNavItem === 'leasing-guide') echo 'program__navigation--active'; ?>">Гид по лизингу</a>
         </li>
      </ul>
   </div>

   <div class="clients-partners-program__content">
      <?php

      switch ($activeNavItem) {
         case 'partners':
            include 'src/components/page/clients/partners-program/index.php';
            break;
         case 'client-documents':
            include 'src/components/page/clients/client-documents/index.php';
            break;
         case 'leasing-guide':
            include 'src/components/page/clients/leasing-guide/index.php';
            break;
         default:
            include 'src/components/page/clients/partners-program/index.php';
            break;
      }
      ?>
   </div>
</section>
<?php

if ($activeNavItem === 'partners' || $activeNavItem === ' ') {
   include 'src/components/page/clients/partners-items/index.php';
   include 'src/components/page/clients/partners/index.php';
}
?>

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