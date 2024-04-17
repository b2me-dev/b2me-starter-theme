<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package b2me-master-theme
 */

get_header();
?>

	<div class="b2-ip-banner">
		<canvas width="1920" height="350"></canvas>
	</div>

	<main id="primary" class="site-main">

		<?php
			if ( function_exists('yoast_breadcrumb') && !is_front_page()) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
		?>

		<section class="error-404 not-found">
			<div class="b2-inner-content b2-text-center">
				<h1 class="page-title">Oops!</h1>
				<p>Sorry we couldn't find what you were looking for... in the meantime, check out our awesome services below or drop us a message.</p>
			</div>
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
