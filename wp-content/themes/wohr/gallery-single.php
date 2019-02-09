<?php 
/*
 * Template Name: gallery-single
 * Template Post Type: post
 */

get_header();
?>


<?php
$post_id = get_the_ID();
$post = get_post($post_id);
$gallery = get_post_gallery_images( $post );
?>

<div id="container">
<div id="main">
<div class="inside">
<div class="mod_article first last block" id="project">
<section class="mod_catalogreader block">

<div class="row">
<div id="colMain" class="col-sm-12 col-md-12 col-lg-12 ">
<div id="description">
<h3><?php echo $post->post_title ; ?></h3>
<div class="row">
<div class="gallery clearfix" id="gallery2">
<?php for($i = 0 ; $i < sizeof($gallery) ; $i++){ ?>
<div class="col-sm-6 col-md-4 col-lg-4">
<figure>
<a href="<?php echo $gallery[$i] ?>" class="fancybox" title="" rel="gallery2"><img style="max-height: 196px" height="195" width="352" src="<?php echo $gallery[$i] ?>"></a>
</figure>
</div>
<?php } ?>

</div>

</div>
</div>
</div>

</div>
</section>
</div>
</div>
<div id="clear"></div>
</div>
<!-- id="main" -->
</div>    

<?php get_footer(); ?>