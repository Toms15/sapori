<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sapori_Catering
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Custom Style CSS -->
	<link href="https://fonts.googleapis.com/css?family=Lora|Open+Sans:300,400" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link href='<?php echo get_template_directory_uri() . '/css/vendor.css'?>' rel='stylesheet' type='text/css'>
	<link href='<?php echo get_template_directory_uri() . '/css/main.css'?>' rel='stylesheet' type='text/css'>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<div class="header--fixed">
		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav>
	</div>

	<div class="header--mobile">
		<nav id="site-navigation" class="mobile-navigation">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</div>
	
	<div class="header--wrapper">
		<header id="masthead" class="site-header">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo">
				<img src='<?php echo get_template_directory_uri() . '/images/Sapori-Catering-Logo.png'?>' alt="Sapori Catering">
			</a>
			<div class="hamburger__menu">
				<div class="line"></div>
				<div class="line"></div>
				<div class="line"></div>
			</div>
			<nav id="site-navigation" class="main-navigation">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->
	</div>

	<div id="content" class="site-content">
