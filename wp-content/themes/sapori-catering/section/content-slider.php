<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sapori_Catering
 */

$images = get_sub_field('immagini');
?>

<!-- Section Slider -->
<section class="section__content section__content--slider">
	<div class="swiper-container" id="swiper--home">
		<div class="swiper-wrapper">
			<?php foreach($images as $image): ?>
				<div class="swiper-slide" style="background: url(<?php echo $image['url']; ?>) no-repeat center center;">
				</div>
			<?php endforeach; ?>
		</div>
		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>
	</div>
</section>