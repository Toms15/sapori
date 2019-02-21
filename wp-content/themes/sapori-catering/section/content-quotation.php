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
$button_email = get_sub_field('testo_bottone_e-mail');
$email = get_sub_field('indirizzo_e-mail');
$button_phone = get_sub_field('testo_bottone_numero');
$phone = get_sub_field('numero_di_telefono');
$color_button = get_sub_field('colore_bottone');
$style_button = get_sub_field('stile_bottone');
?>

<!-- Section Text -->
<section class="section__content section__content--quotation">
	<div class="grid-container">
		<div class="grid-x">
			<div class="large-8 large-offset-2 medium-10 medium-offset-1 small-12 column">
				<div class="quotation--block">
					<?php if($title): ?>
						<h1 class="title--section is--<?php echo $color_title; ?>"><?php echo $title; ?></h1>
					<?php endif;
					if($text): ?>
						<div class="paragraph">
							<?php echo $text ?>
						</div>
					<?php endif; ?>
					<div class="group--buttons">
						<?php if($button_email && $email): ?>
							<a href="mailto:<?php echo $email; ?>" class="button button--with-icon button--<?php echo $style_button; ?> is--<?php echo $color_button; ?>">
								<span>
									<?php echo $button_email; ?>
									<em><?php echo $email; ?></em>
								</span>
								<i class="fas fa-envelope-open"></i>
							</a>
						<?php endif; ?>
						<?php if($button_phone && $phone): ?>
							<a href="tel:+39<?php echo $phone; ?>" class="button button--with-icon button--<?php echo $style_button; ?> is--<?php echo $color_button; ?>">
								<span>
									<?php echo $button_phone; ?>
									<em><?php echo $phone; ?></em>
								</span>
								<i class="fas fa-phone"></i>
							</a>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
