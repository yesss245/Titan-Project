< main head link etc>
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
                    <form class="forms-sample">

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
                                   echo "<option value=".$row['Type'].">".$row['Type']."</option>";              
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
                        <label for="exampleInputEmail3">Rate</label>
                        <input type="email" name="rate"  class="form-control" id="exampleInputEmail3" placeholder="Rate/*" required="required">
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

            

            <div class="page-header">
              <h3 class="page-title"> Product </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Product</h4>
                    
                    <div class="table-responsive">
                      <table class="table">
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
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>img</td>
                            <td>Male</td>
                            <td>Male-Tshirt</td>
                            <td>Male-T-shirt</td>
                            <td>599</td>
                            <td>Jacfedfdfevrob</td>
                            <td>Xl </td>
                            <td>Red</td>
                            <td>00</td>
                          </tr>
                        </tbody>
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
          
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../template/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../template/assets/js/off-canvas.js"></script>
    <script src="../../template/assets/js/hoverable-collapse.js"></script>
    <script src="../../template/assets/js/misc.js"></script>
    <script src="../../template/assets/js/settings.js"></script>
    <script src="../../template/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>