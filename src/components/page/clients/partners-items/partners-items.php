<link rel="stylesheet" href="src/components/page/clients/partners-items/partners-items.css">
<script src="src/components/page/clients/partners-items/partners-items.js"></script>


<?php
include 'src/assets/helpers/sliderCustom.php';

$clientsPartnersItems = [
	[
		"image" => "1-pесо.svg",
		"alt" => "1-pесо",
	],
	[
		"image" => "2-ingostrah.svg",
		"alt" => "2-ingostrah",
	],
	[
		"image" => "3-jurgia.svg",
		"alt" => "3-jurgia",
	],
	[
		"image" => "4-sogaz.svg",
		"alt" => "4-sogaz",
	],
	[
		"image" => "5-energotrant.svg",
		"alt" => "5-energotrant",
	],
	[
		"image" => "6-BSK.svg",
		"alt" => "6-BSK",
	],
	[
		"image" => "7-alfa.svg",
		"alt" => "7-alfa",
	],
	[
		"image" => "8-gorsi.svg",
		"alt" => "8-gorsi",
	],
];
?>

<section class="partners-items container grid_1-3-box  mt-160px">
	<div class="partners-items__title">
		<p class="p20px-big">Партнеры</p>
	</div>
	<div class="partners-items__img">
		<?php foreach ($clientsPartnersItems as $slide) : ?>
			<div>
				<img class="slider__image" src="<?php echo SVG_PATH . 'clients.partners-items/' . htmlspecialchars($slide['image']); ?>" alt="<?php echo htmlspecialchars($slide['alt']); ?>">
			</div>
		<?php endforeach; ?>
	</div>


	<div class="partners-items__img-mobile">
		<?php
		ob_start();
		foreach ($clientsPartnersItems as $slide) : ?>
			<div class="slider__slide">
				<img class="slider__image" src="<?php echo SVG_PATH . 'clients.partners-items/' . htmlspecialchars($slide['image']); ?>" alt="<?php echo htmlspecialchars($slide['alt']); ?>">
			</div>
		<?php endforeach;
		$content = ob_get_clean();

		sliderCustom($content, 3);
		?>
	</div>

</section>