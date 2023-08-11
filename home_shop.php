<?php
session_start();


?>

<?php include("mainhead.php"); ?>

<body style="overflow: hidden;" data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
  <main>
    <div class="page-loader">
      <div class="loader">Loading...</div>
    </div>

    <nav class="navbar navbar-custom navbar-fixed-top navbar-transparent" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span
              class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span
              class="icon-bar"></span></button><a style="font-family: 'OCR A Extended', sans-serif;"
            class="navbar-brand" href="home_shop.php">Titan Shoppers</a>
        </div>
        <div class="collapse navbar-collapse" id="custom-collapse">
          <ul class="nav navbar-nav navbar-right">
            <!-- <li >

                
              
               <form role='form' >
                <input style="color: #fff; margin-top:10px; background: none;border: none; border-bottom: 1px solid #fff;" class="searchbar form-control"   type='text', placeholder='Search...'>
              
               <button style=" color: #fff; margin-top: -15px;" class="search-btn" type='submit'>
                <i class="fa fa-search"></i>
               </button>
              </form>
                
              </li> -->
            <li><a href="home_shop.php">Home</a>

            </li>

            <li><a href="shop_product.php">Shop</a>

            </li>

            <li><a href="pricing1.php">Membership</a>

            </li>

            <li><a href="service2.php">Service</a>

            </li>

            <li><a href="contact.php">Contact</a>

            </li>

            <li><a href="about5.php">About</a>

            </li>






            <?php

            if (isset($_SESSION['user_name'])) {
              ?>

              <li><a href='mycart.php'>
                  <?php

                  $count = 0;
                  if (isset($_SESSION['cart'])) {
                    $count = count($_SESSION['cart']);
                  }

                  ?>
                  <span class="icon-basket">(
                    <?php echo $count; ?>)
                  </span>
                </a>
              </li>

              <li>

                <?php
                $user_name = $_SESSION['user_name'];
                if ($user_name == true) {


                  echo "<a  href='Myprofile.php' >$user_name</a>";
                }
                ?>
              </li>



              <?php


            } else {
              ?>
              <li><a href="exlogin.php"><i class="fa-solid fa-user"></i> </a>

              </li>
              <?php
            }
            ?>






          </ul>
        </div>
      </div>
    </nav>

    <?php

    //  $conn=mysqli_connect("localhost","root","","titanshoppers");
    // $sql="SELECT * FROM homepage_top_slider";
    //  $result=mysqli_query($conn,$sql);
    
    ?>
    <section class="home-section home-fade home-full-height" id="home">
      <div class="hero-slider">
        <ul class="slides">
          <li class="bg-dark-30 bg-dark shop-page-header"
            style="background-image:url(&quot;assets/images/shop/slider11.jpg&quot;);">
            <div class="titan-caption">
              <div class="caption-content">
                <div class="font-alt mb-30 titan-title-size-1">This is Titan Shoppers</div>
                <div class="font-alt mb-30 titan-title-size-4"> Summer 2022</div>
                <div class="font-alt mb-40 titan-title-size-1">Your online fashion destination</div>
              </div>
            </div>
          </li>
          <li class="bg-dark-30 bg-dark shop-page-header"
            style="background-image:url(&quot;assets/images/shop/slider33.jpg&quot;);">
            <div class="titan-caption">
              <div class="caption-content">
                <div class="font-alt mb-30 titan-title-size-1"> This is Titan Shoppers</div>
                <div class="font-alt mb-40 titan-title-size-4">Exclusive products</div><a
                  class="section-scroll btn btn-border-w btn-round" href="#latest">Learn More</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </section>

    <div class="main">

      <?php
      $conn = mysqli_connect("localhost", "root", "", "titanshoppers");
      $sql = "SELECT * FROM latestproduct";
      $result = mysqli_query($conn, $sql);


      ?>


      <section class="module-small">

        <div class="container">
          <div class="row">

            <div class="col-sm-6 col-sm-offset-3">
              <h2 class="module-title font-alt">Latest in clothing</h2>
            </div>
          </div>
          <form>
            <div class="row multi-columns-row">
              <?php
              if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {

                  ?>
                  <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="shop-item">
                      <div class="shop-item-image"><img img style="height: 50vh; width: 36vh;  object-fit: cover;"
                          src="adminside/Adminside_Titan_shoppers/php/Photoes/leatest/<?php echo $row['productimg']; ?>"
                          alt="<?php echo $row['producttitle']; ?>" />
                        <div class="shop-item-detail"><a class="btn btn-round btn-b"
                            href="shop_product_leatest.php?productid=<?php echo $row['productcategoryid']; ?>">See All</a>
                        </div>
                      </div>
                      <h4 class="shop-item-title font-alt"><a href="#">
                          <?php echo $row['producttitle']; ?>
                        </a></h4>
                    </div>
                  </div>
                  <!-- <div class="col-sm-6 col-md-3 col-lg-3">
                  <div class="shop-item">
                    <div class="shop-item-image"><img src="assets/images/shop/p-11.jpg" alt="Men’s Casual Pack"/>
                      <div class="shop-item-detail"><a class="btn btn-round btn-b">See All</a></div>
                    </div>
                    <h4 class="shop-item-title font-alt"><a href="#">Men’s Casual Pack</a></h4>£12.00
                  </div>
                </div> -->

                <?php

                }
              }
              ?>

            </div>
          </form>
          <!-- <div class="row mt-30">
              <div class="col-sm-12 align-center"><a class="btn btn-b btn-round" href="#">See all products</a></div>
            </div> -->
        </div>
      </section>

      <div style="margin-bottom: 3px;" class="home-section hero-slider shop-page-header">

        <img class="mySlides" src="assets/images/15042022.jpg">
        <img class="mySlides" src="assets/images/15042023.jpg">
        <img class="mySlides" src="assets/images/15042024.jpg">
        <img class="mySlides" src="assets/images/15042025.jpg">
        <img class="mySlides" src="assets/images/15042026.jpg">
        <img class="mySlides" src="assets/images/15042027.jpg">

        <style>
          .mySlides {
            display: none;
            height: 100%;
            width: 100%;
          }
        </style>
        <!-- <for images slider> -->
        <script>
          var slideIndex = 0;
          carousel();

          function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
              x[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > x.length) { slideIndex = 1 }
            x[slideIndex - 1].style.display = "block";
            setTimeout(carousel, 2000);
          }
        </script>

      </div>


      <section style="height: 80vh; margin-top:5px;" class="module  "
        data-background="assets/images/shop/Banner/Bannershome.jpg">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">

            </div>
          </div>
        </div>
        <div class="video-player"
          data-property="{videoURL:'https://www.youtube.com/watch?v=EMy5krGcoOU', containment:'.module-video', startAt:0, mute:true, autoPlay:true, loop:true, opacity:1, showControls:false, showYTLogo:false, vol:25}">
          <img src="assets/images/shop/Banner/Bannershome.jpg"></div>
      </section>

      <?php


      $conn = mysqli_connect("localhost", "root", "", "titanshoppers");
      $sql = "SELECT * FROM shopproduct WHERE exclusive_product=true";
      $result = mysqli_query($conn, $sql);




      ?>
      <section class="module">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <h2 class="module-title font-alt">Exclusive products</h2>
              <div class="module-subtitle font-serif">The totally product are primium product.</div>
            </div>
          </div>
          <div class="row">

            <div class="owl-carousel text-center" data-items="5" data-pagination="false" data-navigation="false">
              <?php
              if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                  $pro_img = json_decode($row['img'], true);

                  ?>
                  <div class="owl-item">
                    <div class="col-sm-12">

                      <div class="ex-product">
                        <a href='single_product.php?pid=<?php echo $row["productid"]; ?>'>
                          <img style="height:; object-fit: cover;"
                            src="adminside/Adminside_Titan_shoppers/php/Photoes/<?php echo $row['productname'] . $pro_img[0]; ?>"
                            alt="<?php echo $row['productname']; ?>" />
                        </a>
                        <h4 class="shop-item-title font-alt"><a href="#">
                            <?php echo $row['productname']; ?>
                          </a></h4>₹
                        <?php echo $row['rate']; ?>
                      </div>

                    </div>
                  </div>
                  <!--  <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="ex-product"><a href="#"><img src="assets/images/shop/shouse.jpg" alt="Derby shoes"/></a>
                      <h4 class="shop-item-title font-alt"><a href="#">Derby shoes</a></h4>£54.00
                    </div>
                  </div>
                </div> -->


                  <?php

                }
              }
              ?>
            </div>

          </div>
        </div>
    </div>
    </section>
    <!--  <hr class="divider-w"> -->

    <section class="module-small">
      <div class="container-fluid">
        <!-- <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Latest in clothing</h2>
              </div>
            </div> -->
        <div class="row multi-columns-row">
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="shop-item">
              <div class="shop-item-image"><img src="assets/images/shop/Banner/1st.jpg" alt="Accessories Pack" />
                <div class="shop-item-detail"><a class="btn btn-round btn-b">See All</a></div>
              </div>

            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="shop-item">
              <div class="shop-item-image"><img src="assets/images/shop/Banner/2nd.jpg" alt="Men’s Casual Pack" />
                <div class="shop-item-detail"><a class="btn btn-round btn-b">See All</a></div>
              </div>

            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="shop-item">
              <div class="shop-item-image"><img src="assets/images/shop/Banner/3rd.jpg" alt="Men’s Garb" />
                <div class="shop-item-detail"><a class="btn btn-round btn-b">See All</a></div>
              </div>

            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="shop-item">
              <div class="shop-item-image"><img src="assets/images/shop/Banner/4th.jpg" alt="Cold Garb" />
                <div class="shop-item-detail"><a class="btn btn-round btn-b">See All</a></div>
              </div>

            </div>
          </div>




        </div>

      </div>
    </section>


    <section class="module">
      <div class="container">
        <!-- <div class="row">
              <div class="col-sm-12">
                <ul class="filter font-alt" id="filters">
                  <li><a class="current wow fadeInUp" href="#" data-filter="*">All</a></li>
                  <li><a class="wow fadeInUp" href="#" data-filter=".illustration" data-wow-delay="0.2s">Illustration</a></li>
                  <li><a class="wow fadeInUp" href="#" data-filter=".marketing" data-wow-delay="0.4s">Marketing</a></li>
                  <li><a class="wow fadeInUp" href="#" data-filter=".photography" data-wow-delay="0.6s">Photography</a></li>
                  <li><a class="wow fadeInUp" href="#" data-filter=".webdesign" data-wow-delay="0.6s">Web Design</a></li>
                </ul>
              </div>
            </div> -->
        <ul class="works-grid works-grid-masonry works-hover-w" id="works-grid">
          <li class="work-item illustration webdesign"><a href="portfolio_single_featured_image1.html">
              <div class="work-image"><img src="assets/images/shop/Banner/1stt.jpg" alt="Portfolio Item" /></div>
              <div class="work-caption font-alt">
                <h3 class="work-title">New Product</h3>
                <div class="work-descr"></div>
              </div>
            </a>
          </li>

          <li class="work-item marketing photography"><a href="portfolio_single_featured_image2.html">
              <div class="work-image"><img src="assets/images/shop/Banner/600-400.jpg" alt="Portfolio Item" /></div>
              <div class="work-caption font-alt">
                <h3 class="work-title">Heels</h3>
                <div class="work-descr"></div>
              </div>
            </a></li>
          <li class="work-item illustration photography"><a href="portfolio_single_featured_slider1.html">
              <div class="work-image"><img src="assets/images/shop/Banner/400-300.jpg" alt="Portfolio Item" /></div>
              <div class="work-caption font-alt">
                <h3 class="work-title">Leather</h3>
                <div class="work-descr"></div>
              </div>
            </a></li>
          <li class="work-item marketing photography"><a href="portfolio_single_featured_slider2.htmll">
              <div class="work-image"><img src="assets/images/shop/Banner/350-233.jpg" alt="Portfolio Item" /></div>
              <div class="work-caption font-alt">
                <h3 class="work-title">Loffer</h3>
                <div class="work-descr"></div>
              </div>
            </a></li>
          <li class="work-item illustration webdesign"><a href="portfolio_single_featured_video1.html">
              <div class="work-image"><img src="assets/images/shop/Banner/900-840.jpg" alt="Portfolio Item" /></div>
              <div class="work-caption font-alt">
                <h3 class="work-title">Delivery</h3>
                <div class="work-descr">Full Secure</div>
              </div>
            </a></li>
          <li class="work-item marketing webdesign"><a href="portfolio_single_featured_video2.html">
              <div class="work-image"><img src="assets/images/shop/Banner/1000-690.jpg" alt="Portfolio Item" /></div>
              <div class="work-caption font-alt">
                <h3 class="work-title">New Product</h3>
                <div class="work-descr"></div>
              </div>
            </a></li>
        </ul>
      </div>
    </section>
    <!-- <section class="module" id="news">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Our News</h2>
              </div>
            </div>
            <div class="row multi-columns-row post-columns wo-border">
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="post mb-40">
                  <div class="post-header font-alt">
                    <h2 class="post-title"><a href="#">Receipt of the new collection</a></h2>
                  </div>
                  <div class="post-entry">
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                  </div>
                  <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="post mb-40">
                  <div class="post-header font-alt">
                    <h2 class="post-title"><a href="#">Sale of summer season</a></h2>
                  </div>
                  <div class="post-entry">
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                  </div>
                  <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="post mb-40">
                  <div class="post-header font-alt">
                    <h2 class="post-title"><a href="#">New lookbook</a></h2>
                  </div>
                  <div class="post-entry">
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                  </div>
                  <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="post mb-40">
                  <div class="post-header font-alt">
                    <h2 class="post-title"><a href="#">Receipt of the new collection</a></h2>
                  </div>
                  <div class="post-entry">
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                  </div>
                  <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="post mb-40">
                  <div class="post-header font-alt">
                    <h2 class="post-title"><a href="#">Sale of summer season</a></h2>
                  </div>
                  <div class="post-entry">
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                  </div>
                  <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="post mb-40">
                  <div class="post-header font-alt">
                    <h2 class="post-title"><a href="#">New lookbook</a></h2>
                  </div>
                  <div class="post-entry">
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                  </div>
                  <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                </div>
              </div>
            </div>
          </div>
        </section> -->
    <!-- <hr class="divider-w"> -->

    <!-- <Client logo > -->
    <!-- <section class="module-small">
          <div class="container">
            <div class="row client">
              <div class="owl-carousel text-center" data-items="6" data-pagination="false" data-navigation="false">
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/client-logo-dark-1.png" alt="Client Logo"/></div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/client-logo-dark-2.png" alt="Client Logo"/></div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/client-logo-dark-3.png" alt="Client Logo"/></div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/client-logo-dark-4.png" alt="Client Logo"/></div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/client-logo-dark-5.png" alt="Client Logo"/></div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/client-logo-dark-1.png" alt="Client Logo"/></div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/client-logo-dark-2.png" alt="Client Logo"/></div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/client-logo-dark-3.png" alt="Client Logo"/></div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/client-logo-dark-4.png" alt="Client Logo"/></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section> -->

    <!-- < googlemap > -->
    <?php include("googlemap.php"); ?>

    <!-- < footer > -->
    <?php include("footer.php"); ?>

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
</body>

</html>