<?php 

//Banner customize
function slider_customize_register($wp_customize){
    $wp_customize->add_section('first-friend_slider_section', array(
        'title'    => __('Sliders', 'first-friend'),
        'description' => '',
        'priority' => 120,
        'active_callback' => 'is_front_page',
    ));

    function first_friend_sanitize_select($input){
        return ($input === "No") ? "No" : "Yes";
    }

    $wp_customize->add_setting('slider-display-setting', array(
        'default'           => 'No',
        'sanitize_callback' => 'first_friend_sanitize_select'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'first-friend-display-setting-control', array(
        'label'             =>  'Display this section?',
        'section'           =>  'first-friend_slider_section',
        'settings'          =>  'slider-display-setting',
        'type'              =>  'select',
        'choices'           =>  array('No' => 'No', 'Yes' => 'Yes')
    )));

    $wp_customize->add_setting('slider-image-one', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'absint'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control($wp_customize, 'slider-image-one-control', array(
        'label'    => 'Banner',
        'section'  => 'first-friend_slider_section',
        'settings' => 'slider-image-one',
    )));

    $wp_customize->add_setting('banner_url_one', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'banner_url_one_control', array(
        'label'    => 'Banner Url',
        'section'  => 'first-friend_slider_section',
        'settings' => 'banner_url_one',
    )));

}

add_action('customize_register', 'slider_customize_register');

//About Customize
function about_customize_register($wp_customize){
    
    $wp_customize->add_section('first-friend_about_section', array(
        'title'           => __('About', 'first-friend'),
        'description'     => '',
        'priority'        => 120,
        'active_callback' => 'is_front_page'
    ));

    function first_friend_service_sanitize_select($input){
        return ($input === "No") ? "No" : "Yes";
    }

    $wp_customize->add_setting('about-display-setting', array(
        'default'           => 'No',
        'sanitize_callback' => 'first_friend_service_sanitize_select'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'about-display-setting-control', array(
        'label'             =>  'Display this section?',
        'section'           =>  'first-friend_about_section',
        'settings'          =>  'about-display-setting',
        'type'              =>  'select',
        'choices'           =>  array('No' => 'No', 'Yes' => 'Yes')
    )));

    $wp_customize->add_setting('about_head', array(
        'default'           => 'About Us',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'about_head_control', array(
        'label'    => 'Heading',
        'section'  => 'first-friend_about_section',
        'settings' => 'about_head',
    )));

    $wp_customize->add_setting('about-image', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'absint'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control($wp_customize, 'about-image-control', array(
        'label'    => 'About image',
        'section'  => 'first-friend_about_section',
        'settings' => 'about-image',
    )));
    
    $wp_customize->add_setting('about_para', array(
        'default'           => '',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'about_para_control', array(
        'label'    => 'Paragraph',
        'section'  => 'first-friend_about_section',
        'settings' => 'about_para',
        'type'     => 'textarea'
    )));
}
add_action('customize_register', 'about_customize_register');


function category_customize_register($wp_customize){

    $wp_customize->add_section('first-friend_category_section', array(
        'title'           => __('Category', 'first-friend'),
        'description'     => '',
        'priority'        => 120,
        'active_callback' => 'is_front_page'
    ));

    function first_friend_category_sanitize_select($input){
        return ($input === "No") ? "No" : "Yes";
    }

    $wp_customize->add_setting('category-display-setting', array(
        'default'           => 'No',
        'sanitize_callback' => 'first_friend_category_sanitize_select'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'category-display-setting-control', array(
        'label'             =>  'Display this section?',
        'section'           =>  'first-friend_category_section',
        'settings'          =>  'category-display-setting',
        'type'              =>  'select',
        'choices'           =>  array('No' => 'No', 'Yes' => 'Yes')
    )));

    $cf7forms_list = array();
    $args = array('taxonomy' => 'product_cat');
    $cf7forms = get_categories( $args ); 
    foreach($cf7forms as $cf7form) {
        $cf7forms_list[$cf7form] = $cf7form;
    }

    $wp_customize->add_setting( 'sample_default_dropdownpages',
   array(
      'transport' => 'refresh',
      'sanitize_callback' => 'first_friend_category_sanitize_select'
   )
);
 
$wp_customize->add_control( 'sample_default_dropdownpages',
   array(
      'label' => __( 'Default Dropdown Pages Control' ),
      'description' => esc_html__( 'Sample description' ),
      'section' => 'first-friend_category_section',
      'choices'  => $cf7forms_list,
      'type'     => 'select'
   ));

}
add_action('customize_register', 'category_customize_register');
