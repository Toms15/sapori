<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sapori_Catering
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="grid-x">
			<div class="large-3 medium-3 small-12 column">
				<div class="single__column">
					<img src="<?php echo get_template_directory_uri() . '/images/Sapori-Catering-Logo.png'?>" alt="Sapori Catering">
				</div>
			</div>
			<div class="large-3 medium-3 small-12 column">
				<div class="single__column">
					<h3>Contatti</h3>
					<p>
						<i class="fas fa-phone"></i>
						<a href="tel:+3906.7230870">
							+39 06.7230870
						</a>
						<br>
						<i class="fas fa-phone"></i>
						<a href="tel:+3906.72394222">
							+39 06.72394222
						</a>
					</p>
					<p>
						Via Michele Migliarini, 44
						<br>
						00173 Roma - IT
					</p>
				</div>
			</div>
			<div class="large-3 medium-3 small-12 column">
				<div class="single__column">
					<h3>Sede Legale</h3>
					<p>
						Sapori Catering S.r.l.
						<br>
						Via Domenico Fontana 12
						<br>
						00185 Roma - IT
					</p>
				</div>
			</div>
			<div class="large-3 medium-3 small-12 column">
				<div class="single__column">
					<h3>Follow us</h3>
					<div class="social">
						<a href="">
							<i class="fab fa-facebook"></i>
						</a>
						<a href="">
							<i class="fab fa-instagram"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="grid-container">
			<div class="grid-x">
				<div class="large-12 medium-12 small-12 column">
					<div class="copyright">
						<p>
							© 2019. Tutti i diritti riservati. P.IVA 12155211001 - <a href="/cookie">Cookie</a> - <a href="/privacy">Privacy Policy</a> - An happy artwork by <a href="//www.officine06.com" rel="nofollow">Officine06</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<!-- Custom JS/jQuery -->
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/vendor.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/main.js"></script>
<?php wp_footer(); ?>

</body>
</html>
