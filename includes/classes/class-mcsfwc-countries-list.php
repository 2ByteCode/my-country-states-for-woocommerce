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
 * This class containes the list of countries name, 2 letter code and state exist status.
 *
 * @since      1.0.0
 * @package    My_Country_States_For_WooCommerce
 * @subpackage My_Country_States_For_WooCommerce/includes
 * @author     2ByteCode <support@2bytecode.com>
 */
class MCSFWC_Countries_List {

	/**
	 * List of countries.
	 *
	 * Return the list of countries.
	 *
	 * @since    1.0.0
	 */
	public static function mcsfwc_list_of_countries() {

		$countries = array(
			'AF' => array(
				'country_name' => __( 'Afghanistan', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_af',
				'states_exist' => 'no',
			),
			'AX' => array(
				'country_name' => __( 'Åland Islands', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_ax',
				'states_exist' => 'no',
			),
			'AL' => array(
				'country_name' => __( 'Albania', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_al',
				'states_exist' => 'yes',
			),
			'DZ' => array(
				'country_name' => __( 'Algeria', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_dz',
				'states_exist' => 'yes',
			),
			'AS' => array(
				'country_name' => __( 'American Samoa', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_as',
				'states_exist' => 'no',
			),
			'AD' => array(
				'country_name' => __( 'Andorra', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_ad',
				'states_exist' => 'no',
			),
			'AO' => array(
				'country_name' => __( 'Angola', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_ao',
				'states_exist' => 'yes',
			),
			'AI' => array(
				'country_name' => __( 'Anguilla', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_ai',
				'states_exist' => 'no',
			),
			'AQ' => array(
				'country_name' => __( 'Antarctica', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_aq',
				'states_exist' => 'no',
			),
			'AG' => array(
				'country_name' => __( 'Antigua and Barbuda', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_ag',
				'states_exist' => 'no',
			),
			'AR' => array(
				'country_name' => __( 'Argentina', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_ar',
				'states_exist' => 'yes',
			),
			'AM' => array(
				'country_name' => __( 'Armenia', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_am',
				'states_exist' => 'no',
			),
			'AW' => array(
				'country_name' => __( 'Aruba', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_aw',
				'states_exist' => 'no',
			),
			'AU' => array(
				'country_name' => __( 'Australia', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_au',
				'states_exist' => 'yes',
			),
			'AT' => array(
				'country_name' => __( 'Austria', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_at',
				'states_exist' => 'no',
			),
			'AZ' => array(
				'country_name' => __( 'Azerbaijan', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_az',
				'states_exist' => 'no',
			),
			'BS' => array(
				'country_name' => __( 'Bahamas', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_bs',
				'states_exist' => 'no',
			),
			'BH' => array(
				'country_name' => __( 'Bahrain', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_bh',
				'states_exist' => 'no',
			),
			'BD' => array(
				'country_name' => __( 'Bangladesh', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_bd',
				'states_exist' => 'yes',
			),
			'BB' => array(
				'country_name' => __( 'Barbados', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_bb',
				'states_exist' => 'no',
			),
			'BY' => array(
				'country_name' => __( 'Belarus', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_by',
				'states_exist' => 'no',
			),
			'PW' => array(
				'country_name' => __( 'Belau', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_pw',
				'states_exist' => 'no',
			),
			'BE' => array(
				'country_name' => __( 'Belgium', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_be',
				'states_exist' => 'no',
			),
			'BZ' => array(
				'country_name' => __( 'Belize', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_bz',
				'states_exist' => 'no',
			),
			'BJ' => array(
				'country_name' => __( 'Benin', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_bj',
				'states_exist' => 'yes',
			),
			'BM' => array(
				'country_name' => __( 'Bermuda', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_bm',
				'states_exist' => 'no',
			),
			'BT' => array(
				'country_name' => __( 'Bhutan', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_bt',
				'states_exist' => 'no',
			),
			'BO' => array(
				'country_name' => __( 'Bolivia', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_bo',
				'states_exist' => 'yes',
			),
			'BQ' => array(
				'country_name' => __( 'Bonaire, Saint Eustatius and Saba', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_bq',
				'states_exist' => 'no',
			),
			'BA' => array(
				'country_name' => __( 'Bosnia and Herzegovina', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_ba',
				'states_exist' => 'no',
			),
			'BW' => array(
				'country_name' => __( 'Botswana', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_bw',
				'states_exist' => 'no',
			),
			'BV' => array(
				'country_name' => __( 'Bouvet Island', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_bv',
				'states_exist' => 'no',
			),
			'BR' => array(
				'country_name' => __( 'Brazil', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_br',
				'states_exist' => 'yes',
			),
			'IO' => array(
				'country_name' => __( 'British Indian Ocean Territory', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_io',
				'states_exist' => 'no',
			),
			'BN' => array(
				'country_name' => __( 'Brunei', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_bn',
				'states_exist' => 'no',
			),
			'BG' => array(
				'country_name' => __( 'Bulgaria', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_bg',
				'states_exist' => 'yes',
			),
			'BF' => array(
				'country_name' => __( 'Burkina Faso', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_bf',
				'states_exist' => 'no',
			),
			'BI' => array(
				'country_name' => __( 'Burundi', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_bi',
				'states_exist' => 'no',
			),
			'KH' => array(
				'country_name' => __( 'Cambodia', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_kh',
				'states_exist' => 'no',
			),
			'CM' => array(
				'country_name' => __( 'Cameroon', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_cm',
				'states_exist' => 'no',
			),
			'CA' => array(
				'country_name' => __( 'Canada', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_ca',
				'states_exist' => 'yes',
			),
			'CV' => array(
				'country_name' => __( 'Cape Verde', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_cv',
				'states_exist' => 'no',
			),
			'KY' => array(
				'country_name' => __( 'Cayman Islands', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_ky',
				'states_exist' => 'no',
			),
			'CF' => array(
				'country_name' => __( 'Central African Republic', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_cf',
				'states_exist' => 'no',
			),
			'TD' => array(
				'country_name' => __( 'Chad', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_td',
				'states_exist' => 'no',
			),
			'CL' => array(
				'country_name' => __( 'Chile', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_cl',
				'states_exist' => 'yes',
			),
			'CN' => array(
				'country_name' => __( 'China', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_cn',
				'states_exist' => 'yes',
			),
			'CX' => array(
				'country_name' => __( 'Christmas Island', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_cx',
				'states_exist' => 'no',
			),
			'CC' => array(
				'country_name' => __( 'Cocos (Keeling) Islands', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_cc',
				'states_exist' => 'no',
			),
			'CO' => array(
				'country_name' => __( 'Colombia', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_co',
				'states_exist' => 'yes',
			),
			'KM' => array(
				'country_name' => __( 'Comoros', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_km',
				'states_exist' => 'no',
			),
			'CG' => array(
				'country_name' => __( 'Congo (Brazzaville)', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_cg',
				'states_exist' => 'no',
			),
			'CD' => array(
				'country_name' => __( 'Congo (Kinshasa)', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_cd',
				'states_exist' => 'no',
			),
			'CK' => array(
				'country_name' => __( 'Cook Islands', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_ck',
				'states_exist' => 'no',
			),
			'CR' => array(
				'country_name' => __( 'Costa Rica', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_cr',
				'states_exist' => 'yes',
			),
			'HR' => array(
				'country_name' => __( 'Croatia', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_hr',
				'states_exist' => 'no',
			),
			'CU' => array(
				'country_name' => __( 'Cuba', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_cu',
				'states_exist' => 'no',
			),
			'CW' => array(
				'country_name' => __( 'Curaçao', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_cw',
				'states_exist' => 'no',
			),
			'CY' => array(
				'country_name' => __( 'Cyprus', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_cy',
				'states_exist' => 'no',
			),
			'CZ' => array(
				'country_name' => __( 'Czech Republic', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_cz',
				'states_exist' => 'no',
			),
			'DK' => array(
				'country_name' => __( 'Denmark', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_dk',
				'states_exist' => 'no',
			),
			'DJ' => array(
				'country_name' => __( 'Djibouti', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_dj',
				'states_exist' => 'no',
			),
			'DM' => array(
				'country_name' => __( 'Dominica', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_dm',
				'states_exist' => 'no',
			),
			'DO' => array(
				'country_name' => __( 'Dominican Republic', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_do',
				'states_exist' => 'yes',
			),
			'EC' => array(
				'country_name' => __( 'Ecuador', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_ec',
				'states_exist' => 'yes',
			),
			'EG' => array(
				'country_name' => __( 'Egypt', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_eg',
				'states_exist' => 'yes',
			),
			'SV' => array(
				'country_name' => __( 'El Salvador', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_sv',
				'states_exist' => 'yes',
			),
			'GQ' => array(
				'country_name' => __( 'Equatorial Guinea', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_gq',
				'states_exist' => 'no',
			),
			'ER' => array(
				'country_name' => __( 'Eritrea', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_er',
				'states_exist' => 'no',
			),
			'EE' => array(
				'country_name' => __( 'Estonia', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_ee',
				'states_exist' => 'no',
			),
			'SZ' => array(
				'country_name' => __( 'Eswatini', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_sz',
				'states_exist' => 'no',
			),
			'ET' => array(
				'country_name' => __( 'Ethiopia', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_et',
				'states_exist' => 'no',
			),
			'FK' => array(
				'country_name' => __( 'Falkland Islands', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_fk',
				'states_exist' => 'no',
			),
			'FO' => array(
				'country_name' => __( 'Faroe Islands', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_fo',
				'states_exist' => 'no',
			),
			'FJ' => array(
				'country_name' => __( 'Fiji', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_fj',
				'states_exist' => 'no',
			),
			'FI' => array(
				'country_name' => __( 'Finland', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_fi',
				'states_exist' => 'no',
			),
			'FR' => array(
				'country_name' => __( 'France', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_fr',
				'states_exist' => 'no',
			),
			'GF' => array(
				'country_name' => __( 'French Guiana', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_gf',
				'states_exist' => 'no',
			),
			'PF' => array(
				'country_name' => __( 'French Polynesia', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_pf',
				'states_exist' => 'no',
			),
			'TF' => array(
				'country_name' => __( 'French Southern Territories', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_tf',
				'states_exist' => 'no',
			),
			'GA' => array(
				'country_name' => __( 'Gabon', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_ga',
				'states_exist' => 'no',
			),
			'GM' => array(
				'country_name' => __( 'Gambia', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_gm',
				'states_exist' => 'no',
			),
			'GE' => array(
				'country_name' => __( 'Georgia', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_ge',
				'states_exist' => 'no',
			),
			'DE' => array(
				'country_name' => __( 'Germany', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_de',
				'states_exist' => 'yes',
			),
			'GH' => array(
				'country_name' => __( 'Ghana', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_gh',
				'states_exist' => 'yes',
			),
			'GI' => array(
				'country_name' => __( 'Gibraltar', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_gi',
				'states_exist' => 'no',
			),
			'GR' => array(
				'country_name' => __( 'Greece', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_gr',
				'states_exist' => 'yes',
			),
			'GL' => array(
				'country_name' => __( 'Greenland', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_gl',
				'states_exist' => 'no',
			),
			'GD' => array(
				'country_name' => __( 'Grenada', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_gd',
				'states_exist' => 'no',
			),
			'GP' => array(
				'country_name' => __( 'Guadeloupe', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_gp',
				'states_exist' => 'no',
			),
			'GU' => array(
				'country_name' => __( 'Guam', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_gu',
				'states_exist' => 'no',
			),
			'GT' => array(
				'country_name' => __( 'Guatemala', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_gt',
				'states_exist' => 'yes',
			),
			'GG' => array(
				'country_name' => __( 'Guernsey', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_gg',
				'states_exist' => 'no',
			),
			'GN' => array(
				'country_name' => __( 'Guinea', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_gn',
				'states_exist' => 'no',
			),
			'GW' => array(
				'country_name' => __( 'Guinea-Bissau', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_gw',
				'states_exist' => 'no',
			),
			'GY' => array(
				'country_name' => __( 'Guyana', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_gy',
				'states_exist' => 'no',
			),
			'HT' => array(
				'country_name' => __( 'Haiti', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_ht',
				'states_exist' => 'no',
			),
			'HM' => array(
				'country_name' => __( 'Heard Island and McDonald Islands', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_hm',
				'states_exist' => 'no',
			),
			'HN' => array(
				'country_name' => __( 'Honduras', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_hn',
				'states_exist' => 'yes',
			),
			'HK' => array(
				'country_name' => __( 'Hong Kong', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_hk',
				'states_exist' => 'yes',
			),
			'HU' => array(
				'country_name' => __( 'Hungary', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_hu',
				'states_exist' => 'yes',
			),
			'IS' => array(
				'country_name' => __( 'Iceland', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_is',
				'states_exist' => 'no',
			),
			'IN' => array(
				'country_name' => __( 'India', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_in',
				'states_exist' => 'yes',
			),
			'ID' => array(
				'country_name' => __( 'Indonesia', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_id',
				'states_exist' => 'yes',
			),
			'IR' => array(
				'country_name' => __( 'Iran', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_ir',
				'states_exist' => 'yes',
			),
			'IQ' => array(
				'country_name' => __( 'Iraq', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_iq',
				'states_exist' => 'no',
			),
			'IE' => array(
				'country_name' => __( 'Ireland', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_ie',
				'states_exist' => 'yes',
			),
			'IM' => array(
				'country_name' => __( 'Isle of Man', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_im',
				'states_exist' => 'no',
			),
			'IL' => array(
				'country_name' => __( 'Israel', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_il',
				'states_exist' => 'no',
			),
			'IT' => array(
				'country_name' => __( 'Italy', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_it',
				'states_exist' => 'yes',
			),
			'CI' => array(
				'country_name' => __( 'Ivory Coast', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_ci',
				'states_exist' => 'no',
			),
			'JM' => array(
				'country_name' => __( 'Jamaica', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_jm',
				'states_exist' => 'yes',
			),
			'JP' => array(
				'country_name' => __( 'Japan', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_jp',
				'states_exist' => 'yes',
			),
			'JE' => array(
				'country_name' => __( 'Jersey', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_je',
				'states_exist' => 'no',
			),
			'JO' => array(
				'country_name' => __( 'Jordan', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_jo',
				'states_exist' => 'no',
			),
			'KZ' => array(
				'country_name' => __( 'Kazakhstan', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_kz',
				'states_exist' => 'no',
			),
			'KE' => array(
				'country_name' => __( 'Kenya', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_ke',
				'states_exist' => 'yes',
			),
			'KI' => array(
				'country_name' => __( 'Kiribati', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_ki',
				'states_exist' => 'no',
			),
			'KW' => array(
				'country_name' => __( 'Kuwait', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_kw',
				'states_exist' => 'no',
			),
			'KG' => array(
				'country_name' => __( 'Kyrgyzstan', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_kg',
				'states_exist' => 'no',
			),
			'LA' => array(
				'country_name' => __( 'Laos', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_la',
				'states_exist' => 'yes',
			),
			'LV' => array(
				'country_name' => __( 'Latvia', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_lv',
				'states_exist' => 'no',
			),
			'LB' => array(
				'country_name' => __( 'Lebanon', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_lb',
				'states_exist' => 'no',
			),
			'LS' => array(
				'country_name' => __( 'Lesotho', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_ls',
				'states_exist' => 'no',
			),
			'LR' => array(
				'country_name' => __( 'Liberia', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_lr',
				'states_exist' => 'yes',
			),
			'LY' => array(
				'country_name' => __( 'Libya', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_ly',
				'states_exist' => 'no',
			),
			'LI' => array(
				'country_name' => __( 'Liechtenstein', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_li',
				'states_exist' => 'no',
			),
			'LT' => array(
				'country_name' => __( 'Lithuania', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_lt',
				'states_exist' => 'no',
			),
			'LU' => array(
				'country_name' => __( 'Luxembourg', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_lu',
				'states_exist' => 'no',
			),
			'MO' => array(
				'country_name' => __( 'Macao', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_mo',
				'states_exist' => 'no',
			),
			'MG' => array(
				'country_name' => __( 'Madagascar', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_mg',
				'states_exist' => 'no',
			),
			'MW' => array(
				'country_name' => __( 'Malawi', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_mw',
				'states_exist' => 'no',
			),
			'MY' => array(
				'country_name' => __( 'Malaysia', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_my',
				'states_exist' => 'yes',
			),
			'MV' => array(
				'country_name' => __( 'Maldives', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_mv',
				'states_exist' => 'no',
			),
			'ML' => array(
				'country_name' => __( 'Mali', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_ml',
				'states_exist' => 'no',
			),
			'MT' => array(
				'country_name' => __( 'Malta', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_mt',
				'states_exist' => 'no',
			),
			'MH' => array(
				'country_name' => __( 'Marshall Islands', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_mh',
				'states_exist' => 'no',
			),
			'MQ' => array(
				'country_name' => __( 'Martinique', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_mq',
				'states_exist' => 'no',
			),
			'MR' => array(
				'country_name' => __( 'Mauritania', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_mr',
				'states_exist' => 'no',
			),
			'MU' => array(
				'country_name' => __( 'Mauritius', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_mu',
				'states_exist' => 'no',
			),
			'YT' => array(
				'country_name' => __( 'Mayotte', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_yt',
				'states_exist' => 'no',
			),
			'MX' => array(
				'country_name' => __( 'Mexico', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_mx',
				'states_exist' => 'yes',
			),
			'FM' => array(
				'country_name' => __( 'Micronesia', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_fm',
				'states_exist' => 'no',
			),
			'MD' => array(
				'country_name' => __( 'Moldova', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_md',
				'states_exist' => 'yes',
			),
			'MC' => array(
				'country_name' => __( 'Monaco', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_mc',
				'states_exist' => 'no',
			),
			'MN' => array(
				'country_name' => __( 'Mongolia', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_mn',
				'states_exist' => 'no',
			),
			'ME' => array(
				'country_name' => __( 'Montenegro', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_me',
				'states_exist' => 'no',
			),
			'MS' => array(
				'country_name' => __( 'Montserrat', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_ms',
				'states_exist' => 'no',
			),
			'MA' => array(
				'country_name' => __( 'Morocco', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_ma',
				'states_exist' => 'no',
			),
			'MZ' => array(
				'country_name' => __( 'Mozambique', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_mz',
				'states_exist' => 'yes',
			),
			'MM' => array(
				'country_name' => __( 'Myanmar', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_mm',
				'states_exist' => 'no',
			),
			'NA' => array(
				'country_name' => __( 'Namibia', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_na',
				'states_exist' => 'yes',
			),
			'NR' => array(
				'country_name' => __( 'Nauru', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_nr',
				'states_exist' => 'no',
			),
			'NP' => array(
				'country_name' => __( 'Nepal', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_np',
				'states_exist' => 'yes',
			),
			'NL' => array(
				'country_name' => __( 'Netherlands', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_nl',
				'states_exist' => 'no',
			),
			'NC' => array(
				'country_name' => __( 'New Caledonia', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_nc',
				'states_exist' => 'no',
			),
			'NZ' => array(
				'country_name' => __( 'New Zealand', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_nz',
				'states_exist' => 'yes',
			),
			'NI' => array(
				'country_name' => __( 'Nicaragua', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_ni',
				'states_exist' => 'yes',
			),
			'NE' => array(
				'country_name' => __( 'Niger', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_ne',
				'states_exist' => 'no',
			),
			'NG' => array(
				'country_name' => __( 'Nigeria', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_ng',
				'states_exist' => 'yes',
			),
			'NU' => array(
				'country_name' => __( 'Niue', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_nu',
				'states_exist' => 'no',
			),
			'NF' => array(
				'country_name' => __( 'Norfolk Island', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_nf',
				'states_exist' => 'no',
			),
			'KP' => array(
				'country_name' => __( 'North Korea', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_kp',
				'states_exist' => 'no',
			),
			'MK' => array(
				'country_name' => __( 'North Macedonia', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_mk',
				'states_exist' => 'no',
			),
			'MP' => array(
				'country_name' => __( 'Northern Mariana Islands', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_mp',
				'states_exist' => 'no',
			),
			'NO' => array(
				'country_name' => __( 'Norway', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_no',
				'states_exist' => 'no',
			),
			'OM' => array(
				'country_name' => __( 'Oman', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_om',
				'states_exist' => 'no',
			),
			'PK' => array(
				'country_name' => __( 'Pakistan', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_pk',
				'states_exist' => 'yes',
			),
			'PS' => array(
				'country_name' => __( 'Palestinian Territory', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_ps',
				'states_exist' => 'no',
			),
			'PA' => array(
				'country_name' => __( 'Panama', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_pa',
				'states_exist' => 'yes',
			),
			'PG' => array(
				'country_name' => __( 'Papua New Guinea', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_pg',
				'states_exist' => 'no',
			),
			'PY' => array(
				'country_name' => __( 'Paraguay', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_py',
				'states_exist' => 'yes',
			),
			'PE' => array(
				'country_name' => __( 'Peru', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_pe',
				'states_exist' => 'yes',
			),
			'PH' => array(
				'country_name' => __( 'Philippines', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_ph',
				'states_exist' => 'yes',
			),
			'PN' => array(
				'country_name' => __( 'Pitcairn', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_pn',
				'states_exist' => 'no',
			),
			'PL' => array(
				'country_name' => __( 'Poland', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_pl',
				'states_exist' => 'no',
			),
			'PT' => array(
				'country_name' => __( 'Portugal', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_pt',
				'states_exist' => 'no',
			),
			'PR' => array(
				'country_name' => __( 'Puerto Rico', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_pr',
				'states_exist' => 'no',
			),
			'QA' => array(
				'country_name' => __( 'Qatar', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_qa',
				'states_exist' => 'no',
			),
			'RE' => array(
				'country_name' => __( 'Reunion', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_re',
				'states_exist' => 'no',
			),
			'RO' => array(
				'country_name' => __( 'Romania', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_ro',
				'states_exist' => 'yes',
			),
			'RU' => array(
				'country_name' => __( 'Russia', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_ru',
				'states_exist' => 'no',
			),
			'RW' => array(
				'country_name' => __( 'Rwanda', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_rw',
				'states_exist' => 'no',
			),
			'BL' => array(
				'country_name' => __( 'Saint Barthélemy', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_bl',
				'states_exist' => 'no',
			),
			'SH' => array(
				'country_name' => __( 'Saint Helena', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_sh',
				'states_exist' => 'no',
			),
			'KN' => array(
				'country_name' => __( 'Saint Kitts and Nevis', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_kn',
				'states_exist' => 'no',
			),
			'LC' => array(
				'country_name' => __( 'Saint Lucia', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_lc',
				'states_exist' => 'no',
			),
			'SX' => array(
				'country_name' => __( 'Saint Martin (Dutch part)', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_sx',
				'states_exist' => 'no',
			),
			'MF' => array(
				'country_name' => __( 'Saint Martin (French part)', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_mf',
				'states_exist' => 'no',
			),
			'PM' => array(
				'country_name' => __( 'Saint Pierre and Miquelon', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_pm',
				'states_exist' => 'no',
			),
			'VC' => array(
				'country_name' => __( 'Saint Vincent and the Grenadines', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_vc',
				'states_exist' => 'no',
			),
			'WS' => array(
				'country_name' => __( 'Samoa', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_ws',
				'states_exist' => 'no',
			),
			'SM' => array(
				'country_name' => __( 'San Marino', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_sm',
				'states_exist' => 'no',
			),
			'ST' => array(
				'country_name' => __( 'São Tomé and Príncipe', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_st',
				'states_exist' => 'no',
			),
			'SA' => array(
				'country_name' => __( 'Saudi Arabia', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_sa',
				'states_exist' => 'no',
			),
			'SN' => array(
				'country_name' => __( 'Senegal', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_sn',
				'states_exist' => 'yes',
			),
			'RS' => array(
				'country_name' => __( 'Serbia', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_rs',
				'states_exist' => 'yes',
			),
			'SC' => array(
				'country_name' => __( 'Seychelles', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_sc',
				'states_exist' => 'no',
			),
			'SL' => array(
				'country_name' => __( 'Sierra Leone', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_sl',
				'states_exist' => 'no',
			),
			'SG' => array(
				'country_name' => __( 'Singapore', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_sg',
				'states_exist' => 'no',
			),
			'SK' => array(
				'country_name' => __( 'Slovakia', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_sk',
				'states_exist' => 'no',
			),
			'SI' => array(
				'country_name' => __( 'Slovenia', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_si',
				'states_exist' => 'no',
			),
			'SB' => array(
				'country_name' => __( 'Solomon Islands', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_sb',
				'states_exist' => 'no',
			),
			'SO' => array(
				'country_name' => __( 'Somalia', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_so',
				'states_exist' => 'no',
			),
			'ZA' => array(
				'country_name' => __( 'South Africa', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_za',
				'states_exist' => 'yes',
			),
			'GS' => array(
				'country_name' => __( 'South Georgia/Sandwich Islands', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_gs',
				'states_exist' => 'no',
			),
			'KR' => array(
				'country_name' => __( 'South Korea', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_kr',
				'states_exist' => 'no',
			),
			'SS' => array(
				'country_name' => __( 'South Sudan', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_ss',
				'states_exist' => 'no',
			),
			'ES' => array(
				'country_name' => __( 'Spain', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_es',
				'states_exist' => 'yes',
			),
			'LK' => array(
				'country_name' => __( 'Sri Lanka', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_lk',
				'states_exist' => 'no',
			),
			'SD' => array(
				'country_name' => __( 'Sudan', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_sd',
				'states_exist' => 'no',
			),
			'SR' => array(
				'country_name' => __( 'Suriname', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_sr',
				'states_exist' => 'no',
			),
			'SJ' => array(
				'country_name' => __( 'Svalbard and Jan Mayen', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_sj',
				'states_exist' => 'no',
			),
			'SE' => array(
				'country_name' => __( 'Sweden', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_se',
				'states_exist' => 'no',
			),
			'CH' => array(
				'country_name' => __( 'Switzerland', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_ch',
				'states_exist' => 'yes',
			),
			'SY' => array(
				'country_name' => __( 'Syria', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_sy',
				'states_exist' => 'no',
			),
			'TW' => array(
				'country_name' => __( 'Taiwan', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_tw',
				'states_exist' => 'no',
			),
			'TJ' => array(
				'country_name' => __( 'Tajikistan', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_tj',
				'states_exist' => 'no',
			),
			'TZ' => array(
				'country_name' => __( 'Tanzania', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_tz',
				'states_exist' => 'yes',
			),
			'TH' => array(
				'country_name' => __( 'Thailand', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_th',
				'states_exist' => 'yes',
			),
			'TL' => array(
				'country_name' => __( 'Timor-Leste', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_tl',
				'states_exist' => 'no',
			),
			'TG' => array(
				'country_name' => __( 'Togo', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_tg',
				'states_exist' => 'no',
			),
			'TK' => array(
				'country_name' => __( 'Tokelau', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_tk',
				'states_exist' => 'no',
			),
			'TO' => array(
				'country_name' => __( 'Tonga', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_to',
				'states_exist' => 'no',
			),
			'TT' => array(
				'country_name' => __( 'Trinidad and Tobago', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_tt',
				'states_exist' => 'no',
			),
			'TN' => array(
				'country_name' => __( 'Tunisia', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_tn',
				'states_exist' => 'no',
			),
			'TR' => array(
				'country_name' => __( 'Turkey', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_tr',
				'states_exist' => 'yes',
			),
			'TM' => array(
				'country_name' => __( 'Turkmenistan', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_tm',
				'states_exist' => 'no',
			),
			'TC' => array(
				'country_name' => __( 'Turks and Caicos Islands', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_tc',
				'states_exist' => 'no',
			),
			'TV' => array(
				'country_name' => __( 'Tuvalu', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_tv',
				'states_exist' => 'no',
			),
			'UG' => array(
				'country_name' => __( 'Uganda', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_ug',
				'states_exist' => 'yes',
			),
			'UA' => array(
				'country_name' => __( 'Ukraine', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_ua',
				'states_exist' => 'yes',
			),
			'AE' => array(
				'country_name' => __( 'United Arab Emirates', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_ae',
				'states_exist' => 'no',
			),
			'GB' => array(
				'country_name' => __( 'United Kingdom (UK)', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_gb',
				'states_exist' => 'no',
			),
			'US' => array(
				'country_name' => __( 'United States (US)', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_us',
				'states_exist' => 'yes',
			),
			'UM' => array(
				'country_name' => __( 'United States (US) Minor Outlying Islands', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_um',
				'states_exist' => 'yes',
			),
			'UY' => array(
				'country_name' => __( 'Uruguay', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_uy',
				'states_exist' => 'yes',
			),
			'UZ' => array(
				'country_name' => __( 'Uzbekistan', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_uz',
				'states_exist' => 'no',
			),
			'VU' => array(
				'country_name' => __( 'Vanuatu', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_vu',
				'states_exist' => 'no',
			),
			'VA' => array(
				'country_name' => __( 'Vatican', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_va',
				'states_exist' => 'no',
			),
			'VE' => array(
				'country_name' => __( 'Venezuela', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_ve',
				'states_exist' => 'yes',
			),
			'VN' => array(
				'country_name' => __( 'Vietnam', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_vn',
				'states_exist' => 'no',
			),
			'VG' => array(
				'country_name' => __( 'Virgin Islands (British)', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_vg',
				'states_exist' => 'no',
			),
			'VI' => array(
				'country_name' => __( 'Virgin Islands (US)', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_vi',
				'states_exist' => 'no',
			),
			'WF' => array(
				'country_name' => __( 'Wallis and Futuna', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_wf',
				'states_exist' => 'no',
			),
			'EH' => array(
				'country_name' => __( 'Western Sahara', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_eh',
				'states_exist' => 'no',
			),
			'YE' => array(
				'country_name' => __( 'Yemen', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_ye',
				'states_exist' => 'no',
			),
			'ZM' => array(
				'country_name' => __( 'Zambia', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_zm',
				'states_exist' => 'yes',
			),
			'ZW' => array(
				'country_name' => __( 'Zimbabwe', 'my-country-states-for-woocommerce' ),
				'func_name'    => 'mcsfwc_states_of_zw',
				'states_exist' => 'no',
			),
		);

		return apply_filters( 'mcsfwc_list_of_countries', $countries );
	}

}
