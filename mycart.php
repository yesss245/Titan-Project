  

  <?php include("mainhead.php"); ?>
  
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      
      <!-- < Header > -->
      <?php include("header.php");?>  

      <div style="margin-top: -80px;" class="main">
        <section class="module">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h1 class="module-title font-alt">Checkout</h1>
              </div>
            </div>

            <div class="row">
                
                <?php

                if (isset($_SESSION['removee'])) 
                {
                  ?>
                  <div class="alert alert-danger" align="center" role="alert"><h5 style="align-items: center; justify-content: center; display: flex;"><strong>Hey!</strong> <?php  echo $_SESSION['removee']; ?></h5></div>
                  <?php
                 
                  unset($_SESSION['removee']);
                }

                ?>

            </div>

            <hr class="divider-w pt-20">
            <div class="row">
              <div class="col-sm-12">
                <table class="table table-striped table-border checkout-table">
                  <tbody>
                    <tr>
                      <th>No</th>
                      <!-- <th class="hidden-xs">Item</th> -->
                    
                      <th>Product Name</th>
                      <th>Price</th>
                      <th>Quantity</th>
                      <th>Total</th>
                      <th>Remove</th>
                    </tr>

                    <?php
                    $total=0;
                    //$ftotal=0;

                    if (isset($_SESSION['cart'])) {
                      
                    
                      foreach ($_SESSION['cart'] as $key => $value) 
                      {  
                        $sr=$key+1;
                        
                        echo"
                        
                          <tr>

                            <td class='hidden-xs'>
                               <h5 class='product-title font-alt'>$sr</h5>
                             </td>
                             
                            <td>
                              <h5 class='product-title font-alt'>$value[Productname]</h5>
                            </td>
                            <td class='hidden-xs'>
                              <h5 class='product-title font-alt' name='rate'>₹$value[Rate]/-
                              <input type='hidden' class='irate' value='$value[Rate]'></h5>
                            </td>
                            <td>
                              <form action='Tmycartcode.php' method='POST'>
                                <input class='form-control iquantity' name='mod_Quantity' onchange='this.form.submit()' value='$value[Quantity]' type='number'  max='' min='1'/>
                                <input type='hidden' name='Productname' value='$value[Productname]'>
                              </form>
                            </td>
                            <td>
                              <h5 class='product-title font-alt itotal'>$total</h5>
                            </td>

                            
                            <td class='pr-remove'>
                              <form action='Tmycartcode.php' method='POST'>
                                <button class='remove' name='remove_item' title='Remove'><i style='color:red;' class='fa fa-times'></i></button>
                                <input type='hidden' name='Productname' value='$value[Productname]'>
                              </form>  
                            </td>
                          </tr>
                          
                        ";
                      }
                     } 
                    ?>

                   

                    <!-- <td class='hidden-xs'><a href='#'><img src='assets/images/shop/product-14.jpg' alt='Accessories Pack'/></a></td> -->

                    <!-- <tr>
                      <td class="hidden-xs"><a href="#"><img src="assets/images/shop/product-14.jpg" alt="Accessories Pack"/></a></td>
                      <td>
                        <h5 class="product-title font-alt">Accessories Pack</h5>
                      </td>
                      <td class="hidden-xs">
                        <h5 class="product-title font-alt">£20.00</h5>
                      </td>
                      <td>
                        <input class="form-control" type="number" name="" value="1" max="50" min="1"/>
                      </td>
                      <td>
                        <h5 class="product-title font-alt">£20.00</h5>
                      </td>
                      <td class="pr-remove"><a href="#" title="Remove"><i class="fa fa-times"></i></a></td>
                    </tr> -->
                    <!-- <tr>
                      <td class="hidden-xs"><a href="#"><img src="assets/images/shop/product-13.jpg" alt="Men’s Casual Pack"/></a></td>
                      <td>
                        <h5 class="product-title font-alt">Men’s Casual Pack</h5>
                      </td>
                      <td class="hidden-xs">
                        <h5 class="product-title font-alt">£20.00</h5>
                      </td>
                      <td>
                        <input class="form-control" type="number" name="" value="1" max="50" min="1"/>
                      </td>
                      <td>
                        <h5 class="product-title font-alt">£20.00</h5>
                      </td>
                      <td class="pr-remove"><a href="#" title="Remove"><i class="fa fa-times"></i></a></td>
                    </tr> -->
                  </tbody>
                </table>
              </div>
            </div>
            
            <hr class="divider-w">
            <div class="row mt-20">

             <!--  <form>
                <div class="col-sm-5 col-sm-offset-1 mt-20">

                  <div class="form-group">
                    <label>Full Name</label>
                    <input style="text-transform: none;" class="form-control" id="username" type="text" name="Name" placeholder="Full Name/**"/>
                  </div>

                  <div class="form-group">
                    <label>Phone.no</label>
                    <input style="text-transform: none;" class="form-control" id="username" type="text" name="Name" placeholder="Full Name/**"/>
                  </div>

                  <div class="form-group">
                    <label>Adress</label>
                    <input style="text-transform: none;" class="form-control" id="username" type="text" name="Name" placeholder="Full Name/**"/>
                  </div>


                  
                </div>
              </form> -->

              <div class="col-sm-5 col-sm-offset-7">
                <div class="shop-Cart-totalbox">
                  <h4 class="font-alt">Cart Totals</h4>
                  <table class="table table-striped table-border checkout-table">
                    <tbody>
                      
                      <tr>
                        <th>GST 5% :</th>
                        <td ><h5 id="gstt"></h5></td>
                      </tr>
                      <tr>
                        <th>Shipping:</th>
                        <td ><h5 id="shippingcharge">Free Delivery</h5></td>
                      </tr>
                      <tr>
                        <th>Cart Subtotal :</th>
                        <td ><h5  id="ftotal"></h5></td>
                      </tr>
                      <!-- <tr>
                        <th>GST(5%)</th>
                        <td><h5 class="gst"></h5></td>
                      </tr>
                      
                      <tr class="shop-Cart-totalprice">
                        <th>Total :</th>
                        <td ><h5 class="fulltotal" id="ftotal"></h5></td>
                      </tr> -->
                    </tbody>
                  </table>

                  
                </div>
              </div>


              <div class="row">
                  
                <?php 

                   if (isset($_SESSION['cart']) && count($_SESSION['cart'])>0) 
                   {
                  ?>

                  <form  action="Tpurchase.php" method="post">
                    <div class="col-sm-5 col-sm-offset-1">
                      <h3 class="font-alt">Delivery to</h3>
                        <div class="form-group">
                          <label>Full Name</label>
                          <input required style="text-transform: none;" class="form-control" id="username" type="text" name="fullname" placeholder="Full Name/**"/>
                        </div>

                        <div class="form-group">
                          <label>Phone.no</label>
                          <input required style="text-transform: none;" class="form-control" id="username" type="text" name="phoneno" placeholder="Phone No/**"/>
                        </div>
                        

                        
                        
                      
                    </div>
                    <div class="col-sm-5 col-sm-offset-1">
                                        
                                        <style>
                                          .adresstext{
                                            text-transform: none;
                                          }
                                        </style>
                                            
                                            
                                      
                                            <div class="form-group">
                                                <label>Pin code</label><br>
                                                <input name="pincode" class=" adresstext form-control"  maxlength="6" type="text" placeholder="Pin code" required />
                                            </div>
                                            
                                        
                                        
                                            <div class="form-group">
                                                <label>Flat, House no., Building, Company, Apartment</label><br>
                                                <input name="house_no" class=" adresstext form-control" type="text" placeholder="Flat, House no., Building, Company, Apartment" required/>
                                            </div>
                                            
                                        
                                        
                                            <div class="form-group">
                                                <label>Area, Colony, Street, Sector, Village</label><br>
                                                <input name="area" class=" adresstext form-control" type="text" placeholder="Area, Colony, Street, Sector, Village" required/>
                                            </div>
                                            
                                        
                                        
                                            <div class="form-group">
                                                <label>Landmark</label><br>
                                                <input name="landmark" class=" adresstext form-control" type="text" required placeholder="//Like- near Afill tower... "/>
                                            </div>
                                            
                                        
                                        
                                            <div class="form-group">
                                                <label>Town/City</label><br>
                                                <input name="city" class=" adresstext form-control" type="text" placeholder="Town/City" required/>
                                            </div>
                                            
                                      
                                            <div class="form-group">
                                                <label>State / Province / Region</label><br>
                                                <input name="state" class=" adresstext form-control" type="text" placeholder="State / Province / Region" required />
                                            </div>
                                            <div class="form-group">
                                                <label>Country</label><br>
                                                <input name="country" class=" adresstext form-control" type="text"  placeholder="Counrty" required/>
                                            </div>
                                            
                                         
                        <a href="Proceed_order.php?Randomorderid">
                          <button name="Purchase" class="btn btn-lg btn-block btn-round btn-d" type="submit">Proceed to Checkout</button>
                        </a>
                      
                    </div>
                  </form>    
                  <?php
                   }

                  ?>


              </div>



            </div>
          </div>
        </section>
        <!-- < googlemap > -->
         

        <!-- < footer > -->
        <?php include("footer.php");?>
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
      var ptotal=document.getElementById('ptotal');
      var ftotal=document.getElementById('ftotal');
      var gstt=document.getElementById('gstt');
      var shippingcharge=document.getElementById('shippingcharge');
      
      
      function subTotal()
      {
        
        ft=0;
        for(i=0;i<irate.length;i++)
        {
          itotal[i].innerText=icon+(irate[i].value)*(iquantity[i].value);
          ft=ft+(irate[i].value)*(iquantity[i].value);
          gst=ft*5/100;
          gft=ft+(ft*5/100);
          
        }
        console.log(gft.gst);
        ftotal.innerText=icon+gft+lasticon;
        ptotal=icon+gft+lasticon;
        gstt.innerText=icon+gst+lasticon;
        
        

      }

      subTotal();

    </script>


  </body>
</html>