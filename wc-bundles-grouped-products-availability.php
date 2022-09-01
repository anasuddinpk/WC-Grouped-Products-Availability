<?php
/**
 * Plugin Name: WC Grouped Products Availability
 * Plugin URI: https://github.com/anasuddinpk/wc-grouped-products-availability
 * Description: Made for changing the bundles' grouped products availability notices.
 * Version: 1.1.1.0
 * Author: Anas Uddin
 * Author URI: https://www.linkedin.com/in/anasuddinpk/
 * Text Domain: products-availability
 *
 * @package products-availability
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'WGPA_PLUGIN_DIR' ) ) {
	define( 'WGPA_PLUGIN_DIR', __DIR__ );
}

if ( ! defined( 'WGPA_PLUGIN_DIR_URL' ) ) {
	define( 'WGPA_PLUGIN_DIR_URL', plugin_dir_url( __FILE__ ) );
}

if ( ! defined( 'WGPA_ABSPATH' ) ) {
	define( 'WGPA_ABSPATH', dirname( __FILE__ ) );
}

require_once WGPA_ABSPATH . '/includes/class-wgpa-loader.php';