 <?php
session_start();

?>

 <?php include("mainhead.php"); ?>
  
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      
      <nav class="navbar navbar-custom navbar-fixed-top " role="navigation">
        <div class="container">
          <div class="navbar-header">
            <a style="font-family: 'OCR A Extended', sans-serif;" class="nav-login-name navbar-brand " align="center" href="home_shop.php">Titan Shoppers</a>
            <style>
              .nav-login-name{
                justify-content: center;
                display: flex;
                align-items: center;
                letter-spacing: 10px;
                text-align: center;
              }
            </style>
          </div>
        </div>
      </nav>    

      <div class="main">
        <section class="module bg-dark-30" data-background="assets/images/shop/loginpage-01.JPG">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h1  style="margin-top:80px;" class=" module-title font-alt mb-0">Login-Register</h1>
              </div>
            </div>
          </div>
        </section>
        <section class="module">
          <div class="container">

            <div class="row">
                
                <?php

                if (isset($_SESSION['ragis'])) 
                {
                  ?>
                  <div class="alert alert-success" align="center" role="alert"><h5 style="align-items: center; justify-content: center; display: flex;"><strong>Hey!</strong> <?php  echo $_SESSION['ragis']; ?></h5></div>
                  <?php
                 
                  unset($_SESSION['ragis']);
                }

                ?>

            </div>
            <div class="row">
                
                <?php

                if (isset($_SESSION['login'])) 
                {
                  ?>
                  <div class="alert alert-success" align="center" role="alert"><h5 style="align-items: center; justify-content: center; display: flex;"><strong>Hey!</strong> <?php  echo $_SESSION['login']; ?></h5></div>
                  <?php
                 
                  unset($_SESSION['login']);
                }

                ?>

            </div>

            <div class="row">
              <div class="col-sm-5 col-sm-offset-1 mb-sm-40">
                <h4 class="font-alt">Login</h4>
                <hr class="divider-w mb-10">

                <form class="form" action="php/Tlogincode.php" method="GET">
                  <div class="form-group">

                    <input style="text-transform: lowercase;" class="form-control" id="username" type="text" name="username" placeholder="Username/E-mail/Phone no"/>

                  </div>
                  <div class="form-group">

                    <input style="text-transform: lowercase;" class="form-control" id="password" type="password" name="password" placeholder="Password"/>

                  </div>

                  <div class="form-group">
                    <button class="btn btn-round btn-b">Login</button>
                  </div>
                  <div class="form-group"><a href="forgot_password.php">Forgot Password?</a></div>
                </form>
              </div>
              
              <div class="col-sm-5">
                <h4 class="font-alt">Register</h4>
                <hr class="divider-w mb-10">

                <form  class="form" action="php/Tragistercode.php" method="GET">
                  <div class="form-group">
                    <input style="text-transform: lowercase;" class="form-control" id="" type="text" name="Name" placeholder="Full name"/>
                  </div>
                  <div class="form-group">
                    <input style="text-transform: lowercase;" class="form-control" id="E-mail" type="Email" name="email" placeholder="Email"/>
                  </div>
                  <div class="form-group">
                    <input style="text-transform: lowercase;" class="form-control" id="" type="text" name="Phone_no" placeholder="Phone no"/>
                  </div>
                  <div class="form-group">
                    <input style="text-transform: lowercase;" class="form-control" id="username" type="text" name="username" placeholder="Username"/>
                  </div>
                  <div class="form-group">
                    <input style="text-transform: lowercase;" class="form-control" id="password" type="password" name="password" placeholder="Password"/>
                  </div>
                  <div class="form-group">
                    <input style="text-transform: lowercase;" class="form-control" id="re-password" type="password" name="re_password" placeholder="Re-enter Password"/>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-block btn-round btn-b">Register</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>

        
        
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
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>