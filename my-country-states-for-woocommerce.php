<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://profiles.wordpress.org/2bytecode/
 * @since             1.0.0
 * @package           My_Country_States
 *
 * @wordpress-plugin
 * Plugin Name:       My Country States For WooCommerce
 * Plugin URI:        https://2bytecode.com
 * Description:       Add the states/provinces/districts/regions of missing countries on checkout billing and shipping fields.
 * Version:           1.0.0
 * Author:            2ByteCode
 * Author URI:        https://profiles.wordpress.org/2bytecode/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       my-country-states-for-woocommerce
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Define plugin wise constant.
 */
if ( ! defined( 'MCSFWC_ADMIN_PATH' ) ) {
	define( 'MCSFWC_ADMIN_PATH', plugin_dir_path( __FILE__ ) . 'admin/' );
}

if ( ! defined( 'MCSFWC_ADMIN_URL' ) ) {
	define( 'MCSFWC_ADMIN_URL', plugin_dir_url( __FILE__ ) . 'admin/' );
}

if ( ! defined( 'MCSFWC_INCLUDES_PATH' ) ) {
	define( 'MCSFWC_INCLUDES_PATH', plugin_dir_path( __FILE__ ) . 'includes/' );
}

if ( ! defined( 'MCSFWC_INCLUDES_URL' ) ) {
	define( 'MCSFWC_INCLUDES_URL', plugin_dir_url( __FILE__ ) . 'includes/' );
}

if ( ! defined( 'MCSFWC_PUBLIC_PATH' ) ) {
	define( 'MCSFWC_PUBLIC_PATH', plugin_dir_path( __FILE__ ) . 'public/' );
}

if ( ! defined( 'MCSFWC_PUBLIC_URL' ) ) {
	define( 'MCSFWC_PUBLIC_URL', plugin_dir_url( __FILE__ ) . 'public/' );
}

if ( ! defined( 'MCSFWC_BASE_NAME' ) ) {
	define( 'MCSFWC_BASE_NAME', plugin_basename( __FILE__ ) );
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'MY_COUNTRY_STATES_VERSION', '1.0.0' );

/**
 * WooCommerce fallback notice.
 *
 * @since 1.0.0
 */
function my_country_states_missing_wc_notice() {
	/* translators: 1. URL link. */
	echo '<div class="notice notice-error is-dismissible"><p><strong>' . sprintf( esc_html__( 'My Country State requires WooCommerce to be installed and active. You can download %s here.', 'my-country-states-for-woocommerce' ), '<a href="https://woocommerce.com/" target="_blank">WooCommerce</a>' ) . '</strong></p></div>';
}

/**
 * Check WooCommerce plugin install and active.
 *
 * @since 1.0.0
 */
function woocommerce_my_country_states_init() {

	if ( ! class_exists( 'WooCommerce' ) ) {
		add_action( 'admin_notices', 'my_country_states_missing_wc_notice' );

		return;
	}

}
add_action( 'plugins_loaded', 'woocommerce_my_country_states_init' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-my-country-states.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_my_country_states() {

	$plugin = new My_Country_States();
	$plugin->run();

}
run_my_country_states();
