<?php 
/*
 Template Name: About Us
*/
get_header(); 
?>


<div id="container">

    <?php 
        $lang = '';
        $pageName= "About Us";
        if(qtrans_getLanguage() === "en"){
            $lang= "en";
        }
         else{
            $lang= "ar";
        }
        $args = array("post_type" => "page", "s" => $pageName , "lang" => $lang);
        $query = get_posts( $args );
        // print_r($query);
        $pageTitle = $query[0]->post_title; 
        $content = $query[0]->post_content;
        $content = strip_shortcode_gallery( $content );
        $content = split('</p>' , $content);
        $gallery = get_post_gallery_images($query[0]->ID);
        // print_r($gallery);
?>

    <h1><?php echo $pageTitle ?></h1>
    <div id="main">
        <div class="inside">
            <div class="row">
                <div class="col-md-5">
                    <div id="map-container-google-11" class="z-depth-1-half map-container-6">
                        <img class="about-us-img" src="<?php echo str_replace('-150x150', '' , $gallery[0]);  ?>"
                            height="300" width="388" alt="">
                    </div>
                </div>
                <div class="col-md-7">
                    <div>
                        <div class="info">
                            <?php echo $content[0]; ?>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="row">

                <div class="col-md-7">
                    <div>
                        <div class="info">
                        <?php echo $content[1]; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div id="map-container-google-11" class="z-depth-1-half map-container-6">
                        <img class="about-us-img" src="<?php echo str_replace('-150x150', '' , $gallery[1]);  ?>"
                            height="300" width="388" alt="">
                    </div>
                </div>
            </div>

        </div>
<div class="clear"></div>
    </div>
</div>
</div>
<div class="clear"></div>
<!-- id="main" -->
</div>
<?php get_footer() ?>