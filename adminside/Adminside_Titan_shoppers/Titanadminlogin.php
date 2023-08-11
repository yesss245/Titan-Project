<?php include("adminsidemainhead.php"); ?>

  <body>

            <?php



                $conn = mysqli_connect("localhost","root","","titanshoppers");
                if(isset($_POST['submit'])){

                 $email = mysqli_real_escape_string($conn, $_POST['email']);
                 $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

                 $select = mysqli_query($conn, "SELECT * FROM `admin_ragister` WHERE Email = '$email' or Phone_no = '$email'    AND Password = '$pass'") or die('query failed');

                 if(mysqli_num_rows($select) > 0){
                    $row = mysqli_fetch_assoc($select);
                    $_SESSION['Adminuser_id'] = $row['AdminRagisterid'];
                    $_SESSION['name'] = $row['FullName'];
                    header('location:http://localhost/Titan-Project/adminside/Adminside_Titan_shoppers/index.php');
                    //$_SESSION['loginsuccess']= "Login Successfully!!";
                    echo "loginsuccess";
                 }else{
                    //$message[] = 'incorrect email or password!';
                  echo "incorrect email/phoneno/username or password!!";
                 }

              }

            ?>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <!-- <background image in css> -->
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">

                <div class="row"> 
                    <?php
                    if (isset($_SESSION['loginsuccess'])) 
                    {
                      ?>
                      <div class="alert alert-danger" align="center" role="alert"><h5 style="align-items: center; justify-content: center; display: flex;"><strong>Hey!</strong> <?php  echo $_SESSION['loginsuccess']; ?></h5></div>
                      <?php
                      unset($_SESSION['loginsuccess']);
                    }
                    ?>
                </div>

                <h1 style="font-family: 'OCR A Extended', sans-serif;" class="card-title text-center mb-3">
                  TITAN SHOPPERS ADMIN
                </h1>
                <h3 class="card-title text-left mb-3">Login</h3>
                <form method="post">
                  <div class="form-group">
                    <label>Username or email *</label>
                    <input name="email" type="text" class="form-control p_input">
                  </div>
                  
                  
                  <div class="form-group">
                    <label>Password *</label>
                    <input name="password" type="Password" class="form-control p_input">
                  </div>
                  <!-- <for Remember> -->
                  <div class="form-group d-flex align-items-center justify-content-between">
                    <!-- <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">Remember me </label>
                    </div> -->
                    <a style="text-decoration:none;" href="#" class="forgot-pass">Forgot password</a>
                  </div>
                  <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                  </div>
                  
                  <p class="sign-up">Don't have an Account?<a href="http://localhost/Titan-Project/adminside/Adminside_Titan_shoppers/Titanadminragister.php"> Sign Up</a></p>
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