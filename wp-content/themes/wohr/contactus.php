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

        <div id="container">
            <div id="main">
                <div class="inside">
                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <div class="info">
                                    <strong class="h-rev">Company Name </strong>
                                    <br>
                                    <span>2000 Lorem ipsum dolor sit amet St,<br>Cairo</span>
                                    <br>
                                    Phone:<span><a href="tel:0229218822">0229218822</a><br>
                                        Mobile: <a href="tel:+2010102332542">+2 (010) 102 3325</a><br>
                                        Fax: 415-778-9355
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 300px">

                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3452.7532152720023!2d31.344122514859638!3d30.072607624197104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583e0e91d658eb%3A0x81b55e4fcd471346!2sCity+Stars+Mall!5e0!3m2!1sen!2seg!4v1548013425043"
                                    width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                            <h1 class="ce_headline first">
                                    Contact Us</h1>
                            <div class="ce_form last tableless block" style="border-radius:5px"> 
                                    <form action="#">
                                        <div class="formbody">
                                            <fieldset>
                                                <div class="widget widget-text mandatory">
                                                    <label for="ctrl_79" class="mandatory">
                                                        <span class="invisible">Mandatory field </span>Name<span class="mandatory">*</span>
                                                    </label>
                                                    <input type="text" name="name" id="ctrl_79" class="text mandatory" value=""
                                                        required="" maxlength="255">
                                                </div>
                                                <div class="widget widget-text mandatory">
                                                    <label for="ctrl_80" class="mandatory">
                                                        <span class="invisible">Mandatory field </span>Email<span class="mandatory">*</span>
                                                    </label>
                                                    <input type="email" name="email" id="ctrl_80" class="text mandatory" value=""
                                                        required="" maxlength="255">
                                                </div>
                                                <div class="widget widget-text">
                                                    <label for="ctrl_81">
                                                        Telephone </label>
                                                    <input type="tel" name="tel" id="ctrl_81" class="text" value="" placeholder="+49 12345 678900">
                                                </div>
                                                <label for="ctrl_81">
                                                        Message </label>
                                                <div class="widget widget-textarea message mandatory">
                                                 <textarea name="message" id="ctrl_76" class="textarea message mandatory" rows="4" cols="40" required=""></textarea>
                                                </div>
                                            </fieldset>
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
 <?php 
 get_footer();
 ?>