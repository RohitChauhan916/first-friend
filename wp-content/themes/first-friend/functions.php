<?php


function friend_files() {

    $theme_version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css',false,$theme_version,'all');
    wp_enqueue_style('first_main_styles', get_stylesheet_uri());
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array ( 'jquery' ), $theme_version, true);

    // Threaded comment reply styles.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action('wp_enqueue_scripts', 'friend_files');

function friend_setup() {

    // Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

        /*
		 * Let WordPress manage the document title.
		 * This theme does not use a hard-coded <title> tag in the document head,
		 * WordPress will provide it for us.
		 */
		add_theme_support( 'title-tag' );  

    /**
		 * Add post-formats support.
		 */
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
            );

     // Add custom-logo support
     add_theme_support( 'custom-logo' );

     register_nav_menu('primary', 'primary');

}
add_action( 'after_setup_theme', 'friend_setup');

require get_template_directory() . '/inc/customizer.php';