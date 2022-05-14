<?php 
if (! defined('ABSPATH')) die;
require_once( 'services.php');
require_once( 'recommended-products.php');
?>
<div class="nav-tab-wrapper">
   <div class="gmcss-logo-container">
      <div id="gmcss-logo"><img width="200" height="" src="<?php echo GLORIOUS_PLUGIN;?>images/glorious-themes-dark.png" alt="glorious-logo"></div>
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

<div class="gmcss-container">
   <div class="gmcss-main">
      <div class="gmcss-grid">
         <div class="gmcss-item small settings">
            <div class="item-container">
               <div class="gmcss-grid-item-header">
                  <h3>Settings</h3>
                  <div class="gmcss-secondary-header-item">
                     <div class="gmcss-instructions"></div>
                  </div>
               </div>
               <div class="gmcss-grid-item-content">
                  <form action="options.php" method="post">
                    <?php settings_fields( 'glorious-services-settings-group' ); ?>
                    <?php do_settings_sections( 'glorious-services-settings-group' ); ?>
                     <div class="gmcss-settings">
                        
                        <h2>Settings</h2>
                        <table class="form-table" role="presentation">
                           <tbody>
                              <tr>
                                 <th scope="row">
                                    <span class="gmcss-tooltip-right tooltip-right" data-gmcss-tooltip="Activate the Support Chat to get support directly from our support team.">
                                    <span class="dashicons dashicons-editor-help"></span>
                                    </span>
                                    <div class="gmcss-settings-text">Activate Support via Chat (<?php echo get_option('is_chat_active')==1 ? 'Active' : 'Not Active'; ?>)</div>
                                    
                                 </th>
                                 <td>
                                    <label class="gmcss-switch" id="gmcss-maybe-highlight-autoreplace_insecure_links">

                                    <input id="is_chat_active" name="is_chat_active" size="40" value="1" type="checkbox" 
                                        <?php echo get_option('is_chat_active')==1 ? 'checked="checked"' : ''; ?>>
                                        <span class="gmcss-slider gmcss-round"></span>
                                    </label>
                                    
                                 </td>
                              </tr>
                              <tr>
                                 <th scope="row">
                                    <span class="gmcss-tooltip-right tooltip-right" data-gmcss-tooltip="Our Recommended Products for every WordPress user.">
                                    <span class="dashicons dashicons-editor-help"></span>
                                    </span>
                                    <div class="gmcss-settings-text">Activate Recommended Products (<?php echo get_option('is_promotion_active')==1 ? 'Active' : 'Not Active'; ?>)</div>
                                    
                                 </th>
                                 <td>
                                    <label class="gmcss-switch" id="gmcss-maybe-highlight-autoreplace_insecure_links">

                                    <input id="is_promotion_active" name="is_promotion_active" size="40" value="1" type="checkbox" 
                                        <?php echo get_option('is_promotion_active')==1 ? 'checked="checked"' : ''; ?>>
                                        <span class="gmcss-slider gmcss-round"></span>
                                    </label>
                                    
                                 </td>
                              </tr>
                              <tr>
                                 <th scope="row">
                                    <span class="gmcss-tooltip-right tooltip-right" data-gmcss-tooltip="Get WordPress related services from GloriosThemes directly from your dashboard.">
                                    <span class="dashicons dashicons-editor-help"></span>
                                    </span>
                                    <div class="gmcss-settings-text">Activate WP Services (<?php echo get_option('is_services_active')==1 ? 'Active' : 'Not Active'; ?>)</div>
                                    
                                 </th>
                                 <td>
                                    <label class="gmcss-switch" id="gmcss-maybe-highlight-autoreplace_insecure_links">

                                    <input id="is_services_active" name="is_services_active" size="40" value="1" type="checkbox" 
                                        <?php echo get_option('is_services_active')==1 ? 'checked="checked"' : ''; ?>
                                        
                                    >
                                        <span class="gmcss-slider gmcss-round"></span>
                                    </label>
                                    
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <?php submit_button(); ?>
                  </form>
               </div>
               <div class="gmcss-grid-item-footer">
               
               </div>
            </div>
         </div>
         <div class="gmcss-item small">
            <div class="item-container">
               <div class="gmcss-grid-item-header">
                  <h3>Information</h3>
               </div>
               <div class="gmcss-grid-item-content">
                  <div class="gmcss-tips-tricks">
                     <div class="tips-tricks-content">
                        <div class="tips-tricks-top">
                           <div class="gmcss-tips-tricks-element">
                              <div class="gmcss-tips-tricks-content">
                                 Every Product You purchase from GloriosThemes comes with 1 year Updates and Support.                
                              </div>
                              <div class="gmcss-tips-tricks-read-more">
                                 <a href="https://gloriousthemes.com/docs/docs/general-information/support/product-updates-support/" target="_blank">Read more</a>
                              </div>
                           </div>
                           <div class="gmcss-tips-tricks-element">
                              <div class="gmcss-tips-tricks-content">
                                 How to access your product license.                
                              </div>
                              <div class="gmcss-tips-tricks-read-more">
                                 <a href="https://gloriousthemes.com/docs/docs/general-information/support/how-to-access-your-product-license/" target="_blank">Read more</a>
                              </div>
                           </div>
                           <div class="gmcss-tips-tricks-element">
                              <div class="gmcss-tips-tricks-content">
                                 How to make your website look like Demo Site.                
                              </div>
                              <div class="gmcss-tips-tricks-read-more">
                                 <a href="https://gloriousthemes.com/docs/docs/general-information/support/how-to-make-your-website-look-like-demo-site/" target="_blank">Read more</a>
                              </div>
                           </div>
                           <div class="gmcss-tips-tricks-element">
                              <div class="gmcss-tips-tricks-content">
                                 How to get help for any technical problems.                
                              </div>
                              <div class="gmcss-tips-tricks-read-more">
                                 <a href="https://gloriousthemes.com/docs/docs/general-information/support/how-to-get-help-for-any-technical-problems/" target="_blank">Read more</a>
                              </div>
                           </div>
                           
                        </div>
                     </div>
                  </div>
               </div>
               <div class="gmcss-grid-item-footer">
                  <a href="https://gloriousthemes.com/docs/" target="_blank" class="button button-gmcss-secondary">Documentation</a>
               </div>
            </div>
         </div>
         <?php 
            //show recommended products to customer, only if they want it.
            if ( get_option('is_services_active') == 1  ) {
               glorious_services_view_services();
            }

            if ( get_option('is_promotion_active') == 1  ) {
               glorious_services_view_products();
            }
         ?>
      </div>
   </div>
</div>