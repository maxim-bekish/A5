<section class="client-documents">
   <div class="client-documents__item">
      <p>
         Перечень документов <br> для юридических лиц
      </p>
      <div class="client-documents__controller  ">
         <a class="dowland" href="/src/assets/test.pdf" download="filename.pdf" target="_blank"
            rel="noopener noreferrer">
            <svg class="dowland__default" viewBox="0 0 50 50" fill="none">
               <use href="<?php echo SVG_PATH; ?>icons.svg#icon-dowland"></use>
            </svg>
            <svg class="dowland__hover" viewBox="0 0 50 50" fill="none">
               <use href="<?php echo SVG_PATH; ?>icons.svg#icon-dowland-hover"></use>
            </svg>
         </a>
         <a class="view" target="_blanc" href="/src/assets/test.pdf">
            <svg class="view__default" viewBox="0 0 50 50" fill="none">
               <use href="<?php echo SVG_PATH; ?>icons.svg#icon-eye"></use>
            </svg>
            <svg class="view__hover" viewBox="0 0 50 50" fill="none">
               <use href="<?php echo SVG_PATH; ?>icons.svg#icon-eye-hover"></use>
            </svg>
         </a>

      </div>
   </div>
   <div class="client-documents__item">
      <p>
         Перечень документов для ИП
      </p>
      <div class="client-documents__controller  ">
         <a class="dowland" href="/src/assets/test.pdf" download="filename.pdf" target="_blank"
            rel="noopener noreferrer">
            <svg class="dowland__default" viewBox="0 0 50 50" fill="none">
               <use href="<?php echo SVG_PATH; ?>icons.svg#icon-dowland"></use>
            </svg>
            <svg class="dowland__hover" viewBox="0 0 50 50" fill="none">
               <use href="<?php echo SVG_PATH; ?>icons.svg#icon-dowland-hover"></use>
            </svg>
         </a>
         <a class="view" target="_blanc" href="/src/assets/test.pdf">
            <svg class="view__default" viewBox="0 0 50 50" fill="none">
               <use href="<?php echo SVG_PATH; ?>icons.svg#icon-eye"></use>
            </svg>
            <svg class="view__hover" viewBox="0 0 50 50" fill="none">
               <use href="<?php echo SVG_PATH; ?>icons.svg#icon-eye-hover"></use>
            </svg>
         </a>

      </div>
   </div>
   <div class="client-documents__item">
      <p>
         Договор лизинга
      </p>
      <div class="client-documents__controller  ">
         <a class="dowland" href="/src/assets/test.pdf" download="filename.pdf" target="_blank"
            rel="noopener noreferrer">
            <svg class="dowland__default" viewBox="0 0 50 50" fill="none">
               <use href="<?php echo SVG_PATH; ?>icons.svg#icon-dowland"></use>
            </svg>
            <svg class="dowland__hover" viewBox="0 0 50 50" fill="none">
               <use href="<?php echo SVG_PATH; ?>icons.svg#icon-dowland-hover"></use>
            </svg>
         </a>
         <a class="view" target="_blanc" href="/src/assets/test.pdf">
            <svg class="view__default" viewBox="0 0 50 50" fill="none">
               <use href="<?php echo SVG_PATH; ?>icons.svg#icon-eye"></use>
            </svg>
            <svg class="view__hover" viewBox="0 0 50 50" fill="none">
               <use href="<?php echo SVG_PATH; ?>icons.svg#icon-eye-hover"></use>
            </svg>
         </a>

      </div>
   </div>
   <div class="client-documents__item">
      <p>
         Договор купли-продажи
      </p>
      <div class="client-documents__controller  ">
         <a class="dowland" href="/src/assets/test.pdf" download="filename.pdf" target="_blank"
            rel="noopener noreferrer">
            <svg class="dowland__default" viewBox="0 0 50 50" fill="none">
               <use href="<?php echo SVG_PATH; ?>icons.svg#icon-dowland"></use>
            </svg>
            <svg class="dowland__hover" viewBox="0 0 50 50" fill="none">
               <use href="<?php echo SVG_PATH; ?>icons.svg#icon-dowland-hover"></use>
            </svg>
         </a>
         <a class="view" target="_blanc" href="/src/assets/test.pdf">
            <svg class="view__default" viewBox="0 0 50 50" fill="none">
               <use href="<?php echo SVG_PATH; ?>icons.svg#icon-eye"></use>
            </svg>
            <svg class="view__hover" viewBox="0 0 50 50" fill="none">
               <use href="<?php echo SVG_PATH; ?>icons.svg#icon-eye-hover"></use>
            </svg>
         </a>

      </div>
   </div>
</section>


<style>
   .dowland svg,
   .view svg,
   .dowland,
   .view {
      width: 38px;
      height: 38px;
   }

   .client-documents {
      display: grid;
      grid-template-columns: repeat(2, 410px);
      grid-template-rows: repeat(2, 200px);
      grid-column-gap: 40px;
      grid-row-gap: 40px;
   }

   .client-documents__controller {
      position: absolute;
      right: 20px;
      bottom: 20px;
      display: flex;
      gap: 10px;
   }

   .client-documents__item p {
      font-size: 20px;
      font-weight: 500;
      line-height: 24px;

   }

   .client-documents__item {
      padding: 30px 20px;
      position: relative;
      width: 410px;
      background: rgba(242, 242, 242, 1);
      height: 200px;
   }
</style>