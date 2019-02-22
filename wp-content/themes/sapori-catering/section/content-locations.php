<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sapori_Catering
 */

?>

<!-- Section Slider -->
<section class="section__content section__content--slider">
	<div class="grid-container">
		<div class="grid-x">
			<?php
			if( have_rows('singola_location') ): while( have_rows('singola_location') ): the_row(); 
				$image = get_sub_field('immagine_anteprima');
				$name = get_sub_field('nome');
				$text = get_sub_field('testo');
				$images = get_sub_field('altre_immagini');
			?>
				<div class="large-12 medium-12 small-12 column">
					<div class="single__location">
						<div class="grid-x">
							<div class="large-4 medium-4 small-12 column">
								<div class="single__location--image" style="background: url(<?php echo $image['url']; ?>) no-repeat center center;"></div>
							</div>
							<div class="large-8 medium-8 small-12 column">
								<div class="single__location--info">
									<h3><?php echo $name; ?></h3>
									<?php echo $text; ?>
								</div>
								<div class="single__location--gallery">
									<?php if($images): ?>
									<div class="grid-x">
										<?php foreach( $images as $image ): ?>
											<div class="large-2 medium-4 small-12 column">
												<a href="<?php echo $image['url']; ?>">
													<div class="single__gallery">
														<div class="single__gallery--image" style="background: url(<?php echo $image['url']; ?>) no-repeat center center;"></div>
													</div>
												</a>
											</div>
										<?php endforeach; ?>
									</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
</section>