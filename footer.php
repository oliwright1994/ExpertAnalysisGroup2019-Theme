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
	<aside id="secondary" class="widget-area">
		<?php get_current_template(false);?>
	<?php dynamic_sidebar( 'sidebar-footer' ); ?>
	</aside><!-- #secondary -->
	<p class="footer-regulation-info">Authorised & Regulated by the Financial Conduct Authority with Financial Services Register Number 480082.</p>
	<?php wp_footer(); ?>
	</footer><!-- #colophon -->
</div><!-- #page -->


</body>
</html>
