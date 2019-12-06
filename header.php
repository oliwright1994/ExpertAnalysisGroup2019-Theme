<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ExpertAnalysisGroup2019
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'expertanalysisgroup2019' ); ?></a>

	<header id="masthead" class="site-header">
	<?php
			wp_nav_menu( array(
				'theme_location' => 'nav-secondary',
				'menu_id'        => 'nav-secondary',
			) );
			?>
					<nav id="site-navigation" class="main-navigation">

		<div class="site-branding">
		<!-- Include hard coded site logo to support css color properties -->
		<a href="<?php echo get_home_url() ?>" class="site-logo">
		<?php echo file_get_contents(get_template_directory_uri()
."/assets/svg/EAG_logo.svg"); ?>
		</a>
		</div><!-- .site-branding -->
					<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'expertanalysisgroup2019' ); ?></button> -->
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'nav-primary',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
