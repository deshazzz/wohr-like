<?php 
/*
 * Template Name: video_gallery-single
 * Template Post Type: post
 */

get_header();
?>


<?php
$post_id = get_the_ID();
$post = get_post($post_id);
$post_content = $post->post_content;
$video_codes = explode( "\n", $post_content );
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
<?php for($i = 0 ; $i < sizeof($video_codes) ; $i++){ ?>
<div class="col-sm-6 col-md-4 col-lg-4">
<figure>
<a href="https://www.youtube.com/embed/<?php echo $video_codes[$i] ?>" class="various fancybox fancybox.iframe" title="" rel="gallery2"><img style="max-height: 196px" height="195" width="352" src="https://img.youtube.com/vi/<?php echo $video_codes[$i]?>/hqdefault.jpg"></a>
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

<script type="text/javascript">
	$(document).ready(function() {
    $(".various").fancybox({
            maxWidth    : 800,
            maxHeight   : 600,
            fitToView   : false,
            width       : '70%',
            height      : '70%',
            autoSize    : false,
            closeClick  : false,
            openEffect  : 'none',
            closeEffect : 'none'
        });
})
</script>

<?php get_footer(); ?>