<?php
/**
* Template Name: Slider Home
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*
* The template for displaying all pages.
*
* @link https://codex.wordpress.org/Creating_an_Error_404_Page
*
*/
get_header(); ?>

<div id="wrapper">
	<div class="homewrapper">
		<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
			<div class="topwidget">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</div>
		<?php endif ?>

		<?php if ( has_header_image() ) : ?>
			<img class="headerimg" src="<?php header_image(); ?>" />
		<?php endif ?>
	</div>
</div>
<?php get_footer(); ?>
