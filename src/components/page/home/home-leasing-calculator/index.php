<link rel="stylesheet" href="/src/components/page/home/home-leasing-calculator/index.css">
<script src="/src/components/page/home/home-leasing-calculator/index.js"></script>

<section id="home-calculator" class="leasing-calculator mt-160px container">
   <h3 class="title-page-h3">Калькулятор лизинга</h3>
   <div class="leasing-calculator__box">
      <div class="leasing-calculator__title">
         <p class="leasing-calculator__title-text">
            Укажите все параметры <br>
            и получите точный расчет
         </p>
      </div>
      <?php
      include 'src/components/ui/calculator/calculator.php';
      ?>
      <div class="leasing-calculator__result">
         <div class="leasing-calculator__header">
            <div class="leasing-calculator__header-item leasing-calculator__header-item--big">
               <p class="leasing-calculator__header-title">Годовое удорожание:</p>
               <p class="leasing-calculator__header-value leasing-calculator__header-value--big">19,74%</p>
            </div>
            <div class="leasing-calculator__header-item">
               <p class="leasing-calculator__header-title">Возврат 20% НДС:</p>
               <p class="leasing-calculator__header-value">210 800 ₽</p>
            </div>
            <div class="leasing-calculator__header-item leasing-calculator__header-item--big">
               <p class="leasing-calculator__header-title">Ежемесячный платеж:</p>
               <p class="leasing-calculator__header-value leasing-calculator__header-value--medium">35 900 ₽</p>
            </div>
            <div class="leasing-calculator__header-item">
               <p class="leasing-calculator__header-title">Сумма договора лизинга:</p>
               <p class="leasing-calculator__header-value">210 800 ₽</p>
            </div>
         </div>
         <div>
            <button class="button button--white">
               Получить коммерческое предложение
            </button>
            <p class="leasing-calculator__info">
               Стоимость предмета лизинга и приведенные расчеты через калькулятор являются предварительными. Для точного
               определения процентной ставки по договору, пожалуйста, заполните онлайн-заявку на расчет коммерческого
               предложения.
            </p>
         </div>
      </div>
   </div>
</section>