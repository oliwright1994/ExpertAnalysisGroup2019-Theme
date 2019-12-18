<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$user_logged_in = is_user_logged_in();
$user = wp_get_current_user();
$roles = ( array ) $user->roles;
do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! $user_logged_in ){?>
<p class="checkout-login-message">You must be logged in to checkout</p>
<p>Please <a href="<?php echo  get_permalink( get_page_by_path( 'my-account' ) )?>">Login</a> to an exisiting account or <a href="<?php echo  get_permalink( get_page_by_path( 'register' ) )?>">Register</a> a new account</p>
<?php
return;
}
// If user is not appproved customer, do not allow checkout
elseif ($user_logged_in && in_array('customer',$roles)) {?>
		<p class="checkout-pending-account-message">Thank you for registering. Your account is currently being processed. You may browse our <a href="<?php echo  get_permalink( get_page_by_path( 'reports' ) )?>">reports</a> and ammend your details from <a href="<?php echo  get_permalink( get_page_by_path( 'my-account' ) )?>">your account</a> page, but you will not be able to complete your checkout until your account has been processed and approved.</p>
	<?php
	return;
};
?>

<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

	<?php if ( $checkout->get_checkout_fields() ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

		<div class="col2-set" id="customer_details">
			<div class="col-1">
				<?php do_action( 'woocommerce_checkout_billing' ); ?>
			</div>

			<div class="col-2">
				<?php do_action( 'woocommerce_checkout_shipping' ); ?>
			</div>
		</div>

		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

	<?php endif; ?>

	<?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>


	<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

	<div id="order_review" class="woocommerce-checkout-review-order">
	<h3 id="order_review_heading"><?php esc_html_e( 'Your order', 'woocommerce' ); ?></h3>
		<?php do_action( 'woocommerce_checkout_order_review' ); ?>
	</div>

	<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>

