<?php
/**
 * @package la-base-theme
 */
?>

<div class="feat-post"><!-- open feat-post -->

<?php
    global $post;
    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
?>
<div style="background: url(<?php echo $src[0]; ?> ) !important;  overflow:auto;"><!-- open background div -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	
	
	<div class="post-content"><!-- open post-content -->
	
<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	
	<?php else : ?>
	<div class="entry-content">
		
		
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php echo get_the_date(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
		
		<?php the_excerpt(); ?>
		
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'la-base-theme' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>
		
	<a href="<?php the_permalink(); ?>" rel="bookmark"></a>	
		
		
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php echo get_the_date(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
	
	

	
	</div><!-- close post-content -->
	
</article><!-- #post-## -->

</div><!-- close background style div -->
</div><!-- close feat-post -->