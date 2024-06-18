<?php
function get_breadcrumbs($uri)
{
    $translations = [
        '' => 'Главная',  // Для корневого пути
        'about-company' => 'О компании',
        'clients' => 'Клиенты',
        'about-leasing' => 'О лизинге',
        'personal-data' => 'Политика обработки персональных данных',
        'inventory' => 'Каталог изьятой техники',
        'program-leasing' => 'Программы лизинга',
        // Добавьте другие переводы здесь
    ];

    // Удаляем параметры из URI, если они есть
    $uriParts = explode('?', $uri);
    $cleanUri = $uriParts[0];

    $parts = explode('/', trim($cleanUri, '/'));
    $breadcrumbs = [];
    $path = '';

    foreach ($parts as $part) {
        $path .= "/$part";
        $name = isset($translations[$part]) ? $translations[$part] : ucfirst(str_replace('-', ' ', $part));
        $breadcrumbs[] = [
            'name' => $name,
            'url' => $path
        ];
    }
    return $breadcrumbs;
}
?>
<div>
    <ul class="breadcrumbs container">
        <li>
            <a href="/">Главная</a>
        </li>
        <?php foreach (get_breadcrumbs($_SERVER['REQUEST_URI']) as $breadcrumb) : ?>
            <li>
                <svg class="breadcrumbs__arrow" fill="none">
                    <use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-right"></use>
                </svg>
                <a href="<?= $breadcrumb['url'] ?>"><?= $breadcrumb['name'] ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>