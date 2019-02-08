<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://leonstafford.github.io
 * @since      1.0.0
 *
 * @package    Wp2static_Addon_Azure
 * @subpackage Wp2static_Addon_Azure/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp2static_Addon_Azure
 * @subpackage Wp2static_Addon_Azure/includes
 * @author     Leon Stafford <leon@wp2static.com>
 */
class Wp2static_Addon_Azure_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp2static-addon-azure',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
