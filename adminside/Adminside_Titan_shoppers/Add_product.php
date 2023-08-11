
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
              <div class="page-header">
                <h3 class="page-title"> Add Product Category / Brand </h3>
                <!-- <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Tables</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                  </ol>
                </nav> -->
              </div>
          <!-- < alert Notification >     -->
            <div class="row">
                
                <?php

                if (isset($_SESSION['shopproduct'])) 
                {
                  ?>
                  <div class="alert alert-success" align="center" role="alert"><h5 style="align-items: center; justify-content: center; display: flex;"><strong>Hey!</strong> <?php  echo $_SESSION['shopproduct']; ?></h5></div>
                  <?php
                 
                  unset($_SESSION['shopproduct']);
                }

                ?>
            </div>
            <div class="row">
                
                <?php

                if (isset($_SESSION['brandnameadd'])) 
                {
                  ?>
                  <div class="alert alert-success" align="center" role="alert"><h5 style="align-items: center; justify-content: center; display: flex;"><strong>Hey!</strong> <?php  echo $_SESSION['brandnameadd']; ?></h5></div>
                  <?php
                 
                  unset($_SESSION['brandnameadd']);
                }

                ?>
            </div>
            <div class="row">
                
                <?php

                if (isset($_SESSION['product_category'])) 
                {
                  ?>
                  <div class="alert alert-success" align="center" role="alert"><h5 style="align-items: center; justify-content: center; display: flex;"><strong>Hey!</strong> <?php  echo $_SESSION['product_category']; ?></h5></div>
                  <?php
                 
                  unset($_SESSION['product_category']);
                }

                ?>
            </div>
          <!-- < End Notification alert > -->


            <div class="row">
                <div  class="col-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <form role="form"  action="php/Admin_All_Product_Categody(id).php" method="post">
                        <div class="col-md-12 col-sm-12">
                          <label for="product_category">Add Product Category</label>
                          <input type="text" name="productcategoryname"   class="form-control" id="product_category" placeholder="Product Category Name/*" required="required">
                        </div>
                        <div class="text-center col-md-6 col-sm-12">
                          <input type="submit" name="submit" class=" form-control btn btn-primary mt-4" value="Submit">
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

                <div  class="col-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <form role="form"  action="php/Admin_BrandName_Add.php" method="post">
                        <div class="col-md-12 col-sm-12">
                          <label for="BrandName">Add Brand</label>
                          <input type="text" name="brandname"   class="form-control" id="BrandName" placeholder="Brand Name/*" required="required">
                        </div>
                        <div class="text-center col-md-6 col-sm-12">
                          <input type="submit" name="submit" class=" form-control btn btn-primary mt-4" value="Submit">
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              
            </div>
              
              
              <div class="page-header">
              <h3 class="page-title"> Product insert </h3>
              <!-- <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
              </nav> -->
            </div>
              <div  class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Product insert</h4>
                    <form action="php/Tshopproductinsertcode.php" method="post" enctype="multipart/form-data" class="forms-sample">

                      <div class="form-group">
                        
                            <style>
                              .product-img{
                                margin-top: 5px;
                              }
                            </style>
                              <label class="product-img">Main Image</label>
                              <input type="file" name="filetoupload[]" class=" form-control " multiple>
                          
                       
                      </div>

                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-2 col-sm-12">
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

                          <div class="col-md-2 col-sm-12">
                            <label for="exampleSelectbrand">Brand</label>
                                <select name="ddlproduct_brand" class="form-control" id="exampleSelectbrand">
                                <?php

                                  $conn =mysqli_connect("localhost","root","","titanshoppers")or die("could not connect");
                                  $sql="SELECT * FROM brand_name";
                                  $result=mysqli_query($conn,$sql);
                                  while ($row=mysqli_fetch_assoc($result)) 
                                      {
                                         echo "<option value=".$row['Brand_Name'].">".$row['Brand_Name']."</option>";              
                                      }

                                 ?>
                              </select>
                          </div>

                          <div class="col-md-4 col-sm-12">
                            <label for="exampleSeleccategoryr">Product Category</label>
                              <select name="ddlproduct_category_id" class="form-control" id="exampleSelectcategory">
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
                          
                          
                        </div>
                        
                      </div>

                      

                      <div class="mt-4 form-group ">
                        <div class="row">
                          <div class=" col-sm-4 col-sm-offset-3">
                              <input class=" radiobtn" style="margin-left: 16px; margin-top:0PX;" id="radio1" name="exclusivep" value="1"  type="radio"/>
                              <label class="l1" for="radio1">New Exclusive Product</label>
                          </div>
                          <div class=" col-sm-4 col-sm-offset-3">
                              <input class="radiobtn" style="margin-left: 16px; margin-top: 0PX;" id="radio2" value="0" name="exclusivep"  type="radio"/>
                              <label class="l1" for="radio2">REGULAR PRODUCT</label>
                          </div>
                          <style>
                            .exclusivep{
                              font-family: "Roboto Condensed", sans-serif;
                              text-transform: uppercase;
                              letter-spacing: 2px;
                              font-size: 11px;
                              
                              
                              transition: all 0.4s ease-in-out 0s;
                            }
                            .inputGroup{
                                background-color: #fff;
                                
                                margin: 2px 0;
                                position: relative;
                              }
                              
                          </style>
                        
                      </div>
                  </div>

                      <div class="form-group">
                        <label for="exampleInputName1">Product Name</label>
                        <input type="text" name="pname" class="form-control" id="exampleInputName1" placeholder="Product Name/*" required="required">
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-4 col-sm-12">
                            <label for="MRP">Discount Rate(MRP)</label>
                            <input type="text" name="rate" id="drate"  class="form-control" id="MRP" placeholder="Rate/*" required="required">
                          </div>
                          <div class="col-md-4 col-sm-12">
                            <label for="Discount">Discount</label>
                            <input type="text" name="Discount" id="discount" onkeyup="getPrice()" class="form-control" id="Discount" placeholder="Discount/*" required="required">
                          </div>
                          <div class="col-md-4 col-sm-12">
                            <label for="Total_Price">Total Rate</label>
                            <input type="text" name="frate" id="frate" class="form-control" id="Total_Price" placeholder="Final Rate/*" required="required">
                          </div>

                          <script>
                              getPrice = function() {
                                  var drate = Number(document.getElementById("drate").value);
                                  var discount = Number(document.getElementById("discount").value)/100;
                                  var totalValue = drate/(1-discount)
                                  document.getElementById("frate").value = totalValue.toFixed(2);
                              }
                          </script>


                          
                        </div>
                        
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Discriptaion</label>
                        <textarea name="discription" class="form-control" id="exampleTextarea1" rows="4"></textarea>
                      </div>

                      <div class="form-group">
                        <div class="row">
                          <div class="col-sm-2">
                            <label class="sr-only" for="email">Size1</label>
                            <input class="form-control" type="text" name="size1"  placeholder="Size1*"/>
                          </div>
                          <div class="col-sm-2">
                            <label class="sr-only" for="email">Size2</label>
                            <input class="form-control" type="text" name="size2"  placeholder="Size2*"/>
                          </div>
                          <div class="col-sm-2">
                            <label class="sr-only" for="email">Size3</label>
                            <input class="form-control" type="text" name="size3"  placeholder="Size3*"/>
                          </div>
                          <div class="col-sm-2">
                            <label class="sr-only" for="email">Size4</label>
                            <input class="form-control" type="text" name="size4"  placeholder="Size4*"/>
                          </div>
                          <div class="col-sm-2">
                            <label class="sr-only" for="email">Size5</label>
                            <input class="form-control" type="text" name="size5"  placeholder="Size5*"/>
                          </div>
                          <div class="col-sm-2">
                            <label class="sr-only" for="email">Size6</label>
                            <input class="form-control" type="text" name="size6"  placeholder="Size6*"/>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="row">
                          <div class="col-sm-2">
                            <label class="sr-only" for="email">Color1</label>
                            <input class="form-control" type="text" name="color1"  placeholder="Color1*"/>
                          </div>
                          <div class="col-sm-2">
                            <label class="sr-only" for="email">Color2</label>
                            <input class="form-control" type="text" name="color2"  placeholder="Color2*"/>
                          </div>
                          <div class="col-sm-2">
                            <label class="sr-only" for="email">Color3</label>
                            <input class="form-control" type="text" name="color3"  placeholder="Color3*"/>
                          </div>
                          <div class="col-sm-2">
                            <label class="sr-only" for="email">Color4</label>
                            <input class="form-control" type="text" name="color4"  placeholder="Color4*"/>
                          </div>
                          <div class="col-sm-2">
                            <label class="sr-only" for="email">Color5</label>
                            <input class="form-control" type="text" name="color5"  placeholder="Color5*"/>
                          </div>
                          <div class="col-sm-2">
                            <label class="sr-only" for="email">Color6</label>
                            <input class="form-control" type="text" name="color6"  placeholder="Color6*"/>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="row">
                          <div class="col-sm-2">
                            <label class="sr-only" for="email">Height1</label>
                            <input class="form-control" type="text" name="height1"  placeholder="Height1*"/>
                          </div>
                          <div class="col-sm-2">
                            <label class="sr-only" for="email">Height2</label>
                            <input class="form-control" type="text" name="height2"  placeholder="Height2*"/>
                          </div>
                          <div class="col-sm-2">
                            <label class="sr-only" for="email">Height3</label>
                            <input class="form-control" type="text" name="height3"  placeholder="Height3*"/>
                          </div>
                          <div class="col-sm-2">
                            <label class="sr-only" for="email">Height4</label>
                            <input class="form-control" type="text" name="height4"  placeholder="Height4*"/>
                          </div>
                          <div class="col-sm-2">
                            <label class="sr-only" for="email">Height5</label>
                            <input class="form-control" type="text" name="height5"  placeholder="Height5*"/>
                          </div>
                          <div class="col-sm-2">
                            <label class="sr-only" for="email">Height6</label>
                            <input class="form-control" type="text" name="height6"  placeholder="Height6*"/>
                          </div>
                        </div>
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
    