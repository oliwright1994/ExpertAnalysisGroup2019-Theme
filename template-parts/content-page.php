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
?>
<article id="page-<?php echo $slug; ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title blue-underline">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php expertanalysisgroup2019_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();
		$all_fields = get_field_objects();
		$first_section = $all_fields['first_section']['value'];
		$second_section = $all_fields['second_section']['value'];
		$tagline_section = $all_fields['tagline_section']['value'];
		if($first_section['title'] && $first_section['text'] ): ?>
		<section class="first-section <?php if($first_section['layout'] === 'Horizontal') {echo 'layout-horizontal';}?>">
			<?php if($first_section['layout'] === 'Horizontal') {
				echo '<div class="section-text-vertical">';
			}
			?>
			<h2 class="section-title blue-underline">
				<?php echo $first_section['title']?>
			</h2>
			<p class="section-text"><?php echo $first_section['text']?></p>
			<?php if($first_section['layout'] === 'Horizontal') {
				echo '</div>';
			}
			?>
			<div style="background-image:  url('<?php echo wp_get_attachment_url($first_section['image']) ?>')" class="page-first-section-image"/>
		</section>
		<?php
		endif;
		if($second_section['title'] && $second_section['text'] ): ?>
		<section class="second-section" style="background-image:  url('<?php echo wp_get_attachment_url($second_section['background_image']) ?>')">
			<div class="second-section-text-wrapper">
			<h2 class="section-title blue-underline">
				<?php echo $second_section['title']?>
			</h2>
			<p class="section-text"><?php echo $second_section['text']?></p>
			</div>
		</section>
		<?php endif;
		if(	$tagline_section ): ?>
			<section class="tagline-section">
				<h2 class="section-tagline blue-underline">
					<?php echo $tagline_section ?>
				</h2>
			</section>
			<?php
		endif;
?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
