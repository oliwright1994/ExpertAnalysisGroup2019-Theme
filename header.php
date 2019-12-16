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
		<div id="nav-secondary">
		<?php
		$cart_count = WC()->cart->get_cart_contents_count();
		if($cart_count > 0) {
			?>
	<a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo 'Cart('.$cart_count.')'?></a>
	<?php
		}
		if ( is_user_logged_in() ) { ?>
			<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('My Account','woocommerce'); ?>"><?php _e('My Account','woocommerce'); ?></a>
			<?php }
			else { ?>
			<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('Login / Register','woocommerce'); ?>"><?php _e('Login / Register','woocommerce'); ?></a>
		 <?php } ?>
		 <a class="contact-nav-link" href="<?php echo get_permalink(get_page_by_path( 'contact' ))?>">Contact</a>
		</div>

	<nav id="site-navigation" class="main-navigation">
		<div class="site-branding">
		<!-- Include hard coded site logo to support css color properties -->
		<a href="<?php echo get_home_url() ?>" class="site-logo">
		<?php echo file_get_contents(get_template_directory_uri()."/assets/svg/EAG_logo.svg"); ?>
		</a>
		</div><!-- .site-branding -->
					<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'expertanalysisgroup2019' ); ?></button> -->
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'nav-primary',
			) );
			?>
				<?php
			echo do_shortcode( '[aws_search_form]' );
			?>
			<p class="search-button-toggle">
			<i class="fas fa-search"></i>
			</p>

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
