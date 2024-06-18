<?php
require_once __DIR__ . '/src/config/path.php';
require __DIR__ . '/router.php';

// Инициализация маршрутизатора
$router = new Router();

// Добавление маршрутов
$router->add('', function () {
   $content = 'src/components/page/home/main.php';
   include 'template.php';
});

$router->add('about-company', function () {
   $content = 'src/components/page/about-company/main.php';
   include 'template.php';
});

$router->add('clients', function () {
   $content = 'src/components/page/clients/main.php';
   include 'template.php';
});

$router->add('about-leasing', function () {
   $content = 'src/components/page/about-leasing/main.php';
   include 'template.php';
});
$router->add('personal-data', function () {
   $content = 'src/components/page/personal-data/index.php';
   include 'template.php';
});
$router->add('inventory', function () {
   $content = 'src/components/page/inventory/index.php';
   include 'template.php';
});
$router->add('program-leasing', function () {
   $content = 'src/components/page/program-leasing/index.php';
   include 'template.php';
});

// Запуск маршрутизатора
$router->run();
