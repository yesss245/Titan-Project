

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
            <!-- <if product insert then> -->
            <div class="row">
                <?php

                if (isset($_SESSION['Latest'])) 
                {
                  ?>
                  <div class="alert alert-success" align="center" role="alert"><h5 style="align-items: center; justify-content: center; display: flex;"><strong>Hey!</strong> <?php  echo $_SESSION['Latest']; ?></h5></div>
                  <?php
                 
                  unset($_SESSION['Latest']);
                }

                ?>
            </div>
            <!-- <if product not insert then> -->
            <div class="row">
                <?php

                if (isset($_SESSION['LatestProductnot'])) 
                {
                  ?>
                  <div class="alert alert-danger" align="center" role="alert"><h5 style="align-items: center; justify-content: center; display: flex;"><strong>Hey!</strong> <?php  echo $_SESSION['LatestProductnot']; ?></h5></div>
                  <?php
                 
                  unset($_SESSION['LatestProductnot']);
                }

                ?>
            </div>

           <div class="page-header">
              <h3 class="page-title">Latest Product insert </h3>
              
            </div>
              
              <div  class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form action="php/THomepage_Latest_product_insertcode.php" method="post" enctype="multipart/form-data" class="forms-sample">

                      <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="filetoupload" class=" form-control ">
                       
                      </div>

                      <div class="form-group">
                        <label for="exampleSelectGender">Gender</label>
                        <select name="ddlproduct_men_women_wear_id" class="form-control" id="exampleSelectGender">
                          <?php

                            $conn =mysqli_connect("localhost","root","","titanshoppers")or die("could not connect");
                            $sql="SELECT * FROM product_men_women_id";
                            $result=mysqli_query($conn,$sql);
                            while ($row=mysqli_fetch_assoc($result)) 
                                {
                                   echo "<option value=".$row['Gtype'].">".$row['Type']."</option>";              
                                }

                           ?>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="exampleSelectGender">Product Category</label>
                        <select name="ddlproduct_category_id" class="form-control" id="exampleSelectGender">
                          <?php

                            $conn =mysqli_connect("localhost","root","","titanshoppers")or die("could not connect");
                            $sql="SELECT * FROM product_category_id";
                            $result=mysqli_query($conn,$sql);
                            while ($row=mysqli_fetch_assoc($result)) 
                                {
                                   echo "<option value=".$row['Id'].">".$row['product_title']."</option>";              
                                }

                           ?>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName1">Product Name</label>
                        <input type="text" name="ptitle" class="form-control" id="exampleInputName1" placeholder="Product Name/*" required="required">
                      </div>

                      <input type="submit" name="submit" class="btn btn-primary mr-2" value="Submit">
                      <!-- <button type="submit" class="btn btn-primary mr-2">Submit</button> -->
                      
                      <input type="reset" name="reset" class="btn btn-dark" value="Reset">
                    </form>
                  </div>
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
    