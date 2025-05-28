<link rel="stylesheet" href="/src/components/page/home/home-leasing-calculator/home-leasing-calculator.css">
<script src="/src/components/page/home/home-leasing-calculator/home-leasing-calculator.js"></script>

<section id="home-calculator" class="leasing-calculator mt-160px container">
	<div class="leasing-calculator__box grid_1-3-box">
		<div class="leasing-calculator__title">
				<h3 class="title-page-h3">Лизинговый калькулятор</h3>
         <p class="p20px">
            Укажите все параметры и получите точный расчет
         </p>
      </div>
      <div class='leasing-calculator__box--content'>
         <?php
         include 'src/components/ui/calculator/calculator.php';
         include 'src/components/ui/calculator-result/calculator-result.php';
         ?>
      </div>
   </div>
</section>