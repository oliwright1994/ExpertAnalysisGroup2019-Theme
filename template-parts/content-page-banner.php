<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ExpertAnalysisGroup2019
 */

?>

<?php $acf_banner_image = get_field('banner_image');
		$banner_image_url = ($acf_banner_image ) ? $acf_banner_image['url'] : get_template_directory_uri().'/assets/images/banner_image_fallback.jpg';
		?>
	<div class="page-banner-image" style="background-image:  url('<?php echo $banner_image_url;?>')">
	<?php
			?>

</div>
