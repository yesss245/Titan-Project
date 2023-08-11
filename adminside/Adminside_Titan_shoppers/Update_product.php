


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

           <div class="page-header">
              <h3 class="page-title"> Product insert </h3>
              <!-- <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
              </nav> -->
            </div>

            <?php

            $conn=mysqli_connect("localhost","root","","titanshoppers");
            $updatesql="SELECT * FROM shopproduct WHERE productid=".$_REQUEST['productid'];
            $result=mysqli_query($conn,$updatesql);
            $fetch=mysqli_fetch_assoc($result);

            ?>
            <form action="Updatecode/update_product_code.php" method="GET" enctype="multipart/form-data" class="forms-sample">  
              <div  class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Product insert</h4>
                    

                            <div class="form-group">
                              <label>File upload</label>
                              <input type="file" name="update_image"   class="form-control ">
                              <input type="text" name="update_id"  class="form-control" id="exampleInputRate" placeholder="Rate/*" value="<?php echo $fetch['productid']; ?>" >
                             
                            </div>

                            <div class="form-group">
                              <div class="row">

                                <div class="col-md-4 col-sm-12">
                                  <label for="exampleSelectGender">Gender</label>
                                  <select name="update_gender" class="form-control" id="exampleSelectGender">

                                     <?php


                                        $sql2="SELECT * FROM product_men_women_id WHERE Gtype = '$fetch[gender]'";
                                        $result2=mysqli_query($conn,$sql2);
                                        while($row2=mysqli_fetch_assoc($result2))
                                              {
                                      ?>
                                                  <option value="<?php echo $row2['Gtype']; ?>"><?php echo $row2['Type']; ?></option>
                                      <?php
                                                  
                                                }

                                      ?>

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

                                <div class="col-md-4 col-sm-12">
                                  <label for="exampleSelectCategory">Product Category</label>
                                  <select name="update_category" class="form-control" id="exampleSelectCategory">
                                    <?php


                                        $sql2="SELECT * FROM product_category_id WHERE Id = '$fetch[productcategoryid]'";
                                        $result2=mysqli_query($conn,$sql2);
                                        while($row2=mysqli_fetch_assoc($result2))
                                              {
                                    ?>
                                                <option value="<?php echo $row['Id']; ?>"><?php echo $row2['product_title']; ?></option>
                                    <?php
                                                
                                              }

                                    ?>
     
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

                                <div class="col-md-4 col-sm-12">
                                  <label for="exampleSelectBrand">Brand</label>
                                  <select name="update_Brand" class="form-control" id="exampleSelectBrand">

                                     <?php


                                        $sql2="SELECT * FROM shopproduct WHERE Brand = '$fetch[Brand]'";
                                        $result2=mysqli_query($conn,$sql2);
                                        while($row2=mysqli_fetch_assoc($result2))
                                              {
                                      ?>
                                                  <option value="<?php echo $row2['Brand']; ?>"><?php echo $row2['Brand']; ?></option>
                                      <?php
                                                  
                                                }

                                      ?>

                                      <option value="NIKE">NIKE</option>
                                      <option value="PUMA">PUMA</option>
                                      <option value="CALVIN KLEIN">CALVIN KLEIN</option>
                                      <option value="POLO">POLO</option>
                                      <option value="CAMPUS">CAMPUS</option>
                                      <option value="VINCENT">VINCENT</option>
                                      <option value="UNISEX">UNISEX</option>
                                      <option value="ADIDAS">ADIDAS</option>
                                      <option value="FASTRACK">FASTRACK</option>
                                      <option value="DENIM">DENIM</option>
                                      <option value="RED CHIEF">RED CHIEF</option>
                                      <option value="ROYAL SON">ROYAL SON</option>
                                      <option value="FOSSIL">FOSSIL</option>
                                      <option value="MANISH MALHOTRA">MANISH MALHOTRA</option>
                                      <option value="ZARI BANARAS">ZARI BANARAS</option>
                                      <option value="ETHNICPLUS">ETHNICPLUS</option>

                                    
                                  </select>
                                </div>
                                
                              </div>
                              
                            </div>

                            

                            <div class="mt-4 form-group ">
                              <div class="row">
                                <div class=" col-sm-4 col-sm-offset-3">
                                    <input class=" radiobtn" style="margin-left: 16px; margin-top:0PX;" id="radio1" name="update_exclusivep" value="1"  type="radio"/>
                                    <label class="l1" for="radio1">New Exclusive Product</label>
                                </div>
                                <div class=" col-sm-4 col-sm-offset-3">
                                    <input class="radiobtn" style="margin-left: 16px; margin-top: 0PX;" id="radio2" value="0" name="update_exclusivep"  type="radio"/>
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
                              <input type="text" name="update_pname" class="form-control" id="exampleInputName1"  value="<?php echo $fetch['productname']; ?>" >
                              
                            </div>

                            <div class="form-group">
                              <div class="row">
                                <div class="col-md-4 col-sm-12">
                                  <label for="exampleInputEmail3">Discount Rate(MRP)</label>
                                  <input type="text" name="update_rate" id="drate"  class="form-control" id="exampleInputEmail3" placeholder="Rate/*" value="<?php echo $fetch['rate']; ?>" required="required">
                                </div>
                                <div class="col-md-4 col-sm-12">
                                  <label for="exampleInputEmail3">Discount</label>
                                  <input type="text" name="update_d_rate" id="discount" onkeyup="getPrice()" class="form-control" id="exampleInputEmail3" placeholder="Discount/*" value="<?php echo $fetch['Discount']; ?>" required="required">
                                </div>
                                <div class="col-md-4 col-sm-12">
                                  <label for="exampleInputEmail3">Total Rate</label>
                                  <input type="text" name="update_f_rate" id="frate" class="form-control" id="exampleInputEmail3" placeholder="Final Rate/*" value="<?php echo $fetch['F_rate']; ?>" required="required">
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
                              <input type="text" name="update_discription"  class="form-control" id="exampleTextarea1" value="<?php echo $fetch['discription']; ?>">
                              
                            </div>

                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-2">
                                  <label class="sr-only" for="email">Size1</label>
                                  <input class="form-control" value="<?php echo $fetch['size1']; ?>" type="text" name="update_size1"  placeholder="Size1*"/>
                                </div>
                                <div class="col-sm-2">
                                  <label class="sr-only" for="email">Size2</label>
                                  <input class="form-control" value="<?php echo $fetch['size2']; ?>" type="text" name="update_size2"  placeholder="Size2*"/>
                                </div>
                                <div class="col-sm-2">
                                  <label class="sr-only" for="email">Size3</label>
                                  <input class="form-control" value="<?php echo $fetch['size3']; ?>" type="text" name="update_size3"  placeholder="Size3*"/>
                                </div>
                                <div class="col-sm-2">
                                  <label class="sr-only" for="email">Size4</label>
                                  <input class="form-control" value="<?php echo $fetch['size4']; ?>" type="text" name="update_size4"  placeholder="Size4*"/>
                                </div>
                                <div class="col-sm-2">
                                  <label class="sr-only" for="email">Size5</label>
                                  <input class="form-control" value="<?php echo $fetch['size5']; ?>" type="text" name="update_size5"  placeholder="Size5*"/>
                                </div>
                                <div class="col-sm-2">
                                  <label class="sr-only" for="email">Size6</label>
                                  <input class="form-control" value="<?php echo $fetch['size6']; ?>" type="text" name="update_size6"  placeholder="Size6*"/>
                                </div>
                               </div>
                            </div>

                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-2">
                                  <label class="sr-only" for="email">Color1</label>
                                  <input class="form-control" value="<?php  echo $fetch['color1']; ?>"  type="text" name="update_color1"  placeholder="Color1*"/>
                                </div>
                                <div class="col-sm-2">
                                  <label class="sr-only" for="email">Color2</label>
                                  <input class="form-control" value="<?php  echo $fetch['color2']; ?>"  type="text" name="update_color2"  placeholder="Color2*"/>
                                </div>
                                <div class="col-sm-2">
                                  <label class="sr-only" for="email">Color3</label>
                                  <input class="form-control" value="<?php  echo $fetch['color3']; ?>"  type="text" name="update_color3"  placeholder="Color3*"/>
                                </div>
                                <div class="col-sm-2">
                                  <label class="sr-only" for="email">Color4</label>
                                  <input class="form-control" value="<?php  echo $fetch['color4']; ?>"  type="text" name="update_color4"  placeholder="Color4*"/>
                                </div>
                                <div class="col-sm-2">
                                  <label class="sr-only" for="email">Color5</label>
                                  <input class="form-control" value="<?php  echo $fetch['color5']; ?>"  type="text" name="update_color5"  placeholder="Color5*"/>
                                </div>
                                <div class="col-sm-2">
                                  <label class="sr-only" for="email">Color6</label>
                                  <input class="form-control" value="<?php  echo $fetch['color6']; ?>" type="text" name="update_color6"  placeholder="Color6*"/>
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-2">
                                  <label class="sr-only" for="email">Height1</label>
                                  <input class="form-control" value="<?php  echo $fetch['height1']; ?>" type="text" name="update_height1"  />
                                </div>
                                <div class="col-sm-2">
                                  <label class="sr-only" for="email">Height2</label>
                                  <input class="form-control" value="<?php echo $fetch['height2']; ?>" type="text" name="update_height2"  />
                                </div>
                                <div class="col-sm-2">
                                  <label class="sr-only" for="email">Height3</label>
                                  <input class="form-control" value="<?php  echo $fetch['height3']; ?>" type="text" name="update_height3"  />
                                </div>
                                <div class="col-sm-2">
                                  <label class="sr-only" for="email">Height4</label>
                                  <input class="form-control" value="<?php  echo $fetch['height4']; ?>" type="text" name="update_height4"  />
                                </div>
                                <div class="col-sm-2">
                                  <label class="sr-only" for="email">Height5</label>
                                  <input class="form-control" value="<?php  echo $fetch['height5']; ?>" type="text" name="update_height5"  />
                                </div>
                                <div class="col-sm-2">
                                  <label class="sr-only" for="email">Height6</label>
                                  <input class="form-control" value="<?php  echo $fetch['height6']; ?>" type="text" name="update_height6"  />
                                </div>
                              </div>
                            </div>
                            
                            
                            
                            <input type="submit" name="update_profile" class="btn btn-primary mr-2" value="Update">
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
    