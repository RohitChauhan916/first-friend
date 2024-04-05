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

	 add_theme_support( 'woocommerce' );

}
add_action( 'after_setup_theme', 'friend_setup');

require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/aboutcustomizer.php';

function arphabet_widgets_init() {

    register_sidebar( array(
        'name' => 'Home right sidebar',
        'id' => 'home_right_1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="rounded">',
        'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );

function woo_custom_sidebar() {
    register_sidebar( array(
        'name'          => __( 'Shop Sidebar', 'first-friend' ),
        'id'            => 'custom-sidebar',
        'description'   => __( 'Widgets added here will appear on WooCommerce pages.', 'text-domain' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'woo_custom_sidebar' );

function update_woocommerce_version() {
	if(class_exists('WooCommerce')) {
		global $woocommerce;
		
		if(version_compare(get_option('woocommerce_db_version', null), $woocommerce->version, '!=')) {
			update_option('woocommerce_db_version', $woocommerce->version);
			
			if(! wc_update_product_lookup_tables_is_running()) {
				wc_update_product_lookup_tables();
			}
		}			
	}		
}
add_action('init', 'update_woocommerce_version');

//footer 1
function theme_register_footer_sidebar_one() {
    register_sidebar( array(
        'name'          => __( 'Footer 1', 'first-friend' ),
        'id'            => 'footer-sidebar_one',
        'description'   => __( 'Widgets added here will appear in the footer.', 'first-friend' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'theme_register_footer_sidebar_one' );

//footer 2
function theme_register_footer_sidebar_two() {
    register_sidebar( array(
        'name'          => __( 'Footer 2', 'first-friend' ),
        'id'            => 'footer-sidebar_two',
        'description'   => __( 'Widgets added here will appear in the footer.', 'first-friend' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'theme_register_footer_sidebar_two' );

//footer 3
function theme_register_footer_sidebar_three() {
    register_sidebar( array(
        'name'          => __( 'Footer 3', 'first-friend' ),
        'id'            => 'footer-sidebar_three',
        'description'   => __( 'Widgets added here will appear in the footer.', 'first-friend' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'theme_register_footer_sidebar_three' );

//footer 4
function theme_register_footer_sidebar_four() {
    register_sidebar( array(
        'name'          => __( 'Footer 4', 'first-friend' ),
        'id'            => 'footer-sidebar_four',
        'description'   => __( 'Widgets added here will appear in the footer.', 'first-friend' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'theme_register_footer_sidebar_four' );


add_action( 'woocommerce_before_quantity_input_field', 'bbloomer_display_quantity_minus' );
 
function bbloomer_display_quantity_minus() {
   if ( ! is_product() ) return;
   echo '<button type="button" class="minus" >-</button>';
}
 
add_action( 'woocommerce_after_quantity_input_field', 'bbloomer_display_quantity_plus' );
 
function bbloomer_display_quantity_plus() {
   if ( ! is_product() ) return;
   echo '<button type="button" class="plus" >+</button>';
}
 
add_action( 'woocommerce_before_single_product', 'bbloomer_add_cart_quantity_plus_minus' );

function bbloomer_add_cart_quantity_plus_minus() {
	wc_enqueue_js( "
	   $('form.cart').on( 'click', 'button.plus, button.minus', function() {
			 var qty = $( this ).closest( 'form.cart' ).find( '.qty' );
			 var val   = parseFloat(qty.val());
			 var max = parseFloat(qty.attr( 'max' ));
			 var min = parseFloat(qty.attr( 'min' ));
			 var step = parseFloat(qty.attr( 'step' ));
			 if ( $( this ).is( '.plus' ) ) {
				if ( max && ( max <= val ) ) {
				   qty.val( max );
				} else {
				   qty.val( val + step );
				}
			 } else {
				if ( min && ( min >= val ) ) {
				   qty.val( min );
				} else if ( val > 1 ) {
				   qty.val( val - step );
				}
			 }
		  });
	" );
 }