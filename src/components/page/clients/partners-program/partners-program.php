<link rel="stylesheet" href="src/components/page/clients/partners-program/partners-program.css">
<script type="module" src="src/components/page/clients/partners-program/partners-program.js"></script>

<section class="partners-program">
	<div class="partners-program__img">
		<img src="<?php echo IMG_PATH; ?>partners-program.png" alt="">
	</div>
	<h3 class="partners-program__title">Партнерская программа</h3>
	<p>
		Мы считаем, что сильная команда — залог успеха и беспрерывного развития , поэтому приглашаем представителей <br>
		бизнеса к сотрудничеству.
	</p>
	<ul class="partners-program__list">
		<li>
			<p>
				Преимущества от сотрудничества с нами:
			</p>
		</li>
		<li>
			<p>
				1. Прозрачная система . Можно отслеживать статистику по заявкам;
			</p>
		</li>
		<li>
			<p>
				2. Большие выплаты. Высокий процент с каждого проданного авто, текущий средний чек — ... рублей;
			</p>
		</li>
		<li>
			<p>
				3. Скорость. Выплаты поступают к вам на счёт в течение ... дней после передачи предмета в лизинг клиенту;
			</p>
		</li>
		<li>
			<p>
				4. Постоянное кураторство. Можете задавать любой вопрос сотруднику, закрпелённому за вами.
			</p>
		</li>
	</ul>
	<ul>
		<li>
			<p>
				Вы можете стать нашим партнёром, если:
			</p>
		</li>
		<li>
			<p>
				1. Вы юридическое лицо, ИП или официальный представитель компании;
			</p>
		</li>
		<li>
			<p>
				2. Вы можете передать для лизинга легковой или грузовой автотранспорт новый <br> и с пробегом,
				спецтехнику,
				оборудование, недвижимость;
			</p>
		</li>
		<li>
			<p>
				3. Хотите расширить бизнес;
			</p>
		</li>
		<li>
			<p>
				4. Найти надёжного партнёра.
			</p>
		</li>
	</ul>
	<form class="js-myForm js-popApp-OK partners-program__form ">
		<h4 class="partners-program__title--form">
			Мы рады сотрудничеству. Оставьте заявку на партнерство
		</h4>
		<div class="form-items-50 form-white partners-program__form--content">
			<div class="form-group">
				<input name="name" id="name-partners-program" type="text" placeholder=" " required>
				<label for="name-partners-program">Ваше имя</label>
			</div>
			<div class="form-group">
				<input name="email" id="email-partners-program" type="email" placeholder=" ">
				<label for="email-partners-program">Email</label>
			</div>
			<div class="form-group">
				<input name="phone" class="phone" id="phone-partners-program" type="tel" placeholder=" " pattern="\+7 \([0-9]{3}\) [0-9]{3}-[0-9]{2}-[0-9]{2}" required>
				<label for="phone-partners-program">Телефон</label>
			</div>
			<div class="form-group">
				<input name="company" id="company-partners-program" type="text" placeholder=" ">
				<label for="company-partners-program">Компания</label>
			</div>
		</div>


		<div class="checkbox checkbox--white">
			<input class="custom-checkbox " type="checkbox" name="privacy_policy" id="option-partners-program" required>
			<label for="option-partners-program">
				Согласен с политикой конфиденциальности
			</label>
		</div>


		<button disabled class="partners-program__button button button--blue js-popUp-submitBtn js-submitBtn" type="button">
			Оставить заявку
		</button>
	</form>
</section>