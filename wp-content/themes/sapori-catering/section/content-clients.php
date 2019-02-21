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
$logos = get_sub_field('logo_clienti');
?>

<!-- Section Clients -->
<section class="section__content section__content--clients">
	<div class="grid-x">
		<h2 class="title--section is--<?php echo $color_title; ?>"><?php echo $title; ?></h2>
	</div>
	<?php if($logos): ?>
	<div class="grid-x">
		<?php foreach( $logos as $image ): ?>
		<div class="large-2 medium-4 small-12 column">
			<div class="single__client">
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
			</div>
		</div>
		<?php endforeach; ?>
	</div>
	<?php else: ?>
		<div class="grid-x">
			<div class="large-2 medium-4 small-12 column">
				<div class="single__client">
					<img src="//placehold.it/300x150" alt="">
				</div>
			</div>
			<div class="large-2 medium-4 small-12 column">
				<div class="single__client">
					<img src="//placehold.it/300x150" alt="">
				</div>
			</div>
			<div class="large-2 medium-4 small-12 column">
				<div class="single__client">
					<img src="//placehold.it/300x150" alt="">
				</div>
			</div>
			<div class="large-2 medium-4 small-12 column">
				<div class="single__client">
					<img src="//placehold.it/300x150" alt="">
				</div>
			</div>
			<div class="large-2 medium-4 small-12 column">
				<div class="single__client">
					<img src="//placehold.it/300x150" alt="">
				</div>
			</div>
			<div class="large-2 medium-4 small-12 column">
				<div class="single__client">
					<img src="//placehold.it/300x150" alt="">
				</div>
			</div>
		</div>
	<?php endif; ?>
</section>
