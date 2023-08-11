<?php include("mainhead.php"); ?>
  
<body>

	<section class="module" id="shop_product">
        <div class="container" style="margin-top:-100px;">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Exclusive Product Insert<h2>
                <div class="module-subtitle font-serif"></div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <form id="" role="form"  action="php/Texclusive_product_insertcode.php" method="post" enctype="multipart/form-data">

                  <div class="form-group">
                    <label class="sr-only" for="name">Img</label>
                    <input class="form-control" type="file" name="filetoupload" placeholder="Select the img*" required="required" />
                    PLEASE SELECT THAT IMAGE SIZE HAVE 500px*346px.
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
                               echo "<option value=".$row['product_title'].">".$row['product_title']."</option>";              
                            }

                       ?>
                      </select>
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