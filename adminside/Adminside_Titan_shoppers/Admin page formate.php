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
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

           

            
            
            <div class="row">
              <div class="col-lg-6 col-sm-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h2 class="card-title">Exclusive Product</h2>
                    
                    <div class="table-responsive">
                      <table class="table">
                        <div  class="row center" >
                            <?php

                            if (isset($_SESSION['Fproductid'])) 
                            {
                              ?>
                              <div align="center" class="alert alert-success" role="alert"><h5 style="align-items: center; justify-content: center; display: flex;"><strong>Hey!</strong> <?php  echo $_SESSION['Fproductid']; ?></h5></div>
                              <?php
                             
                              unset($_SESSION['Fproductid']);
                            }

                            ?>
                        </div>
                        <thead>
                          <tr>
                            <th>NO</th>
                            <th>Logo</th>
                            <th>Actvie</th>
                            <th>Delete</th>
                            
                          </tr>
                        </thead>

                        <?php

                          $conn =mysqli_connect("localhost","root","","titanshoppers")or die("could not connect");
                          $sql="SELECT * FROM logo  ORDER BY No";
                          $result=mysqli_query($conn,$sql);
                          if ($result) 
                            {
                            while ($row=mysqli_fetch_array($result)) 

                              {
                        ?>

                        <tbody>
                          
                        </tbody>
                        <?php
                                  }
                          }
                          else
                          {
                            echo mysqli_error($conn);
                          } 


                        ?>

                        <tfoot>
                          <tr>
                            <th>NO</th>
                            <th>Logo</th>
                            <th>Actvie</th>
                            <th>Delete</th>
                            
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 col-sm-12 grid-margin stretch-card">
              </div>
              
              
            </div>
          </div>
          <!-- content- ends -->
          <?php include("Admin_titanfooter.php"); ?>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    
     <?php include("mianfooterscript.php"); ?>


    