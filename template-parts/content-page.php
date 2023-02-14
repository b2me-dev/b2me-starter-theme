<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package b2me-master-theme
 */

?>

<?php
	if ( function_exists('yoast_breadcrumb') && !is_front_page()) {
  		yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
	}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		if (!is_front_page()) the_title( '<h1 class="entry-title">', '</h1>' );
	?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'b2me-master-theme' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
