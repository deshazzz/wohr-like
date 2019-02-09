<?php 
/*
 Template Name: Events
*/
get_header();
?>
<div id="container">
  <div id="main">
    <div class="inside">
      <div class="mod_article first last block" id="news-archive">
        <h1 class="ce_headline first">
        <?php if (qtrans_getLanguage() == "en") {
                  echo 'Events';
                } else {
                  echo 'الاحداث';
                }
                ?></h1>

        <div class="mod_newsarchive block">
          <?php 
            $args = array(
              'category_name'    => 'Events',
              'orderby'          => 'date',
              'order'            => 'DESC',
              'post_type'        => 'post',
              'post_status'      => 'publish',
            );
            $posts_array = get_posts( $args );
            foreach ($posts_array as $post) {
              $postDate = $post->post_date;
              $postContent = $post->post_content;
              $postTitle = $post->post_title;
              $postExcerpt = $post->post_excerpt;
              $postLink = $post->guid;
              $dateValue = strtotime($postDate);                     
              $year = date("Y", $dateValue); 
              $mon = date("m", $dateValue);
              $mon = get_month_name($mon ,qtrans_getLanguage()); 
              $day = date("d", $dateValue);
              $image = get_the_post_thumbnail_url($post->ID);
          ?>
          <a class="teaser block first even" href="#">
            <div class="row">
              <div class="date col-sm-2 col-md-2 col-lg-2 ">
                <time datetime="<?php echo $postDate; ?>">
                  <div class="day"><?php echo $day; ?></div>
                  <div class="monthYear"><?php echo $mon; ?><br>
                  <?php echo $year; ?></div>
                </time>
              </div>
              <div class="col-sm-3 col-md-3 col-lg-3 ">
                <figure>
                  <img src="<?php echo $image; ?>" width="220"
                    height="150" style="height:190px;" alt="">
                </figure>
              </div>
              <div class="text col-sm-7 col-md-7 col-lg-7 ">
                <h2><?php echo $postTitle; ?></h2>
                <p><?php echo $postContent;; ?></p>
              </div>
            </div>
          </a>
              <?php } ?>
        </div>
      </div>
    </div>
    <div id="clear"></div>
  </div>
  <!-- id="main" -->
</div>
<!-- id="container" -->



<!-- Start Of the Footer Element -->

<div class="push"></div>
</div>
<!-- id="wrapper" -->
<?php 
  get_footer();
  ?>