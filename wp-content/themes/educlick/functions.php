<?php
	// content width
    if ( ! isset( $content_width ) ) {
	    $content_width = 960;
    }	
	// Add RSS links to <head> section
	add_theme_support( 'automatic-feed-links' );
	
    // REMOVE ADMIN TOOLBAR IN SITE
    show_admin_bar(false);

    // Load jQuery
	/*
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
	}
	*/
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
 
    // REMVE ADMIN TOOLBAR IN SITE
    show_admin_bar(false);


	// This theme uses post thumbnails
	add_theme_support( 'post-thumbnails');
	
	// add image size 
	/*
	add_image_size( 'home_carousel', 741, 587, true );
	add_image_size( 'testimonio', 378, 9999 );
    */
	
	//new_theme_title
    add_theme_support( 'title-tag' );

	// Declare sidebar widget zone

    function myTheme_widgets_init() {
        register_sidebar(array(
            'name'          => __( 'Sidebar 1', 'theme_text_domain' ),
            'id'            => 'sidebar-1',
            'description'   => '',
            'class'         => '',
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
            'after_widget'  => '</li>',
            'before_title'  => '<h2 class="widgettitle">',
            'after_title'   => '</h2>',
            ));
    }
    add_action('widgets_init', 'myTheme_widgets_init');
	// This theme uses post thumbnails
	add_theme_support( 'post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => 'Navegacion Principal',
		'social' =>  'Menu Redes Sociales'
	) );
	
	// Removes ul class from wp_nav_menu
	function remove_ul ( $menu ){
		return preg_replace( array( '#^<ul[^>]*>#', '#</ul>$#' ), '', $menu );
	}
	add_filter( 'wp_nav_menu', 'remove_ul' );
?>