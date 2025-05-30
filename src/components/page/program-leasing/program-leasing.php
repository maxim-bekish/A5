<script src="src/components/page/program-leasing/program-leasing.js"></script>
<link rel="stylesheet" href="src/components/page/program-leasing/program-leasing.css">

<?php
require 'src/assets/helpers/format.php';
$programLeasingData = [
	[
		"asideTitle" => "Легковой автотранспорт",
		"section" => "passenger-vehicles",
		"image" => "photo-1.png",
		"title" => "Легковые \n автомобили с А5",
		"subTitle" => "Быстрое решение для бизнеса в любом городе России!",
		"text" => [
			"Мы передаём в лизинг легковые автомобили с различным типом кузова: седан, лифтбек, внедорожник, купе, пикапы, фургоны и др.",
			"Работаем с официальными дилерами на всей территории Российской Федерации."
		],
		"obtainingLeasing" => [
			"minAdvance" => 5,
			"maxLeasingPeriod" => 5,
		],
		"requirementsLessees" => [
			"title" => null,
			"list" => [
				[
					"title" => "Подберём автомобиль ",
					"text" => "Не тратьте время и силы на поиски нужного автомобиля — мы сделаем это за вас"
				],
				[
					"title" => "Индивидуальные условия сделки ",
					"text" => "Определите комфортный ежемесячный платёж, сформируйте удобный график лизинговых платежей"
				],
				[
					"title" => "Быстрый выход на сделку",
					"text" => "Быстрый выход на сделку. Одобрим заявку за пару дней, автомобиль будет доступен в максимально сжатые сроки"
				],


			],
		],
	],
	[
		"asideTitle" => "Грузовой автотранспорт и спецтехника",
		"section" => "freight-vehicles",
		"image" => "photo-1.png",
		"title" => "Легковые \n автомобили с А5",
		"subTitle" => "Быстрое решение для бизнеса в любом городе России!",
		"text" => [
			"Мы передаём в лизинг легковые автомобили с различным типом кузова: седан, лифтбек, внедорожник, купе, пикапы, фургоны и др.",
			"Работаем с официальными дилерами на всей территории Российской Федерации."
		],
		"obtainingLeasing" => [
			"minAdvance" => 5,
			"maxLeasingPeriod" => 5,
		],
		"info" => [
			'При возвратном лизинге поставщик и лизингополучатель является одним лицом',
			'Компания продаёт лизинговой компании своё имущество и его же приобретает в лизинг',
			'Компания продолжает использовать имущество в коммерческих целях',
			'Компания получает оборотные средства от лизинговой компании, которые можно направить на любые бизнес-цели, как оплату по договору купли-продажи',
			'Компания зачитывает НДС по лизинговым платежам в соответствие с лизинговым договором'
		],
		"simpleSolution" => [

			[
				"title" => "Оставьте заявку в любое время",
				"text" => "Персональный менеджер А5 свяжется с вами в течение 3-х часов в будний день"
			],
			[
				"title" => "Получите ответ на все интересующие вопросы",
				"text" => "Персональный менеджер А5 поможет подобрать объект недвижимости, если необходимо, ответит на возникшие вопросы"
			],
			[
				"title" => "Оформление заявки на лизинг недвижимости",
				"text" => "Менеджер А5 оперативно подготовит нужные документы, поможет получить одобрение лизинговой сделки"
			],
			[
				"title" => "Юридическое сопровождение сделки",
				"text" => "Вам не придётся тратить время и силы на переговоры и проверку документов. Кроме того, мы проверим надёжность продавца и объекта вашей будущей недвижимости"
			],
			[
				"title" => "Получите вашу недвижимость! ",
				"text" => "С лизингом вы получаете не только ускоренную амортизацию объекта недвижимости, но и налоговые льготы — налог на имущество уплачивает А5!"
			],

		],
		"requirementsLessees" => [
			"title" => null,
			"list" => [
				[
					"title" => "Подберём автомобиль ",
					"text" => "Не тратьте время и силы на поиски нужного автомобиля — мы сделаем это за вас"
				],
				[
					"title" => "Индивидуальные условия сделки ",
					"text" => "Определите комфортный ежемесячный платёж, сформируйте удобный график лизинговых платежей"
				],
				[
					"title" => "Быстрый выход на сделку",
					"text" => "Быстрый выход на сделку. Одобрим заявку за пару дней, автомобиль будет доступен в максимально сжатые сроки"
				],


			],
		],
	],
];



$activeNavItem = isset($_GET['section']) ? $_GET['section'] : '';

// Функция для поиска данных по активной секции
function getProgramData($programLeasingData, $activeNavItem)
{
	foreach ($programLeasingData as $program) {
		if ($program['section'] === $activeNavItem) {
			return $program;
		}
	}
	return null;
}

$activeProgram = getProgramData($programLeasingData, $activeNavItem);
?>

