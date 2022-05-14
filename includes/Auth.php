<?php
/**
 * Authenticate users with WordPress REST API
 * oauth customers with WordPress users, create new accounts, and log users in
 * Pull Easy Digital Downloads customer data from WooCommerce REST API
 * @package WordPress
 * @subpackage REST API
 * 
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

//auth user with WordPress Users API
function wp_rest_auth_user( $user, $username, $password ) {
  $user = get_user_by( 'login', $username );
  if ( ! $user ) {
    return new WP_Error( 'rest_user_invalid_credentials', __( 'Invalid username or password.' ), array( 'status' => 401 ) );
  }
  if ( ! wp_check_password( $password, $user->user_pass, $user->ID ) ) {
    return new WP_Error( 'rest_user_invalid_credentials', __( 'Invalid username or password.' ), array( 'status' => 401 ) );
  }
  return $user;
}



//Fetch Easy Digital Downloads customer data with REST API
function edd_rest_api_get_customer_data($user_id)
{
    $customer_data = array();
    $customer_data['customer_id'] = $user_id;
    $customer_data['customer_email'] = get_user_meta($user_id, 'billing_email', true);
    $customer_data['customer_first_name'] = get_user_meta($user_id, 'first_name', true);
    $customer_data['customer_last_name'] = get_user_meta($user_id, 'last_name', true);
    $customer_data['customer_billing_address_1'] = get_user_meta($user_id, 'billing_address_1', true);
    $customer_data['customer_billing_address_2'] = get_user_meta($user_id, 'billing_address_2', true);
    $customer_data['customer_billing_city'] = get_user_meta($user_id, 'billing_city', true);
    $customer_data['customer_billing_state'] = get_user_meta($user_id, 'billing_state', true);
    $customer_data['customer_billing_postcode'] = get_user_meta($user_id, 'billing_postcode', true);
    $customer_data['customer_billing_country'] = get_user_meta($user_id, 'billing_country', true);
    $customer_data['customer_billing_phone'] = get_user_meta($user_id, 'billing_phone', true);
    $customer_data['customer_shipping_address_1'] = get_user_meta($user_id, 'shipping_address_1', true);
    $customer_data['customer_shipping_address_2'] = get_user_meta($user_id, 'shipping_address_2', true);
    $customer_data['customer_shipping_city'] = get_user_meta($user_id, 'shipping_city', true);
    $customer_data['customer_shipping_state'] = get_user_meta($user_id, 'shipping_state', true);
    $customer_data['customer_shipping_postcode'] = get_user_meta($user_id, 'shipping_postcode', true);
    $customer_data['customer_shipping_country'] = get_user_meta($user_id, 'shipping_country', true);
    $customer_data['customer_shipping_phone'] = get_user_meta($user_id, 'shipping_phone', true);
    $customer_data['customer_shipping_company'] = get_user_meta($user_id, 'shipping_company', true);
}



//let user login with username or email address 
