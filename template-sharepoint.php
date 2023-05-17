<?php
/*
 * Template Name: Sharepoint Files
 */

get_header();
?>
	<?php
		$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); 
	?>
	<div class="b2-ip-banner">
		<canvas width="1920" height="350" style="background-image: url('<?= $featured_img_url; ?>')"></canvas>
	</div>

	<main id="primary" class="site-main">
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
				<div class="sp-list">
					<?= do_shortcode('[b2-list-pdf title="ISO Certificates" src="/pdf/iso-certificates" sortby="modifiedtime"]'); ?>
					<?= do_shortcode('[b2-list-pdf title="Capability Statement" src="/pdf/capability-statements" sortby="modifiedtime"]'); ?>
					<?= do_shortcode('[b2-list-pdf title="Others" src="/pdf/others" sortby="modifiedtime"]'); ?>
				</div>
			</div><!-- .entry-content -->
		</article><!-- #post-<?php the_ID(); ?> -->
	</main><!-- #main -->
<?php
get_footer();