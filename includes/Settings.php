<?php
/**
 * Settings Configuration for GloriousMotive
 * @since 1.0.0
 */
add_action('admin_menu', 'gloriousmotive_create_menu');
function gloriousmotive_create_menu() {

	//create new top-level menu
  add_menu_page('GloriousMotive WordPress Solutions', 'GloriousMotive', 'administrator', 'gloriousmotive-assistant', 'gloriousmotive_settings_page' , plugins_url('/images/icon24.png', __FILE__), 2 );
	add_action( 'admin_init', 'register_gloriousmotive_settings' );

}



function register_gloriousmotive_settings() {
	//register our settings
	register_setting( 'gloriousmotive-settings-group', 'is_chat_active_gm' );
	register_setting( 'gloriousmotive-settings-group', 'is_recommended_active_gm' );
	register_setting( 'gloriousmotive-settings-group', 'is_services_active_gm' );
  register_setting( 'gloriousmotive-settings-group', 'admin_create_ticket_email' );
}