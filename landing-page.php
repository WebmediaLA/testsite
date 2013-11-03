<?php
/**
 * Template Name: Landing Page
 *
 * @package la-base-theme
 */

get_header(); ?>

 
<div class="grid__cell main"><!-- open main -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="slider">
<?php if ( function_exists( 'soliloquy_slider' ) ) soliloquy_slider( '22' ); ?>
</div>

		</main><!-- #main -->
	</div><!-- #primary -->
        
         
	
	
		<div class="landing-widget">
			<ul>
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('landing 1') ) : ?>
				<li>
		<?php endif; ?>
	</ul>
		</div>
	
	
	
	
	
	
	
	
		<div class="landing-widget">
			<ul>
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('landing 2') ) : ?>
				<li>
		<?php endif; ?>
	</ul>
		</div>
	
	
	
</div><!-- close main -->	
    
        
        
                
<?php get_sidebar(); ?>

    <div class="grid__cell full"><!-- open full -->
    
    <h1 class="entry-title">NEWS</h1>
    
    <div class="featured-posts"><!-- open featured posts section -->
    
    <?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php // Display blog posts on any page @ http://m0n.co/l
		$temp = $wp_query; $wp_query= null;
		$wp_query = new WP_Query(); $wp_query->query('showposts=4' . '&paged='.$paged);
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'featured-posts-content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php la_base_theme_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'index' ); ?>

		<?php endif; ?>
    
    
       
    </div><!-- close full -->
    
    </div><!-- close featured posts section -->
    
<?php get_footer(); ?>