<link rel="stylesheet" href="/src/components/page/about-leasing/index.css">


<?php
$activeNavItem = isset($_GET['section']) ? $_GET['section'] : ' ';
?>
<section class="clients-partners-program grid_1-3-box container">
   <div class="aside-bar">
      <h3>О лизинге</h3>
      <ul>
         <li>
            <a href="?section=general-terms" class="<?php if ($activeNavItem === 'general-terms') echo 'program__navigation--active'; ?>">Общие условия</a>
         </li>
         <li>
            <a href="?section=subsidies" class="aside-bar__subsidies <?php if ($activeNavItem === 'subsidies') echo 'program__navigation--active'; ?>">Субсидиии малому и среднему бизнесу</a>
         </li>
      </ul>
   </div>
   <div class="clients-partners-program__content">
      <img src="<?php echo IMG_PATH; ?>about-leasing/img.png" alt="">
   </div>
</section>


<?php
switch ($activeNavItem) {
   case 'subsidies':
      include 'src/components/page/about-leasing/subsidies/subsidies.php';
      break;
   case 'general-terms':
      include 'src/components/page/about-leasing/general-terms/general-terms.php';
      include 'src/components/page/about-leasing/about-calculator-leasing/about-calculator-leasing.php';
      include 'src/components/page/about-leasing/about-document/about-document.php';
      break;
   default:
      include 'src/components/page/about-leasing/general-terms/general-terms.php';
      break;
}
?>