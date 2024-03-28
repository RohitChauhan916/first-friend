<?php

function about_first_customize_register($wp_customize){

    function callback_single() { return is_page('about'); }

    $wp_customize->add_section('first-friend_about_page', array(
        'title'    => __('First Section', 'first-friend'),
        'description' => '',
        'priority' => 120,
        'active_callback' => 'callback_single',
    ));

    function about_first_content_select($input){
        return ($input === "No") ? "No" : "Yes";
    }

    $wp_customize->add_setting('about-first-display-setting', array(
        'default'           => 'No',
        'sanitize_callback' => 'about_first_content_select'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'about-first-display-setting-control', array(
        'label'             =>  'Display this section?',
        'section'           =>  'first-friend_about_page',
        'settings'          =>  'about-first-display-setting',
        'type'              =>  'select',
        'choices'           =>  array('No' => 'No', 'Yes' => 'Yes')
    )));

    $wp_customize->add_setting('about_sec_first', array(
        'default'           => 'What is First Friend',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'about_sec_first_control', array(
        'label'    => 'First Section Heading',
        'section'  => 'first-friend_about_page',
        'settings' => 'about_sec_first',
    )));

    $wp_customize->add_setting('about_first_image', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'absint'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control($wp_customize, 'about_first_image-control', array(
        'label'    => 'First Section Image',
        'section'  => 'first-friend_about_page',
        'settings' => 'about_first_image',
    )));

    $wp_customize->add_setting('about_first_para', array(
        'default'           => '',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'about_first_para_control', array(
        'label'    => 'First Section Paragraph',
        'section'  => 'first-friend_about_page',
        'settings' => 'about_first_para',
        'type'     => 'textarea'
    )));
}

add_action('customize_register', 'about_first_customize_register');


function about_second_customize_register($wp_customize){
    function callback_single_page() { return is_page('about'); }

    $wp_customize->add_section('first-friend_about_second_page', array(
        'title'    => __('Second Section', 'first-friend'),
        'description' => '',
        'priority' => 120,
        'active_callback' => 'callback_single_page',
    ));

    function about_second_content_select($input){
        return ($input === "No") ? "No" : "Yes";
    }

    $wp_customize->add_setting('about-Second-display-setting', array(
        'default'           => 'No',
        'sanitize_callback' => 'about_second_content_select'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'about-Second-display-setting-control', array(
        'label'             =>  'Display this section?',
        'section'           =>  'first-friend_about_second_page',
        'settings'          =>  'about-Second-display-setting',
        'type'              =>  'select',
        'choices'           =>  array('No' => 'No', 'Yes' => 'Yes')
    )));

    $wp_customize->add_setting('about_sec_second', array(
        'default'           => 'Founders',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'about_sec_second_control', array(
        'label'    => 'Second Section Heading',
        'section'  => 'first-friend_about_second_page',
        'settings' => 'about_sec_second',
    )));

    $wp_customize->add_setting('founder_image_first', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'absint'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control($wp_customize, 'founder_image_first-control', array(
        'label'    => 'Founder Image 1',
        'section'  => 'first-friend_about_second_page',
        'settings' => 'founder_image_first',
    )));

    $wp_customize->add_setting('founder-name-first', array(
        'default'           => 'Founder Name 1',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'founder-name-first_control', array(
        'label'    => 'Founder Name First',
        'section'  => 'first-friend_about_second_page',
        'settings' => 'founder-name-first',
    )));

    $wp_customize->add_setting('founder_image_second', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'absint'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control($wp_customize, 'founder_image_second-control', array(
        'label'    => 'Founder Image 2',
        'section'  => 'first-friend_about_second_page',
        'settings' => 'founder_image_second',
    )));

    $wp_customize->add_setting('founder-name-second', array(
        'default'           => 'Founder Name 2',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'founder-name-second_control', array(
        'label'    => 'Founder Name Second',
        'section'  => 'first-friend_about_second_page',
        'settings' => 'founder-name-second',
    )));
}

add_action('customize_register', 'about_second_customize_register');


function about_third_customize_register($wp_customize){

    function callback_third_page() { return is_page('about'); }

    $wp_customize->add_section('first-friend_about_third_page', array(
        'title'    => __('Third Section', 'first-friend'),
        'description' => '',
        'priority' => 120,
        'active_callback' => 'callback_third_page',
    ));

    function about_third_content_select($input){
        return ($input === "No") ? "No" : "Yes";
    }

    $wp_customize->add_setting('about-third-display-setting', array(
        'default'           => 'No',
        'sanitize_callback' => 'about_third_content_select'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'about-third-display-setting-control', array(
        'label'             =>  'Display this section?',
        'section'           =>  'first-friend_about_third_page',
        'settings'          =>  'about-third-display-setting',
        'type'              =>  'select',
        'choices'           =>  array('No' => 'No', 'Yes' => 'Yes')
    )));

    $wp_customize->add_setting('about_sec_third', array(
        'default'           => 'Our Values',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'about_sec_third_control', array(
        'label'    => 'Third Section Heading',
        'section'  => 'first-friend_about_third_page',
        'settings' => 'about_sec_third',
    )));

    $wp_customize->add_setting('section_image_one', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'absint'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control($wp_customize, 'section_image_one-control', array(
        'label'    => 'Image 1',
        'section'  => 'first-friend_about_third_page',
        'settings' => 'section_image_one',
    )));

    $wp_customize->add_setting('section_image_two', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'absint'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control($wp_customize, 'section_image_two-control', array(
        'label'    => 'Image 2',
        'section'  => 'first-friend_about_third_page',
        'settings' => 'section_image_two',
    )));

    $wp_customize->add_setting('section_image_three', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'absint'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control($wp_customize, 'section_image_three-control', array(
        'label'    => 'Image 3',
        'section'  => 'first-friend_about_third_page',
        'settings' => 'section_image_three',
    )));

}

add_action('customize_register', 'about_third_customize_register');