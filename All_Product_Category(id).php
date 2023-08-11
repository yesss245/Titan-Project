 <?php
session_start();

?>

<?php include("mainhead.php"); ?>
  
<body>

	<section class="module" id="product_category(id)">
        <div class="container" style="margin-top:-100px;">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Product Category(Id)<h2>
                  <h6 align="center" class="font-alt">ALL PRODUCT CATEGORY<h6>
                <div class="module-subtitle font-serif"></div>
              </div>
            </div>
            <?php

                if (isset($_SESSION['product_category'])) 
                {
                  ?>
                  <div class="alert alert-success" align="center" role="alert"><h5 style="align-items: center; justify-content: center; display: flex;"><strong>Hey!</strong> <?php  echo $_SESSION['product_category']; ?></h5></div>
                  <?php
                 
                  unset($_SESSION['product_category']);
                }

                ?>
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <form role="form"  action="php/TAll_Product_Categody(id)code.php" method="post" >                  
                  <div class="form-group">
                    <label class="sr-only" for="name">Product Category</label>
                    <input class="form-control" type="text" name="ptitle" placeholder="Product Title*" required="required" />
                    <p class="help-block text-danger"></p>
                  </div>
                  
                  
                  <div class="text-center">
                    <button class="btn btn-block btn-round btn-d" id="cfsubmit" type="submit">Submit</button>
                  </div>
                </form>
                <div class="ajax-response font-alt" id=""></div>
              </div>
            </div>
        </div>
  	</section>

</body>
</html>