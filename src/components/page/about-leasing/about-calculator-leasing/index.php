<section class="about-calculator-leasing grid_1-3-box container mt-160px">
   <div class="grid_1-3_1">
      <p class="p20px">
         Калькулятор лизинга
      </p>
   </div>
   <div class="grid_1-3_3 about-calculator-leasing__content">
      <?php
      include 'src/components/ui/calculator/calculator.php';
      include 'src/components/ui/calculator-result/index.php';
      ?>
   </div>
</section>

<style>
   .about-calculator-leasing__content {
      display: flex;
      justify-content: space-between;
   }
</style>