<?php
/**
 * Enqueue scripts and styles.
 */
function styleme_scripts() {
	wp_enqueue_style( 'styleme-style', get_stylesheet_uri() );

	wp_enqueue_script( 'styleme-navigation', get_template_directory_uri() . '/js/dist/scripts.min.js', array('jquery'), '1.0.0', true );

	wp_enqueue_script( 'styleme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'styleme_scripts' );