<link rel="stylesheet" href="src/components/page/home/home-stages-transaction/home-stages-transaction.css">

<?php
$list = array(
	array("title" => "Подтверждение заявки", "description" => "Заполните форму на сайте и направьте заявку в один клик. Сотрудник А5 свяжется с вами в течение 3-х часов в рабочий день, чтобы подтвердить, что заявка принята и уточнить нюансы, если это необходимо"),
	array("title" => "Подготовка документов", "description" => "Теперь у вас есть персональный менеджер, который поможет собрать необходимый пакет документов и направит их на одобрение лизинговой сделки"),
	array("title" => "Одобрение и оплата", "description" => "После того, как положительное решение принято, подписываем договор, после чего вы можете внести аванс"),
	array("title" => "Передача предмета лизинга ", "description" => "Всё готово! Поставщик передаёт вам в пользование транспорт, технику, оборудование или недвижимость — то, что необходимо для развития вашего бизнеса"),
	array("title" => "Эксплуатация предмета лизинга и приобретение его в собственность", "description" => "Можно завершить договор по истечении его срока, или досрочно. Право собственности на предмет лизинга может переходит к лизингополучателю после окончательных расчетов"),

);
?>
<section id="stages-transaction" class=" mt-160px container grid_1-3-box">
	<div>
		<h3 class="title-page-h3">Лизинг с А5 – это просто!</h3>
		<button
			type="button"
			class="openPopUpButton button button--blue stages-transaction__button"
			data-title="Бесплатная консультация"
			data-description="true"
			data-email="false">
			Хочу бесплатную консультацию!
		</button>
	</div>
	<ul class="list-big-number__list">
		<?php foreach ($list as $index => $stage): ?>
			<li class="list-big-number__item">
				<h6 class="list-big-number__step"><?= $index + 1 ?></h6>
				<div class="list-big-number__content">
					<h5 class="list-big-number__title"><?= htmlspecialchars($stage['title'], ENT_QUOTES) ?></h5>
					<p class="list-big-number__description"><?= htmlspecialchars($stage['description'], ENT_QUOTES) ?></p>
				</div>
			</li>
		<?php endforeach; ?>
	</ul>
</section>