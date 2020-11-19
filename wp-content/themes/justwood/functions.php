<?php

// custom constant (opposite of TEMPLATEPATH)
define('_TEMPLATEURL', WP_CONTENT_URL . '/' . stristr(TEMPLATEPATH, 'themes'));

function register_my_menus() {
	register_nav_menus(
		array('MainMenu'=>__('MainMenu'), 'FooterMenu'=>__('FooterMenu'))
	);
}

add_action('init', 'register_my_menus');

function create_post_type_product() {
	register_post_type( 'jw_product',
		array(
			'labels' => array(
				'name' => __( 'Products' ),
				'singular_name' => __( 'Product' )
			),
		'public' => true,
		'has_archive' => false
		)
	);
}

function create_post_type_glossary() {
	register_post_type( 'jw_glossary',
		array(
			'labels' => array(
				'name' => __( 'Glossary Items' ),
				'singular_name' => __( 'Glossary Item' )
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug'=>'glossary')
		)
	);
}

add_action( 'init', 'create_post_type_product' );
add_action( 'init', 'create_post_type_glossary' );

register_taxonomy(
	'flooring_type',
	'jw_product',
	array(
		'hierarchical' => true,
		'label' => 'Flooring Type',
		'query_var' => true,
		'rewrite' => true
	)
);

if ( function_exists( 'add_theme_support' ) ) { 
  add_theme_support( 'post-thumbnails' ); 
}

function change_fields_in_custom_post_types() {
	remove_post_type_support( 'jw_product', 'editor' );
	add_post_type_support( 'jw_product', 'thumbnail' );
	add_post_type_support( 'jw_product', 'excerpt' );
	add_post_type_support( 'jw_product', 'custom-fields' );
}

add_action( 'init', 'change_fields_in_custom_post_types' );

function my_rewrite_flush() {
  create_post_type_product();
  create_post_type_glossary();
  flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'my_rewrite_flush');

?>
