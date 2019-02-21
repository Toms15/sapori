<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sapori_Catering
 */

$image = get_sub_field('immagine_background');
$color_background = get_sub_field('colore_background');
$content = get_sub_field('contiene_testo');
$text = get_sub_field('testo');
$color_text = get_sub_field('colore_testo');
$height_section = get_sub_field('altezza_sezione');
?>

<!-- Section Hero -->
<?php if($color_background == 'green' || $color_background == 'pink' || $color_background == 'black' || $color_background == 'gray' || $color_background == 'white'): ?>
	<section class="section__content section__content--hero only-color--<?php echo $color_background; ?>"></section>
<?php else: ?>
<section class="section__content section__content--hero is-height--<?php echo $height_section; ?> <?php if($content): ?>has--text<?php endif; ?>" style="background: url(<?php echo $image['url']; ?>) no-repeat center center;">
	<div class="grid-container">
		<div class="grid-x">
			<div class="large-12 medium-12 small-12 column">
				<h2 class="title--section is--<?php echo $color_text; ?>"><?php echo $text; ?></h2>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>
