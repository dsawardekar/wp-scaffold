<?php
/**
 * Plugin Name:       TenUp Plugin Scaffold
 * Plugin URI:        https://github.com/TenUp/plugin-scaffold
 * Description:       A brief description of the plugin.
 * Version:           0.1.0
 * Requires at least: 4.9
 * Requires PHP:      7.2
 * Author:            10up
 * Author URI:        https://10up.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       tenup-plugin
 * Domain Path:       /languages
 *
 * @package           TenUpPlugin
 */

// Useful global constants.
define( 'TENUP_PLUGIN_VERSION', '0.1.0' );
define( 'TENUP_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'TENUP_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'TENUP_PLUGIN_INC', TENUP_PLUGIN_PATH . 'includes/' );

// Include files.
require_once TENUP_PLUGIN_INC . 'functions/core.php';

// Activation/Deactivation.
register_activation_hook( __FILE__, '\TenUpPlugin\Core\activate' );
register_deactivation_hook( __FILE__, '\TenUpPlugin\Core\deactivate' );

// Bootstrap.
TenUpPlugin\Core\setup();

// Require Composer autoloader if it exists.
if ( file_exists( TENUP_PLUGIN_PATH . 'vendor/autoload.php' ) ) {
	require_once TENUP_PLUGIN_PATH . 'vendor/autoload.php';
}
