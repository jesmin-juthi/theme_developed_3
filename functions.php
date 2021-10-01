<?php 

    add_theme_support('menus');
    add_theme_support('widgets');
    add_theme_support('custom-background');
    add_theme_support('custom-header');
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');


    register_nav_menus(array(
        'top_bar_menu' => 'Topbar Menu',
        'primary_menu' => 'Primary Menu'
    ));


    function juthi_theme_widgets(){

        register_sidebar(array(
            'name' => 'Right Sidebar',
            'id'   => 'rs',
            'description' => 'Update or Change Right Sidebar From Here',
            'before_widget' => '<ul>',
            'after_widget'  => '</ul>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

    add_action('widgets_init', 'juthi_theme_widgets');

    function juthi_theme_customizer($wp_customize){
        $wp_customize -> add_section('footer_area', array(
            'title' => 'Footer Area'
        ));
        $wp_customize -> add_setting('copyright_section', array(
            'default' => 'copyright 2021 | Jesmin Juthi',
		    'transport' => 'refresh'
        ));
        $wp_customize -> add_control('copyright_section', array(
            'label' => 'Enter your copyright text',
		    'section' => 'footer_area',
		    'type' => 'text'
        ));
    }

    add_action('customize_register', 'juthi_theme_customizer');
?>