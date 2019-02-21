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
$subtitle = get_sub_field('sottotitolo');
$color_subtitle = get_sub_field('colore_sottotitolo');
$text = get_sub_field('testo');
$text_button = get_sub_field('testo_bottone');
$link_button = get_sub_field('link_bottone');
$color_button = get_sub_field('colore_bottone');
$style_button = get_sub_field('stile_bottone');
?>

<!-- Section Text -->
<section class="section__content section__content--text">
	<div class="grid-container">
		<div class="grid-x">
			<div class="large-12 medium-12 small-12 column">
				<?php if($title): ?>
					<h1 class="title--section is--<?php echo $color_title; ?>"><?php echo $title; ?></h1>
				<?php endif;
				if($subtitle): ?>
					<h2 class="subtitle--section is--<?php echo $color_subtitle; ?>"><?php echo $subtitle; ?></h2>
				<?php endif;
				if($text || $text_button): ?>
					<div class="paragraph">
						<?php echo $text ?>
						<?php if($link_button && $text_button): ?>
							<a href="<?php echo $link_button; ?>" class="button button--<?php echo $style_button; ?> is--<?php echo $color_button; ?>"><?php echo $text_button; ?></a>
						<?php endif; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
