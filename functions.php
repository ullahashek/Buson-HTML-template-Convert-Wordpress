<?php
/**
 * Buson functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Buson
 * @since Buson 1.0
 */
// Add Theme Support
    function buson_setup(){
        load_theme_textdomain( 'buson', get_template_directory() . '/languages' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails', array('post', 'slider', 'services', 'profile', 'team', 'cases','testimonials',) );
        add_theme_support( 'custom-logo', array(
            'height' => 150,
            'width'  => 200,
        ) );
        register_nav_menus(array(
            'primary_menu'  => __('Primary Menu', 'buson'),
            'footer_menu'   => __('Footer Menu', 'buson')
        ) );
    }

    add_action( 'after_setup_theme', 'buson_setup' );

//  Connect Css & Js
    function buson_scripts(){
        wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.', 'all');
        wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.', 'all');
        wp_enqueue_style( 'slicknav', get_template_directory_uri() . '/assets/css/slicknav.css', array(), '1.', 'all');
        wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/css/fontawesome-all.min.css', array(), '1.', 'all');
        wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css', array(), '1.', 'all');
        wp_enqueue_style( 'html-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.', 'all');
        wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.', 'all');

        wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/popper.min.js', array ( 'jquery' ), 1.0, true);
        wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array ( 'jquery' ), 1.0, true);
        wp_enqueue_script( 'slicknav', get_template_directory_uri() . '/assets/js/jquery.slicknav.min.js', array ( 'jquery' ), 1.0, true);
        wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array ( 'jquery' ), 1.0, true);
        wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array ( 'jquery' ), 1.0, true);
        wp_enqueue_script( 'jquery-sticky', get_template_directory_uri() . '/assets/js/jquery.sticky.js', array ( 'jquery' ), 1.0, true);
        wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array ( 'jquery' ), 1.0, true);
    }
    add_action( 'wp_enqueue_scripts', 'buson_scripts' );

