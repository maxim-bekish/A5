$(document).ready(function () {
   const statsElements = $('.about-company--big-test');

   const observerOptions = {
      root: null,
      rootMargin: '0px',
      threshold: 0.1
   };

   const observer = new IntersectionObserver(function (entries, observer) {
      entries.forEach(function (entry) {
         if (entry.isIntersecting) {
            $(entry.target).addClass('about-company--big-test--visible');
            observer.unobserve(entry.target); // Остановка наблюдения после запуска анимации
         }
      });
   }, observerOptions);

   statsElements.each(function () {
      observer.observe(this);
   });
});
