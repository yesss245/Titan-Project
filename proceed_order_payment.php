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
                            <h5 class=" product-title font-alt ">₹<?php echo $value['Rate']; ?><input type="hidden" class="irate" value="<?php echo $value['Rate']; ?>"></h5>
                          </td>
                          <td>
                            <h5 onchange="subTotal()" class=" product-title font-alt "><?php echo $value['Quantity']; ?>
                              <input type="hidden" class="iquantity" value="<?php echo $value['Quantity']; ?>">
                          </h5>
                          </td>
                          <td>
                            <h5 class=" product-title font-alt itotal">₹<?php echo $total; ?>/-</h5>
                          </td>
                        
                        </tr>
                        

                        
                        <?php
                            }
                          }

                        ?>
                        
                          <?php
                              $oid=$_SESSION['randomorderid'];


                              $conn=mysqli_connect("localhost","root","","titanshoppers");
                              
                              $sqlgst = "select sum(Gst)from user_order where Randomorderid = '$oid'";
                                      $qgst = mysqli_query($conn,$sqlgst);
                                      $gst = mysqli_fetch_array($qgst);
                          ?>
                        
                        <tr >
                          <td align="right" style=" font-weight: 700;" colspan="4">Gst 5%</td>
                          <td><h5 id="gstt" class=" product-title font-alt"><?php echo $gst[0]; ?></h5></td>
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
                  </div>

                  <?php

                  $user_id=$_SESSION['user_id'];
                  $user_name=$_SESSION['user_name'];
                  $oid=$_SESSION['randomorderid'];

                  $conn=mysqli_connect("localhost","root","","titanshoppers");
                 // $lastid = mysqli_insert_id($conn); 
                  $sql="SELECT * FROM order_user_info  WHERE Randomorderid = '$oid' LIMIT 1";
                  $result=mysqli_query($conn,$sql);
                  if ($result) 
                     while($row3=mysqli_fetch_assoc($result))
                      {
                        ?>

                        <div style="margin-top:-10px;" class="col-sm-5 ">

                          <div style="margin-top: 10px; border:2px solid #EAEAEA;">
                            <div style="margin-left:5px; letter-spacing: 2px; font-size: 11px;">
                              <h4 style="margin-bottom: -18px; font-weight: 700;" >Name:-<?php echo $row3['FullName']; ?>
                              <form action="successfully_payment.php">
                              <input type="hidden" name="Fullname" value="<?php echo $row3['FullName']; ?>"></form></h4><br>
                              <h5 style="margin-bottom: -18px;" class="adress-name">Order.no:-<?php echo $row3['Randomorderid']; ?></h5><br>
                              <h5 style="margin-bottom: -15px;">Phone.no:-<?php echo $row3['Phone_no']; ?></h5><br>
                              <?php echo $row3['House_no']; ?>,<br>
                              <?php echo $row3['Area']; ?>,<br>
                              <?php echo $row3['Landmark']; ?>,<br>
                              <?php echo $row3['Town_city']; ?>&nbsp;-
                              <?php echo $row3['Pincode']; ?>,<br>
                              <?php echo $row3['State']; ?>,<br>
                              <?php echo $row3['Country']; ?>.

                              <form method="post" action="PaytmKit/pgRedirect.php">
                                

                                <input type="hidden" id="ORDER_ID" tabindex="1" 
                                      name="ORDER_ID" autocomplete="off"
                                      value="<?php echo $row3['Randomorderid']; ?>">
                                 <?php
                                
                                $user_name = $_SESSION['user_name'];

                                 ?>     
                                <input type="hidden" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php echo $user_name; ?>">
                                <input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
                                <input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12"
                                  size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
                                  <?php
                                    $oid=$_SESSION['randomorderid'];
                                    $conn=mysqli_connect("localhost","root","","titanshoppers");
                                    
                                    $sql6 = "select sum(Gst)+sum(Total_Price)from user_order where Randomorderid = '$oid'";
                                            $qgst = mysqli_query($conn,$sql6);
                                            $ttgst = mysqli_fetch_array($qgst);
                                            $_SESSION['grandtotal']=$ttgst[0];
                                  ?>
                                  <input type="hidden" title="TXN_AMOUNT" tabindex="10"
                                    type="text" name="TXN_AMOUNT"
                                    value="<?php echo "$ttgst[0]"; ?>">      

                              
                             
                          

                                <a  href="successfully_payment.php?FullName=<?php echo $row3['FullName']; ?>">

                                   <?php
                                    $oid=$_SESSION['randomorderid'];



                                    $conn=mysqli_connect("localhost","root","","titanshoppers");
                                    
                                    $sql6 = "select sum(Gst)+sum(Total_Price)from user_order where Randomorderid = '$oid'";
                                            $qgst = mysqli_query($conn,$sql6);
                                            $ttgst = mysqli_fetch_array($qgst);
                                            $_SESSION['grandtotal']=$ttgst[0];
                                    ?>
                                    
                                    <input  style="margin-top:50px;" name="Purchase" class="btn btn-lg btn-block btn-round btn-d" type="submit" value="Proceed to Payment ">
                                    <input  style="margin-top: 0px;" name="Purchase" class="btn btn-lg btn-block btn-round btn-d" type="submit" value=" ₹<?php echo "$ttgst[0]"; ?>/-">
                                    <input  style="margin-top: 0px;" name="Purchase" class="btn btn-lg btn-block btn-round btn-d" type="hidden" value=" ₹<?php echo "$ttgst[0]"; ?>/-">
                                    <?php
                                    //unset($_SESSION['cart']);          
                                    //$_SESSION['grandtotal']=$ttgst[0];

                                    ?>

                                </a>
                              </form>
                              
                              
                            </div> 
                          </div>  
                      <?php
                      }

                      ?>

                        </div>
                        <!-- <a href="http://localhost/Titan-Project/invoice.php">
                        <input type="submit" name="" class="btn btn-lg btn-block btn-round btn-d" value="Print Invoice">
                        </a> -->



                        

                  
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
      var ptotal=document.getElementById('ptotal');
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
        ptotal.innerText=icon+gft+lasticon;
        gstt.innerText=icon+gst+lasticon;
        
        

      }

      subTotal();

    </script>
  </body>
</html> 