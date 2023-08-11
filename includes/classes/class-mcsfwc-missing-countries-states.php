<?php
/**
 * Fired during plugin activation
 *
 * @link       https://profiles.wordpress.org/2bytecode/
 * @since      1.0.0
 *
 * @package    My_Country_States_For_WooCommerce
 * @subpackage My_Country_States_For_WooCommerce/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    My_Country_States_For_WooCommerce
 * @subpackage My_Country_States_For_WooCommerce/includes
 * @author     2ByteCode <support@2bytecode.com>
 */
class MCSFWC_Missing_Countries_States {

	/**
	 * States / Provinces of Afghanistan.
	 *
	 * Return the array of states/provinces of Afghanistan. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_af() {

		$states = array(
			'AF01' => __( 'Badakhshan', 'my-country-states-for-woocommerce' ),
			'AF02' => __( 'Badghis', 'my-country-states-for-woocommerce' ),
			'AF03' => __( 'Baghlan', 'my-country-states-for-woocommerce' ),
			'AF04' => __( 'Balkh', 'my-country-states-for-woocommerce' ),
			'AF05' => __( 'Bamyan', 'my-country-states-for-woocommerce' ),
			'AF06' => __( 'Daykundi', 'my-country-states-for-woocommerce' ),
			'AF07' => __( 'Farah', 'my-country-states-for-woocommerce' ),
			'AF08' => __( 'Faryab', 'my-country-states-for-woocommerce' ),
			'AF09' => __( 'Ghazni', 'my-country-states-for-woocommerce' ),
			'AF10' => __( 'Ghor', 'my-country-states-for-woocommerce' ),
			'AF11' => __( 'Helmand', 'my-country-states-for-woocommerce' ),
			'AF12' => __( 'Herat', 'my-country-states-for-woocommerce' ),
			'AF13' => __( 'Jowzjan', 'my-country-states-for-woocommerce' ),
			'AF14' => __( 'Kabul', 'my-country-states-for-woocommerce' ),
			'AF15' => __( 'Kandahar', 'my-country-states-for-woocommerce' ),
			'AF16' => __( 'Kapisa', 'my-country-states-for-woocommerce' ),
			'AF17' => __( 'Khost', 'my-country-states-for-woocommerce' ),
			'AF18' => __( 'Kunar', 'my-country-states-for-woocommerce' ),
			'AF19' => __( 'Kunduz', 'my-country-states-for-woocommerce' ),
			'AF20' => __( 'Laghman', 'my-country-states-for-woocommerce' ),
			'AF21' => __( 'Logar', 'my-country-states-for-woocommerce' ),
			'AF22' => __( 'Nangarhar', 'my-country-states-for-woocommerce' ),
			'AF23' => __( 'Nimruz', 'my-country-states-for-woocommerce' ),
			'AF24' => __( 'Nuristan', 'my-country-states-for-woocommerce' ),
			'AF25' => __( 'Paktia', 'my-country-states-for-woocommerce' ),
			'AF26' => __( 'Paktika', 'my-country-states-for-woocommerce' ),
			'AF27' => __( 'Panjshir', 'my-country-states-for-woocommerce' ),
			'AF28' => __( 'Parwan', 'my-country-states-for-woocommerce' ),
			'AF29' => __( 'Samangan', 'my-country-states-for-woocommerce' ),
			'AF30' => __( 'Sar-e Pol', 'my-country-states-for-woocommerce' ),
			'AF31' => __( 'Takhar', 'my-country-states-for-woocommerce' ),
			'AF32' => __( 'Uruzgan', 'my-country-states-for-woocommerce' ),
			'AF33' => __( 'Wardak', 'my-country-states-for-woocommerce' ),
			'AF34' => __( 'Zabul', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_af', $states );
	}

	/**
	 * States / Provinces of Åland Islands.
	 *
	 * Return the array of states/provinces of Åland Islands. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_ax() {

		$states = array(
			'AX01' => __( 'Brändö', 'my-country-states-for-woocommerce' ),
			'AX02' => __( 'Eckerö', 'my-country-states-for-woocommerce' ),
			'AX03' => __( 'Föglö', 'my-country-states-for-woocommerce' ),
			'AX04' => __( 'Finström', 'my-country-states-for-woocommerce' ),
			'AX05' => __( 'Geta', 'my-country-states-for-woocommerce' ),
			'AX06' => __( 'Hammarland', 'my-country-states-for-woocommerce' ),
			'AX07' => __( 'Jomala', 'my-country-states-for-woocommerce' ),
			'AX08' => __( 'Kökar', 'my-country-states-for-woocommerce' ),
			'AX09' => __( 'Kumlinge', 'my-country-states-for-woocommerce' ),
			'AX10' => __( 'Lemland', 'my-country-states-for-woocommerce' ),
			'AX11' => __( 'Lumparland', 'my-country-states-for-woocommerce' ),
			'AX12' => __( 'Mariehamn', 'my-country-states-for-woocommerce' ),
			'AX13' => __( 'Saltvik', 'my-country-states-for-woocommerce' ),
			'AX14' => __( 'Sottunga', 'my-country-states-for-woocommerce' ),
			'AX15' => __( 'Sund', 'my-country-states-for-woocommerce' ),
			'AX16' => __( 'Vårdö', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_ax', $states );
	}

	/**
	 * States / Provinces of American Samoa.
	 *
	 * Return the array of states/provinces of American Samoa. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_as() {

		$states = array(
			'AS01' => __( 'Lealataua', 'my-country-states-for-woocommerce' ),
			'AS02' => __( 'Fofo', 'my-country-states-for-woocommerce' ),
			'AS03' => __( 'Leasina', 'my-country-states-for-woocommerce' ),
			'AS04' => __( 'Tualatai', 'my-country-states-for-woocommerce' ),
			'AS05' => __( 'Tualauta', 'my-country-states-for-woocommerce' ),
			'AS06' => __( 'Itu\'au', 'my-country-states-for-woocommerce' ),
			'AS07' => __( 'Ma\'oputasi', 'my-country-states-for-woocommerce' ),
			'AS08' => __( 'Vaifanua', 'my-country-states-for-woocommerce' ),
			'AS09' => __( 'Sua', 'my-country-states-for-woocommerce' ),
			'AS10' => __( 'Sa\'ole', 'my-country-states-for-woocommerce' ),
			'AS11' => __( 'Ofu', 'my-country-states-for-woocommerce' ),
			'AS12' => __( 'Olosega', 'my-country-states-for-woocommerce' ),
			'AS13' => __( 'Ta\'ū', 'my-country-states-for-woocommerce' ),
			'AS14' => __( 'Faleasao', 'my-country-states-for-woocommerce' ),
			'AS15' => __( 'Fitiuta', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_as', $states );
	}

	/**
	 * States / Provinces of Andorra.
	 *
	 * Return the array of states/provinces of Andorra. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_ad() {

		$states = array(
			'AD01' => __( 'Andorra la Vella', 'my-country-states-for-woocommerce' ),
			'AD02' => __( 'Canillo', 'my-country-states-for-woocommerce' ),
			'AD03' => __( 'Encamp', 'my-country-states-for-woocommerce' ),
			'AD04' => __( 'Escaldes-Engordany', 'my-country-states-for-woocommerce' ),
			'AD05' => __( 'La Massana', 'my-country-states-for-woocommerce' ),
			'AD06' => __( 'Ordino', 'my-country-states-for-woocommerce' ),
			'AD07' => __( 'Sant Julià de Lòria', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_ad', $states );
	}

	/**
	 * States / Provinces of Anguilla.
	 *
	 * Return the array of states/provinces of Anguilla. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_ai() {

		$states = array(
			'AI01' => __( 'Blowing Point', 'my-country-states-for-woocommerce' ),
			'AI02' => __( 'East End', 'my-country-states-for-woocommerce' ),
			'AI03' => __( 'George Hill', 'my-country-states-for-woocommerce' ),
			'AI04' => __( 'Island Harbour', 'my-country-states-for-woocommerce' ),
			'AI05' => __( 'North Hill', 'my-country-states-for-woocommerce' ),
			'AI06' => __( 'North Side', 'my-country-states-for-woocommerce' ),
			'AI07' => __( 'Sandy Ground', 'my-country-states-for-woocommerce' ),
			'AI08' => __( 'Sandy Hill', 'my-country-states-for-woocommerce' ),
			'AI09' => __( 'South Hill', 'my-country-states-for-woocommerce' ),
			'AI10' => __( 'Stoney Ground', 'my-country-states-for-woocommerce' ),
			'AI11' => __( 'The Farrington', 'my-country-states-for-woocommerce' ),
			'AI12' => __( 'The Quarter', 'my-country-states-for-woocommerce' ),
			'AI13' => __( 'The Valley', 'my-country-states-for-woocommerce' ),
			'AI14' => __( 'West End', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_ai', $states );
	}

	/**
	 * States / Provinces of Antarctica.
	 *
	 * Return the array of states/provinces of Antarctica. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_aq() {

		$states = array(
			'AQ01' => __( 'General Bernardo O\'Higgins Base', 'my-country-states-for-woocommerce' ),
			'AQ02' => __( 'Punta Arenas', 'my-country-states-for-woocommerce' ),
			'AQ03' => __( 'Puerto Williams', 'my-country-states-for-woocommerce' ),
			'AQ04' => __( 'Stanley', 'my-country-states-for-woocommerce' ),
			'AQ05' => __( 'Puerto Toro', 'my-country-states-for-woocommerce' ),
			'AQ06' => __( 'King Edward Point', 'my-country-states-for-woocommerce' ),
			'AQ07' => __( 'Grytviken', 'my-country-states-for-woocommerce' ),
			'AQ08' => __( 'Carlini Base', 'my-country-states-for-woocommerce' ),
			'AQ09' => __( 'Belgrano II', 'my-country-states-for-woocommerce' ),
			'AQ10' => __( 'Orcadas Base', 'my-country-states-for-woocommerce' ),
			'AQ11' => __( 'Comandante Ferraz Antarctic Station', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_aq', $states );
	}

	/**
	 * States / Provinces of Antigua and Barbuda.
	 *
	 * Return the array of states/provinces of Antigua and Barbuda. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_ag() {

		$states = array(
			'AG01' => __( 'Barbuda', 'my-country-states-for-woocommerce' ),
			'AG02' => __( 'Redonda', 'my-country-states-for-woocommerce' ),
			'AG03' => __( 'Saint George', 'my-country-states-for-woocommerce' ),
			'AG04' => __( 'Saint John', 'my-country-states-for-woocommerce' ),
			'AG05' => __( 'Saint Mary', 'my-country-states-for-woocommerce' ),
			'AG06' => __( 'Saint Paul', 'my-country-states-for-woocommerce' ),
			'AG07' => __( 'Saint Peter', 'my-country-states-for-woocommerce' ),
			'AG08' => __( 'Saint Philip', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_ag', $states );
	}

	/**
	 * States / Provinces of Armenia.
	 *
	 * Return the array of states/provinces of Armenia. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_am() {

		$states = array(
			'AM01' => __( 'Aragatsotn', 'my-country-states-for-woocommerce' ),
			'AM02' => __( 'Ararat', 'my-country-states-for-woocommerce' ),
			'AM03' => __( 'Armavir', 'my-country-states-for-woocommerce' ),
			'AM04' => __( 'Gegharkunik', 'my-country-states-for-woocommerce' ),
			'AM05' => __( 'Kotayk', 'my-country-states-for-woocommerce' ),
			'AM06' => __( 'Lori', 'my-country-states-for-woocommerce' ),
			'AM07' => __( 'Shirak', 'my-country-states-for-woocommerce' ),
			'AM08' => __( 'Syunik', 'my-country-states-for-woocommerce' ),
			'AM09' => __( 'Tavush', 'my-country-states-for-woocommerce' ),
			'AM10' => __( 'Vayots Dzor', 'my-country-states-for-woocommerce' ),
			'AM11' => __( 'Yerevan', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_am', $states );
	}

	/**
	 * States / Provinces of Aruba.
	 *
	 * Return the array of states/provinces of Aruba. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_aw() {

		$states = array(
			'AW01' => __( 'Noord', 'my-country-states-for-woocommerce' ),
			'AW02' => __( 'Oranjestad (East and West)', 'my-country-states-for-woocommerce' ),
			'AW03' => __( 'Paradera', 'my-country-states-for-woocommerce' ),
			'AW04' => __( 'San Nicolaas (North and South)', 'my-country-states-for-woocommerce' ),
			'AW05' => __( 'Santa Cruz', 'my-country-states-for-woocommerce' ),
			'AW06' => __( 'Savaneta', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_aw', $states );
	}

	/**
	 * States / Provinces of Austria.
	 *
	 * Return the array of states/provinces of Austria. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_at() {

		$states = array(
			'AT01' => __( 'Lower Austria', 'my-country-states-for-woocommerce' ),
			'AT02' => __( 'Vorarlberg', 'my-country-states-for-woocommerce' ),
			'AT03' => __( 'Salzburg', 'my-country-states-for-woocommerce' ),
			'AT04' => __( 'Tyrol', 'my-country-states-for-woocommerce' ),
			'AT05' => __( 'Burgenland', 'my-country-states-for-woocommerce' ),
			'AT06' => __( 'Carinthia', 'my-country-states-for-woocommerce' ),
			'AT07' => __( 'Eisenstadt', 'my-country-states-for-woocommerce' ),
			'AT08' => __( 'Saint Pölten', 'my-country-states-for-woocommerce' ),
			'AT09' => __( 'Styria', 'my-country-states-for-woocommerce' ),
			'AT10' => __( 'Upper Austria', 'my-country-states-for-woocommerce' ),
			'AT11' => __( 'Graz', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_at', $states );
	}

	/**
	 * States / Provinces of Azerbaijan.
	 *
	 * Return the array of states/provinces of Azerbaijan. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_az() {

		$states = array(
			'AZ01' => __( 'Baku', 'my-country-states-for-woocommerce' ),
			'AZ02' => __( 'Absheron-Khizi', 'my-country-states-for-woocommerce' ),
			'AZ03' => __( 'Ganja-Dashkasan', 'my-country-states-for-woocommerce' ),
			'AZ04' => __( 'Shaki-Zagatala', 'my-country-states-for-woocommerce' ),
			'AZ05' => __( 'Lankaran-Astara', 'my-country-states-for-woocommerce' ),
			'AZ06' => __( 'Guba-Khachmaz', 'my-country-states-for-woocommerce' ),
			'AZ07' => __( 'Central Aran', 'my-country-states-for-woocommerce' ),
			'AZ08' => __( 'Karabakh', 'my-country-states-for-woocommerce' ),
			'AZ09' => __( 'East Zangezur', 'my-country-states-for-woocommerce' ),
			'AZ10' => __( 'Mountainous Shirvan', 'my-country-states-for-woocommerce' ),
			'AZ11' => __( 'Nakhchivan', 'my-country-states-for-woocommerce' ),
			'AZ12' => __( 'Gazakh-Tovuz', 'my-country-states-for-woocommerce' ),
			'AZ13' => __( 'Mil-Mughan', 'my-country-states-for-woocommerce' ),
			'AZ14' => __( 'Shirvan-Salyan', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_az', $states );
	}

	/**
	 * States / Provinces of Bahamas.
	 *
	 * Return the array of states/provinces of Bahamas. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_bs() {

		$states = array(
			'BS01' => __( 'Acklins', 'my-country-states-for-woocommerce' ),
			'BS02' => __( 'Berry Islands', 'my-country-states-for-woocommerce' ),
			'BS03' => __( 'Bimini', 'my-country-states-for-woocommerce' ),
			'BS04' => __( 'Black Point', 'my-country-states-for-woocommerce' ),
			'BS05' => __( 'Exuma', 'my-country-states-for-woocommerce' ),
			'BS06' => __( 'Cat Island', 'my-country-states-for-woocommerce' ),
			'BS07' => __( 'Central Abaco', 'my-country-states-for-woocommerce' ),
			'BS08' => __( 'Central Andros', 'my-country-states-for-woocommerce' ),
			'BS09' => __( 'Central Eleuthera', 'my-country-states-for-woocommerce' ),
			'BS10' => __( 'City of Freeport', 'my-country-states-for-woocommerce' ),
			'BS11' => __( 'Grand Bahama', 'my-country-states-for-woocommerce' ),
			'BS12' => __( 'Crooked Island', 'my-country-states-for-woocommerce' ),
			'BS13' => __( 'East Grand Bahama', 'my-country-states-for-woocommerce' ),
			'BS14' => __( 'Exuma', 'my-country-states-for-woocommerce' ),
			'BS15' => __( 'Grand Cay', 'my-country-states-for-woocommerce' ),
			'BS16' => __( 'Abaco', 'my-country-states-for-woocommerce' ),
			'BS17' => __( 'Harbour Island', 'my-country-states-for-woocommerce' ),
			'BS18' => __( 'Eleuthera', 'my-country-states-for-woocommerce' ),
			'BS19' => __( 'Hope Town', 'my-country-states-for-woocommerce' ),
			'BS20' => __( 'Abaco', 'my-country-states-for-woocommerce' ),
			'BS21' => __( 'Inagua', 'my-country-states-for-woocommerce' ),
			'BS22' => __( 'Long Island', 'my-country-states-for-woocommerce' ),
			'BS23' => __( 'Mangrove Cay', 'my-country-states-for-woocommerce' ),
			'BS24' => __( 'Andros', 'my-country-states-for-woocommerce' ),
			'BS25' => __( 'Mayaguana', 'my-country-states-for-woocommerce' ),
			'BS26' => __( 'Moore\'s Island', 'my-country-states-for-woocommerce' ),
			'BS27' => __( 'Abaco', 'my-country-states-for-woocommerce' ),
			'BS28' => __( 'New Providence', 'my-country-states-for-woocommerce' ),
			'BS29' => __( 'North Abaco', 'my-country-states-for-woocommerce' ),
			'BS30' => __( 'North Andros', 'my-country-states-for-woocommerce' ),
			'BS31' => __( 'North Eleuthera', 'my-country-states-for-woocommerce' ),
			'BS32' => __( 'Ragged Island', 'my-country-states-for-woocommerce' ),
			'BS33' => __( 'Rum Cay', 'my-country-states-for-woocommerce' ),
			'BS34' => __( 'San Salvador', 'my-country-states-for-woocommerce' ),
			'BS35' => __( 'South Abaco', 'my-country-states-for-woocommerce' ),
			'BS36' => __( 'South Andros', 'my-country-states-for-woocommerce' ),
			'BS37' => __( 'South Eleuthera', 'my-country-states-for-woocommerce' ),
			'BS38' => __( 'Spanish Wells', 'my-country-states-for-woocommerce' ),
			'BS39' => __( 'Eleuthera', 'my-country-states-for-woocommerce' ),
			'BS40' => __( 'West Grand Bahama', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_bs', $states );
	}

	/**
	 * States / Provinces of Bahrain.
	 *
	 * Return the array of states/provinces of Bahrain. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_bh() {

		$states = array(
			'BH01' => __( 'Al Manamah', 'my-country-states-for-woocommerce' ),
			'BH02' => __( 'Sitrah', 'my-country-states-for-woocommerce' ),
			'BH03' => __( 'Al Mintaqah al Gharbiyah', 'my-country-states-for-woocommerce' ),
			'BH04' => __( 'Al Mintaqah al Wusta', 'my-country-states-for-woocommerce' ),
			'BH05' => __( 'Al Mintaqah ash Shamaliyah', 'my-country-states-for-woocommerce' ),
			'BH06' => __( 'Al Muharraq', 'my-country-states-for-woocommerce' ),
			'BH07' => __( 'Al Asimah', 'my-country-states-for-woocommerce' ),
			'BH08' => __( 'Ash Shamaliyah', 'my-country-states-for-woocommerce' ),
			'BH09' => __( 'Jidd Hafs', 'my-country-states-for-woocommerce' ),
			'BH10' => __( 'Madinat', 'my-country-states-for-woocommerce' ),
			'BH11' => __( 'Madinat Hamad', 'my-country-states-for-woocommerce' ),
			'BH12' => __( 'Mintaqat Juzur Hawar', 'my-country-states-for-woocommerce' ),
			'BH13' => __( 'Ar Rifa', 'my-country-states-for-woocommerce' ),
			'BH14' => __( 'Al Hadd', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_bh', $states );
	}

	/**
	 * States / Provinces of Barbados.
	 *
	 * Return the array of states/provinces of Barbados. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_bb() {

		$states = array(
			'BB01' => __( 'Christ Church', 'my-country-states-for-woocommerce' ),
			'BB02' => __( 'St. Andrew', 'my-country-states-for-woocommerce' ),
			'BB03' => __( 'St. George', 'my-country-states-for-woocommerce' ),
			'BB04' => __( 'St. James', 'my-country-states-for-woocommerce' ),
			'BB05' => __( 'St. John', 'my-country-states-for-woocommerce' ),
			'BB06' => __( 'St. Joseph', 'my-country-states-for-woocommerce' ),
			'BB07' => __( 'St. Lucy', 'my-country-states-for-woocommerce' ),
			'BB08' => __( 'St. Michael', 'my-country-states-for-woocommerce' ),
			'BB09' => __( 'St. Peter', 'my-country-states-for-woocommerce' ),
			'BB10' => __( 'St. Philip', 'my-country-states-for-woocommerce' ),
			'BB11' => __( 'St. Thomas', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_bb', $states );
	}

	/**
	 * States / Provinces of Belarus.
	 *
	 * Return the array of states/provinces of Belarus. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_by() {

		$states = array(
			'BY01' => __( 'City of Minsk', 'my-country-states-for-woocommerce' ),
			'BY02' => __( 'Brest Oblasts', 'my-country-states-for-woocommerce' ),
			'BY03' => __( 'Gomel Oblasts', 'my-country-states-for-woocommerce' ),
			'BY04' => __( 'Grodno Oblasts', 'my-country-states-for-woocommerce' ),
			'BY05' => __( 'Mogilev Oblasts', 'my-country-states-for-woocommerce' ),
			'BY06' => __( 'Minsk Oblasts', 'my-country-states-for-woocommerce' ),
			'BY07' => __( 'Vitebsk Oblasts', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_by', $states );
	}

	/**
	 * States / Provinces of Belau.
	 *
	 * Return the array of states/provinces of Belau. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_pw() {

		$states = array(
			'PW01' => __( 'Kayangel', 'my-country-states-for-woocommerce' ),
			'PW02' => __( 'Aimeliik', 'my-country-states-for-woocommerce' ),
			'PW03' => __( 'Airai', 'my-country-states-for-woocommerce' ),
			'PW04' => __( 'Melekeok', 'my-country-states-for-woocommerce' ),
			'PW05' => __( 'Ngaraard', 'my-country-states-for-woocommerce' ),
			'PW06' => __( 'Ngarchelong', 'my-country-states-for-woocommerce' ),
			'PW07' => __( 'Ngardmau', 'my-country-states-for-woocommerce' ),
			'PW08' => __( 'Ngeremlengui', 'my-country-states-for-woocommerce' ),
			'PW09' => __( 'Ngatpang', 'my-country-states-for-woocommerce' ),
			'PW10' => __( 'Ngchesar', 'my-country-states-for-woocommerce' ),
			'PW11' => __( 'Ngiwal', 'my-country-states-for-woocommerce' ),
			'PW12' => __( 'Angaur', 'my-country-states-for-woocommerce' ),
			'PW13' => __( 'Koror', 'my-country-states-for-woocommerce' ),
			'PW14' => __( 'Peleliu', 'my-country-states-for-woocommerce' ),
			'PW15' => __( 'Hatohobei', 'my-country-states-for-woocommerce' ),
			'PW16' => __( 'Sonsorol', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_pw', $states );
	}

	/**
	 * States / Provinces of Belgium.
	 *
	 * Return the array of states/provinces of Belgium. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_be() {

		$states = array(
			'BE01' => __( 'Antwerp', 'my-country-states-for-woocommerce' ),
			'BE02' => __( 'East Flanders', 'my-country-states-for-woocommerce' ),
			'BE03' => __( 'Flemish Brabant', 'my-country-states-for-woocommerce' ),
			'BE04' => __( 'Limburg', 'my-country-states-for-woocommerce' ),
			'BE05' => __( 'West Flanders', 'my-country-states-for-woocommerce' ),
			'BE06' => __( 'Hainaut', 'my-country-states-for-woocommerce' ),
			'BE07' => __( 'Liège', 'my-country-states-for-woocommerce' ),
			'BE08' => __( 'Luxembourg', 'my-country-states-for-woocommerce' ),
			'BE09' => __( 'Namur', 'my-country-states-for-woocommerce' ),
			'BE10' => __( 'Walloon Brabant', 'my-country-states-for-woocommerce' ),
			'BE11' => __( 'Brussels Capital Region', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_be', $states );
	}

	/**
	 * States / Provinces of Belize.
	 *
	 * Return the array of states/provinces of Belize. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_bz() {

		$states = array(
			'BZ01' => __( 'Belize', 'my-country-states-for-woocommerce' ),
			'BZ02' => __( 'Cayo', 'my-country-states-for-woocommerce' ),
			'BZ03' => __( 'Corozal', 'my-country-states-for-woocommerce' ),
			'BZ04' => __( 'Orange Walk', 'my-country-states-for-woocommerce' ),
			'BZ05' => __( 'Stann Creek', 'my-country-states-for-woocommerce' ),
			'BZ06' => __( 'Toledo', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_bz', $states );
	}

	/**
	 * States / Provinces of Bermuda.
	 *
	 * Return the array of states/provinces of Bermuda. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_bm() {

		$states = array(
			'BM01' => __( 'Devonshire', 'my-country-states-for-woocommerce' ),
			'BM02' => __( 'Hamilton', 'my-country-states-for-woocommerce' ),
			'BM03' => __( 'Paget', 'my-country-states-for-woocommerce' ),
			'BM04' => __( 'Pembroke', 'my-country-states-for-woocommerce' ),
			'BM05' => __( 'St George\'s', 'my-country-states-for-woocommerce' ),
			'BM06' => __( 'Sandys', 'my-country-states-for-woocommerce' ),
			'BM07' => __( 'Smith\'s', 'my-country-states-for-woocommerce' ),
			'BM08' => __( 'Southampton', 'my-country-states-for-woocommerce' ),
			'BM09' => __( 'Warwick', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_bm', $states );
	}

	/**
	 * States / Provinces of Bhutan.
	 *
	 * Return the array of states/provinces of Bhutan. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_bt() {

		$states = array(
			'BT01' => __( 'Bumthang', 'my-country-states-for-woocommerce' ),
			'BT02' => __( 'Chhukha', 'my-country-states-for-woocommerce' ),
			'BT03' => __( 'Dagana', 'my-country-states-for-woocommerce' ),
			'BT04' => __( 'Gasa', 'my-country-states-for-woocommerce' ),
			'BT05' => __( 'Haa', 'my-country-states-for-woocommerce' ),
			'BT06' => __( 'Lhuentse', 'my-country-states-for-woocommerce' ),
			'BT07' => __( 'Mongar', 'my-country-states-for-woocommerce' ),
			'BT08' => __( 'Paro', 'my-country-states-for-woocommerce' ),
			'BT09' => __( 'Pema Gatshel', 'my-country-states-for-woocommerce' ),
			'BT10' => __( 'Punakha', 'my-country-states-for-woocommerce' ),
			'BT11' => __( 'Samdrup Jongkhar', 'my-country-states-for-woocommerce' ),
			'BT12' => __( 'Samtse', 'my-country-states-for-woocommerce' ),
			'BT13' => __( 'Sarpang', 'my-country-states-for-woocommerce' ),
			'BT14' => __( 'Thimphu', 'my-country-states-for-woocommerce' ),
			'BT15' => __( 'Trashigang', 'my-country-states-for-woocommerce' ),
			'BT16' => __( 'Trashi Yangtse', 'my-country-states-for-woocommerce' ),
			'BT17' => __( 'Trongsa', 'my-country-states-for-woocommerce' ),
			'BT18' => __( 'Tsirang', 'my-country-states-for-woocommerce' ),
			'BT19' => __( 'Wangdue Phodrang', 'my-country-states-for-woocommerce' ),
			'BT20' => __( 'Zhemgang', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_bt', $states );
	}

	/**
	 * States / Provinces of Bonaire, Saint Eustatius and Saba.
	 *
	 * Return the array of states/provinces of Bonaire, Saint Eustatius and Saba. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_bq() {

		$states = array(
			'BQ01' => __( 'Antriol', 'my-country-states-for-woocommerce' ),
			'BQ02' => __( 'Belnem', 'my-country-states-for-woocommerce' ),
			'BQ03' => __( 'Bolivia', 'my-country-states-for-woocommerce' ),
			'BQ04' => __( 'Hato', 'my-country-states-for-woocommerce' ),
			'BQ05' => __( 'Nikiboko', 'my-country-states-for-woocommerce' ),
			'BQ06' => __( 'Nort Salifia', 'my-country-states-for-woocommerce' ),
			'BQ07' => __( 'Playa', 'my-country-states-for-woocommerce' ),
			'BQ08' => __( 'Rincon', 'my-country-states-for-woocommerce' ),
			'BQ09' => __( 'Sabadeco', 'my-country-states-for-woocommerce' ),
			'BQ10' => __( 'Santa Barbara', 'my-country-states-for-woocommerce' ),
			'BQ11' => __( 'Tera Cora', 'my-country-states-for-woocommerce' ),
			'BQ12' => __( 'Oranjestad (capital)', 'my-country-states-for-woocommerce' ),
			'BQ13' => __( 'Boven', 'my-country-states-for-woocommerce' ),
			'BQ14' => __( 'Groot Sint Joris', 'my-country-states-for-woocommerce' ),
			'BQ15' => __( 'Lower Town', 'my-country-states-for-woocommerce' ),
			'BQ16' => __( 'Middle Region', 'my-country-states-for-woocommerce' ),
			'BQ17' => __( 'Upper Town', 'my-country-states-for-woocommerce' ),
			'BQ18' => __( 'The Bottom (capital)', 'my-country-states-for-woocommerce' ),
			'BQ19' => __( 'Booby Hill', 'my-country-states-for-woocommerce' ),
			'BQ20' => __( 'Flat Point', 'my-country-states-for-woocommerce' ),
			'BQ21' => __( 'Hell\'s Gate', 'my-country-states-for-woocommerce' ),
			'BQ22' => __( 'Johnson\'s Level', 'my-country-states-for-woocommerce' ),
			'BQ23' => __( 'St. John\'s', 'my-country-states-for-woocommerce' ),
			'BQ24' => __( 'St. Christopher\'s', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_bq', $states );
	}

	/**
	 * States / Provinces of Bosnia and Herzegovina.
	 *
	 * Return the array of states/provinces of Bosnia and Herzegovina. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_ba() {

		$states = array(
			'BA01' => __( 'Canton 10', 'my-country-states-for-woocommerce' ),
			'BA02' => __( 'Posavina Canton', 'my-country-states-for-woocommerce' ),
			'BA03' => __( 'Tuzla Canton', 'my-country-states-for-woocommerce' ),
			'BA04' => __( 'Zenica-Doboj Canton', 'my-country-states-for-woocommerce' ),
			'BA05' => __( 'Bosnian-Podrinje Canton Goražde', 'my-country-states-for-woocommerce' ),
			'BA06' => __( 'Central Bosnia Canton', 'my-country-states-for-woocommerce' ),
			'BA07' => __( 'Herzegovina-Neretva Canton', 'my-country-states-for-woocommerce' ),
			'BA08' => __( 'Sarajevo Canton', 'my-country-states-for-woocommerce' ),
			'BA09' => __( 'Una-Sana Canton', 'my-country-states-for-woocommerce' ),
			'BA10' => __( 'West Herzegovina Canton', 'my-country-states-for-woocommerce' ),
			'BA11' => __( 'Banja Luka Region', 'my-country-states-for-woocommerce' ),
			'BA12' => __( 'Bijeljina Region', 'my-country-states-for-woocommerce' ),
			'BA13' => __( 'Doboj Region', 'my-country-states-for-woocommerce' ),
			'BA14' => __( 'Foča Region', 'my-country-states-for-woocommerce' ),
			'BA15' => __( 'Trebinje Region', 'my-country-states-for-woocommerce' ),
			'BA16' => __( 'Istočno Sarajevo Region', 'my-country-states-for-woocommerce' ),
			'BA17' => __( 'Brčko District', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_ba', $states );
	}

	/**
	 * States / Provinces of Botswana.
	 *
	 * Return the array of states/provinces of Botswana. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_bw() {

		$states = array(
			'BW01' => __( 'Central District', 'my-country-states-for-woocommerce' ),
			'BW02' => __( 'Chobe District', 'my-country-states-for-woocommerce' ),
			'BW03' => __( 'Gaborone District', 'my-country-states-for-woocommerce' ),
			'BW04' => __( 'Ghanzi District', 'my-country-states-for-woocommerce' ),
			'BW05' => __( 'Kgalagadi District', 'my-country-states-for-woocommerce' ),
			'BW06' => __( 'Kgatleng District', 'my-country-states-for-woocommerce' ),
			'BW07' => __( 'Kweneng District', 'my-country-states-for-woocommerce' ),
			'BW08' => __( 'North-East District', 'my-country-states-for-woocommerce' ),
			'BW09' => __( 'North-West District', 'my-country-states-for-woocommerce' ),
			'BW10' => __( 'South-East District', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_bw', $states );
	}

	/**
	 * States / Provinces of Bouvet Island.
	 *
	 * Return the array of states/provinces of Bouvet Island. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_bv() {

		// Bouvet Island is an uninhabited subantarctic volcanic island located in the South Atlantic Ocean. As it is an uninhabited territory of Norway, it does not have any provinces or states.
		$states = array();

		return apply_filters( 'mcsfwc_states_of_bv', $states );
	}

	/**
	 * States / Provinces of British Indian Ocean Territory.
	 *
	 * Return the array of states/provinces of British Indian Ocean Territory. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_io() {

		$states = array(
			'IO01' => __( 'Diego Garcia and Peros Banhos Atolls', 'my-country-states-for-woocommerce' ),
			'IO02' => __( 'Salomon Atoll', 'my-country-states-for-woocommerce' ),
			'IO03' => __( 'Three Brothers Islands', 'my-country-states-for-woocommerce' ),
			'IO04' => __( 'Eagle Islands', 'my-country-states-for-woocommerce' ),
			'IO05' => __( 'Egmont Islands', 'my-country-states-for-woocommerce' ),
			'IO06' => __( 'Danger Island', 'my-country-states-for-woocommerce' ),
			'IO07' => __( 'Speakers Bank', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_io', $states );
	}

	/**
	 * States / Provinces of Brunei.
	 *
	 * Return the array of states/provinces of Brunei. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_bn() {

		$states = array(
			'BN01' => __( 'Belait District', 'my-country-states-for-woocommerce' ),
			'BN02' => __( 'Brunei-Muara District', 'my-country-states-for-woocommerce' ),
			'BN03' => __( 'Temburong District', 'my-country-states-for-woocommerce' ),
			'BN04' => __( 'Tutong District', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_bn', $states );
	}

	/**
	 * States / Provinces of Burkina Faso.
	 *
	 * Return the array of states/provinces of Burkina Faso. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_bf() {

		$states = array(
			'BF01' => __( 'Balé', 'my-country-states-for-woocommerce' ),
			'BF02' => __( 'Bam', 'my-country-states-for-woocommerce' ),
			'BF03' => __( 'Banwa', 'my-country-states-for-woocommerce' ),
			'BF04' => __( 'Boucle du Mouhoun', 'my-country-states-for-woocommerce' ),
			'BF05' => __( 'Cascades', 'my-country-states-for-woocommerce' ),
			'BF06' => __( 'Centre', 'my-country-states-for-woocommerce' ),
			'BF07' => __( 'Centre-Est', 'my-country-states-for-woocommerce' ),
			'BF08' => __( 'Centre-Nord', 'my-country-states-for-woocommerce' ),
			'BF09' => __( 'Centre-Ouest', 'my-country-states-for-woocommerce' ),
			'BF10' => __( 'Centre-Sud', 'my-country-states-for-woocommerce' ),
			'BF11' => __( 'Est', 'my-country-states-for-woocommerce' ),
			'BF12' => __( 'Hauts-Bassins', 'my-country-states-for-woocommerce' ),
			'BF13' => __( 'Nord', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_bf', $states );
	}

	/**
	 * States / Provinces of Burundi.
	 *
	 * Return the array of states/provinces of Burundi. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_bi() {

		$states = array(
			'BI01' => __( 'Bubanza', 'my-country-states-for-woocommerce' ),
			'BI02' => __( 'Bujumbura Mairie', 'my-country-states-for-woocommerce' ),
			'BI03' => __( 'Bujumbura Rural', 'my-country-states-for-woocommerce' ),
			'BI04' => __( 'Bururi', 'my-country-states-for-woocommerce' ),
			'BI05' => __( 'Cankuzo', 'my-country-states-for-woocommerce' ),
			'BI06' => __( 'Cibitoke', 'my-country-states-for-woocommerce' ),
			'BI07' => __( 'Gitega', 'my-country-states-for-woocommerce' ),
			'BI08' => __( 'Karuzi', 'my-country-states-for-woocommerce' ),
			'BI09' => __( 'Kayanza', 'my-country-states-for-woocommerce' ),
			'BI10' => __( 'Kirundo', 'my-country-states-for-woocommerce' ),
			'BI11' => __( 'Makamba', 'my-country-states-for-woocommerce' ),
			'BI12' => __( 'Muramvya', 'my-country-states-for-woocommerce' ),
			'BI13' => __( 'Muyinga', 'my-country-states-for-woocommerce' ),
			'BI14' => __( 'Mwaro', 'my-country-states-for-woocommerce' ),
			'BI15' => __( 'Ngozi', 'my-country-states-for-woocommerce' ),
			'BI16' => __( 'Rumonge', 'my-country-states-for-woocommerce' ),
			'BI17' => __( 'Rutana', 'my-country-states-for-woocommerce' ),
			'BI18' => __( 'Ruyigi', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_bi', $states );
	}

	/**
	 * States / Provinces of Cambodia.
	 *
	 * Return the array of states/provinces of Cambodia. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_kh() {

		$states = array(
			'KH01' => __( 'Banteay Meanchey', 'my-country-states-for-woocommerce' ),
			'KH02' => __( 'Battambang', 'my-country-states-for-woocommerce' ),
			'KH03' => __( 'Kampong Cham', 'my-country-states-for-woocommerce' ),
			'KH04' => __( 'Kampong Chhnang', 'my-country-states-for-woocommerce' ),
			'KH05' => __( 'Kampong Speu', 'my-country-states-for-woocommerce' ),
			'KH06' => __( 'Kampong Thom', 'my-country-states-for-woocommerce' ),
			'KH07' => __( 'Kampot', 'my-country-states-for-woocommerce' ),
			'KH08' => __( 'Kandal', 'my-country-states-for-woocommerce' ),
			'KH09' => __( 'Kep', 'my-country-states-for-woocommerce' ),
			'KH10' => __( 'Koh Kong', 'my-country-states-for-woocommerce' ),
			'KH11' => __( 'Kratie', 'my-country-states-for-woocommerce' ),
			'KH12' => __( 'Mondulkiri', 'my-country-states-for-woocommerce' ),
			'KH13' => __( 'Oddar Meanchey', 'my-country-states-for-woocommerce' ),
			'KH14' => __( 'Pailin', 'my-country-states-for-woocommerce' ),
			'KH15' => __( 'Phnom Penh', 'my-country-states-for-woocommerce' ),
			'KH16' => __( 'Preah Sihanouk', 'my-country-states-for-woocommerce' ),
			'KH17' => __( 'Preah Vihear', 'my-country-states-for-woocommerce' ),
			'KH18' => __( 'Pursat', 'my-country-states-for-woocommerce' ),
			'KH19' => __( 'Ratanakiri', 'my-country-states-for-woocommerce' ),
			'KH20' => __( 'Siem Reap', 'my-country-states-for-woocommerce' ),
			'KH21' => __( 'Stung Treng', 'my-country-states-for-woocommerce' ),
			'KH22' => __( 'Svay Rieng', 'my-country-states-for-woocommerce' ),
			'KH23' => __( 'Takeo', 'my-country-states-for-woocommerce' ),
			'KH24' => __( 'Tboung Khmum', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_kh', $states );
	}

	/**
	 * States / Provinces of Cameroon.
	 *
	 * Return the array of states/provinces of Cameroon. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_cm() {

		$states = array(
			'CM01' => __( 'Adamawa', 'my-country-states-for-woocommerce' ),
			'CM02' => __( 'Centre', 'my-country-states-for-woocommerce' ),
			'CM03' => __( 'East', 'my-country-states-for-woocommerce' ),
			'CM04' => __( 'Far North', 'my-country-states-for-woocommerce' ),
			'CM05' => __( 'Littoral', 'my-country-states-for-woocommerce' ),
			'CM06' => __( 'North', 'my-country-states-for-woocommerce' ),
			'CM07' => __( 'Northwest', 'my-country-states-for-woocommerce' ),
			'CM08' => __( 'South', 'my-country-states-for-woocommerce' ),
			'CM09' => __( 'Southwest', 'my-country-states-for-woocommerce' ),
			'CM10' => __( 'West', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_cm', $states );
	}

	/**
	 * States / Provinces of Cape Verde.
	 *
	 * Return the array of states/provinces of Cape Verde. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_cv() {

		$states = array(
			'CV01' => __( 'Boa Vista', 'my-country-states-for-woocommerce' ),
			'CV02' => __( 'Brava', 'my-country-states-for-woocommerce' ),
			'CV03' => __( 'Maio', 'my-country-states-for-woocommerce' ),
			'CV04' => __( 'Mosteiros', 'my-country-states-for-woocommerce' ),
			'CV05' => __( 'Paul', 'my-country-states-for-woocommerce' ),
			'CV06' => __( 'Porto Novo', 'my-country-states-for-woocommerce' ),
			'CV07' => __( 'Praia', 'my-country-states-for-woocommerce' ),
			'CV08' => __( 'Ribeira Brava', 'my-country-states-for-woocommerce' ),
			'CV09' => __( 'Ribeira Grande', 'my-country-states-for-woocommerce' ),
			'CV10' => __( 'Ribeira Grande de Santiago', 'my-country-states-for-woocommerce' ),
			'CV11' => __( 'Sal', 'my-country-states-for-woocommerce' ),
			'CV12' => __( 'Santa Catarina', 'my-country-states-for-woocommerce' ),
			'CV13' => __( 'Santa Catarina do Fogo', 'my-country-states-for-woocommerce' ),
			'CV14' => __( 'Santa Cruz', 'my-country-states-for-woocommerce' ),
			'CV15' => __( 'Sao Domingos', 'my-country-states-for-woocommerce' ),
			'CV16' => __( 'Sao Filipe', 'my-country-states-for-woocommerce' ),
			'CV17' => __( 'Sao Lourenco dos Orgaos', 'my-country-states-for-woocommerce' ),
			'CV18' => __( 'Sao Miguel', 'my-country-states-for-woocommerce' ),
			'CV19' => __( 'Sao Salvador do Mundo', 'my-country-states-for-woocommerce' ),
			'CV20' => __( 'Sao Vicente', 'my-country-states-for-woocommerce' ),
			'CV21' => __( 'Tarrafal', 'my-country-states-for-woocommerce' ),
			'CV22' => __( 'Tarrafal de Sao Nicolau', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_cv', $states );
	}

	/**
	 * States / Provinces of Cayman Islands.
	 *
	 * Return the array of states/provinces of Cayman Islands. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_ky() {

		$states = array(
			'KY01' => __( 'Bodden Town', 'my-country-states-for-woocommerce' ),
			'KY02' => __( 'East End', 'my-country-states-for-woocommerce' ),
			'KY03' => __( 'George Town', 'my-country-states-for-woocommerce' ),
			'KY04' => __( 'Little Cayman and Cayman Brac', 'my-country-states-for-woocommerce' ),
			'KY05' => __( 'North Side', 'my-country-states-for-woocommerce' ),
			'KY06' => __( 'West Bay', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_ky', $states );
	}

	/**
	 * States / Provinces of Central African Republic.
	 *
	 * Return the array of states/provinces of Central African Republic. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_cf() {

		$states = array(
			'CF01' => __( 'Bamingui-Bangoran', 'my-country-states-for-woocommerce' ),
			'CF02' => __( 'Bangui', 'my-country-states-for-woocommerce' ),
			'CF03' => __( 'Basse-Kotto', 'my-country-states-for-woocommerce' ),
			'CF04' => __( 'Haute-Kotto', 'my-country-states-for-woocommerce' ),
			'CF05' => __( 'Haut-Mbomou', 'my-country-states-for-woocommerce' ),
			'CF06' => __( 'Kemo', 'my-country-states-for-woocommerce' ),
			'CF07' => __( 'Lobaye', 'my-country-states-for-woocommerce' ),
			'CF08' => __( 'Mambere-Kadei', 'my-country-states-for-woocommerce' ),
			'CF09' => __( 'Mbomou', 'my-country-states-for-woocommerce' ),
			'CF10' => __( 'Nana-Grebizi', 'my-country-states-for-woocommerce' ),
			'CF11' => __( 'Nana-Mambere', 'my-country-states-for-woocommerce' ),
			'CF12' => __( 'Ombella-M\'Poko', 'my-country-states-for-woocommerce' ),
			'CF13' => __( 'Ouaka', 'my-country-states-for-woocommerce' ),
			'CF14' => __( 'Ouham', 'my-country-states-for-woocommerce' ),
			'CF15' => __( 'Ouham-Pende', 'my-country-states-for-woocommerce' ),
			'CF16' => __( 'Vakaga', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_cf', $states );
	}

	/**
	 * States / Provinces of Chad.
	 *
	 * Return the array of states/provinces of Chad. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_td() {

		$states = array(
			'TD01' => __( 'Batha Region', 'my-country-states-for-woocommerce' ),
			'TD02' => __( 'Borkou Region', 'my-country-states-for-woocommerce' ),
			'TD03' => __( 'Chari-Baguirmi Region', 'my-country-states-for-woocommerce' ),
			'TD04' => __( 'Ennedi Region', 'my-country-states-for-woocommerce' ),
			'TD05' => __( 'Guéra Region', 'my-country-states-for-woocommerce' ),
			'TD06' => __( 'Hadjer-Lamis Region', 'my-country-states-for-woocommerce' ),
			'TD07' => __( 'Kanem Region', 'my-country-states-for-woocommerce' ),
			'TD08' => __( 'Lac Region', 'my-country-states-for-woocommerce' ),
			'TD09' => __( 'Logone Occidental Region', 'my-country-states-for-woocommerce' ),
			'TD10' => __( 'Logone Oriental Region', 'my-country-states-for-woocommerce' ),
			'TD11' => __( 'Mandoul Region', 'my-country-states-for-woocommerce' ),
			'TD12' => __( 'Mayo-Kebbi Est Region', 'my-country-states-for-woocommerce' ),
			'TD13' => __( 'Mayo-Kebbi Ouest Region', 'my-country-states-for-woocommerce' ),
			'TD14' => __( 'Moyen-Chari Region', 'my-country-states-for-woocommerce' ),
			'TD15' => __( 'N\'Djamena Region', 'my-country-states-for-woocommerce' ),
			'TD16' => __( 'Ouaddaï Region', 'my-country-states-for-woocommerce' ),
			'TD17' => __( 'Salamat Region', 'my-country-states-for-woocommerce' ),
			'TD18' => __( 'Sila Region', 'my-country-states-for-woocommerce' ),
			'TD19' => __( 'Tandjilé Region', 'my-country-states-for-woocommerce' ),
			'TD20' => __( 'Tibesti Region', 'my-country-states-for-woocommerce' ),
			'TD21' => __( 'Wadi Fira Region', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_td', $states );
	}

	/**
	 * States / Provinces of Christmas Island.
	 *
	 * Return the array of states/provinces of Christmas Island. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_cx() {

		// Christmas Island is a territory of Australia located in the Indian Ocean. It is a small island and does not have any administrative subdivisions or states/provinces. Therefore, there are no states/provinces to list for Christmas Island.
		$states = array();

		return apply_filters( 'mcsfwc_states_of_cx', $states );
	}

	/**
	 * States / Provinces of Cocos (Keeling) Islands.
	 *
	 * Return the array of states/provinces of Cocos (Keeling) Islands. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_cc() {

		$states = array(
			'CC01' => __( 'North Keeling Island Atoll', 'my-country-states-for-woocommerce' ),
			'CC02' => __( 'South Keeling Island Atoll', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_cc', $states );
	}

	/**
	 * States / Provinces of Comoros.
	 *
	 * Return the array of states/provinces of Comoros. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_km() {

		$states = array(
			'KM01' => __( 'Grande Comore', 'my-country-states-for-woocommerce' ),
			'KM02' => __( 'Moheli', 'my-country-states-for-woocommerce' ),
			'KM03' => __( 'Anjouan', 'my-country-states-for-woocommerce' ),
			'KM04' => __( 'Mayotte', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_km', $states );
	}

	/**
	 * States / Provinces of Congo (Brazzaville).
	 *
	 * Return the array of states/provinces of Congo (Brazzaville). A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_cg() {

		$states = array(
			'CG01' => __( 'Bouenza', 'my-country-states-for-woocommerce' ),
			'CG02' => __( 'Brazzaville', 'my-country-states-for-woocommerce' ),
			'CG03' => __( 'Cuvette', 'my-country-states-for-woocommerce' ),
			'CG04' => __( 'Cuvette-Ouest', 'my-country-states-for-woocommerce' ),
			'CG05' => __( 'Kouilou', 'my-country-states-for-woocommerce' ),
			'CG06' => __( 'Lékoumou', 'my-country-states-for-woocommerce' ),
			'CG07' => __( 'Likouala', 'my-country-states-for-woocommerce' ),
			'CG08' => __( 'Niari', 'my-country-states-for-woocommerce' ),
			'CG09' => __( 'Plateaux', 'my-country-states-for-woocommerce' ),
			'CG10' => __( 'Pool', 'my-country-states-for-woocommerce' ),
			'CG11' => __( 'Sangha', 'my-country-states-for-woocommerce' ),
			'CG12' => __( 'Pointe-Noire', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_cg', $states );
	}

	/**
	 * States / Provinces of Congo (Kinshasa).
	 *
	 * Return the array of states/provinces of Congo (Kinshasa). A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_cd() {

		$states = array(
			'CD01' => __( 'Bas-Uele', 'my-country-states-for-woocommerce' ),
			'CD02' => __( 'Équateur', 'my-country-states-for-woocommerce' ),
			'CD03' => __( 'Haut-Katanga', 'my-country-states-for-woocommerce' ),
			'CD04' => __( 'Haut-Lomami', 'my-country-states-for-woocommerce' ),
			'CD05' => __( 'Haut-Uele', 'my-country-states-for-woocommerce' ),
			'CD06' => __( 'Ituri', 'my-country-states-for-woocommerce' ),
			'CD07' => __( 'Kasai', 'my-country-states-for-woocommerce' ),
			'CD08' => __( 'Kasai Central', 'my-country-states-for-woocommerce' ),
			'CD09' => __( 'Kasai Oriental', 'my-country-states-for-woocommerce' ),
			'CD10' => __( 'Kinshasa', 'my-country-states-for-woocommerce' ),
			'CD11' => __( 'Kongo Central', 'my-country-states-for-woocommerce' ),
			'CD12' => __( 'Kwango', 'my-country-states-for-woocommerce' ),
			'CD13' => __( 'Kwilu', 'my-country-states-for-woocommerce' ),
			'CD14' => __( 'Lomami', 'my-country-states-for-woocommerce' ),
			'CD15' => __( 'Lualaba', 'my-country-states-for-woocommerce' ),
			'CD16' => __( 'Mai-Ndombe', 'my-country-states-for-woocommerce' ),
			'CD17' => __( 'Maniema', 'my-country-states-for-woocommerce' ),
			'CD18' => __( 'Mongala', 'my-country-states-for-woocommerce' ),
			'CD19' => __( 'Nord-Kivu', 'my-country-states-for-woocommerce' ),
			'CD20' => __( 'Nord-Ubangi', 'my-country-states-for-woocommerce' ),
			'CD21' => __( 'Sankuru', 'my-country-states-for-woocommerce' ),
			'CD22' => __( 'Sud-Kivu', 'my-country-states-for-woocommerce' ),
			'CD23' => __( 'Sud-Ubangi', 'my-country-states-for-woocommerce' ),
			'CD24' => __( 'Tanganyika', 'my-country-states-for-woocommerce' ),
			'CD25' => __( 'Tshopo', 'my-country-states-for-woocommerce' ),
			'CD26' => __( 'Tshuapa', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_cd', $states );
	}

	/**
	 * States / Provinces of Cook Islands.
	 *
	 * Return the array of states/provinces of Cook Islands. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_ck() {

		$states = array(
			'CK01' => __( 'Aitutaki', 'my-country-states-for-woocommerce' ),
			'CK02' => __( 'Atiu', 'my-country-states-for-woocommerce' ),
			'CK03' => __( 'Manihiki', 'my-country-states-for-woocommerce' ),
			'CK04' => __( 'Mangaia', 'my-country-states-for-woocommerce' ),
			'CK05' => __( 'Manuae', 'my-country-states-for-woocommerce' ),
			'CK06' => __( 'Mauke', 'my-country-states-for-woocommerce' ),
			'CK07' => __( 'Nassau', 'my-country-states-for-woocommerce' ),
			'CK08' => __( 'Palmerston', 'my-country-states-for-woocommerce' ),
			'CK09' => __( 'Penrhyn', 'my-country-states-for-woocommerce' ),
			'CK10' => __( 'Pukapuka', 'my-country-states-for-woocommerce' ),
			'CK11' => __( 'Rakahanga', 'my-country-states-for-woocommerce' ),
			'CK12' => __( 'Suwarrow', 'my-country-states-for-woocommerce' ),
			'CK13' => __( 'Tabuaeran', 'my-country-states-for-woocommerce' ),
			'CK14' => __( 'Takutea', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_ck', $states );
	}

	/**
	 * States / Provinces of Croatia.
	 *
	 * Return the array of states/provinces of Croatia. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_hr() {

		$states = array(
			'HR01' => __( 'Bjelovar-Bilogora County', 'my-country-states-for-woocommerce' ),
			'HR02' => __( 'Brod-Posavina County', 'my-country-states-for-woocommerce' ),
			'HR03' => __( 'Dubrovnik-Neretva County', 'my-country-states-for-woocommerce' ),
			'HR04' => __( 'Istria County', 'my-country-states-for-woocommerce' ),
			'HR05' => __( 'Karlovac County', 'my-country-states-for-woocommerce' ),
			'HR06' => __( 'Koprivnica-Križevci County', 'my-country-states-for-woocommerce' ),
			'HR07' => __( 'Krapina-Zagorje County', 'my-country-states-for-woocommerce' ),
			'HR08' => __( 'Lika-Senj County', 'my-country-states-for-woocommerce' ),
			'HR09' => __( 'Međimurje County', 'my-country-states-for-woocommerce' ),
			'HR10' => __( 'Osijek-Baranja County', 'my-country-states-for-woocommerce' ),
			'HR11' => __( 'Požega-Slavonia County', 'my-country-states-for-woocommerce' ),
			'HR12' => __( 'Primorje-Gorski Kotar County', 'my-country-states-for-woocommerce' ),
			'HR13' => __( 'Šibenik-Knin County', 'my-country-states-for-woocommerce' ),
			'HR14' => __( 'Sisak-Moslavina County', 'my-country-states-for-woocommerce' ),
			'HR15' => __( 'Split-Dalmatia County', 'my-country-states-for-woocommerce' ),
			'HR16' => __( 'Varaždin County', 'my-country-states-for-woocommerce' ),
			'HR17' => __( 'Virovitica-Podravina County', 'my-country-states-for-woocommerce' ),
			'HR18' => __( 'Vukovar-Srijem County', 'my-country-states-for-woocommerce' ),
			'HR19' => __( 'Zadar County', 'my-country-states-for-woocommerce' ),
			'HR20' => __( 'Zagreb County', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_hr', $states );
	}

	/**
	 * States / Provinces of Cuba.
	 *
	 * Return the array of states/provinces of Cuba. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_cu() {

		$states = array(
			'CU01' => __( 'Pinar del Río', 'my-country-states-for-woocommerce' ),
			'CU02' => __( 'Artemisa', 'my-country-states-for-woocommerce' ),
			'CU03' => __( 'La Habana', 'my-country-states-for-woocommerce' ),
			'CU04' => __( 'Mayabeque', 'my-country-states-for-woocommerce' ),
			'CU05' => __( 'Matanzas', 'my-country-states-for-woocommerce' ),
			'CU06' => __( 'Cienfuegos', 'my-country-states-for-woocommerce' ),
			'CU07' => __( 'Villa Clara', 'my-country-states-for-woocommerce' ),
			'CU08' => __( 'Sancti Spíritus', 'my-country-states-for-woocommerce' ),
			'CU09' => __( 'Ciego de Ávila', 'my-country-states-for-woocommerce' ),
			'CU10' => __( 'Camagüey', 'my-country-states-for-woocommerce' ),
			'CU11' => __( 'Las Tunas', 'my-country-states-for-woocommerce' ),
			'CU12' => __( 'Granma', 'my-country-states-for-woocommerce' ),
			'CU13' => __( 'Holguín', 'my-country-states-for-woocommerce' ),
			'CU14' => __( 'Santiago de Cuba', 'my-country-states-for-woocommerce' ),
			'CU15' => __( 'Guantánamo', 'my-country-states-for-woocommerce' ),
			'CU16' => __( 'Isla de la Juventud', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_cu', $states );
	}

	/**
	 * States / Provinces of Curaçao.
	 *
	 * Return the array of states/provinces of Curaçao. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_cw() {

		$states = array(
			'CW01' => __( 'Punda', 'my-country-states-for-woocommerce' ),
			'CW02' => __( 'Otrobanda', 'my-country-states-for-woocommerce' ),
			'CW03' => __( 'Scharloo', 'my-country-states-for-woocommerce' ),
			'CW04' => __( 'Pietermaai', 'my-country-states-for-woocommerce' ),
			'CW05' => __( 'Westpunt', 'my-country-states-for-woocommerce' ),
			'CW06' => __( 'Barber', 'my-country-states-for-woocommerce' ),
			'CW07' => __( 'Lagun', 'my-country-states-for-woocommerce' ),
			'CW08' => __( 'Sabana Westpunt', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_cw', $states );
	}

	/**
	 * States / Provinces of Cyprus.
	 *
	 * Return the array of states/provinces of Cyprus. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_cy() {

		$states = array(
			'CY01' => __( 'Nicosia District', 'my-country-states-for-woocommerce' ),
			'CY02' => __( 'Limassol District', 'my-country-states-for-woocommerce' ),
			'CY03' => __( 'Larnaca District', 'my-country-states-for-woocommerce' ),
			'CY04' => __( 'Paphos District', 'my-country-states-for-woocommerce' ),
			'CY05' => __( 'Famagusta District', 'my-country-states-for-woocommerce' ),
			'CY06' => __( 'Kyrenia District', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_cy', $states );
	}

	/**
	 * States / Provinces of Czech Republic.
	 *
	 * Return the array of states/provinces of Czech Republic. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_cz() {

		$states = array(
			'CZ01' => __( 'Prague (Praha)', 'my-country-states-for-woocommerce' ),
			'CZ02' => __( 'Central Bohemian Region (Středočeský kraj)', 'my-country-states-for-woocommerce' ),
			'CZ03' => __( 'South Bohemian Region (Jihočeský kraj)', 'my-country-states-for-woocommerce' ),
			'CZ04' => __( 'Plzeň Region (Plzeňský kraj)', 'my-country-states-for-woocommerce' ),
			'CZ05' => __( 'Karlovy Vary Region (Karlovarský kraj)', 'my-country-states-for-woocommerce' ),
			'CZ06' => __( 'Ústí nad Labem Region (Ústecký kraj)', 'my-country-states-for-woocommerce' ),
			'CZ07' => __( 'Liberec Region (Liberecký kraj)', 'my-country-states-for-woocommerce' ),
			'CZ08' => __( 'Hradec Králové Region (Královéhradecký kraj)', 'my-country-states-for-woocommerce' ),
			'CZ09' => __( 'Pardubice Region (Pardubický kraj)', 'my-country-states-for-woocommerce' ),
			'CZ10' => __( 'Olomouc Region (Olomoucký kraj)', 'my-country-states-for-woocommerce' ),
			'CZ11' => __( 'Moravian-Silesian Region (Moravskoslezský kraj)', 'my-country-states-for-woocommerce' ),
			'CZ12' => __( 'South Moravian Region (Jihomoravský kraj)', 'my-country-states-for-woocommerce' ),
			'CZ13' => __( 'Zlín Region (Zlínský kraj)', 'my-country-states-for-woocommerce' ),
			'CZ14' => __( 'Vysočina Region (Kraj Vysočina)', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_cz', $states );
	}

	/**
	 * States / Provinces of Denmark.
	 *
	 * Return the array of states/provinces of Denmark. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_dk() {

		$states = array(
			'DK01' => __( 'Capital Region of Denmark (Region Hovedstaden)', 'my-country-states-for-woocommerce' ),
			'DK02' => __( 'Zealand Region (Region Sjælland)', 'my-country-states-for-woocommerce' ),
			'DK03' => __( 'Region of Southern Denmark (Region Syddanmark)', 'my-country-states-for-woocommerce' ),
			'DK04' => __( 'Central Denmark Region (Region Midtjylland)', 'my-country-states-for-woocommerce' ),
			'DK05' => __( 'North Denmark Region (Region Nordjylland)', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_dk', $states );
	}

	/**
	 * States / Provinces of Djibouti.
	 *
	 * Return the array of states/provinces of Djibouti. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_dj() {

		$states = array(
			'DJ01' => __( 'Ali Sabieh Region', 'my-country-states-for-woocommerce' ),
			'DJ02' => __( 'Arta Region', 'my-country-states-for-woocommerce' ),
			'DJ03' => __( 'Dikhil Region', 'my-country-states-for-woocommerce' ),
			'DJ04' => __( 'Djibouti Region (capital region)', 'my-country-states-for-woocommerce' ),
			'DJ05' => __( 'Obock Region', 'my-country-states-for-woocommerce' ),
			'DJ06' => __( 'Tadjourah Region', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_dj', $states );
	}

	/**
	 * States / Provinces of Dominica.
	 *
	 * Return the array of states/provinces of Dominica. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_dm() {

		$states = array(
			'DM01' => __( 'Saint Andrew Parish', 'my-country-states-for-woocommerce' ),
			'DM02' => __( 'Saint David Parish', 'my-country-states-for-woocommerce' ),
			'DM03' => __( 'Saint George Parish', 'my-country-states-for-woocommerce' ),
			'DM04' => __( 'Saint John Parish', 'my-country-states-for-woocommerce' ),
			'DM05' => __( 'Saint Joseph Parish', 'my-country-states-for-woocommerce' ),
			'DM06' => __( 'Saint Luke Parish', 'my-country-states-for-woocommerce' ),
			'DM07' => __( 'Saint Mark Parish', 'my-country-states-for-woocommerce' ),
			'DM08' => __( 'Saint Patrick Parish', 'my-country-states-for-woocommerce' ),
			'DM09' => __( 'Saint Paul Parish', 'my-country-states-for-woocommerce' ),
			'DM10' => __( 'Saint Peter Parish', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_dm', $states );
	}

	/**
	 * States / Provinces of Equatorial Guinea.
	 *
	 * Return the array of states/provinces of Equatorial Guinea. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_gq() {

		$states = array(
			'GQ01' => __( 'Annobón', 'my-country-states-for-woocommerce' ),
			'GQ02' => __( 'Bioko Norte', 'my-country-states-for-woocommerce' ),
			'GQ03' => __( 'Bioko Sur', 'my-country-states-for-woocommerce' ),
			'GQ04' => __( 'Centro Sur', 'my-country-states-for-woocommerce' ),
			'GQ05' => __( 'Kié-Ntem', 'my-country-states-for-woocommerce' ),
			'GQ06' => __( 'Litoral', 'my-country-states-for-woocommerce' ),
			'GQ07' => __( 'Wele-Nzas', 'my-country-states-for-woocommerce' ),
			'GQ08' => __( 'Djibloho', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_gq', $states );
	}

	/**
	 * States / Provinces of Eritrea.
	 *
	 * Return the array of states/provinces of Eritrea. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_er() {

		$states = array(
			'ER01' => __( 'Anseba', 'my-country-states-for-woocommerce' ),
			'ER02' => __( 'Debub', 'my-country-states-for-woocommerce' ),
			'ER03' => __( 'Gash-Barka', 'my-country-states-for-woocommerce' ),
			'ER04' => __( 'Maekel Region', 'my-country-states-for-woocommerce' ),
			'ER05' => __( 'Northern Red Sea', 'my-country-states-for-woocommerce' ),
			'ER06' => __( 'Southern Red Sea', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_er', $states );
	}

	/**
	 * States / Provinces of Estonia.
	 *
	 * Return the array of states/provinces of Estonia. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_ee() {

		$states = array(
			'EE01' => __( 'Harju', 'my-country-states-for-woocommerce' ),
			'EE02' => __( 'Hiiu', 'my-country-states-for-woocommerce' ),
			'EE03' => __( 'Ida-Viru', 'my-country-states-for-woocommerce' ),
			'EE04' => __( 'Järva', 'my-country-states-for-woocommerce' ),
			'EE05' => __( 'Jõgeva', 'my-country-states-for-woocommerce' ),
			'EE06' => __( 'Lääne', 'my-country-states-for-woocommerce' ),
			'EE07' => __( 'Lääne-Viru', 'my-country-states-for-woocommerce' ),
			'EE08' => __( 'Põlva', 'my-country-states-for-woocommerce' ),
			'EE09' => __( 'Pärnu', 'my-country-states-for-woocommerce' ),
			'EE10' => __( 'Rapla', 'my-country-states-for-woocommerce' ),
			'EE11' => __( 'Saare', 'my-country-states-for-woocommerce' ),
			'EE12' => __( 'Tartu', 'my-country-states-for-woocommerce' ),
			'EE13' => __( 'Valga', 'my-country-states-for-woocommerce' ),
			'EE14' => __( 'Viljandi', 'my-country-states-for-woocommerce' ),
			'EE15' => __( 'Võru', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_ee', $states );
	}

	/**
	 * States / Provinces of Eswatini.
	 *
	 * Return the array of states/provinces of Eswatini. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_sz() {

		$states = array(
			'SZ01' => __( 'Hhohho', 'my-country-states-for-woocommerce' ),
			'SZ02' => __( 'Lubombo', 'my-country-states-for-woocommerce' ),
			'SZ03' => __( 'Manzini', 'my-country-states-for-woocommerce' ),
			'SZ04' => __( 'Shiselweni', 'my-country-states-for-woocommerce' ),
			'SZ05' => __( 'Mbabane', 'my-country-states-for-woocommerce' ),
			'SZ06' => __( 'Hhohho (Northern)', 'my-country-states-for-woocommerce' ),
			'SZ07' => __( 'Hhohho (Central)', 'my-country-states-for-woocommerce' ),
			'SZ08' => __( 'Hhohho (Southern)', 'my-country-states-for-woocommerce' ),
			'SZ09' => __( 'Lubombo (Eastern)', 'my-country-states-for-woocommerce' ),
			'SZ10' => __( 'Lubombo (Western)', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_sz', $states );
	}

	/**
	 * States / Provinces of Ethiopia.
	 *
	 * Return the array of states/provinces of Ethiopia. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_et() {

		$states = array(
			'ET01' => __( 'Afar', 'my-country-states-for-woocommerce' ),
			'ET02' => __( 'Amhara', 'my-country-states-for-woocommerce' ),
			'ET03' => __( 'Benishangul-Gumuz', 'my-country-states-for-woocommerce' ),
			'ET04' => __( 'Gambela', 'my-country-states-for-woocommerce' ),
			'ET05' => __( 'Harari', 'my-country-states-for-woocommerce' ),
			'ET06' => __( 'Oromia', 'my-country-states-for-woocommerce' ),
			'ET07' => __( 'Somali', 'my-country-states-for-woocommerce' ),
			'ET08' => __( 'Southern Nations, Nationalities, and Peoples\' Region (SNNPR)', 'my-country-states-for-woocommerce' ),
			'ET09' => __( 'Tigray', 'my-country-states-for-woocommerce' ),
			'ET10' => __( 'Addis Ababa', 'my-country-states-for-woocommerce' ),
			'ET11' => __( 'Dire Dawa', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_et', $states );
	}

	/**
	 * States / Provinces of Falkland Islands.
	 *
	 * Return the array of states/provinces of Falkland Islands. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_fk() {

		$states = array(
			'FK01' => __( 'East Falkland', 'my-country-states-for-woocommerce' ),
			'FK02' => __( 'West Falkland', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_fk', $states );
	}

	/**
	 * States / Provinces of Faroe Islands.
	 *
	 * Return the array of states/provinces of Faroe Islands. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_fo() {

		$states = array(
			'FO01' => __( 'Tórshavnar kommuna', 'my-country-states-for-woocommerce' ),
			'FO02' => __( 'Klaksvíkar kommuna', 'my-country-states-for-woocommerce' ),
			'FO03' => __( 'Runavíkar kommuna', 'my-country-states-for-woocommerce' ),
			'FO04' => __( 'Fuglafjarðar kommuna', 'my-country-states-for-woocommerce' ),
			'FO05' => __( 'Sunda kommuna', 'my-country-states-for-woocommerce' ),
			'FO06' => __( 'Nes kommunu', 'my-country-states-for-woocommerce' ),
			'FO07' => __( 'Eysturkommuna', 'my-country-states-for-woocommerce' ),
			'FO08' => __( 'Tvøroyrar kommuna', 'my-country-states-for-woocommerce' ),
			'FO09' => __( 'Sandoyar kommuna', 'my-country-states-for-woocommerce' ),
			'FO10' => __( 'Hvalbiar kommuna', 'my-country-states-for-woocommerce' ),
			'FO11' => __( 'Streymoyar kommuna', 'my-country-states-for-woocommerce' ),
			'FO12' => __( 'Vága kommuna', 'my-country-states-for-woocommerce' ),
			'FO13' => __( 'Húsavíkar kommuna', 'my-country-states-for-woocommerce' ),
			'FO14' => __( 'Skúvoyar kommuna', 'my-country-states-for-woocommerce' ),
			'FO15' => __( 'Suðuroyar kommuna', 'my-country-states-for-woocommerce' ),
			'FO16' => __( 'Kollafjarðar kommuna', 'my-country-states-for-woocommerce' ),
			'FO17' => __( 'Hóyvíkar kommuna', 'my-country-states-for-woocommerce' ),
			'FO18' => __( 'Skálavíkar kommuna', 'my-country-states-for-woocommerce' ),
			'FO19' => __( 'Kvívíkar kommuna', 'my-country-states-for-woocommerce' ),
			'FO20' => __( 'Miðvágs kommuna', 'my-country-states-for-woocommerce' ),
			'FO21' => __( 'Sørvágs kommuna', 'my-country-states-for-woocommerce' ),
			'FO22' => __( 'Vágar Airport', 'my-country-states-for-woocommerce' ),
			'FO23' => __( 'Klaksvíkar kommuna (also listed separately)', 'my-country-states-for-woocommerce' ),
			'FO24' => __( 'Nes kommuna (also listed separately)', 'my-country-states-for-woocommerce' ),
			'FO25' => __( 'Sandoyar kommuna (also listed separately)', 'my-country-states-for-woocommerce' ),
			'FO26' => __( 'Streymoyar kommuna (also listed separately)', 'my-country-states-for-woocommerce' ),
			'FO27' => __( 'Suðuroyar kommuna (also listed separately)', 'my-country-states-for-woocommerce' ),
			'FO28' => __( 'Tórshavnar kommuna (also listed separately)', 'my-country-states-for-woocommerce' ),
			'FO29' => __( 'Vága kommuna (also listed separately)', 'my-country-states-for-woocommerce' ),
			'FO30' => __( 'Eysturkommuna (also listed separately)', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_fo', $states );
	}

	/**
	 * States / Provinces of Fiji.
	 *
	 * Return the array of states/provinces of Fiji. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_fj() {

		$states = array(
			'FJ01' => __( 'Central', 'my-country-states-for-woocommerce' ),
			'FJ02' => __( 'Eastern', 'my-country-states-for-woocommerce' ),
			'FJ03' => __( 'Northern', 'my-country-states-for-woocommerce' ),
			'FJ04' => __( 'Rotuma', 'my-country-states-for-woocommerce' ),
			'FJ05' => __( 'Western', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_fj', $states );
	}

	/**
	 * States / Provinces of Finland.
	 *
	 * Return the array of states/provinces of Finland. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_fi() {

		$states = array(
			'FI01' => __( 'Åland Islands', 'my-country-states-for-woocommerce' ),
			'FI02' => __( 'Central Finland', 'my-country-states-for-woocommerce' ),
			'FI03' => __( 'Central Ostrobothnia', 'my-country-states-for-woocommerce' ),
			'FI04' => __( 'Eastern Finland', 'my-country-states-for-woocommerce' ),
			'FI05' => __( 'Kainuu', 'my-country-states-for-woocommerce' ),
			'FI06' => __( 'Kymenlaakso', 'my-country-states-for-woocommerce' ),
			'FI07' => __( 'Lapland', 'my-country-states-for-woocommerce' ),
			'FI08' => __( 'North Karelia', 'my-country-states-for-woocommerce' ),
			'FI09' => __( 'Northern Ostrobothnia', 'my-country-states-for-woocommerce' ),
			'FI10' => __( 'Northern Savonia', 'my-country-states-for-woocommerce' ),
			'FI11' => __( 'Ostrobothnia', 'my-country-states-for-woocommerce' ),
			'FI12' => __( 'Päijät-Häme', 'my-country-states-for-woocommerce' ),
			'FI13' => __( 'Pirkanmaa', 'my-country-states-for-woocommerce' ),
			'FI14' => __( 'Satakunta', 'my-country-states-for-woocommerce' ),
			'FI15' => __( 'South Karelia', 'my-country-states-for-woocommerce' ),
			'FI16' => __( 'Southern Ostrobothnia', 'my-country-states-for-woocommerce' ),
			'FI17' => __( 'Southern Savonia', 'my-country-states-for-woocommerce' ),
			'FI18' => __( 'Southwest Finland', 'my-country-states-for-woocommerce' ),
			'FI19' => __( 'Tavastia Proper', 'my-country-states-for-woocommerce' ),
			'FI20' => __( 'Uusimaa', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_fi', $states );
	}

	/**
	 * States / Provinces of France.
	 *
	 * Return the array of states/provinces of France. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_fr() {

		$states = array(
			'FR01' => __( 'Auvergne-Rhône-Alpes', 'my-country-states-for-woocommerce' ),
			'FR02' => __( 'Bourgogne-Franche-Comté', 'my-country-states-for-woocommerce' ),
			'FR03' => __( 'Bretagne (Brittany)', 'my-country-states-for-woocommerce' ),
			'FR04' => __( 'Centre-Val de Loire', 'my-country-states-for-woocommerce' ),
			'FR05' => __( 'Corse (Corsica)', 'my-country-states-for-woocommerce' ),
			'FR06' => __( 'Grand Est (Alsace, Champagne-Ardenne, and Lorraine)', 'my-country-states-for-woocommerce' ),
			'FR07' => __( 'Hauts-de-France (Nord-Pas-de-Calais and Picardie)', 'my-country-states-for-woocommerce' ),
			'FR08' => __( 'Île-de-France (Paris and surrounding area)', 'my-country-states-for-woocommerce' ),
			'FR09' => __( 'Normandie (Normandy)', 'my-country-states-for-woocommerce' ),
			'FR10' => __( 'Nouvelle-Aquitaine', 'my-country-states-for-woocommerce' ),
			'FR11' => __( 'Occitanie (Languedoc-Roussillon and Midi-Pyrénées)', 'my-country-states-for-woocommerce' ),
			'FR12' => __( 'Pays de la Loire', 'my-country-states-for-woocommerce' ),
			'FR13' => __( 'Provence-Alpes-Côte d\'Azur (French Riviera)', 'my-country-states-for-woocommerce' ),
			'FR14' => __( 'Guadeloupe', 'my-country-states-for-woocommerce' ),
			'FR15' => __( 'Martinique', 'my-country-states-for-woocommerce' ),
			'FR16' => __( 'Guyane (French Guiana)', 'my-country-states-for-woocommerce' ),
			'FR17' => __( 'Réunion', 'my-country-states-for-woocommerce' ),
			'FR18' => __( 'Mayotte', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_fr', $states );
	}

	/**
	 * States / Provinces of French Guiana.
	 *
	 * Return the array of states/provinces of French Guiana. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_gf() {

		$states = array(
			'GF01' => __( 'Guyane', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_gf', $states );
	}

	/**
	 * States / Provinces of French Polynesia.
	 *
	 * Return the array of states/provinces of French Polynesia. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_pf() {

		$states = array(
			'PF01' => __( 'Society Islands', 'my-country-states-for-woocommerce' ),
			'PF02' => __( 'Tuamotu Archipelago', 'my-country-states-for-woocommerce' ),
			'PF03' => __( 'Gambier Islands', 'my-country-states-for-woocommerce' ),
			'PF04' => __( 'Marquesas Islands', 'my-country-states-for-woocommerce' ),
			'PF05' => __( 'Austral Islands', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_pf', $states );
	}

	/**
	 * States / Provinces of French Southern Territories.
	 *
	 * Return the array of states/provinces of French Southern Territories. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_tf() {

		$states = array(
			'TF01' => __( 'Kerguelen Islands', 'my-country-states-for-woocommerce' ),
			'TF02' => __( 'St. Paul and Amsterdam Islands', 'my-country-states-for-woocommerce' ),
			'TF03' => __( 'Crozet Islands', 'my-country-states-for-woocommerce' ),
			'TF04' => __( 'Adelie Land', 'my-country-states-for-woocommerce' ),
			'TF05' => __( 'Scattered Islands (Îles Éparses)', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_tf', $states );
	}

	/**
	 * States / Provinces of Gabon.
	 *
	 * Return the array of states/provinces of Gabon. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_ga() {

		$states = array(
			'GA01' => __( 'Estuaire', 'my-country-states-for-woocommerce' ),
			'GA02' => __( 'Haut-Ogooué', 'my-country-states-for-woocommerce' ),
			'GA03' => __( 'Moyen-Ogooué', 'my-country-states-for-woocommerce' ),
			'GA04' => __( 'Ngounié', 'my-country-states-for-woocommerce' ),
			'GA05' => __( 'Nyanga', 'my-country-states-for-woocommerce' ),
			'GA06' => __( 'Ogooué-Ivindo', 'my-country-states-for-woocommerce' ),
			'GA07' => __( 'Ogooué-Lolo', 'my-country-states-for-woocommerce' ),
			'GA08' => __( 'Ogooué-Maritime', 'my-country-states-for-woocommerce' ),
			'GA09' => __( 'Woleu-Ntem', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_ga', $states );
	}

	/**
	 * States / Provinces of Gambia.
	 *
	 * Return the array of states/provinces of Gambia. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_gm() {

		$states = array(
			'GM01' => __( 'Banjul', 'my-country-states-for-woocommerce' ),
			'GM02' => __( 'Central River', 'my-country-states-for-woocommerce' ),
			'GM03' => __( 'Lower River', 'my-country-states-for-woocommerce' ),
			'GM04' => __( 'North Bank', 'my-country-states-for-woocommerce' ),
			'GM05' => __( 'Upper River', 'my-country-states-for-woocommerce' ),
			'GM06' => __( 'West Coast', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_gm', $states );
	}

	/**
	 * States / Provinces of Georgia.
	 *
	 * Return the array of states/provinces of Georgia. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_ge() {

		$states = array(
			'GE01' => __( 'Abkhazia', 'my-country-states-for-woocommerce' ),
			'GE02' => __( 'Adjara', 'my-country-states-for-woocommerce' ),
			'GE03' => __( 'Guria', 'my-country-states-for-woocommerce' ),
			'GE04' => __( 'Imereti', 'my-country-states-for-woocommerce' ),
			'GE05' => __( 'Kakheti', 'my-country-states-for-woocommerce' ),
			'GE06' => __( 'Kvemo Kartli', 'my-country-states-for-woocommerce' ),
			'GE07' => __( 'Mtskheta-Mtianeti', 'my-country-states-for-woocommerce' ),
			'GE08' => __( 'Racha-Lechkhumi and Kvemo Svaneti', 'my-country-states-for-woocommerce' ),
			'GE09' => __( 'Samegrelo-Zemo Svaneti', 'my-country-states-for-woocommerce' ),
			'GE10' => __( 'Samtskhe-Javakheti', 'my-country-states-for-woocommerce' ),
			'GE11' => __( 'Shida Kartli', 'my-country-states-for-woocommerce' ),
			'GE12' => __( 'Tbilisi (capital city)', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_ge', $states );
	}

	/**
	 * States / Provinces of Gibraltar.
	 *
	 * Return the array of states/provinces of Gibraltar. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_gi() {

		// Gibraltar does not have any states or provinces. It is a small British Overseas Territory located on the southern coast of Spain.
		$states = array();

		return apply_filters( 'mcsfwc_states_of_gi', $states );
	}

	/**
	 * States / Provinces of Greenland.
	 *
	 * Return the array of states/provinces of Greenland. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_gl() {

		$states = array(
			'GL01' => __( 'Sermersooq', 'my-country-states-for-woocommerce' ),
			'GL02' => __( 'Kujalleq', 'my-country-states-for-woocommerce' ),
			'GL03' => __( 'Qeqertalik', 'my-country-states-for-woocommerce' ),
			'GL04' => __( 'Qeqqata', 'my-country-states-for-woocommerce' ),
			'GL05' => __( 'Avannaata', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_gl', $states );
	}

	/**
	 * States / Provinces of Grenada.
	 *
	 * Return the array of states/provinces of Grenada. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_gd() {

		// Unfortunately, Grenada does not have provinces or states as it is a small island country.
		$states = array();

		return apply_filters( 'mcsfwc_states_of_gd', $states );
	}

	/**
	 * States / Provinces of Guadeloupe.
	 *
	 * Return the array of states/provinces of Guadeloupe. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_gp() {

		$states = array(
			'GP01' => __( 'Les Abymes', 'my-country-states-for-woocommerce' ),
			'GP02' => __( 'Sainte-Anne', 'my-country-states-for-woocommerce' ),
			'GP03' => __( 'Baie-Mahault', 'my-country-states-for-woocommerce' ),
			'GP04' => __( 'Le Gosier', 'my-country-states-for-woocommerce' ),
			'GP05' => __( 'Capesterre-Belle-Eau', 'my-country-states-for-woocommerce' ),
			'GP06' => __( 'Petit-Bourg', 'my-country-states-for-woocommerce' ),
			'GP07' => __( 'Morne-à-l\'Eau', 'my-country-states-for-woocommerce' ),
			'GP08' => __( 'Saint-François', 'my-country-states-for-woocommerce' ),
			'GP09' => __( 'Pointe-à-Pitre', 'my-country-states-for-woocommerce' ),
			'GP10' => __( 'Lamentin', 'my-country-states-for-woocommerce' ),
			'GP11' => __( 'Goyave', 'my-country-states-for-woocommerce' ),
			'GP12' => __( 'Saint-Claude', 'my-country-states-for-woocommerce' ),
			'GP13' => __( 'Trois-Rivières', 'my-country-states-for-woocommerce' ),
			'GP14' => __( 'Bouillante', 'my-country-states-for-woocommerce' ),
			'GP15' => __( 'Deshaies', 'my-country-states-for-woocommerce' ),
			'GP16' => __( 'Vieux-Habitants', 'my-country-states-for-woocommerce' ),
			'GP17' => __( 'Saint-Louis', 'my-country-states-for-woocommerce' ),
			'GP18' => __( 'Terre-de-Bas', 'my-country-states-for-woocommerce' ),
			'GP19' => __( 'Terre-de-Haut', 'my-country-states-for-woocommerce' ),
			'GP20' => __( 'Grand-Bourg', 'my-country-states-for-woocommerce' ),
			'GP21' => __( 'La Désirade', 'my-country-states-for-woocommerce' ),
			'GP22' => __( 'Pointe-Noire', 'my-country-states-for-woocommerce' ),
			'GP23' => __( 'Port-Louis', 'my-country-states-for-woocommerce' ),
			'GP24' => __( 'Anse-Bertrand', 'my-country-states-for-woocommerce' ),
			'GP25' => __( 'Capesterre-de-Marie-Galante', 'my-country-states-for-woocommerce' ),
			'GP26' => __( 'Grand-Bourg de Marie-Galante', 'my-country-states-for-woocommerce' ),
			'GP27' => __( 'Saint-Louis de Marie-Galante', 'my-country-states-for-woocommerce' ),
			'GP28' => __( 'Terre-de-Bas de Marie-Galante', 'my-country-states-for-woocommerce' ),
			'GP29' => __( 'Terre-de-Haut de Marie-Galante', 'my-country-states-for-woocommerce' ),
			'GP30' => __( 'L\'Île-d\'Yeu', 'my-country-states-for-woocommerce' ),
			'GP31' => __( 'Clisson', 'my-country-states-for-woocommerce' ),
			'GP32' => __( 'Vertou', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_gp', $states );
	}

	/**
	 * States / Provinces of Guam.
	 *
	 * Return the array of states/provinces of Guam. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_gu() {

		$states = array(
			'GU01' => __( 'Agana Heights', 'my-country-states-for-woocommerce' ),
			'GU02' => __( 'Agat', 'my-country-states-for-woocommerce' ),
			'GU03' => __( 'Asan', 'my-country-states-for-woocommerce' ),
			'GU04' => __( 'Barrigada', 'my-country-states-for-woocommerce' ),
			'GU05' => __( 'Chalan Pago-Ordot', 'my-country-states-for-woocommerce' ),
			'GU06' => __( 'Dededo', 'my-country-states-for-woocommerce' ),
			'GU07' => __( 'Hagatna', 'my-country-states-for-woocommerce' ),
			'GU08' => __( 'Inarajan', 'my-country-states-for-woocommerce' ),
			'GU09' => __( 'Mangilao', 'my-country-states-for-woocommerce' ),
			'GU10' => __( 'Merizo', 'my-country-states-for-woocommerce' ),
			'GU11' => __( 'Mongmong-Toto-Maite', 'my-country-states-for-woocommerce' ),
			'GU12' => __( 'Piti', 'my-country-states-for-woocommerce' ),
			'GU13' => __( 'Santa Rita', 'my-country-states-for-woocommerce' ),
			'GU14' => __( 'Sinajana', 'my-country-states-for-woocommerce' ),
			'GU15' => __( 'Talofofo', 'my-country-states-for-woocommerce' ),
			'GU16' => __( 'Tamuning', 'my-country-states-for-woocommerce' ),
			'GU17' => __( 'Umatac', 'my-country-states-for-woocommerce' ),
			'GU18' => __( 'Yigo', 'my-country-states-for-woocommerce' ),
			'GU19' => __( 'Yona', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_gu', $states );
	}

	/**
	 * States / Provinces of Guernsey.
	 *
	 * Return the array of states/provinces of Guernsey. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_gg() {

		$states = array(
			'GG01' => __( 'Castel', 'my-country-states-for-woocommerce' ),
			'GG02' => __( 'Forest', 'my-country-states-for-woocommerce' ),
			'GG03' => __( 'St Andrew', 'my-country-states-for-woocommerce' ),
			'GG04' => __( 'St Martin', 'my-country-states-for-woocommerce' ),
			'GG05' => __( 'St Peter Port', 'my-country-states-for-woocommerce' ),
			'GG06' => __( 'St Pierre du Bois', 'my-country-states-for-woocommerce' ),
			'GG07' => __( 'St Sampson', 'my-country-states-for-woocommerce' ),
			'GG08' => __( 'St Saviour', 'my-country-states-for-woocommerce' ),
			'GG09' => __( 'Torteval', 'my-country-states-for-woocommerce' ),
			'GG10' => __( 'Vale', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_gg', $states );
	}

	/**
	 * States / Provinces of Guinea.
	 *
	 * Return the array of states/provinces of Guinea. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_gn() {

		$states = array(
			'GN01' => __( 'Boké', 'my-country-states-for-woocommerce' ),
			'GN02' => __( 'Conakry', 'my-country-states-for-woocommerce' ),
			'GN03' => __( 'Faranah', 'my-country-states-for-woocommerce' ),
			'GN04' => __( 'Kankan', 'my-country-states-for-woocommerce' ),
			'GN05' => __( 'Kindia', 'my-country-states-for-woocommerce' ),
			'GN06' => __( 'Labé', 'my-country-states-for-woocommerce' ),
			'GN07' => __( 'Mamou', 'my-country-states-for-woocommerce' ),
			'GN08' => __( 'Nzérékoré', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_gn', $states );
	}

	/**
	 * States / Provinces of Guinea-Bissau.
	 *
	 * Return the array of states/provinces of Guinea-Bissau. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_gw() {

		$states = array(
			'GW01' => __( 'Bafatá', 'my-country-states-for-woocommerce' ),
			'GW02' => __( 'Biombo', 'my-country-states-for-woocommerce' ),
			'GW03' => __( 'Bissau', 'my-country-states-for-woocommerce' ),
			'GW04' => __( 'Bolama', 'my-country-states-for-woocommerce' ),
			'GW05' => __( 'Cacheu', 'my-country-states-for-woocommerce' ),
			'GW06' => __( 'Gabú', 'my-country-states-for-woocommerce' ),
			'GW07' => __( 'Oio', 'my-country-states-for-woocommerce' ),
			'GW08' => __( 'Quinara', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_gw', $states );
	}

	/**
	 * States / Provinces of Guyana.
	 *
	 * Return the array of states/provinces of Guyana. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_gy() {

		$states = array(
			'GY01' => __( 'Barima-Waini', 'my-country-states-for-woocommerce' ),
			'GY02' => __( 'Cuyuni-Mazaruni', 'my-country-states-for-woocommerce' ),
			'GY03' => __( 'Demerara-Mahaica', 'my-country-states-for-woocommerce' ),
			'GY04' => __( 'East Berbice-Corentyne', 'my-country-states-for-woocommerce' ),
			'GY05' => __( 'Essequibo Islands-West Demerara', 'my-country-states-for-woocommerce' ),
			'GY06' => __( 'Mahaica-Berbice', 'my-country-states-for-woocommerce' ),
			'GY07' => __( 'Pomeroon-Supenaam', 'my-country-states-for-woocommerce' ),
			'GY08' => __( 'Potaro-Siparuni', 'my-country-states-for-woocommerce' ),
			'GY09' => __( 'Upper Demerara-Berbice', 'my-country-states-for-woocommerce' ),
			'GY10' => __( 'Upper Takutu-Upper Essequibo', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_gy', $states );
	}

	/**
	 * States / Provinces of Haiti.
	 *
	 * Return the array of states/provinces of Haiti. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_ht() {

		$states = array(
			'HT01' => __( 'Artibonite', 'my-country-states-for-woocommerce' ),
			'HT02' => __( 'Centre', 'my-country-states-for-woocommerce' ),
			'HT03' => __( 'Grand\'Anse', 'my-country-states-for-woocommerce' ),
			'HT04' => __( 'Nippes', 'my-country-states-for-woocommerce' ),
			'HT05' => __( 'Nord', 'my-country-states-for-woocommerce' ),
			'HT06' => __( 'Nord-Est', 'my-country-states-for-woocommerce' ),
			'HT07' => __( 'Nord-Ouest', 'my-country-states-for-woocommerce' ),
			'HT08' => __( 'Ouest', 'my-country-states-for-woocommerce' ),
			'HT09' => __( 'Sud', 'my-country-states-for-woocommerce' ),
			'HT10' => __( 'Sud-Est', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_ht', $states );
	}

	/**
	 * States / Provinces of Heard Island and McDonald Islands.
	 *
	 * Return the array of states/provinces of Heard Island and McDonald Islands. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_hm() {

		// Heard Island and McDonald Islands do not have any provinces or states, as they are uninhabited territories under the jurisdiction of Australia.
		$states = array();

		return apply_filters( 'mcsfwc_states_of_hm', $states );
	}

	/**
	 * States / Provinces of Iceland.
	 *
	 * Return the array of states/provinces of Iceland. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_is() {

		$states = array(
			'IS01' => __( 'Capital Region', 'my-country-states-for-woocommerce' ),
			'IS02' => __( 'Southern Peninsula Region', 'my-country-states-for-woocommerce' ),
			'IS03' => __( 'West Region', 'my-country-states-for-woocommerce' ),
			'IS04' => __( 'Westfjords Region', 'my-country-states-for-woocommerce' ),
			'IS05' => __( 'Northwest Region', 'my-country-states-for-woocommerce' ),
			'IS06' => __( 'Northeast Region', 'my-country-states-for-woocommerce' ),
			'IS07' => __( 'East Region', 'my-country-states-for-woocommerce' ),
			'IS08' => __( 'South Region', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_is', $states );
	}

	/**
	 * States / Provinces of Iraq.
	 *
	 * Return the array of states/provinces of Iraq. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_iq() {

		$states = array(
			'IQ01' => __( 'Baghdad', 'my-country-states-for-woocommerce' ),
			'IQ02' => __( 'Salah ad Din', 'my-country-states-for-woocommerce' ),
			'IQ03' => __( 'Diyala', 'my-country-states-for-woocommerce' ),
			'IQ04' => __( 'Wasit', 'my-country-states-for-woocommerce' ),
			'IQ05' => __( 'Maysan', 'my-country-states-for-woocommerce' ),
			'IQ06' => __( 'Dhi Qar', 'my-country-states-for-woocommerce' ),
			'IQ07' => __( 'Al-Basrah', 'my-country-states-for-woocommerce' ),
			'IQ08' => __( 'Al-Muthanna', 'my-country-states-for-woocommerce' ),
			'IQ09' => __( 'Al-Qadisiyyah', 'my-country-states-for-woocommerce' ),
			'IQ10' => __( 'Babil', 'my-country-states-for-woocommerce' ),
			'IQ11' => __( 'Karbala', 'my-country-states-for-woocommerce' ),
			'IQ12' => __( 'Najaf', 'my-country-states-for-woocommerce' ),
			'IQ13' => __( 'Al-Anbar', 'my-country-states-for-woocommerce' ),
			'IQ14' => __( 'Al-Mawsil (Nineveh)', 'my-country-states-for-woocommerce' ),
			'IQ15' => __( 'Duhok', 'my-country-states-for-woocommerce' ),
			'IQ16' => __( 'Arbil (Erbil)', 'my-country-states-for-woocommerce' ),
			'IQ17' => __( 'Sulaymaniyah', 'my-country-states-for-woocommerce' ),
			'IQ18' => __( 'Halabja', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_iq', $states );
	}

	/**
	 * States / Provinces of Isle of Man.
	 *
	 * Return the array of states/provinces of Isle of Man. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_im() {

		$states = array(
			'IM01' => __( 'Arbory', 'my-country-states-for-woocommerce' ),
			'IM02' => __( 'Ballaugh', 'my-country-states-for-woocommerce' ),
			'IM03' => __( 'Braddan', 'my-country-states-for-woocommerce' ),
			'IM04' => __( 'Bride', 'my-country-states-for-woocommerce' ),
			'IM05' => __( 'German', 'my-country-states-for-woocommerce' ),
			'IM06' => __( 'Marown', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_im', $states );
	}

	/**
	 * States / Provinces of Israel.
	 *
	 * Return the array of states/provinces of Israel. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_il() {

		$states = array(
			'IL01' => __( 'Northern District', 'my-country-states-for-woocommerce' ),
			'IL02' => __( 'Haifa District', 'my-country-states-for-woocommerce' ),
			'IL03' => __( 'Central District', 'my-country-states-for-woocommerce' ),
			'IL04' => __( 'Tel Aviv District', 'my-country-states-for-woocommerce' ),
			'IL05' => __( 'Southern District', 'my-country-states-for-woocommerce' ),
			'IL06' => __( 'Jerusalem District', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_il', $states );
	}

	/**
	 * States / Provinces of Ivory Coast.
	 *
	 * Return the array of states/provinces of Ivory Coast. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_ci() {

		$states = array(
			'CI01' => __( 'Agnéby', 'my-country-states-for-woocommerce' ),
			'CI02' => __( 'Bafing', 'my-country-states-for-woocommerce' ),
			'CI03' => __( 'Bagoué', 'my-country-states-for-woocommerce' ),
			'CI04' => __( 'Bélier', 'my-country-states-for-woocommerce' ),
			'CI05' => __( 'Béré', 'my-country-states-for-woocommerce' ),
			'CI06' => __( 'Cavally', 'my-country-states-for-woocommerce' ),
			'CI07' => __( 'Folon', 'my-country-states-for-woocommerce' ),
			'CI08' => __( 'Fromager', 'my-country-states-for-woocommerce' ),
			'CI09' => __( 'Gbêkê', 'my-country-states-for-woocommerce' ),
			'CI10' => __( 'Gbôklé', 'my-country-states-for-woocommerce' ),
			'CI11' => __( 'Hambol', 'my-country-states-for-woocommerce' ),
			'CI12' => __( 'Indénié-Djuablin', 'my-country-states-for-woocommerce' ),
			'CI13' => __( 'Kabadougou', 'my-country-states-for-woocommerce' ),
			'CI14' => __( 'La Mé', 'my-country-states-for-woocommerce' ),
			'CI15' => __( 'Lacs', 'my-country-states-for-woocommerce' ),
			'CI16' => __( 'Lagunes', 'my-country-states-for-woocommerce' ),
			'CI17' => __( 'Marahoué', 'my-country-states-for-woocommerce' ),
			'CI18' => __( 'Montagnes', 'my-country-states-for-woocommerce' ),
			'CI19' => __( 'Moronou', 'my-country-states-for-woocommerce' ),
			'CI20' => __( 'Nawa', 'my-country-states-for-woocommerce' ),
			'CI21' => __( 'N\'zi-Comoé', 'my-country-states-for-woocommerce' ),
			'CI22' => __( 'Poro', 'my-country-states-for-woocommerce' ),
			'CI23' => __( 'San-Pédro', 'my-country-states-for-woocommerce' ),
			'CI24' => __( 'Sassandra-Marahoué', 'my-country-states-for-woocommerce' ),
			'CI25' => __( 'Savanes', 'my-country-states-for-woocommerce' ),
			'CI26' => __( 'Sud-Bandama', 'my-country-states-for-woocommerce' ),
			'CI27' => __( 'Sud-Comoé', 'my-country-states-for-woocommerce' ),
			'CI28' => __( 'Vallée du Bandama', 'my-country-states-for-woocommerce' ),
			'CI29' => __( 'Woroba', 'my-country-states-for-woocommerce' ),
			'CI30' => __( 'Yamoussoukro', 'my-country-states-for-woocommerce' ),
			'CI31' => __( 'Zanzan', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_ci', $states );
	}

	/**
	 * States / Provinces of Jersey.
	 *
	 * Return the array of states/provinces of Jersey. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_je() {

		$states = array(
			'JE01' => __( 'Grouville', 'my-country-states-for-woocommerce' ),
			'JE02' => __( 'St. Brelade', 'my-country-states-for-woocommerce' ),
			'JE03' => __( 'St. Clement', 'my-country-states-for-woocommerce' ),
			'JE04' => __( 'St. Helier', 'my-country-states-for-woocommerce' ),
			'JE05' => __( 'St. John', 'my-country-states-for-woocommerce' ),
			'JE06' => __( 'St. Lawrence', 'my-country-states-for-woocommerce' ),
			'JE07' => __( 'St. Martin', 'my-country-states-for-woocommerce' ),
			'JE08' => __( 'St. Mary', 'my-country-states-for-woocommerce' ),
			'JE09' => __( 'St. Ouen', 'my-country-states-for-woocommerce' ),
			'JE10' => __( 'St. Peter', 'my-country-states-for-woocommerce' ),
			'JE11' => __( 'St. Saviour', 'my-country-states-for-woocommerce' ),
			'JE12' => __( 'Trinity', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_je', $states );
	}

	/**
	 * States / Provinces of Jordan.
	 *
	 * Return the array of states/provinces of Jordan. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_jo() {

		$states = array(
			'JO01' => __( 'Amman', 'my-country-states-for-woocommerce' ),
			'JO02' => __( 'Irbid', 'my-country-states-for-woocommerce' ),
			'JO03' => __( 'Zarqa', 'my-country-states-for-woocommerce' ),
			'JO04' => __( 'Balqa', 'my-country-states-for-woocommerce' ),
			'JO05' => __( 'Madaba', 'my-country-states-for-woocommerce' ),
			'JO06' => __( 'Karak', 'my-country-states-for-woocommerce' ),
			'JO07' => __( 'Tafilah', 'my-country-states-for-woocommerce' ),
			'JO08' => __( 'Ma\'an', 'my-country-states-for-woocommerce' ),
			'JO09' => __( 'Aqaba', 'my-country-states-for-woocommerce' ),
			'JO10' => __( 'Jerash', 'my-country-states-for-woocommerce' ),
			'JO11' => __( 'Mafraq', 'my-country-states-for-woocommerce' ),
			'JO12' => __( 'Ajloun', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_jo', $states );
	}

	/**
	 * States / Provinces of Kazakhstan.
	 *
	 * Return the array of states/provinces of Kazakhstan. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_kz() {

		$states = array(
			'KZ01' => __( 'Akmola Province', 'my-country-states-for-woocommerce' ),
			'KZ02' => __( 'Aktobe Province', 'my-country-states-for-woocommerce' ),
			'KZ03' => __( 'Almaty Province', 'my-country-states-for-woocommerce' ),
			'KZ04' => __( 'Atyrau Province', 'my-country-states-for-woocommerce' ),
			'KZ05' => __( 'East Kazakhstan Province', 'my-country-states-for-woocommerce' ),
			'KZ06' => __( 'Jambyl Province', 'my-country-states-for-woocommerce' ),
			'KZ07' => __( 'Karaganda Province', 'my-country-states-for-woocommerce' ),
			'KZ08' => __( 'Kostanay Province', 'my-country-states-for-woocommerce' ),
			'KZ09' => __( 'Kyzylorda Province', 'my-country-states-for-woocommerce' ),
			'KZ10' => __( 'Mangystau Province', 'my-country-states-for-woocommerce' ),
			'KZ11' => __( 'North Kazakhstan Province', 'my-country-states-for-woocommerce' ),
			'KZ12' => __( 'Pavlodar Province', 'my-country-states-for-woocommerce' ),
			'KZ13' => __( 'Turkestan Province', 'my-country-states-for-woocommerce' ),
			'KZ14' => __( 'West Kazakhstan Province', 'my-country-states-for-woocommerce' ),
			'KZ15' => __( 'Almaty', 'my-country-states-for-woocommerce' ),
			'KZ16' => __( 'Nur-Sultan (formerly Astana)', 'my-country-states-for-woocommerce' ),
			'KZ17' => __( 'Baikonur', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_kz', $states );
	}

	/**
	 * States / Provinces of Kiribati.
	 *
	 * Return the array of states/provinces of Kiribati. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_ki() {

		$states = array(
			'KI01' => __( 'the Gilbert Islands', 'my-country-states-for-woocommerce' ),
			'KI02' => __( 'the Phoenix Islands', 'my-country-states-for-woocommerce' ),
			'KI03' => __( 'the Line Islands', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_ki', $states );
	}

	/**
	 * States / Provinces of Kuwait.
	 *
	 * Return the array of states/provinces of Kuwait. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_kw() {

		$states = array(
			'KW01' => __( 'Al Ahmadi', 'my-country-states-for-woocommerce' ),
			'KW02' => __( 'Al Farwaniyah', 'my-country-states-for-woocommerce' ),
			'KW03' => __( 'Al Asimah', 'my-country-states-for-woocommerce' ),
			'KW04' => __( 'Al Jahra', 'my-country-states-for-woocommerce' ),
			'KW05' => __( 'Hawalli', 'my-country-states-for-woocommerce' ),
			'KW06' => __( 'Mubarak Al-Kabeer', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_kw', $states );
	}

	/**
	 * States / Provinces of Kyrgyzstan.
	 *
	 * Return the array of states/provinces of Kyrgyzstan. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_kg() {

		$states = array(
			'KG01' => __( 'Batken Province', 'my-country-states-for-woocommerce' ),
			'KG02' => __( 'Chuy Province', 'my-country-states-for-woocommerce' ),
			'KG03' => __( 'Issyk-Kul Province', 'my-country-states-for-woocommerce' ),
			'KG04' => __( 'Jalal-Abad Province', 'my-country-states-for-woocommerce' ),
			'KG05' => __( 'Naryn Province', 'my-country-states-for-woocommerce' ),
			'KG06' => __( 'Osh Province', 'my-country-states-for-woocommerce' ),
			'KG07' => __( 'Talas Province', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_kg', $states );
	}

	/**
	 * States / Provinces of Latvia.
	 *
	 * Return the array of states/provinces of Latvia. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_lv() {

		$states = array(
			'LV01' => __( 'Daugavpils', 'my-country-states-for-woocommerce' ),
			'LV02' => __( 'Jelgava', 'my-country-states-for-woocommerce' ),
			'LV03' => __( 'Jūrmala', 'my-country-states-for-woocommerce' ),
			'LV04' => __( 'Liepāja', 'my-country-states-for-woocommerce' ),
			'LV05' => __( 'Rēzekne', 'my-country-states-for-woocommerce' ),
			'LV06' => __( 'Riga', 'my-country-states-for-woocommerce' ),
			'LV07' => __( 'Valmiera', 'my-country-states-for-woocommerce' ),
			'LV08' => __( 'Ventspils', 'my-country-states-for-woocommerce' ),
			'LV09' => __( 'Ogre', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_lv', $states );
	}

	/**
	 * States / Provinces of Lebanon.
	 *
	 * Return the array of states/provinces of Lebanon. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_lb() {

		$states = array(
			'LB01' => __( 'Beirut', 'my-country-states-for-woocommerce' ),
			'LB02' => __( 'Mount Lebanon', 'my-country-states-for-woocommerce' ),
			'LB03' => __( 'North Governorate', 'my-country-states-for-woocommerce' ),
			'LB04' => __( 'South Governorate', 'my-country-states-for-woocommerce' ),
			'LB05' => __( 'Beqaa Governorate', 'my-country-states-for-woocommerce' ),
			'LB06' => __( 'Nabatieh Governorate', 'my-country-states-for-woocommerce' ),
			'LB07' => __( 'Akkar Governorate', 'my-country-states-for-woocommerce' ),
			'LB08' => __( 'Baalbek-Hermel Governorate', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_lb', $states );
	}

	/**
	 * States / Provinces of Lesotho.
	 *
	 * Return the array of states/provinces of Lesotho. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_ls() {

		$states = array(
			'LS01' => __( 'Butha-Buthe', 'my-country-states-for-woocommerce' ),
			'LS02' => __( 'Leribe', 'my-country-states-for-woocommerce' ),
			'LS03' => __( 'Mafeteng', 'my-country-states-for-woocommerce' ),
			'LS04' => __( 'Maseru', 'my-country-states-for-woocommerce' ),
			'LS05' => __( 'Mohale\'s Hoek', 'my-country-states-for-woocommerce' ),
			'LS06' => __( 'Mokhotlong', 'my-country-states-for-woocommerce' ),
			'LS07' => __( 'Qacha\'s Nek', 'my-country-states-for-woocommerce' ),
			'LS08' => __( 'Quthing', 'my-country-states-for-woocommerce' ),
			'LS09' => __( 'Thaba-Tseka', 'my-country-states-for-woocommerce' ),
			'LS10' => __( 'Berea', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_ls', $states );
	}

	/**
	 * States / Provinces of Libya.
	 *
	 * Return the array of states/provinces of Libya. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_ly() {

		$states = array(
			'LY01' => __( 'Tripoli', 'my-country-states-for-woocommerce' ),
			'LY02' => __( 'Benghazi', 'my-country-states-for-woocommerce' ),
			'LY03' => __( 'Murqub', 'my-country-states-for-woocommerce' ),
			'LY04' => __( 'Jabal al Gharbi', 'my-country-states-for-woocommerce' ),
			'LY05' => __( 'Al Wahat', 'my-country-states-for-woocommerce' ),
			'LY06' => __( 'Kufra', 'my-country-states-for-woocommerce' ),
			'LY07' => __( 'Fezzan', 'my-country-states-for-woocommerce' ),
			'LY08' => __( 'Zawiya', 'my-country-states-for-woocommerce' ),
			'LY09' => __( 'Sabratha', 'my-country-states-for-woocommerce' ),
			'LY10' => __( 'Gharyan', 'my-country-states-for-woocommerce' ),
			'LY11' => __( 'Nalut', 'my-country-states-for-woocommerce' ),
			'LY12' => __( 'Misrata', 'my-country-states-for-woocommerce' ),
			'LY13' => __( 'Ajdabiya', 'my-country-states-for-woocommerce' ),
			'LY14' => __( 'Jufra', 'my-country-states-for-woocommerce' ),
			'LY15' => __( 'Sirte', 'my-country-states-for-woocommerce' ),
			'LY16' => __( 'Wadi al Shatii', 'my-country-states-for-woocommerce' ),
			'LY17' => __( 'Al Jufrah', 'my-country-states-for-woocommerce' ),
			'LY18' => __( 'Al Marj', 'my-country-states-for-woocommerce' ),
			'LY19' => __( 'Tobruk', 'my-country-states-for-woocommerce' ),
			'LY20' => __( 'Derna', 'my-country-states-for-woocommerce' ),
			'LY21' => __( 'Sabha', 'my-country-states-for-woocommerce' ),
			'LY22' => __( 'Al Butnan', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_ly', $states );
	}

	/**
	 * States / Provinces of Liechtenstein.
	 *
	 * Return the array of states/provinces of Liechtenstein. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_li() {

		$states = array(
			'LI01' => __( 'Balzers', 'my-country-states-for-woocommerce' ),
			'LI02' => __( 'Eschen', 'my-country-states-for-woocommerce' ),
			'LI03' => __( 'Gamprin', 'my-country-states-for-woocommerce' ),
			'LI04' => __( 'Mauren', 'my-country-states-for-woocommerce' ),
			'LI05' => __( 'Planken', 'my-country-states-for-woocommerce' ),
			'LI06' => __( 'Ruggell', 'my-country-states-for-woocommerce' ),
			'LI07' => __( 'Schaan', 'my-country-states-for-woocommerce' ),
			'LI08' => __( 'Schellenberg', 'my-country-states-for-woocommerce' ),
			'LI09' => __( 'Triesen', 'my-country-states-for-woocommerce' ),
			'LI10' => __( 'Triesenberg', 'my-country-states-for-woocommerce' ),
			'LI11' => __( 'Vaduz', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_li', $states );
	}

	/**
	 * States / Provinces of Lithuania.
	 *
	 * Return the array of states/provinces of Lithuania. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_lt() {

		$states = array(
			'LT01' => __( 'Alytus County', 'my-country-states-for-woocommerce' ),
			'LT02' => __( 'Kaunas County', 'my-country-states-for-woocommerce' ),
			'LT03' => __( 'Klaipėda County', 'my-country-states-for-woocommerce' ),
			'LT04' => __( 'Marijampolė County', 'my-country-states-for-woocommerce' ),
			'LT05' => __( 'Panevėžys County', 'my-country-states-for-woocommerce' ),
			'LT06' => __( 'Šiauliai County', 'my-country-states-for-woocommerce' ),
			'LT07' => __( 'Tauragė County', 'my-country-states-for-woocommerce' ),
			'LT08' => __( 'Telšiai County', 'my-country-states-for-woocommerce' ),
			'LT09' => __( 'Utena County', 'my-country-states-for-woocommerce' ),
			'LT10' => __( 'Vilnius County', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_lt', $states );
	}

	/**
	 * States / Provinces of Luxembourg.
	 *
	 * Return the array of states/provinces of Luxembourg. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_lu() {

		$states = array(
			'LU01' => __( 'Luxembourg', 'my-country-states-for-woocommerce' ),
			'LU02' => __( 'Diekirch', 'my-country-states-for-woocommerce' ),
			'LU03' => __( 'Grevenmacher', 'my-country-states-for-woocommerce' ),
			'LU04' => __( 'Echternach', 'my-country-states-for-woocommerce' ),
			'LU05' => __( 'Remich', 'my-country-states-for-woocommerce' ),
			'LU06' => __( 'Mersch', 'my-country-states-for-woocommerce' ),
			'LU07' => __( 'Redange', 'my-country-states-for-woocommerce' ),
			'LU08' => __( 'Capellen', 'my-country-states-for-woocommerce' ),
			'LU09' => __( 'Esch-sur-Alzette', 'my-country-states-for-woocommerce' ),
			'LU10' => __( 'Luxembourg', 'my-country-states-for-woocommerce' ),
			'LU11' => __( 'Vianden', 'my-country-states-for-woocommerce' ),
			'LU12' => __( 'Wiltz', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_lu', $states );
	}

	/**
	 * States / Provinces of Macao.
	 *
	 * Return the array of states/provinces of Macao. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_mo() {

		$states = array(
			'MO01' => __( 'Our Lady of Fatima', 'my-country-states-for-woocommerce' ),
			'MO02' => __( 'St. Anthony', 'my-country-states-for-woocommerce' ),
			'MO03' => __( 'St. Lazarus', 'my-country-states-for-woocommerce' ),
			'MO04' => __( 'Cathedral', 'my-country-states-for-woocommerce' ),
			'MO05' => __( 'St. Lawrence', 'my-country-states-for-woocommerce' ),
			'MO06' => __( 'St. Joseph', 'my-country-states-for-woocommerce' ),
			'MO07' => __( 'Taipa-Coloane', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_mo', $states );
	}

	/**
	 * States / Provinces of Madagascar.
	 *
	 * Return the array of states/provinces of Madagascar. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_mg() {

		$states = array(
			'MG01' => __( 'Alaotra-Mangoro', 'my-country-states-for-woocommerce' ),
			'MG02' => __( 'Amoron\'i Mania', 'my-country-states-for-woocommerce' ),
			'MG03' => __( 'Analamanga', 'my-country-states-for-woocommerce' ),
			'MG04' => __( 'Analanjirofo', 'my-country-states-for-woocommerce' ),
			'MG05' => __( 'Androy', 'my-country-states-for-woocommerce' ),
			'MG06' => __( 'Anosy', 'my-country-states-for-woocommerce' ),
			'MG07' => __( 'Atsinanana', 'my-country-states-for-woocommerce' ),
			'MG08' => __( 'Atsimo-Andrefana', 'my-country-states-for-woocommerce' ),
			'MG09' => __( 'Atsimo-Atsinanana', 'my-country-states-for-woocommerce' ),
			'MG10' => __( 'Atsinanana', 'my-country-states-for-woocommerce' ),
			'MG11' => __( 'Betsiboka', 'my-country-states-for-woocommerce' ),
			'MG12' => __( 'Boeny', 'my-country-states-for-woocommerce' ),
			'MG13' => __( 'Bongolava', 'my-country-states-for-woocommerce' ),
			'MG14' => __( 'Diana', 'my-country-states-for-woocommerce' ),
			'MG15' => __( 'Haute Matsiatra', 'my-country-states-for-woocommerce' ),
			'MG16' => __( 'Ihorombe', 'my-country-states-for-woocommerce' ),
			'MG17' => __( 'Itasy', 'my-country-states-for-woocommerce' ),
			'MG18' => __( 'Melaky', 'my-country-states-for-woocommerce' ),
			'MG19' => __( 'Menabe', 'my-country-states-for-woocommerce' ),
			'MG20' => __( 'Sava', 'my-country-states-for-woocommerce' ),
			'MG21' => __( 'Sofia', 'my-country-states-for-woocommerce' ),
			'MG22' => __( 'Vakinankaratra', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_mg', $states );
	}

	/**
	 * States / Provinces of Malawi.
	 *
	 * Return the array of states/provinces of Malawi. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_mw() {

		$states = array(
			'MW01' => __( 'Balaka', 'my-country-states-for-woocommerce' ),
			'MW02' => __( 'Blantyre', 'my-country-states-for-woocommerce' ),
			'MW03' => __( 'Chikwawa', 'my-country-states-for-woocommerce' ),
			'MW04' => __( 'Chiradzulu', 'my-country-states-for-woocommerce' ),
			'MW05' => __( 'Chitipa', 'my-country-states-for-woocommerce' ),
			'MW06' => __( 'Dedza', 'my-country-states-for-woocommerce' ),
			'MW07' => __( 'Dowa', 'my-country-states-for-woocommerce' ),
			'MW08' => __( 'Karonga', 'my-country-states-for-woocommerce' ),
			'MW09' => __( 'Kasungu', 'my-country-states-for-woocommerce' ),
			'MW10' => __( 'Likoma', 'my-country-states-for-woocommerce' ),
			'MW11' => __( 'Lilongwe', 'my-country-states-for-woocommerce' ),
			'MW12' => __( 'Machinga', 'my-country-states-for-woocommerce' ),
			'MW13' => __( 'Mangochi', 'my-country-states-for-woocommerce' ),
			'MW14' => __( 'Mchinji', 'my-country-states-for-woocommerce' ),
			'MW15' => __( 'Mulanje', 'my-country-states-for-woocommerce' ),
			'MW16' => __( 'Mwanza', 'my-country-states-for-woocommerce' ),
			'MW17' => __( 'Mzimba', 'my-country-states-for-woocommerce' ),
			'MW18' => __( 'Neno', 'my-country-states-for-woocommerce' ),
			'MW19' => __( 'Nkhata Bay', 'my-country-states-for-woocommerce' ),
			'MW20' => __( 'Nkhotakota', 'my-country-states-for-woocommerce' ),
			'MW21' => __( 'Nsanje', 'my-country-states-for-woocommerce' ),
			'MW22' => __( 'Ntcheu', 'my-country-states-for-woocommerce' ),
			'MW23' => __( 'Ntchisi', 'my-country-states-for-woocommerce' ),
			'MW24' => __( 'Phalombe', 'my-country-states-for-woocommerce' ),
			'MW25' => __( 'Rumphi', 'my-country-states-for-woocommerce' ),
			'MW26' => __( 'Salima', 'my-country-states-for-woocommerce' ),
			'MW27' => __( 'Thyolo', 'my-country-states-for-woocommerce' ),
			'MW28' => __( 'Zomba', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_mw', $states );
	}

	/**
	 * States / Provinces of Maldives.
	 *
	 * Return the array of states/provinces of Maldives. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_mv() {

		$states = array(
			'MV01' => __( 'Alifu Alifu Atoll', 'my-country-states-for-woocommerce' ),
			'MV02' => __( 'Alifu Dhaalu Atoll', 'my-country-states-for-woocommerce' ),
			'MV03' => __( 'Baa Atoll', 'my-country-states-for-woocommerce' ),
			'MV04' => __( 'Dhaalu Atoll', 'my-country-states-for-woocommerce' ),
			'MV05' => __( 'Faafu Atoll', 'my-country-states-for-woocommerce' ),
			'MV06' => __( 'Gaafu Alifu Atoll', 'my-country-states-for-woocommerce' ),
			'MV07' => __( 'Gaafu Dhaalu Atoll', 'my-country-states-for-woocommerce' ),
			'MV08' => __( 'Gnaviyani Atoll', 'my-country-states-for-woocommerce' ),
			'MV09' => __( 'Haa Alifu Atoll', 'my-country-states-for-woocommerce' ),
			'MV10' => __( 'Haa Dhaalu Atoll', 'my-country-states-for-woocommerce' ),
			'MV11' => __( 'Kaafu Atoll', 'my-country-states-for-woocommerce' ),
			'MV12' => __( 'Laamu Atoll', 'my-country-states-for-woocommerce' ),
			'MV13' => __( 'Lhaviyani Atoll', 'my-country-states-for-woocommerce' ),
			'MV14' => __( 'Meemu Atoll', 'my-country-states-for-woocommerce' ),
			'MV15' => __( 'Noonu Atoll', 'my-country-states-for-woocommerce' ),
			'MV16' => __( 'Raa Atoll', 'my-country-states-for-woocommerce' ),
			'MV17' => __( 'Seenu Atoll', 'my-country-states-for-woocommerce' ),
			'MV18' => __( 'Shaviyani Atoll', 'my-country-states-for-woocommerce' ),
			'MV19' => __( 'Thaa Atoll', 'my-country-states-for-woocommerce' ),
			'MV20' => __( 'Vaavu Atoll', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_mv', $states );
	}

	/**
	 * States / Provinces of Mali.
	 *
	 * Return the array of states/provinces of Mali. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_ml() {

		$states = array(
			'ML01' => __( 'Kayes Region', 'my-country-states-for-woocommerce' ),
			'ML02' => __( 'Koulikoro Region', 'my-country-states-for-woocommerce' ),
			'ML03' => __( 'Sikasso Region', 'my-country-states-for-woocommerce' ),
			'ML04' => __( 'Ségou Region', 'my-country-states-for-woocommerce' ),
			'ML05' => __( 'Mopti Region', 'my-country-states-for-woocommerce' ),
			'ML06' => __( 'Tombouctou Region', 'my-country-states-for-woocommerce' ),
			'ML07' => __( 'Gao Region', 'my-country-states-for-woocommerce' ),
			'ML08' => __( 'Kidal Region', 'my-country-states-for-woocommerce' ),
			'ML09' => __( 'Menaka Region', 'my-country-states-for-woocommerce' ),
			'ML10' => __( 'Taoudénit Region', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_ml', $states );
	}

	/**
	 * States / Provinces of Malta.
	 *
	 * Return the array of states/provinces of Malta. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_mt() {

		$states = array(
			'MT01' => __( 'Gozo', 'my-country-states-for-woocommerce' ),
			'MT02' => __( 'Malta', 'my-country-states-for-woocommerce' ),
			'MT03' => __( 'Southern Harbour', 'my-country-states-for-woocommerce' ),
			'MT04' => __( 'Western', 'my-country-states-for-woocommerce' ),
			'MT05' => __( 'Northern', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_mt', $states );
	}

	/**
	 * States / Provinces of Marshall Islands.
	 *
	 * Return the array of states/provinces of Marshall Islands. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_mh() {

		$states = array(
			'MH01' => __( 'Ailinginae Atoll', 'my-country-states-for-woocommerce' ),
			'MH02' => __( 'Ailinglaplap Atoll', 'my-country-states-for-woocommerce' ),
			'MH03' => __( 'Ailuk Atoll', 'my-country-states-for-woocommerce' ),
			'MH04' => __( 'Arno Atoll', 'my-country-states-for-woocommerce' ),
			'MH05' => __( 'Aur Atoll', 'my-country-states-for-woocommerce' ),
			'MH06' => __( 'Bikar Atoll', 'my-country-states-for-woocommerce' ),
			'MH07' => __( 'Bikini Atoll', 'my-country-states-for-woocommerce' ),
			'MH08' => __( 'Bokak Atoll', 'my-country-states-for-woocommerce' ),
			'MH09' => __( 'Ebon Atoll', 'my-country-states-for-woocommerce' ),
			'MH10' => __( 'Enewetak Atoll', 'my-country-states-for-woocommerce' ),
			'MH11' => __( 'Erikub Atoll', 'my-country-states-for-woocommerce' ),
			'MH12' => __( 'Jabat Island', 'my-country-states-for-woocommerce' ),
			'MH13' => __( 'Jaluit Atoll', 'my-country-states-for-woocommerce' ),
			'MH14' => __( 'Jemo Island', 'my-country-states-for-woocommerce' ),
			'MH15' => __( 'Kili Island', 'my-country-states-for-woocommerce' ),
			'MH16' => __( 'Kwajalein Atoll', 'my-country-states-for-woocommerce' ),
			'MH17' => __( 'Lae Atoll', 'my-country-states-for-woocommerce' ),
			'MH18' => __( 'Lib Island', 'my-country-states-for-woocommerce' ),
			'MH19' => __( 'Likiep Atoll', 'my-country-states-for-woocommerce' ),
			'MH20' => __( 'Majuro Atoll', 'my-country-states-for-woocommerce' ),
			'MH21' => __( 'Maloelap Atoll', 'my-country-states-for-woocommerce' ),
			'MH22' => __( 'Mejit Island', 'my-country-states-for-woocommerce' ),
			'MH23' => __( 'Mili Atoll', 'my-country-states-for-woocommerce' ),
			'MH24' => __( 'Namdrik Atoll', 'my-country-states-for-woocommerce' ),
			'MH25' => __( 'Namu Atoll', 'my-country-states-for-woocommerce' ),
			'MH26' => __( 'Rongelap Atoll', 'my-country-states-for-woocommerce' ),
			'MH27' => __( 'Ujae Atoll', 'my-country-states-for-woocommerce' ),
			'MH28' => __( 'Ujelang Atoll', 'my-country-states-for-woocommerce' ),
			'MH29' => __( 'Utirik Atoll', 'my-country-states-for-woocommerce' ),
			'MH30' => __( 'Bikar Island', 'my-country-states-for-woocommerce' ),
			'MH31' => __( 'Bokak Island', 'my-country-states-for-woocommerce' ),
			'MH32' => __( 'Jemo Island', 'my-country-states-for-woocommerce' ),
			'MH33' => __( 'Nadikdik Island', 'my-country-states-for-woocommerce' ),
			'MH34' => __( 'Rongerik Island', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_mh', $states );
	}

	/**
	 * States / Provinces of Martinique.
	 *
	 * Return the array of states/provinces of Martinique. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_mq() {

		$states = array(
			'MQ01' => __( 'Le Lamentin', 'my-country-states-for-woocommerce' ),
			'MQ02' => __( 'Fort-de-France', 'my-country-states-for-woocommerce' ),
			'MQ03' => __( 'Le Marin', 'my-country-states-for-woocommerce' ),
			'MQ04' => __( 'Saint-Joseph', 'my-country-states-for-woocommerce' ),
			'MQ05' => __( 'Ducos', 'my-country-states-for-woocommerce' ),
			'MQ06' => __( 'Le Robert', 'my-country-states-for-woocommerce' ),
			'MQ07' => __( 'Le François', 'my-country-states-for-woocommerce' ),
			'MQ08' => __( 'Saint-Pierre', 'my-country-states-for-woocommerce' ),
			'MQ09' => __( 'La Trinité', 'my-country-states-for-woocommerce' ),
			'MQ10' => __( 'Schoelcher', 'my-country-states-for-woocommerce' ),
			'MQ11' => __( 'Les Trois-Îlets', 'my-country-states-for-woocommerce' ),
			'MQ12' => __( 'Rivière-Salée', 'my-country-states-for-woocommerce' ),
			'MQ13' => __( 'Sainte-Anne', 'my-country-states-for-woocommerce' ),
			'MQ14' => __( 'Le Vauclin', 'my-country-states-for-woocommerce' ),
			'MQ15' => __( 'Saint-Esprit', 'my-country-states-for-woocommerce' ),
			'MQ16' => __( 'Basse-Pointe', 'my-country-states-for-woocommerce' ),
			'MQ17' => __( 'Macouba', 'my-country-states-for-woocommerce' ),
			'MQ18' => __( 'Le Morne-Rouge', 'my-country-states-for-woocommerce' ),
			'MQ19' => __( 'Case-Pilote', 'my-country-states-for-woocommerce' ),
			'MQ20' => __( 'Le Carbet', 'my-country-states-for-woocommerce' ),
			'MQ21' => __( 'Fonds-Saint-Denis', 'my-country-states-for-woocommerce' ),
			'MQ22' => __( 'Le Gros-Morne', 'my-country-states-for-woocommerce' ),
			'MQ23' => __( 'Bellefontaine', 'my-country-states-for-woocommerce' ),
			'MQ24' => __( 'Le Prêcheur', 'my-country-states-for-woocommerce' ),
			'MQ25' => __( 'Grand\'Rivière', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_mq', $states );
	}

	/**
	 * States / Provinces of Mauritania.
	 *
	 * Return the array of states/provinces of Mauritania. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_mr() {

		$states = array(
			'MR01' => __( 'Adrar', 'my-country-states-for-woocommerce' ),
			'MR02' => __( 'Assaba', 'my-country-states-for-woocommerce' ),
			'MR03' => __( 'Brakna', 'my-country-states-for-woocommerce' ),
			'MR04' => __( 'Dakhlet Nouadhibou', 'my-country-states-for-woocommerce' ),
			'MR05' => __( 'Gorgol', 'my-country-states-for-woocommerce' ),
			'MR06' => __( 'Guidimaka', 'my-country-states-for-woocommerce' ),
			'MR07' => __( 'Hodh Ech Chargui', 'my-country-states-for-woocommerce' ),
			'MR08' => __( 'Hodh El Gharbi', 'my-country-states-for-woocommerce' ),
			'MR09' => __( 'Inchiri', 'my-country-states-for-woocommerce' ),
			'MR10' => __( 'Nouakchott Nord', 'my-country-states-for-woocommerce' ),
			'MR11' => __( 'Nouakchott Ouest', 'my-country-states-for-woocommerce' ),
			'MR12' => __( 'Nouakchott Sud', 'my-country-states-for-woocommerce' ),
			'MR13' => __( 'Tagant', 'my-country-states-for-woocommerce' ),
			'MR14' => __( 'Tiris Zemmour', 'my-country-states-for-woocommerce' ),
			'MR15' => __( 'Trarza', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_mr', $states );
	}

	/**
	 * States / Provinces of Mauritius.
	 *
	 * Return the array of states/provinces of Mauritius. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_mu() {

		$states = array(
			'MU01' => __( 'Black River', 'my-country-states-for-woocommerce' ),
			'MU02' => __( 'Flacq', 'my-country-states-for-woocommerce' ),
			'MU03' => __( 'Grand Port', 'my-country-states-for-woocommerce' ),
			'MU04' => __( 'Moka', 'my-country-states-for-woocommerce' ),
			'MU05' => __( 'Pamplemousses', 'my-country-states-for-woocommerce' ),
			'MU06' => __( 'Plaines Wilhems', 'my-country-states-for-woocommerce' ),
			'MU07' => __( 'Port Louis', 'my-country-states-for-woocommerce' ),
			'MU08' => __( 'Rivière du Rempart', 'my-country-states-for-woocommerce' ),
			'MU09' => __( 'Savanne', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_mu', $states );
	}

	/**
	 * States / Provinces of Mayotte.
	 *
	 * Return the array of states/provinces of Mayotte. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_yt() {

		$states = array(
			'YT01' => __( 'Acoua', 'my-country-states-for-woocommerce' ),
			'YT02' => __( 'Bandraboua', 'my-country-states-for-woocommerce' ),
			'YT03' => __( 'Bandrele', 'my-country-states-for-woocommerce' ),
			'YT04' => __( 'Bouéni', 'my-country-states-for-woocommerce' ),
			'YT05' => __( 'Chiconi', 'my-country-states-for-woocommerce' ),
			'YT06' => __( 'Chirongui', 'my-country-states-for-woocommerce' ),
			'YT07' => __( 'Dembeni', 'my-country-states-for-woocommerce' ),
			'YT08' => __( 'Dzaoudzi', 'my-country-states-for-woocommerce' ),
			'YT09' => __( 'Kani-Kéli', 'my-country-states-for-woocommerce' ),
			'YT10' => __( 'Koungou', 'my-country-states-for-woocommerce' ),
			'YT11' => __( 'M\'Tsamboro', 'my-country-states-for-woocommerce' ),
			'YT12' => __( 'Mamoudzou', 'my-country-states-for-woocommerce' ),
			'YT13' => __( 'Mtsamboro', 'my-country-states-for-woocommerce' ),
			'YT14' => __( 'Ouangani', 'my-country-states-for-woocommerce' ),
			'YT15' => __( 'Pamandzi', 'my-country-states-for-woocommerce' ),
			'YT16' => __( 'Sada', 'my-country-states-for-woocommerce' ),
			'YT17' => __( 'Tsingoni', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_yt', $states );
	}

	/**
	 * States / Provinces of Micronesia.
	 *
	 * Return the array of states/provinces of Micronesia. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_fm() {

		$states = array(
			'FM01' => __( 'Yap', 'my-country-states-for-woocommerce' ),
			'FM02' => __( 'Chuuk', 'my-country-states-for-woocommerce' ),
			'FM03' => __( 'Pohnpei', 'my-country-states-for-woocommerce' ),
			'FM04' => __( 'Kosrae', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_fm', $states );
	}

	/**
	 * States / Provinces of Monaco.
	 *
	 * Return the array of states/provinces of Monaco. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_mc() {

		$states = array(
			'MC01' => __( 'Monaco-Ville', 'my-country-states-for-woocommerce' ),
			'MC02' => __( 'La Condamine', 'my-country-states-for-woocommerce' ),
			'MC03' => __( 'Monte-Carlo', 'my-country-states-for-woocommerce' ),
			'MC04' => __( 'Fontvieille', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_mc', $states );
	}

	/**
	 * States / Provinces of Mongolia.
	 *
	 * Return the array of states/provinces of Mongolia. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_mn() {

		$states = array(
			'MN01' => __( 'Ulaanbaatar (municipality)', 'my-country-states-for-woocommerce' ),
			'MN02' => __( 'Arkhangai', 'my-country-states-for-woocommerce' ),
			'MN03' => __( 'Bayan-Ölgii', 'my-country-states-for-woocommerce' ),
			'MN04' => __( 'Bayankhongor', 'my-country-states-for-woocommerce' ),
			'MN05' => __( 'Bulgan', 'my-country-states-for-woocommerce' ),
			'MN06' => __( 'Darkhan-Uul', 'my-country-states-for-woocommerce' ),
			'MN07' => __( 'Dornod', 'my-country-states-for-woocommerce' ),
			'MN08' => __( 'Dornogovi', 'my-country-states-for-woocommerce' ),
			'MN09' => __( 'Dundgovi', 'my-country-states-for-woocommerce' ),
			'MN10' => __( 'Gobi-Altai', 'my-country-states-for-woocommerce' ),
			'MN11' => __( 'Govi-Altai', 'my-country-states-for-woocommerce' ),
			'MN12' => __( 'Govisümber', 'my-country-states-for-woocommerce' ),
			'MN13' => __( 'Khentii', 'my-country-states-for-woocommerce' ),
			'MN14' => __( 'Khovd', 'my-country-states-for-woocommerce' ),
			'MN15' => __( 'Khövsgöl', 'my-country-states-for-woocommerce' ),
			'MN16' => __( 'Ömnögovi', 'my-country-states-for-woocommerce' ),
			'MN17' => __( 'Orkhon', 'my-country-states-for-woocommerce' ),
			'MN18' => __( 'Övörkhangai', 'my-country-states-for-woocommerce' ),
			'MN19' => __( 'Selenge', 'my-country-states-for-woocommerce' ),
			'MN20' => __( 'Sükhbaatar', 'my-country-states-for-woocommerce' ),
			'MN21' => __( 'Töv', 'my-country-states-for-woocommerce' ),
			'MN22' => __( 'Uvs', 'my-country-states-for-woocommerce' ),
			'MN23' => __( 'Zavkhan', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_mn', $states );
	}

	/**
	 * States / Provinces of Montenegro.
	 *
	 * Return the array of states/provinces of Montenegro. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_me() {

		$states = array(
			'ME01' => __( 'Andrijevica', 'my-country-states-for-woocommerce' ),
			'ME02' => __( 'Bar', 'my-country-states-for-woocommerce' ),
			'ME03' => __( 'Berane', 'my-country-states-for-woocommerce' ),
			'ME04' => __( 'Bijelo Polje', 'my-country-states-for-woocommerce' ),
			'ME05' => __( 'Budva', 'my-country-states-for-woocommerce' ),
			'ME06' => __( 'Cetinje', 'my-country-states-for-woocommerce' ),
			'ME07' => __( 'Danilovgrad', 'my-country-states-for-woocommerce' ),
			'ME08' => __( 'Gusinje', 'my-country-states-for-woocommerce' ),
			'ME09' => __( 'Herceg Novi', 'my-country-states-for-woocommerce' ),
			'ME10' => __( 'Kolašin', 'my-country-states-for-woocommerce' ),
			'ME11' => __( 'Kotor', 'my-country-states-for-woocommerce' ),
			'ME12' => __( 'Mojkovac', 'my-country-states-for-woocommerce' ),
			'ME13' => __( 'Nikšić', 'my-country-states-for-woocommerce' ),
			'ME14' => __( 'Old Royal Capital Cetinje', 'my-country-states-for-woocommerce' ),
			'ME15' => __( 'Petnjica', 'my-country-states-for-woocommerce' ),
			'ME16' => __( 'Plav', 'my-country-states-for-woocommerce' ),
			'ME17' => __( 'Pljevlja', 'my-country-states-for-woocommerce' ),
			'ME18' => __( 'Plužine', 'my-country-states-for-woocommerce' ),
			'ME19' => __( 'Podgorica', 'my-country-states-for-woocommerce' ),
			'ME20' => __( 'Rožaje', 'my-country-states-for-woocommerce' ),
			'ME21' => __( 'Šavnik', 'my-country-states-for-woocommerce' ),
			'ME22' => __( 'Tivat', 'my-country-states-for-woocommerce' ),
			'ME23' => __( 'Ulcinj', 'my-country-states-for-woocommerce' ),
			'ME24' => __( 'Žabljak', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_me', $states );
	}

	/**
	 * States / Provinces of Montserrat.
	 *
	 * Return the array of states/provinces of Montserrat. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_ms() {

		$states = array(
			'MS01' => __( 'Saint Anthony', 'my-country-states-for-woocommerce' ),
			'MS02' => __( 'Saint Georges', 'my-country-states-for-woocommerce' ),
			'MS03' => __( 'Saint Peter', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_ms', $states );
	}

	/**
	 * States / Provinces of Morocco.
	 *
	 * Return the array of states/provinces of Morocco. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_ma() {

		$states = array(
			'MA01' => __( 'Tangier-Tetouan-Al Hoceima', 'my-country-states-for-woocommerce' ),
			'MA02' => __( 'Oriental', 'my-country-states-for-woocommerce' ),
			'MA03' => __( 'Fès-Meknès', 'my-country-states-for-woocommerce' ),
			'MA04' => __( 'Rabat-Salé-Kénitra', 'my-country-states-for-woocommerce' ),
			'MA05' => __( 'Béni Mellal-Khénifra', 'my-country-states-for-woocommerce' ),
			'MA06' => __( 'Casablanca-Settat', 'my-country-states-for-woocommerce' ),
			'MA07' => __( 'Marrakesh-Safi', 'my-country-states-for-woocommerce' ),
			'MA08' => __( 'Drâa-Tafilalet', 'my-country-states-for-woocommerce' ),
			'MA09' => __( 'Souss-Massa', 'my-country-states-for-woocommerce' ),
			'MA10' => __( 'Guelmim-Oued Noun', 'my-country-states-for-woocommerce' ),
			'MA11' => __( 'Laâyoune-Sakia El Hamra', 'my-country-states-for-woocommerce' ),
			'MA12' => __( 'Dakhla-Oued Ed-Dahab', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_ma', $states );
	}

	/**
	 * States / Provinces of Myanmar.
	 *
	 * Return the array of states/provinces of Myanmar. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_mm() {

		$states = array(
			'MM01' => __( 'Ayeyarwady Region', 'my-country-states-for-woocommerce' ),
			'MM02' => __( 'Bago Region', 'my-country-states-for-woocommerce' ),
			'MM03' => __( 'Magway Region', 'my-country-states-for-woocommerce' ),
			'MM04' => __( 'Mandalay Region', 'my-country-states-for-woocommerce' ),
			'MM05' => __( 'Sagaing Region', 'my-country-states-for-woocommerce' ),
			'MM06' => __( 'Tanintharyi Region', 'my-country-states-for-woocommerce' ),
			'MM07' => __( 'Yangon Region', 'my-country-states-for-woocommerce' ),
			'MM08' => __( 'Chin State', 'my-country-states-for-woocommerce' ),
			'MM09' => __( 'Kachin State', 'my-country-states-for-woocommerce' ),
			'MM10' => __( 'Kayah State', 'my-country-states-for-woocommerce' ),
			'MM11' => __( 'Kayin State', 'my-country-states-for-woocommerce' ),
			'MM12' => __( 'Mon State', 'my-country-states-for-woocommerce' ),
			'MM13' => __( 'Rakhine State', 'my-country-states-for-woocommerce' ),
			'MM14' => __( 'Shan State', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_mm', $states );
	}

	/**
	 * States / Provinces of Nauru.
	 *
	 * Return the array of states/provinces of Nauru. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_nr() {

		// Nauru is the smallest island nation in the world. As a single island country, it does not have any provinces, states, or territories.
		$states = array();

		return apply_filters( 'mcsfwc_states_of_nr', $states );
	}

	/**
	 * States / Provinces of Netherlands.
	 *
	 * Return the array of states/provinces of Netherlands. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_nl() {

		$states = array(
			'NL01' => __( 'Drenthe', 'my-country-states-for-woocommerce' ),
			'NL02' => __( 'Flevoland', 'my-country-states-for-woocommerce' ),
			'NL03' => __( 'Fryslân', 'my-country-states-for-woocommerce' ),
			'NL04' => __( 'Gelderland', 'my-country-states-for-woocommerce' ),
			'NL05' => __( 'Groningen', 'my-country-states-for-woocommerce' ),
			'NL06' => __( 'Limburg', 'my-country-states-for-woocommerce' ),
			'NL07' => __( 'Noord-Brabant', 'my-country-states-for-woocommerce' ),
			'NL08' => __( 'Noord-Holland', 'my-country-states-for-woocommerce' ),
			'NL09' => __( 'Overijssel', 'my-country-states-for-woocommerce' ),
			'NL10' => __( 'Zuid-Holland', 'my-country-states-for-woocommerce' ),
			'NL11' => __( 'Utrecht', 'my-country-states-for-woocommerce' ),
			'NL12' => __( 'Zeeland', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_nl', $states );
	}

	/**
	 * States / Provinces of New Caledonia.
	 *
	 * Return the array of states/provinces of New Caledonia. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_nc() {

		$states = array(
			'NC01' => __( 'Province Sud', 'my-country-states-for-woocommerce' ),
			'NC02' => __( 'Province Nord', 'my-country-states-for-woocommerce' ),
			'NC03' => __( 'Province des Îles Loyauté', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_nc', $states );
	}

	/**
	 * States / Provinces of Niger.
	 *
	 * Return the array of states/provinces of Niger. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_ne() {

		$states = array(
			'NE01' => __( 'Agadez', 'my-country-states-for-woocommerce' ),
			'NE02' => __( 'Diffa', 'my-country-states-for-woocommerce' ),
			'NE03' => __( 'Dosso', 'my-country-states-for-woocommerce' ),
			'NE04' => __( 'Maradi', 'my-country-states-for-woocommerce' ),
			'NE05' => __( 'Niamey', 'my-country-states-for-woocommerce' ),
			'NE06' => __( 'Tahoua', 'my-country-states-for-woocommerce' ),
			'NE07' => __( 'Zinder', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_ne', $states );
	}

	/**
	 * States / Provinces of Niue.
	 *
	 * Return the array of states/provinces of Niue. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_nu() {

		// Niue is a self-governing territory in free association with New Zealand, and does not have any provinces or states.
		$states = array();

		return apply_filters( 'mcsfwc_states_of_nu', $states );
	}

	/**
	 * States / Provinces of Norfolk Island.
	 *
	 * Return the array of states/provinces of Norfolk Island. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_nf() {

		// it is administered as a single local government area known as the Norfolk Island Regional Council.
		$states = array();

		return apply_filters( 'mcsfwc_states_of_nf', $states );
	}

	/**
	 * States / Provinces of North Korea.
	 *
	 * Return the array of states/provinces of North Korea. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_kp() {

		$states = array(
			'KP01' => __( 'Chagang', 'my-country-states-for-woocommerce' ),
			'KP02' => __( 'North Hamgyong', 'my-country-states-for-woocommerce' ),
			'KP03' => __( 'South Hamgyong', 'my-country-states-for-woocommerce' ),
			'KP04' => __( 'North Hwanghae', 'my-country-states-for-woocommerce' ),
			'KP05' => __( 'South Hwanghae', 'my-country-states-for-woocommerce' ),
			'KP06' => __( 'Kangwon', 'my-country-states-for-woocommerce' ),
			'KP07' => __( 'North Pyongan', 'my-country-states-for-woocommerce' ),
			'KP08' => __( 'South Pyongan', 'my-country-states-for-woocommerce' ),
			'KP09' => __( 'Ryanggang', 'my-country-states-for-woocommerce' ),
			'KP10' => __( 'Rason', 'my-country-states-for-woocommerce' ),
			'KP11' => __( 'Pyongyang', 'my-country-states-for-woocommerce' ),
			'KP12' => __( 'Nampo', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_kp', $states );
	}

	/**
	 * States / Provinces of North Macedonia.
	 *
	 * Return the array of states/provinces of North Macedonia. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_mk() {

		$states = array(
			'MK01' => __( 'Skopje', 'my-country-states-for-woocommerce' ),
			'MK02' => __( 'Northeastern', 'my-country-states-for-woocommerce' ),
			'MK03' => __( 'Eastern', 'my-country-states-for-woocommerce' ),
			'MK04' => __( 'Pelagonia', 'my-country-states-for-woocommerce' ),
			'MK05' => __( 'Polog', 'my-country-states-for-woocommerce' ),
			'MK06' => __( 'Southeastern', 'my-country-states-for-woocommerce' ),
			'MK07' => __( 'Southwestern', 'my-country-states-for-woocommerce' ),
			'MK08' => __( 'Vardar', 'my-country-states-for-woocommerce' ),
			'MK09' => __( 'Aerodrom', 'my-country-states-for-woocommerce' ),
			'MK10' => __( 'Butel', 'my-country-states-for-woocommerce' ),
			'MK11' => __( 'Cair', 'my-country-states-for-woocommerce' ),
			'MK12' => __( 'Centar', 'my-country-states-for-woocommerce' ),
			'MK13' => __( 'Gazi Baba', 'my-country-states-for-woocommerce' ),
			'MK14' => __( 'Gjorce Petrov', 'my-country-states-for-woocommerce' ),
			'MK15' => __( 'Karpos', 'my-country-states-for-woocommerce' ),
			'MK16' => __( 'Kisela Voda', 'my-country-states-for-woocommerce' ),
			'MK17' => __( 'Saraj', 'my-country-states-for-woocommerce' ),
			'MK18' => __( 'Shuto Orizari', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_mk', $states );
	}

	/**
	 * States / Provinces of Northern Mariana Islands.
	 *
	 * Return the array of states/provinces of Northern Mariana Islands. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_mp() {

		$states = array(
			'MP01' => __( 'Rota', 'my-country-states-for-woocommerce' ),
			'MP02' => __( 'Saipan', 'my-country-states-for-woocommerce' ),
			'MP03' => __( 'Tinian', 'my-country-states-for-woocommerce' ),
			'MP04' => __( 'Northern Islands Municipality', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_mp', $states );
	}

	/**
	 * States / Provinces of Norway.
	 *
	 * Return the array of states/provinces of Norway. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_no() {

		$states = array(
			'NO01' => __( 'Oslo', 'my-country-states-for-woocommerce' ),
			'NO02' => __( 'Viken', 'my-country-states-for-woocommerce' ),
			'NO03' => __( 'Innlandet', 'my-country-states-for-woocommerce' ),
			'NO04' => __( 'Vestfold og Telemark', 'my-country-states-for-woocommerce' ),
			'NO05' => __( 'Agder', 'my-country-states-for-woocommerce' ),
			'NO06' => __( 'Rogaland', 'my-country-states-for-woocommerce' ),
			'NO07' => __( 'Vestland', 'my-country-states-for-woocommerce' ),
			'NO08' => __( 'Møre og Romsdal', 'my-country-states-for-woocommerce' ),
			'NO09' => __( 'Trøndelag', 'my-country-states-for-woocommerce' ),
			'NO10' => __( 'Nordland', 'my-country-states-for-woocommerce' ),
			'NO11' => __( 'Troms og Finnmark', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_no', $states );
	}

	/**
	 * States / Provinces of Oman.
	 *
	 * Return the array of states/provinces of Oman. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_om() {

		$states = array(
			'OM01' => __( 'Ad Dakhiliyah', 'my-country-states-for-woocommerce' ),
			'OM02' => __( 'Al Batinah North', 'my-country-states-for-woocommerce' ),
			'OM03' => __( 'Al Batinah South', 'my-country-states-for-woocommerce' ),
			'OM04' => __( 'Al Buraimi', 'my-country-states-for-woocommerce' ),
			'OM05' => __( 'Al Wusta', 'my-country-states-for-woocommerce' ),
			'OM06' => __( 'Ash Sharqiyah North', 'my-country-states-for-woocommerce' ),
			'OM07' => __( 'Ash Sharqiyah South', 'my-country-states-for-woocommerce' ),
			'OM08' => __( 'Dhofar', 'my-country-states-for-woocommerce' ),
			'OM09' => __( 'Musandam', 'my-country-states-for-woocommerce' ),
			'OM10' => __( 'Muscat', 'my-country-states-for-woocommerce' ),
			'OM11' => __( 'Al Dhahirah', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_om', $states );
	}

	/**
	 * States / Provinces of Palestinian Territory.
	 *
	 * Return the array of states/provinces of Palestinian Territory. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_ps() {

		$states = array(
			'PS01' => __( 'Jenin Governorate', 'my-country-states-for-woocommerce' ),
			'PS02' => __( 'Tubas Governorate', 'my-country-states-for-woocommerce' ),
			'PS03' => __( 'Tulkarm Governorate', 'my-country-states-for-woocommerce' ),
			'PS04' => __( 'Nablus Governorate', 'my-country-states-for-woocommerce' ),
			'PS05' => __( 'Qalqilya Governorate', 'my-country-states-for-woocommerce' ),
			'PS06' => __( 'Salfit Governorate', 'my-country-states-for-woocommerce' ),
			'PS07' => __( 'Ramallah and al-Bireh Governorate', 'my-country-states-for-woocommerce' ),
			'PS08' => __( 'Jericho Governorate', 'my-country-states-for-woocommerce' ),
			'PS09' => __( 'Jerusalem Governorate', 'my-country-states-for-woocommerce' ),
			'PS10' => __( 'Bethlehem Governorate', 'my-country-states-for-woocommerce' ),
			'PS11' => __( 'Hebron Governorate', 'my-country-states-for-woocommerce' ),
			'PS12' => __( 'Gaza Strip', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_ps', $states );
	}

	/**
	 * States / Provinces of Papua New Guinea.
	 *
	 * Return the array of states/provinces of Papua New Guinea. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_pg() {

		$states = array(
			'PG01' => __( 'Bougainville', 'my-country-states-for-woocommerce' ),
			'PG02' => __( 'Central', 'my-country-states-for-woocommerce' ),
			'PG03' => __( 'Chimbu', 'my-country-states-for-woocommerce' ),
			'PG04' => __( 'Eastern Highlands', 'my-country-states-for-woocommerce' ),
			'PG05' => __( 'East New Britain', 'my-country-states-for-woocommerce' ),
			'PG06' => __( 'East Sepik', 'my-country-states-for-woocommerce' ),
			'PG07' => __( 'Enga', 'my-country-states-for-woocommerce' ),
			'PG08' => __( 'Gulf', 'my-country-states-for-woocommerce' ),
			'PG09' => __( 'Hela', 'my-country-states-for-woocommerce' ),
			'PG10' => __( 'Jiwaka', 'my-country-states-for-woocommerce' ),
			'PG11' => __( 'Madang', 'my-country-states-for-woocommerce' ),
			'PG12' => __( 'Manus', 'my-country-states-for-woocommerce' ),
			'PG13' => __( 'Milne Bay', 'my-country-states-for-woocommerce' ),
			'PG14' => __( 'Morobe', 'my-country-states-for-woocommerce' ),
			'PG15' => __( 'New Ireland', 'my-country-states-for-woocommerce' ),
			'PG16' => __( 'Northern', 'my-country-states-for-woocommerce' ),
			'PG17' => __( 'Southern Highlands', 'my-country-states-for-woocommerce' ),
			'PG18' => __( 'West New Britain', 'my-country-states-for-woocommerce' ),
			'PG19' => __( 'Western', 'my-country-states-for-woocommerce' ),
			'PG20' => __( 'Western Highlands', 'my-country-states-for-woocommerce' ),
			'PG21' => __( 'West Sepik', 'my-country-states-for-woocommerce' ),
			'PG22' => __( 'National Capital District', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_pg', $states );
	}

	/**
	 * States / Provinces of Pitcairn.
	 *
	 * Return the array of states/provinces of Pitcairn. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_pn() {

		// Pitcairn is a British Overseas Territory and consists of only one island, also called Pitcairn Island. It does not have any provinces or states.
		$states = array();

		return apply_filters( 'mcsfwc_states_of_pn', $states );
	}

	/**
	 * States / Provinces of Poland.
	 *
	 * Return the array of states/provinces of Poland. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_pl() {

		$states = array(
			'PL01' => __( 'Greater Poland', 'my-country-states-for-woocommerce' ),
			'PL02' => __( 'Kuyavian-Pomeranian', 'my-country-states-for-woocommerce' ),
			'PL03' => __( 'Lesser Poland', 'my-country-states-for-woocommerce' ),
			'PL04' => __( 'Łódź', 'my-country-states-for-woocommerce' ),
			'PL05' => __( 'Lower Silesian', 'my-country-states-for-woocommerce' ),
			'PL06' => __( 'Lublin', 'my-country-states-for-woocommerce' ),
			'PL07' => __( 'Lubusz', 'my-country-states-for-woocommerce' ),
			'PL08' => __( 'Masovian', 'my-country-states-for-woocommerce' ),
			'PL09' => __( 'Opole', 'my-country-states-for-woocommerce' ),
			'PL10' => __( 'Podkarpackie', 'my-country-states-for-woocommerce' ),
			'PL11' => __( 'Podlaskie', 'my-country-states-for-woocommerce' ),
			'PL12' => __( 'Pomeranian', 'my-country-states-for-woocommerce' ),
			'PL13' => __( 'Silesian', 'my-country-states-for-woocommerce' ),
			'PL14' => __( 'Subcarpathian', 'my-country-states-for-woocommerce' ),
			'PL15' => __( 'Świętokrzyskie', 'my-country-states-for-woocommerce' ),
			'PL16' => __( 'Warmian-Masurian', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_pl', $states );
	}

	/**
	 * States / Provinces of Portugal.
	 *
	 * Return the array of states/provinces of Portugal. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_pt() {

		$states = array(
			'PT01' => __( 'Aveiro', 'my-country-states-for-woocommerce' ),
			'PT02' => __( 'Beja', 'my-country-states-for-woocommerce' ),
			'PT03' => __( 'Braga', 'my-country-states-for-woocommerce' ),
			'PT04' => __( 'Bragança', 'my-country-states-for-woocommerce' ),
			'PT05' => __( 'Castelo Branco', 'my-country-states-for-woocommerce' ),
			'PT06' => __( 'Coimbra', 'my-country-states-for-woocommerce' ),
			'PT07' => __( 'Évora', 'my-country-states-for-woocommerce' ),
			'PT08' => __( 'Faro', 'my-country-states-for-woocommerce' ),
			'PT09' => __( 'Guarda', 'my-country-states-for-woocommerce' ),
			'PT10' => __( 'Leiria', 'my-country-states-for-woocommerce' ),
			'PT11' => __( 'Lisbon (Lisboa)', 'my-country-states-for-woocommerce' ),
			'PT12' => __( 'Portalegre', 'my-country-states-for-woocommerce' ),
			'PT13' => __( 'Porto', 'my-country-states-for-woocommerce' ),
			'PT14' => __( 'Santarém', 'my-country-states-for-woocommerce' ),
			'PT15' => __( 'Setúbal', 'my-country-states-for-woocommerce' ),
			'PT16' => __( 'Viana do Castelo', 'my-country-states-for-woocommerce' ),
			'PT17' => __( 'Vila Real', 'my-country-states-for-woocommerce' ),
			'PT18' => __( 'Viseu', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_pt', $states );
	}

	/**
	 * States / Provinces of Puerto Rico.
	 *
	 * Return the array of states/provinces of Puerto Rico. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_pr() {

		$states = array(
			'PR01' => __( 'Adjuntas', 'my-country-states-for-woocommerce' ),
			'PR02' => __( 'Aguada', 'my-country-states-for-woocommerce' ),
			'PR03' => __( 'Aguadilla', 'my-country-states-for-woocommerce' ),
			'PR04' => __( 'Aguas Buenas', 'my-country-states-for-woocommerce' ),
			'PR05' => __( 'Aibonito', 'my-country-states-for-woocommerce' ),
			'PR06' => __( 'Añasco', 'my-country-states-for-woocommerce' ),
			'PR07' => __( 'Arecibo', 'my-country-states-for-woocommerce' ),
			'PR08' => __( 'Arroyo', 'my-country-states-for-woocommerce' ),
			'PR09' => __( 'Barceloneta', 'my-country-states-for-woocommerce' ),
			'PR10' => __( 'Barranquitas', 'my-country-states-for-woocommerce' ),
			'PR11' => __( 'Bayamón', 'my-country-states-for-woocommerce' ),
			'PR12' => __( 'Cabo Rojo', 'my-country-states-for-woocommerce' ),
			'PR13' => __( 'Caguas', 'my-country-states-for-woocommerce' ),
			'PR14' => __( 'Camuy', 'my-country-states-for-woocommerce' ),
			'PR15' => __( 'Canóvanas', 'my-country-states-for-woocommerce' ),
			'PR16' => __( 'Carolina', 'my-country-states-for-woocommerce' ),
			'PR17' => __( 'Cataño', 'my-country-states-for-woocommerce' ),
			'PR18' => __( 'Cayey', 'my-country-states-for-woocommerce' ),
			'PR19' => __( 'Ceiba', 'my-country-states-for-woocommerce' ),
			'PR20' => __( 'Ciales', 'my-country-states-for-woocommerce' ),
			'PR21' => __( 'Cidra', 'my-country-states-for-woocommerce' ),
			'PR22' => __( 'Coamo', 'my-country-states-for-woocommerce' ),
			'PR23' => __( 'Comerío', 'my-country-states-for-woocommerce' ),
			'PR24' => __( 'Corozal', 'my-country-states-for-woocommerce' ),
			'PR25' => __( 'Culebra', 'my-country-states-for-woocommerce' ),
			'PR26' => __( 'Dorado', 'my-country-states-for-woocommerce' ),
			'PR27' => __( 'Fajardo', 'my-country-states-for-woocommerce' ),
			'PR28' => __( 'Florida', 'my-country-states-for-woocommerce' ),
			'PR29' => __( 'Guánica', 'my-country-states-for-woocommerce' ),
			'PR30' => __( 'Guayama', 'my-country-states-for-woocommerce' ),
			'PR31' => __( 'Guayanilla', 'my-country-states-for-woocommerce' ),
			'PR32' => __( 'Guaynabo', 'my-country-states-for-woocommerce' ),
			'PR33' => __( 'Gurabo', 'my-country-states-for-woocommerce' ),
			'PR34' => __( 'Hatillo', 'my-country-states-for-woocommerce' ),
			'PR35' => __( 'Hormigueros', 'my-country-states-for-woocommerce' ),
			'PR36' => __( 'Humacao', 'my-country-states-for-woocommerce' ),
			'PR37' => __( 'Isabela', 'my-country-states-for-woocommerce' ),
			'PR38' => __( 'Jayuya', 'my-country-states-for-woocommerce' ),
			'PR39' => __( 'Juana Díaz', 'my-country-states-for-woocommerce' ),
			'PR40' => __( 'Juncos', 'my-country-states-for-woocommerce' ),
			'PR41' => __( 'Lajas', 'my-country-states-for-woocommerce' ),
			'PR42' => __( 'Lares', 'my-country-states-for-woocommerce' ),
			'PR43' => __( 'Las Marías', 'my-country-states-for-woocommerce' ),
			'PR44' => __( 'Las Piedras', 'my-country-states-for-woocommerce' ),
			'PR45' => __( 'Loíza', 'my-country-states-for-woocommerce' ),
			'PR46' => __( 'Luquillo', 'my-country-states-for-woocommerce' ),
			'PR47' => __( 'Manatí', 'my-country-states-for-woocommerce' ),
			'PR48' => __( 'Maricao', 'my-country-states-for-woocommerce' ),
			'PR49' => __( 'Maunabo', 'my-country-states-for-woocommerce' ),
			'PR50' => __( 'Mayagüez', 'my-country-states-for-woocommerce' ),
			'PR51' => __( 'Moca', 'my-country-states-for-woocommerce' ),
			'PR52' => __( 'Morovis', 'my-country-states-for-woocommerce' ),
			'PR53' => __( 'Naguabo', 'my-country-states-for-woocommerce' ),
			'PR54' => __( 'Naranjito', 'my-country-states-for-woocommerce' ),
			'PR55' => __( 'Orocovis', 'my-country-states-for-woocommerce' ),
			'PR56' => __( 'Patillas', 'my-country-states-for-woocommerce' ),
			'PR57' => __( 'Peñuelas', 'my-country-states-for-woocommerce' ),
			'PR58' => __( 'Ponce', 'my-country-states-for-woocommerce' ),
			'PR59' => __( 'Quebradillas', 'my-country-states-for-woocommerce' ),
			'PR60' => __( 'Rincón', 'my-country-states-for-woocommerce' ),
			'PR61' => __( 'Río Grande', 'my-country-states-for-woocommerce' ),
			'PR62' => __( 'Sabana Grande', 'my-country-states-for-woocommerce' ),
			'PR63' => __( 'Salinas', 'my-country-states-for-woocommerce' ),
			'PR64' => __( 'San Germán', 'my-country-states-for-woocommerce' ),
			'PR65' => __( 'San Juan', 'my-country-states-for-woocommerce' ),
			'PR66' => __( 'San Lorenzo', 'my-country-states-for-woocommerce' ),
			'PR67' => __( 'San Sebastián', 'my-country-states-for-woocommerce' ),
			'PR68' => __( 'Santa Isabel', 'my-country-states-for-woocommerce' ),
			'PR69' => __( 'Toa Alta', 'my-country-states-for-woocommerce' ),
			'PR70' => __( 'Toa Baja', 'my-country-states-for-woocommerce' ),
			'PR71' => __( 'Trujillo Alto', 'my-country-states-for-woocommerce' ),
			'PR72' => __( 'Utuado', 'my-country-states-for-woocommerce' ),
			'PR73' => __( 'Vega Alta', 'my-country-states-for-woocommerce' ),
			'PR74' => __( 'Vega Baja', 'my-country-states-for-woocommerce' ),
			'PR75' => __( 'Vieques', 'my-country-states-for-woocommerce' ),
			'PR76' => __( 'Villalba', 'my-country-states-for-woocommerce' ),
			'PR77' => __( 'Yabucoa', 'my-country-states-for-woocommerce' ),
			'PR78' => __( 'Yauco', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_pr', $states );
	}

	/**
	 * States / Provinces of Qatar.
	 *
	 * Return the array of states/provinces of Qatar. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_qa() {

		$states = array(
			'QA01' => __( 'Ad Dawhah (Doha)', 'my-country-states-for-woocommerce' ),
			'QA02' => __( 'Al Daayen', 'my-country-states-for-woocommerce' ),
			'QA03' => __( 'Al Khor', 'my-country-states-for-woocommerce' ),
			'QA04' => __( 'Al Rayyan', 'my-country-states-for-woocommerce' ),
			'QA05' => __( 'Al Wakrah', 'my-country-states-for-woocommerce' ),
			'QA06' => __( 'Al-Shahaniya', 'my-country-states-for-woocommerce' ),
			'QA07' => __( 'Al-Wukair', 'my-country-states-for-woocommerce' ),
			'QA08' => __( 'Umm Salal', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_qa', $states );
	}

	/**
	 * States / Provinces of Reunion.
	 *
	 * Return the array of states/provinces of Reunion. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_re() {

		$states = array(
			'RE01' => __( 'Saint-Denis', 'my-country-states-for-woocommerce' ),
			'RE02' => __( 'Saint-Paul', 'my-country-states-for-woocommerce' ),
			'RE03' => __( 'Saint-Pierre', 'my-country-states-for-woocommerce' ),
			'RE04' => __( 'Le Tampon', 'my-country-states-for-woocommerce' ),
			'RE05' => __( 'Saint-André', 'my-country-states-for-woocommerce' ),
			'RE06' => __( 'Saint-Louis', 'my-country-states-for-woocommerce' ),
			'RE07' => __( 'Saint-Benoît', 'my-country-states-for-woocommerce' ),
			'RE08' => __( 'Saint-Joseph', 'my-country-states-for-woocommerce' ),
			'RE09' => __( 'Le Port', 'my-country-states-for-woocommerce' ),
			'RE10' => __( 'Saint-Leu', 'my-country-states-for-woocommerce' ),
			'RE11' => __( 'La Possession', 'my-country-states-for-woocommerce' ),
			'RE12' => __( 'Sainte-Marie', 'my-country-states-for-woocommerce' ),
			'RE13' => __( 'Bras-Panon', 'my-country-states-for-woocommerce' ),
			'RE14' => __( 'Sainte-Suzanne', 'my-country-states-for-woocommerce' ),
			'RE15' => __( 'Petite-Île', 'my-country-states-for-woocommerce' ),
			'RE16' => __( 'L\'Étang-Salé', 'my-country-states-for-woocommerce' ),
			'RE17' => __( 'Salazie', 'my-country-states-for-woocommerce' ),
			'RE18' => __( 'Cilaos', 'my-country-states-for-woocommerce' ),
			'RE19' => __( 'Les Avirons', 'my-country-states-for-woocommerce' ),
			'RE20' => __( 'Entre-Deux', 'my-country-states-for-woocommerce' ),
			'RE21' => __( 'Trois-Bassins', 'my-country-states-for-woocommerce' ),
			'RE22' => __( 'Saint-Philippe', 'my-country-states-for-woocommerce' ),
			'RE23' => __( 'Sainte-Rose', 'my-country-states-for-woocommerce' ),
			'RE24' => __( 'La Plaine-des-Palmistes', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_re', $states );
	}

	/**
	 * States / Provinces of Russia.
	 *
	 * Return the array of states/provinces of Russia. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_ru() {

		$states = array(
			'RU01' => __( 'Republic of Adygea', 'my-country-states-for-woocommerce' ),
			'RU02' => __( 'Republic of Altai', 'my-country-states-for-woocommerce' ),
			'RU03' => __( 'Altai Krai', 'my-country-states-for-woocommerce' ),
			'RU04' => __( 'Amur Oblast', 'my-country-states-for-woocommerce' ),
			'RU05' => __( 'Arkhangelsk Oblast', 'my-country-states-for-woocommerce' ),
			'RU06' => __( 'Astrakhan Oblast', 'my-country-states-for-woocommerce' ),
			'RU07' => __( 'Republic of Bashkortostan', 'my-country-states-for-woocommerce' ),
			'RU08' => __( 'Belgorod Oblast', 'my-country-states-for-woocommerce' ),
			'RU09' => __( 'Bryansk Oblast', 'my-country-states-for-woocommerce' ),
			'RU10' => __( 'Republic of Buryatia', 'my-country-states-for-woocommerce' ),
			'RU11' => __( 'Chechen Republic', 'my-country-states-for-woocommerce' ),
			'RU12' => __( 'Chelyabinsk Oblast', 'my-country-states-for-woocommerce' ),
			'RU13' => __( 'Chukotka Autonomous Okrug', 'my-country-states-for-woocommerce' ),
			'RU14' => __( 'Chuvash Republic', 'my-country-states-for-woocommerce' ),
			'RU15' => __( 'Republic of Dagestan', 'my-country-states-for-woocommerce' ),
			'RU16' => __( 'Ingushetia Republic', 'my-country-states-for-woocommerce' ),
			'RU17' => __( 'Irkutsk Oblast', 'my-country-states-for-woocommerce' ),
			'RU18' => __( 'Ivanovo Oblast', 'my-country-states-for-woocommerce' ),
			'RU19' => __( 'Jewish Autonomous Oblast', 'my-country-states-for-woocommerce' ),
			'RU20' => __( 'Kabardino-Balkar Republic', 'my-country-states-for-woocommerce' ),
			'RU21' => __( 'Kaliningrad Oblast', 'my-country-states-for-woocommerce' ),
			'RU22' => __( 'Republic of Kalmykia', 'my-country-states-for-woocommerce' ),
			'RU23' => __( 'Kaluga Oblast', 'my-country-states-for-woocommerce' ),
			'RU24' => __( 'Kamchatka Krai', 'my-country-states-for-woocommerce' ),
			'RU25' => __( 'Karachay-Cherkess Republic', 'my-country-states-for-woocommerce' ),
			'RU26' => __( 'Republic of Karelia', 'my-country-states-for-woocommerce' ),
			'RU27' => __( 'Kemerovo Oblast', 'my-country-states-for-woocommerce' ),
			'RU28' => __( 'Khabarovsk Krai', 'my-country-states-for-woocommerce' ),
			'RU29' => __( 'Republic of Khakassia', 'my-country-states-for-woocommerce' ),
			'RU30' => __( 'Khanty-Mansi Autonomous Okrug - Yugra', 'my-country-states-for-woocommerce' ),
			'RU31' => __( 'Kirov Oblast', 'my-country-states-for-woocommerce' ),
			'RU32' => __( 'Komi Republic', 'my-country-states-for-woocommerce' ),
			'RU33' => __( 'Kostroma Oblast', 'my-country-states-for-woocommerce' ),
			'RU34' => __( 'Krasnodar Krai', 'my-country-states-for-woocommerce' ),
			'RU35' => __( 'Krasnoyarsk Krai', 'my-country-states-for-woocommerce' ),
			'RU36' => __( 'Kurgan Oblast', 'my-country-states-for-woocommerce' ),
			'RU37' => __( 'Kursk Oblast', 'my-country-states-for-woocommerce' ),
			'RU38' => __( 'Leningrad Oblast', 'my-country-states-for-woocommerce' ),
			'RU39' => __( 'Lipetsk Oblast', 'my-country-states-for-woocommerce' ),
			'RU40' => __( 'Magadan Oblast', 'my-country-states-for-woocommerce' ),
			'RU41' => __( 'Mari El Republic', 'my-country-states-for-woocommerce' ),
			'RU42' => __( 'Republic of Mordovia', 'my-country-states-for-woocommerce' ),
			'RU43' => __( 'Moscow Oblast', 'my-country-states-for-woocommerce' ),
			'RU44' => __( 'Moscow', 'my-country-states-for-woocommerce' ),
			'RU45' => __( 'Murmansk Oblast', 'my-country-states-for-woocommerce' ),
			'RU46' => __( 'Nenets Autonomous Okrug', 'my-country-states-for-woocommerce' ),
			'RU47' => __( 'Nizhny Novgorod Oblast', 'my-country-states-for-woocommerce' ),
			'RU48' => __( 'Novgorod Oblast', 'my-country-states-for-woocommerce' ),
			'RU49' => __( 'Novosibirsk Oblast', 'my-country-states-for-woocommerce' ),
			'RU50' => __( 'Omsk Oblast', 'my-country-states-for-woocommerce' ),
			'RU51' => __( 'Orenburg Oblast', 'my-country-states-for-woocommerce' ),
			'RU52' => __( 'Oryol Oblast', 'my-country-states-for-woocommerce' ),
			'RU53' => __( 'Penza Oblast', 'my-country-states-for-woocommerce' ),
			'RU54' => __( 'Perm Krai', 'my-country-states-for-woocommerce' ),
			'RU55' => __( 'Primorsky Krai', 'my-country-states-for-woocommerce' ),
			'RU56' => __( 'Pskov Oblast', 'my-country-states-for-woocommerce' ),
			'RU57' => __( 'Republic of Karelia', 'my-country-states-for-woocommerce' ),
			'RU58' => __( 'Republic of Adygea', 'my-country-states-for-woocommerce' ),
			'RU59' => __( 'Republic of Altai', 'my-country-states-for-woocommerce' ),
			'RU60' => __( 'Republic of Bashkortostan', 'my-country-states-for-woocommerce' ),
			'RU61' => __( 'Republic of Buryatia', 'my-country-states-for-woocommerce' ),
			'RU62' => __( 'Republic of Dagestan', 'my-country-states-for-woocommerce' ),
			'RU63' => __( 'Republic of Ingushetia', 'my-country-states-for-woocommerce' ),
			'RU64' => __( 'Republic of Kabardino-Balkaria', 'my-country-states-for-woocommerce' ),
			'RU65' => __( 'Republic of Kalmykia', 'my-country-states-for-woocommerce' ),
			'RU66' => __( 'Republic of Karachay-Cherkessia', 'my-country-states-for-woocommerce' ),
			'RU67' => __( 'Republic of Khakassia', 'my-country-states-for-woocommerce' ),
			'RU68' => __( 'Republic of Mordovia', 'my-country-states-for-woocommerce' ),
			'RU69' => __( 'Republic of North Ossetia–Alania', 'my-country-states-for-woocommerce' ),
			'RU70' => __( 'Republic of Sakha (Yakutia)', 'my-country-states-for-woocommerce' ),
			'RU71' => __( 'Republic of Tatarstan', 'my-country-states-for-woocommerce' ),
			'RU72' => __( 'Republic of Tuva', 'my-country-states-for-woocommerce' ),
			'RU73' => __( 'Rostov Oblast', 'my-country-states-for-woocommerce' ),
			'RU74' => __( 'Ryazan Oblast', 'my-country-states-for-woocommerce' ),
			'RU75' => __( 'Saint Petersburg', 'my-country-states-for-woocommerce' ),
			'RU76' => __( 'Sakhalin Oblast', 'my-country-states-for-woocommerce' ),
			'RU77' => __( 'Samara Oblast', 'my-country-states-for-woocommerce' ),
			'RU78' => __( 'Saratov Oblast', 'my-country-states-for-woocommerce' ),
			'RU79' => __( 'Republic of North Ossetia-Alania', 'my-country-states-for-woocommerce' ),
			'RU80' => __( 'Smolensk Oblast', 'my-country-states-for-woocommerce' ),
			'RU81' => __( 'Stavropol Krai', 'my-country-states-for-woocommerce' ),
			'RU82' => __( 'Sverd', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_ru', $states );
	}

	/**
	 * States / Provinces of Rwanda.
	 *
	 * Return the array of states/provinces of Rwanda. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_rw() {

		$states = array(
			'RW01' => __( 'City of Kigali', 'my-country-states-for-woocommerce' ),
			'RW02' => __( 'Eastern Province', 'my-country-states-for-woocommerce' ),
			'RW03' => __( 'Northern Province', 'my-country-states-for-woocommerce' ),
			'RW04' => __( 'Southern Province', 'my-country-states-for-woocommerce' ),
			'RW05' => __( 'Western Province', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_rw', $states );
	}

	/**
	 * States / Provinces of Saint Barthélemy.
	 *
	 * Return the array of states/provinces of Saint Barthélemy. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_bl() {

		$states = array(
			'BL01' => __( 'Gustavia', 'my-country-states-for-woocommerce' ),
			'BL02' => __( 'Saint-Jean', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_bl', $states );
	}

	/**
	 * States / Provinces of Saint Helena.
	 *
	 * Return the array of states/provinces of Saint Helena. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_sh() {

		$states = array(
			'SH01' => __( 'Blue Hill', 'my-country-states-for-woocommerce' ),
			'SH02' => __( 'Half Tree Hollow', 'my-country-states-for-woocommerce' ),
			'SH03' => __( 'Jamestown', 'my-country-states-for-woocommerce' ),
			'SH04' => __( 'Longwood', 'my-country-states-for-woocommerce' ),
			'SH05' => __( 'Saint Paul\'s', 'my-country-states-for-woocommerce' ),
			'SH06' => __( 'Sandy Bay', 'my-country-states-for-woocommerce' ),
			'SH07' => __( 'Saint Mary\'s', 'my-country-states-for-woocommerce' ),
			'SH08' => __( 'Alarm Forest', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_sh', $states );
	}

	/**
	 * States / Provinces of Saint Kitts and Nevis.
	 *
	 * Return the array of states/provinces of Saint Kitts and Nevis. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_kn() {

		$states = array(
			'KN01' => __( 'Christ Church Nichola Town', 'my-country-states-for-woocommerce' ),
			'KN02' => __( 'Saint Anne Sandy Point', 'my-country-states-for-woocommerce' ),
			'KN03' => __( 'Saint George Basseterre', 'my-country-states-for-woocommerce' ),
			'KN04' => __( 'Saint George Gingerland', 'my-country-states-for-woocommerce' ),
			'KN05' => __( 'Saint James Windward', 'my-country-states-for-woocommerce' ),
			'KN06' => __( 'Saint John Capisterre', 'my-country-states-for-woocommerce' ),
			'KN07' => __( 'Saint John Figtree', 'my-country-states-for-woocommerce' ),
			'KN08' => __( 'Saint Mary Cayon', 'my-country-states-for-woocommerce' ),
			'KN09' => __( 'Saint Paul Capisterre', 'my-country-states-for-woocommerce' ),
			'KN10' => __( 'Saint Paul Charlestown', 'my-country-states-for-woocommerce' ),
			'KN11' => __( 'Saint Peter Basseterre', 'my-country-states-for-woocommerce' ),
			'KN12' => __( 'Saint Thomas Lowland', 'my-country-states-for-woocommerce' ),
			'KN13' => __( 'Saint Thomas Middle Island', 'my-country-states-for-woocommerce' ),
			'KN14' => __( 'Trinity Palmetto Point', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_kn', $states );
	}

	/**
	 * States / Provinces of Saint Lucia.
	 *
	 * Return the array of states/provinces of Saint Lucia. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_lc() {

		$states = array(
			'LC01' => __( 'Anse la Raye', 'my-country-states-for-woocommerce' ),
			'LC02' => __( 'Castries', 'my-country-states-for-woocommerce' ),
			'LC03' => __( 'Choiseul', 'my-country-states-for-woocommerce' ),
			'LC04' => __( 'Dauphin', 'my-country-states-for-woocommerce' ),
			'LC05' => __( 'Dennery', 'my-country-states-for-woocommerce' ),
			'LC06' => __( 'Gros Islet', 'my-country-states-for-woocommerce' ),
			'LC07' => __( 'Laborie', 'my-country-states-for-woocommerce' ),
			'LC08' => __( 'Micoud', 'my-country-states-for-woocommerce' ),
			'LC09' => __( 'Praslin', 'my-country-states-for-woocommerce' ),
			'LC10' => __( 'Soufriere', 'my-country-states-for-woocommerce' ),
			'LC11' => __( 'Vieux Fort', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_lc', $states );
	}

	/**
	 * States / Provinces of Saint Martin (Dutch part).
	 *
	 * Return the array of states/provinces of Saint Martin (Dutch part). A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_sx() {

		$states = array(
			'SX01' => __( 'Sint Maarten', 'my-country-states-for-woocommerce' ),
			'SX02' => __( 'Dutch Quarter', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_sx', $states );
	}

	/**
	 * States / Provinces of Saint Martin (French part).
	 *
	 * Return the array of states/provinces of Saint Martin (French part). A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_mf() {

		$states = array(
			'MF01' => __( 'Marigot', 'my-country-states-for-woocommerce' ),
			'MF02' => __( 'Saint-Jean', 'my-country-states-for-woocommerce' ),
			'MF03' => __( 'Colombier', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_mf', $states );
	}

	/**
	 * States / Provinces of Saint Pierre and Miquelon.
	 *
	 * Return the array of states/provinces of Saint Pierre and Miquelon. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_pm() {

		$states = array(
			'PM01' => __( 'Saint-Pierre', 'my-country-states-for-woocommerce' ),
			'PM02' => __( 'Miquelon-Langlade', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_pm', $states );
	}

	/**
	 * States / Provinces of Saint Vincent and the Grenadines.
	 *
	 * Return the array of states/provinces of Saint Vincent and the Grenadines. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_vc() {

		$states = array(
			'VC01' => __( 'Saint Vincent', 'my-country-states-for-woocommerce' ),
			'VC02' => __( 'Bequia', 'my-country-states-for-woocommerce' ),
			'VC03' => __( 'Mustique', 'my-country-states-for-woocommerce' ),
			'VC04' => __( 'Canouan', 'my-country-states-for-woocommerce' ),
			'VC05' => __( 'Union Island', 'my-country-states-for-woocommerce' ),
			'VC06' => __( 'Mayreau', 'my-country-states-for-woocommerce' ),
			'VC07' => __( 'Petit St. Vincent', 'my-country-states-for-woocommerce' ),
			'VC08' => __( 'Palm Island', 'my-country-states-for-woocommerce' ),
			'VC09' => __( 'Tobago Cays', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_vc', $states );
	}

	/**
	 * States / Provinces of Samoa.
	 *
	 * Return the array of states/provinces of Samoa. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_ws() {

		$states = array(
			'WS01' => __( 'A\'ana', 'my-country-states-for-woocommerce' ),
			'WS02' => __( 'Aiga-i-le-Tai', 'my-country-states-for-woocommerce' ),
			'WS03' => __( 'Atua', 'my-country-states-for-woocommerce' ),
			'WS04' => __( 'Fa\'asaleleaga', 'my-country-states-for-woocommerce' ),
			'WS05' => __( 'Gaga\'emauga', 'my-country-states-for-woocommerce' ),
			'WS06' => __( 'Gagaifomauga', 'my-country-states-for-woocommerce' ),
			'WS07' => __( 'Palauli', 'my-country-states-for-woocommerce' ),
			'WS08' => __( 'Satupa\'itea', 'my-country-states-for-woocommerce' ),
			'WS09' => __( 'Tuamasaga', 'my-country-states-for-woocommerce' ),
			'WS10' => __( 'Va\'a-o-Fonoti', 'my-country-states-for-woocommerce' ),
			'WS11' => __( 'Vaisigano', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_ws', $states );
	}

	/**
	 * States / Provinces of San Marino.
	 *
	 * Return the array of states/provinces of San Marino. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_sm() {

		$states = array(
			'SM01' => __( 'Acquaviva', 'my-country-states-for-woocommerce' ),
			'SM02' => __( 'Borgo Maggiore', 'my-country-states-for-woocommerce' ),
			'SM03' => __( 'Chiesanuova', 'my-country-states-for-woocommerce' ),
			'SM04' => __( 'Domagnano', 'my-country-states-for-woocommerce' ),
			'SM05' => __( 'Faetano', 'my-country-states-for-woocommerce' ),
			'SM06' => __( 'Fiorentino', 'my-country-states-for-woocommerce' ),
			'SM07' => __( 'Montegiardino', 'my-country-states-for-woocommerce' ),
			'SM08' => __( 'City of San Marino', 'my-country-states-for-woocommerce' ),
			'SM09' => __( 'Serravalle', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_sm', $states );
	}

	/**
	 * States / Provinces of São Tomé and Príncipe.
	 *
	 * Return the array of states/provinces of São Tomé and Príncipe. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_st() {

		$states = array(
			'ST01' => __( 'São Tomé Province', 'my-country-states-for-woocommerce' ),
			'ST02' => __( 'Príncipe Province', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_st', $states );
	}

	/**
	 * States / Provinces of Saudi Arabia.
	 *
	 * Return the array of states/provinces of Saudi Arabia. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_sa() {

		$states = array(
			'SA01' => __( 'Al Bahah - Al Bahah', 'my-country-states-for-woocommerce' ),
			'SA02' => __( 'Al Jawf - Sakakah', 'my-country-states-for-woocommerce' ),
			'SA03' => __( 'Al Madinah - Medina', 'my-country-states-for-woocommerce' ),
			'SA04' => __( 'Al-Qassim - Buraidah', 'my-country-states-for-woocommerce' ),
			'SA05' => __( 'Ar Riyad - Riyadh', 'my-country-states-for-woocommerce' ),
			'SA06' => __( 'Ash Sharqiyah (Eastern Province) - Dammam', 'my-country-states-for-woocommerce' ),
			'SA07' => __( '\'Asir - Abha', 'my-country-states-for-woocommerce' ),
			'SA08' => __( 'Ha\'il - Ha\'il', 'my-country-states-for-woocommerce' ),
			'SA09' => __( 'Jazan - Jazan City', 'my-country-states-for-woocommerce' ),
			'SA10' => __( 'Makkah - Mecca', 'my-country-states-for-woocommerce' ),
			'SA11' => __( 'Najran - Najran', 'my-country-states-for-woocommerce' ),
			'SA12' => __( 'Northern Borders - Arar', 'my-country-states-for-woocommerce' ),
			'SA13' => __( 'Tabuk - Tabuk', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_sa', $states );
	}

	/**
	 * States / Provinces of Seychelles.
	 *
	 * Return the array of states/provinces of Seychelles. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_sc() {

		$states = array(
			'SC01' => __( 'Anse aux Pins', 'my-country-states-for-woocommerce' ),
			'SC02' => __( 'Anse Boileau', 'my-country-states-for-woocommerce' ),
			'SC03' => __( 'Anse Étoile', 'my-country-states-for-woocommerce' ),
			'SC04' => __( 'Anse Royale', 'my-country-states-for-woocommerce' ),
			'SC05' => __( 'Au Cap', 'my-country-states-for-woocommerce' ),
			'SC06' => __( 'Baie Lazare', 'my-country-states-for-woocommerce' ),
			'SC07' => __( 'Baie Sainte Anne', 'my-country-states-for-woocommerce' ),
			'SC08' => __( 'Beau Vallon', 'my-country-states-for-woocommerce' ),
			'SC09' => __( 'Bel Air', 'my-country-states-for-woocommerce' ),
			'SC10' => __( 'Bel Ombre', 'my-country-states-for-woocommerce' ),
			'SC11' => __( 'Cascade', 'my-country-states-for-woocommerce' ),
			'SC12' => __( 'Glacis', 'my-country-states-for-woocommerce' ),
			'SC13' => __( 'Grand\' Anse Mahe', 'my-country-states-for-woocommerce' ),
			'SC14' => __( 'Grand\' Anse Praslin', 'my-country-states-for-woocommerce' ),
			'SC15' => __( 'La Digue', 'my-country-states-for-woocommerce' ),
			'SC16' => __( 'La Rivière Anglaise', 'my-country-states-for-woocommerce' ),
			'SC17' => __( 'Les Mamelles', 'my-country-states-for-woocommerce' ),
			'SC18' => __( 'Mont Buxton', 'my-country-states-for-woocommerce' ),
			'SC19' => __( 'Mont Fleuri', 'my-country-states-for-woocommerce' ),
			'SC20' => __( 'Plaisance', 'my-country-states-for-woocommerce' ),
			'SC21' => __( 'Pointe La Rue', 'my-country-states-for-woocommerce' ),
			'SC22' => __( 'Port Glaud', 'my-country-states-for-woocommerce' ),
			'SC23' => __( 'Roche Caiman', 'my-country-states-for-woocommerce' ),
			'SC24' => __( 'Saint Louis', 'my-country-states-for-woocommerce' ),
			'SC25' => __( 'Takamaka', 'my-country-states-for-woocommerce' ),
			'SC26' => __( 'English River', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_sc', $states );
	}

	/**
	 * States / Provinces of Sierra Leone.
	 *
	 * Return the array of states/provinces of Sierra Leone. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_sl() {

		$states = array(
			'SL01' => __( 'Eastern Province', 'my-country-states-for-woocommerce' ),
			'SL02' => __( 'Northern Province', 'my-country-states-for-woocommerce' ),
			'SL03' => __( 'Southern Province', 'my-country-states-for-woocommerce' ),
			'SL04' => __( 'Western Area', 'my-country-states-for-woocommerce' ),
			'SL05' => __( 'North West Province', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_sl', $states );
	}

	/**
	 * States / Provinces of Singapore.
	 *
	 * Return the array of states/provinces of Singapore. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_sg() {

		$states = array(
			'SG01' => __( 'Central Region', 'my-country-states-for-woocommerce' ),
			'SG02' => __( 'East Region', 'my-country-states-for-woocommerce' ),
			'SG03' => __( 'North Region', 'my-country-states-for-woocommerce' ),
			'SG04' => __( 'North-East Region', 'my-country-states-for-woocommerce' ),
			'SG05' => __( 'West Region', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_sg', $states );
	}

	/**
	 * States / Provinces of Slovakia.
	 *
	 * Return the array of states/provinces of Slovakia. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_sk() {

		$states = array(
			'SK01' => __( 'Bratislava Region', 'my-country-states-for-woocommerce' ),
			'SK02' => __( 'Trnava Region', 'my-country-states-for-woocommerce' ),
			'SK03' => __( 'Trenčín Region', 'my-country-states-for-woocommerce' ),
			'SK04' => __( 'Nitra Region', 'my-country-states-for-woocommerce' ),
			'SK05' => __( 'Žilina Region', 'my-country-states-for-woocommerce' ),
			'SK06' => __( 'Banská Bystrica Region', 'my-country-states-for-woocommerce' ),
			'SK07' => __( 'Prešov Region', 'my-country-states-for-woocommerce' ),
			'SK08' => __( 'Košice Region', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_sk', $states );
	}

	/**
	 * States / Provinces of Slovenia.
	 *
	 * Return the array of states/provinces of Slovenia. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_si() {

		$states = array(
			'SI01' => __( 'Pomurska', 'my-country-states-for-woocommerce' ),
			'SI02' => __( 'Podravska', 'my-country-states-for-woocommerce' ),
			'SI03' => __( 'Koroška', 'my-country-states-for-woocommerce' ),
			'SI04' => __( 'Savinjska', 'my-country-states-for-woocommerce' ),
			'SI05' => __( 'Zasavska', 'my-country-states-for-woocommerce' ),
			'SI06' => __( 'Spodnjeposavska', 'my-country-states-for-woocommerce' ),
			'SI07' => __( 'Jugovzhodna Slovenija', 'my-country-states-for-woocommerce' ),
			'SI08' => __( 'Osrednjeslovenska', 'my-country-states-for-woocommerce' ),
			'SI09' => __( 'Gorenjska', 'my-country-states-for-woocommerce' ),
			'SI10' => __( 'Notranjsko-kraška', 'my-country-states-for-woocommerce' ),
			'SI11' => __( 'Goriška', 'my-country-states-for-woocommerce' ),
			'SI12' => __( 'Obalno-kraška', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_si', $states );
	}

	/**
	 * States / Provinces of Solomon Islands.
	 *
	 * Return the array of states/provinces of Solomon Islands. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_sb() {

		$states = array(
			'SB01' => __( 'Central Province', 'my-country-states-for-woocommerce' ),
			'SB02' => __( 'Choiseul Province', 'my-country-states-for-woocommerce' ),
			'SB03' => __( 'Guadalcanal Province', 'my-country-states-for-woocommerce' ),
			'SB04' => __( 'Isabel Province', 'my-country-states-for-woocommerce' ),
			'SB05' => __( 'Makira-Ulawa Province', 'my-country-states-for-woocommerce' ),
			'SB06' => __( 'Malaita Province', 'my-country-states-for-woocommerce' ),
			'SB07' => __( 'Rennell and Bellona Province', 'my-country-states-for-woocommerce' ),
			'SB08' => __( 'Temotu Province', 'my-country-states-for-woocommerce' ),
			'SB09' => __( 'Western Province', 'my-country-states-for-woocommerce' ),
			'SB10' => __( 'Honiara', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_sb', $states );
	}

	/**
	 * States / Provinces of Somalia.
	 *
	 * Return the array of states/provinces of Somalia. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_so() {

		$states = array(
			'SO01' => __( 'Awdal', 'my-country-states-for-woocommerce' ),
			'SO02' => __( 'Bakool', 'my-country-states-for-woocommerce' ),
			'SO03' => __( 'Banaadir', 'my-country-states-for-woocommerce' ),
			'SO04' => __( 'Bari', 'my-country-states-for-woocommerce' ),
			'SO05' => __( 'Bay', 'my-country-states-for-woocommerce' ),
			'SO06' => __( 'Galguduud', 'my-country-states-for-woocommerce' ),
			'SO07' => __( 'Gedo', 'my-country-states-for-woocommerce' ),
			'SO08' => __( 'Hiiraan', 'my-country-states-for-woocommerce' ),
			'SO09' => __( 'Jubbada Dhexe (Middle Juba)', 'my-country-states-for-woocommerce' ),
			'SO10' => __( 'Jubbada Hoose (Lower Juba)', 'my-country-states-for-woocommerce' ),
			'SO11' => __( 'Mudug', 'my-country-states-for-woocommerce' ),
			'SO12' => __( 'Nugaal', 'my-country-states-for-woocommerce' ),
			'SO13' => __( 'Sanaag', 'my-country-states-for-woocommerce' ),
			'SO14' => __( 'Shabeellaha Dhexe (Middle Shabelle)', 'my-country-states-for-woocommerce' ),
			'SO15' => __( 'Shabeellaha Hoose (Lower Shabelle)', 'my-country-states-for-woocommerce' ),
			'SO16' => __( 'Sool', 'my-country-states-for-woocommerce' ),
			'SO17' => __( 'Togdheer', 'my-country-states-for-woocommerce' ),
			'SO18' => __( 'Woqooyi Galbeed (West Hargeisa)', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_so', $states );
	}

	/**
	 * States / Provinces of South Georgia/Sandwich Islands.
	 *
	 * Return the array of states/provinces of South Georgia/Sandwich Islands. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_gs() {

		// South Georgia and the South Sandwich Islands is a British Overseas Territory in the southern Atlantic Ocean. There are no administrative divisions in the territory.
		$states = array();

		return apply_filters( 'mcsfwc_states_of_gs', $states );
	}

	/**
	 * States / Provinces of South Korea.
	 *
	 * Return the array of states/provinces of South Korea. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_kr() {

		$states = array(
			'KR01' => __( 'Gyeonggi-do', 'my-country-states-for-woocommerce' ),
			'KR02' => __( 'Gangwon-do', 'my-country-states-for-woocommerce' ),
			'KR03' => __( 'North Chungcheong Province', 'my-country-states-for-woocommerce' ),
			'KR04' => __( 'South Chungcheong Province', 'my-country-states-for-woocommerce' ),
			'KR05' => __( 'North Jeolla Province', 'my-country-states-for-woocommerce' ),
			'KR06' => __( 'South Jeolla Province', 'my-country-states-for-woocommerce' ),
			'KR07' => __( 'North Gyeongsang Province', 'my-country-states-for-woocommerce' ),
			'KR08' => __( 'South Gyeongsang Province', 'my-country-states-for-woocommerce' ),
			'KR09' => __( 'Seoul', 'my-country-states-for-woocommerce' ),
			'KR10' => __( 'Busan', 'my-country-states-for-woocommerce' ),
			'KR11' => __( 'Incheon', 'my-country-states-for-woocommerce' ),
			'KR12' => __( 'Daegu', 'my-country-states-for-woocommerce' ),
			'KR13' => __( 'Daejeon', 'my-country-states-for-woocommerce' ),
			'KR14' => __( 'Gwangju', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_kr', $states );
	}

	/**
	 * States / Provinces of South Sudan.
	 *
	 * Return the array of states/provinces of South Sudan. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_ss() {

		$states = array(
			'SS01' => __( 'Central Equatoria', 'my-country-states-for-woocommerce' ),
			'SS02' => __( 'Eastern Equatoria', 'my-country-states-for-woocommerce' ),
			'SS03' => __( 'Jonglei', 'my-country-states-for-woocommerce' ),
			'SS04' => __( 'Lakes', 'my-country-states-for-woocommerce' ),
			'SS05' => __( 'Northern Bahr el Ghazal', 'my-country-states-for-woocommerce' ),
			'SS06' => __( 'Unity', 'my-country-states-for-woocommerce' ),
			'SS07' => __( 'Upper Nile', 'my-country-states-for-woocommerce' ),
			'SS08' => __( 'Warrap', 'my-country-states-for-woocommerce' ),
			'SS09' => __( 'Western Bahr el Ghazal', 'my-country-states-for-woocommerce' ),
			'SS10' => __( 'Western Equatoria', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_ss', $states );
	}

	/**
	 * States / Provinces of Sri Lanka.
	 *
	 * Return the array of states/provinces of Sri Lanka. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_lk() {

		$states = array(
			'LK01' => __( 'Central Province', 'my-country-states-for-woocommerce' ),
			'LK02' => __( 'Eastern Province', 'my-country-states-for-woocommerce' ),
			'LK03' => __( 'North Central Province', 'my-country-states-for-woocommerce' ),
			'LK04' => __( 'Northern Province', 'my-country-states-for-woocommerce' ),
			'LK05' => __( 'North Western Province', 'my-country-states-for-woocommerce' ),
			'LK06' => __( 'Sabaragamuwa Province', 'my-country-states-for-woocommerce' ),
			'LK07' => __( 'Southern Province', 'my-country-states-for-woocommerce' ),
			'LK08' => __( 'Uva Province', 'my-country-states-for-woocommerce' ),
			'LK09' => __( 'Western Province', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_lk', $states );
	}

	/**
	 * States / Provinces of Sudan.
	 *
	 * Return the array of states/provinces of Sudan. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_sd() {

		$states = array(
			'SD01' => __( 'Al Jazirah', 'my-country-states-for-woocommerce' ),
			'SD02' => __( 'Al Qadarif', 'my-country-states-for-woocommerce' ),
			'SD03' => __( 'Blue Nile', 'my-country-states-for-woocommerce' ),
			'SD04' => __( 'Central Darfur', 'my-country-states-for-woocommerce' ),
			'SD05' => __( 'East Darfur', 'my-country-states-for-woocommerce' ),
			'SD06' => __( 'Gedaref', 'my-country-states-for-woocommerce' ),
			'SD07' => __( 'Kassala', 'my-country-states-for-woocommerce' ),
			'SD08' => __( 'Khartoum', 'my-country-states-for-woocommerce' ),
			'SD09' => __( 'North Darfur', 'my-country-states-for-woocommerce' ),
			'SD10' => __( 'North Kordofan', 'my-country-states-for-woocommerce' ),
			'SD11' => __( 'Northern', 'my-country-states-for-woocommerce' ),
			'SD12' => __( 'Red Sea', 'my-country-states-for-woocommerce' ),
			'SD13' => __( 'River Nile', 'my-country-states-for-woocommerce' ),
			'SD14' => __( 'Sennar', 'my-country-states-for-woocommerce' ),
			'SD15' => __( 'South Darfur', 'my-country-states-for-woocommerce' ),
			'SD16' => __( 'South Kordofan', 'my-country-states-for-woocommerce' ),
			'SD17' => __( 'West Darfur', 'my-country-states-for-woocommerce' ),
			'SD18' => __( 'White Nile', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_sd', $states );
	}

	/**
	 * States / Provinces of Suriname.
	 *
	 * Return the array of states/provinces of Suriname. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_sr() {

		$states = array(
			'SR01' => __( 'Brokopondo', 'my-country-states-for-woocommerce' ),
			'SR02' => __( 'Commewijne', 'my-country-states-for-woocommerce' ),
			'SR03' => __( 'Coronie', 'my-country-states-for-woocommerce' ),
			'SR04' => __( 'Marowijne', 'my-country-states-for-woocommerce' ),
			'SR05' => __( 'Nickerie', 'my-country-states-for-woocommerce' ),
			'SR06' => __( 'Para', 'my-country-states-for-woocommerce' ),
			'SR07' => __( 'Paramaribo', 'my-country-states-for-woocommerce' ),
			'SR08' => __( 'Saramacca', 'my-country-states-for-woocommerce' ),
			'SR09' => __( 'Sipaliwini', 'my-country-states-for-woocommerce' ),
			'SR10' => __( 'Wanica', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_sr', $states );
	}

	/**
	 * States / Provinces of Svalbard and Jan Mayen.
	 *
	 * Return the array of states/provinces of Svalbard and Jan Mayen. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_sj() {

		$states = array(
			'SJ01' => __( 'Barentsburg', 'my-country-states-for-woocommerce' ),
			'SJ02' => __( 'Longyearbyen', 'my-country-states-for-woocommerce' ),
			'SJ03' => __( 'Ny-Ålesund', 'my-country-states-for-woocommerce' ),
			'SJ04' => __( 'Pyramiden', 'my-country-states-for-woocommerce' ),
			'SJ05' => __( 'Sveagruva', 'my-country-states-for-woocommerce' ),
			'SJ06' => __( 'Nybyen', 'my-country-states-for-woocommerce' ),
			'SJ07' => __( 'Bear Island', 'my-country-states-for-woocommerce' ),
			'SJ08' => __( 'Hopen', 'my-country-states-for-woocommerce' ),
			'SJ09' => __( 'Hornsund', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_sj', $states );
	}

	/**
	 * States / Provinces of Sweden.
	 *
	 * Return the array of states/provinces of Sweden. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_se() {

		$states = array(
			'SE01' => __( 'Blekinge', 'my-country-states-for-woocommerce' ),
			'SE02' => __( 'Dalarna', 'my-country-states-for-woocommerce' ),
			'SE03' => __( 'Gävleborg', 'my-country-states-for-woocommerce' ),
			'SE04' => __( 'Gotland', 'my-country-states-for-woocommerce' ),
			'SE05' => __( 'Halland', 'my-country-states-for-woocommerce' ),
			'SE06' => __( 'Jämtland', 'my-country-states-for-woocommerce' ),
			'SE07' => __( 'Jönköping', 'my-country-states-for-woocommerce' ),
			'SE08' => __( 'Kalmar', 'my-country-states-for-woocommerce' ),
			'SE09' => __( 'Kronoberg', 'my-country-states-for-woocommerce' ),
			'SE10' => __( 'Norrbotten', 'my-country-states-for-woocommerce' ),
			'SE11' => __( 'Örebro', 'my-country-states-for-woocommerce' ),
			'SE12' => __( 'Östergötland', 'my-country-states-for-woocommerce' ),
			'SE13' => __( 'Skåne', 'my-country-states-for-woocommerce' ),
			'SE14' => __( 'Södermanland', 'my-country-states-for-woocommerce' ),
			'SE15' => __( 'Stockholm', 'my-country-states-for-woocommerce' ),
			'SE16' => __( 'Uppsala', 'my-country-states-for-woocommerce' ),
			'SE17' => __( 'Värmland', 'my-country-states-for-woocommerce' ),
			'SE18' => __( 'Västerbotten', 'my-country-states-for-woocommerce' ),
			'SE19' => __( 'Västernorrland', 'my-country-states-for-woocommerce' ),
			'SE20' => __( 'Västmanland', 'my-country-states-for-woocommerce' ),
			'SE21' => __( 'Västra Götaland', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_se', $states );
	}

	/**
	 * States / Provinces of Syria.
	 *
	 * Return the array of states/provinces of Syria. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_sy() {

		$states = array(
			'SY01' => __( 'Aleppo', 'my-country-states-for-woocommerce' ),
			'SY02' => __( 'Damascus', 'my-country-states-for-woocommerce' ),
			'SY03' => __( 'Daraa', 'my-country-states-for-woocommerce' ),
			'SY04' => __( 'Deir ez-Zor', 'my-country-states-for-woocommerce' ),
			'SY05' => __( 'Hama', 'my-country-states-for-woocommerce' ),
			'SY06' => __( 'Al-Hasakah', 'my-country-states-for-woocommerce' ),
			'SY07' => __( 'Homs', 'my-country-states-for-woocommerce' ),
			'SY08' => __( 'Idlib', 'my-country-states-for-woocommerce' ),
			'SY09' => __( 'Latakia', 'my-country-states-for-woocommerce' ),
			'SY10' => __( 'Quneitra', 'my-country-states-for-woocommerce' ),
			'SY11' => __( 'Ar-Raqqah', 'my-country-states-for-woocommerce' ),
			'SY12' => __( 'Rif Dimashq', 'my-country-states-for-woocommerce' ),
			'SY13' => __( 'As-Suwayda', 'my-country-states-for-woocommerce' ),
			'SY14' => __( 'Tartus', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_sy', $states );
	}

	/**
	 * States / Provinces of Taiwan.
	 *
	 * Return the array of states/provinces of Taiwan. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_tw() {

		$states = array(
			'TW01' => __( 'New Taipei City', 'my-country-states-for-woocommerce' ),
			'TW02' => __( 'Taipei City', 'my-country-states-for-woocommerce' ),
			'TW03' => __( 'Taoyuan City', 'my-country-states-for-woocommerce' ),
			'TW04' => __( 'Taichung City', 'my-country-states-for-woocommerce' ),
			'TW05' => __( 'Tainan City', 'my-country-states-for-woocommerce' ),
			'TW06' => __( 'Kaohsiung City', 'my-country-states-for-woocommerce' ),
			'TW07' => __( 'Hsinchu County', 'my-country-states-for-woocommerce' ),
			'TW08' => __( 'Hsinchu City', 'my-country-states-for-woocommerce' ),
			'TW09' => __( 'Miaoli County', 'my-country-states-for-woocommerce' ),
			'TW10' => __( 'Changhua County', 'my-country-states-for-woocommerce' ),
			'TW11' => __( 'Nantou County', 'my-country-states-for-woocommerce' ),
			'TW12' => __( 'Yunlin County', 'my-country-states-for-woocommerce' ),
			'TW13' => __( 'Chiayi County', 'my-country-states-for-woocommerce' ),
			'TW14' => __( 'Chiayi City', 'my-country-states-for-woocommerce' ),
			'TW15' => __( 'Pingtung County', 'my-country-states-for-woocommerce' ),
			'TW16' => __( 'Yilan County', 'my-country-states-for-woocommerce' ),
			'TW17' => __( 'Hualien County', 'my-country-states-for-woocommerce' ),
			'TW18' => __( 'Taitung County', 'my-country-states-for-woocommerce' ),
			'TW19' => __( 'Kinmen County', 'my-country-states-for-woocommerce' ),
			'TW20' => __( 'Lienchiang County', 'my-country-states-for-woocommerce' ),
			'TW21' => __( 'Penghu County', 'my-country-states-for-woocommerce' ),
			'TW22' => __( 'Keelung City', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_tw', $states );
	}

	/**
	 * States / Provinces of Tajikistan.
	 *
	 * Return the array of states/provinces of Tajikistan. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_tj() {

		$states = array(
			'TJ01' => __( 'Viloyati Sughd', 'my-country-states-for-woocommerce' ),
			'TJ02' => __( 'Viloyati Khatlon', 'my-country-states-for-woocommerce' ),
			'TJ03' => __( 'Viloyati Mukhtori Kuhistoni Badakhshon', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_tj', $states );
	}

	/**
	 * States / Provinces of Timor-Leste.
	 *
	 * Return the array of states/provinces of Timor-Leste. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_tl() {

		$states = array(
			'TL01' => __( 'Aileu', 'my-country-states-for-woocommerce' ),
			'TL02' => __( 'Ainaro', 'my-country-states-for-woocommerce' ),
			'TL03' => __( 'Baucau', 'my-country-states-for-woocommerce' ),
			'TL04' => __( 'Bobonaro (Maliana)', 'my-country-states-for-woocommerce' ),
			'TL05' => __( 'Covalima (Suai)', 'my-country-states-for-woocommerce' ),
			'TL06' => __( 'Dili', 'my-country-states-for-woocommerce' ),
			'TL07' => __( 'Ermera', 'my-country-states-for-woocommerce' ),
			'TL08' => __( 'Lautem (Los Palos)', 'my-country-states-for-woocommerce' ),
			'TL09' => __( 'Liquiçá', 'my-country-states-for-woocommerce' ),
			'TL10' => __( 'Manatuto', 'my-country-states-for-woocommerce' ),
			'TL11' => __( 'Manufahi (Same)', 'my-country-states-for-woocommerce' ),
			'TL12' => __( 'Oecusse (Ambeno)', 'my-country-states-for-woocommerce' ),
			'TL13' => __( 'Viqueque', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_tl', $states );
	}

	/**
	 * States / Provinces of Togo.
	 *
	 * Return the array of states/provinces of Togo. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_tg() {

		$states = array(
			'TG01' => __( 'Savanes', 'my-country-states-for-woocommerce' ),
			'TG02' => __( 'Kara', 'my-country-states-for-woocommerce' ),
			'TG03' => __( 'Centrale', 'my-country-states-for-woocommerce' ),
			'TG04' => __( 'Plateaux', 'my-country-states-for-woocommerce' ),
			'TG05' => __( 'Maritime', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_tg', $states );
	}

	/**
	 * States / Provinces of Tokelau.
	 *
	 * Return the array of states/provinces of Tokelau. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_tk() {

		$states = array(
			'TK01' => __( 'Atafu', 'my-country-states-for-woocommerce' ),
			'TK02' => __( 'Nukunonu', 'my-country-states-for-woocommerce' ),
			'TK03' => __( 'Fakaofo', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_tk', $states );
	}

	/**
	 * States / Provinces of Tonga.
	 *
	 * Return the array of states/provinces of Tonga. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_to() {

		$states = array(
			'TO01' => __( 'Tongatapu', 'my-country-states-for-woocommerce' ),
			'TO02' => __( 'Ha\'apai', 'my-country-states-for-woocommerce' ),
			'TO03' => __( 'Vava\'u', 'my-country-states-for-woocommerce' ),
			'TO04' => __( '\'Eua', 'my-country-states-for-woocommerce' ),
			'TO05' => __( 'Niuas', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_to', $states );
	}

	/**
	 * States / Provinces of Trinidad and Tobago.
	 *
	 * Return the array of states/provinces of Trinidad and Tobago. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_tt() {

		$states = array(
			'TT01' => __( 'Arima', 'my-country-states-for-woocommerce' ),
			'TT02' => __( 'Chaguanas', 'my-country-states-for-woocommerce' ),
			'TT03' => __( 'Couva-Tabaquite-Talparo', 'my-country-states-for-woocommerce' ),
			'TT04' => __( 'Diego Martin', 'my-country-states-for-woocommerce' ),
			'TT05' => __( 'Mayaro-Rio Claro', 'my-country-states-for-woocommerce' ),
			'TT06' => __( 'Penal-Debe', 'my-country-states-for-woocommerce' ),
			'TT07' => __( 'Point Fortin', 'my-country-states-for-woocommerce' ),
			'TT08' => __( 'Port of Spain', 'my-country-states-for-woocommerce' ),
			'TT09' => __( 'Princes Town', 'my-country-states-for-woocommerce' ),
			'TT10' => __( 'San Fernando', 'my-country-states-for-woocommerce' ),
			'TT11' => __( 'Sangre Grande', 'my-country-states-for-woocommerce' ),
			'TT12' => __( 'Siparia', 'my-country-states-for-woocommerce' ),
			'TT13' => __( 'Tobago', 'my-country-states-for-woocommerce' ),
			'TT14' => __( 'Tunapuna-Piarco', 'my-country-states-for-woocommerce' ),
			'TT15' => __( 'City of Port of Spain', 'my-country-states-for-woocommerce' ),
			'TT16' => __( 'City of San Fernando', 'my-country-states-for-woocommerce' ),
			'TT17' => __( 'Borough of Arima', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_tt', $states );
	}

	/**
	 * States / Provinces of Tunisia.
	 *
	 * Return the array of states/provinces of Tunisia. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_tn() {

		$states = array(
			'TN01' => __( 'Tunis', 'my-country-states-for-woocommerce' ),
			'TN02' => __( 'Ariana', 'my-country-states-for-woocommerce' ),
			'TN03' => __( 'Ben Arous', 'my-country-states-for-woocommerce' ),
			'TN04' => __( 'Manouba', 'my-country-states-for-woocommerce' ),
			'TN05' => __( 'Nabeul', 'my-country-states-for-woocommerce' ),
			'TN06' => __( 'Zaghouan', 'my-country-states-for-woocommerce' ),
			'TN07' => __( 'Bizerte', 'my-country-states-for-woocommerce' ),
			'TN08' => __( 'Béja', 'my-country-states-for-woocommerce' ),
			'TN09' => __( 'Jendouba', 'my-country-states-for-woocommerce' ),
			'TN10' => __( 'Kef', 'my-country-states-for-woocommerce' ),
			'TN11' => __( 'Siliana', 'my-country-states-for-woocommerce' ),
			'TN12' => __( 'Kairouan', 'my-country-states-for-woocommerce' ),
			'TN13' => __( 'Kasserine', 'my-country-states-for-woocommerce' ),
			'TN14' => __( 'Sidi Bouzid', 'my-country-states-for-woocommerce' ),
			'TN15' => __( 'Sousse', 'my-country-states-for-woocommerce' ),
			'TN16' => __( 'Monastir', 'my-country-states-for-woocommerce' ),
			'TN17' => __( 'Mahdia', 'my-country-states-for-woocommerce' ),
			'TN18' => __( 'Sfax', 'my-country-states-for-woocommerce' ),
			'TN19' => __( 'Gabès', 'my-country-states-for-woocommerce' ),
			'TN20' => __( 'Medenine', 'my-country-states-for-woocommerce' ),
			'TN21' => __( 'Tataouine', 'my-country-states-for-woocommerce' ),
			'TN22' => __( 'Gafsa', 'my-country-states-for-woocommerce' ),
			'TN23' => __( 'Tozeur', 'my-country-states-for-woocommerce' ),
			'TN24' => __( 'Kebili', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_tn', $states );
	}

	/**
	 * States / Provinces of Turkmenistan.
	 *
	 * Return the array of states/provinces of Turkmenistan. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_tm() {

		$states = array(
			'TM01' => __( 'Ahal Region', 'my-country-states-for-woocommerce' ),
			'TM02' => __( 'Ashgabat (city)', 'my-country-states-for-woocommerce' ),
			'TM03' => __( 'Balkan Region', 'my-country-states-for-woocommerce' ),
			'TM04' => __( 'Daşoguz Region', 'my-country-states-for-woocommerce' ),
			'TM05' => __( 'Lebap Region', 'my-country-states-for-woocommerce' ),
			'TM06' => __( 'Mary Region', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_tm', $states );
	}

	/**
	 * States / Provinces of Turks and Caicos Islands.
	 *
	 * Return the array of states/provinces of Turks and Caicos Islands. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_tc() {

		$states = array(
			'TC01' => __( 'Grand Turk', 'my-country-states-for-woocommerce' ),
			'TC02' => __( 'Providenciales', 'my-country-states-for-woocommerce' ),
			'TC03' => __( 'North Caicos', 'my-country-states-for-woocommerce' ),
			'TC04' => __( 'Middle Caicos', 'my-country-states-for-woocommerce' ),
			'TC05' => __( 'South Caicos', 'my-country-states-for-woocommerce' ),
			'TC06' => __( 'Salt Cay', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_tc', $states );
	}

	/**
	 * States / Provinces of Tuvalu.
	 *
	 * Return the array of states/provinces of Tuvalu. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_tv() {

		$states = array(
			'TV01' => __( 'Nanumanga', 'my-country-states-for-woocommerce' ),
			'TV02' => __( 'Nanumea', 'my-country-states-for-woocommerce' ),
			'TV03' => __( 'Niutao', 'my-country-states-for-woocommerce' ),
			'TV04' => __( 'Nui', 'my-country-states-for-woocommerce' ),
			'TV05' => __( 'Nukufetau', 'my-country-states-for-woocommerce' ),
			'TV06' => __( 'Nukulaelae', 'my-country-states-for-woocommerce' ),
			'TV07' => __( 'Funafuti', 'my-country-states-for-woocommerce' ),
			'TV08' => __( 'Vaitupu', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_tv', $states );
	}

	/**
	 * States / Provinces of United Arab Emirates.
	 *
	 * Return the array of states/provinces of United Arab Emirates. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_ae() {

		$states = array(
			'AE01' => __( 'Abu Dhabi', 'my-country-states-for-woocommerce' ),
			'AE02' => __( 'Ajman', 'my-country-states-for-woocommerce' ),
			'AE03' => __( 'Dubai', 'my-country-states-for-woocommerce' ),
			'AE04' => __( 'Fujairah', 'my-country-states-for-woocommerce' ),
			'AE05' => __( 'Ras Al Khaimah', 'my-country-states-for-woocommerce' ),
			'AE06' => __( 'Sharjah', 'my-country-states-for-woocommerce' ),
			'AE07' => __( 'Umm Al Quwain', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_ae', $states );
	}

	/**
	 * States / Provinces of United Kingdom (UK).
	 *
	 * Return the array of states/provinces of United Kingdom (UK). A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_gb() {

		$states = array(
			'GB01' => __( 'England', 'my-country-states-for-woocommerce' ),
			'GB02' => __( 'Scotland', 'my-country-states-for-woocommerce' ),
			'GB03' => __( 'Wales', 'my-country-states-for-woocommerce' ),
			'GB04' => __( 'Northern Ireland', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_gb', $states );
	}

	/**
	 * States / Provinces of Uzbekistan.
	 *
	 * Return the array of states/provinces of Uzbekistan. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_uz() {

		$states = array(
			'UZ01' => __( 'Andijan', 'my-country-states-for-woocommerce' ),
			'UZ02' => __( 'Bukhara', 'my-country-states-for-woocommerce' ),
			'UZ03' => __( 'Fergana', 'my-country-states-for-woocommerce' ),
			'UZ04' => __( 'Jizzakh', 'my-country-states-for-woocommerce' ),
			'UZ05' => __( 'Karakalpakstan', 'my-country-states-for-woocommerce' ),
			'UZ06' => __( 'Namangan', 'my-country-states-for-woocommerce' ),
			'UZ07' => __( 'Navoiy', 'my-country-states-for-woocommerce' ),
			'UZ08' => __( 'Qashqadaryo', 'my-country-states-for-woocommerce' ),
			'UZ09' => __( 'Samarqand', 'my-country-states-for-woocommerce' ),
			'UZ10' => __( 'Sirdaryo', 'my-country-states-for-woocommerce' ),
			'UZ11' => __( 'Surxondaryo', 'my-country-states-for-woocommerce' ),
			'UZ12' => __( 'Tashkent', 'my-country-states-for-woocommerce' ),
			'UZ13' => __( 'Xorazm', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_uz', $states );
	}

	/**
	 * States / Provinces of Vanuatu.
	 *
	 * Return the array of states/provinces of Vanuatu. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_vu() {

		$states = array(
			'VU01' => __( 'Malampa', 'my-country-states-for-woocommerce' ),
			'VU02' => __( 'Penama', 'my-country-states-for-woocommerce' ),
			'VU03' => __( 'Sanma', 'my-country-states-for-woocommerce' ),
			'VU04' => __( 'Shefa', 'my-country-states-for-woocommerce' ),
			'VU05' => __( 'Tafea', 'my-country-states-for-woocommerce' ),
			'VU06' => __( 'Torba', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_vu', $states );
	}

	/**
	 * States / Provinces of Vatican.
	 *
	 * Return the array of states/provinces of Vatican. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_va() {

		// The Vatican City State is a landlocked sovereign city-state in Rome, Italy. It is the smallest country in the world by land area and population. It has no administrative divisions or provinces.
		$states = array();

		return apply_filters( 'mcsfwc_states_of_va', $states );
	}

	/**
	 * States / Provinces of Vietnam.
	 *
	 * Return the array of states/provinces of Vietnam. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_vn() {

		$states = array(
			'VN01' => __( 'An Giang', 'my-country-states-for-woocommerce' ),
			'VN02' => __( 'Bà Rịa–Vũng Tàu', 'my-country-states-for-woocommerce' ),
			'VN03' => __( 'Bắc Giang', 'my-country-states-for-woocommerce' ),
			'VN04' => __( 'Bắc Kạn', 'my-country-states-for-woocommerce' ),
			'VN05' => __( 'Bạc Liêu', 'my-country-states-for-woocommerce' ),
			'VN06' => __( 'Bắc Ninh', 'my-country-states-for-woocommerce' ),
			'VN07' => __( 'Bến Tre', 'my-country-states-for-woocommerce' ),
			'VN08' => __( 'Bình Định', 'my-country-states-for-woocommerce' ),
			'VN09' => __( 'Bình Dương', 'my-country-states-for-woocommerce' ),
			'VN10' => __( 'Bình Phước', 'my-country-states-for-woocommerce' ),
			'VN11' => __( 'Bình Thuận', 'my-country-states-for-woocommerce' ),
			'VN12' => __( 'Cà Mau', 'my-country-states-for-woocommerce' ),
			'VN13' => __( 'Cần Thơ', 'my-country-states-for-woocommerce' ),
			'VN14' => __( 'Cao Bằng', 'my-country-states-for-woocommerce' ),
			'VN15' => __( 'Đắk Lắk', 'my-country-states-for-woocommerce' ),
			'VN16' => __( 'Đắk Nông', 'my-country-states-for-woocommerce' ),
			'VN17' => __( 'Điện Biên', 'my-country-states-for-woocommerce' ),
			'VN18' => __( 'Đồng Nai', 'my-country-states-for-woocommerce' ),
			'VN19' => __( 'Đồng Tháp', 'my-country-states-for-woocommerce' ),
			'VN20' => __( 'Gia Lai', 'my-country-states-for-woocommerce' ),
			'VN21' => __( 'Hà Giang', 'my-country-states-for-woocommerce' ),
			'VN22' => __( 'Hải Dương', 'my-country-states-for-woocommerce' ),
			'VN23' => __( 'Hà Nam', 'my-country-states-for-woocommerce' ),
			'VN24' => __( 'Hà Tĩnh', 'my-country-states-for-woocommerce' ),
			'VN25' => __( 'Hải Phòng', 'my-country-states-for-woocommerce' ),
			'VN26' => __( 'Hậu Giang', 'my-country-states-for-woocommerce' ),
			'VN27' => __( 'Hòa Bình', 'my-country-states-for-woocommerce' ),
			'VN28' => __( 'Hưng Yên', 'my-country-states-for-woocommerce' ),
			'VN29' => __( 'Khánh Hòa', 'my-country-states-for-woocommerce' ),
			'VN30' => __( 'Kiên Giang', 'my-country-states-for-woocommerce' ),
			'VN31' => __( 'Kon Tum', 'my-country-states-for-woocommerce' ),
			'VN32' => __( 'Lai Châu', 'my-country-states-for-woocommerce' ),
			'VN33' => __( 'Lâm Đồng', 'my-country-states-for-woocommerce' ),
			'VN34' => __( 'Lạng Sơn', 'my-country-states-for-woocommerce' ),
			'VN35' => __( 'Lào Cai', 'my-country-states-for-woocommerce' ),
			'VN36' => __( 'Long An', 'my-country-states-for-woocommerce' ),
			'VN37' => __( 'Nam Định', 'my-country-states-for-woocommerce' ),
			'VN38' => __( 'Nghệ An', 'my-country-states-for-woocommerce' ),
			'VN39' => __( 'Ninh Bình', 'my-country-states-for-woocommerce' ),
			'VN40' => __( 'Ninh Thuận', 'my-country-states-for-woocommerce' ),
			'VN41' => __( 'Phú Thọ', 'my-country-states-for-woocommerce' ),
			'VN42' => __( 'Phú Yên', 'my-country-states-for-woocommerce' ),
			'VN43' => __( 'Quảng Bình', 'my-country-states-for-woocommerce' ),
			'VN44' => __( 'Quảng Nam', 'my-country-states-for-woocommerce' ),
			'VN45' => __( 'Quảng Ngãi', 'my-country-states-for-woocommerce' ),
			'VN46' => __( 'Quảng Ninh', 'my-country-states-for-woocommerce' ),
			'VN47' => __( 'Quảng Trị', 'my-country-states-for-woocommerce' ),
			'VN48' => __( 'Sóc Trăng', 'my-country-states-for-woocommerce' ),
			'VN49' => __( 'Sơn La', 'my-country-states-for-woocommerce' ),
			'VN50' => __( 'Tây Ninh', 'my-country-states-for-woocommerce' ),
			'VN51' => __( 'Thái Bình', 'my-country-states-for-woocommerce' ),
			'VN52' => __( 'Thái Nguyên', 'my-country-states-for-woocommerce' ),
			'VN53' => __( 'Thanh Hóa', 'my-country-states-for-woocommerce' ),
			'VN54' => __( 'Thừa Thiên Huế', 'my-country-states-for-woocommerce' ),
			'VN55' => __( 'Tiền Giang', 'my-country-states-for-woocommerce' ),
			'VN56' => __( 'Trà Vinh', 'my-country-states-for-woocommerce' ),
			'VN57' => __( 'Tuyên Quang', 'my-country-states-for-woocommerce' ),
			'VN58' => __( 'Vĩnh Long', 'my-country-states-for-woocommerce' ),
			'VN59' => __( 'Hà Nội (Hanoi)', 'my-country-states-for-woocommerce' ),
			'VN60' => __( 'Hải Phòng', 'my-country-states-for-woocommerce' ),
			'VN61' => __( 'Đà Nẵng', 'my-country-states-for-woocommerce' ),
			'VN62' => __( 'Cần Thơ', 'my-country-states-for-woocommerce' ),
			'VN63' => __( 'Hồ Chí Minh City (Saigon)', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_vn', $states );
	}

	/**
	 * States / Provinces of Virgin Islands (British).
	 *
	 * Return the array of states/provinces of Virgin Islands (British). A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_vg() {

		$states = array(
			'VG01' => __( 'Tortola', 'my-country-states-for-woocommerce' ),
			'VG02' => __( 'Virgin Gorda', 'my-country-states-for-woocommerce' ),
			'VG03' => __( 'Anegada', 'my-country-states-for-woocommerce' ),
			'VG04' => __( 'Jost Van Dyke', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_vg', $states );
	}

	/**
	 * States / Provinces of Virgin Islands (US).
	 *
	 * Return the array of states/provinces of Virgin Islands (US). A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_vi() {

		$states = array(
			'VI01' => __( 'Saint Croix', 'my-country-states-for-woocommerce' ),
			'VI02' => __( 'Saint John', 'my-country-states-for-woocommerce' ),
			'VI03' => __( 'Saint Thomas', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_vi', $states );
	}

	/**
	 * States / Provinces of Wallis and Futuna.
	 *
	 * Return the array of states/provinces of Wallis and Futuna. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_wf() {

		$states = array(
			'WF01' => __( 'Wallis', 'my-country-states-for-woocommerce' ),
			'WF02' => __( 'Futuna', 'my-country-states-for-woocommerce' ),
			'WF03' => __( 'Alofi', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_wf', $states );
	}

	/**
	 * States / Provinces of Western Sahara.
	 *
	 * Return the array of states/provinces of Western Sahara. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_eh() {

		$states = array(
			'EH01' => __( 'Moroccan-controlled Southern Province', 'my-country-states-for-woocommerce' ),
			'EH02' => __( 'Wilaya of Aousserd', 'my-country-states-for-woocommerce' ),
			'EH03' => __( 'Wilaya of Dakhla', 'my-country-states-for-woocommerce' ),
			'EH04' => __( 'Wilaya of Smara', 'my-country-states-for-woocommerce' ),
			'EH05' => __( 'Wilaya of Laâyoune', 'my-country-states-for-woocommerce' ),
			'EH06' => __( 'Wilaya of Boujdour', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_eh', $states );
	}

	/**
	 * States / Provinces of Yemen.
	 *
	 * Return the array of states/provinces of Yemen. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_ye() {

		$states = array(
			'YE01' => __( 'Abyan', 'my-country-states-for-woocommerce' ),
			'YE02' => __( 'Aden', 'my-country-states-for-woocommerce' ),
			'YE03' => __( 'Al Bayda', 'my-country-states-for-woocommerce' ),
			'YE04' => __( 'Al Hudaydah', 'my-country-states-for-woocommerce' ),
			'YE05' => __( 'Al Jawf', 'my-country-states-for-woocommerce' ),
			'YE06' => __( 'Al Mahrah', 'my-country-states-for-woocommerce' ),
			'YE07' => __( 'Al Mahwit', 'my-country-states-for-woocommerce' ),
			'YE08' => __( 'Amanat Al Asimaha', 'my-country-states-for-woocommerce' ),
			'YE09' => __( '\'Amran', 'my-country-states-for-woocommerce' ),
			'YE10' => __( 'Dhale', 'my-country-states-for-woocommerce' ),
			'YE11' => __( 'Dhamar', 'my-country-states-for-woocommerce' ),
			'YE12' => __( 'Hadramaut', 'my-country-states-for-woocommerce' ),
			'YE13' => __( 'Hajjah', 'my-country-states-for-woocommerce' ),
			'YE14' => __( 'Ibb', 'my-country-states-for-woocommerce' ),
			'YE15' => __( 'Lahij', 'my-country-states-for-woocommerce' ),
			'YE16' => __( 'Ma\'rib', 'my-country-states-for-woocommerce' ),
			'YE17' => __( 'Raymah', 'my-country-states-for-woocommerce' ),
			'YE18' => __( 'Sa\'dah', 'my-country-states-for-woocommerce' ),
			'YE19' => __( 'Sana\'a', 'my-country-states-for-woocommerce' ),
			'YE20' => __( 'Shabwah', 'my-country-states-for-woocommerce' ),
			'YE21' => __( 'Socotra', 'my-country-states-for-woocommerce' ),
			'YE22' => __( 'Taiz', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_ye', $states );
	}

	/**
	 * States / Provinces of Zimbabwe.
	 *
	 * Return the array of states/provinces of Zimbabwe. A filter hook is available as well
	 * that can be used to modify the list if needed.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_states_of_zw() {

		$states = array(
			'ZW01' => __( 'Bulawayo', 'my-country-states-for-woocommerce' ),
			'ZW02' => __( 'Harare', 'my-country-states-for-woocommerce' ),
			'ZW03' => __( 'Manicaland', 'my-country-states-for-woocommerce' ),
			'ZW04' => __( 'Mashonaland Central', 'my-country-states-for-woocommerce' ),
			'ZW05' => __( 'Mashonaland East', 'my-country-states-for-woocommerce' ),
			'ZW06' => __( 'Mashonaland West', 'my-country-states-for-woocommerce' ),
			'ZW07' => __( 'Masvingo', 'my-country-states-for-woocommerce' ),
			'ZW08' => __( 'Matabeleland North', 'my-country-states-for-woocommerce' ),
			'ZW09' => __( 'Matabeleland South', 'my-country-states-for-woocommerce' ),
			'ZW10' => __( 'Midlands', 'my-country-states-for-woocommerce' ),
		);

		return apply_filters( 'mcsfwc_states_of_zw', $states );
	}

}
