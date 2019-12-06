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
		$abstract = $product->get_meta('eag_abstract');
		$author = $product->get_meta('eag_author');
		$institution = $product->get_meta('eag_institution');
	?>


	<div class="summary entry-summary">
		<h2 class="single-product-title"><?php woocommerce_template_single_title(); ?></h2>
		<p class="single-product-abstract <?php echo ($abstract)?'' :"missing-meta" ?>"><?php echo ($abstract)?$abstract :"There is no description for this report yet." ?></p>
		<div classs="single-product-meta-wrapper">
		<?php
		if($author){
			?>
		<p class="single-product-author"><?php echo 'Author:'.$product->get_meta('eag_author')?></p>
		<?php
		}
		?>
		<?php
		if($author){
			?>
		<p class="single-product-institution"><?php echo 'Institution:'.$product->get_meta('eag_institution')?></p>
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
		 woocommerce_template_single_price();
		 woocommerce_template_single_add_to_cart();
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
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>
	</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
