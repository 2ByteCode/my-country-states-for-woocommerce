<?php
/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://profiles.wordpress.org/2bytecode/
 * @since      1.0.0
 *
 * @package    My_Country_States_For_WooCommerce
 * @subpackage My_Country_States_For_WooCommerce/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    My_Country_States_For_WooCommerce
 * @subpackage My_Country_States_For_WooCommerce/includes
 * @author     2ByteCode <support@2bytecode.com>
 */
class My_Country_States_I18n {

	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'my-country-states-for-woocommerce',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
