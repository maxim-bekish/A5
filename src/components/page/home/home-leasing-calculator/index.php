<link rel="stylesheet" href="/src/components/page/home/home-leasing-calculator/index.css">
<script src="/src/components/page/home/home-leasing-calculator/index.js"></script>

<section id="home-calculator" class="leasing-calculator mt-160px container">
   <h3 class="title-page-h3">Калькулятор лизинга</h3>
   <div class="leasing-calculator__box grid_1-3-box">
      <div class="leasing-calculator__title grid_1-3_1">
         <p class="leasing-calculator__title-text">
            Укажите все параметры <br>
            и получите точный расчет
         </p>
      </div>
      <div class='grid_1-3_3 leasing-calculator__box--content'>
         <?php
         include 'src/components/ui/calculator/calculator.php';
         include 'src/components/ui/calculator-result/index.php';
         ?>
      </div>
   </div>
</section>