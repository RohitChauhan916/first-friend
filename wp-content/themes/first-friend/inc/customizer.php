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

    //one
    $wp_customize->add_setting('cat-image-one', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'absint'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control($wp_customize, 'cat-image-one-control', array(
        'label'    => 'First Category Image',
        'section'  => 'first-friend_category_section',
        'settings' => 'cat-image-one',
    )));

    $wp_customize->add_setting('cat_title_one', array(
        'default'           => '',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'cat_title_one_control', array(
        'label'    => 'Cat Title One',
        'section'  => 'first-friend_category_section',
        'settings' => 'cat_title_one',
        'type'     => 'text'
    )));

    $wp_customize->add_setting('cat_url_one', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'cat_url_one_control', array(
        'label'    => 'Cat One Url',
        'section'  => 'first-friend_category_section',
        'settings' => 'cat_url_one',
    )));

    //two
    $wp_customize->add_setting('cat-image-two', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'absint'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control($wp_customize, 'cat-image-two-control', array(
        'label'    => 'Two Category Image',
        'section'  => 'first-friend_category_section',
        'settings' => 'cat-image-two',
    )));

    $wp_customize->add_setting('cat_title_two', array(
        'default'           => '',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'cat_title_two_control', array(
        'label'    => 'Cat Title Two',
        'section'  => 'first-friend_category_section',
        'settings' => 'cat_title_two',
        'type'     => 'text'
    )));

    $wp_customize->add_setting('cat_url_two', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'cat_url_two_control', array(
        'label'    => 'Cat Two Url',
        'section'  => 'first-friend_category_section',
        'settings' => 'cat_url_two',
    )));

    //three

    $wp_customize->add_setting('cat-image-three', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'absint'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control($wp_customize, 'cat-image-three-control', array(
        'label'    => 'Third Category Image',
        'section'  => 'first-friend_category_section',
        'settings' => 'cat-image-three',
    )));

    $wp_customize->add_setting('cat_title_three', array(
        'default'           => '',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'cat_title_three_control', array(
        'label'    => 'Cat Title Three',
        'section'  => 'first-friend_category_section',
        'settings' => 'cat_title_three',
        'type'     => 'text'
    )));

    $wp_customize->add_setting('cat_url_three', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'cat_url_three_control', array(
        'label'    => 'Cat Third Url',
        'section'  => 'first-friend_category_section',
        'settings' => 'cat_url_three',
    )));

}
add_action('customize_register', 'category_customize_register');
