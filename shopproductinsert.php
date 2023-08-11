<?php

session_start();

?>

<?php include("mainhead.php"); ?>
  
<body>

	<section class="module" id="shop_product">
        <div class="container" style="margin-top:-100px;">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Product Insert<h2>
                <div class="module-subtitle font-serif"></div>
              </div>
            </div>

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
              <div class="col-sm-6 col-sm-offset-3">
                <form id="" role="form"  action="php/Tshopproductinsertcode.php" method="post" enctype="multipart/form-data">

                  <div class="form-group">
                    <label class="sr-only" for="name">Img</label>
                    <input class="form-control" type="file" name="filetoupload" placeholder="Select the img*" required="required" />
                    <p class="help-block text-danger"></p>
                  </div>

                  <div class="form-group">
                      <select name="ddlproduct_men_women_wear_id" class="input form-control">
                       <?php

                        $conn =mysqli_connect("localhost","root","","titanshoppers")or die("could not connect");
                        $sql="SELECT * FROM product_men_women_id";
                        $result=mysqli_query($conn,$sql);
                        while ($row=mysqli_fetch_assoc($result)) 
                            {
                               echo "<option value=".$row['Id'].">".$row['Type']."</option>";              
                            }

                       ?>
                      </select>
                  </div>

                  <div class="form-group">
                      <select name="ddlproduct_category_id" class="input form-control">
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

                 <!--  <div class="form-group ">
                    <select name="exclusivep" class="input form-control">>
                        <option value="1">New Exclusive product</option>
                        <option value="0">REGULAR product</option>
                    </select>
                  </div> -->

                  <div class="form-group exclusivep">
                    <div class="row">
                      <div class="inputGroup col-sm-6 col-sm-offset-3">
                          <input class="radiobtn" style="margin-left: 16px; margin-top:0PX;" id="radio1" name="exclusivep" value="1"  type="radio"/>
                          <label class="l1" for="radio1">New Exclusive Product</label>
                      </div>
                      <div class="inputGroup col-sm-6 col-sm-offset-3">
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
                    <label class="sr-only" for="name">Name</label>
                    <input class="form-control" type="text" name="pname" placeholder="Product name*" required="required" />
                    <p class="help-block text-danger"></p>
                  </div>

                  <div class="form-group">
                    <label class="sr-only" for="email">Rate</label>
                    <input class="form-control" type="text" name="rate"  placeholder="Rate*" required="required" />
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" rows="7" name="discription"  placeholder="Discription*" required="required"></textarea>
                    <p class="help-block text-danger"></p>
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

                  



                  <div class="text-center">
                    <button class="btn btn-block btn-round btn-d" id="cfsubmit" type="submit">Submit</button>
                  </div>
                </form>
                <div class="ajax-response font-alt" id="contactFormResponse"></div>
              </div>
            </div>
        </div>
  	</section>

</body>
</html>