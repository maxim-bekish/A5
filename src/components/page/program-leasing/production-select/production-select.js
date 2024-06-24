$(document).ready(function () {
   const speedAnimation = 100;

   function toggleSelect($selectBox, $selectItems) {
      const isOpen = $selectItems.css('opacity') == 1;

      $selectBox.find('.select-svg').toggleClass("rt180", !isOpen);

      if (isOpen) {
         $selectItems.animate({
            opacity: 0,
            //height: 0
         }, speedAnimation, function () {
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
         }, speedAnimation, function () {
            if (!$selectBox.hasClass('selected')) {
               $selectBox.addClass('production__select--active');
            }
         });
      }
   }

   $('.production__select-box .js-open-select').click(function () {
      const $selectBox = $(this).closest('.production__select');
      const $selectItems = $selectBox.find('.production__select-items-box');
      toggleSelect($selectBox, $selectItems);
   });

   $('.production__select-item').click(function () {
      const $selectItem = $(this);
      const $selectBox = $selectItem.closest('.production__select');
      const $selectTitle = $selectBox.find('.production__select-title');
      const $selectItems = $selectBox.find('.production__select-items-box');

      $selectTitle.text($selectItem.text());
      $selectBox.addClass('selected');

      toggleSelect($selectBox, $selectItems);
   });

   $(document).on('click', function (event) {
      const $target = $(event.target);

      if (!$target.closest('.production__select').length) {
         $('.production__select-items-box').each(function () {
            const $selectItems = $(this);
            const $selectBox = $selectItems.closest('.production__select');

            if ($selectItems.css('opacity') == 1) {
               toggleSelect($selectBox, $selectItems);
            }
         });
      } else {
         $('.production__select').not($target.closest('.production__select')).each(function () {
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

   $('.production__select-item-input').on('input', function () {
      let value = $(this).val().replace(/[^\d.-]/g, '');
      if (value) {
         let formattedValue = formatNumber(parseInt(value));
         $(this).val(formattedValue + " ₽");
      } else {
         $(this).val("0 ₽");
      }
   });

   $('.js-apply-select').on('click', function () {
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