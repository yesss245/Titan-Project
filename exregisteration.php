
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
                <h1   style=" font-family: 'OCR A Extended', sans-serif; margin-top:80px;" class=" module-title font-alt mb-0">Login-Register</h1>
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
            <div class="row"> 
                <?php
                if (isset($_SESSION['imgsize'])) 
                {
                  ?>
                  <div class="alert alert-danger" align="center" role="alert"><h5 style="align-items: center; justify-content: center; display: flex;"><strong>Hey!</strong> <?php  echo $_SESSION['imgsize']; ?></h5></div>
                  <?php
                  unset($_SESSION['imgsize']);
                }
                ?>
            </div>

            <!-- < end alert message > -->

            

            <div class="row">
            <?php

              $conn = mysqli_connect('localhost','root','','titanshoppers') or die('connection failed');

              if(isset($_POST['submit'])){

                   $name = mysqli_real_escape_string($conn, $_POST['fname']);
                   $Gender = mysqli_real_escape_string($conn, $_POST['Gender']);
                   $email = mysqli_real_escape_string($conn, $_POST['email']);
                   $phoneno = mysqli_real_escape_string($conn, $_POST['Phone_no']);
                   $username = mysqli_real_escape_string($conn, $_POST['username']);
                   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
                   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
                   $image = $_FILES['filetoupload']['name'];
                   $image_size = $_FILES['filetoupload']['size'];
                   $image_tmp_name = $_FILES['filetoupload']['tmp_name'];
                   $image_folder = 'adminside/Adminside_Titan_shoppers/php/Photoes/UserProfile/'.$image;

                   $select = mysqli_query($conn, "SELECT * FROM `login` WHERE Email = '$email' or Username = '$username' AND Password = '$pass'") or die('query failed');

                   if(mysqli_num_rows($select) > 0){
                      //$message[] = 'user already exist'; 
                      //echo "user already exist";
                      $_SESSION['user'] = "usere alredy exist!!!";
                   }
                   elseif($image_size > 20000000){
                       //$message[] = 'image size is too large!';
                       $_SESSION['imgsize'] = "image size is too large! please select under 2mb image!!";
                    }else{
                      if($pass != $cpass){
                         //$message[] = 'confirm password not matched!';
                         // echo "confirm password not matched!";
                        $_SESSION['password'] = "confirm password not matched!";
                      }else{
                         $insert = mysqli_query($conn, "INSERT INTO `login`(img,Fname,Gender,Email,Phoneno,Username,Password,re_password) 
                                    VALUES('$image','$name','$Gender', '$email','$phoneno','$username','$pass','$cpass')") or die('query failed');

                         if($insert){
                            move_uploaded_file($image_tmp_name, $image_folder);
                            //$message[] = 'registered successfully!';
                            header('location:exlogin.php');
                            //echo "registered successfully!";
                            $_SESSION['ragisterationsuccessfully'] = "registered successfully!";
                         }else{
                            //$message[] = 'registeration failed!';
                            //echo "Ragistration failed";
                            $_SESSION['Ragistrationfailed'] = "registeration failed!";
                         }
                      }
                   }

                }

            ?>

            
              
              <div class="col-sm-5">
                <h4 class="font-alt">Register</h4>
                <hr class="divider-w mb-10">

                <form  class="form" action=""  method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <input class="form-control" type="file" name="filetoupload" placeholder="Select the img*"/>
                  </div>
                  <div class="form-group">
                    <input style="text-transform: none;" class="form-control" id="" type="text" name="fname" placeholder="Full name"/ required>
                  </div>
                  <div class="form-group">
                    Gender :
                     
                              <input class=" radiobtn" style="margin-left: 16px; margin-top:0PX;" id="radio1" name="Gender" value="M"  type="radio"/>
                              <label class="text-muted" style="font-weight: 400;" for="radio1">Male</label>
                          
                              <input class="radiobtn" style="margin-left: 16px; margin-top: 0PX;" id="radio2" value="F" name="Gender"  type="radio"/>
                              <label class="text-muted" style="font-weight: 400;" for="radio2">Female</label>
                          
                  </div>
                  <div class="form-group">
                    <input style="text-transform: lowercase;" class="form-control" id="E-mail" type="email" name="email" placeholder="Email" required/>
                  </div>
                  <div class="form-group">
                    <input style="text-transform: lowercase;" maxlength="10" class="form-control" id="" type="text" name="Phone_no" placeholder="Phone no" required/>
                  </div>
                  <div class="form-group">
                    <input style="text-transform: lowercase;" class="form-control" id="username" type="text" name="username" placeholder="Username" required/>
                  </div>
                  <div class="form-group">
                    <input style="text-transform: none;" class="form-control" id="password" type="password" name="password" placeholder="Password" required/>
                  </div>
                  <div class="form-group">
                    <input style="text-transform: none;" class="form-control" id="re-password" type="password" name="cpassword" placeholder="Re-enter Password" required/>
                  </div>
                  <div class="form-group">
                    <button name="submit" class="btn btn-block btn-round btn-b">Register</button>
                  </div>
                  <div class="form-group">Alredy have an account ?<a href="exlogin.php">login now</a></div>
                </form>
              </div>
              <div class="col-sm-5">
                <div align="center" style="margin-top: 100px; margin-left: 50px; display: flex;align-items: center;justify-content: center;">
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