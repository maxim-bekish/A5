export const formatNumberWithSymbol = (number, symbol = '₽') => {
   if (typeof number !== 'number' || isNaN(number)) {
      console.error(number + " Не число")
      return
   } else {
      let numberStr = number.toString();
      let formattedNumber = numberStr.replace(/\B(?=(\d{3})+(?!\d))/g, " ");
      return formattedNumber + " " + symbol;
   }
};

export function formatPhoneNumber(value) {
   if (!value) return '+7 '; // Если значение пустое, возвращаем "+7 "
   const phoneNumber = value.replace(/[^\d]/g, ''); // Удаляем все нецифровые символы, кроме цифр
   const phoneNumberWithoutSeven = phoneNumber.startsWith('7') ? phoneNumber.slice(1) : phoneNumber; // Убираем начальную 7, если она есть
   const phoneNumberLength = phoneNumberWithoutSeven.length; // Определяем длину оставшегося телефонного номера
   // Форматируем номер в зависимости от его длины
   if (phoneNumberLength <= 0) return '+7 (';
   if (phoneNumberLength <= 3) return `+7 (${phoneNumberWithoutSeven.slice(0, 3)}`;
   if (phoneNumberLength <= 6) return `+7 (${phoneNumberWithoutSeven.slice(0, 3)}) ${phoneNumberWithoutSeven.slice(3, 6)}`;
   if (phoneNumberLength <= 8) return `+7 (${phoneNumberWithoutSeven.slice(0, 3)}) ${phoneNumberWithoutSeven.slice(3, 6)}-${phoneNumberWithoutSeven.slice(6, 8)}`;
   return `+7 (${phoneNumberWithoutSeven.slice(0, 3)}) ${phoneNumberWithoutSeven.slice(3, 6)}-${phoneNumberWithoutSeven.slice(6, 8)}-${phoneNumberWithoutSeven.slice(8, 10)}`;
}
export function dateFormat(num, type = 'year') {
   if (type === 'months') {
      let years = Math.floor(num / 12);
      let months = num % 12;
      let yearsText = years === 1 ? '1 год' : (years <= 4 ? `${years} года` : `${years} лет`);
      let monthsText = months === 0 ? '' : (months === 1 ? '1 месяц' : (months <= 4 ? `${months} месяца` : `${months} месяцев`));
      return `${yearsText} ${monthsText}`.trim();
   }
}