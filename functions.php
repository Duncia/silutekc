<?php
require_once get_template_directory() . '/inc/customizer-functions.php';
require_once get_template_directory() . '/inc/cs-posts.php';
//Theme setup
function siluteskc_setup(){
    //Title in the tab of every page
    add_theme_support('title-tag');
    //Enabling thumbnails
    add_theme_support('post-thumbnails');
    //Load translations in languages folder
    load_theme_textdomain( 'siluteskc', get_template_directory() . '/languages' );
    //Register menu
    register_nav_menu('header-meniu', 'Viršus / Header');
    register_nav_menu('footer-meniu', 'Apačia / Footer');
    register_nav_menu('sitemap-meniu', 'Sitemap');
    add_theme_support('editor-styles');
    //add_editor_style('build/style-index.css', 'build/index.css');

}
add_action('after_setup_theme', 'siluteskc_setup');

//Add JS/CSS files
function siluteskc_js_css_files() {
    wp_enqueue_style('siluteskc_main_styles', get_theme_file_uri('/build/index.css'));
    wp_enqueue_script('index', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0.0', true);
    if(is_page_template('pg-events.php')){
      wp_enqueue_script('eventspage', get_theme_file_uri('/build/eventsPage.js'), array('jquery'), '1.0.0', true);
    }
    if(is_page_template('pg-gallery.php')){
      wp_enqueue_script('gallerypage', get_theme_file_uri('/build/galleryPage.js'), array('jquery'), '1.0.0', true);
    }
  }
add_action('wp_enqueue_scripts', 'siluteskc_js_css_files');

//Remove dash from page title
add_filter( 'document_title_separator', 'document_title_separator' );
function document_title_separator( $sep ) {
    $sep = "|";
    return $sep;
}

//Upload SVG
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
add_filter('upload_mimes', 'cc_mime_types');

// Update CSS within in Admin
function admin_style() {
  wp_enqueue_style('admin-styles', get_template_directory_uri().'/inc/admin-styles.css');
}
add_action('admin_enqueue_scripts', 'admin_style');

//Change excerpt
/*
function siluteckc_excerpt_length($length){ 
  return 5; 
};

add_filter('excerpt_length', 'siluteckc_excerpt_length');
function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
*/

//Add custom blocks
