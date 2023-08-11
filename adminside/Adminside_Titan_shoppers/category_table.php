<!-- MEN'S PENT -->


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

            

                        <?php

                          $conn1 =mysqli_connect("localhost","root","","titanshoppers")or die("could not connect");
                          $sql1="SELECT * FROM product_category_id WHERE productcategoryid =".$_REQUEST['tpid'];
                          $result1=mysqli_query($conn1,$sql1);
                          if ($result1) 
                            {
                            while ($row1=mysqli_fetch_array($result1)) 

                              {
                        ?>
            <div class="page-header">
              <h3 class="page-title"> <?php echo $row1['product_title']; ?> </h3>
            </div>
            <?php } 
                } 
                ?>            
            
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h2 class="card-title">Product</h2>
                    
                    <div class="table-responsive">
                      <table class="table text-center">
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
                            <th>Iage.</th>
                            <th>Gender</th>
                            <th>Pcategoryid</th>
                            <th>Product Name</th>
                            <th>Rate</th>
                            <th>Discripation</th>
                            <th>Size</th>
                            <th>Color</th>
                            <th>Height</th>
                            <th>Edit</th>
                            <th>Remove</th>
                            <th>NO</th>
                          </tr>
                        </thead>

                        <?php

                          $conn =mysqli_connect("localhost","root","","titanshoppers")or die("could not connect");
                          $sql="SELECT * FROM shopproduct WHERE productcategoryid =".$_REQUEST['tpid'];
                          $result=mysqli_query($conn,$sql);
                          if ($result) 
                            {
                            while ($row=mysqli_fetch_array($result)) 

                              {
                                $pro_img = json_decode($row['img'],true); 
                        ?>

                        <tbody>
                          <tr style="display: none;" class="blogBox moreBox">
                            <td>
                              <a style="text-decoration:none; color:#6c7293;" href="single_product_view.php?Review=<?php echo $row['productid']; ?>">
                                <?php echo $row['productid']; ?>
                              </a>
                            </td> 
                            <td>
                              <a href="php/Photoes/<?php echo $row['img'];?>">
                                <img  style="border-radius: 50%; object-fit: cover;" src="php/Photoes/<?php echo $row['productname'].$pro_img[0];?>">
                              </a>
                            </td>
                            <td><?php echo $row['gender']; ?></td>
                            <!-- <td type="hidden"><?php echo $row['productcategoryid']; ?></td> -->
                              <?php


                                    $sql2="SELECT * FROM product_category_id WHERE Id = '$row[productcategoryid]'";
                                    $result2=mysqli_query($conn,$sql2);
                                    while($row2=mysqli_fetch_assoc($result2))
                                    {
                                      echo "<td> $row2[product_title] </td>";
                                    }

                              ?>
                            <td><?php echo $row['productname']; ?></td>
                            <td><?php echo $row['rate']; ?></td>
                            <td>
                                <textarea style="background-color:#191c24; border: none; color:#6c7293;" rows="3"><?php echo $row['discription']; ?></textarea>
                            </td>
                            <td>
                              <div class="dropdown form-group">

                                  

                                <select  name="ddlproduct_men_women_wear_id" data-toggle="dropdown" class="form-control " id="exampleSelectGender">
                                  <option><?php echo $row['size1']; ?></option>
                                  <option><?php echo $row['size2']; ?></option>
                                  <option><?php echo $row['size3']; ?></option>
                                  <option><?php echo $row['size4']; ?></option>
                                  <option><?php echo $row['size5']; ?></option>
                                  <option><?php echo $row['size6']; ?></option>
                                </select>

                              </div>
                            </td>
                            <td> 
                                <div class="dropdown form-group">
                                  <select  name="ddlproduct_men_women_wear_id" data-toggle="dropdown" class="form-control " id="exampleSelectGender">
                                    <option><?php echo $row['color1']; ?></option>
                                    <option><?php echo $row['color2']; ?></option>
                                    <option><?php echo $row['color3']; ?></option>
                                    <option><?php echo $row['color4']; ?></option>
                                    <option><?php echo $row['color5']; ?></option>
                                    <option><?php echo $row['color6']; ?></option>
                                  </select>

                              </div>
                            </td>
                            <td>
                               <div class="dropdown form-group">
                                  <select  name="ddlproduct_men_women_wear_id" data-toggle="dropdown" class="form-control " id="exampleSelectGender">
                                    <option><?php echo $row['height1']; ?></option>
                                    <option><?php echo $row['height2']; ?></option>
                                    <option><?php echo $row['height3']; ?></option>
                                    <option><?php echo $row['height4']; ?></option>
                                    <option><?php echo $row['height5']; ?></option>
                                    <option><?php echo $row['height6']; ?></option>
                                  </select>

                              </div>
                            </td>
                            <td><a href="Update_product.php?productid=<?php echo $row['productid'];?>"><button type="button" class="btn btn-success btn-md">Edit</button></td>
                            <td><a href="Delete/Female_product_delete.php?productid=<?php echo $row['productid'];?>"><button type="button" class="btn btn-danger btn-md">Delete</button></td>
                            <td><?php echo $row['productid']; ?></td>
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
                            <th>Iage.</th>
                            <th>Gender</th>
                            <th>Pcategoryid</th>
                            <th>Product Name</th>
                            <th>Rate</th>
                            <th>Discripation</th>
                            <th>Size</th>
                            <th>Color</th>
                            <th>Height</th>
                            <th>Edit</th>
                            <th>Remove</th>
                            <th>NO</th>
                          </tr>
                        </tfoot>
                      </table>
                      <div align="center">
                        <button align="center" id="loadMore" type="button" class="btn btn-secondary btn-fw">Load More</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              
            </div>
            <?php include("category_p.php"); ?>
          </div>
          <!-- content- ends -->
          <?php include("Admin_titanfooter.php"); ?>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <script>
              $( document ).ready(function () {
              $(".moreBox").slice(0, 6).show();
                if ($(".blogBox:hidden").length != 0) {
                  $("#loadMore").show();
                }   
                $("#loadMore").on('click', function (e) {
                  e.preventDefault();
                  $(".moreBox:hidden").slice(0, 4).slideDown();
                  if ($(".moreBox:hidden").length == 0) {
                    $("#loadMore").fadeOut('slow');
                  }
                });
              });
        </script>
    <!-- container-scroller -->
    <!-- plugins:js -->
    
     <?php include("mianfooterscript.php"); ?>


    