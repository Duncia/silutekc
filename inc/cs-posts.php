<?php
//Custom posts
function siluteskc_post_types() {
	register_post_type('news', array(
        'rewrite' => array('slug' => 'naujienos','with_front' => false),
		'public' => true,
        'show_in_rest' => true,
        'show_in_menu' => true,
        'menu_position' => 8,
        'taxonomies' => ['category', 'post_tag'],
		'labels' => array(
			'name' => 'Naujienos / News',
            'add_new_item' => 'Pridėti / Add',
            'edit_item' => 'Redaguoti / Edit',
            'all_items' => 'Visos / All',
            'singular_name' => 'Naujienas / News'
		),
		'menu_icon' => 'dashicons-admin-site',
        'supports' => array(
            'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes', 'post-formats', 'custom-fields'
        )
	));
	register_post_type('events', array(
        'rewrite' => array('slug' => 'renginiai','with_front' => false),
		'public' => true,
        'show_in_rest' => true,
        'show_in_menu' => true,
        'menu_position' => 7,
        'taxonomies' => ['category', 'post_tag'],
		'labels' => array(
			'name' => 'Renginiai / Events',
            'add_new_item' => 'Pridėti / Add',
            'edit_item' => 'Redaguoti / Edit',
            'all_items' => 'Visi / All',
            'singular_name' => 'Renginys / Event'
		),
		'menu_icon' => 'dashicons-calendar',
        'supports' => array(
            'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes', 'post-formats', 'custom-fields'
        )
	));
    register_post_type('info', array(
        'rewrite' => array('slug' => 'informacija','with_front' => false),
		'public' => true,
        'show_in_rest' => true,
        'show_in_menu' => true,
        'menu_position' => 9,
        'taxonomies' => ['category', 'post_tag'],
		'labels' => array(
			'name' => 'Administracinė info / Information',
            'add_new_item' => 'Pridėti / Add',
            'edit_item' => 'Redaguoti / Edit',
            'all_items' => 'Visi / All',
            'singular_name' => 'Admin info'
		),
		'capability_type' => 'post',
		'menu_icon' => 'dashicons-businessperson',
        'supports' => array(
            'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes', 'post-formats', 'custom-fields'
        )
	));
    register_post_type('gallery', array(
        'rewrite' => array('slug' => 'galerija','with_front' => false),
		'public' => true,
        'show_in_rest' => true,
        'show_in_menu' => true,
        'menu_position' => 7,
        'taxonomies' => ['category', 'post_tag'],
		'labels' => array(
			'name' => 'Galerija / Gallery',
            'add_new_item' => 'Pridėti / Add',
            'edit_item' => 'Redaguoti / Edit',
            'all_items' => 'Visi / All',
            'singular_name' => 'Gallery'
		),
		'capability_type' => 'post',
		'menu_icon' => 'dashicons-cover-image',
        'supports' => array(
            'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes', 'post-formats', 'custom-fields'
        )
	));
}
add_action('init', 'siluteskc_post_types');
