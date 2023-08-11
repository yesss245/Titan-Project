        <style>

        .center{
          align-items: center;
          justify-content: center;
          display: flex;
        }
          
          .balck{
            /*color: #183153;*/
            color: #000;
          }
          .footer-font{
            font-family: "Bodoni MT", Didot, "Didot LT STD", "Hoefler Text", Garamond, "Times New Roman", serif;
             font-weight: 600;

          }
           .name:hover{
              color: #000;
          }

        </style>

        <div class="row" align="center">

          <div class="col-md-4">
            <i class="balck fa fa-fw fa-5x">&#xF0EC;</i><br><h5 class="balck footer-font">EASY EXCHANGE</h5>
          </div>
          <div class="col-md-4">
             <i class="balck fa fa-fw fa-5x">&#xF004;</i><br><h5 class="balck footer-font">100% HANDPICKED</h5>
          </div>
          <div class="col-md-4">
            <i class="balck fa fa-fw fa-5x">&#xF0A3;</i><br><h5 class="balck footer-font">ASSURED QUALITY</h5>
          </div>
          
        </div>

        <div class="module-small bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-12" align="center">


                <!-- <div style="margin-top: -60px;"  class="row">
                  <div class="col-sm-12 mb-sm-40">

                    <div role="tabpanel">
                      <ul align="center" class="center nav nav-tabs font-alt" role="tablist">
                        <style>
                          a:hover{
                            color: #000;
                          }
                        </style>
                        <li class="active"><a href="#RETURNS" data-toggle="tab">RETURNS</a></li>
                        <li class="name"><a class="name" href="#RETURNS" data-toggle="tab">RETURNS</a></li>
                        <li><a href="#RETURNS" data-toggle="tab">RETURNS</a></li>
                        <li><a href="#RETURNS" data-toggle="tab">RETURNS</a></li>
                        <li><a href="#OUR_PROMISE" data-toggle="tab">OUR PROMISE</a></li>
                      </ul>
                      <div  class="tab-content">
                        <div class="tab-pane active" id="RETURNS">Easy 15 days return and exchange. Return Policies may vary based on products and promotions. For full details on our Returns Policies, .
                        </div>
                        <div class="tab-pane" id="OUR_PROMISE">We assure the authenticity and quality of our products.
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div> -->


                <div class="widget">
                  <h5 class="widget-title font-alt">About <br><span style=" font-size: 25px; font-family: 'OCR A Extended', sans-serif;">Titan Shoppers</span></h5>
                  <!-- <p><h2>01<h6 class="font-alt">EASY CUSTOMER SUPPORT</h6></h2>
                     <h2>02<h6 class="font-alt">WORLDWIDE SHIPING</h6></h2>
                     <h2>03<h6 class="font-alt">SUPPORT</h6></h2></p> -->
                  <p>Phone:<a href="tel:+919510537060" style="color: #fff;"> +91 90200 90200</a></p>

                  <p style=""><a href="mailto: titanshoppers@gmail.com" style="color:#fff ; padding: 3px;" >titanshoppers@gmail.com</a></p>
                
                </div>
              </div>

              <!-- <div class="col-sm-3">
                <div class="widget">
                  <section id="map-section">
                    <div id="map"></div>
                  </section>
                </div>
              </div> -->

              <!-- <section id="map-section">
                <div id="map"></div>
              </section> -->

            </div>
          </div>
        </div>
        <hr class="divider-d">
        <footer class="footer bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <p class="copyright font-alt">&copy; 2023&nbsp;<a href="http://localhost/Titan-Project/home_shop.php">Titan Shoppers</a>, All Rights Reserved</p>
              </div>

              <?php

                     $conn=mysqli_connect("localhost","root","","titanshoppers");
                     $sql_social="SELECT * FROM social_links WHERE Status=true";
                     $social_query=mysqli_query($conn,$sql_social);
                     $social_link=mysqli_fetch_assoc($social_query);

              ?>
              <div class="col-sm-6">
                <div class="footer-social-links">
                  <a href="<?php echo $social_link['Facebook']; ?>">
                    <i class="fa fa-facebook"></i>
                  </a>
                  <a href="<?php echo $social_link['Twitter']; ?>">
                    <i class="fa fa-twitter"></i>
                  </a>
                  <a href="<?php echo $social_link['Instagram']; ?>">
                    <i class="fa fa-instagram"></i>
                  </a>
                  <a href="<?php echo $social_link['Facebook']; ?>">
                    <i class="fa fa-skype"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </footer>

        