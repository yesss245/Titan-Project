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
                            <th>Active</th>
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
                              <a  href="Shope_banner_active.php?bannerid=<?php echo $row['No']; ?>">
                                <button type="button" class="btn btn-outline-success btn-icon-text">
                                   Activate 
                                 </button>
                               </a>
                            </td>
                            <td><?php echo $row['Status']; ?></td>
                            <td><a href="Delete/Shop_banners_delete.php?No=<?php echo $row['No'];?>"><button type="button" class="btn btn-danger btn-md">Delete</button></td>
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
                  <form action="php/Tshope_banners_code.php" method="post" enctype="multipart/form-data">
                    <div class="card">
                      <div class="card-body">
                        <h2 class="card-title">Shop Banners</h2>
                          <div class="form-group">
                            <label for="logo">Chosse Banners (Image 1920*800)</label>
                            <input type="file" name="shop_banners" class="form-control" id="logo" >
                          </div>

                          <div class="form-group">
                            EXAMPLE
                            <a  href="http://localhost/Titan-Project/assets/images/shop/exampleofslider.jpg">
                             <img style="width: 50px; margin-top: 2PX;" src="http://localhost/Titan-Project/assets/images/shop/exampleofslider.jpg" alt="Single Product Image"/>
                            </a><br>
                            <label style="margin-top:5px;" for="H1tagheade">Big Headline</label>
                            <input type="text" name="main_head" class="form-control" id="H1tagheade" >
                          </div>

                          <div class="form-group">
                            <label for="Message">Sub Message</label>
                            <input type="text" name="message" class="form-control" id="Message" >
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


    