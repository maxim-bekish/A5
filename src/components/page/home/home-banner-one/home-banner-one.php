<link rel="stylesheet" href="src/components/page/home/home-banner-one/home-banner-one.css">
<link rel="stylesheet" href="src/components/page/home/home-banner-one/home-advantages-leasing.css">
<script src="src/components/page/home/home-banner-one/home-banner-one.js"></script>

<link rel="stylesheet" href="src/components/page/home/home-banner-one/leasing-guide.css">
<script src="src/components/page/home/home-banner-one/leasing-guide.js"></script>



<?php
$lists = require 'src/components/page/home/home-banner-one/lists.php';
$advantages = $lists['advantages'];
$leasingGuide = $lists['leasingGuide'];
?>



<section class="home-banner mt-160px">

	<div class="home-banner__banner banner">
		<img class="banner__image" src="<?php echo IMG_PATH; ?>home-banner-one.png" alt="">
		<div class="banner__description">
			<h3 class="title-page-h3">
				Лизинговая компания А5 – формула возможностей для любого бизнеса!
			</h3>
		</div>
	</div>
	<div class="home-banner-one__content">
		<div class="home-banner-one__text home-banner-one__text--left">
			<p>
				А5 — компания с большим опытом и развитыми отраслевыми компетенциями в сфере финансового и возвратного лизинга.
			</p>
			<p>
				Филиалы компании успешно работают в Тюмени и Нижнем Новгороде, поставляя технику, транспорт и оборудование по всей стране.
			</p>
		</div>
		<div class="home-banner-one__text home-banner-one__text--right ">
			<p>
				/ Член Ассоциации кредитных организаций Тюменской области

			</p>
		</div>
		<div class="home-banner-one__button">
			<button
				type="button"
				class="button button--blue ">
				Подробнее о компании
			</button>
		</div>
	</div>

</section>

<section class="home-advantages-leasing mt-160px container">
	<h3 class=" title-page-h3 home-advantages-leasing__title">
		Преимущества лизинга
	</h3>
	<div class="home-advantages-leasing__list">
		<?php foreach ($advantages as $index => $item): ?>
			<div class="home-advantages-leasing__item">

				<div class="home-advantages-leasing__content">

					<h5 class="home-advantages-leasing__item-title">
						<?= htmlspecialchars($item['title']) ?>
					</h5>
					<div class="home-advantages-leasing__item-description">
						<?php if (!empty($item['subTitle'])): ?>
							<p class="home-advantages-leasing__item-subtitle">
								<?= htmlspecialchars($item['subTitle']) ?>
							</p>
						<?php endif; ?>
						<p class="home-advantages-leasing__item-text">
							<?= htmlspecialchars($item['text']) ?>
						</p>
					</div>
				</div>



				<svg class="home-advantages-leasing__item-svg" width="75" height="24" viewBox="0 0 75 24" fill="none">
					<use href="<?php echo SVG_PATH; ?>icons.svg#icon-corner-card"></use>
				</svg>


			</div>
		<?php endforeach; ?>
	</div>
</section>

<section class="home-banner mt-160px">
	<div class="home-banner__banner banner">
		<img class="banner__image" src="<?php echo IMG_PATH; ?>home-banner-two.png" alt="">
		<div class="banner__description">
			<div>
				<h3 class="title-page-h3 " style="margin-bottom: 20px;">
					Лизинговая компания А5 – формула возможностей для любого бизнеса!
				</h3>
				<p class="banner__text ">
					Найдём выгодные варианты или рассчитаем лизинг по готовому коммерческому предложению
				</p>
			</div>
			<button class="openPopUpButton button button--white" data-title="Получите коммерческое
      предложение" data-title="Бесплатная консультация" data-description="true" data-email="false">
				Оставить заявку
			</button>
		</div>
	</div>
</section>

<section class="leasing-guide container mt-160px">
	<div>
		<h3 class="title-page-h3 " style="margin-bottom: 20px;">
			Информация для клиентов
		</h3>
		<p>Просто и понятно расскажем, что такое лизинг</p>
	</div>
	<div style="position: relative;" >
		<div class="mobile__select">
			<div class="mobile__title js-open-select ">
				<p></p>
				<svg class="rt0 js-svg-upend" width="14px" height="9px" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
					<use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-down"></use>
				</svg>
			</div>
			<ul class="leasing-guide__buttons mobile__list-content">
				<?php foreach ($leasingGuide as $index => $el) : ?>
					<li class="leasing-guide__buttons--item mobile__list-content--item">
						<button class="button button--outline leasing-guide__button <?php echo $index === 0 ? 'leasing-guide__button-active' : ''; ?>" data-index="<?php echo $index; ?>">
							<?php echo htmlspecialchars($el['title']); ?>
						</button>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
		<div class="leasing-guide__list-box">
			<?php foreach ($leasingGuide as $index => $el) : ?>
				<div class="leasing-guide__list">
					<?php foreach ($el['content'] as $content) : ?>
						<div class="leasing-guide__item" data-index="<?php echo $index; ?>" style="<?php echo $index === 0 ? 'display: block;' : 'display: none;'; ?>">

							<div class="leasing-guide__list-title">
								<h4><?php echo htmlspecialchars($content['title']); ?></h4>
								<button type="button" class="leasing-guide__icon-down">
									<svg class="js-svg-upend rt0" width="32" height="18" viewBox="0 0 32 18" fill="none">
										<use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-down-big"></use>
									</svg>
								</button>
							</div>
							<?php if ($content['text']) : ?>
								<p class="leasing-guide__text"><?php echo htmlspecialchars($content['text']); ?></p>
							<?php endif; ?>

						</div>
					<?php endforeach; ?>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>