<?php
/**
 * WP Status IO API (http://docs.statusio.apiary.io/#)
 *
 * @package wp-statusio-api
 */

/*
* Plugin Name: WP StatusIO API
* Plugin URI: https://github.com/wp-api-libraries/wp-statusio-api
* Description: Perform API requests to StatusIO in WordPress.
* Author: WP API Libraries
* Version: 1.0.0
* Author URI: https://wp-api-libraries.com
* GitHub Plugin URI: https://github.com/wp-api-libraries/wp-statusio-api
* GitHub Branch: master
* Text Domain: wp-statusio-api
*/

/* Exit if accessed directly. */
if ( ! defined( 'ABSPATH' ) ) { exit; }

/* Check if class exists. */
if ( ! class_exists( 'StatusIoAPI' ) ) {

	/**
	 * StatusIoAPI Class.
	 */
	class StatusIoAPI {
		
	}
	
}