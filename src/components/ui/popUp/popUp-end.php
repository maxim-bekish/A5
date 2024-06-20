<section class="popUp-end-box">
   <div class="popUp-end ">
      <button type="button" class="js-popUp-closed popUp-end__closed">
         <svg width="24" height="24" viewBox="0 0 24 24">
            <use href="<?php echo SVG_PATH; ?>icons.svg#icon-closed-24"></use>
         </svg>
      </button>
      <svg width="140" height="140" viewBox="0 0 140 140" fill="none">
         <use href="<?php echo SVG_PATH; ?>icons.svg#icon-ok-big"></use>
      </svg>
      <h2 class="popUp-end__title">
         Заявка успешно <br> отправлена
      </h2>
   </div>
</section>


<script>
   $(document).ready(function() {
      $('.js-popUp-submitBtn').click(function() {
         $('.popUp-end-box').css('display', 'block');
         $('.app').addClass('blurred');
         $('body').css('overflow', 'hidden');
      });
      $('.js-popUp-closed').click(function() {
         $('.popUp-end-box').css('display', 'none');
         $('.app').removeClass('blurred');
         $('body').css('overflow', 'auto');
      });
   });
</script>

<style>
   .popUp-end-box {
      display: none;
      width: 100vw;
      height: 100vh;
      z-index: 9999999;
      position: fixed;
      background-color: #9797974D;
      top: 0;
      left: 0;
   }

   .popUp-end__closed {
      position: absolute;
      top: 25px;
      right: 25px;
   }

   .popUp-end {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      padding: 60px;
      background: #F2F2F2;
      max-width: 700px;
      max-height: 511px;
      height: 100%;
      width: 100%;
      display: flex;
      gap: 40px;
      flex-direction: column;
      align-items: center;
      justify-content: center;
   }

   .popUp-end__title {
      font-size: 50px;
      line-height: 60px;
      text-align: center;
      color: #0045B2;
   }
</style>