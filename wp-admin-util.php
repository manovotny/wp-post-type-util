<?php
/**
 * Nifty utilities for developing in the WordPress admin.
 *
 * @package WP_Admin_Util
 * @author Michael Novotny <manovotny@gmail.com>
 * @license GPL-3.0+
 * @link https://github.com/manovotny/wp-admin-util
 * @copyright 2014 Michael Novotny
 *
 * @wordpress-plugin
 * Plugin Name: WP Admin Util
 * Plugin URI: https://github.com/manovotny/wp-admin-util
 * Description: Nifty utilities for developing in the WordPress admin.
 * Version: 0.1.0
 * Author: Michael Novotny
 * Author URI: http://manovotny.com
 * License: GPL-3.0+
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * GitHub Plugin URI: https://github.com/manovotny/wp-admin-util
 */

/* Access
---------------------------------------------------------------------------------- */

if ( ! defined( 'WPINC' ) ) {

    die;

}

/* Classes
---------------------------------------------------------------------------------- */

if ( ! class_exists( 'WP_Admin_Util' ) ) {

    require_once __DIR__ . '/classes/class-wp-admin-util.php';

}