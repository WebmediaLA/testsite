<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package la-base-theme
 */
?>

	</div><!-- #content -->
</div><!-- #page -->
</div><!-- close grid -->
</div><!-- close wrapper -->
</div><!-- start lowerbackground -->

<div class="lowerbackground">
	
<div class="wrapper"><!-- open wrapper -->
<div class="grid"><!-- close wrapper -->



	<footer id="colophon" class="site-footer" role="contentinfo">
		
	<div class="grid__cell third"><!-- open third -->
	
		<div class="foowidget">
			<ul>
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer 1') ) : ?>
				<li>
		<?php endif; ?>
	</ul>
		</div>
	
	</div><!-- close third -->
	
	
	
	<div class="grid__cell third"><!-- open third -->
	
	
		<div class="foowidget">
			<ul>
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer 2') ) : ?>
				<li>
		<?php endif; ?>
	</ul>
		</div>
	
	</div><!-- close third -->
	
	
	
	<div class="grid__cell third"><!-- open third -->
	
	
		<div class="foowidget">
			<ul>
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer 3') ) : ?>
				<li>
		<?php endif; ?>
	</ul>
		</div>
	
	</div><!-- close third -->
	
	</footer><!-- #colophon -->
	
	
		
	<div class="grid__cell full"><!-- open full -->
	
		<div class="site-info">
			
			&copy; <?php echo date("Y") ?> <a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a>
			<span class="sep"> | </span>
			<?php _e('All Rights Reserved'); ?>
			<span class="sep"> | </span>
			designed by <a href="http://www.webmediala.com/">Webmedia L.A.</a>
		
		</div><!-- .site-info -->
		
	</div><!-- close full -->		
		
		
	


	


<?php wp_footer(); ?>

<?php if (WP_DEBUG) : ?>
        <script data-main="/wp-content/themes/la-base-theme/dev/js/main" src="/wp-content/themes/la-base-theme/dev/bower_components/requirejs/require.js"></script>
    <?php else : ?>
        <script data-main="/wp-content/themes/la-base-theme/static/js/main" src="/wp-content/themes/la-base-theme/static/js/vendor/require.js"></script>
    <?php endif; ?>
    
    </div><!-- close lowerbackground -->
    

</div><!-- close grid -->
</div><!-- close wrapper -->

</body>
</html>