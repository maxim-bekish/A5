<script src="/src/components/ui/calculator/index.js"></script>

<link rel="stylesheet" href="/src/components/ui/calculator/index.css">

<section class="calculator-range">
   <div class=" calculator-item contract-price">
      <div class="item-header">
         <p>
            Стоимость лизингового договора
         </p>
         <p class='value' id="value1"></p>
      </div>
      <div class="item-main">
         <input type="range" min="400000" max="25000000" value="8900100" id="range1" />
      </div>
      <div class="item-footer">
         <p>
            от 400 000 ₽
         </p>
         <p>
            до 25 000 000 ₽
         </p>
      </div>
   </div>
   <div class=" calculator-item first-payment">
      <div class="item-header">
         <p>
            Первоначальный взнос
         </p>
         <p class='value' id="value2"></p>
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
         <p class='value' id="value3"></p>
      </div>
      <div class="item-main">
         <input type="range" min="12" max="84" value=68 id="range3" />
      </div>
      <div class="item-footer">
         <p>
            от 1 года
         </p>
         <p>
            до 7 лет
         </p>
      </div>
   </div>
   <div class=" calculator-item last-payment">
      <div class="item-header">
         <p>
         Последний платеж
         </p>
         <p class='value' id="value4"></p>
      </div>
      <div class="item-main">
         <input type="range" min="0" max="40" value="15" id="range4" />
      </div>
      <div class="item-footer">
         <p>
            0%
         </p>
         <p>
            40%
         </p>
      </div>
   </div>
</section>