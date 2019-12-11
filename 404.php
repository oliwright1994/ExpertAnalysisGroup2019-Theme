<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ExpertAnalysisGroup2019
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'expertanalysisgroup2019' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<h1 class="not-found-large">404</h1>
					<p class="not-found-body"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'expertanalysisgroup2019' ); ?></p>

					<div class="widget widget_categories not-found">
						<div class="not-found-categories">
						<h2 class="widget-title"><?php esc_html_e( 'Reports', 'expertanalysisgroup2019' ); ?></h2>
						<ul>
							<?php
														$catergory_uncategorized = get_term_by('slug', 'uncategorized', 'product_cat');

							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 0,
								'taxonomy'     => 'product_cat',
								'title_li'   => '',
								'exclude'      => $catergory_uncategorized->term_id,
							) );
							?>
						</ul>
						</div>
						<div class="not-found-sitemap">
					<?php
					// the_widget( 'woocommerce_product_search', array $instance = array());
					get_product_search_form();
					?>
						</div>
					</div><!-- .widget -->

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
