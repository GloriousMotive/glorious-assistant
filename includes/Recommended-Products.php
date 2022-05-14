<?php
if (! defined('ABSPATH')) die;
function gloriousmotive_get_products() {?>
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
        'img'  => 'siteground-review.jpg',
        'name' => 'BlueHost - (Best Hosting for WordPress)',
        'desc' => 'We use Bluehost Hosting for several years and most of our clients also uses BlueHost. It has everything that a host needs to run a website. It is the best hosting for WordPress.',
        'link' => 'https://bluehost.com',
        'button-name' => 'Get BlueHost - 65% Discount',
      ),
    array(
        'img'  => 'siteground-review.jpg',
        'name' => 'Elementor Pro - #1 Page Builder',
        'desc' => 'The #1 Drag and Drop Page Builder for WordPress. Elementor Pro is a powerful tool for building beautiful websites and apps with a clean and intuitive user interface.',
        'link' => 'https://elementor.com',
        'button-name' => 'Get Elementor Pro - 35% Discount',
      ),
    array(
        'img'  => 'siteground-review.jpg',
        'name' => 'UpdraftPlus - Best Backup plugin',
        'desc' => 'Create Automatic Backups and add incremental backups for your WordPress site using UpdraftPlus. Updraftplus is used by over 1,000,000 websites.',
        'link' => 'https://updraftplus.com',
        'button-name' => 'Get UpdraftPlus - 45% Discount',
      ),
    array(
        'img'  => 'siteground-review.jpg',
        'name' => 'Semrush - SEO Tools',
        'desc' => 'Outrank your competitors and grow your search ranking and improve your SEO by using the all in one tool. Semrush is recommended by industry experts.',
        'link' => 'https://semrush.com',
        'button-name' => 'Get Semrush - 14 days Free Trial',
      ),
    array(
        'img'  => 'siteground-review.jpg',
        'name' => 'Ayush - (MultiPurpose Theme)',
        'desc' => 'Elementor Multipurpose WordPress Theme that is fast, reliable and simple to use. Its Lightweight, Responsive and SEO friendly. It is a perfect choice for any type of business.',
        'link' => 'https://gine.us/ayush',
        'button-name' => 'Get Ayush Theme (Discounted)',
      ),
    array(
        'img'  => 'siteground-review.jpg',
        'name' => 'SiteGround - (Best Hosting for WordPress)',
        'desc' => 'Best hosting for high traffic websites. Managed high-performance cloud hosting platform. 5 popular cloud providers with unlimited sites.',
        'link' => 'https://siteground.com',
        'button-name' => 'Get Siteground - 45% Discount',
      ),
      array(
        'img'  => 'wp-rocket.png',
        'name' => 'WP Rocket - (Best Cache Plugin)',
        'desc' => '#1 cache plugin to speed WordPress. Get a faster website in a few clicks.',
        'link' => 'https://wp-rocket.net',
        'button-name' => 'Get WP Rocket - 35% Discount',
      ),
      array(
        'img'  => 'bunnycdn.png',
        'name' => 'BunnyCDN - (Best CDN for WordPress)',
        'desc' => '37+ pops which provide <30ms latency worldwide. Cheap as ~$1/month.',
        'link' => 'https://gloriousthemes.com/bunnycdn',
        'button-name' => 'Get BunnyCDN - $10 Credit',
      )
    );


  foreach ($serviceArray as $values => $key) {?>

    <div class="gmcss-item small gmcss-products">
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
                        src="<?php echo  GLORIOUS_MOTIVE_PLUGIN_URL.'assets/img/'.$key['img']; ?>"
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
            <a href="<?php echo $key['link']; ?>" target="_blank" class="gloriousmotive-btn gloriousmotive-btn--action" style="float: inherit;width: 93%;text-align: center;"><?php echo $key['button-name']; ?></a>
          </div>
      </div>
    </div>
    <?php
  }
}