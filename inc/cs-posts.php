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
    register_post_type('legalinfo', array(
        'rewrite' => array('slug' => 'teisine-informacija','with_front' => false),
		'public' => true,
        'show_in_rest' => true,
        'show_in_menu' => true,
        'menu_position' => 10,
        'taxonomies' => ['category', 'post_tag'],
		'labels' => array(
			'name' => 'Teisinė info / Legal',
            'add_new_item' => 'Pridėti / Add',
            'edit_item' => 'Redaguoti / Edit',
            'all_items' => 'Visi / All',
            'singular_name' => 'Teisė'
		),
		'capability_type' => 'post',
		'menu_icon' => 'dashicons-bank',
        'supports' => array(
            'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes', 'post-formats', 'custom-fields'
        )
	));
    register_post_type('budgetinfo', array(
        'rewrite' => array('slug' => 'biudzeto-informacija','with_front' => false),
		'public' => true,
        'show_in_rest' => true,
        'show_in_menu' => true,
        'menu_position' => 10,
        'taxonomies' => ['category', 'post_tag'],
		'labels' => array(
			'name' => 'Biudžeto rinkiniai / Budget',
            'add_new_item' => 'Pridėti / Add',
            'edit_item' => 'Redaguoti / Edit',
            'all_items' => 'Visi / All',
            'singular_name' => 'Biudžetas'
		),
		'capability_type' => 'post',
		'menu_icon' => 'dashicons-calculator',
        'supports' => array(
            'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes', 'post-formats', 'custom-fields'
        )
	));
    register_post_type('financeinfo', array(
        'rewrite' => array('slug' => 'finansine-informacija','with_front' => false),
		'public' => true,
        'show_in_rest' => true,
        'show_in_menu' => true,
        'menu_position' => 10,
        'taxonomies' => ['category', 'post_tag'],
		'labels' => array(
			'name' => 'Finansinė info / Finance',
            'add_new_item' => 'Pridėti / Add',
            'edit_item' => 'Redaguoti / Edit',
            'all_items' => 'Visi / All',
            'singular_name' => 'Finansai'
		),
		'capability_type' => 'post',
		'menu_icon' => 'dashicons-money-alt',
        'supports' => array(
            'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes', 'post-formats', 'custom-fields'
        )
	));
    register_post_type('workinfo', array(
        'rewrite' => array('slug' => 'darbo-uzmokestis','with_front' => false),
		'public' => true,
        'show_in_rest' => true,
        'show_in_menu' => true,
        'menu_position' => 10,
        'taxonomies' => ['category', 'post_tag'],
		'labels' => array(
			'name' => 'Darbo užmokestis / Salaries',
            'add_new_item' => 'Pridėti / Add',
            'edit_item' => 'Redaguoti / Edit',
            'all_items' => 'Visi / All',
            'singular_name' => 'Darbo užmokestis'
		),
		'capability_type' => 'post',
		'menu_icon' => 'dashicons-chart-line',
        'supports' => array(
            'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes', 'post-formats', 'custom-fields'
        )
	));
    register_post_type('planninginfo', array(
        'rewrite' => array('slug' => 'planavimas','with_front' => false),
		'public' => true,
        'show_in_rest' => true,
        'show_in_menu' => true,
        'menu_position' => 10,
        'taxonomies' => ['category', 'post_tag'],
		'labels' => array(
			'name' => 'Planavimas / Planning',
            'add_new_item' => 'Pridėti / Add',
            'edit_item' => 'Redaguoti / Edit',
            'all_items' => 'Visi / All',
            'singular_name' => 'Planavimas'
		),
		'capability_type' => 'post',
		'menu_icon' => 'dashicons-randomize',
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
