 <?php
session_start();

?>

<?php include("mainhead.php"); ?>
  
<body>

	<section class="module" id="product_men_women(id)">
        <div class="container" style="margin-top:-100px;">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Product Men/Women(Id)<h2>
                  <h6 align="center" style="margin: 0px 0px;" class=" font-alt">GENDER<h6>
                <div class="module-subtitle font-serif"></div>
              </div>
            </div>
            <?php

                if (isset($_SESSION['product_wear'])) 
                {
                  ?>
                  <div class="alert alert-success" align="center" role="alert"><h5 style="align-items: center; justify-content: center; display: flex;"><strong>Hey!</strong> <?php  echo $_SESSION['product_wear']; ?></h5></div>
                  <?php
                 
                  unset($_SESSION['product_wear']);
                }

                ?>
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <form role="form"  action="php/TProduct_men_women_id_code.php" method="post" >                  
                  <div class="form-group">
                    <label class="sr-only" for="name">Product Men/Women</label>
                    <input class="form-control" type="text" name="ptitle" placeholder="Men/Women*" required="required" />
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