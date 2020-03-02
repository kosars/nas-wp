<?php
function new_archaeological_theme_scripts() {
	wp_enqueue_style( 'nas-style', get_stylesheet_uri() );

	wp_enqueue_script( 'nas-slider', get_template_directory_uri() . '/js/slider.js', array(), '20151215', true );

	wp_enqueue_script( 'nas-insta-slider', get_template_directory_uri() . '/js/insta-slider.js', array(), '20151215', true );

	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}
add_action( 'wp_enqueue_scripts', 'new_archaeological_theme_scripts' );
?>