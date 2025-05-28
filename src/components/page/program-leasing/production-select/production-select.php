<link rel="stylesheet" href="src/components/page/program-leasing/production-select/production-select.css">
<script type="module" src="src/components/page/program-leasing/production-select/production-select.js"></script>


<div class="production__select-box">
	<div class="production__select">
		<div class="production__select-title-box js-open-select">
			<p class="production__select-title"> Select 1</p>
			<button type="button">
				<svg class="pointer rt0 select-svg" width="14" height="9" viewBox="0 0 14 9" fill="none">
					<use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-down"></use>
				</svg>
			</button>
		</div>
		<div class="production__select-items-box">
			<ul class="production__select-items">
				<li class="production__select-item">test test test test test test test test test </li>
				<li class="production__select-item">2</li>
				<li class="production__select-item">3</li>
				<li class="production__select-item">4</li>
				<li class="production__select-item">5</li>
				<li class="production__select-item">6</li>
				<li class="production__select-item">7</li>
				<li class="production__select-item">8</li>
				<li class="production__select-item">9</li>
				<li class="production__select-item">9</li>
				<li class="production__select-item">9</li>
				<li class="production__select-item">9</li>
				<li class="production__select-item">9</li>
				<li class="production__select-item">9</li>

			</ul>
		</div>
	</div>
	<div class="production__select">
		<div class="production__select-title-box js-open-select">
			<p class="production__select-title"> Select 2</p>
			<button type="button">
				<svg class="pointer rt0 select-svg" width="14" height="9" viewBox="0 0 14 9" fill="none">
					<use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-down"></use>
				</svg>
			</button>
		</div>
		<div class="production__select-items-box">
			<ul class="production__select-items">
				<li class="production__select-item">1</li>
				<li class="production__select-item">2</li>
				<li class="production__select-item">3</li>
				<li class="production__select-item">4</li>
				<li class="production__select-item">5</li>
				<li class="production__select-item">6</li>
				<li class="production__select-item">7</li>
				<li class="production__select-item">8</li>
				<li class="production__select-item">9</li>
				<li class="production__select-item">9</li>
				<li class="production__select-item">9</li>
				<li class="production__select-item">9</li>
				<li class="production__select-item">9</li>
				<li class="production__select-item">9</li>

			</ul>
		</div>
	</div>
	<div class="production__select production__select--input ">
		<div class="production__select-title-box js-open-select">
			<p class="production__select-title"> Select 3</p>
			<p class="production__select-title-two"></p>
			<button type="button">
				<svg class="pointer rt0 select-svg " width="14" height="9" viewBox="0 0 14 9" fill="none">
					<use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-down"></use>
				</svg>
			</button>
		</div>
		<div class="production__select-items-box">
			<div class="production__select-items">
				<div class="production__select-item-box">
					<span class="production__select-item-label"> от </span>
					<input id="inputFrom" class="production__select-item-input" placeholder="0 ₽" type="text">
				</div>
				<div class="production__select-item-box last-production-input">
					<span class="production__select-item-label"> до </span>
					<input id="inputTo" class="production__select-item-input" placeholder="0 ₽" type="text">
				</div>
				<button type="button" class="js-apply-select button button--blue">Применить</button>
			</div>
		</div>
	</div>
	<button class="production-closed" type="button">
		Очистить
		<svg width="14" height="9" viewBox="0 0 14 9">
			<use href="<?php echo SVG_PATH; ?>icons.svg#icon-closed-mini"></use>
		</svg>
	</button>
</div>