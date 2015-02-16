<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Aurora
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php if ( is_active_sidebar( 'flyout-menu' ) ) { ?>
	<div class="flyout-menu"><?php dynamic_sidebar('flyout-menu') ?></div>
	<?php } else { ?>
<?php };?>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'aurora' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="wrap">
			<?php do_action( 'before' ); ?>
			<?php if ( is_active_sidebar( 'flyout-menu' ) ) { ?>
			<a id="sidebar-toggle" class="sidebar-toggle" title="Sidebar" class=""><i class="fa fa-plus"></i></span><span class="screen-reader-text">Sidebar</span></a>
			<?php } else { ?>
			<?php };?>
			<div class="site-branding">
				<div class="header-top" style="background-image: url(<?php header_image(); ?>);">					
					<h1 class="site-title">
						<?php echo get_avatar( get_bloginfo ( 'admin_email'), '150' ); ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					</h1>
				</div>
				<div class="header-bottom">
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				</div>
			</div>
		</div><!-- .wrap -->


		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle"><?php _e( '<i class="fa fa-bars"></i>
 Menu', 'aurora' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
