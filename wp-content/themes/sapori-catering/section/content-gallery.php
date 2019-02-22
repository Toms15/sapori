<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sapori_Catering
 */

$color_before = get_sub_field('colore_before');
$color_after = get_sub_field('colore_after');
$images = get_sub_field('gallery');
$type = get_sub_field('tipologia');
?>

<!-- Section Clients -->
<section class="section__content section__content--gallery">
	<div class="grid-container">
		<?php if($images && $type == 'grid'): ?>
			<div class="grid-x">
				<?php foreach($images as $image): ?>
					<div class="large-3 medium-3 small-12 column">
						<a href="<?php echo $image['url']; ?>">
							<div class="single__gallery">
								<div class="single__gallery--image" style="background: url(<?php echo $image['url']; ?>) no-repeat center center;"></div>
							</div>
						</a>
					</div>
				<?php endforeach; ?>
			</div>
		<?php elseif($images && $type == 'slider'): ?>
			<div class="grid-x">
				<div class="swiper-container" id="swiper--gallery">
					<div class="swiper-wrapper">
						<?php foreach($images as $image): ?>
							<div class="swiper-slide">
								<a href="<?php echo $image['url']; ?>">
									<div class="single__gallery" style="background: url(<?php echo $image['url']; ?>) no-repeat center center;"></div>
								</a>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>
			</div>
		<?php else: ?>
			<div class="grid-x">
				<div class="large-3 medium-3 small-12 column">
					<a href="https://placehold.it/500x500">
						<div class="single__gallery" style="background: url() no-repeat center center;"></div>
					</a>
				</div>
				<div class="large-3 medium-3 small-12 column">
					<a href="https://placehold.it/300x500">
						<div class="single__gallery" style="background: url() no-repeat center center;"></div>
					</a>
				</div>
				<div class="large-3 medium-3 small-12 column">
					<a href="https://placehold.it/500x300">
						<div class="single__gallery" style="background: url() no-repeat center center;"></div>
					</a>
				</div>
				<div class="large-3 medium-3 small-12 column">
					<a href="https://placehold.it/400x400">
						<div class="single__gallery" style="background: url() no-repeat center center;"></div>
					</a>
				</div>
			</div>
		<?php endif; ?>
	</div>
</section>

<?php if($color_after || $color_before): ?>
<style>
	section.section__content--gallery:before {
		position: absolute;
		z-index: -1;
		<?php if($color_before == 'transparent'): ?>
			background-color: transparent;
		<?php endif; ?>
		<?php if($color_before == 'green'): ?>
			background-color: #88AB81;
		<?php endif; ?>
		<?php if($color_before == 'pink'): ?>
			background-color: #EDE5D8;
		<?php endif; ?>
		<?php if($color_before == 'black'): ?>
			background-color: #000000;
		<?php endif; ?>
		<?php if($color_before == 'gray'): ?>
			background-color: #797979;
		<?php endif; ?>
		<?php if($color_before == 'light-gray'): ?>
			background-color: #F0F0F0;
		<?php endif; ?>
		<?php if($color_before == 'white'): ?>
			background-color: #FFFFFF;
		<?php endif; ?>
		content: '';
		top: 0;
		right: 0;
		bottom: 50%;
		left: 0;
	}
	section.section__content--gallery:after {
		position: absolute;
		z-index: -1;
		<?php if($color_after == 'transparent'): ?>
			background-color: transparent;
		<?php endif; ?>
		<?php if($color_after == 'green'): ?>
			background-color: #88AB81;
		<?php endif; ?>
		<?php if($color_after == 'pink'): ?>
			background-color: #EDE5D8;
		<?php endif; ?>
		<?php if($color_after == 'black'): ?>
			background-color: #000000;
		<?php endif; ?>
		<?php if($color_after == 'gray'): ?>
			background-color: #797979;
		<?php endif; ?>
		<?php if($color_after == 'light-gray'): ?>
			background-color: #F0F0F0;
		<?php endif; ?>
		<?php if($color_after == 'white'): ?>
			background-color: #FFFFFF;
		<?php endif; ?>
		content: '';
		top: 50%;
		right: 0;
		bottom: 0;
		left: 0;
	}
</style>
<?php endif; ?>
