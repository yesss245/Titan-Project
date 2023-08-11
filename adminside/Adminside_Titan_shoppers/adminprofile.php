

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

            <!-- <for logout code > -->
            <?php require("adminlogout.php"); ?>
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

                    <div class="row">
                      <div class="col-md-4 ">
                        <div class="d-flex align-items-center align-self-start">
                          <?php

                          if($fetch['Img'] == '')
                           {
                              echo '<img style="height:150px; width:150px; object-fit: cover;" src="php/Photoes/AdminProfile/defaultimg.jpg">';
                           }
                           else
                           {
                            echo '<img style="height:150px; width:150px; object-fit: cover;" src="php/Photoes/AdminProfile/'.$fetch['Img'].'">';
                           }

                     ?>
                          
                          <!-- <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p> -->
                        </div>
                      </div>
                       <div class="col-md-6">
                        <!-- <div class="icon icon-box-success ">
                          <span class="mdi mdi-arrow-top-right icon-item"></span>
                        </div> -->
                        <h1 class="mt-3 text-muted font-weight-normal"><?php echo $fetch['FullName'] ?></h1>
                      </div> 
                      <div class="col-md-2">
                        <a href="http://localhost/Titan-Project/adminside/Adminside_Titan_shoppers/Titanadminlogin.php?logout=<?php echo $Adminuserid; ?>">
                         <button type="button" name="logout" class="mt-4 btn btn-danger btn-md">Logout</button>
                        </a>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-2"> 
                          <h4 class="mt-4 text-muted">Name :</h4>
                      </div>
                      <div class="col-md-7"> 
                          <h4 class="mt-4 "><?php echo $fetch['FullName'] ?></h4>
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="col-md-2"> 
                          <h4 class="mt-4 text-muted">Email :</h4>
                      </div>
                      <div class="col-md-7"> 
                          <h4 class="mt-4 "><?php echo $fetch['Email'] ?></h4>
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="col-md-2"> 
                          <h4 class="mt-4 text-muted">Phone.no :</h4>
                      </div>
                      <div class="col-md-8"> 
                          <h4 class="mt-4 "><?php echo $fetch['Phone_no'] ?></h4>
                      </div>
                      <div class="col-md-2">
                        <a href="http://localhost/Titan-Project/adminside/Adminside_Titan_shoppers/adminprofileupdate.php">
                         <button type="button" class=" mt-4 btn btn-outline-secondary btn-icon-text btn-md">Edit <i class="mdi mdi-file-check btn-icon-append"></i>
                          </button>
                        </a>  
                      </div>
                      
                    </div>
                    


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