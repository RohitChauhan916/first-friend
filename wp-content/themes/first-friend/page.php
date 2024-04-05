<?php 
get_header();

while(have_posts())
{
    the_post();

?>

<div class="page-section-content">
    <div class="container">
        <div class="row">
        <?php if (has_post_thumbnail()){ ?>
            <div class="col-lg-12">
                <?php the_post_thumbnail();?>
            </div>
            <?php } ?>
            <div class="col-lg-12">
                <div class="post-title">
                    <h1><?php the_title();?></h1>
                </div>

                <div class="post-content entry-content">
                        <?php the_content();
                        wp_link_pages(
                            array(
                                'before'   => '<div class="nav-links" aria-label="' . esc_attr__( 'Page', 'first-friend' ) . '">',
                                'after'    => '</div>',
                                /* translators: %: Page number. */
                                'pagelink' => esc_html__( 'Page %', 'first-friend' ),
                            )
                        );
                        ?>
                    </div>
            </div>
        </div>
    </div>
</div>

<?php 
} 
get_footer();
?>