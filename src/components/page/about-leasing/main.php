<?php
$activeNavItem = isset($_GET['section']) ? $_GET['section'] : ' ';
?>
<section class="clients-partners-program grid_1-3-box container">
   <div class="clients-partners-program__navigation grid_1-3_1">
      <h3>О лизинге</h3>
      <ul>
         <li>
            <a href="?section=general-terms" class="<?php if ($activeNavItem === 'general-terms' || $activeNavItem === ' ') echo 'program__navigation--active'; ?>">Общие условия</a>
         </li>
         <li>
            <a href="?section=subsidies" class="<?php if ($activeNavItem === 'subsidies') echo 'program__navigation--active'; ?>">Субсидиии малому и среднему бизнесу</a>
         </li>
      </ul>
   </div>
   <div class="clients-partners-program__content grid_1-3_3">
      <img src="<?php echo IMG_PATH; ?>about-leasing/img.png" alt="">
   </div>
</section>


<?php
switch ($activeNavItem) {
   case 'subsidies':
      include 'src/components/page/about-leasing/subsidies/index.php';
      break;
   case 'general-terms':
      include 'src/components/page/about-leasing/general-terms/index.php';
      include 'src/components/page/about-leasing/about-calculator-leasing/index.php';
      include 'src/components/page/about-leasing/about-document/index.php';
      break;
   default:
      include 'src/components/page/about-leasing/general-terms/index.php';
      break;
}
?>

<style>
   .grid_1-3-box {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      grid-template-rows: 1fr;
      grid-column-gap: 40px;
      grid-row-gap: 0px;
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

   .clients-partners-program__content img {
      object-position: center;
      object-fit: cover;
      height: 560px;
      margin-bottom: 40px;
   }
</style>