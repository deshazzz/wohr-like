<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Home - Roxy Parking</title>
  <link rel="shortcut icon" type="image/png" href="/tl_files/img/favicon.png">
  <meta name="robots" content="index,follow">
  <meta property="og:type" content="article">
  <meta property="og:title" content="Home - Roxy Parking">
  <link rel="alternate" hreflang="en" href="#">
  <link rel="alternate" hreflang="ar" href="#">
  <meta name="google-site-verification" content="IyxVWTNVbAO8gige7CfwG_QJzVP2_bm-ngdm8pf0Gkk">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php 
    if(qtrans_getLanguage() === "en"){
  ?>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/tl_files/woehr/css_resp/main.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/tl_files/woehr/css_resp/footer.css">
    <?php }else { ?>
      <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/> 
      <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/tl_files/woehr/css_resp/main-ar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/tl_files/woehr/css_resp/footer-ar.css">
    <?php } ?>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/tl_files/woehr/css/bim.css">

  <script src="<?php echo get_template_directory_uri(); ?>/tl_files/woehr/js_min/app.min.js"></script>
</head>

<body id="top" class="unix chrome blink ch70 wide">
  <div id="wrapper">
    <header id="header">
      <div class="inside">
        <div class="row">
          <!-- indexer::stop -->
          <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="mod_breadcrumb col-sm-3 col-md-5 col-lg-5">
            <span class="active" itemprop="title">&nbsp;</span>
          </div>
          <!-- indexer::continue -->
          <!-- indexer::stop -->
          <nav class="mod_customnav col-sm-3 col-md-3 col-lg-3 block" id="metanavi">
            <a href="en/#skipNavigation213" class="invisible">Skip navigation</a>
            <ul class="level_1">
              <li class="first last"><a href="en/press-132.html" title="Press" class="first last">Press</a></li>
            </ul>
            <a id="skipNavigation213" class="invisible">&nbsp;</a>
          </nav>
          <!-- indexer::continue -->
          <!-- indexer::stop -->
          <nav class="mod_changelanguage col-sm-3 col-md-2 col-lg-2 pull-right block" itemscope="" itemtype="http://schema.org/SiteNavigationElement">
            <select id="changelanguage" class="level_1" ONCHANGE="location = this.options[this.selectedIndex].value; ">
                
                
                <option value="<?php echo site_url().'/en'; ?>" class="<?php  if(qtrans_getLanguage() === "en"){ echo 'active';} ?>"
                 data-imagesrc="<?php echo get_template_directory_uri(); ?>/tl_files/img/flags/en.png"
                 <?php  if(qtrans_getLanguage() === "en"){ echo 'selected="selected"'; } ?>
                    title="&nbsp;" hreflang="en" lang="en">English</option>



                <option value="<?php echo site_url().'/ar'; ?>" class="<?php  if(qtrans_getLanguage() === "ar"){ echo 'active';} ?>"
                 data-imagesrc="<?php echo get_template_directory_uri(); ?>/tl_files/img/flags/eg.png" 
                <?php  if(qtrans_getLanguage() === "ar"){ echo 'selected="selected"'; } ?>  hreflang="ar" lang="ar">Arabic</option>
                 title="&nbsp;"
            </select>
            <script src="<?php echo get_template_directory_uri(); ?>/tl_files/js/jquery.ddslick.min.js"></script>
            <script>$(document).ready(function(){var languageIndex=null;$('#changelanguage').ddslick({width:'inherit',onSelected:function(data){if(data.selectedIndex!=languageIndex&&languageIndex!=null)
window.location.href=data.selectedData.value;languageIndex=data.selectedIndex}});$('#changelanguage').mouseleave(function(){$('#changelanguage').ddslick('close')})})</script>
        </nav>
          <!-- indexer::continue -->
          <!-- indexer::stop -->
          <div id="searchbox" class="mod_search col-sm-3 col-md-2 col-lg-2 pull-right">
            <form action="en/search-results.html" method="get">
              <div class="formbody">
                <label for="ctrl_keywords_215" class="invisible">Keywords</label>
                <input type="search" name="keywords" id="ctrl_keywords_215" class="text" value="">
                <input type="submit" id="ctrl_submit_215" class="submit" value="Search">
              </div>
            </form>
          </div>
          <!-- indexer::continue -->
        </div><!-- class="row" -->
        <div id="nav-mobile" class="visible-xs">
          <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
        </div>
        <!-- indexer::stop -->
        <div id="logo">
          <a href="/en/"><img src="<?php echo get_template_directory_uri(); ?>/tl_files/woehr/img/logo.jpg" width="150" height="77" alt="Logo Wöhr" /></a>
        </div>
        <!-- indexer::continue -->
        <div class="row" id="mainnavi-wrapper">
          <div class="col-sm-12 col-md-12 col-lg-12" id="mainnavi">
            <!-- indexer::stop -->
            <div class="row">
              <nav class="col-sm-12 col-md-12 col-lg-12 mod_navigation block">
                <a href="en/#skipNavigation15" class="invisible">Skip navigation</a>
                <ul class="level_1">
                  <li data-alias="services" class="submenu mnl1 products-navi sibling first"><a href="<?php  site_url();?>?page_id=11"
                      title="services" class="submenu mnl1 products-navi sibling first"><?php  if(qtrans_getLanguage() === "ar"){ echo 'خدمات';} else{echo 'Services';} ?></a>
                  </li>
                  <li data-alias="Gallery" class="submenu sibling"><a href="<?php  site_url();?>?page_id=15" title="Gallery" class="submenu sibling"><?php  if(qtrans_getLanguage() === "ar"){ echo 'المعرض';} else{echo 'Gallery';} ?></a>
                  </li>
                  <li data-alias="about-woehr" class="submenu mnl4 sibling"><a href="<?php  site_url();?>?page_id=5" title="About Roxy parking"
                      class="submenu mnl4 sibling"> <?php  if(qtrans_getLanguage() === "ar"){ echo 'عن جراج روكسى';} else{echo 'About Roxy parking';} ?></a>
                  </li>
                  <li data-alias="news" class="mnl5 sibling"><a href="<?php  site_url();?>?page_id=13" title="New version: platform" class="mnl5 sibling"> <?php  if(qtrans_getLanguage() === "ar"){ echo 'الأخبار';} else{echo 'News';} ?></a></li>
                  <li data-alias="events" class="mnl5 sibling"><a href="<?php  site_url();?>?page_id=9" title="New events" class="mnl5 sibling"><?php  if(qtrans_getLanguage() === "ar"){ echo 'احداث';} else{echo 'Events';} ?></a></li>
                  <li data-alias="contact" class="submenu mnl7 sibling last"><a href="<?php  site_url();?>?page_id=7" title="Contact"
                      class="submenu mnl7 sibling last"><?php  if(qtrans_getLanguage() === "ar"){ echo 'اتصل بنا';} else{echo 'Contact Us';} ?></a>
                  </li>
                </ul>
                <a id="skipNavigation15" class="invisible">&nbsp;</a>
              </nav>
            </div>
            <!-- indexer::continue -->
          </div>
        </div>
      </div>
    </header>
    <div class="custom">
      <div id="woehr_subnavi">
        <div class="inside">
          <div class="row">
            <!-- indexer::stop -->
          
          </div><!-- class="row" -->
        </div>
      </div>
    </div>

<!-- End of the header Element -->