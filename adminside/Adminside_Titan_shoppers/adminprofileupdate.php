

<!-- < main head link etc> -->
<?php include("adminsidemainhead.php"); ?>
  <body>
    <div class="container-scroller">
     
      <!-- partial:partials/_sidebar.html -->
      <?php include("adminsidebar.php"); ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        
        <!-- partial:partials/_navbar.html -->
            <?php include("adminheader.php"); ?>

            
            <!-- <div class="row">
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-3 grid-margin">
                        <img src="php/Photoes/AdminProfile/defaultimg.jpg">
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div> -->

          <?php
            
            $Adminuserid=$_SESSION['Adminuser_id'];

            $conn=mysqli_connect("localhost","root","","titanshoppers");


            if(isset($_POST['update_profile'])){
               $update_phoneno = mysqli_real_escape_string($conn, $_POST['update_phoneno']);
               $update_fname = mysqli_real_escape_string($conn, $_POST['update_fname']);
               $update_email = mysqli_real_escape_string($conn, $_POST['update_email']);

               mysqli_query($conn, "UPDATE `admin_ragister` SET FullName = '$update_fname', Email = '$update_email',Phone_no = '$update_phoneno' WHERE AdminRagisterid = '$Adminuserid'") or die('query failed');
                

               $old_pass = $_POST['old_pass'];
               $update_pass = mysqli_real_escape_string($conn, md5($_POST['update_pass']));
               $new_pass = mysqli_real_escape_string($conn, md5($_POST['new_pass']));
               $confirm_pass = mysqli_real_escape_string($conn, md5($_POST['confirm_pass']));

               if(!empty($update_pass) || !empty($new_pass) || !empty($confirm_pass)){
                  if($update_pass != $old_pass){
                     //$message[] = 'old password not matched!';
                     //echo "old password not matched!";
                    $_SESSION['oldnotmatch']="old password not matched!";
                  }elseif($new_pass != $confirm_pass){
                     //$message[] = 'confirm password not matched!';
                    //echo "confirm password not matched!";
                    $_SESSION['Confirmnotmatch']="confirm password not matched!";
                  }else{
                     mysqli_query($conn, "UPDATE `admin_ragister` SET Password = '$confirm_pass' WHERE AdminRagisterid = '$Adminuserid'") or die('query failed');
                     //$message[] = 'password updated successfully!';
                     //echo "password update succssfully!!";
                     $_SESSION['Updatepassword']="password update succssfully!!";
                  }
               }

               $update_image = $_FILES['update_image']['name'];
               $update_image_size = $_FILES['update_image']['size'];
               $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
               $update_image_folder = 'php/Photoes/AdminProfile/'.$update_image;

               if(!empty($update_image)){
                  if($update_image_size > 20000000){
                     //$message[] = 'image is too large';
                    //echo "Image is too large!!";
                    $_SESSION['Imglarge']="Image is too large!! Please select under 2mb!!";
                  }else{
                     $image_update_query = mysqli_query($conn, "UPDATE `admin_ragister` SET Img = '$update_image' WHERE AdminRagisterid = '$Adminuserid'") or die('query failed');
                     if($image_update_query){
                        move_uploaded_file($update_image_tmp_name, $update_image_folder);
                     }
                     //$message[] = 'image updated succssfully!';
                     //echo "image updated succssfully!";
                     $_SESSION['imgdone']="Image Update succssfully!!!";
                  }
               }

            }






          ?>



            <?php
                $Adminuserid=$_SESSION['Adminuser_id'];
                $conn=mysqli_connect("localhost","root","","titanshoppers");
                $select = mysqli_query($conn, "SELECT * FROM `admin_ragister` WHERE AdminRagisterid = '$Adminuserid'") or die('query failed');
               if(mysqli_num_rows($select) > 0){
                  $fetch=mysqli_fetch_assoc($select);
               }
              
             ?>

        <div  class="main-panel">
          <div  class="content-wrapper  page-body-wrapper full-page-wrapper">
            <div style="justify-content: center;"  class=" content-wrapper full-page-wrapper d-flex align-items-center row"> 
              <div class=" col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">

                    <form method="post" enctype="multipart/form-data">
                      <h3>Profile Update</h3>

                      <div class="row">               
                        <?php

                        if (isset($_SESSION['Updatedone'])) 
                        {
                          ?>
                          <div class="alert alert-success" align="center" role="alert"><h5 style="align-items: center; justify-content: center; display: flex;"><strong>Hey!</strong> <?php  echo $_SESSION['Updatedone']; ?></h5></div>
                          <?php                       
                          unset($_SESSION['Updatedone']);
                        }
                        ?>
                      </div>

                      <div class="row">               
                        <?php

                        if (isset($_SESSION['imgdone'])) 
                        {
                          ?>
                          <div class="alert alert-success" align="center" role="alert"><h5 style="align-items: center; justify-content: center; display: flex;"><strong>Hey!</strong> <?php  echo $_SESSION['imgdone']; ?></h5></div>
                          <?php                       
                          unset($_SESSION['imgdone']);
                        }
                        ?>
                      </div>

                      <div class="row">               
                        <?php

                        if (isset($_SESSION['Imglarge'])) 
                        {
                          ?>
                          <div class="alert alert-danger" align="center" role="alert"><h5 style="align-items: center; justify-content: center; display: flex;"><strong>Hey!</strong> <?php  echo $_SESSION['Imglarge']; ?></h5></div>
                          <?php                       
                          unset($_SESSION['Imglarge']);
                        }
                        ?>
                      </div>

                      <div class="row">               
                        <?php

                        if (isset($_SESSION['oldnotmatch'])) 
                        {
                          ?>
                          <div class="alert alert-danger" align="center" role="alert"><h5 style="align-items: center; justify-content: center; display: flex;"><strong>Hey!</strong> <?php  echo $_SESSION['oldnotmatch']; ?></h5></div>
                          <?php                       
                          unset($_SESSION['oldnotmatch']);
                        }
                        ?>
                      </div>

                      <div class="row">               
                        <?php

                        if (isset($_SESSION['Confirmnotmatch'])) 
                        {
                          ?>
                          <div class="alert alert-danger" align="center" role="alert"><h5 style="align-items: center; justify-content: center; display: flex;"><strong>Hey!</strong> <?php  echo $_SESSION['Confirmnotmatch']; ?></h5></div>
                          <?php                       
                          unset($_SESSION['Confirmnotmatch']);
                        }
                        ?>
                      </div>

                      <div class="row">               
                        <?php

                        if (isset($_SESSION['Updatepassword'])) 
                        {
                          ?>
                          <div class="alert alert-success" align="center" role="alert"><h5 style="align-items: center; justify-content: center; display: flex;"><strong>Hey!</strong> <?php  echo $_SESSION['Updatepassword']; ?></h5></div>
                          <?php                       
                          unset($_SESSION['Updatepassword']);
                        }
                        ?>
                      </div>


                      <div class="row">
                        <div class="col-md-2"> 
                            <h4 class="mt-4 text-muted">Image :</h4>
                        </div>
                        <div class="col-md-7"> 
                            <h4 class="mt-4 ">
                              <div class="form-group">
                                <input type="file" name="update_image" class=" form-control ">
                              </div>
                            </h4>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-2"> 
                            <h4 class="mt-4 text-muted">Name :</h4>
                        </div>
                        <div class="col-md-7"> 
                            <h4 class="mt-4 ">
                              <div class="form-group">
                                <input type="text" name="update_fname" value="<?php echo $fetch['FullName'] ?>" class=" form-control ">
                              </div>
                            </h4>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-2"> 
                            <h4 class="mt-4 text-muted">Email :</h4>
                        </div>
                        <div class="col-md-7"> 
                            <h4 class="mt-4 ">
                              <div class="form-group">
                                <input type="email" name="update_email" class=" form-control " value="<?php echo $fetch['Email'] ?>">
                              </div>
                            </h4>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-2"> 
                            <h4 class="mt-4 text-muted">Phone.no :</h4>
                        </div>
                        <div class="col-md-7"> 
                            <h4 class="mt-4 ">
                                    <div class="form-group">
                                <input type="text" maxlength="10" name="update_phoneno" value="<?php echo $fetch['Phone_no']; ?>" class=" form-control ">
                              </div>
                            </h4>
                        </div>
                      </div>
                      <h3>Change Password</h3>
                      
                      <div class="row">
                        <div class="col-md-2"> 
                            <h4 class="mt-4 text-muted">Old Password</h4>
                        </div>
                        <div class="col-md-7"> 
                            <h4 class="mt-4 ">
                                    <div class="form-group">
                                    <input type="hidden" name="old_pass" class=" form-control " value="<?php echo $fetch['Password']; ?>">
                                    <input type="password" name="update_pass" class=" form-control ">
                              </div>
                            </h4>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-2"> 
                            <h4 class="mt-4 text-muted">Password</h4>
                        </div>
                        <div class="col-md-7"> 
                            <h4 class="mt-4 ">
                                    <div class="form-group">
                                <input type="password" name="new_pass" class=" form-control ">
                              </div>
                            </h4>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-2"><h4 class="mt-4 text-muted">R-Password</h4>
                        </div>
                        <div class="col-md-7"> 
                            <h4 class="mt-4 ">
                                    <div class="form-group">
                                <input type="password" name="confirm_pass" class=" form-control ">
                              </div>
                            </h4>
                        </div>
                      </div>

                      <div class="row">
                        <div align="center" class="col-md-12 ">
                          <button type="submit" name="update_profile" class="btn btn-primary btn-icon-text">
                              <i class="mdi mdi-file-check btn-icon-prepend"></i> Submit 
                          </button>

                          <button type="reset" class="btn btn-warning btn-icon-text">
                              <i class="mdi mdi-reload btn-icon-prepend"></i> Reset 
                          </button>
                          
                          <a href="http://localhost/Titan-Project/adminside/Adminside_Titan_shoppers/adminprofile.php" class="btn btn-info btn-icon-text">
                             Back 
                              <i class="mdi mdi-arrow-left btn-icon-append"></i>
                            
                          </a>

                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div> 
          </div>
        </div>


      </div>
      <!-- page-body-wrapper ends -->
    </div>
    
    <!-- container-scroller -->
    <!-- plugins:js -->
<?php include("mianfooterscript.php"); ?>      