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
                <div class="col-xl-12 col-sm-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                              <a style="text-decoration:none; color:#fff;" href="http://localhost/Titan-Project/adminside/Adminside_Titan_shoppers/Latest_product_tabel.php">
                              <h3 class="mb-0">Total Latest Product</h3>
                             <!--  <p class="text-success ml-2 mb-0 font-weight-medium">+11%</p> -->
                              </a>
                            </div>
                          </div>
                          <!-- <div class="col-3">
                            <div class="icon icon-box-success">
                              <span class="mdi mdi-arrow-top-right icon-item"></span>
                            </div>
                          </div> -->
                        </div>
                        <?php

                        $conn=mysqli_connect("localhost","root","","titanshoppers");

                        $sql1="SELECT * FROM latestproduct ORDER BY Id ";
                        $resultid=mysqli_query($conn,$sql1);
                        if ($rowid=mysqli_num_rows($resultid)) {
                          echo "<h2 class='mt-3 text-muted font-weight-normal'>$rowid</h2>";
                        }
                       

                        ?>
                      </div>
                    </div>
                </div>    
            </div>

            <div class="row">

                <div class="col-xl-6 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                           <a style="text-decoration:none; color:#fff;" href="Male_product.php">
                            <h3 class="mb-0">Male Latest Product</h3>
                           <!--  <p class="text-success ml-2 mb-0 font-weight-medium">+11%</p> -->
                            </a> 
                          </div>
                        </div>
                        <!-- <div class="col-3">
                          <div class="icon icon-box-success">
                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                          </div>
                        </div> -->
                      </div>
                      <?php

                      $conn=mysqli_connect("localhost","root","","titanshoppers");

                      $sql1="SELECT * FROM latestproduct WHERE gender = 'M'";
                      $resultgender=mysqli_query($conn,$sql1);
                      if ($rowgender=mysqli_num_rows($resultgender)) {
                        echo "<h2 class='mt-3 text-muted font-weight-normal'>$rowgender</h2>";
                      }
                     

                      ?>
                    </div>
                  </div>
                </div>

                <div class="col-xl-6 col-sm-6 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                              <a style="text-decoration:none; color:#fff;" href="Female_product.php">
                              <h3 class="mb-0">Female Latest Product</h3>
                             <!--  <p class="text-success ml-2 mb-0 font-weight-medium">+11%</p> -->
                           </a>
                            </div>
                          </div>
                          <!-- <div class="col-3">
                            <div class="icon icon-box-success">
                              <span class="mdi mdi-arrow-top-right icon-item"></span>
                            </div>
                          </div> -->
                        </div>
                        <?php

                        $conn=mysqli_connect("localhost","root","","titanshoppers");

                        $sql1="SELECT * FROM latestproduct WHERE gender = 'F'";
                        $resultid=mysqli_query($conn,$sql1);
                        if ($rowid=mysqli_num_rows($resultid)) {
                          echo "<h2 class='mt-3 text-muted font-weight-normal'>$rowid</h2>";
                        }
                       

                        ?>
                      </div>
                    </div>
                </div>
                
              </div>

            <div class="page-header">
              <h3 class="page-title">Latest product</h3>
            </div>

            <div  class="row">
                <?php

                if (isset($_SESSION['LatestProductdelete'])) 
                {
                  ?>
                  <div align="center" class="alert alert-success" role="alert"><h5 style="align-items: center; justify-content: center; display: flex;"><strong>Hey!</strong> <?php  echo $_SESSION['LatestProductdelete']; ?></h5></div>
                  <?php
                 
                  unset($_SESSION['LatestProductdelete']);
                }

                ?>
            </div>
            
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h2 class="card-title">Latest product</h2>

                    
                    
                    <div class="table-responsive">
                      <table class="table" >
                        <thead >
                          <tr>
                            <th>NO</th>
                            <th>Image.</th>
                            <th>Gender</th>
                            <th>Productcategory</th>
                            <th>Product Title</th>
                            <th>Edit</th>
                            <th>Remove</th>
                          </tr>
                        </thead>

                        <?php

                          $conn =mysqli_connect("localhost","root","","titanshoppers")or die("could not connect");
                          $sql="SELECT * FROM latestproduct";
                          $result=mysqli_query($conn,$sql);
                          if ($result) 
                            {
                            while ($row=mysqli_fetch_array($result)) 

                              {
                        ?>
                        <tbody>
                          <tr>
                            <td><?php echo $row['Id']; ?></td>
                            <td><a href="php/Photoes/leatest/<?php echo $row['productimg'];?>"><img  style="border-radius: 50%; object-fit: cover;" src="php/Photoes/leatest/<?php echo $row['productimg'];?>"></a></td>
                            <td><?php echo $row['gender']; ?></td>
                            <?php


                                    $sql2="SELECT * FROM product_category_id WHERE Id = '$row[productcategoryid]'";
                                    $result2=mysqli_query($conn,$sql2);
                                    while($row2=mysqli_fetch_assoc($result2))
                                    {
                                      echo "<td> $row2[product_title] </td>";
                                    }

                              ?>
                            <td><?php echo $row['producttitle']; ?></td>
                            <td><a href="Update_latest_product.php?Id=<?php echo $row['Id']; ?>"><button  type="button" class="btn btn-success btn-md">Edit</button></td>
                            <td><a href="Latest_product_tabel_delete.php?latestpid=<?php echo $row['Id'];?>"><button type="button" class="btn btn-danger btn-md">Delete</button></a></td>
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
                            <th>Image.</th>
                            <th>Gender</th>
                            <th>Productcategory</th>
                            <th>Product Title</th>
                            <th>Edit</th>
                            <th>Remove</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
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
    