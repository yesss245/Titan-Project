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
                    <h2 class="card-title">Logo</h2>
                    
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
                          <tr>
                            <td><?php echo $row['No']; ?></td>
                            <td><?php echo $row['logo']; ?></td>
                            <td><?php echo $row['id']; ?></td>
                            <td>Delete</td>
                          </tr>
                          
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
                  <form action="php/Tlogo_code.php" method="post" enctype="multipart/form-data">
                    <div class="card">
                      <div class="card-body">
                        <h2 class="card-title">Add Logo</h2>
                        
                        <div class="table-responsive">
                          <div class="form-group">
                            <label for="logo">Chosse Logo</label>
                            <input type="file" name="logo" class="form-control" id="logo" >
                          </div>

                          <input type="submit" name="submit" class="btn btn-primary mr-2" value="Submit">
                          <!-- <button type="submit" class="btn btn-primary mr-2">Submit</button> -->
                          
                          <input type="reset" name="reset" class="btn btn-dark" value="Reset">
                        </div>
                      </div>
                    </div>
                  </form>
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


    