<?php get_header();?>

 <!-- Banner Section-->
 <?php if(get_theme_mod('slider-display-setting') === 'Yes'){?>
    <?php 
                $slider_one_id = get_theme_mod( 'slider-image-one' );
                $slider_one_data = wp_get_attachment_url( $slider_one_id , 'full' );
                if ($slider_one_data){
            ?>
            <div class="banner">
                <div class="banner-item" style="background: url('<?php echo esc_html($slider_one_data);?>') no-repeat;">
                    <div class="banner_rec">

                    </div>
                    <a class="show_now" href="<?php echo esc_html(get_theme_mod('banner_url_one'))?>">SHOP NOW</a>
                </div>
            </div>
    <?php } ?>

<?php } ?>
<!-- Banner End -->

 <!-- About us-->
 <?php if(get_theme_mod('about-display-setting') === 'Yes'){?>
 <div class="about">
    <div class="container">
        <?php $about_head = get_theme_mod('about_head');
            if($about_head){
        ?>
            <h2 class="back_icon"><?php echo esc_html($about_head)?></h2>
        <?php } ?>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
            <?php 
                $about_image = get_theme_mod( 'about-image' );
                $about_data_image = wp_get_attachment_url( $about_image , 'full' );
                if ($about_data_image){
            ?>

                <img src="<?php echo esc_html($about_data_image)?>" width="100%">
                
            <?php } ?>
            </div>

            <div class="col-lg-8 col-md-6 col-sm-12">
            <?php $about_para = get_theme_mod('about_para');
            if($about_para){
                 ?>
                <p class="about_p"><?php echo esc_html($about_para)?></p>

                <?php }?>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<!-- About end-->

<!-- Category-->
<?php if(get_theme_mod('category-display-setting') === 'Yes'){?>
<div class="category">
            <div class="container">
                <h2 class="back_icon">Categories</h2>
                <div class="cat_pad">
                    <div class="row">
                        <div class="col-lg-4">
                        <?php 
                            $cat_image_one = get_theme_mod( 'cat-image-one' );
                            $cat_image_one_data = wp_get_attachment_url( $cat_image_one , 'full' );
                            if ($cat_image_one_data){
                        ?>

                           <a href="<?php echo esc_html(get_theme_mod('cat_url_one'))?>">
                           <div class="blanket" style="background:url('<?php echo esc_html($cat_image_one_data);?>') no-repeat">
                            <?php $cat_title_one = get_theme_mod('cat_title_one');
                                if($cat_title_one){
                                ?>
                                <h3><?php echo esc_html($cat_title_one)?></h3>
                            <?php } ?>
                            </div></a>

                            <?php } ?>
                        </div>

                        <div class="col-lg-4">
                        <?php 
                            $cat_image_two = get_theme_mod( 'cat-image-two' );
                            $cat_image_two_data = wp_get_attachment_url( $cat_image_two , 'full' );
                            if ($cat_image_two_data){
                        ?>

                            <a href="<?php echo esc_html(get_theme_mod('cat_url_two'))?>">
                                <div class="beds" style="background:url('<?php echo esc_html($cat_image_two_data);?>') no-repeat">
                            <?php $cat_title_two = get_theme_mod('cat_title_two');
                                if($cat_title_two){
                                ?>
                                <h3><?php echo esc_html($cat_title_two)?></h3>
                                <?php } ?>
                            </div></a>
                            <?php }?>
                        </div>

                        <div class="col-lg-4">
                        <?php 
                            $cat_image_three = get_theme_mod( 'cat-image-three' );
                            $cat_image_three_data = wp_get_attachment_url( $cat_image_three , 'full' );
                            if ($cat_image_three_data){
                        ?>

                        <a href="<?php echo esc_html(get_theme_mod('cat_url_three'))?>">
                            <div class="bibs" style="background:url('<?php echo esc_html($cat_image_three_data);?>') no-repeat">
                            <?php $cat_title_three = get_theme_mod('cat_title_three');
                                if($cat_title_three){
                                ?>
                                <h3><?php echo esc_html($cat_title_three)?></h3>
                                <?php } ?>
                            </div>
                        </a>
                        <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="cat_two">
                    <div class="row">
                        <div class="col-lg-4 happy">
                            <div class="happy_div">
                                <img src="<?php echo home_url(); ?>/wp-content/themes/first-friend/assets/img/happy.png">
                                <p>Happy Enviornment</p>
                            </div>
                        </div>
                        <div class="col-lg-4 happy">
                            <div class="happy_div">
                            <img src="<?php echo home_url(); ?>/wp-content/themes/first-friend/assets/img/day.png">
                            <p>Same Day Delivery<br>(In Delhi NCR)</p>
                            </div>
                        </div>
                        <div class="col-lg-4 happy">
                            <div class="happy_div">
                                <img src="<?php echo home_url(); ?>/wp-content/themes/first-friend/assets/img/made.png">
                                <p>Made In India</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
<?php } ?>
        <!-- Category End -->

<!-- new arrival-->
<div class="new">
    <div class="container">
        <h2 class="back_icon">New Arrivals</h2>
        <div class="row">

        <?php  
    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => 3
    );

    $loop = new WP_Query( $args );

    while ( $loop->have_posts() ) : $loop->the_post();
        global $product;?>

            <div class="col-lg-4">
                <a href="<?php echo get_permalink();?>">
                    <div class="section">
                    <?php echo woocommerce_get_product_thumbnail();?>
                    <h3><?php echo get_the_title(); ?></h3>
                    <p></p>
                </div></a>
            </div>

            <?php  endwhile;

wp_reset_query();
?>
        </div>
        <div class="view">
            <a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) );?>">View More</a>
        </div>
    </div>
</div>
<!-- new arrival end-->

<!-- Reviews-->
<div class="reviews">
    <div class="container">
        <h2 class="back_icon">Reviews</h2>
        <img src="<?php echo home_url(); ?>/wp-content/themes/first-friend/assets/img/Group 1160444247.png">
        <div class="follow_us">
            <img class="follow" src="<?php echo home_url(); ?>/wp-content/themes/first-friend/assets/img/follow us.png" width="100%">
        </div>
    </div>
        <div class="touch" style="background: url('<?php echo home_url(); ?>/wp-content/themes/first-friend/assets/img/Rectangle.png') no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="stay">
                        <h2>Stay in Touch</h2>
                        <p>Browse high quality Figma components & add them to your project with one click</p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2 search_stay" type="search" placeholder="Enter your email address" aria-label="Search">
                        </form>
                </div>
            </div>
        </div>
        </div>
        <img class="icongroup" src="<?php echo home_url(); ?>/wp-content/themes/first-friend/assets/img/Group_icon.png">
</div>

<?php get_footer();?>