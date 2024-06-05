<link rel="stylesheet" href="/src/components/page/home/leasing-calculator/index.css">
<section id="home-calculator" class="leasing-calculator mt-160px container">
   <h3 class="title-page-h3">Калькулятор лизинга</h3>
   <div class="leasing-calculator-box">
      <div class="leasing-calculator-title">
         <p>
            Укажите все параметры <br>
            и получите точный расчет
         </p>
      </div>
      <?php
      include 'src/components/ui/calculator/calculator.php';
      ?>
      <div class="leasing-calculator-result">
         <div class="calculator-header">
            <div class="calculator-header-item-big">
               <p class="title">Годовое удорожание:</p>
               <p class="value">19,74%</p>
            </div>
            <div class="calculator-header-item">
               <p class="title">Возврат 20% НДС:</p>
               <p class="value">210 800 ₽</p>
            </div>
            <div class="calculator-header-item-big">
               <p class="title">Ежемесячный платеж:</p>
               <p class="value">35 900 ₽</p>
            </div>
            <div class="calculator-header-item">
               <p class="title">Сумма договора лизинга:</p>
               <p class="value">210 800 ₽</p>
            </div>
         </div>
         <div>
            <button class="button button-white">
               Получить коммерческое предложение
            </button>
            <p class="calculator-info">
               Стоимость предмета лизинга и приведенные расчеты через калькулятор являются предварительными. Для точного
               определения процентной ставки по договору, пожалуйста, заполните онлайн-заявку на расчет коммерческого
               предложения.
            </p>
         </div>
      </div>
   </div>
</section>
<script src="/src/components/page/home/leasing-calculator/index.js"></script>