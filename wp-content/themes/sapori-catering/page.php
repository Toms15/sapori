<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sapori_Catering
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
			if(have_rows('sezioni')):
				while (have_rows('sezioni')) : the_row(); 
					if(get_row_layout() == 'slider'):
						get_template_part( 'section/content', 'slider' );
						wp_reset_postdata();
					elseif(get_row_layout() == 'hero'):
						get_template_part( 'section/content', 'hero' );
						wp_reset_postdata();
					elseif(get_row_layout() == 'testo'):
						get_template_part( 'section/content', 'text' );
						wp_reset_postdata();
					elseif(get_row_layout() == 'servizi'):
						get_template_part( 'section/content', 'services' );
						wp_reset_postdata();
					elseif(get_row_layout() == 'divider'):
						get_template_part( 'section/content', 'divider' );
						wp_reset_postdata();
					elseif(get_row_layout() == 'clienti'):
						get_template_part( 'section/content', 'clients' );
						wp_reset_postdata();
					elseif(get_row_layout() == 'gallery'):
						get_template_part( 'section/content', 'gallery' );
						wp_reset_postdata();
					elseif(get_row_layout() == 'locations'):
						get_template_part( 'section/content', 'locations' );
						wp_reset_postdata();
					elseif(get_row_layout() == 'preventivo'):
						get_template_part( 'section/content', 'quotation' );
						wp_reset_postdata();
					endif;
				endwhile;
			else :
			endif;
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
