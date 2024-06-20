<?php
function get_breadcrumbs($uri)
{
    $translations = [
        '' => 'Главная',  // Для корневого пути
        'about-company' => 'О компании',
        'clients' => 'Клиенты',
        'about-leasing' => 'О лизинге',
        'personal-data' => 'Политика обработки персональных данных',
        'inventory' => 'Каталог изъятой техники',
        'program-leasing' => 'Программы лизинга',
        // Добавьте другие переводы здесь
    ];

    // Удаляем параметры из URI, если они есть
    $uriParts = explode('?', $uri);
    $cleanUri = $uriParts[0];

    // Обрабатываем параметры в URI
    $queryParams = [];
    if (isset($uriParts[1])) {
        parse_str($uriParts[1], $queryParams);
    }

    // Удаляем параметр section
    unset($queryParams['section']);

    // Заменяем параметр item на его значение в пути
    $item = null;
    if (isset($queryParams['item'])) {
        $item = $queryParams['item'];
        unset($queryParams['item']);
    }

    $parts = explode('/', trim($cleanUri, '/'));
    $breadcrumbs = [];
    $path = '';

    foreach ($parts as $index => $part) {
        // Добавляем item, если текущий элемент 'card' и $item существует
        if ($part === 'card' && $item) {
            // Проверяем, если это первый элемент в пути, то используем его без предшествующего слэша
            if ($index === 0) {
                $path = "/$part?item=$item";
            } else {
                $path .= "/$part?item=$item";
            }
            $breadcrumbs[] = [
                'name' => $item,
                'url' => $path
            ];
            continue;
        }

        // Добавляем элемент в путь
        $path .= "/$part";

        // Определяем имя элемента для breadcrumbs
        $name = isset($translations[$part]) ? $translations[$part] : ucfirst(str_replace('-', ' ', $part));
        $breadcrumbs[] = [
            'name' => $name,
            'url' => $path
        ];
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
        <?php foreach (get_breadcrumbs($_SERVER['REQUEST_URI']) as $index => $breadcrumb) : ?>
            <li>
                <?php if ($breadcrumb['url']) : ?>
                    <svg class="breadcrumbs__arrow" fill="none">
                        <use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-right"></use>
                    </svg>
                    <a href="<?= $breadcrumb['url'] ?>"><?= $breadcrumb['name'] ?></a>
                <?php else : ?>
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