<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package la-base-theme
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function la_base_theme_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'la_base_theme_jetpack_setup' );
