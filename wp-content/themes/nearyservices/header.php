<?php include_once("analyticstracking.php") ?>
<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package iwillbeawebdeveloper
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description"  content="I Will Be A Web Developer - Portfolio site of James Winfield">
    <meta property="og:title" content="I Will Be A Web Developer">
<meta property="og:image" content="http://iwillbeawebdeveloper.co.uk/wp-content/themes/iwillbeawebdeveloper/images/meta-photo.JPG">
<meta property="og:description" content="I Will Be A Web Developer - Portfolio site of James Winfield.  Employ him.">
<link rel="profile" href="http://gmpg.org/xfn/11">
<script src="https://use.fontawesome.com/41e4847589.js"></script>
<script src="http://iwillbeawebdeveloper.co.uk/wp-content/themes/iwillbeawebdeveloper/anime-master/anime.min.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <nav id="site-navigation" class="main-navigation" role="navigation">
        <a class="navigation-button"><button class="menu-toggle menu-toggle-style" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'iwillbeawebdeveloper' ); ?></button></a>
        <div class="navigation-title"><img src="<?php bloginfo('template_url')?>/images/logo-resized.png"/>
        <?php if (is_front_page()) { ?>
			</div>    			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			<?php } ?>
        
    </nav><!-- #site-navigation -->
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'iwillbeawebdeveloper' ); ?></a>
<!--
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

	
	</header><!-- #masthead -->

	<div id="content" class="site-content">
