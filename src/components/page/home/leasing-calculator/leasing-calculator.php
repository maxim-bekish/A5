<link rel="stylesheet" href="/src/components/page/home/leasing-calculator/index.css">
<section class="leasing-calculator container">
   <h3>Калькулятор лизинга</h3>
   <div>
      <div class="leasing-calculator-title">
         <p>
            Укажите все параметры
            и получите точный расчет
         </p>
      </div>
      <?php
      include 'src/components/ui/calculator/calculator.php';
      ?>
      <div class="leasing-calculator-result"></div>
   </div>
</section>
<script src="/src/components/page/home/leasing-calculator/index.js"></script>