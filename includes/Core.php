<?php
/**
 * Core features of GloriousMotive Plugin
 * @since 1.0.0
 * 
 * Required through the main plugin file
 */

//Add Chat Feature
require_once GLORIOUS_MOTIVE_PLUGIN_DIR . '/includes/Chat.php';


//Add Create Ticket for SUpport Feature
//require_once GLORIOUS_MOTIVE_PLUGIN_DIR . '/includes/Create-Ticket.php';

//Register the Settings Page - Admin Menu
require_once GLORIOUS_MOTIVE_PLUGIN_DIR . '/includes/Settings.php';


/**
 * Register and enqueue a custom stylesheet in the WordPress admin.
 */
function gloriousmotive_admin_style() {
    wp_register_style( 'gloriousmotive_grid_admin_css', GLORIOUS_MOTIVE_PLUGIN_URL.'assets/css/grid.min.css', '1.0.0' );
    wp_enqueue_style( 'gloriousmotive_grid_admin_css' );

    wp_register_style( 'gloriousmotive_main_admin_css', GLORIOUS_MOTIVE_PLUGIN_URL.'assets/css/main.css', '1.0.0' );
    wp_enqueue_style( 'gloriousmotive_main_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'gloriousmotive_admin_style' );


/**
 * GloriousMotive Dashboard Page and Settings Congiguration
 * 
 * Calls Settings Page, Admin Menu
 * @since 1.0.0
 */
function gloriousmotive_settings_page() {

  //require_once 'includes/template.php';
  require_once GLORIOUS_MOTIVE_PLUGIN_DIR . '/includes/Dashboard.php';
    
} 


function gloriousmotive_admin_scripts(){
    wp_enqueue_script('gloriousmotive-system-status', GLORIOUS_MOTIVE_PLUGIN_URL . 'assets/js/status.js', array( 'jquery' ), GLORIOUS_MOTIVE_VERSION);
}
add_action( 'admin_enqueue_scripts', 'gloriousmotive_admin_scripts' );
?>