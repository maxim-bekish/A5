<script type="module" src="/src/components/ui/calculator/calculator.js"></script>

<link rel="stylesheet" href="/src/components/ui/calculator/calculator.css">

<section class="calculator-range">
   <div class=" calculator-item contract-price">
      <div class="item-header">
         <p>
            Стоимость предмета лизинга
         </p>
         <div>
            <input type="number" name="input1" min="0" max="100000000" value="8900100" class="inputCalculator" id="inputCalculator1">
            <p class='value js-value' id="value1"></p>
         </div>
      </div>
      <div class="item-main">
         <input type="range" min="0" max="100000000" value="8900100" id="range1" />
      </div>
      <div class="item-footer">
         <p>
            0 ₽
         </p>
         <p>
            до 100 000 000 ₽
         </p>
      </div>
   </div>
   <div class=" calculator-item first-payment">
      <div class="item-header">
         <p>
            Первоначальный взнос (аванс)
         </p>
         <div>
            <input min="0" max="49" value="20" type="number" name="input2" class="inputCalculator" id="inputCalculator2">
            <p class='value js-value' id="value2"></p>
         </div>
      </div>
      <div class="item-main">
         <input type="range" min="0" max="49" value="20" id="range2" />
      </div>
      <div class="item-footer">
         <p>
            0%
         </p>
         <p>
            49%
         </p>
      </div>
   </div>
   <div class=" calculator-item contract-time">
      <div class="item-header">
         <p>
            Срок договора
         </p>
         <div>
            <input min="12" max="60" value=26 type="number" name="input3" class="inputCalculator" id="inputCalculator3">
            <p class='value js-value' id="value3"></p>
         </div>
      </div>
      <div class="item-main">
         <input type="range" min="12" max="60" value=26 id="range3" />
      </div>
      <div class="item-footer">
         <p>
            от 1 года
         </p>
         <p>
            до 5 лет
         </p>
      </div>
   </div>
</section>