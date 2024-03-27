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
            <h2><?php echo esc_html($about_head)?></h2>
        <?php } ?>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
            <?php 
                $about_image = get_theme_mod( 'about-image' );
                $about_data_image = wp_get_attachment_url( $about_image , 'full' );
                if ($about_data_image){
            ?>

                <img src="<?php echo esc_html($about_data_image)?>">
                
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
<div class="category">
            <div class="container">
                <h2>Categories</h2>
                <div class="cat_pad">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="blanket">
                                <h3>BLANKETS</h3>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="beds">
                                <h3>BEDS</h3>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="bibs">
                                <h3>BIBS</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cat_two">
                    <div class="row">
                        <div class="col-lg-4 happy">
                            <div class="happy_div">
                                <img src="./img/happy.png">
                                <p>Happy Enviornment</p>
                            </div>
                        </div>
                        <div class="col-lg-4 happy">
                            <div class="happy_div">
                            <img src="./img/day.png">
                            <p>Same Day Delivery<br>(In Delhi NCR)</p>
                            </div>
                        </div>
                        <div class="col-lg-4 happy">
                            <div class="happy_div">
                                <img src="./img/made.png">
                                <p>Made In India</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Category End -->

<?php get_footer();?>