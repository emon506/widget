
<?php
/**
 * Plugin Name: js addon
 * Description: my first widget
 * Plugin URI:  https://elementor.com/
 * Version:     1.0.0
 * Author:      Emon
 * Author URI:  https://developers.elementor.com/
 * Text Domain: js-addon
 *
 * Elementor tested up to: 3.5.0
 * Elementor Pro tested up to: 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function js_addon() {

	// Load plugin file
	require_once( __DIR__ . '/includes/plugin.php' );

	// Run the plugin
\Plugin::instance();

}
add_action( 'plugins_loaded', 'js_addon' );