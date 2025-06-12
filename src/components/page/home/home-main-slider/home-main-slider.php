<link rel="stylesheet" href="/src/components/page/home/home-main-slider/home-main-slider.css">
<script src="/src/components/page/home/home-main-slider/home-main-slider.js"></script>


<?php
$mainSlider = array(
	array(
		"image" => "step-one.jpeg",
		"href" => "program-leasing?section=passenger-vehicles",
		"title" => "Абсолютный лизинг с А5  ",
		"description" => "Узнайте о том, как получить лизинг на индивидуальных условиях",
	),
	array(
		"image" => "step-two.jpeg",
		"href" => "program-leasing?section=medical-equipment",
		"title" => "Лизинг медицинского <br> оборудования без НДС",
		"description" => "с экспресс-оценкой организации",
	),
	array(
		"image" => "step-three.jpeg",
		"href" => "program-leasing?section=real-estate",
		"title" => "Гибкий график <br> платежей",
		"description" => "с экспресс-оценкой организации",
	),
	array(
		"image" => "step-four.jpeg",
		"href" => "program-leasing?section=real-estate",
		"title" => "Возмещение части <br> авансового платежа",
		"description" => "с экспресс-оценкой организации",
	),

);
?>


<section class="main-slider" id="mainSlider">

	<div class="main-slider__container slider" id="mainSliderContainer">
		<!-- ------------- -->
		<?php foreach ($mainSlider as $index => $el) { ?>
			<div class="main-slider__slide mainSliderSlide" data-url="<?php echo $el['href'] ?>">
				<img class="main-slider__img" src="<?php echo  IMG_PATH . 'main-slider/' . $el['image'] ?>" alt="">
				<div class="main-slider__content">
					<h2 class="main-slider__heading">
						<?php echo $el['title']; ?>
					</h2>
					<p class="main-slider__description">
						<?php echo $el['description'] ?>
					</p>
				</div>
			</div>
		<?php
		}; ?>
		<!-- ------------- -->
	</div>

	<div class="main-slider__cursor" id="customCursor">
		<p class="main-slider__cursor-text">подробнее</p>
	</div>
	<div class="main-slider__navigation">
		<button type="button" class="main-slider__button main-slider__button--prev" id="navigationPrev">
			<svg class="main-slider__icon" viewBox="0 0 50 50">
				<use href="<?php echo SVG_PATH; ?>icons.svg#icon-outline-prev"></use>
			</svg>
		</button>
		<button type="button" class="main-slider__button main-slider__button--next" id="navigationNext">
			<svg class="main-slider__icon" viewBox="0 0 50 50">
				<use href="<?php echo SVG_PATH; ?>icons.svg#icon-outline-next"></use>
			</svg>
		</button>
	</div>

</section>