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

                if (isset($_SESSION['Latest'])) 
                {
                  ?>
                  <div class="alert alert-success" align="center" role="alert"><h5 style="align-items: center; justify-content: center; display: flex;"><strong>Hey!</strong> <?php  echo $_SESSION['Latest']; ?></h5></div>
                  <?php
                 
                  unset($_SESSION['Latest']);
                }

                ?>

            </div>
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <form role="form"  action="php/THomepage_Latest_product_insertcode.php" method="post" enctype="multipart/form-data">

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
                               echo "<option value=".$row['Gtype'].">".$row['Type']."</option>";   
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

                  

                  <div class="form-group">
                    <label class="sr-only" for="name">Product Title</label>
                    <input class="form-control" type="text" name="ptitle" placeholder="Product Title*" required="required" />
                    <p class="help-block text-danger"></p>
                  </div>
                  
                  <!-- <div class="form-group">
                    <label class="sr-only" for="email">Product Id</label>
                    <input class="form-control" type="text" name="pid"  placeholder="Product Id" required="required" />
                    <p class="help-block text-danger"></p>
                  </div> -->
                  
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