<form class="d-flex search-form" ethod="get" role="search" action="<?php echo home_url( '/' ); ?>">
    <input class="form-control me-2 search_product search-field" type="search" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" aria-label="Search" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>">
</form> 