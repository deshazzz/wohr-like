

    <!-- Start Of the Footer Element -->
    
    <div class="push"></div>
  </div>
  <!-- id="wrapper" -->
    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="row ">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                    <div class="ft-logo"><img src="<?php echo get_template_directory_uri(); ?>/tl_files/woehr/img/logo.png" height="75" width="150" alt=""></div>
                </div>
            </div>
            <hr class="footer-line">
            <div class="row ">
                <!-- footer-about -->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 ">
                    <div class="footer-widget ">
                        <div class="footer-title"><?php  if(qtrans_getLanguage() === "ar"){ echo 'جراج روكسى';} else{echo 'Roxy Garage';} ?></div>
                        <ul class="list-unstyled">
                            <li><a href="<?php site_url(); ?>"><?php  if(qtrans_getLanguage() === "ar"){ echo 'الصفحة الريسية';} else{echo 'Home';} ?></a></li>
                            <li><a href="#"><?php  if(qtrans_getLanguage() === "ar"){ echo 'المعرض';} else{echo 'Gallery';} ?></a></li>
                            <li><a href="#"><?php  if(qtrans_getLanguage() === "ar"){ echo 'الأحداث';} else{echo 'Events';} ?></a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.footer-about -->
                <!-- footer-links -->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 ">
                    <div class="footer-widget ">
                        <div class="footer-title"><?php  if(qtrans_getLanguage() === "ar"){ echo 'وصلات سريعة';} else{echo 'Quick Links';} ?></div>
                        <ul class="list-unstyled">
                            <li><a href="#"><?php  if(qtrans_getLanguage() === "ar"){ echo 'الأخبار';} else{echo 'News';} ?></a></li>
                            <li><a href="#"><?php  if(qtrans_getLanguage() === "ar"){ echo 'أتصل بنا';} else{echo 'Contact us';} ?></a></li>
                            <li><a href="#"><?php  if(qtrans_getLanguage() === "ar"){ echo 'عن جراج روكسى';} else{echo 'About us';} ?></a></li>
\                        </ul>
                    </div>
                </div>
                <!-- /.footer-links -->
                <!-- footer-links -->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 ">
                    <div class="footer-widget ">
                        <div class="footer-title">Social</div>
                        <ul class="list-unstyled">
                            <li><a href="#">Facebook</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.footer-links -->
                <!-- footer-links -->
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-6 col-6 ">
                    <div class="footer-widget ">
                        <h3 class="footer-title">Subscribe Newsletter</h3>
                        <form>
                            <div class="newsletter-form">
                                <input class="form-control" placeholder="Enter Your Email address" type="text">
                                <button class="btn btn-default btn-sm" type="submit">Go</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.footer-links -->
                <!-- tiny-footer -->
            </div>
            <div class="row ">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center ">
                    <div class="tiny-footer">
                        <p>Copyright © All Rights Reserved 2019 | Roxy Parking </p>
                    </div>
                </div>
                <!-- /. tiny-footer -->
            </div>
        </div>
    </div>
    <!-- /.footer -->
</body>
</html>