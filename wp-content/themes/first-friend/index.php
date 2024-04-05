<?php get_header();?>

<div class="blog_page">
    <div class="container">
    <?php if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
        <div class="blog_page_title">
            <h1 class="page-title"><?php single_post_title(); ?></h1>
        </div>
    <?php endif; ?>
    
    <div class="row">

    <?php 
        $homeStories = new Wp_Query(array(
            'post_per_page' => 10 ,
            'post_type' => 'post',
            'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
            ));
        while($homeStories->have_posts()){
            $homeStories->the_post(); ?>

        <div class="col-lg-6 col-md-6 col-sm-12 column_a" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <a href="<?php the_permalink();?>">
            <div class="card cards_style" style="width: 18rem;">
            <?php $image_id = get_post_thumbnail_id();
                    $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
                    $image_title = get_the_title($image_id);
                    if(has_post_thumbnail()){
                    ?>

                <?php the_post_thumbnail() ?>
                
            <?php } ?>
                <div class="card-body">
                    <h5 class="card-title"><?php echo get_the_title();?></h5>
                </div>
            </div>
        </a>
        </div>
        <?php } ?>

    </div>
</div>
</div>

<?php get_footer();?>

