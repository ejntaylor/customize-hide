<?php


function quick_panel_html() {
	require_once plugin_dir_path( __FILE__ ) . '/partials/customize_hide.php';
	
}

add_action( 'admin_init', 'quick_panel_html', 1 );

	
?>