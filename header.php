<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bulmascores
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	

	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri();?>/dist/app.css">
	
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/dist/vendor.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/dist/app.js"></script>
	

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	

	<div id="page" class="site">
		
		<header id="masthead" class="site-header">
			<nav class="navbar">
				<div class="container">
					<div class="navbar-brand">


						<!-- Your site title as branding in the menu -->
						<?php if ( ! has_custom_logo() ) { ?>
							<a class="navbar-item" href="/">
								<b>Bulmascores</b>
							</a>
						<?php } else { 
							the_custom_logo();
						} ?><!-- end custom logo -->


						
						<div class="navbar-burger burger" data-target="navMenuColorinfo-example">
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>

					<div class="navbar-menu">
						<?php 
						wp_nav_menu(
							array(
								'theme_location'  => 'primary',
								'menu' 			  => 'Menu 1',
								'walker'          => new Bulmascores_Nav_Walker(),
								'container' => false,
								'items_wrap'      => '<div class="navbar-start">%3$s</div>',
							)
						);
						?>

						<div class="navbar-end">
							<a class="navbar-item" href="https://github.com/se468/Bulmascores">
								<i class="fab fa-github"></i>
							</a>
						</div>
					</div>
				</div>
			</nav>
			<!-- #bulma-site-navigation -->
		</header><!-- #masthead -->


		<div id="content" class="site-content">
