<?php include("mainhead.php"); ?>

<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
  <main>
    <div class="page-loader">
      <div class="loader">Loading...</div>
    </div>
    <!-- < Header > -->
    <?php include("header.php"); ?>



    <div class="main">



      <?php
      $conn = mysqli_connect("localhost", "root", "", "titanshoppers");
      $sql = "SELECT * FROM shopproduct WHERE productid=" . $_REQUEST['pid'];



      $result = mysqli_query($conn, $sql);


      ?>

      <section class="module">
        <div class="container">


          <div style="margin-top:-130px;" class="row">


            <?php
            if ($result) {


              while ($row = mysqli_fetch_assoc($result)) {
                $pro_img = json_decode($row['img'], true);
                $count = count($pro_img);

                ?>
                <form action="Tmycartcode.php" method="POST">

                  <div class="col-sm-6 mb-sm-40">
                    <a class="gallery"
                      href="adminside/Adminside_Titan_shoppers/php/Photoes/<?php echo $row['productname'] . $pro_img[0] ?>">
                      <img style=" height: 78vh; width:auto; object-fit: cover;"
                        src="adminside/Adminside_Titan_shoppers/php/Photoes/<?php echo $row['productname'] . $pro_img[0]; ?>"
                        alt="Single Product Image" />
                      <input type="hidden"
                        src="adminside/Adminside_Titan_shoppers/php/Photoes/<?php echo $row['productname'] . $pro_img[0]; ?>"
                        name="Img">
                    </a>
                    <ul class="product-gallery">
                      <?php

                      for ($i = 0; $i < $count; $i++) {
                        ?>
                        <li>
                          <a class="gallery"
                            href="adminside/Adminside_Titan_shoppers/php/Photoes/<?php echo $row['productname'] . $pro_img[0]; ?>">
                            <img
                              src="adminside/Adminside_Titan_shoppers/php/Photoes/<?php echo $row['productname'] . $pro_img[$i]; ?>"
                              alt="Single Product" />
                          </a>
                        </li>

                      <?php } ?>
                    </ul>
                  </div>
                  <div class="col-sm-6">
                    <div class="row">
                      <div class="col-sm-12">
                        <h1 class="product-title font-alt">
                          <?php echo $row["Brand"]; ?>
                        </h1>
                      </div>
                      <div class="col-sm-12">
                        <h3 style="font-weight:200; margin-top:-10px;" class="product-title font-alt">
                          <?php echo $row["productname"]; ?>
                        </h3>
                        <input type="hidden" name="Productname" value="<?php echo $row["productname"]; ?>">
                      </div>
                    </div>

                    <!-- <Coustomer reviews> -->
                    <!-- <div class="row mb-20">
      <div class="col-sm-12"><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star-off"></i></span><a class="open-tab section-scroll" href="#reviews">-2customer reviews</a>
      </div>
    </div> -->

                    <!-- <price> -->
                    <div class="row mb-20">
                      <div class="col-sm-12">
                        <div style="margin-top:-25px; " class="price font-alt"><span style="font-size: 20px;"
                            class="amount">₹
                            <?php echo $row['rate']; ?>
                          </span>
                          <input type="hidden" name="Rate" value="<?php echo $row["rate"]; ?>">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div style="margin-top:-10px; " class="price font-alt"><span
                            style="font-size: 12px; font-weight: 700; color: green;" class="amount">MRP₹<span
                              style="text-decoration-line: line-through; ">
                              <?php echo $row['F_rate']; ?>
                            </span>(
                            <?php echo $row['Discount']; ?>% OFF)
                          </span>
                          <input type="hidden" name="Rate" value="<?php echo $row["rate"]; ?>">
                        </div>
                      </div>
                    </div>

                    <div class="row mb-20">
                      <div class="col-sm-12">
                        <div class="description">
                          <p>
                            <?php echo $row['discription']; ?>
                          </p>
                          <input type="hidden" name="Discription" value="<?php echo $row['discription']; ?>">
                        </div>
                      </div>
                    </div>

                    <!-- <size-color-heights-quantity> -->

                    <div class="row mb-20">

                      <div class="col-sm-3 mb-sm-20">
                        <div class="font-alt" align="center">
                          SIZE
                        </div>

                        <select class="form-control input-lg" name="size">
                          <option value="<?php echo $row['size1']; ?>"><?php echo $row['size1']; ?></option>
                          <option value="<?php echo $row['size2']; ?>"><?php echo $row['size2']; ?></option>
                          <option value="<?php echo $row['size3']; ?>"><?php echo $row['size3']; ?></option>
                          <option value="<?php echo $row['size4']; ?>"><?php echo $row['size4']; ?></option>
                          <option value="<?php echo $row['size5']; ?>"><?php echo $row['size5']; ?></option>
                          <option value="<?php echo $row['size6']; ?>"><?php echo $row['size6']; ?></option>
                        </select>

                      </div>

                      <div class="col-sm-3 mb-sm-20">
                        <div class="font-alt" align="center">
                          COLOR
                        </div>

                        <select class="form-control input-lg" name="color">
                          <option value="<?php echo $row['color1']; ?>"><?php echo $row['color1']; ?></option>
                          <option value="<?php echo $row['color2']; ?>"><?php echo $row['color2']; ?></option>
                          <option value="<?php echo $row['color3']; ?>"><?php echo $row['color3']; ?></option>
                          <option value="<?php echo $row['color4']; ?>"><?php echo $row['color4']; ?></option>
                          <option value="<?php echo $row['color5']; ?>"><?php echo $row['color5']; ?></option>
                          <option value="<?php echo $row['color6']; ?>"><?php echo $row['color6']; ?></option>
                        </select>
                      </div>

                      <div class="col-sm-3 mb-sm-20">
                        <div class="font-alt" align="center">
                          HEIGHT
                        </div>

                        <select class="form-control input-lg" name="height">
                          <option value="<?php echo $row['height1']; ?>"><?php echo $row['height1']; ?></option>
                          <option value="<?php echo $row['height2']; ?>"><?php echo $row['height2']; ?></option>
                          <option value="<?php echo $row['height3']; ?>"><?php echo $row['height3']; ?></option>
                          <option value="<?php echo $row['height4']; ?>"><?php echo $row['height4']; ?></option>
                          <option value="<?php echo $row['height5']; ?>"><?php echo $row['height5']; ?></option>
                          <option value="<?php echo $row['height6']; ?>"><?php echo $row['height6']; ?></option>
                        </select>
                      </div>

                      <div class="col-sm-3 mb-sm-20">
                        <div class="font-alt" align="center">
                          QUANTITY
                        </div>
                        <input class="form-control input-lg" type="number" name="" value="1" max="40" min="1"
                          required="required" />
                      </div>

                    </div>
                    <!-- <end> -->

                    <div class="row mb-20">
                      <div class="col-sm-12">
                        <button class="btn btn-lg btn-block btn-round btn-b" name="Add_to_cart">Add To Cart</button>
                      </div>
                    </div>

                    <div class="row mb-20">
                      <div class="col-sm-12">
                        <div class="product_meta">Categories:<a href="#"> Man, </a><a href="#">Clothing, </a><a
                            href="#">T-shirts</a>
                        </div>
                      </div>
                    </div>
                  </div>

                </form>



              </div>
              <div style="margin-top:20px;" class="row">
                <div class="col-md-6 col-sm-12 mb-sm-40">

                  <div role="tabpanel">
                    <ul class="nav nav-tabs font-alt" role="tablist">
                      <li class="active"><a href="#RETURNS" data-toggle="tab">RETURNS</a></li>
                      <li><a href="#OUR_PROMISE" data-toggle="tab">OUR PROMISE</a></li>
                      <li><a href="#Review" data-toggle="tab">Review</a></li>
                    </ul>
                    <div style="color:#000;" class="tab-content">
                      <div class="tab-pane active" id="RETURNS">Easy 15 days return and exchange. Return Policies may vary
                        based on products and promotions. For full details on our Returns Policies, .
                      </div>

                      <div class="tab-pane" id="OUR_PROMISE">We assure the authenticity and quality of our products.
                      </div>

                      <div class="tab-pane" id="Review">
                        <div class="comments reviews">
                          <?php
                          $conn = mysqli_connect("localhost", "root", "", "titanshoppers");
                          $sql2 = "SELECT * FROM rating WHERE Product_id = '$row[productid]' ";
                          $result1 = mysqli_query($conn, $sql2);


                          ?>
                          <?php
                          if ($result1) {
                            while ($row1 = mysqli_fetch_assoc($result1)) {

                              ?>
                              <div class="comment clearfix">
                                <!-- <div class="comment-avatar"><img src="" alt="avatar"/></div> -->
                                <div class="comment-content clearfix">
                                  <div class="comment-author font-alt"><a style="text-transform: none;" href="#">
                                      <?php echo $row1['Name']; ?>
                                    </a></div>
                                  <div class="comment-body">
                                    <p class="text-muted">
                                      <?php echo $row1['Review']; ?>
                                    </p>
                                  </div>
                                  <div class="comment-meta font-alt">Rating-</span>
                                    <?php echo $row1['Rating_number']; ?><span><i class="fa fa-star star"></i><br>
                                      <?php echo $row1['Date_time']; ?><br><span class="text-muted"></span>
                                  </div>
                                </div>
                              </div>
                            <?php

                            }
                          } else {
                            echo mysqli_error($conn);
                          }
                          ?>
                          <!-- <div class="comment clearfix">
                          <div class="comment-avatar"><img src="" alt="avatar"/></div>
                          <div class="comment-content clearfix">
                            <div class="comment-author font-alt"><a href="#">Mark Stone</a></div>
                            <div class="comment-body">
                              <p>Europe uses the same vocabulary. The European languages are members of the same family. Their separate existence is a myth.</p>
                            </div>
                            <div class="comment-meta font-alt">Today, 14:59 -<span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star-off"></i></span><span><i class="fa fa-star star-off"></i></span>
                            </div>
                          </div>
                        </div> -->
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

                <div style="margin-top:-30px;" class="col-md-6 col-sm-12">
                  <div class="comment-form mt-30">
                    <h4 class="comment-form-title font-alt">Add review</h4>
                    <form method="post" action="php/Review_insert_code.php">
                      <div class="row">
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label style="text-transform: none;" class="sr-only" for="name">Name</label>
                            <input style="text-transform: none;" class="form-control" id="name" type="text" name="name"
                              placeholder="Name" />
                            <input class="form-control" id="P_id" type="hidden" name="P_id"
                              value="<?php echo $row['productid']; ?>" placeholder="Name" />
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label style="text-transform: none;" class="sr-only" for="email">Name</label>
                            <input style="text-transform: none;" class="form-control" id="email" type="text" name="email"
                              placeholder="E-mail" />
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <select name="Rating" class="form-control">
                              <option selected="true" disabled="">Rating</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="form-group">
                            <textarea style="text-transform: none;" class="form-control" id="" name="Review" rows="4"
                              placeholder="Review"></textarea>
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <button class="btn btn-round btn-d" type="submit">Submit Review</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

            <?php

              }
            } else {
              echo mysqli_error($conn);
            }
            ?>



        </div>
      </section>

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
        <div style="margin-top:-130px;" class="row">

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
      </div>

      <hr class="divider-w">



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