<?php
/**
 * Plugin Name: GloriousMotive Assistant
 * Plugin URI: http://www.gloriousmotive.com
 * Description: GloriousMotive is a core plugin for themes created by GloriousMotive and GloriousThemes to add functionality and specialities.
 * Version: 1.0.0
 * Author: GloriousThemes
 * Author URI: http://www.gloriousThemes.com
 * Tested up to: 5.4
 * Requires PHP: 5.6
 * License: GPL2
 * Text Domain: gloriousmotive
 * Domain Path: /languages/
 * 
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package     Glorious Motive
 * @author      GloriousMotive
 * @copyright   2021 GloriousMotive 
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 */

if ( ! defined( 'ABSPATH' ) ) {
   exit; // Exit if accessed directly
}

define ( 'GLORIOUS_MOTIVE_VERSION', '1.0' );
define ( 'GLORIOUS_MOTIVE_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define ( 'GLORIOUS_MOTIVE_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define ( 'GLORIOUS_MOTIVE_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );
//Get theme Version
$theme_version = wp_get_theme();
define ( 'GLORIOUS_THEME_VERSION', $theme_version->get( 'Version' ) );
define ( 'GLORIOUS_THEME_NAME', $theme_version->get( 'Name' ) );

//Check for Themes by GloriousMotive or GloriousThemes
require_once GLORIOUS_MOTIVE_PLUGIN_DIR . '/includes/Core.php';

/**
 * Get the Appsero Plugin Tracker
 */
//Integrating Appsero for debugging purposes
require __DIR__ . '/lib/appsero/vendor/autoload.php';
/**
 * Initialize the plugin tracker
 *
 * Tracks only if the user has given permission, else
 * @return void
 */
function appsero_init_tracker_gloriousmotive() {

   if ( ! class_exists( 'Appsero\Client' ) ) {
     require_once __DIR__ . '/appsero/src/Client.php';
   }

   $client = new Appsero\Client( '9f66a080-bdf3-4306-9aa5-fd8e13d3dd63', 'GloriousMotive', __FILE__ );

   // Active insights
   $client->insights()->init();

   // Active automatic updater
   $client->updater();

}
appsero_init_tracker_gloriousmotive();
//ended appsero - tammatar edition

?>