
<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ExpertAnalysisGroup2019
 */

?>
<?php $slug = get_post_field( 'post_name', get_post() );
			$banner_style = strtolower(get_field('banner_style'));

?>
<article id="page-<?php echo $slug; ?>" <?php post_class(); ?>>
<?php if ($banner_style === 'hero'):
	get_template_part( 'template-parts/content', 'page-hero-banner' );
	else:
	get_template_part( 'template-parts/content', 'page-banner' );
	?>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title blue-underline">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	<?php endif; ?>

	<div class="entry-content">
		<?php
		// echo '<pre>';
		// print_r(get_field_objects());
		// echo '</pre>';
		$all_fields = get_field_objects();
		unset($all_fields['banner_style']);
		unset($all_fields['banner_image']);
		foreach($all_fields as $section){
			$title = $section['value']['title'];
			$text = $section['value']['text'];
			$image = $section['value']['image'];
			if ($title && $text):
			?>
			<div class="service-section-container">
				<div class="service-section-text-wrapper">
					<h2 class="service-section-title blue-underline">
						<?php echo $section['value']['title'] ?>
					</h2>
					<p class="service-section-text">
						<?php echo $section['value']['text'] ?>
					</p>
				</div>
				<?php
				if($image) {
					?>
				<img src="<?php echo wp_get_attachment_url($image) ?>" class="service-section-image">
				<?php }?>
				</div>
			<?php
			endif;
		}
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
