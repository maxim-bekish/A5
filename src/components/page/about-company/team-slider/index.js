const slidesTeam = [
    { id: '1', image: "1-zoomlin.svg", alt: "Zoomlin Logo" },
    { id: '2', image: "2-translift.svg", alt: "Translift Logo" },
    { id: '3', image: "3-medizina.svg", alt: "Medizina Logo" },
    { id: '4', image: "4-jood.svg", alt: "Jood Logo" },
    { id: '5', image: "5-agrolider.svg", alt: "Agrolider Logo" },
    { id: '6', image: "6-agrodoc.svg", alt: "Agrodoc Logo" },
    { id: '7', image: "7-rustorg.svg", alt: "Rustorg Logo" },
    { id: '8', image: "8-pkuspt.svg", alt: "Pkuspt Logo" },
    { id: '9', image: "9-UralSpecTrans.svg", alt: "UralSpecTrans Logo" },
    { id: '10', image: "10-geocentr.svg", alt: "geocentr Logo" },
    { id: '11', image: "11-LBR.svg", alt: "LBR Logo" },
    { id: '12', image: "12-gorci.svg", alt: "gorci Logo" },
    { id: '13', image: "13-pесо.svg", alt: "pесо Logo" },
    { id: '14', image: "14-ingostrah.svg", alt: "ingostrah Logo" },
    { id: '15', image: "15-jugiria.svg", alt: "jugiria Logo" },
    { id: '16', image: "16-sogaz.svg", alt: "sogaz Logo" },
    { id: '17', image: "17-energogrant.svg", alt: "energogrant Logo" },
    { id: '18', image: "18-bsk.svg", alt: "bsk Logo" },
    { id: '19', image: "19-alfa.svg", alt: "alfa Logo" },
    { id: '20', image: "20-mezcentr.svg", alt: "mezcentr Logo" }
];



$(document).ready(function () {
    const $slidesContainer = $(".custom-slider__container");
    let currentIndex = 0;
    const quantitySlide = 6;
    let initialSlides = slidesTeam.slice(0, quantitySlide);
    renderSlides(initialSlides)


    $(".js-partners-slider-next").click(function () {
        initialSlides.splice(0, 1)
        initialSlides.push(slidesTeam[currentIndex + 6])
        renderSlides(initialSlides)
        currentIndex += 1;
    });
    $(".js-partners-slider-prev").click(function () {
        initialSlides.pop()
        initialSlides.unshift(slidesTeam[currentIndex - 1])
        renderSlides(initialSlides)
        currentIndex -= 1;
    });



    // Функция для рендера слайдов
    function renderSlides(slides) {
        $slidesContainer.empty(); // Очистка контейнера
        slides.forEach(slide => {
            $slidesContainer.append(`
                <div key="${slide.id - 1}" class="custom-slider__slide">
                    <img src="/src/assets/images/svg/custom-slider/${slide.image}" alt="${slide.alt}">
                </div>
            `);
        });
    }

});








const images = [
    { id: '1', image: "1-zoomlin.svg", alt: "Zoomlin Logo" },
    { id: '2', image: "2-translift.svg", alt: "Translift Logo" },
    { id: '3', image: "3-medizina.svg", alt: "Medizina Logo" },
    { id: '4', image: "4-jood.svg", alt: "Jood Logo" },
    { id: '5', image: "5-agrolider.svg", alt: "Agrolider Logo" },
    { id: '6', image: "6-agrodoc.svg", alt: "Agrodoc Logo" },
    { id: '7', image: "7-rustorg.svg", alt: "Rustorg Logo" },
    { id: '8', image: "8-pkuspt.svg", alt: "Pkuspt Logo" },
    { id: '9', image: "9-UralSpecTrans.svg", alt: "UralSpecTrans Logo" },
    { id: '10', image: "10-geocentr.svg", alt: "geocentr Logo" },
    { id: '11', image: "11-LBR.svg", alt: "LBR Logo" },
    { id: '12', image: "12-gorci.svg", alt: "gorci Logo" },
    { id: '13', image: "13-pесо.svg", alt: "pесо Logo" },
    { id: '14', image: "14-ingostrah.svg", alt: "ingostrah Logo" },
    { id: '15', image: "15-jugiria.svg", alt: "jugiria Logo" },
    { id: '16', image: "16-sogaz.svg", alt: "sogaz Logo" },
    { id: '17', image: "17-energogrant.svg", alt: "energogrant Logo" },
    { id: '18', image: "18-bsk.svg", alt: "bsk Logo" },
    { id: '19', image: "19-alfa.svg", alt: "alfa Logo" },
    { id: '20', image: "20-mezcentr.svg", alt: "mezcentr Logo" },
    { id: '21', image: "20-logo.svg", alt: "mezcentr Logo" },

];

let activeImage = 0;
let sliderPlace = $('.custom-slider__line');
const widthOffset = $('.custom-slider').width();
sliderPlace.css({
    width: 3 * widthOffset + 'px',
    height: widthOffset + 'px',
    left: '-' + widthOffset + 'px'
});

let flag = true;
const initSlider = () => {
    const img = $('<img>').attr('src', '/src/assets/images/svg/custom-slider/' + images[activeImage].image);
    sliderPlace.append(img);
    nextImageGenerate();
    prevImageGenerate();
};

const nextImageGenerate = () => {
    let nextImage = activeImage + 1;
    if (nextImage >= images.length) nextImage = 0;
    const img = $('<img>').attr('src', '/src/assets/images/svg/custom-slider/' + images[nextImage].image);
    sliderPlace.append(img);
};

const prevImageGenerate = (w = false) => {
    let prevImage = activeImage - 1;
    if (prevImage < 0) prevImage = images.length - 1;
    const img = $('<img>').attr('src', '/src/assets/images/svg/custom-slider/' + images[prevImage].image);
    if (w) img.css('width', 0);
    sliderPlace.prepend(img);
};

const nextSlide = () => {
    if (!flag) return;
    flag = !flag;
    activeImage++;
    if (activeImage >= images.length) activeImage = 0;
    nextImageGenerate();
    animate({
        duration: 1000,
        draw: function (progress) {
            $('.custom-slider__line img').first().css('width', (widthOffset * (1 - progress)) + 'px');
        },
        removeElement: $('.custom-slider__line img').first()
    });
};

const prevSlide = () => {
    if (!flag) return;
    flag = !flag;
    activeImage--;
    if (activeImage < 0) activeImage = images.length - 1;
    prevImageGenerate(true);
    animate({
        duration: 1000,
        draw: function (progress) {
            $('.custom-slider__line img').first().css('width', (widthOffset * progress) + 'px');
        },
        removeElement: $('.custom-slider__line img').last()
    });
};

initSlider();

$('.next-button').on('click', nextSlide);
$('.prev-button').on('click', prevSlide);

const animate = ({ duration, draw, removeElement }) => {
    const start = performance.now();
    requestAnimationFrame(function animate(time) {
        let step = (time - start) / duration;
        if (step > 1) step = 1;
        draw(step);
        if (step < 1) {
            requestAnimationFrame(animate);
        } else {
            removeElement.remove();
            flag = true;
        }
    });
};
