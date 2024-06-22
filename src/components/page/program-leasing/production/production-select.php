<div class="production__select-box">

   <div class="production__select">
      <div class="production__select-title-box">
         <p class="production__select-title"> Select 1</p>
         <button type="button" class="js-open-select">
            <svg class="pointer rt0 select-svg" width="14" height="9" viewBox="0 0 14 9" fill="none">
               <use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-down"></use>
            </svg>
         </button>
      </div>
      <div class="production__select-items-box">
         <ul class="production__select-items">
            <li class="production__select-item">1</li>
            <li class="production__select-item">2</li>
            <li class="production__select-item">3</li>
            <li class="production__select-item">4</li>
            <li class="production__select-item">5</li>
            <li class="production__select-item">6</li>
            <li class="production__select-item">7</li>
            <li class="production__select-item">8</li>
            <li class="production__select-item">9</li>
            <li class="production__select-item">9</li>
            <li class="production__select-item">9</li>
            <li class="production__select-item">9</li>
            <li class="production__select-item">9</li>
            <li class="production__select-item">9</li>

         </ul>
      </div>
   </div>

   <div class="production__select production__select--input ">
      <div class="production__select-title-box">
         <p class="production__select-title"> Select 2</p>
         <p class="production__select-title-two"></p>
         <button type="button" class="js-open-select">
            <svg class="pointer rt0 select-svg " width="14" height="9" viewBox="0 0 14 9" fill="none">
               <use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-down"></use>
            </svg>
         </button>
      </div>
      <div class="production__select-items-box">
         <div class="production__select-items">
            <div class="production__select-item-box">
               <span class="production__select-item-label"> от </span>
               <input id="inputFrom" class="production__select-item-input" placeholder="0 ₽" type="text">
            </div>
            <div class="production__select-item-box">
               <span class="production__select-item-label"> до </span>
               <input id="inputTo" class="production__select-item-input" placeholder="0 ₽" type="text">
            </div>
            <button type="button" class="js-apply-select button button--blue">Применить</button>
         </div>
      </div>
      <!--select 222-->
   </div>

</div>


<style>
   .production__select-items button {
      padding: 10px 0;
   }

   .production__select-item-box {
      position: relative;
      display: flex;
      gap: 13px;
      height: 27px;
   }

   .production__select-item-label {
      position: absolute;
      font-size: 16px;
      bottom: 5px;
      line-height: 19.36px;
      color: #979797;
   }

   .production__select-item-input {
      border: 0;
      width: 100%;
      padding-left: 30px;
      font-size: 16px;
      line-height: 16.64px;
      color: #515151;
      border-bottom: 1px solid transparent;
      padding-bottom: 5px;
   }

   .production__select-item-input::placeholder {
      font-size: 16px;
      line-height: 16.64px;
      color: #515151;
   }

   .production__select-item-input:hover {
      border-bottom: 1px solid #979797;
   }

   .production__select-item-input:focus {
      border-bottom: 1px solid #0045B2;
   }

   .production__select-box {
      display: flex;
      gap: 20px;
   }

   .production__select {
      max-width: 250px;
      width: 100%;
      position: relative;
   }

   .select-svg {
      stroke: #515151;
   }

   .production__select-title-box {
      display: flex;
      align-items: center;
      padding: 18px 16px;
      justify-content: space-between;
      border-width: 1px;
      border-style: solid;
      border-color: #979797;
   }

   .production__select-items-box {
      padding: 18px 16px;
      opacity: 0;
      max-height: 316px;
      position: absolute;
      border-color: #979797;
      border-style: solid;
      box-sizing: border-box;
      border-width: 1px;
      background-color: #fff;
      width: 100%;
      border-top-width: 0px;
      transition: all 0.1s ease;
   }

   .production__select--input .production__select-items {
      overflow: hidden;
   }

   .production__select-items {
      height: 100%;
      overflow: auto;
      transition: all 0.1s ease;
      display: flex;
      flex-direction: column;
      gap: 20px;
   }

   /* скрол */

   /* Стилизация скролла для веб-китовских браузеров (Chrome, Safari) */
   .production__select-items::-webkit-scrollbar {
      width: 5px;

      /* Ширина скролла */
   }

   .production__select-items::-webkit-scrollbar-track {
      background: #979797;
      /* Цвет трека */
      border-radius: 5px;
      border-right: 2px solid #fff;
      border-left: 2px solid #fff;
      cursor: pointer;
      /* Радиус скролла */
   }

   .production__select-items::-webkit-scrollbar-thumb {
      background: #0045B2;
      /* Цвет бегунка */
      cursor: pointer;
      border-radius: 5px;
      /* Радиус бегунка */
   }

   /* Стилизация скролла для Internet Explorer и Edge */
   .production__select-items {
      -ms-overflow-style: -ms-autohiding-scrollbar;
      /* Автоскрывающийся скролл для IE и Edge */
   }

   /* скрол */


   .production__select-title,
   .production__select-items li {
      font-size: 16px;
      line-height: 16.64px;
      color: #515151;
      cursor: pointer;
   }

   .production__select-items li:hover {
      color: #0045B2;
   }

   .production__select--active .production__select-title-box,
   .production__select--active .production__select-items-box {
      border-color: #0045B2;
   }
