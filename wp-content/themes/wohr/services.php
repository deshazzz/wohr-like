<?php 
/*
 Template Name: Services
*/
get_header();
?>



        <div id="container">
            <div id="main">
                <div class="inside">
                    <div class="mod_article first last block" id="news-archive">
                        <h1 class="ce_headline first"><?php if (qtrans_getLanguage() == "en") {echo 'Services';} else{ echo'خدماتنا'; } ?></h1>

                        <div class="mod_newsarchive block">
                        <?php 
                            $args = array(
                              'category_name'    => 'Services',
                              'orderby'          => 'date',
                              'order'            => 'ASC',
                              'post_type'        => 'post',
                              'post_status'      => 'publish',
                            );
                            $posts_array = get_posts( $args );
                            foreach ($posts_array as $post) {
                              $postContent = $post->post_content;
                              $postTitle = $post->post_title;
                              $image = get_the_post_thumbnail_url($post->ID);
                          ?>
                            <div class="teaser block first even">
                                <div class="row">
                                    <div class="col-sm-4 col-md-4 col-lg-4 ">
                                        <figure>
                                            <img src="<?php echo $image ?>" width="220" height="150" alt="" style="max-height: 275px;">
                                        </figure>
                                    </div>
                                    <div class="text col-sm-7 col-md-7 col-lg-7 ">
                                        <h2><?php echo $postTitle?></h2>
                                        <p><?php echo $postContent ?></p>
                                    </div>
                                </div>
                            </div>
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