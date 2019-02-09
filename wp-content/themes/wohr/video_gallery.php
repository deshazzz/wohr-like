<?php 
get_header(); 
/*
 Template Name: Gallery-video
*/
?>
 <?php 
 $args = array(
                              'category_name'    => 'videoGallery',
                              'orderby'          => 'date',
                              'order'            => 'DESC',
                              'post_type'        => 'post',
                              'post_status'      => 'publish',
                            );
 $posts_array = get_posts( $args );
                            ?>
<div id="container">
<div id="main">
<div class="inside">
<div class="mod_article first last block" id="projects">
<h1 class="ce_headline first">
<?php if (qtrans_getLanguage() == "en") { echo "Video gallery"; } else { echo "معرض الفيديو"; } ?></h1>
<div class="list-projects row">
<?php foreach ($posts_array as $post) {
	$postTitle = $post->post_title;
    $postLink = $post->guid;
    $image = get_the_post_thumbnail_url($post->ID);
?>
<div class="tile col-sm-6 col-md-4 col-lg-4 ">
<a href="<?php echo $postLink; ?>">
<figure><img src="<?php echo $image ?>" alt=""></figure>
<center><h2><?php echo $postTitle; ?></h2></center>
</a>
</div>

<?php } ?>

</div>
</div>
</div>
<div id="clear"></div>
</div>
<!-- id="main" -->
</div>
    
    <div class="push"></div>
  </div>
  <!-- id="wrapper" -->
  <?php 
  get_footer();
  ?>