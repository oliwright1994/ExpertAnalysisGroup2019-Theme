<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ExpertAnalysisGroup2019
 */

get_header();
?>
	<div id="primary" class="content-area">
	<?php get_template_part( 'template-parts/content', 'page-banner' );?>

		<main id="main" class="site-main">
		<div class="contact-layout-sidebar">
			<div class="contact-sidebar-main">
		<?php

		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page-contact' );



		endwhile; // End of the loop.
		?>
		</div>
		<div class="contact-sidebar-aside">
			<?php
				dynamic_sidebar( 'sidebar-contact' );
			?>
		</div>
</div>
</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