// Register Custom Post

    function buson_cpt(){
        
        $labels = array(
            'name'                  => _x( 'Sliders', 'Post type general name', 'buson' ),
            'singular_name'         => _x( 'Slider', 'Post type singular name', 'buson' ),
            'menu_name'             => _x( 'Sliders', 'Admin Menu text', 'buson' ),
            'name_admin_bar'        => _x( 'Slider', 'Add New on Toolbar', 'buson' ),
            'add_new'               => __( 'Add New Slider', 'buson' ),
            'add_new_item'          => __( 'Add New Slider', 'buson' ),
            'new_item'              => __( 'New Slider', 'buson' ),
            'edit_item'             => __( 'Edit Slider', 'buson' ),
            'view_item'             => __( 'View Slider', 'buson' ),
            'all_items'             => __( 'All Slider', 'buson' ),
            'search_items'          => __( 'Search Sliders', 'buson' ),
            'parent_item_colon'     => __( 'Parent Sliders:', 'buson' ),
            'not_found'             => __( 'No Sliders found.', 'buson' ),
            'not_found_in_trash'    => __( 'No Sliders found in Trash.', 'buson' ),
            'featured_image'        => _x( 'Slider Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'recipe' ),
            'set_featured_image'    => _x( 'Set Slider image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'recipe' ),
            'remove_featured_image' => _x( 'Remove Slider image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'buson' ),

        );
 
        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'slider' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array( 'title', 'thumbnail' ),
            'show_in_rest'       => true
        );
     
        register_post_type( 'slider', $args );


        $labels = array(
            'name'                  => _x( 'Services', 'Post type general name', 'buson' ),
            'singular_name'         => _x( 'Service', 'Post type singular name', 'buson' ),
            'menu_name'             => _x( 'Services', 'Admin Menu text', 'buson' ),
            'name_admin_bar'        => _x( 'Service', 'Add New on Toolbar', 'buson' ),
            'add_new'               => __( 'Add New Service', 'buson' ),
            'add_new_item'          => __( 'Add New Service', 'buson' ),
            'new_item'              => __( 'New Service', 'buson' ),
            'edit_item'             => __( 'Edit Service', 'buson' ),
            'view_item'             => __( 'View Service', 'buson' ),
            'all_items'             => __( 'All Services', 'buson' ),
            'search_items'          => __( 'Search Sliders', 'buson' ),
            'parent_item_colon'     => __( 'Parent Sliders:', 'buson' ),
            'not_found'             => __( 'No Services found.', 'buson' ),
            'not_found_in_trash'    => __( 'No Services found in Trash.', 'buson' ),
            'featured_image'        => _x( 'Services Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'recipe' ),
            'set_featured_image'    => _x( 'Set Service image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'recipe' ),
            'remove_featured_image' => _x( 'Remove Service image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'buson' ),

        );
 
        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'service' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array( 'title', 'thumbnail', 'editor' ),
        );
     
        register_post_type( 'services', $args );

        $labels = array(
            'name'                  => _x( 'Teams', 'Post type general name', 'buson' ),
            'singular_name'         => _x( 'Team', 'Post type singular name', 'buson' ),
            'menu_name'             => _x( 'Teams', 'Admin Menu text', 'buson' ),
            'name_admin_bar'        => _x( 'Team', 'Add New on Toolbar', 'buson' ),
            'add_new'               => __( 'Add New Team Member', 'buson' ),
            'add_new_item'          => __( 'Add New Team Member', 'buson' ),
            'new_item'              => __( 'New Team Member', 'buson' ),
            'edit_item'             => __( 'Edit Team Member', 'buson' ),
            'view_item'             => __( 'View Team Member', 'buson' ),
            'all_items'             => __( 'All Team Member', 'buson' ),
            'search_items'          => __( 'Search Team Member', 'buson' ),
            'parent_item_colon'     => __( 'Parent Team Member:', 'buson' ),
            'not_found'             => __( 'No Team Member found.', 'buson' ),
            'not_found_in_trash'    => __( 'No Team Member found in Trash.', 'buson' ),
            'featured_image'        => _x( 'Team Member Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'recipe' ),
            'set_featured_image'    => _x( 'Set Team Member image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'recipe' ),
            'remove_featured_image' => _x( 'Remove Team Member image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'buson' ),

        );
 
        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'Team' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array( 'title', 'thumbnail', 'editor' ),
        );
     
        register_post_type( 'team', $args );

        

        $labels = array(
            'name'                  => _x( 'Cases', 'Post type general name', 'buson' ),
            'singular_name'         => _x( 'Case', 'Post type singular name', 'buson' ),
            'menu_name'             => _x( 'Cases', 'Admin Menu text', 'buson' ),
            'name_admin_bar'        => _x( 'Case', 'Add New on Toolbar', 'buson' ),
            'add_new'               => __( 'Add New Case', 'buson' ),
            'add_new_item'          => __( 'Add New Case', 'buson' ),
            'new_item'              => __( 'New Case', 'buson' ),
            'edit_item'             => __( 'Edit Case', 'buson' ),
            'view_item'             => __( 'View Cases', 'buson' ),
            'all_items'             => __( 'All Case', 'buson' ),
            'search_items'          => __( 'Search Case', 'buson' ),
            'parent_item_colon'     => __( 'Parent Case:', 'buson' ),
            'not_found'             => __( 'No Case found.', 'buson' ),
            'not_found_in_trash'    => __( 'No Case found in Trash.', 'buson' ),
            'featured_image'        => _x( 'Case Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'recipe' ),
            'set_featured_image'    => _x( 'Set Case image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'recipe' ),
            'remove_featured_image' => _x( 'Remove Case image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'buson' ),

        );
 
        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'case' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array( 'title', 'thumbnail', 'editor', 'excerpt' ),
            'show_in_rest'       => true
        );
     
        register_post_type( 'cases', $args );


        $labels = array(
            'name'                  => _x( 'Testimonials', 'Post type general name', 'buson' ),
            'singular_name'         => _x( 'Testimonial', 'Post type singular name', 'buson' ),
            'menu_name'             => _x( 'Testimonials', 'Admin Menu text', 'buson' ),
            'name_admin_bar'        => _x( 'Testimonial', 'Add New on Toolbar', 'buson' ),
            'add_new'               => __( 'Add New Testimonial', 'buson' ),
            'add_new_item'          => __( 'Add New Testimonial', 'buson' ),
            'new_item'              => __( 'New Testimonial', 'buson' ),
            'edit_item'             => __( 'Edit Testimonial', 'buson' ),
            'view_item'             => __( 'View Testimonials', 'buson' ),
            'all_items'             => __( 'All Testimonials', 'buson' ),
            'search_items'          => __( 'Search Testimonials', 'buson' ),
            'parent_item_colon'     => __( 'Parent Testimonial:', 'buson' ),
            'not_found'             => __( 'No Testimonial found.', 'buson' ),
            'not_found_in_trash'    => __( 'No Testimonial found in Trash.', 'buson' ),
            'featured_image'        => _x( 'Testimonial Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'recipe' ),
            'set_featured_image'    => _x( 'Set Testimonial image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'recipe' ),
            'remove_featured_image' => _x( 'Remove Testimonial image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'buson' ),

        );
 
        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'Testimonial' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array( 'title', 'thumbnail'),
        );
     
        register_post_type( 'Testimonials', $args );
        
    }
    add_action( 'init', 'buson_cpt' );

    //Register Sidebar

    function buson_sidebar() {
        //Main Sidebar
        register_sidebar( array(
            'name'          => __( 'Main Sidebar', 'buson' ),
            'id'            => 'main-sidebar',
            'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'buson' ),
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
            'after_widget'  => '</li>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>',
        ) );
        //Footer 1
        register_sidebar( array(
            'name'          => __( 'Footer Widget 1', 'buson' ),
            'id'            => 'footer-1',
            'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'buson' ),
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
            'after_widget'  => '</li>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>',
        ) );

        //Footer 2
        register_sidebar( array(
            'name'          => __( 'Footer Widget 2', 'buson' ),
            'id'            => 'footer-2',
            'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'buson' ),
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
            'after_widget'  => '</li>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>',
        ) );
    }
    add_action( 'widgets_init', 'buson_sidebar' );

    // Buson Option Panel
    if( function_exists('acf_add_options_page') ) {
	
        acf_add_options_page(array(
            'page_title' 	=> __('Theme General Settings', 'buson'),
            'menu_title'	=> __('Theme Settings', 'buson'),
            'menu_slug' 	=> 'theme-general-settings',
            'capability'	=> 'edit_posts',
            'redirect'		=> false
        ));
        
        acf_add_options_sub_page(array(
            'page_title' 	=> __('Theme Header Settings', 'buson'),
            'menu_title'	=> __('Header', 'buson'),
            'parent_slug'	=> 'theme-general-settings',
        ));

        acf_add_options_sub_page(array(
            'page_title' 	=> __('Theme Breadcumb Settings', 'buson'),
            'menu_title'	=> __('Breadcumb', 'buson'),
            'parent_slug'	=> 'theme-general-settings',
        ));

        acf_add_options_sub_page(array(
            'page_title' 	=> __('Theme Profile Settings', 'buson'),
            'menu_title'	=> __('Profile', 'buson'),
            'parent_slug'	=> 'theme-general-settings',
        ));

        acf_add_options_sub_page(array(
            'page_title' 	=> __('Theme Call to Action Settings', 'buson'),
            'menu_title'	=> __('Call To Action', 'buson'),
            'parent_slug'	=> 'theme-general-settings',
        ));
        
        acf_add_options_sub_page(array(
            'page_title' 	=> __('Theme Footer Settings', 'buson'),
            'menu_title'	=> __('Footer', 'buson'),
            'parent_slug'	=> 'theme-general-settings',
        ));        
    }