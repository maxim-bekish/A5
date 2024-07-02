<?php
function get_breadcrumbs($uri)
{
    // Ассоциативный массив для перевода частей пути в удобочитаемые названия
    $translations = [
        '' => 'Главная',  // Для корневого пути
        'about-company' => 'О компании',
        'clients' => 'Клиенты',
        'about-leasing' => 'О лизинге',
        'personal-data' => 'Политика обработки персональных данных',
        'inventory' => 'Каталог изъятой техники',
        'program-leasing' => 'Программы лизинга',

        'passenger-vehicles' => 'Легковой автотранспорт',
        'freight-transport' => 'Грузовой транспорт',
        'special-equipment' => 'Спецтехника',
        'equipment' => 'Оборудование',
        'medical-equipment' => 'Медицинское оборудование',
        'restaurant-equipment' => 'Ресторанное оборудование',
        'used-products' => 'Б/У продукция',
        'real-estate' => 'Недвижимость',
    ];

    // Удаляем параметры из URI, если они есть
    $uriParts = explode('?', $uri);
    $cleanUri = $uriParts[0];

    // Обрабатываем параметры в URI
    $queryParams = [];
    if (isset($uriParts[1])) {
        parse_str($uriParts[1], $queryParams);
    }

    // Функция для получения параметров из URL
    function get_params_from_url($url)
    {
        $params = [];
        $urlParts = explode('?', $url);
        if (isset($urlParts[1])) {
            parse_str($urlParts[1], $params);
        }
        return $params;
    }

    // Получаем параметры из реферера (ссылающейся страницы)
    $referrerParams = [];
    if (isset($_SERVER['HTTP_REFERER'])) {
        $referrerParams = get_params_from_url($_SERVER['HTTP_REFERER']);
    }

    // Проверяем наличие параметра section в реферере, если переход с 'program-leasing'
    $section = null;
    if (strpos($_SERVER['HTTP_REFERER'], 'program-leasing') !== false && isset($referrerParams['section'])) {
        $section = $referrerParams['section'];
    }

    // Заменяем параметр item на его значение в пути
    $item = null;
    if (isset($queryParams['item'])) {
        $item = $queryParams['item'];
        unset($queryParams['item']);
    }

    // Разбиваем URI на части и инициализируем переменные для хлебных крошек
    $parts = explode('/', trim($cleanUri, '/'));
    $breadcrumbs = [];
    $path = '';

    // Проходимся по частям URI для создания хлебных крошек
    foreach ($parts as $index => $part) {
        switch ($part) {
            case 'program-leasing':
                // Обработка пути 'program-leasing'
                $path .= "/$part";
                $breadcrumbs[] = [
                    'name' => $translations[$part],
                    'url' => $path
                ];
                if ($cleanUri === '/program-leasing/card' && $section) {
                    $path .= "?section=$section";
                    $breadcrumbs[] = [
                        'name' => $translations[$section],
                        'url' => $path
                    ];
                }
                break;
            case 'card':
                // Обработка пути 'card' с параметром item
                if ($index === 0) {
                    $path .= "/$part?item=$item";
                } else {
                    $path .= "/$part?item=$item";
                }
                $breadcrumbs[] = [
                    'name' => $item,
                    'url' => $path
                ];
                continue;
                break;
            default:
                // Обработка всех остальных частей пути
                $path .= "/$part";
                $breadcrumbs[] = [
                    'name' => $translations[$part],
                    'url' => $path
                ];
                break;
        }
    }

    // Делаем последний элемент некликабельным
    $lastIndex = count($breadcrumbs) - 1;
    if ($lastIndex >= 0) {
        $breadcrumbs[$lastIndex]['url'] = null;
    }

    return $breadcrumbs;
}
?>


<div>
    <ul class="breadcrumbs container">
        <li>
            <a href="/">Главная</a>
        </li>
        <!-- Проходимся по массиву хлебных крошек и выводим их -->
        <?php foreach (get_breadcrumbs($_SERVER['REQUEST_URI']) as $index => $breadcrumb) : ?>
            <li>
                <!-- Если элемент кликабельный, выводим ссылку -->
                <?php if ($breadcrumb['url']) : ?>
                    <svg class="breadcrumbs__arrow" fill="none">
                        <use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-right"></use>
                    </svg>
                    <a href="<?= $breadcrumb['url'] ?>"><?= $breadcrumb['name'] ?></a>
                <?php else : ?>
                    <!-- Если элемент некликабельный, выводим текст -->
                    <svg class="breadcrumbs__arrow" fill="none">
                        <use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-right"></use>
                    </svg>
                    <p>
                        <?= $breadcrumb['name'] ?>
                    </p>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</div>