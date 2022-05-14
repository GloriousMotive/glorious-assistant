<?php

          //send form data to remote api as form data using wp_remote_post

          //sanitize form input
          $title = sanitize_text_field($_POST['ticket-title']);
          $content = sanitize_text_field($_POST['ticket-content']);
          $sender_first_name = sanitize_text_field($_POST['sender-first-name']);
          $sender_last_name = sanitize_text_field($_POST['sender-last-name']);
          $sender_email = sanitize_email($_POST['sender-email']);
          $sender_country = sanitize_text_field($_POST['sender-country']);
          $cf_sender_status = sanitize_text_field($_POST['cf_sender_status']);
          $cf_support_reason = sanitize_text_field($_POST['cf_support_reason']);
          $cf_wordpress_version = sanitize_text_field($_POST['cf_wordpress_version']);
          $cf_php_version = sanitize_text_field($_POST['cf_php_version']);
          $cf_browser_version = sanitize_text_field($_POST['cf_browser_version']);
          $cf_server_version = sanitize_text_field($_POST['cf_server_version']);
          $cf_customers_website = sanitize_text_field($_POST['cf_customers_website']);
          $cf_wordpress_theme = sanitize_text_field($_POST['cf_wordpress_theme']);
          $cf_wordpress_theme_v = sanitize_text_field($_POST['cf_wordpress_theme_v']);
          $cf_wordpress_multisi = sanitize_text_field($_POST['cf_wordpress_multisi']);


          $action = $_POST['action'];

          if(isset($_POST['action']) && $_POST['action'] == 'send_form_data_to_gloriousmotive'){
            $url = "https://gloriousmotive.com/wp-json/fluent-support/v2/public/incoming_webhook/9d0619ee-d50f-4952-9282-8288a521f9f0";

            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            $headers = array(
              "Content-Type: application/x-www-form-urlencoded",
            );
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

            $data = "sender%5Bfirst_name%5D=$sender_first_name&sender%5Blast_name%5D=$sender_last_name&sender%5Bemail%5D=$sender_email&content=$content&title=$title&sender%5Bcountry%5D=$sender_country&custom_fields%5Bcf_sender_status%5D=$cf_sender_status&custom_fields%5Bcf_support_reason%5D=$cf_support_reason&custom_fields%5Bcf_wordpress_version%5D=$cf_wordpress_version&custom_fields%5Bcf_php_version%5D=$cf_php_version&custom_fields%5Bcf_browser_version%5D=$cf_browser_version&custom_fields%5Bcf_server_version%5D=$cf_server_version&custom_fields%5Bcf_customers_website%5D=$cf_customers_website&custom_fields%5Bcf_wordpress_theme%5D=$cf_wordpress_theme&custom_fields%5Bcf_wordpress_theme_v%5D=$cf_wordpress_theme_v&custom_fields%5Bcf_wordpress_multisi%5D=$cf_wordpress_multisi";

            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

            //for debug only!
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

            $resp = curl_exec($curl);
            curl_close($curl);
            //var_dump($resp);
            //echo "<br>";
            //var_dump(data);

            
            if ( is_wp_error( $response ) ) {
              $error_message = $response->get_error_message();
              $ticket_result = "Something went wrong: $error_message";
              
            } else {
              $ticket_result = '<div class="gm-success-message"><p>Your ticket has been submitted successfully. We will get back to you shortly.</p></div>';
            }
          }


          ?>