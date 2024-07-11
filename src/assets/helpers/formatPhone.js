export const formatNumberWithSymbol = (number, symbol = '₽') => {
   if (typeof number !== 'number' || isNaN(number)) {
      return
   }

   let numberStr = number.toString();
   let formattedNumber = numberStr.replace(/\B(?=(\d{3})+(?!\d))/g, " ");
   return formattedNumber + " " + symbol;
};

