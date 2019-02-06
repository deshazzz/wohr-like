<?php get_header(); ?>

    <div id="container_home">
      <div id="main">
        <div class="inside">
          <div class="mod_article first last block" id="fullscreen-slider-126">
            <div class="ce_gallery first last block">
              <div class="flex-container" style="display:none;">
                <div id="fluid-slider">
                  <?php
                      $args = array(
                        'category_name'    => 'home-slider',
                        'post_type'        => 'post',
                        'post_status'      => 'publish',
                      );
                      $postArray = get_posts( $args );
                      foreach ($postArray as $post) {
                        $image = get_the_post_thumbnail_url($post->ID);
                  ?>
                  <img src="<?php echo $image;  ?>" class="home-slider-img" alt="">
                 <?php
                  }
                 ?>
                </div>
                <div id="teaser-container">
                  <div class="teaser-inner">
                    <div class="left-box">
                      <div class="mod_seo_text">
                        <div class="header">
                          <div class="inner" style="color: #f09103">
                            ℹ
                          </div>
                        </div>
                        <div class="text">
                          <div class="inner">
                            <?php 
                                $args = array(
                                  'category_name'    => 'info-homepage',
                                  'post_type'        => 'post',
                                  'post_status'      => 'publish',
                                );
                                $infopost = get_posts( $args );
                            ?>
                            <h1><?php echo $infopost[0]->post_title; ?></h1>
                            <?php echo $infopost[0]->post_content; ?>
                          </div>
                        </div>
                      </div>
                      <!-- indexer::stop -->
                      <div class="mod_newslist block">
                      <?php 
                                $args = array(
                                  'category_name'    => 'bottom-homepage',
                                  'post_type'        => 'post',
                                  'post_status'      => 'publish',
                                );
                                $bottompost = get_posts( $args );
                                $image = get_the_post_thumbnail_url($bottompost[0]->ID); 
                            ?>
                        <a href="<?php echo $bottompost[0]->guid; ?>" class="news_latest block first last even"
                          data-link="<?php echo $bottompost[0]->guid; ?>">
                          <div class="image bottom-home">
                            <img style="width:100% !important" src="<?php echo $image; ?>" width="2894" height="5210"
                              alt="Highest Building Torre Reforma in Mexico City">
                          </div>
                          <div class="text">
                            <h4><?php echo $bottompost[0]->post_title; ?></h4>
                            <p><?php echo $bottompost[0]->post_excerpt; ?></p>
                          </div>
                        </a>
                      </div>
                      <!-- indexer::continue -->
                    </div>

                  </div>
                </div>
                <div id="fluid-captions">
                  <div class="controlnav">
                    <ul>
                    <?php 
                    foreach ($postArray as $post) {
                      ?>
                      <li></li>
                    <?php } ?>
                    </ul>
                  </div>
                  <div class="slides">
                  <?php 
                    foreach ($postArray as $post) {
                  ?>                    
                    <div class="slide">
                      <p><?php echo $post->post_content; ?></p>
                      <p class="headline"></p>
                    </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="clear"></div>
      </div>
      <!-- id="main" -->
    </div>
    <!-- id="container" -->

<?php get_footer(); ?>