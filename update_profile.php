<?php
session_start();
$user_id=$_SESSION['user_id'];

$conn=mysqli_connect("localhost","root","","titanshoppers");


if(isset($_POST['update_profile'])){
   $update_username = mysqli_real_escape_string($conn, $_POST['update_username']);
   $update_fname = mysqli_real_escape_string($conn, $_POST['update_fname']);
   $update_email = mysqli_real_escape_string($conn, $_POST['update_email']);

   mysqli_query($conn, "UPDATE `login` SET Fname = '$update_fname', Email = '$update_email',Username = '$update_username' WHERE userid = '$user_id'") or die('query failed');
    

   $old_pass = $_POST['old_pass'];
   $update_pass = mysqli_real_escape_string($conn, md5($_POST['update_pass']));
   $new_pass = mysqli_real_escape_string($conn, md5($_POST['new_pass']));
   $confirm_pass = mysqli_real_escape_string($conn, md5($_POST['confirm_pass']));

   if(!empty($update_pass) || !empty($new_pass) || !empty($confirm_pass)){
      if($update_pass != $old_pass){
         //$message[] = 'old password not matched!';
         echo "old password not matched!";
      }elseif($new_pass != $confirm_pass){
         //$message[] = 'confirm password not matched!';
        echo "confirm password not matched!";
      }else{
         mysqli_query($conn, "UPDATE `login` SET Password = '$confirm_pass' WHERE userid = '$user_id'") or die('query failed');
         //$message[] = 'password updated successfully!';
         echo "password update succssfully!!";
      }
   }

   $update_image = $_FILES['update_image']['name'];
   $update_image_size = $_FILES['update_image']['size'];
   $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
   $update_image_folder = 
   'adminside/Adminside_Titan_shoppers/php/Photoes/UuserProfile/'.$update_image;


   if(!empty($update_image)){
      if($update_image_size > 20000000){
         //$message[] = 'image is too large';
        echo "Image is too large!!";
      }else{
         $image_update_query = mysqli_query($conn, "UPDATE `login` SET img = '$update_image' WHERE userid = '$user_id'") or die('query failed');
         if($image_update_query){
            move_uploaded_file($update_image_tmp_name, $update_image_folder);
         }
         //$message[] = 'image updated succssfully!';
         echo "image updated succssfully!";
      }
   }

}



?>


<link rel="stylesheet" type="text/css" href="assets/css/myprofilestyle.css">
 <?php include("mainhead.php"); ?>
  
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>

      
     <!-- < Header > -->
      

      <div class="main">
        <section class="module bg-dark-30" data-background="assets/images/shop/loginpage-01.JPG">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h1  style="margin-top:80px;" class=" module-title font-alt mb-0">My Profile</h1>
              </div>
            </div>
          </div>
        </section>
        <div class="container">
          <?php
              $select = mysqli_query($conn, "SELECT * FROM `login` WHERE userid = '$user_id'") or die('query failed');
              if(mysqli_num_rows($select) > 0){
                 $fetch = mysqli_fetch_assoc($select);
              }
           ?>
          <form action="" method="post" enctype="multipart/form-data">
              <div class="row">
                  <div style="margin-top:30px;" class="col-sm-6   col-sm-offset-1 mb-sm-40">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-5">
                                                <p><input style="text-transform: lowercase;" class="form-control" type="text" name="update_username" value="<?php echo $fetch['Username']; ?>"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-5">
                                                <p><input style="text-transform: none;" class="form-control" type="text" name="update_fname" value="<?php echo $fetch['Fname']; ?>"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-5">
                                                <p><input style="text-transform: lowercase;" class="form-control" type="text" name="update_email" value="<?php echo $fetch['Email']; ?>"></p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Update your pic</label>
                                            </div>
                                            <div class="col-md-5">
                                                <p><input class="form-control" type="file" name="update_image"></p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>old password</label>
                                                
                                            </div>
                                            <div class="col-md-5">
                                                <p><input type="hidden" name="old_pass" value="<?php echo $fetch['Password']; ?>">
                                                <input class="form-control" type="text" name="update_pass" placeholder="Enter Previous password" ></p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>New password</label>
                                            </div>
                                            <div class="col-md-5">
                                                <p><input class="form-control" type="text" name="new_pass" placeholder="Enter new password"></p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Confirm password</label>
                                            </div>
                                            <div class="col-md-5">
                                                <p><input class="form-control" type="text" name="confirm_pass" placeholder="Enter Confirm password"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-3">
                                            <input type="submit" name="update_profile" class="btn btn-d btn-circle btn-sm">
                                          </div>
                                          <div class="col-md-5"> 
                                            <a href="Myprofile.php" class="btn btn-d btn-circle btn-sm ">Go Back</a>
                                          </div>
                                        </div>

               </div>

               <div class="col-sm-5">
                <div align="center" style="margin-top: 100px; margin-left: -50px; display: flex;align-items: center;justify-content: center;">
                  <img src="assets/images/shop/Titanshoppersname.jpg">
                </div>
              </div>

             </div>
          </form>

        </div>  

      </div>  

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