</style>



<script>
   $(document).ready(function() {
      const speedAnimation = 100;

      function toggleSelect($selectBox, $selectItems) {
         const isOpen = $selectItems.css('opacity') == 1;

         $selectBox.find('.select-svg').toggleClass("rt180", !isOpen);

         if (isOpen) {
            $selectItems.animate({
               opacity: 0,
               //height: 0
            }, speedAnimation, function() {
               if (!$selectBox.hasClass('selected')) {
                  $selectBox.removeClass('production__select--active');
               }
            });
         } else {
            //$selectItems.css('height', 'auto');

            const autoHeight = $selectItems.prop('scrollHeight');
            let heightWithoutPadding = $selectItems.height();

            //$selectItems.css('height', '0');
            console.log(heightWithoutPadding)
            if (autoHeight <= 310) {

               $selectBox.find('.production__select-items').css('overflow', 'hidden');
            } else {
               $selectBox.find('.production__select-items').css('height', heightWithoutPadding);
               $selectBox.find('.production__select-items').css('overflow', 'auto');

            }
            $selectItems.animate({
               opacity: 1,
               //height: autoHeight
            }, speedAnimation, function() {
               if (!$selectBox.hasClass('selected')) {
                  $selectBox.addClass('production__select--active');
               }
            });
         }
      }

      $('.production__select-box .js-open-select').click(function() {
         const $selectBox = $(this).closest('.production__select');
         const $selectItems = $selectBox.find('.production__select-items-box');
         toggleSelect($selectBox, $selectItems);
      });

      $('.production__select-item').click(function() {
         const $selectItem = $(this);
         const $selectBox = $selectItem.closest('.production__select');
         const $selectTitle = $selectBox.find('.production__select-title');
         const $selectItems = $selectBox.find('.production__select-items-box');

         $selectTitle.text($selectItem.text());
         $selectBox.addClass('selected');

         toggleSelect($selectBox, $selectItems);
      });

      $(document).on('click', function(event) {
         const $target = $(event.target);

         if (!$target.closest('.production__select').length) {
            $('.production__select-items-box').each(function() {
               const $selectItems = $(this);
               const $selectBox = $selectItems.closest('.production__select');

               if ($selectItems.css('opacity') == 1) {
                  toggleSelect($selectBox, $selectItems);
               }
            });
         } else {
            $('.production__select').not($target.closest('.production__select')).each(function() {
               const $otherSelectBox = $(this);
               const $otherSelectItems = $otherSelectBox.find('.production__select-items-box');

               if ($otherSelectItems.css('opacity') == 1) {
                  toggleSelect($otherSelectBox, $otherSelectItems);
               }
            });
         }
      });

      function formatNumber(num) {
         return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
      }

      $('.production__select-item-input').on('input', function() {
         let value = $(this).val().replace(/[^\d.-]/g, '');
         if (value) {
            let formattedValue = formatNumber(parseInt(value));
            $(this).val(formattedValue + " ₽");
         } else {
            $(this).val("0 ₽");
         }
      });

      $('.js-apply-select').on('click', function() {
         let fromValue = $('#inputFrom').val().replace(/[^\d.-]/g, '');
         let toValue = $('#inputTo').val().replace(/[^\d.-]/g, '');
         if (!fromValue) fromValue = 0;
         if (!toValue) toValue = 0;
         let values = {
            from: fromValue,
            to: toValue
         };
         $('.production__select--input .production__select-title').html(`${formatNumber(values.from)} - ${formatNumber(values.to)} ₽`);

         const $selectBox = $(this).closest('.production__select');
         const $selectItems = $selectBox.find('.production__select-items-box');
         toggleSelect($selectBox, $selectItems);
      });
   });
</script>