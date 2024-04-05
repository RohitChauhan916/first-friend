<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
</head>
<body <?php body_class();?>>
<?php 
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
} else {
	do_action( 'wp_body_open' );
}
?>

        <header>
            <div class="container">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="#">

                      <?php if( has_custom_logo() ):  ?>
                        <?php 
                            // Get Custom Logo URL for image
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $custom_logo_data = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                            $custom_logo_url = $custom_logo_data[0];
                        ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                            <img src="<?php echo esc_url( $custom_logo_url ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"/>
                        </a>
                        <?php else: ?>

                        <!-- Get Custom Logo Text -->
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                        <?php endif; ?>
                        <!-- <p><?php bloginfo( 'description' ); ?></p> -->

                      </a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <?php $menu_items = wp_get_nav_menu_items('Menu 1');
                      ?>
                            
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <?php 
                        if ($menu_items) {
                        foreach ($menu_items as $menu_item) {
                            echo '<li class="nav-item menu-item"><a class="nav-link" aria-current="page" href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>';
                        }
                    }
    ?>
                          <li class="nav-item menu-item">
                            <!-- <form class="d-flex search-form" ethod="get" role="search" action="<?php echo home_url( '/' ); ?>">
                                <input class="form-control me-2 search_product" type="search" placeholder="Search" aria-label="Search">
                              </form> -->
                              <?php get_search_form(); ?>
                          </li>
                          
                        </ul>
                        
                        <div class="d-flex">
                            <div class="icon_account">
                            <a class="cart-icon" href="<?php echo wc_get_cart_url(); ?>">
                                <span class="cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                                <img src="<?php echo home_url(); ?>/wp-content/themes/first-friend/assets/img/add-to-cart.png">
                            </a>
                            <div class="mini-cart">
                                <?php woocommerce_mini_cart(); ?>
                            </div>
                                <a href="<?php echo get_permalink( wc_get_page_id( 'myaccount' ) ); ?>"><img src="<?php echo home_url(); ?>/wp-content/themes/first-friend/assets/img/account.png"></a>
                            </div>
                        </div>

                      </div>
                    </div>
                  </nav>
            </div>
        </header>