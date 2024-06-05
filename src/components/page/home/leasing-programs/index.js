const listContent = [
    {
        term: '1 — 5 лет',
        prepaid: 'от 5%',
        info: 'Легковые автомобили в лизинг для юридических лиц и ИП.',
        link: '#',
        img: '1-photo.jpg',
        id: 1
    },
    {
        term: '1 — 5 лет',
        prepaid: 'от 5%',
        info: 'Грузовой автотранспорт в лизинг под любые запросы бизнеса.',
        link: '#',
        img: '2-photo.jpg',
        id: 2
    },
    {
        term: '1 — 5 лет',
        prepaid: 'от 5%',
        info: 'Спецтехника в лизинг поможет развить бизнес и расширить сферу влияния.',
        link: '#',
        img: '3-photo.jpg',
        id: 3
    },
    {
        term: '1 — 5 лет',
        prepaid: 'от 5%',
        info: 'Оборудование в лизинг — действенный способ модернизации производства.',
        link: '#',
        img: '4-photo.jpg',
        id: 4
    },
    {
        term: '12 — 60 лет',
        prepaid: 'от 20%',
        info: 'Медицинское оборудование в лизинг — лёгкий способ усовершенствования оказываемых услуг.',
        link: '#',
        img: '5-photo.jpg',
        id: 5
    },
    {
        term: '1 — 5 лет',
        prepaid: 'от 20%',
        info: 'Ресторанное оборудование в лизинг ускорит производительность.',
        link: '#',
        img: '6-photo.jpg',
        id: 6
    },
    {
        term: '1 — 3 лет',
        prepaid: 'от 20%',
        info: 'Автомобили и оборудование с пробегом до 5 лет в лизинг в хорошем состоянии, выгоднее на 30–40%, чем новые.',
        link: '#',
        img: '7-photo.jpg',
        id: 7
    },
    {
        term: '1 — 5 лет',
        prepaid: 'от 30%',
        info: 'Недвижимость в лизинг поможет сэкономить на расширении бизнеса.',
        link: '#',
        img: '8-photo.jpg',
        id: 8
    },
];



$(document).ready(function () {
    let activeItem = $('.leasing-programs-content .list-item-active').attr('id');
    let term = $('.leasing-programs #js-leasing-term')
    let prepaid = $('.leasing-programs #js-leasing-prepaid')
    let info = $('.leasing-programs #js-leasing-info')
    let link = $('.leasing-programs #js-leasing-link')
    let img = $('.leasing-programs #js-leasing-img')
    $(".jsListItemProgram").click(function () {
        // Удаляем класс у всех блоков
        $(".jsListItemProgram").removeClass("list-item-active");
        // Добавляем класс только к текущему блоку
        $(this).addClass("list-item-active");
        xxx($(this).attr("id"));
    });

    function xxx(leasing) {
        term.text(listContent[leasing - 1].term);
        prepaid.text(listContent[leasing - 1].prepaid);
        info.text(listContent[leasing - 1].info);
        link.attr('href', ` ${listContent[leasing - 1].link}`);

        img.attr('src', `src/assets/images/img/leasing-programs/${listContent[leasing - 1].img}`);
    }
    xxx(activeItem)
});
