<?php
/*
 * Template Name: News-Single
 * Template Post Type: post
 */
  ?>

<?php get_header(); ?>

<?php 
 $args = array(
    'ID'               => get_the_ID(),
    'category_name'    => 'News',
    'orderby'          => 'date',
    'order'            => 'DESC',
    'post_type'        => 'post',
    'post_status'      => 'publish',
  );
  $postArray = get_posts( $args );
  $post = $postArray[0];
    $postDate = $post->post_date;
    $postContent = $post->post_content;
    $postTitle = $post->post_title;
    $postExcerpt = $post->post_excerpt;
    $dateValue = strtotime($postDate);                     
    $year = date("Y", $dateValue); 
    $mon = date("m", $dateValue);
    $mon = get_month_name($mon ,qtrans_getLanguage()); 
    $day = date("d", $dateValue);
    $image = get_the_post_thumbnail_url($post->ID);

?>

<div id="container">
    <div id="main">
        <div class="inside">
            <div class="mod_article first last block" id="news-detail-165">
                <div class="mod_newsreader block">
                    <div class="news_full block">
                        <div class="row">
                            <!-- indexer::stop -->
                            <div class="col-sm-5 col-md-5 col-lg-5">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12 text-right">
                                    </div>
                                </div>
                            </div>
                            <!-- indexer::continue -->
                            <div class="col-sm-7 col-md-7 col-lg-7">
                                <h1><?php echo $postTitle; ?></h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5 col-md-5 col-lg-5 ">
                                <figure class="image_container">
                                    <img src="<?php echo $image; ?>"
                                        width="380" height="253" alt="">
                                </figure>
                            </div>
                            <div class="col-sm-7 col-md-7 col-lg-7 ">
                                <div class="date">
                                    <time datetime="2017-10-09T16:28:00+02:00">
                                        <div class="day"><?php echo $day; ?></div>
                                        <div class="monthYear"><?php echo $mon; ?><br>
                                        <?php echo $year; ?></div>
                                    </time>
                                </div>
                                <div class="ce_text">
                                    <div class="ce_text block">
                                        <div>
                                            <p><?php echo $postContent; ?></p>
                                        </div>
                                    </div>
                                </div>
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

<?php get_footer(); ?>