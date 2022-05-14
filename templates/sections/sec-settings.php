<div class="gmcss-item small settings">
            <div class="item-container">
               <div class="gmcss-grid-item-header">
                  <h3>GloriousMotive Settings</h3>
                  <div class="gmcss-secondary-header-item">
                     <div class="gmcss-instructions"></div>
                  </div>
               </div>

               <div class="gmcss-grid-item-content">

                  <form action="options.php" method="post">

                    <?php 
                    // Hook the Settings Field and Settings Section
                    settings_fields( 'gloriousmotive-settings-group' ); 
                    do_settings_sections( 'gloriousmotive-settings-group' ); 
                    ?>

                     <div class="gmcss-settings">
                        <h2>Settings</h2>
                        <table class="form-table" role="presentation">
                           <tbody>
                              <tr>
                                 <th scope="row">
                                    <span class="gmcss-tooltip-right tooltip-right" data-gmcss-tooltip="Activate the Support Chat to get support directly from our support team.">
                                    <span class="dashicons dashicons-editor-help"></span>
                                    </span>
                                    <div class="gmcss-settings-text">Activate Support via Chat With Us
                                 </th>
                                 <td>
                                    <label class="gmcss-switch" id="gmcss-maybe-highlight-autoreplace_insecure_links">
                                    <input id="is_chat_active_gm" name="is_chat_active_gm" size="40" value="1" type="checkbox" 
                                        <?php echo get_option('is_chat_active_gm')==1 ? 'checked="checked"' : ''; ?>>
                                        <span class="gmcss-slider gmcss-round"></span>
                                    </label>
                                 </td>
                              </tr><!-- Chat Settings -->
                              <tr>
                                 <th scope="row">
                                    <span class="gmcss-tooltip-right tooltip-right" data-gmcss-tooltip="Our Recommended Products for every WordPress user."><span class="dashicons dashicons-editor-help"></span></span>
                                    <div class="gmcss-settings-text">Activate Recommended Products</div>
                                 </th>
                                 <td>
                                    <label class="gmcss-switch" id="gmcss-maybe-highlight-autoreplace_insecure_links">
                                    <input id="is_recommended_active_gm" name="is_recommended_active_gm" size="40" value="1" type="checkbox" 
                                        <?php echo get_option('is_recommended_active_gm')==1 ? 'checked="checked"' : ''; ?>>
                                        <span class="gmcss-slider gmcss-round"></span>
                                    </label>
                                 </td>
                              </tr> <!-- Recommended Products -->
                              <tr>
                                 <th scope="row">
                                    <span class="gmcss-tooltip-right tooltip-right" data-gmcss-tooltip="Get WordPress related services from GloriosThemes directly from your dashboard."><span class="dashicons dashicons-editor-help"></span></span>
                                    <div class="gmcss-settings-text">Activate WP Services & Solutions</div>
                                 </th>
                                 <td>
                                    <label class="gmcss-switch" id="gmcss-maybe-highlight-autoreplace_insecure_links">
                                    <input id="is_services_active_gm" name="is_services_active_gm" size="40" value="1" type="checkbox" 
                                        <?php echo get_option('is_services_active_gm')==1 ? 'checked="checked"' : ''; ?>>
                                        <span class="gmcss-slider gmcss-round"></span>
                                    </label>
                                    
                                 </td>
                              </tr>

                              <tr>
                                 <th scope="row">
                                    <span class="gmcss-tooltip-right tooltip-right" data-gmcss-tooltip="Enter the email address that you used while purchaing on GloriousMotive."><span class="dashicons dashicons-editor-help"></span></span>
                                    <div class="gmcss-settings-text">Email Address for Creating Support Ticket</div>
                                 </th>
                                 <td>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                        <?php
                        //Get Email Address of the admin from WordPress user meta
                        $admin_email = get_option('admin_email');
                        ?>
                        
                        <input style="padding:4px !important;" class="gm-title gm-input" type="text" name="admin_create_ticket_email" value="<?php echo get_option('admin_create_ticket_email');?>" placeholder="<?php echo $admin_email; ?>">
                     </div>
                    
               </div>
               <div class="gmcss-grid-item-footer">
                <?php submit_button(); ?>
                  </form>
               </div>
            </div>
         </div>