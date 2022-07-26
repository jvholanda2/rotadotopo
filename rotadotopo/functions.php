<?php declare( strict_types = 1 );

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function import_custom_file(){
	wp_enqueue_script('js-customizado', get_template_directory_uri() . '/assets/script/menu.js');
}

add_action('wp_enqueue_scripts', 'import_custom_file');