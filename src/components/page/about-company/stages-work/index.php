<!--<link rel="stylesheet" href="src/components/page/about-company/stages-work/index.css">-->
<!--<script src="src/components/page/about-company/stages-work/index.js"></script>-->

<section class="stages-work mt-160px container">
  <div>
    <h3 class="stages-work__title">
      С нами всё просто и понятно: всего
      <br>
      4 шага к развитию вашего бизнеса
    </h3>
  </div>
  <div class="stages-work__items">
    <div class="stages-work__item stages-work__item--one">
      <h4>
        1 шаг: заявка
      </h4>
      <p>
        Вы оставляете заявку на сайте.
        <br>
        В течение 3-х часов наш сотрудник
        <br>
        связывается с вами и подтверждает заявку.
      </p>
    </div>
    <div class="stages-work__item stages-work__item--two">
      <h4>
        2 шаг: подготовка документов
      </h4>
      <p>
        Наш менеджер курирует вас, объясняет, какие
        <br>
        документы нужно предъявить
        <br>
        и направляет их на одобрение.
      </p>
    </div>
    <div class="stages-work__item stages-work__item--three">
      <h4>
        3 шаг: одобрение и оплата
      </h4>
      <p>
        Мы принимаем решение, подписываем
        <br>
        договор, только тогда вы вносите аванс.
      </p>
    </div>
    <div class="stages-work__item stages-work__item--four">
      <h4>
        4 шаг: передача предмета лизинга
      </h4>
      <p>
        Далее поставщик передаёт вам
        <br>
        в пользование автотранспорт,
        <br>
        оборудование или недвижимость
      </p>
    </div>
  </div>
</section>


<script>
  $(document).ready(function() {
    function checkVisibility() {
      $('.stages-work__item').each(function() {
        var blockTop = $(this).offset().top;
        var windowBottom = $(window).scrollTop() + $(window).height();

        if (blockTop < windowBottom) {
          $(this).addClass('visible');
        }
      });
    }

    $(window).on('scroll', function() {
      checkVisibility();
    });

    // Проверяем видимость элементов при загрузке страницы
    checkVisibility();
  });
</script>

<style>
  .stages-work {
    background-image: url("src/assets/images/img/page-about/background.png");
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;
    width: 100%;
    padding-top: 150px;
    height: 1300px;
    position: relative;
    overflow: hidden;
  }

  .stages-work__title {
    font-family: 'Inter Tight', sans-serif;
    font-size: 70px;
    font-weight: 500;
    line-height: 84px;
    text-align: left;
    color: #fff;
  }

  .stages-work__items {
    position: relative;
    display: flex;
    height: 75%;
    margin-top: 70px;
    justify-content: space-between;
    flex-direction: column;
  }

  .stages-work__item {
    position: absolute;
    max-width: 570px;
    opacity: 0;
    transform: translateY(50px);
    transition: opacity 0.6s ease-out, transform 0.6s ease-out;
  }

  .stages-work__item.visible {
    opacity: 1;
    transform: translateY(0);
  }

  .stages-work__item h4 {
    font-family: 'Inter Tight', sans-serif;
    font-size: 35px;
    font-weight: 400;
    line-height: 35px;
    text-align: left;
    margin-bottom: 20px;
    color: #fff;
  }

  .stages-work__item p {
    font-family: 'Inter Tight', sans-serif;
    font-size: 18px;
    font-weight: 400;
    line-height: 25.2px;
    text-align: left;
    color: #fff;
  }

  .stages-work__item--one {
    top: 10%;
    left: 0;
  }

  .stages-work__item--two {
    left: 55%;
    top: 25%;
  }

  .stages-work__item--three {
    left: 20%;
    top: 65%;
  }

  .stages-work__item--four {
    bottom: 0;
    left: 60%;
  }
</style>