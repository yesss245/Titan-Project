<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  
    Document Title
    =============================================
    -->
    <title>Titan Shoppers</title>
    
    <!--  
    Stylesheets
    =============================================
    
    -->
    <link href="http://fonts.cdnfonts.com/css/ocr-a-extended" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f852085a0d.js" crossorigin="anonymous"></script>
    <!-- Default stylesheets-->
    <link href="Titan my/assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="Titan my/assets/lib/animate.css/animate.css" rel="stylesheet">
    <link href="Titan my/assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="Titan my/assets/lib/et-line-font/et-line-font.css" rel="stylesheet">
    <link href="Titan my/assets/lib/flexslider/flexslider.css" rel="stylesheet">
    <link href="Titan my/assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="Titan my/assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="Titan my/assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="Titan my/assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="Titan my/assets/css/style.css" rel="stylesheet">
    <link id="color-scheme" href="Titan my/assets/css/colors/default.css" rel="stylesheet">
  </head>
<body>

	<section class="module" id="contact">
        <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Get in touch</h2>
                <div class="module-subtitle font-serif"></div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <form id="contactForm" role="form" method="post" action="php/contact.php">
                  <div class="form-group">
                    <label class="sr-only" for="name">Name</label>
                    <input class="form-control" type="text" id="name" name="name" placeholder="Your Name*" required="required" data-validation-required-message="Please enter your name."/>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="email">Email</label>
                    <input class="form-control" type="email" id="email" name="email" placeholder="Your Email*" required="required" data-validation-required-message="Please enter your email address."/>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" rows="7" id="message" name="message" placeholder="Your Message*" required="required" data-validation-required-message="Please enter your message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="text-center">
                    <button class="btn btn-block btn-round btn-d" id="cfsubmit" type="submit">Submit</button>
                  </div>
                </form>
                <div class="ajax-response font-alt" id="contactFormResponse"></div>
              </div>
            </div>
        </div>
  	</section>

</body>
</html>