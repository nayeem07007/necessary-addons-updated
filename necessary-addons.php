<?php 
/**
 * Plugin Name: Necessary Addons
 */

defined('ABSPATH') or die('Hey, what are you doing here? You silly human!');

define('TH_PLUGIN_PATH', plugin_dir_url( __FILE__ ));
define('PLUGIN_VERSION', '1.0');
// assets loading 

require_once __DIR__.'/assets-loader.php';
require_once __DIR__.'/includes/init.php';
//  plugin loading 
function elementor_necessary_addon() {

	// Load plugin file
	require_once( __DIR__ . '/plugin.php' );

	// Run the plugin
	\Elementor_Necessary_Addon\Plugin::instance();

}
add_action( 'plugins_loaded', 'elementor_necessary_addon' );
