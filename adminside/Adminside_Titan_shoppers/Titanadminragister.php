<?php include("adminsidemainhead.php"); ?>
  <body>

    
    <?php

              $conn = mysqli_connect('localhost','root','','titanshoppers') or die('connection failed');

              if(isset($_POST['submit'])){

                   $name = mysqli_real_escape_string($conn, $_POST['fname']);
                   $email = mysqli_real_escape_string($conn, $_POST['email']);
                   $phoneno = mysqli_real_escape_string($conn, $_POST['phone_no']);
                   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
                   $cpass = mysqli_real_escape_string($conn, md5($_POST['Confirm_Password']));
                   $image = $_FILES['filetoupload']['name'];
                   $image_size = $_FILES['filetoupload']['size'];
                   $image_tmp_name = $_FILES['filetoupload']['tmp_name'];
                   $image_folder = 'php/Photoes/AdminProfile/'.$image;

                   $select1 = mysqli_query($conn, "SELECT * FROM `admin_ragister` WHERE Phone_no = '$phoneno' AND Password = '$pass'") or die('query failed');
                   if (mysqli_num_rows($select1) > 0) {
                     $_SESSION['puser'] = "Phoneno alredy exist!!!";
                   }

                   $select = mysqli_query($conn, "SELECT * FROM `admin_ragister` WHERE Email = '$email'  AND Password = '$pass'") or die('query failed');

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
                         $insert = mysqli_query($conn, "INSERT INTO `admin_ragister`(FullName,Img,Email,Phone_no,Password) 
                                    VALUES('$name', '$image','$email','$phoneno','$pass')") or die('query failed');

                         if($insert){
                            move_uploaded_file($image_tmp_name, $image_folder);
                            //$message[] = 'registered successfully!';
                            header('location:http://localhost/Titan-Project/adminside/Adminside_Titan_shoppers/Titanadminlogin.php');
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

    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">

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
                if (isset($_SESSION['puser'])) 
                {
                  ?>
                  <div class="alert alert-danger" align="center" role="alert"><h5 style="align-items: center; justify-content: center; display: flex;"><strong>Hey!</strong> <?php  echo $_SESSION['puser']; ?></h5></div>
                  <?php
                  unset($_SESSION['puser']);
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
                <h1 style="font-family: 'OCR A Extended', sans-serif;" class="card-title text-center mb-3">
                  TITAN SHOPPERS ADMIN
                </h1>
                <h3 class="card-title text-left mb-3">Register</h3>
                <form action=""  method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>Full Name</label>
                    <input name="fname" type="text" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Chosse Profile Photo</label>
                    <input type="file" name="filetoupload" class=" form-control ">   
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input name="email" type="email" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Phone.no</label>
                    <input name="phone_no" type="text" maxlength="10" class="form-control p_input">
                  </div>

                  <div class="form-group">
                    <label>Password</label>
                    <input name="password" type="password" class="form-control p_input">
                    <!-- <?php

                  $password = 'password';

                  // Validate password strength
                  $uppercase = preg_match('@[A-Z]@', $password);
                  $lowercase = preg_match('@[a-z]@', $password);
                  $number    = preg_match('@[0-9]@', $password);
                  $specialChars = preg_match('@[^\w]@', $password);

                  if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
                    echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
                     }else
                  {
                      echo 'Strong password.';
                  }
                    ?> -->
                  </div>
                  <div class="form-group">
                    <label>Confirm-Password</label>
                    <input name="Confirm_Password" type="password" class="form-control p_input">
                  </div>
                  
                  <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                  </div>

                  <div class="form-group d-flex align-items-center justify-content-between">
                    <!-- <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"> Remember me </label>
                    </div> -->
                    <a href="#" class="forgot-pass">Forgot password</a>
                  </div>  
                  <p class="sign-up text-center">Already have an Account?<a href="http://localhost/Titan-Project/adminside/Adminside_Titan_shoppers/Titanadminlogin.php"> Log in</a></p>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>       
    

    <!-- container-scroller -->
    <!-- plugins:js -->
     <?php include("mianfooterscript.php"); ?>