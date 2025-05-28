<link rel="stylesheet" href="/src/components/page/about-leasing/general-terms/general-terms.css">



<?php
$conditions = [
	[
		"title" => "Аванс",
		"text" => "от 5 до 30%"
	],
	[
		"title" => "Срок лизинга",
		"text" => "от 12 до 60 мес."
	],
	[
		"title" => "График платежей",
		"text" => "гибкий график платежей с учетом сезонности"
	],
	[
		"title" => "Количество документов",
		"text" => "от 3 документов"
	],
	[
		"title" => "Организационно-правовая форма ",
		"text" => "ИП, Юридические лица"
	],
];
?>

<section class="grid_1-3-box general-terms-conditions container">
	<div>
		<p class="p20px-big">
			Условия финансирования
		</p>
	</div>
	<div class="mobile-row">
		<?php foreach ($conditions as $el) : ?>
			<div class="row w-50-box">
				<h4 class="row__title--small  w-50">
					<?php echo nl2br(htmlspecialchars($el['title'])); ?>
				</h4>
				<p class="row__text--small w-50">
					<?php echo nl2br(htmlspecialchars($el['text'])); ?>
				</p>
			</div>
		<?php endforeach; ?>
	</div>
</section>