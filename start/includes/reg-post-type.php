<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function my_custom_init(){
register_post_type('start-projects', array(
		'labels'             => array(
			'name'               => 'Старт посты', // Основное название типа записи
			'singular_name'      => 'Старт пост', // отдельное название записи 
			'add_new'            => 'Добавить пост' 
		  ),
		'public'             => true,
		'has_archive'        => true,
		'menu_position'      => 4,
		'menu_icon'          =>'dashicons-images-alt',
		'supports'           => array('title','thumbnail','editor','excerpt','comments','post-format')
	) );

// register_post_type('cases', array(
// 'labels' => array(
// 'name' => 'Cases', // Основное название типа записи
// 'singular_name' => 'Cases for portfolio', // отдельное название записи типа Book
// 'add_new' => 'Add new',
// ),
// 'public' => true,
// 'menu_position' => 5,
// 'menu_icon' =>'dashicons-images-alt2', 
// // -----тут меняется иконка на панели возле названия https://developer.wordpress.org/resource/dashicons
// 'supports' => array('title','editor','thumbnail','excerpt','comments','post-format')
// ) );

// register_post_type('market-cases', array(
// 'labels' => array(
// 'name' => 'Market cases', // Основное название типа записи
// 'singular_name' => 'Cases for marketing', // отдельное название записи типа Book
// 'add_new' => 'Add new',
// ),
// 'public' => true,
// 'menu_position' => 6,
// 'menu_icon' =>'dashicons-images-alt2', 
// // -----тут меняется иконка на панели возле названия https://developer.wordpress.org/resource/dashicons
// 'supports' => array('title','editor','thumbnail','excerpt','comments','post-format')
// ) );


// register_post_type('vacancies', array(
// 'labels' => array(
// 'name' => 'Vacancies', // Основное название типа записи
// 'singular_name' => 'Vacancies', // отдельное название записи типа Book
// 'add_new' => 'Add new',
// ),
// 'public' => true,
// 'menu_position' => 6,
// 'menu_icon' =>'dashicons-code-standards', 
// // -----тут меняется иконка на панели возле названия https://developer.wordpress.org/resource/dashicons
// 'supports' => array('title','editor','thumbnail','excerpt','comments','post-format')
// ) );

}


add_action('init', 'my_custom_init');