<section class="grid_1-3-box ">
	<div class="program-leasing-page__navigation ">
		<h3 class="container" >Программы лизинга</h3>
		<div class="mobile__select">
			<div class="mobile__title js-open-select">
				<p></p>
				<svg class="rt0 js-svg-upend" width="14px" height="9px" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
					<use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-down"></use>
				</svg>
			</div>
			<ul class="mobile__list-content">
				<?php foreach ($programLeasingData as $el) : ?>
					<li class="mobile__list-content--item">
						<a href="?section=<?php echo $el['section'] ?>" class="<?php if ($activeNavItem === $el['section']) echo 'program__navigation--active'; ?>"> <?php echo $el['asideTitle'] ?> </a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>

	<div class="program-leasing-page__content">
		<?php if ($activeProgram) : ?>
			<div class="program-leasing-page__content-up">
				<div class="program-leasing-page__content-up--image">
					<img src="<?php echo IMG_PATH . 'program-leasing-page/' . htmlspecialchars($activeProgram['image']); ?>" alt="">
				</div>
				<div class="program-leasing-page__content-up--text">
					<h3><?php echo nl2br(htmlspecialchars($activeProgram['title'])); ?></h3>
					<p><?php echo htmlspecialchars($activeProgram['subTitle']); ?></p>
				</div>
			</div>
			<?php if (!empty($activeProgram['text']) && is_array($activeProgram['text'])): ?>
				<div class="program-leasing-page__content--down container">
					<?php foreach ($activeProgram['text'] as $line): ?>
						<p><?= htmlspecialchars($line) ?></p>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>

		<?php endif; ?>
	</div>
</section>

<?php if (!empty($activeProgram['info'])): ?>
	<section class="grid_1-3-box container mt-100px">
		<div></div>
		<div class="list">
			<?php foreach ($activeProgram["info"] as $index => $item): ?>
				<div class="card-corner__item">
					<div class="list__content">
						<h5>
							<?= htmlspecialchars($item) ?>
						</h5>
					</div>
					<svg class="card-corner__svg" width="75" height="24" viewBox="0 0 75 24" fill="none">
						<use href="<?php echo SVG_PATH; ?>icons.svg#icon-corner-card"></use>
					</svg>
				</div>
			<?php endforeach; ?>
		</div>
	</section>
<?php endif; ?>

<section class=" grid_1-3-box container mt-100px">
	<?php if ($activeProgram) : ?>
		<div></div>
		<div class="">
			<h4 class="program-leasing__title obtaining-leasing__title">
				Условия лизинга
			</h4>
			<div class="obtaining-leasing__content">
				<div class="obtaining-leasing__content--item">


					<h4>
						от <?php echo format($activeProgram['obtainingLeasing']['minAdvance'], "%"); ?>
					</h4>
					<p>Минимальный аванс</p>
				</div>
				<div class="obtaining-leasing__content--item">
					<h4>
						<?php echo dateFormat($activeProgram['obtainingLeasing']['maxLeasingPeriod']); ?>
					</h4>
					<p>Максимальный срок лизинга</p>
				</div>

			</div>
		</div>
	<?php endif; ?>
</section>

<?php if (!empty($activeProgram['simpleSolution'])): ?>
	<section class="grid_1-3-box container mt-100px">
		<div></div>
		<div>

			<div class="simpleSolution">
				<div class="program-leasing-calculator-title">
					<h4 class="program-leasing__title">
						Недвижимость в лизинг с компанией А5
					</h4>
					<p class="">
						Простое решение
					</p>
				</div>
				<div class="simpleSolution__button">

					<button type="button" class="button button--blue ">Хочу бесплатную консультацию! </button>
				</div>
			</div>
			<ul class="list-big-number__list">
				<?php foreach ($activeProgram['simpleSolution'] as $index => $stage): ?>
					<li class="list-big-number__item">
						<h6 class="list-big-number__step"><?= $index + 1 ?></h6>
						<div class="list-big-number__content">
							<h5 class="list-big-number__title"><?= htmlspecialchars($stage['title'], ENT_QUOTES) ?></h5>
							<p class="list-big-number__description"><?= htmlspecialchars($stage['text'], ENT_QUOTES) ?></p>
						</div>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>
<?php endif; ?>

<section class="grid_1-3-box container mt-100px">
	<div></div>

	<?php if ($activeProgram) : ?>

		<div>
			<?php if (!empty($activeProgram['requirementsLessees']['title'])): ?>
				<h3 class="list__title"><?= htmlspecialchars($activeProgram['requirementsLessees']['title']) ?></h3>
			<?php endif; ?>

			<div class="list">
				<?php foreach ($activeProgram["requirementsLessees"]["list"] as $index => $item): ?>
					<div class="card-corner__item">
						<div class="list__content">
							<h5>
								<?= htmlspecialchars($item['title']) ?>
							</h5>
							<p>
								<?= htmlspecialchars($item['text']) ?>
							</p>
						</div>
						<svg class="card-corner__svg" width="75" height="24" viewBox="0 0 75 24" fill="none">
							<use href="<?php echo SVG_PATH; ?>icons.svg#icon-corner-card"></use>
						</svg>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	<?php endif; ?>

</section>

<section class="grid_1-3-box container mt-100px">
	<div></div>
	<div>
		<div class="program-leasing-calculator-title">
			<h4 class="program-leasing__title">
				Лизинговый калькулятор
			</h4>
			<p class="">
				Укажите все параметры и получите точный расчет
			</p>
		</div>
		<div class="program-leasing-calculator">
			<?php

			ini_set('display_errors', 1);  // Включение отображения ошибок
			ini_set('display_startup_errors', 1); // Включение отображения ошибок запуска
			error_reporting(E_ALL); // Сообщать обо всех ошибках
			include 'src/components/ui/calculator/calculator.php';


			include 'src/components/ui/calculator-result/calculator-result.php';
			?>
		</div>
	</div>
</section>

<section class="grid_1-3-box container mt-100px">
	<div></div>
	<?php
	include 'src/components/ui/docsTransition/docsTransition.php';
	?>
</section>