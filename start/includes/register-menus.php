<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} 
//---------------- регистрация меню----------------
register_nav_menus(
array(
'menu-start' => esc_html__( 'menu-start', 'menu-start' ),    
)
);

// function add_menuclass($ulclass) {
// return preg_replace('/<a /', '<a class="menu__link-header" ' , $ulclass); }
//   add_filter('wp_nav_menu','add_menuclass');