<style>
        .inside {
            font-family: CorporateS-Regular, Arial, sans-serif !important;

        }
        .map-container-6{
overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;
}
.map-container-6 iframe{
left:0;
top:0;
height:80%;
width:100%;
position:absolute;
}
.wide #container {
    width: 97% !important;
}
</style>
<?php 
get_header(); 
/*
 Template Name: Contact Us
*/
?>
<?php 
$pageName= "contactus";
$args = array("post_type" => "page", "s" => $pageName);
$query = get_posts( $args );
// print_r($query);
$pageTitle = $query[0]->post_title; 
$content = $query[0]->post_content;
$content = strip_shortcode_gallery( $content );
// $content = split('</p>' , $content);

?>

        <div id="container">
            <div id="main">
                <div class="inside">
                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <div class="info">
                                    <!-- <strong class="h-rev">Company Name </strong>
                                    <br>
                                    <span>2000 Lorem ipsum dolor sit amet St,<br>Cairo</span>
                                    <br>
                                    Phone:<span><a href="tel:0229218822">0229218822</a><br>
                                        Mobile: <a href="tel:+2010102332542">+2 (010) 102 3325</a><br>
                                        Fax: 415-778-9355
                                    </span> -->
                                    <?php 
                                        echo $content;
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 300px">

                                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3452.7532152720023!2d31.344122514859638!3d30.072607624197104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583e0e91d658eb%3A0x81b55e4fcd471346!2sCity+Stars+Mall!5e0!3m2!1sen!2seg!4v1548013425043" -->
                                    <!-- width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3452.023835961669!2d31.317454165057203!3d30.093503681864476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583e28090c9f85%3A0x19287b9c8ec71f30!2z2KzYsdin2Kwg2LHZiNmD2LPZiiBSb3h5IEdhcmFnZQ!5e0!3m2!1sen!2seg!4v1549487517561"
                                    width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                            <h1 class="ce_headline first">
                                    Contact Us</h1>
                            <div class="ce_form last tableless block" style="border-radius:5px"> 
                                    <form action="#" id="formData">
                                        <div class="formbody">
                                            <fieldset>
                                                <div class="widget widget-text mandatory">
                                                    <label for="ctrl_79" class="mandatory">
                                                        <span class="invisible">Mandatory field </span>
                                                        <span>
                                                        <?php 
                                                        if(qtrans_getLanguage() === "en"){
                                                            echo 'Name';
                                                        }else{
                                                            echo 'الأسم';
                                                        }   
                                                        ?>
                                                        </span>
                                                    </label>
                                                    <input type="text" name="name" id="name"  class="text mandatory" value=""
                                                        required="" maxlength="255" >
                                                </div>
                                                <div class="widget widget-text mandatory">
                                                    <label for="ctrl_80" class="mandatory">
                                                        <span>
                                                        <?php 
                                                        if(qtrans_getLanguage() === "en"){
                                                            echo 'Email';
                                                        }else{
                                                            echo 'البريد الالكترونى';
                                                        }   
                                                        ?>
                                                        </span>
                                                    </label>
                                                    <input type="email" name="email" id="email" class="text mandatory" value=""
                                                        required="" maxlength="255">
                                                </div>
                                                <div class="widget widget-text">
                                                    <label for="ctrl_81">
                                                        <span>
                                                    <?php 
                                                        if(qtrans_getLanguage() === "en"){
                                                            echo 'Mobile';
                                                        }else{
                                                            echo 'رقم الموبايل';
                                                        }   
                                                        ?> 
                                                    </span>    
                                                    </label>
                                                    <input type="tel" id="tel" name="tel"  class="text" value="" placeholder="+49 12345 678900">
                                                </div>
                                                <label for="ctrl_81">
                                                <span>
                                                <?php 
                                                        if(qtrans_getLanguage() === "en"){
                                                            echo 'Message';
                                                        }else{
                                                            echo 'الرسالة';
                                                        }   
                                                        ?> 
                                                    </span>    
                                                    </label>
                                                <div class="widget widget-textarea message mandatory">
                                                 <textarea id="message" name="message"  class="textarea message mandatory" rows="4" cols="40" required=""></textarea>
                                                </div>
                                            </fieldset>
                                            <span id="infoFail" style="color:red;display:none;"><?php 
                                                if(qtrans_getLanguage() === "en"){
                                                    echo 'Please fill all the fields';
                                                }else{
                                                    echo 'من فضلك ادخل جميع البيانات';
                                                }   
                                                ?> 
                                            </span>
                                            <span id="infoSuccess" style="color:green;display:none;"><?php 
                                                if(qtrans_getLanguage() === "en"){
                                                    echo 'Your Message Sent Successfully';
                                                }else{
                                                    echo 'لقد تم ارسال رسالتك بنجاح';
                                                }   
                                                ?> 
                                            </span>
                                            <button type="submit" value=""> <?php if(qtrans_getLanguage() === "en"){echo "submit";}else{echo "أرسل";}?> </button>
                                        </div>
                                    </form>
                                </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        </div>
      <!-- id="main" -->
    </div>
    <script>
        document.getElementById("formData").addEventListener("submit", function(event){
            event.preventDefault();
            document.getElementById('infoFail').style.display = 'none';
            document.getElementById('infoSuccess').style.display = 'none';
            var name= (document.getElementById('name').value).trim();
            var email= (document.getElementById('email').value).trim();
            var tel= (document.getElementById('tel').value).trim();
            var message= (document.getElementById('message').value).trim();
            var userdata = {
                name,email,tel,message
            }
            console.log(name , email , tel , message);
            if(name == "" || email == "" || message == "" ){
                document.getElementById('infoFail').style.display = 'block';
                document.getElementById('infoSuccess').style.display = 'none';
                
            }
            else{
                $.ajax({
                    url: "<?php echo get_template_directory_uri(); ?>/mail.php",
                    type: "POST",
                    data: userdata,
                    // context: document.body
                    }).done(function() {
                        document.getElementById('infoFail').style.display = 'none';
                        document.getElementById('infoSuccess').style.display = 'block';
                });
            }
        }); 

    </script>
 <?php 
 get_footer();
 ?>