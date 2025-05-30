<link rel="stylesheet" href="src/components/ui/clients-slider/clients-slider.css">
<script src="src/components/ui/clients-slider/clients-slider.js"></script>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<?php

include_once('src/assets/helpers/sliderCustom.php');



$slidesClients = [
	[
		"image" => "ats-1.png",
		"name" => "ООО «АТС» — многопрофильная компания, активно развивающая сферу электроэнергетики, а также занимающаяся строительством буровых установок /n и крупногабаритными перевозками. Техника и оборудование являются решающими инструментами в развитии ООО «АТС», поэтому они обратились к нам.",
		"description" => "Мы передали в лизинг модульную транспортную систему Goldhofer  /n из Германии, её грузоподъёмность составляет до 600 тонн.",

	],
	[
		"image" => "novec-2.png",
		"name" => "ООО «Новэк» — компания, которая занимается сбором неопасных отходов и участвует в нацпроекте «Экология».",
		"description" => "Мы передали в лизинг ООО «Новэк» оборудование для развития значимого инвестиционного проекта Тюменской области.",

	],
	[
		"image" => "med-3.png",
		"name" => "Медицинский центр «ЮниМед» — популярный в Тюмени многопрофильный центр, предоставляющий большой спектр медицинских услуг.",
		"description" => "Для одного из новых отделений мы осуществили поставку и передачу комплекса оборудования, чем обеспечили непрерывное развитие центра.",
	],
	[
		"image" => "GPKiO-4.png",
		"name" => "ООО «ГПКиО» — компания, организовавшая и обслуживающая один из самых популярных парков развлечений на Цветном бульваре.",
		"description" => "Мы вместе с компанией создаем настроение праздника для жителей и гостей Тюмени: передаём в лизинг аттракционы и вспомогательную технику.
",
	],
	[
		"image" => "kascad-5.png",
		"name" => "ООО «Каскад Строй Групп» — московская компания, занимающаяся строительством жилых и нежилых зданий.",
		"description" => "Благодаря нашему сотрудничеству осуществилось несколько проектов 
по строительству многоквартирных жилых домов в Москве и Московской области.",
	],
	[
		"image" => null,
		"name" => "ООО «АйТи Лайт» — московская компания, которая занимается IT-сопровождением, с базой клиентов более 30 тыс.",
		"description" => "Мы сотрудничали с «АйТи Лайт» и передали ей в лизинг передовое IT-оборудование: ПК, системы безопасности и хранения данных, серверы, комплектующие и т.д.",
	],
	[
		"image" => "nikitino-7.png",
		"name" => "ООО «Никитино» — нижегородская компания, которая занимается разведением крупнорогатого скота, производством молока и другой сельскохозяйственной деятельностью.",
		"description" => "Мы передали компании в лизинг более 50 единиц сельскохозяйственной техники.",
	],
];
?>

<?php
ob_start();
foreach ($slidesClients as $slide) : ?>
	<div class="slider__slide">
		<p class="dop-info">Подробнее</p>
		<div class="slider__slide--front">
			<img class="slider__image" src="<?php echo IMG_PATH . 'slider-clients/' . (!empty($slide['image']) ? htmlspecialchars($slide['image']) : 'placeholder.png'); ?>" alt="logo">
		</div>
		<div class="slider__slide--back">
			<p class="slider__text"><?php echo nl2br(htmlspecialchars($slide['name'])); ?></p>
			<p class="slider__text"><?php echo nl2br(htmlspecialchars($slide['description'])); ?></p>
		</div>
	</div>
<?php endforeach;
$content = ob_get_clean();

sliderCustom($content, 2);
?>
<script>
	$(document).ready(function() {


		$(".slider__slide--front").addClass('visible');
		$(".dop-info").click(function() {
			let $parent = $(this).parent();
			let $front = $parent.find('.slider__slide--front');
			let $back = $parent.find('.slider__slide--back');


			if ($front.hasClass('visible')) {
				console.log(1)
				$front.removeClass('visible');
				$back.addClass('visible');
			} else {
				console.log(2)
				$back.removeClass('visible');
				$front.addClass('visible');
			}
		});

	});
</script>