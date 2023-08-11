<?php include("mainhead.php"); ?>

<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
  <main>

    <!-- < Header > -->
    <?php include("header.php"); ?>

    <?php

    $conn = mysqli_connect("localhost", "root", "", "titanshoppers");
    $sql_shop_banners = "SELECT * FROM shope_banners WHERE Status=true";
    $shop_banners_query = mysqli_query($conn, $sql_shop_banners);
    $shop_banners = mysqli_fetch_assoc($shop_banners_query);

    ?>
    <div class="main">
      <section class="module bg-dark-60 shop-page-header"
        data-background="http://localhost/Titan-Project/adminside/Adminside_Titan_shoppers/php/Photoes/Shop_Banners/<?php echo $shop_banners['img_Banners']; ?>">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <h2 class="module-title font-alt">
                <?php echo $shop_banners['Big_hedline']; ?>
              </h2>
              <div class="module-subtitle font-serif">
                <?php echo $shop_banners['Sub_message']; ?>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="module-small">
        <div class="container">

          <div class="row">

            <?php

            if (isset($_SESSION['add'])) {
              ?>
              <div class="alert alert-success" align="center" role="alert">
                <h5 style="align-items: center; justify-content: center; display: flex;"><strong>Hey!</strong>
                  <?php echo $_SESSION['add']; ?>
                </h5>
              </div>
              <?php

              unset($_SESSION['add']);
            }

            ?>

          </div>
          <div class="row">

            <?php

            if (isset($_SESSION['added'])) {
              ?>
              <div class="alert alert-success" align="center" role="alert">
                <h5 style="align-items: center; justify-content: center; display: flex;"><strong>Hey!</strong>
                  <?php echo $_SESSION['added']; ?>
                </h5>
              </div>
              <?php

              unset($_SESSION['added']);
            }

            ?>

          </div>
          <div class="row">

            <?php

            if (isset($_SESSION['alredyadd'])) {
              ?>
              <div class="alert alert-danger" align="center" role="alert">
                <h5 style="align-items: center; justify-content: center; display: flex;"><strong>Hey!</strong>
                  <?php echo $_SESSION['alredyadd']; ?>
                </h5>
              </div>
              <?php

              unset($_SESSION['alredyadd']);
            }

            ?>

          </div>


          <div style="justify-content:center; align-items: center; display:flex;" class=" row">
            <div class="col-sm-12 col-xl-8 col-md-6">
              <div class="widget">
                <form role="form">
                  <div class="search-box">
                    <input class="form-control" id="searchInput" onkeyup="search()" type="text"
                      placeholder="Search products..." />
                    <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
                  </div>
                </form>
              </div>

            </div>
          </div>

          <!-- <form style="margin-top:5px; justify-content:center; align-items: center; display:flex;" class="row">
              <div class="col-sm-4 mb-sm-20">
                <select class="form-control">
                  <option selected="selected">Default Sorting</option>
                  <option>Popular</option>
                  <option>Latest</option>
                  <option>Average Price</option>
                  <option>High Price</option>
                  <option>Low Price</option>
                </select>
              </div>
              <div class="col-sm-2 mb-sm-20">
                <select class="form-control">
                  <option selected="selected">Woman</option>
                  <option>Man</option>
                </select>
              </div>
              <div class="col-sm-3 mb-sm-20">
                <select class="form-control">
                  <option selected="selected">All</option>
                  <option>Coats</option>
                  <option>Jackets</option>
                  <option>Dresses</option>
                  <option>Jumpsuits</option>
                  <option>Tops</option>
                  <option>Trousers</option>
                </select>
              </div>
             <div class="col-sm-3">
                <button class="btn btn-block btn-round btn-g" type="submit">Apply</button>
              </div> 
            </form> -->
        </div>
      </section>
      <hr class="divider-w">

      <?php
      $conn = mysqli_connect("localhost", "root", "", "titanshoppers");
      $sql = "SELECT * FROM shopproduct WHERE productcategoryid=" . $_REQUEST['productid'];
      //$sql="SELECT * FROM shopproduct";
      //$sql="SELECT * FROM shopproduct WHERE exclusive_product=false";
      


      $result = mysqli_query($conn, $sql);


      ?>

      <section class="module-small">
        <div class="container">
          <div id="myUL" class="row multi-columns-row">

            <?php
            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {
                $pro_img = json_decode($row['img'], true);

                ?>
                <form action="Tmycartcode.php" method="POST">
                  <div class="col-sm-6 col-md-3 col-lg-3  blogBox moreBox" style="display: none;">
                    <div class="shop-item productt">
                      <div class="shop-item-image"><img style="height: 50vh; width:43vh ; object-fit: cover;"
                          src="adminside/Adminside_Titan_shoppers/php/Photoes/<?php echo $row['productname'] . $pro_img[0]; ?>"
                          alt="<?php echo $row['productname']; ?>" />
                        <?php
                        if (!isset($_SESSION['user_name'])) {
                          ?>


                          <div class="shop-item-detail">
                            <a class="btn btn-round btn-b" href='exlogin.php'>
                              Quick view
                            </a>
                          </div>
                          <?php


                        } else {
                          ?>
                          <div class="shop-item-detail">
                            <a class="btn btn-round btn-b" href='single_product.php?pid=<?php echo $row["productid"]; ?>'>
                              Quick view
                            </a>
                          </div>
                          <?php
                        }
                        ?>

                      </div>
                      <h4 style="font-weight:700; letter-spacing:1px; margin-bottom:-10px;"
                        class="shop-item-title font-alt">
                        <?php echo $row['Brand']; ?>
                        <br>
                        <span style="height: 2rem;overflow: hidden;display:inline-block;" class="shop-item-title font-alt">
                          <?php echo $row['productname']; ?>
                          <input type="hidden" name="Productname" value="<?php echo $row["productname"]; ?>">
                      </h4>
                      <h5 style="color:#000;display: inline-block; font-weight: 600; ">₹
                        <?php echo $row['rate']; ?>
                        <input type="hidden" name="Rate" value="<?php echo $row["rate"]; ?>">
                      </h5>
                      <span style="text-decoration-line: line-through; ">₹
                        <?php echo $row['F_rate']; ?>
                      </span>
                      <span style="color:#000; font-weight: 600; ">(
                        <?php echo $row['Discount']; ?>% OFF)
                      </span><br>
                      <h6 style="color:green; font-weight: 600; margin-top:-10px; margin-bottom: 10px;">offer price ₹
                        <?php echo $row['rate']; ?>
                      </h6>


                      <?php
                      if (isset($_SESSION['user_name'])) {
                        ?>
                        <div class="row mb-20">
                          <div class="col-sm-12">
                            <button class="btn btn-lg btn-block btn-round btn-b" name="Add_to_cart">Add To Cart</button>
                          </div>
                        </div>

                        <?php
                      }

                      ?>

                      <?php
                      if (!isset($_SESSION['user_name'])) {
                        ?>


                        <div class="row mb-20">

                          <div class="col-sm-12">

                            <a href="http://localhost/Titan-Project/exlogin.php" style="color:#fff;"
                              class="btn btn-lg btn-block btn-round btn-b" name="Add_to_cart"
                              href="http://localhost/Titan-Project/exlogin.php">Buy Now</a>

                          </div>

                        </div>

                        <?php
                      }
                      ?>



                    </div>
                  </div>
                </form>
                <style>
                  .Quickview:hover {
                    color: #fff;
                  }
                </style>

                <script>

                  const search = () => {
                    const searchbox = document.getElementById("searchInput").value.toUpperCase();
                    const storeitem = document.getElementById("myUL")
                    const product = document.querySelectorAll(".productt")
                    const pname = storeitem.getElementsByTagName("h4")

                    for (var i = 0; i < pname.length; i++) {
                      let match = product[i].getElementsByTagName('h4')[0];

                      if (match) {
                        let textvalue = match.textContent || match.innerHTML

                        if (textvalue.toUpperCase().indexOf(searchbox) > -1) {
                          product[i].style.display = "";
                        } else {
                          product[i].style.display = "none";
                        }
                      }
                    }
                  }

                </script>




                <!-- <div class="col-sm-6 col-md-3 col-lg-3">
    <div class="shop-item">
      <div class="shop-item-image"><img src="assets/images/shop/product-14.jpg" alt="Cold Garb"/>
        <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
      </div>
      <h4 class="shop-item-title font-alt"><a href="#">Cold Garb</a></h4>£14.00
    </div>
  </div> -->

                <?php

              }
            } else {
              echo mysqli_error($conn);
            }
            ?>

          </div>
          <div class="row">
            <div id="loadMore" class="col-sm-12 align-center"><button class="seeallpro btn btn-b btn-round" href="#">See
                all products</button> </div>
          </div>
        </div>
      </section>



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
  <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="load-more-button.css" rel="stylesheet"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="load-more-button.js"></script>

  <script>
    $(document).ready(function () {
      $(".moreBox").slice(0, 16).show();
      if ($(".blogBox:hidden").length != 0) {
        $("#loadMore").show();
      }
      $("#loadMore").on('click', function (e) {
        e.preventDefault();
        $(".moreBox:hidden").slice(0, 8).slideDown();
        if ($(".moreBox:hidden").length == 0) {
          $("#loadMore").fadeOut('slow');
        }
      });
    });
  </script>




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