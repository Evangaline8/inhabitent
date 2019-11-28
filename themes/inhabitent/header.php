<?php
/**
 * The header for our theme.
 *
 * @package Inhabitent_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous" />
	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>
			<nav id="site-navigation" class="main-navigation" role="navigation">
			<header id="masthead" class="site-header" role="banner">
				 <div class="site-branding">
					<div id="banner-logo" class="mini-logo">
						<a href=http://localhost:8888/inhabitent><img class="header-logo" src ="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-tent.svg"/></a>
					</div>
					<div id="link-nav" class= "text-nav">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p> 
					</div>
				</div><!-- .site-branding -->
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					<?php get_search_form(); ?>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->
			
			
			<?php 
			/**
			 * Banner Image
			 */
			if ( has_post_thumbnail() ) : ?>
				
			<?php if(is_front_page()){ ?>
				<section class='banner-image' style="background: linear-gradient(rgba(0,0,0, 0.6), rgba(0,0,0, 0.6)), url(<?php echo get_the_post_thumbnail_url(); ?>); background-size: cover;">
					<img class="hero-banner-logo" src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg"/>
				</section>
					<?php } ?>

			<?php if(is_page('about')){ ?>
				<section class='banner-image' style="background: linear-gradient(rgba(0,0,0, 0.6), rgba(0,0,0, 0.6)), url(<?php echo get_the_post_thumbnail_url(); ?>); background-size: cover;">
					<h2><?php echo get_the_title(); ?></h2>
				</section>
			<?php }	?>
			</section>
			<?php endif; ?>
			<div id="content" class="site-content">
