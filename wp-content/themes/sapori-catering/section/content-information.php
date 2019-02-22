<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sapori_Catering
 */

$title = get_sub_field('titolo');
$color_title = get_sub_field('colore_titolo');
$text = get_sub_field('testo');
?>

<!-- Section Text -->
<section class="section__content section__content--text">
	<div class="grid-container">
		<div class="grid-x">
			<div class="large-12 medium-12 small-12 column">
				<?php if($title): ?>
					<h1 class="title--section is--<?php echo $color_title; ?>"><?php echo $title; ?></h1>
				<?php endif;
				if($text): ?>
					<div class="paragraph only--text">
						<?php echo $text ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
