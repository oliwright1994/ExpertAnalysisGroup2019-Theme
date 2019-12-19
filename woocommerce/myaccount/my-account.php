<?php
/**
 * My Account page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit;
$user_logged_in = is_user_logged_in();
$user = wp_get_current_user();
$roles = ( array ) $user->roles;
?>
<?php if ($user_logged_in && in_array('pending-customer',$roles)) {?>
		<p class="my-account-pending-account-message">Thank you for registering. Your account is currently being processed. You may browse our <a href="<?php echo  get_permalink( get_page_by_path( 'reports' ) )?>">reports</a> and ammend your details from <a href="<?php echo  get_permalink( get_page_by_path( 'my-account' ) )?>">your account</a> page, but you will not be able to complete your checkout until your account has been processed and approved.</p>
<?php
}?>
<div class="woocommerce-account-container">
<?php
/**
 * My Account navigation.
 *
 * @since 2.6.0
 */
do_action( 'woocommerce_account_navigation' ); ?>

<div class="woocommerce-MyAccount-content">
	<?php
		/**
		 * My Account content.
		 *
		 * @since 2.6.0
		 */
		do_action( 'woocommerce_account_content' );
	?>
</div>
</div>
