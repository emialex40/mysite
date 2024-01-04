<?php


add_action( 'init', 'register_post_type_callback' );

function register_post_type_callback () {
	$labels = [
		'name'               => __( 'Portfolio', 'themename' ),
		'singular_name'      => __( 'Portfolio', 'themename' ), // админ панель Добавить->Функцию
		'add_new'            => __( 'Add Portfolio', 'themename' ),
		'add_new_item'       => __( 'Add New Portfolio', 'themename' ), // заголовок тега <title>
		'edit_item'          => __( 'Edit Portfolio', 'themename' ),
		'new_item'           => __( 'New Portfolio', 'themename' ),
		'all_items'          => __( 'All Portfolio', 'themename' ),
		'view_item'          => __( 'View Portfolio', 'themename' ),
		'search_items'       => __( 'Search Portfolio', 'themename' ),
		'not_found'          => __( 'Portfolio not found', 'themename' ),
		'not_found_in_trash' => __( 'Not found Portfolio in trash', 'themename' ),
		'menu_name'          => __( 'Portfolio', 'themename'), // ссылка в меню в админке
	];
	$args   = [
		'labels'              => $labels,
		'public'              => true,
		'show_ui'             => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'with_front'          => true,
		'menu_position'       => 21,
		'rewrite'             => [
			'slug'         => 'cases',
			'hierarchical' => true,
		],
		'supports'            => [ 'title' ],
	];
	register_post_type( 'portfolio', $args );

}

