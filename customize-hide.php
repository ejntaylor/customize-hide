<?php
/**
 * Plugin Name: Customize Hider
 * Plugin URI: http://raison.co/
 * Description: Hide Customizer
 * Version: 1.0.0
 * Author: Raison
 * Author URI: http://raison.co
 * Requires at least: 4.0.0
 * Tested up to: 4.0.0
 *
 * Text Domain: customize-hide
 * Domain Path: /languages/
 *
 * @package customize_hide
 * @category Core
 * @author Raison
   @GitHub Plugin URI: https://github.com/raisonon/wordpress-customize-hide
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


// load collapser JS

function register_customize_hide_script() {

	wp_register_script('customize-hide', plugins_url( 'assets/js/customize_hide.js' , __FILE__ ), array('jquery'), true);
	wp_print_scripts('customize-hide');
}

add_action('admin_init', 'register_customize_hide_script');



// custom css 

/*
function customize_hide_css() {

	    wp_register_style('quickPanelcss', plugins_url( 'assets/css/customize_hide.css' , __FILE__ ));
		wp_enqueue_style( 'quickPanelcss');
}

add_action( 'wp_admin_enqueue_scripts', 'customize_hide_css', 30 );
*/


   add_action( 'admin_init', 'customize_hide_admin_init' );
   add_action( 'admin_print_styles', 'customize_hide_admin_styles' );


   function customize_hide_admin_init() {
       /* Register our stylesheet. */
       wp_register_style( 'customizehideStylesheet', plugins_url('assets/css/customize_hide.css', __FILE__) );
   }
      
   
   function customize_hide_admin_styles() {
       /*
        * It will be called only on your plugin admin page, enqueue our stylesheet here
        */
       wp_enqueue_style( 'customizehideStylesheet' );
   }
   

include_once('includes/init.php');

	
	


// add chosen

	function admin_enqueue_scripts() {
		$screen = get_current_screen();
		


		wp_enqueue_script(  'chosen', plugins_url('assets//chosen/chosen.jquery.min.js', __FILE__), array( 'jquery' ), '1.0' );
		wp_enqueue_style( 'chosen', plugins_url('assets//chosen/chosen.css', __FILE__) );
	}
	
	add_action( 'admin_enqueue_scripts', 'admin_enqueue_scripts' );

	
	
?>
