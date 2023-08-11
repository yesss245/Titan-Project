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
              <div class="col-lg-8 col-sm-12">
                <div class="card">
                  <div class="card-body">
                    <h2 class="card-title">Shop Banners</h2>
                    
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
                            <th>Headline</th>
                            <th>Message</th>
                            <th>Acvtie</th>
                            <th>Status</th>
                            <th>Delete</th>
                            
                          </tr>
                        </thead>

                        <?php

                          $conn =mysqli_connect("localhost","root","","titanshoppers")or die("could not connect");
                          $sql="SELECT * FROM shope_banners  ORDER BY No";
                          $result=mysqli_query($conn,$sql);
                          if ($result) 
                            {
                            while ($row=mysqli_fetch_array($result)) 

                              {
                        ?>

                        <tbody>
                          <tr>
                            <td><?php echo $row['No']; ?></td>
                            <td>
                              <a href="http://localhost/Titan-Project/adminside/Adminside_Titan_shoppers/php/Photoes/Shop_Banners/<?php echo $row['img_Banners']; ?>">
                                <img class="rounded" src="http://localhost/Titan-Project/adminside/Adminside_Titan_shoppers/php/Photoes/Shop_Banners/<?php echo $row['img_Banners']; ?>">
                              </a>  
                            </td>
                            <td><?php echo $row['Big_hedline']; ?></td>
                            <td><textarea style="background-color:#191c24; border: none; color:#6c7293;" rows="4"><?php echo $row['Sub_message']; ?></textarea></td>
                            <td>
                              <a  href="">
                                <button type="button" class="btn btn-outline-success btn-icon-text">
                                   Activat 
                                 </button>
                               </a>
                            </td>
                            <td><?php echo $row['Status']; ?></td>
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
                            <th>Headline</th>
                            <th>Message</th>
                            <th>Acvtie</th>
                            <th>Status</th>
                            <th>Delete</th>
                            
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                </div>
              </div>


              
              
                <div class="col-lg-4 col-sm-12 ">
                  <?php

                  $conn=mysqli_connect("localhost","root","","titanshoppers");
                  $sql="SELECT * FROM shope_banners WHERE No =".$_REQUEST['bannerid'];
                  $result=mysqli_query($conn,$sql);
                  $fetch=mysqli_fetch_assoc($result);


                  ?>

                  <form action="Updatecode/shope_banners_activat_code.php" method="post" enctype="multipart/form-data">
                    <div class="card">
                      <div class="card-body">
                        <h2 class="card-title">Shop Banners Activat/Deactivat</h2>
                            <div class="form-check">
                              <input type="hidden" name="Banners_id" value="<?php echo $fetch['No']; ?>">
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" name="Activat" class="form-check-input" value="1"> Banner Activate </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" name="Activat" class="form-check-input" value="0"> Banner Deactivat </label>
                            </div>

                          <input type="submit" name="submit" class="btn btn-primary mr-2" value="Submit">
                          <!-- <button type="submit" class="btn btn-primary mr-2">Submit</button> -->
                          
                          <input type="reset" name="reset" class="btn btn-dark" value="Reset">
                        
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


    