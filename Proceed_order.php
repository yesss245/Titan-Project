<?php include("mainhead.php"); ?>
  
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
    
    <!-- < Header > -->
    <?php include("header.php");?>  
      
    <div class="main">
        <section class="module">
          <div class="container">
            <div style="margin-top:-50px;"  class="row">
                  <div class="col-sm-7">
                    <table class="table table-striped table-border checkout-table">
                      <tbody>
                        <tr>
                          <th>No</th>
                          <!-- <th class="hidden-xs">Item</th> -->
                          <th>Product Name</th>
                          <th class="hidden-xs">Price</th>
                          <th>Quantity</th>
                          <th>Total</th>
                          
                        </tr>

                        <?php
                          $total=0;
                          if (isset($_SESSION['cart'])) {
                            // code...
                          
                            foreach ($_SESSION['cart'] as $key => $value) 
                            { 
                              $sr=$key+1;
                              $total=$value['Rate']*$value['Quantity'];
                              $Ftotal=$value['Rate']*$value['Quantity'];
                              
                              
                        ?>     


                        <tr>
                          <td class="hidden-xs"><?php echo $sr; ?></td>
                          <td>
                            <h5 class="product-title font-alt"><?php echo $value['Productname']; ?></h5>
                          </td>
                          <td class="hidden-xs">
                            <h5 class=" product-title font-alt ">₹<?php echo $value['Rate']; ?>
                            <input type="hidden" class="irate" value="<?php echo $value['Rate']; ?>"></h5>
                          </td>
                          <td>
                            <h5 onchange="subTotal()" class=" product-title font-alt "><?php echo $value['Quantity']; ?>
                              <input type="hidden" class="iquantity" value="<?php echo $value['Quantity']; ?>">
                          </h5>
                          </td>
                          <td>
                            <h5 class=" product-title font-alt itotal">₹<?php echo $total; ?></h5>
                          </td>
                        
                        </tr>
                        

                        
                        <?php
                            }
                          }

                        ?>
                        
                        
                        <tr >
                          <td align="right" style=" font-weight: 700;" colspan="4">Gst 5%</td>
                          <td><h5 id="gstt" class=" product-title font-alt"></h5></td>
                        </tr>
                        <tr >
                          <td align="right" style=" font-weight: 700;" colspan="4">Shipping:</td>
                          <td ><h6 id="shippingcharge">Free Delivery</h6></td>
                        </tr>
                        <tr >
                          <td align="right" style=" font-weight: 700;" colspan="4">Total</td>
                          <td><h5 id="ftotal" class=" product-title font-alt"></h5></td>
                        </tr>

                      

                        
                        
                        
                       

                        <!-- <td class='hidden-xs'><a href='#'><img src='assets/images/shop/product-14.jpg' alt='Accessories Pack'/></a></td> -->

                      </tbody>
                    </table>
                    <?php

                    $user_id=$_SESSION['user_id'];

                    ?>
                    <a href="Proceed_order_payment.php?user_id=<?php echo $user_id; ?>">
                      <button name="Purchase" class="btn btn-lg btn-block btn-round btn-d" type="submit">Proceed to Payment</button>
                    </a>
                  </div>

                  <!-- <div style="margin-top:-10px;" class="col-sm-5 ">

                    <div style="margin-top: 10px; border:2px solid #EAEAEA;">
                      <div style="margin-left:5px; letter-spacing: 2px; font-size: 11px;">
                        <h4 style="margin-bottom: -18px;" class="adress-name">Name</h4><br>
                        <h5 style="margin-bottom: -18px;" class="adress-name">Order.no</h5><br>
                        <h5 style="margin-bottom: -15px;">Mobile.no</h5><br>
                        Flat, House no., Building, Company, Apartment<br>
                        Area, Colony, Street, Sector, Village<br>
                        Landmark<br>
                        Town/City<br>
                        State / Province / Region<br>
                        Pincode
                       </div> 
                    </div>

                  </div> -->
            </div>
          </div>
        </section>

    </div>


        <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
    <!--  
    JavaScripts
    =============================================
    -->

    

    <script src="assets/lib/jquery/dist/jquery.js"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/lib/wow/dist/wow.js"></script>
    <script src="assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
    <script src="assets/lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="assets/lib/flexslider/jquery.flexslider.js"></script>
    <script src="assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="assets/lib/smoothscroll.js"></script>
    <script src="assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>

    <script>
      var icon="₹";
      var lasticon="/-";
      var ft=0;
      var gft=0;
      var gst=0;
      //var ship=120;
      var irate=document.getElementsByClassName('irate');
      var iquantity=document.getElementsByClassName('iquantity');
      var itotal=document.getElementsByClassName('itotal');
      var ftotal=document.getElementById('ftotal');
      var gstt=document.getElementById('gstt');
      var shippingcharge=document.getElementById('shippingcharge');
      
      
      function subTotal()
      {
        
        ft=0;
        for(i=0;i<irate.length;i++)
        {
          
          ft=ft+(irate[i].value)*(iquantity[i].value);
          gst=ft*5/100;
          gft=ft+(ft*5/100);
          
        }
        console.log(gft.gst);
        ftotal.innerText=icon+gft+lasticon;
        gstt.innerText=icon+gst+lasticon;
        
        

      }

      subTotal();

    </script>
  </body>
</html> 