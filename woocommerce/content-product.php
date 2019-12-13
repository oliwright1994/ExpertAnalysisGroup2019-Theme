<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
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

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<li <?php wc_product_class( '', $product ); ?>>
	<?php
	/**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	// do_action( 'woocommerce_before_shop_loop_item' );

	/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	// do_action( 'woocommerce_before_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	// do_action( 'woocommerce_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
	// do_action( 'woocommerce_after_shop_loop_item_title' );
	?>
	<?php
		$abstract = $product->get_meta('eag_abstract');
		$author = $product->get_meta('eag_author');
		$institution = $product->get_meta('eag_institution');
	?>


	<div class="summary entry-summary">
		<h2 class="single-product-title"><?php woocommerce_template_single_title(); ?></h2>
		<p class="single-product-abstract <?php echo ($abstract)?'' :"missing-meta" ?>"><?php echo ($abstract)?$abstract :"There is no description for this report yet." ?></p>
		<div class="single-product-meta-wrapper">
			<div class="single-product-author-wrapper">
		<?php
		if($author): ?>
		<p class="single-product-author"><?php echo $author?></p>
		<?php endif;
		if($institution): ?>
			<p class="single-product-institution"><?php echo $institution;?></p>
		<?php endif;
		echo the_date("d/m/Y", '<p class="single-product-date">', '</p>');
		echo '</div>';
		woocommerce_template_single_meta();
		?>
		</div>
		<?php 		echo '<p class="single-product-price">Price: '.wc_price( wc_get_price_to_display( $product, array( 'price' => $product->get_regular_price() ) ) )."</p>";
?>
<?php
	/**
	 * Hook: woocommerce_after_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	// do_action( 'woocommerce_after_shop_loop_item' );

	?>
	<a class="shop-product-loop-read-more button" href="<?php echo get_permalink($product->get_id()) ?>">Read More</a>
</li>
