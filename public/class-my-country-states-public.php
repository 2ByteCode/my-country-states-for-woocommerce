<?php
/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://profiles.wordpress.org/2bytecode/
 * @since      1.0.0
 *
 * @package    My_Country_States_For_WooCommerce
 * @subpackage My_Country_States/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    My_Country_States_For_WooCommerce
 * @subpackage My_Country_States/public
 * @author     2ByteCode <support@2bytecode.com>
 */
class My_Country_States_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string $plugin_name       The name of the plugin.
	 * @param      string $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version     = $version;

		add_filter( 'woocommerce_states', array( $this, 'custom_woocommerce_states_by_tassawer' ) );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 * @param      array $states       Array of countries states.
	 */
	public function custom_woocommerce_states_by_tassawer( $states ) {

		$countries = MCSFWC_Countries_List::mcsfwc_list_of_countries();

		foreach ( $countries as $country_code => $country_details ) {

			if ( 'no' === $country_details['states_exist'] ) {

				$function_name      = 'MCSFWC_Missing_Countries_States::' . $country_details['func_name'];
				$cur_country_states = $function_name();

				if ( ! empty( $cur_country_states ) ) {
					$states[ $country_code ] = $cur_country_states;
				}
			}
		}

		return apply_filters( 'mcsfwc_list_of_countries_with_states', $states );
	}

}

