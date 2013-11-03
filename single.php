<?php
/**
 * The Template for displaying all single posts.
 *
 * @package la-base-theme
 */

get_header(); ?>

<div class="grid__cell main"><!-- open main -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'webmedia-content', 'single' ); ?>

			<?php la_base_theme_content_nav( 'nav-below' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() )
					comments_template();
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	
</div><!-- close main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>