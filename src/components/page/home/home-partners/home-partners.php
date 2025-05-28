<link rel="stylesheet" href="src/components/page/home/home-partners/home-partners.css">
<!-- <script src="src/components/page/home/home-partners/home-partners.js"></script> -->


<section id="partners" class="partners-box mt-160px container">
	<div class="partners-box__up grid_1fr-600-box">
		<div class="partners-box__content">
			<h3 class="title-page-h3">Не нашли нужный вам продукт?</h3>
			<p class="partners-box__text">
				Мы сотрудничаем с более 1000 поставщиками в России, СНГ и странах ближнего востока. Подберём лизинговые
				условия индивидуально для вас
			</p>
			<div class="partners-box__time">
				<div class="partners-box__time-item">
					<p class="partners-box__time-value">25 минут</p>
					<p class="partners-box__time-description">на подбор продукта из нашей базы.</p>
				</div>
				<div class="partners-box__time-item">
					<p class="partners-box__time-value">До 2-х дней</p>
					<p class="partners-box__time-description">занимает время на согласование условий предоставлений лизинга с
						поставщиком.</p>
				</div>
				<div class="partners-box__time-item">
					<p class="partners-box__time-value">В течение 2-х дней</p>
					<p class="partners-box__time-description">будет заключён договор.</p>
				</div>
			</div>

		</div>
		<form class="js-myForm js-popApp-OK home-partners__form ">
			<div class="form-items-100 form-gray production__module-window__form-items">
				<div class="form-group production__module-window__form-group">
					<input class="form-group__input name" name="name" id="production-name" type="text" placeholder=" " required>
					<label class="form-group__label" for="production-name">
						Ваше имя
					</label>
				</div>
				<div class="form-group production__module-window__form-group">
					<input class="form-group__input phone" name="phone" pattern="\+7 \([0-9]{3}\) [0-9]{3}-[0-9]{2}-[0-9]{2}" id="production-phone" type="tel" placeholder=" " required>
					<label class="form-group__label" for="production-phone">
						Телефон
					</label>
				</div>
			</div>


			<div class="checkbox checkbox--white partners__module__checkbox">
				<input class="custom-checkbox checkbox__input " type="checkbox" name="privacy_policy" id="option-production" required>
				<label class="checkbox__label" for="option-production">
					Согласен с политикой конфиденциальности
				</label>
			</div>

			<button disabled class="button button--blue js-btn-production js-popUp-submitBtn " type="button">
				Подобрать
			</button>
		</form>
	</div>
</section>