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
$view = get_sub_field('visualizzazione');
?>

<!-- Section Services -->
<section class="section__content section__content--services">
	<div class="grid-container">
		<div class="grid-x">
			<?php if($title): ?>
				<h2 class="title--section is--<?php echo $color_title; ?>"><?php echo $title; ?></h2>
			<?php endif; ?>
			<?php
			if($view == 'block'):
			$count = count(get_sub_field('singolo_servizio'));
			if( have_rows('singolo_servizio') ): while( have_rows('singolo_servizio') ): the_row(); 
				$image = get_sub_field('immagine_background');
				$name = get_sub_field('nome_servizio');
				$gallery = get_sub_field('gallery');
				$images = get_sub_field('immagini');
				$link = get_sub_field('link');
				$slug = get_sub_field('slug_gallery');
				$text = get_sub_field('testo');
			?>
			<?php if($count == 2): ?>
				<div class="large-6 medium-6 small-12 column">
					<?php if($gallery == 1): ?>
						<a href="#gallery-<?php echo $slug; ?>">
							<div class="single__service open--gallery <?php if($text): ?>has--text<?php endif; ?>" style="background: url(<?php echo $image['url']; ?>) no-repeat center center;">
								<h2><?php echo $name; ?></h2>
							</div>
							<?php if($text): ?>
								<div class="paragraph w-90">
									<?php echo $text; ?>
								</div>
							<?php endif; ?>
						</a>
						<?php if($images): ?>
							<div class="gallery__services" id="gallery-<?php echo $slug; ?>">
								<?php foreach( $images as $image ): ?>
									<a class="gallery__services--item" href="<?php echo $image['url']; ?>">
									</a>
								<?php endforeach; ?>
							</div>
						<?php endif; ?>
					<?php else: ?>
						<a href="<?php echo $link; ?>">
							<div class="single__service <?php if($text): ?>has--text<?php endif; ?>" style="background: url(<?php echo $image['url']; ?>) no-repeat center center;">
								<h2><?php echo $name; ?></h2>
							</div>
							<?php if($text): ?>
								<div class="paragraph">
									<?php echo $text; ?>
								</div>
							<?php endif; ?>
						</a>
					<?php endif; ?>
				</div>
			<?php elseif($count == 3): ?>
				<div class="large-4 medium-4 small-12 column">
					<?php if($gallery == 1): ?>
						<a href="#gallery-<?php echo $slug; ?>">
							<div class="single__service open--gallery <?php if($text): ?>has--text<?php endif; ?>" style="background: url(<?php echo $image['url']; ?>) no-repeat center center;">
								<h2><?php echo $name; ?></h2>
							</div>
							<?php if($text): ?>
								<div class="paragraph w-90">
									<?php echo $text; ?>
								</div>
							<?php endif; ?>
						</a>
						<?php if($images): ?>
							<div class="gallery__services" id="gallery-<?php echo $slug; ?>">
								<?php foreach( $images as $image ): ?>
									<a class="gallery__services--item" href="<?php echo $image['url']; ?>">
									</a>
								<?php endforeach; ?>
							</div>
						<?php endif; ?>
					<?php else: ?>
						<a href="<?php echo $link; ?>">
							<div class="single__service <?php if($text): ?>has--text<?php endif; ?>" style="background: url(<?php echo $image['url']; ?>) no-repeat center center;">
								<h2><?php echo $name; ?></h2>
							</div>
							<?php if($text): ?>
								<div class="paragraph w-90">
									<?php echo $text; ?>
								</div>
							<?php endif; ?>
						</a>
					<?php endif; ?>
				</div>
			<?php elseif($count == 4): ?>
				<div class="large-3 medium-3 small-12 column">
					<?php if($gallery == 1): ?>
						<a href="#gallery-<?php echo $slug; ?>">
							<div class="single__service open--gallery <?php if($text): ?>has--text<?php endif; ?>" style="background: url(<?php echo $image['url']; ?>) no-repeat center center;">
								<h2><?php echo $name; ?></h2>
							</div>
							<?php if($text): ?>
								<div class="paragraph">
									<?php echo $text; ?>
								</div>
							<?php endif; ?>
						</a>
						<?php if($images): ?>
							<div class="gallery__services" id="gallery-<?php echo $slug; ?>">
								<?php foreach( $images as $image ): ?>
									<a class="gallery__services--item" href="<?php echo $image['url']; ?>">
									</a>
								<?php endforeach; ?>
							</div>
						<?php endif; ?>
					<?php else: ?>
						<a href="<?php echo $link; ?>">
							<div class="single__service <?php if($text): ?>has--text<?php endif; ?>" style="background: url(<?php echo $image['url']; ?>) no-repeat center center;">
								<h2><?php echo $name; ?></h2>
							</div>
							<?php if($text): ?>
								<div class="paragraph">
									<?php echo $text; ?>
								</div>
							<?php endif; ?>
						</a>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			<?php endwhile; endif;
			elseif($view == 'fullwidth'): ?>
				<?php
				if( have_rows('singolo_servizio') ): while( have_rows('singolo_servizio') ): the_row(); 
					$image = get_sub_field('immagine_background');
					$name = get_sub_field('nome_servizio');
					$link = get_sub_field('link');
				?>
				<div class="large-12 medium-12 small-12 column">
					<a href="<?php echo $link; ?>">
						<div class="single__service single__service--fullwidth" style="background: url(<?php echo $image['url']; ?>) no-repeat center center;">
							<h2><?php echo $name; ?></h2>
						</div>
					</a>
				</div>
			<?php endwhile; endif; 
			endif; ?>
		</div>
	</div>
</section>
