<?php

function friend_files() {

    $theme_version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('first_main_styles', get_stylesheet_uri());
    // Threaded comment reply styles.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action('wp_enqueue_scripts', 'friend_files');