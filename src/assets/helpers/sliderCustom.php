<?php
function sliderCustom($content, $count = 1)
{
?>
	<div class="slider__custom">
		<div class="slider__box">
			<div class="slider__container" data-slide=<?php echo $count ?>>
				<?php echo $content; ?>
			</div>
		</div>
		<div class="slider__buttons">
			<button class="custom-slider__button slider__button--prev" type="button">
				<svg class="custom-slider__icon" width="50" height="50" viewBox="-1 -1 52 52">
					<use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-left-circle"></use>
				</svg>
			</button>
			<button class="custom-slider__button slider__button--next" type="button">
				<svg class="custom-slider__icon" width="50" height="50" viewBox="-1 -1 52 52">
					<use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-left-circle"></use>
				</svg>
			</button>
		</div>
	</div>
<?php
}
