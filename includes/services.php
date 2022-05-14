<?php
if (! defined('ABSPATH')) die;
function glorious_services_view_services() {
?>
<style>
.grid {
   display: flex;
     flex-wrap: wrap;
}
.box {
   width: 300px;
   margin: 10px;
   background: white;
   border-radius: 7px;
   overflow: hidden;
   box-shadow: 2px 5px 5px 5px #ececec;
}
.box .info {
   padding: 0px 15px 15px 15px;
}
</style>


  <?php 

  /* Using array and Foreach */
  $serviceArray = array(
    array(
      'img'  => 'wordpress-install.png',
      'name' => 'Complete WordPress Installation',
      'desc' => 'Install WordPress + SEO + Security + Plugins + Themes + Backups',
      'link' => 'https://gloriousthemes.com/services/wordpress-theme-setup/',
    ),
    array(
      'img'  => 'hacked.png',
      'name' => 'Protect WordPress from Hacking',
      'desc' => 'Tightens your WordPress Security and Protects it from Spam and hacking',
      'link' => 'https://gloriousthemes.com/services/wordpress-hacking/',
    ),
    array(
      'img'  => 'speed.png',
      'name' => 'WordPress Speed Optimization',
      'desc' => 'SEO optimize your wordpress website by installing SEO plugin, optimizing it, Creating XML sitemap and submitting it to Google Search Console',
      'link' => 'https://gloriousthemes.com/services/speed/',
    ),
    array(
      'img'  => 'ssl.png',
      'name' => 'WordPress SSL Setup – Complete https',
      'desc' => 'Make your WordPress site SSL ready and fix all the mix-content',
      'link' => 'https://gloriousthemes.com/services/wordpress-ssl-setup/',
    ),
    array(
      'img'  => 'multisite.png',
      'name' => 'WordPress Multisite Installation',
      'desc' => 'Make your Normal WordPress into a MultiSite WordPress. Either use Sub-Domains or Sub-Directory for your WordPress MultiSite.',
      'link' => 'https://gloriousthemes.com/services/wordpress-multisite-installation/',
    ),
    array(
      'img'  => 'malware.png',
      'name' => 'WordPress Malware Removal',
      'desc' => 'If your WordPress Site is suffering from Malware or has been attacked by malware. Then this service will help you get rid from Malware from your site',
      'link' => 'https://gloriousthemes.com/services/wordpress-malware-removal/',
    ),
    array(
      'img'  => 'care.png',
      'name' => 'WordPress Care Plan',
      'desc' => 'You focus on your Work/Business and We handle your WordPress. Literally everything for WordPress.',
      'link' => 'https://gloriousthemes.com/services/wordpress-care-plan',
    ),
    array(
      'img'  => 'backup.png',
      'name' => 'WordPress Backup Service',
      'desc' => 'Get your WordPress Site, Database and all your important works backedup everynight on remote servers like Google Drive, Dropbox or Amazon S3 & Restore with 1-Click Button.',
      'link' => 'https://gloriousthemes.com/services/wordpress-backup-service/',
    ),
    array(
      'img'  => 'hacked-protect.png',
      'name' => 'Recover Hacked WordPress Website',
      'desc' => 'Our Experts helps your get back your site and fix the loophole from where the hacker has gained access.',
      'link' => 'https://gloriousthemes.com/services/recover-hacked-wordpress-website/',
    ),
    array(
      'img'  => 'onpageseo.png',
      'name' => 'WordPress OnPage SEO',
      'desc' => 'Complete Optimization of WordPress OnPage SEO. Now Take your game to the next level.',
      'link' => 'https://gloriousthemes.com/services/wordpress-onpage-seo/',
    ),
    array(
      'img'  => 'glorious-services.png',
      'name' => 'Other WordPress Services',
      'desc' => 'A community of WordPress enthusiasts with expert plugin developers, theme developers, hosting providers etc.',
      'link' => 'https://gloriousthemes.com/',
    )
  );


  foreach ($serviceArray as $values => $key) {
    ?>

<div class="gmcss-item small">
  <div class="item-container">
      <div class="gmcss-grid-item-header">
        <h3><?php echo $key['name']; ?></h3>
      </div>
      <div class="gmcss-grid-item-content">
        <div class="gmcss-tips-tricks">
            <div class="tips-tricks-content">
              <div class="tips-tricks-top">
                  <div class="gmcss-tips-tricks-element">
                  <img
                    src="<?php echo GLORIOUS_PLUGIN.'assets/img/'.$key['img']; ?>"
                    width="100%"
                    height="170px"
                  />
                  </div>
                  <?php echo $key['desc']; ?>
              </div>
            </div>
        </div>
      </div>
      <div class="gmcss-grid-item-footer">
        <a href="<?php echo $key['link']; ?>" target="_blank" class="button button-gmcss-secondary" style="float: inherit;width: 93%;text-align: center;">View More Information</a>
      </div>
  </div>
</div>
    <?php
  }


  /* PHP END */
  ?>



<?php
}