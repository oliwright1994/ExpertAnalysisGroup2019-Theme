<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */


if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
<?php
wc_print_notices()
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	?>
	<?php
		$abstract = $product->get_short_description();
		$author = $product->get_meta('eag_author');
		$institution = $product->get_meta('eag_institution');
	?>


	<div class="summary entry-summary">
		<h2 class="single-product-title"><?php woocommerce_template_single_title(); ?></h2>
		<p class="single-product-abstract <?php echo ($abstract)?'' :"missing-meta" ?>"><?php echo ($abstract)?$abstract :"There is no description for this report yet." ?></p>
		<div class="single-product-meta-wrapper">
			<div class="single-product-author-wrapper">
		<?php
		if($author){
			?>
		<p class="single-product-author"><?php echo $author?></p>
		<?php
		}
		?>
		<?php
		if($institution){
			?>
		<p class="single-product-institution"><?php echo $institution;?></p>
		</div>
		<?php
		}
		woocommerce_template_single_meta();
		?>
		</div>
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		// do_action( 'woocommerce_single_product_summary' );
		//  woocommerce_template_single_price();
		echo '<p class="single-product-price">Price: '.wc_price( wc_get_price_to_display( $product, array( 'price' => $product->get_regular_price() ) ) )."</p>";

		$current_user = wp_get_current_user();
		$user_owns_product = wc_customer_bought_product( $current_user->user_email, $current_user->ID, $product->get_id() );

		$product_cart_id = WC()->cart->generate_cart_id( $product->get_ID() );
		$product_in_cart = WC()->cart->find_product_in_cart( $product_cart_id );

		if ($user_owns_product){
			?>
			<p class="product-cta-message">You already own this product. View it in <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id'))?>">Your Account</a></p>
			<?php
		} elseif ($product_in_cart){
			?>
			<p class="product-cta-message">This item is already in your cart. <a href="<?php echo wc_get_cart_url() ?>">View Cart</a> or <a href="<?php echo wc_get_checkout_url() ?>"> Checkout</a>.</p>
			<?php
		}
     else {
			 woocommerce_template_single_add_to_cart();
			}
		?>
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	// do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>
	</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
