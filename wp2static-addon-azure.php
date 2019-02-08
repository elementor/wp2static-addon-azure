<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://leonstafford.github.io
 * @since             0.0.1
 * @package           Wp2static_Addon_Azure
 *
 * @wordpress-plugin
 * Plugin Name:       WP2Static Add-on: Azure
 * Plugin URI:        https://wp2static.com
 * Description:       Microsoft Azure Cloud Storage as a deployment option for WP2Static.

 * Version:           0.1
 * Author:            Leon Stafford
 * Author URI:        https://leonstafford.github.io
 * License:           Unlicense
 * License URI:       http://unlicense.org
 * Text Domain:       wp2static-addon-azure
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PLUGIN_NAME_VERSION', '0.1' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp2static-addon-azure-activator.php
 */
function activate_wp2static_addon_azure() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp2static-addon-azure-activator.php';
	Wp2static_Addon_Azure_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp2static-addon-azure-deactivator.php
 */
function deactivate_wp2static_addon_azure() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp2static-addon-azure-deactivator.php';
	Wp2static_Addon_Azure_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp2static_addon_azure' );
register_deactivation_hook( __FILE__, 'deactivate_wp2static_addon_azure' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp2static-addon-azure.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp2static_addon_azure() {

	$plugin = new Wp2static_Addon_Azure();
	$plugin->run();

}
run_wp2static_addon_azure();
