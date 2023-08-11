

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

            

        <div  class="main-panel">
          <div  class="content-wrapper  page-body-wrapper full-page-wrapper">
            <?php

                  $conn=mysqli_connect("localhost","root","","titanshoppers");
                  $sql="SELECT * FROM login WHERE userid=".$_REQUEST['UID'];
                  $result1=mysqli_query($conn,$sql);
                  if ($result1) {
                    while($row3=mysqli_fetch_assoc($result1)){
                    

                ?>
                  <div style="justify-content: center;"  class=" content-wrapper    
                    full-page-wrapperd-flex align-items-center row">
                    <div class=" col-md-8 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body"> 
                          <div class="row">
                            <div class="col-md-10 col-sm-10">
                              <h1><?php echo $row3['Fname'];?></h1>
                            </div>
                            <div class="col-md-2 col-sm-2">
                              <h4 class="text-muted font-weight-normal">
                                <?php echo $row3['Username']; ?></h4>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>   
                  </div>
            <?php  
                        }
                    }
            ?>
            </div> 
          </div>
        </div>
      </div>  
      <!-- page-body-wrapper ends -->
  
    <!-- container-scroller -->
    <!-- plugins:js -->
<?php include("mianfooterscript.php"); ?>      