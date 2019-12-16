<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ExpertAnalysisGroup2019
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	<div class="hero-banner-wrapper" style="background-image:  url('<?php echo get_field('hero_image')['url']?>')">
<div class="hero-image-filter">
	<h1 class="hero-image-tagline"> <?php echo get_field('tagline') ?></h1>
</div>
	</div>
	</header><!-- .entry-header -->

	<div class="entry-content">

<div id="home-about">
	<h1 class="title about">About Us</h1>
	<p class="about-content">
	<?php the_field('about_us_text') ?>
	</p>
</div>

<div id="home-section-1" class="section-1-wrapper" style="background-image:  url('<?php echo get_field('section_1_background_image')['url']?>')">
	<div class="section-1-filter">
		<div class="section-1-content">
			<div class="section-1-content-text">
				<h2><?php the_field('section_1_title') ?></h2>
				<p><?php the_field('section_1_content') ?></p>
				<a href="<?php echo get_field('section_1_link') ?>" class="learn-more">Learn More</a>
			</div>
			<div class="section-1-content-image">
			<img src="<?php echo get_field('section_1_image')['url']?>">
			</div>
		</div>
	</div>
</div>

	<div id="home-section-2">
		<h2 class="section-2-title"><?php the_field('section_2_title') ?></h2>
		<img src="<?php echo get_field("section_2_image")['url']?>">
		<p><?php the_field('section_2_content') ?></p>
		<a class="learn-more" href="<?php the_field('section_2_link') ?>"> Learn More</a>
	</div>
	</div><!-- .entry-content -->

	<div id="home-section-3" style="background-image:  url('<?php echo get_field('section_3_background_image')['url']?>')">
		<div class="section-3-filter">
			<h2 class="section-3-title"><?php the_field('section_3_title') ?></h2>
			<div class="section-3-filter-blue">
				<p class="section-3-content"><?php the_field('section_3_content') ?></p>
				<a class="learn-more-blue" href="<?php the_field('section_3_link') ?>"> Learn More</a>
			</div>
		</div>
	</div>

	<div id="home-reports">
		<h2><?php the_field('reports_section_title') ?></h2>
		<p><?php the_field('report_section_tagline') ?></p>
		<div class="home-reports-categories-grid">
		<?php
		$args = array(
					'taxonomy'     => 'product_cat',
					'orderby'      => 'name',
					'show_count'   => 0,
					'pad_counts'   => 0,
					'hierarchical' => 0,
					'title_li'     => '',
					'hide_empty'   => 0,
		);

		$all_categories = get_terms( $args );
		foreach($all_categories as $category){
			$category_link = get_category_link($category );
			$category_image = get_field('category_image',$category->taxonomy.'_'.$category->term_id );
			?>
				<a href="<?php echo $category_link  ?>" class="single-report-category-wrapper" style="background-image:  url('<?php echo $category_image['url']?>)">
					<h3 class="home-reports-catgory">
						<?php echo $category->name ?>
					</h3>
					<p class="home-reports-view-more">
						View More
					</p>
				</a>
			<?php
		}
			?>
		<!-- echo '<pre>';
		print_r($all_categories);
		echo '</pre>';
		?> -->

		</div>
	</div>
	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'expertanalysisgroup2019' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
