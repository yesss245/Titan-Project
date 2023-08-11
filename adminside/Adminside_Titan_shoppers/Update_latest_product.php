

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
              <!-- <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
              </nav> -->
            </div>
            <?php

              $conn=mysqli_connect("localhost","root","","titanshoppers");
              $updatesql="SELECT * FROM latestproduct WHERE Id =".$_REQUEST['Id'];
              $result=mysqli_query($conn,$updatesql);
              $fetch=mysqli_fetch_assoc($result);

            ?>
            <form action="Updatecode/update_latest_product_code.php" method="Get" enctype="multipart/form-data" class="forms-sample">
              <div  class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    

                      <div class="form-group">
                        <label>Image</label><br>
                        <a href="http://localhost/Titan-Project/adminside/Adminside_Titan_shoppers/php/Photoes/leatest/<?php echo $fetch['productimg'];?>">
                        <img style="height:20vh; object-fit:cover;" src="http://localhost/Titan-Project/adminside/Adminside_Titan_shoppers/php/Photoes/leatest/<?php echo $fetch['productimg'];?>" alt="<?php echo $fetch['productimg'];?>"></a>
                      </div> 
                      <div class="form-group">

                        <label>File Chosen</label><br>
                        <input  type="file" name="update_image" value="<?php echo $fetch['productimg'];?>" class=" form-control ">
                        <input  type="hidden" name="update_id" value="<?php echo $fetch['Id'];?>" class=" form-control ">
                       
                      </div>

                      <div class="form-group">
                        <label for="exampleSelectGender">Gender</label>
                        <select name="update_gender" class="form-control" id="exampleSelectGender">

                             <!-- <?php


                                    $sql2="SELECT * FROM product_men_women_id WHERE Gtype = '$fetch[gender]'";
                                    $result2=mysqli_query($conn,$sql2);
                                    while($row2=mysqli_fetch_assoc($result2))
                                          {
                                  ?>
                                              <option value="<?php echo $row['Gtype']; ?>"><?php echo $row2['Type']; ?></option>
                                  <?php
                                              
                                            }

                                  ?> -->

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
                        <select name="update_category" class="form-control" id="exampleSelectGender">
                          <!-- <?php


                                          $sql2="SELECT * FROM product_category_id WHERE Id = '$fetch[productcategoryid]'";
                                          $result2=mysqli_query($conn,$sql2);
                                          while($row2=mysqli_fetch_assoc($result2))
                                          {
                                ?>
                                            <option value="<?php echo $row2['product_title']; ?>"><?php echo $row2['product_title']; ?></option>
                                <?php
                                            
                                          }

                                ?> -->
                          
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
                        <label for="Productname">Product Name</label>
                        <input type="text" name="update_pname" class="form-control" value="<?php echo $fetch['producttitle'];?>" id="Productname" placeholder="Product Name/*">
                      </div>

                      <input type="submit" name="submit" class="btn btn-primary mr-2" value="Submit">
                      <!-- <button type="submit" class="btn btn-primary mr-2">Submit</button> -->
                      
                      <input type="reset" name="reset" class="btn btn-dark" value="Reset">
                    
                  </div>
                </div>
              </div>
            </form>  

            

            
            
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
    