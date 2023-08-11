<?php include("mainhead.php"); ?>

  
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      
      
      <!-- < Header > -->
      <?php include("header.php");?>

      <!--  <section class="home-section home-full-height" id="map-section"> -->
        <!-- <div id="map"></div> -->

      <!-- </section> --> 
      <div class="main">
        <section class="module" id="contact">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Contact us</h2>
                <div class="module-subtitle font-serif"></div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-8">
                <form id="contactForm" role="form" method="post" action="php/Contact_us_php_code.php">
                  <div class="form-group">
                    <label class="sr-only" for="name">Name</label>
                    <input style="text-transform:none;" class="form-control" type="text" id="name" name="name" placeholder="Your Name*" required="required" data-validation-required-message="Please enter your name."/>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="email">Email</label>
                    <input style="text-transform:lowercase;" class="form-control" type="email" id="email" name="email" placeholder="Your Email*" required="required" data-validation-required-message="Please enter your email address."/>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <textarea style="text-transform:none;" class="form-control" rows="7" id="message" name="message" placeholder="Your Message*" required="required" data-validation-required-message="Please enter your message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="text-center">
                    
                    <input type="submit" name="submit" id="cfsubmit" class="btn btn-block btn-round btn-d">
                  </div>
                </form>
                <div class="ajax-response font-alt" id="contactFormResponse"></div>
              </div>
              <div class="col-sm-4">
                <div class="alt-features-item mt-0">
                  <div class="alt-features-icon"><span class="icon-megaphone"></span></div>
                  <h3 class="alt-features-title font-alt">Where to meet</h3>Titan Company<br/>25, D Mart Sarthana<br/>Surat - 395006
                </div>
                <div class="alt-features-item mt-xs-60">
                  <div class="alt-features-icon"><span class="icon-map"></span></div>
                  <h3 class="alt-features-title font-alt">Say Hello</h3>Email:<a href="mailto: somecompany@example.com" style="color:#666;"> titanshoppers@gmail.com</a><br/>Phone: <a href="tel:+919510537060" style="color: #666;"> +91 90200 90200
                </div>
              </div>
            </div>

              <div class="row" style="margin-top:5px;">
                  
                  <?php

                  if (isset($_SESSION['contact_us'])) 
                  {
                    ?>
                    <div class="alert alert-success" align="center" role="alert"><h6 style="align-items: center; justify-content: center; display: flex;"><strong>Hey!</strong> <?php  echo $_SESSION['contact_us']; ?></h6></div>
                    <?php
                   
                    unset($_SESSION['contact_us']);
                  }

                  ?>

              </div>

          </div>
        </section>

        <!-- < googlemap > -->
        <?php include("googlemap.php");?>

      <!-- < footer > -->
      <?php include("footer.php");?>

      </div>
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
    <!--  
    JavaScripts
    =============================================
    -->
    <script src="assets/lib/jquery/dist/jquery.js"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/lib/wow/dist/wow.js"></script>
    <script src="assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
    <script src="assets/lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="assets/lib/flexslider/jquery.flexslider.js"></script>
    <script src="assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="assets/lib/smoothscroll.js"></script>
    <script src="assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDK2Axt8xiFYMBMDwwG1XzBQvEbYpzCvFU"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>