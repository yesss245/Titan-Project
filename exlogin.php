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
                <h1  style=" font-family: 'OCR A Extended', sans-serif; margin-top:80px;" class=" module-title font-alt mb-0">Login-Register</h1>
              </div>
            </div>
          </div>
        </section>
        <section class="module">
          <div class="container">

            <!-- < alert message > -->

            <div class="row"> 
                <?php
                if (isset($_SESSION['user'])) 
                {
                  ?>
                  <div class="alert alert-danger" align="center" role="alert"><h5 style="align-items: center; justify-content: center; display: flex;"><strong>Hey!</strong> <?php  echo $_SESSION['user']; ?></h5></div>
                  <?php
                  unset($_SESSION['user']);
                }
                ?>
            </div>
            <div class="row"> 
                <?php
                if (isset($_SESSION['Ragistrationfailed'])) 
                {
                  ?>
                  <div class="alert alert-danger" align="center" role="alert"><h5 style="align-items: center; justify-content: center; display: flex;"><strong>Hey!</strong> <?php  echo $_SESSION['Ragistrationfailed']; ?></h5></div>
                  <?php
                  unset($_SESSION['Ragistrationfailed']);
                }
                ?>
            </div>
            <div class="row"> 
                <?php
                if (isset($_SESSION['ragisterationsuccessfully'])) 
                {
                  ?>
                  <div class="alert alert-success" align="center" role="alert"><h5 style="align-items: center; justify-content: center; display: flex;"><strong>Hey!</strong> <?php  echo $_SESSION['ragisterationsuccessfully']; ?></h5></div>
                  <?php
                  unset($_SESSION['ragisterationsuccessfully']);
                }
                ?>
            </div>
            <div class="row"> 
                <?php
                if (isset($_SESSION['password'])) 
                {
                  ?>
                  <div class="alert alert-danger" align="center" role="alert"><h5 style="align-items: center; justify-content: center; display: flex;"><strong>Hey!</strong> <?php  echo $_SESSION['password']; ?></h5></div>
                  <?php
                  unset($_SESSION['password']);
                }
                ?>
            </div>

            <!-- < end alert message > -->

            <!-- < Login php script start > -->

            <?php

              $conn = mysqli_connect("localhost","root","","titanshoppers");
              if(isset($_POST['submit'])){

               $email = mysqli_real_escape_string($conn, $_POST['email']);
               $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

               $select = mysqli_query($conn, "SELECT * FROM `login` WHERE Email = '$email' or Phoneno = '$email' or Username = '$email'  AND password = '$pass'") or die('query failed');

               if(mysqli_num_rows($select) > 0){
                  $row = mysqli_fetch_assoc($select);
                  $_SESSION['user_id'] = $row['userid'];
                  $_SESSION['user_name'] = $row['Username'];
                  header('location:Myprofile.php');
                  echo "login successfully!!";
               }else{
                  //$message[] = 'incorrect email or password!';
                echo "incorrect email/phoneno/username or password!!";
               }

            }

            ?>

            <div class="row">
              <div  class="col-sm-5 col-sm-offset-1 mb-sm-40">
                <h4 class="font-alt">Login</h4>
                <hr class="divider-w mb-10">

                <form class="form" action="" method="post">
                  <div class="form-group">

                    <input style="text-transform: lowercase;" class="form-control" id="username" type="text" name="email" placeholder="Username/E-mail/Phone no"/>

                  </div>
                  <div class="form-group">

                    <input style="text-transform: none;" class="form-control" id="password" type="password" name="password" placeholder="Password"/>

                  </div>

                  <div class="form-group">
                    <button class="btn btn-round btn-b" name="submit">Login</button>
                  </div>
                  <div class="form-group"><a href="forgot_password.php">Forgot Password?</a></div>
                  <div class="form-group">Don't have an account ?<a href="exregisteration.php">register now</a></div>
                </form>
              </div>
              <div class="col-sm-5">
                <div align="center" style="margin-top: -10px; margin-left: 50px; display: flex;align-items: center;justify-content: center; height:40vh; width:auto;">
                  <img src="assets/images/shop/Titanshoppersname.jpg">
                </div>
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