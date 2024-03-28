<?php /* Template Name: About-Page */ ?>
<?php get_header();?>

<!-- About Page First Section-->
<?php if(get_theme_mod('about-first-display-setting') === 'Yes'){?>
<div class="first_about">
    <div class="container">
        
    <?php $about_sec_first = get_theme_mod('about_sec_first');
            if($about_sec_first){
        ?>
    <h2><?php echo esc_html($about_sec_first)?></h2>
    <?php } ?>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
            <?php 
                $about_first_image = get_theme_mod( 'about_first_image' );
                $about_first_data_image = wp_get_attachment_url( $about_first_image , 'full' );
                if ($about_first_data_image){
            ?>
                <img class="what_img" src="<?php echo esc_html($about_first_data_image)?>" class="responsive">
            <?php } ?>
            </div>
            <div class="col-lg-8 col-md-6 col-sm-12">
                <div class="what_p">
                <?php $about_first_para = get_theme_mod('about_first_para');
            if($about_first_para){
        ?>
                <p><?php echo esc_html($about_first_para)?></p>
                <?php } ?>
                </div>            
            </div>
        </div>
    </div>
</div>
<?php } ?>

<!-- About Second Page-->
<?php if(get_theme_mod('about-Second-display-setting') === 'Yes'){?>
<div class="second_page">
    <div class="container">

    <?php $about_sec_second = get_theme_mod('about_sec_second');
            if($about_sec_second){
        ?>
        <h2 class="head_border"><?php echo esc_html($about_sec_second)?></h2>
        <?php } ?>

        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="founder">
                <?php 
                $founder_image_first = get_theme_mod( 'founder_image_first' );
                $founder_image_first_data = wp_get_attachment_url( $founder_image_first , 'full' );
                if ($founder_image_first_data){
                ?>
                    <img src="<?php echo esc_html($founder_image_first_data)?>">
                    <?php } ?>

                    <?php $founder_name_first = get_theme_mod('founder-name-first');
                        if($founder_name_first){
                    ?>
                    <h2><?php echo esc_html($founder_name_first)?></h2>

                    <?php } ?>

                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="founder">

                    <?php 
                        $founder_image_second = get_theme_mod( 'founder_image_second' );
                        $founder_image_second_data = wp_get_attachment_url( $founder_image_second , 'full' );
                        if ($founder_image_second_data){
                    ?>

                    <img src="<?php echo esc_html($founder_image_second_data)?>">

                    <?php } ?>

                    <?php $founder_name_second= get_theme_mod('founder-name-second');
                        if($founder_name_second){
                    ?>

                    <h2><?php echo esc_html($founder_name_second)?></h2>

                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>

<!-- Our value Page -->
<?php if(get_theme_mod('about-third-display-setting') === 'Yes'){?>
<div class="third_page">
    <div class="container">

    <?php $about_sec_third = get_theme_mod('about_sec_third');
            if($about_sec_third){
        ?>

        <h2><?php echo esc_html($about_sec_third)?></h2>

        <?php } ?>

        <div class="value_ico">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="img_value">
                    <?php 
                        $section_image_one = get_theme_mod( 'section_image_one' );
                        $section_image_one_data = wp_get_attachment_url( $section_image_one , 'full' );
                        if ($section_image_one_data){
                    ?>
                        <img src="<?php echo esc_html($section_image_one_data)?>" class="our_value">
                        <?php } ?>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="img_value">
                    <?php 
                        $section_image_two = get_theme_mod( 'section_image_two' );
                        $section_image_two_data = wp_get_attachment_url( $section_image_two , 'full' );
                        if ($section_image_two_data){
                    ?>
                        <img src="<?php echo esc_html($section_image_two_data)?>" class="our_value">
                        <?php } ?>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="img_value">
                    <?php 
                        $section_image_three = get_theme_mod( 'section_image_three' );
                        $section_image_three_data = wp_get_attachment_url( $section_image_three , 'full' );
                        if ($section_image_three_data){
                    ?>
                        <img src="<?php echo esc_html($section_image_three_data)?>" class="our_value">

                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }?>
<?php get_footer();?>