<main class="js-main container">
   <section class="bread-crumbs ">
      <a href="#">Главная</a>
      <svg class="bread-crumbs__arrow" fill="none">
         <use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-right"></use>
      </svg>
      <a href="#">О лизинге</a>
   </section>

   <section class="clients-partners-program grid_1-3-box ">
      <div class="clients-partners-program__navigation grid_1-3_1">
         <h3>О лизинге</h3>
         <ul>
            <li>
               <a href="#">
                  Общие условия
               </a>
            </li>
            <li>
               <a class="program__navigation--active" href="#">
                  Субсидиии малому и среднему бизнесу
               </a>
            </li>
         </ul>
      </div>
      <div class="clients-partners-program__content grid_1-3_3">
         <img src="<?php echo IMG_PATH; ?>about-leasing/img.png" alt="">
      </div>
   </section>
   <?php
   //include 'src\components\page\about-leasing\subsidies\index.php';
   include 'src\components\page\about-leasing\general-terms\index.php';
   ?>
</main>


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