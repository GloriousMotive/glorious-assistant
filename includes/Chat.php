<?php
/**
 * Adds Chat feature via
 */
/* 
* allows customers and users to contact Glorious Support team
* 24x7 via Chat Support, but the user needs to activate the service
* via the settings api
*/
add_action('admin_head', 'gloriousmotive_chat_code');
function gloriousmotive_chat_code(){

  if(get_option('is_chat_active_gm') == 1 ){
    ?>
    <script src="//code.tidio.co/hnkymb1g8niyqvi5we3crfbckiwewla0.js" async></>
    
    <?php
  }

}