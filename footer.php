<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ExpertAnalysisGroup2019
 */
?>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="footer-layout-wrapper">
	<a href="<?php echo get_home_url() ?>" class="site-logo">
		<?php echo file_get_contents(get_template_directory_uri()."/assets/svg/EAG_logo.svg"); ?>
		</a>
	<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-footer' ); ?>
	</aside><!-- #secondary -->
	<p class="footer-regulation-info">Authorised & Regulated by the Financial Conduct Authority with Financial Services Register Number 480082.</p>
	<?php wp_footer(); ?>
	</div>
	</footer><!-- #colophon -->
</div><!-- #page -->


</body>
</html>
