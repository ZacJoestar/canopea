<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Canopea
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<meta name="description" content="Canopea est une agence web basée à Valenciennes et qui réunit pour vous les meilleurs artisans du webmarketing en fonction de vos projets et de votre budget. En effet, le milieu du web réunit une multitude de corps de métiers et il n’est pas toujours évident de trouver les bonnes personnes pour faire aboutir son projet digital.">
	<meta name="keywords" content="Agence web, Valenciennes, Marketing, Visite virtuelle, réseaux sociaux, Création site internet, photographie">

	<!-- Bootstrap -->
	<link rel="stylesheet" id="boostrap-css" href="<?php echo get_bloginfo('template_directory'); ?>/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" id="boostrap-css" href="<?php echo get_bloginfo('template_directory'); ?>/bootstrap/dist/css/bootstrap-grid.min.css">
	<link rel="stylesheet" id="boostrap-css" href="<?php echo get_bloginfo('template_directory'); ?>/bootstrap/dist/css/bootstrap-reboot.min.css">

	<!-- Custom Style -->
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/canopea-sass/stylesheets/custom-style.css">
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/canopea-sass/stylesheets/mobile.css">


	<!-- Font Awesome -->
	<script src="https://use.fontawesome.com/b589c09d23.js"></script>

	<!-- AOS -->
	<script src="<?php echo get_bloginfo('template_directory'); ?>/js/aos.js" type="text/javascript"></script>
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/aos.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'canopea' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) : ?>
				<!-- <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1> -->
			<?php else : ?>
				<!-- <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p> -->
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<!-- <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p> -->
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<?php
			wp_nav_menu( array( 
			    'theme_location' => 'my-custom-menu', 
			    'container_class' => 'main-nav',
			    'menu_class' => 'nav justify-content-end' ) ); 
			?><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
