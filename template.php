<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>A 5</title>
	<link rel="icon" type="image/png" sizes="32x32" href="src/assets/images/svg/favicon.svg">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="/src/styles/root.css">
	<link rel="stylesheet" href="/src/styles/spinner.css">
	<link rel="stylesheet" href="/src/styles/reset.css">
	<link rel="stylesheet" href="/src/styles/commonStyle.css">
	<link rel="stylesheet" href="/src/styles/buttons.css">
	<link rel="stylesheet" href="/src/styles/forms.css">
	<link rel="stylesheet" href="/src/styles/underline.css">
	<link rel="stylesheet" href="/src/styles/bread-crumbs.css">
	<link rel="stylesheet" href="/src/styles/banner.css">
	<link rel="stylesheet" href="/src/styles/lists.css">
	<script src="/index.js"></script>
	<script type="module" src="/src/assets/helpers/format.js"></script>
	<script src="/slider.js"></script>

</head>

<body>
	<div class="app">
		<div class="loader-overlay">
			<div class="spinner"></div>
		</div>
		<div class="contentpop">
			<?php include 'src/components/header/header.php'; ?>
			<main class="js-main">
				<?php
				// Подключение хлебных крошек на всех страницах, кроме главной
				if ($_SERVER['REQUEST_URI'] !== '/') {
					include 'src/components/ui/breadcrumbs/breadcrumbs.php';
				}
				//основной контент 

				if (isset($content)) {
					include $content;
				}
				?>
			</main>
			<?php include 'src/components/footer/footer.php';


			?>

		</div>
		<?php

		include 'src/components/ui/popUpContacts/popUpContacts.php';
		include 'src/components/ui/popUpAsk/popUpAsk.php';
		include 'src/components/ui/popUp/popUp.php';
		//include 'src/components/ui/popUp/popUp-selection-equipment.php';
		//include 'src/components/ui/popUp/popUp-consultation.php';
		//include 'src/components/ui/popUp/popUp-offer.php';
		include 'src/components/ui/popUp/popUp-end.php';
		include 'src/components/cookie/cookie.php';
		popUp();
		?>
	</div>

</body>

</html>