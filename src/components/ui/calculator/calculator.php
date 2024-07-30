<script type="module" src="/src/components/ui/calculator/calculator.js"></script>

<link rel="stylesheet" href="/src/components/ui/calculator/calculator.css">

<section class="calculator-range">
   <div class=" calculator-item contract-price">
      <div class="item-header">
         <p>
            Стоимость предмета лизинга c НДС
         </p>
         <div class="item-header-box-value">
            <input type="text" name="input1" min='0' max='100000000' value='8955000' class="inputCalculator" id="inputCalculator1">
         </div>
      </div>
      <div class="item-main">
         <input type="range" step="1000" min="0" max="100000000" value="8955000" id="range1" />
      </div>
      <div class="item-footer">
         <p>
            <?php echo number_format(0, 0, '', ' ') . "₽" ?>
         </p>
         <p>
            до <?php echo number_format(100000000, 0, '', ' ') . "₽"; ?>
         </p>
      </div>
   </div>
   <div class=" calculator-item first-payment">
      <div class="item-header">
         <p>
            Первоначальный взнос (аванс)
         </p>
         <div class="item-header-box-value">
            <input min="0" max="49" value="20" type="text" name="input2" class="inputCalculator fixInput" id="inputCalculator2">
            <span class="inputCalculatorTwo"></span>
         </div>
      </div>
      <div class="item-main">
         <input type="range" min="0" max="49" value="20" id="range2" />
      </div>
      <div class="item-footer">
         <p>
            <?php echo number_format(0, 0, '', ' ') . "%"; ?>
         </p>
         <p>
            <?php echo number_format(49, 0, '', ' ') . "%"; ?>
         </p>
      </div>
   </div>
   <div class=" calculator-item contract-time">
      <div class="item-header">
         <p>
            Срок договора
         </p>
         <div class="item-header-box-value">
            <input min="12" max="60" value=26 type="text" disabled readonly name="input3" class="inputCalculator" id="inputCalculator3">
         </div>
      </div>
      <div class="item-main">
         <input type="range" min="12" max="60" value=26 id="range3" />
      </div>
      <div class="item-footer">
         <p>
            <?php echo number_format(12, 0, '', ' ') . "мес"; ?>
         </p>
         <p>
            <?php echo number_format(60, 0, '', ' ') . "мес"; ?>
         </p>
      </div>
   </div>
</section>