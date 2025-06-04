<!--index.php-->

<?php
require_once __DIR__ . '/src/config/path.php';
require __DIR__ . '/router.php';

// Инициализация маршрутизатора
$router = new Router();

// Добавление маршрутов
$router->add('', function () {
	$content = 'src/components/page/home/index.php';
	include 'template.php';
});

$router->add('about-company', function () {
	$content = 'src/components/page/about-company/index.php';
	include 'template.php';
});

$router->add('clients', function () {
	if (!isset($_GET['section'])) {
		// Если параметров нет, делаем редирект с параметрами по умолчанию
		header('Location: /clients?section=general-conditions');
		exit();
	}
	$content = 'src/components/page/clients/index.php';
	include 'template.php';
});


$router->add('about-leasing', function () {

	if (!isset($_GET['section'])) {
		// Если параметров нет, делаем редирект с параметрами по умолчанию
		header('Location: /about-leasing?section=general-terms');
		exit();
	}
	$content = 'src/components/page/about-leasing/index.php';
	include 'template.php';
});

$router->add('personal-data', function () {
	$content = 'src/components/page/personal-data/personal-data.php';
	include 'template.php';
});

$router->add('inventory', function () {
	$content = 'src/components/page/inventory/inventory.php';
	include 'template.php';
});

$router->add('inventory/card', function () {
	$content = 'src/components/page/inventory-card/inventory-card.php';
	include 'template.php';
});

$router->add('program-leasing', function () {
	if (!isset($_GET['section'])) {
		// Если параметров нет, делаем редирект с параметрами по умолчанию
		header('Location: /program-leasing?section=passenger-vehicles');
		exit();
	}
	$content = 'src/components/page/program-leasing/program-leasing.php';
	include 'template.php';
});

$router->add('program-leasing/card', function () {
	$content = 'src/components/page/inventory-card/inventory-card.php';
	include 'template.php';
});

// Запуск маршрутизатора
$router->run();
