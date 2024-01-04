<?php


add_action( 'init', 'register_post_type_callback' );

function register_post_type_callback () {
	$labels = [
		'name'               => pll__( 'Portfolio', 'mira' ),
		'singular_name'      => pll__( 'Portfolio' ), // админ панель Добавить->Функцию
		'add_new'            => pll__( 'Add Portfolio' ),
		'add_new_item'       => pll__( 'Add New Portfolio' ), // заголовок тега <title>
		'edit_item'          => pll__( 'Edit Portfolio' ),
		'new_item'           => pll__( 'New Portfolio' ),
		'all_items'          => pll__( 'All Portfolio' ),
		'view_item'          => pll__( 'View Portfolio' ),
		'search_items'       => pll__( 'Search Portfolio' ),
		'not_found'          => pll__( 'Portfolio not found' ),
		'not_found_in_trash' => pll__( 'Not found Portfolio in trash' ),
		'menu_name'          => pll__( 'Portfolio'), // ссылка в меню в админке
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

