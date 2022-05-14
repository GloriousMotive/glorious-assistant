<div class="nav-tab-wrapper">
   <div class="gmcss-logo-container">
      <div id="gmcss-logo"><img width="200" height="" src="<?php echo GLORIOUS_MOTIVE_PLUGIN_URL;?>images/glorious-themes-dark.png" alt="glorious-logo"></div>
   </div>
   <div class="header-links">
      <div class="documentation">
         <a href="https://gloriousthemes.com/docs/" class="" target="_blank">Documentation</a>
      </div>
      <div class="header-upsell">
         <div class="documentation">
            <a href="https://gloriousthemes.com/support/" class="button button-primary" target="_blank">Support</a>
         </div>
      </div>
   </div>
</div>
<!-- HEADER ENDS -->

<div class="gmcss-container">
   <div class="gmcss-main">
      <div class="gmcss-grid">

         <!-- ITEM - SETTINGS -->
        <?php require_once GLORIOUS_MOTIVE_PLUGIN_DIR . 'templates/sections/sec-settings.php'; ?>

        <!-- ITEM - INFORMATION -->
        <?php require_once GLORIOUS_MOTIVE_PLUGIN_DIR . 'templates/sections/sec-information.php'; ?>
        
        <!-- ITEM Ticket -->
        <?php require_once GLORIOUS_MOTIVE_PLUGIN_DIR . 'templates/sections/sec-ticket.php'; ?>

        <!-- ITEM FIVERR -->
        <?php require_once GLORIOUS_MOTIVE_PLUGIN_DIR . 'templates/sections/sec-fiverr.php'; ?>



         <?php 
            //show wordpress services to customer
            if ( get_option('is_services_active_gm') == 1  ) {
              
              gloriousmotive_get_services();
            }

            //show recommended products to customer.
            if ( get_option('is_recommended_active_gm') == 1  ) {
              require_once GLORIOUS_MOTIVE_PLUGIN_DIR . 'includes/Recommended-Products.php';
              gloriousmotive_get_products();
            }
         ?>

                 <?php //require_once GLORIOUS_MOTIVE_PLUGIN_DIR . 'includes/SystemStatus.php'; 
                 ?>


      </div>
   </div>
</div>