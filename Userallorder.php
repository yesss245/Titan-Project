<?php include("connection.php"); ?>
<!-- ----------------MAIN HEADER---------------- -->
<?php include("mainhead.php"); ?>

<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
  <main>
    <!-- ----------------STYLE---------------- -->
    <style>
      .border {
        border: 2px solid #eaeaea;
        border-radius: 20px;
      }

      .left {
        text-align: right;

      }

      .black {
        color: #000;
        margin-right: 0;
        font-weight: 600;
      }
    </style>
    <!-- ----------------STYLE---------------- -->

    <!-- ----------------HEADER---------------- -->
    <?php include("header.php"); ?>
    <!-- ----------------MAINDIV---------------- -->
    <div class="main">
      <section class="module">
        <div class="container">

          <?php
          //$conn=mysqli_connect("localhost","root","","titanshoppers");
          
          $sql = "SELECT * FROM order_user_info  WHERE User_id =" . $_REQUEST['orderId'];

          $result = mysqli_query($conn, $sql);
          if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {

              ?>
              <!-- 1--------------------------- -->
              <div class="row">
                <div class=" col-sm-8 col-sm-offset-2">
                  <hr class="divider-w  mb-30">
                  <div class="border examples bg-white">
                    <p class="btn-list mb-0">
                    <div class="row">
                      <div class="col-sm-12 col-md-6">
                        <h5 class="font-weight-bold black">
                          <?php echo $row['FullName']; ?>
                        </h5>
                        <h6>ORDER #
                          <span class="black">
                            <?php echo $row['Randomorderid']; ?>
                          </span>
                        </h6>
                      </div>
                      <div class="col-md-6 mt-10 ">
                        <h6>ORDER PLACED -
                          <span class="black">
                            <?php echo $row['Order_date']; ?>
                          </span>
                        </h6>
                      </div>
                    </div>
                    <!-- 2--------------------------- -->
                    <div class="row">
                      <div class="col-sm-12 col-md-12">
                        <table class="table">
                          <thead>
                            <tr>
                              <th class="black border-0 text-uppercase small font-weight-bold">ID</th>
                              <th class="black border-0 text-uppercase small font-weight-bold">Item</th>
                              <th class="black border-0 text-uppercase small font-weight-bold">Quantity</th>
                              <th class="black border-0 text-uppercase small font-weight-bold">Unit Cost</th>
                              <th class="black border-0 text-uppercase small font-weight-bold">Total</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            $counter = 0;
                            //$conn=mysqli_connect("localhost","root","","titanshoppers");
                            $orderdetailsquery = "SELECT * FROM user_order WHERE Randomorderid = '$row[Randomorderid]'";
                            $orderresult = mysqli_query($conn, $orderdetailsquery);
                            if ($orderresult) {
                              while ($orderrow = mysqli_fetch_assoc($orderresult)) {
                                ?>
                                <tr>
                                  <td>
                                    <?php echo ++$counter; ?>
                                  </td>
                                  <td>
                                    <?php echo $orderrow['Product_Name']; ?>
                                  </td>

                                  <td>
                                    <?php echo $orderrow['Quantity']; ?>
                                  </td>
                                  <td>₹
                                    <?php echo $orderrow['Price']; ?>/-
                                  </td>
                                  <td>₹
                                    <?php echo $orderrow['Total_Price']; ?>/-
                                  </td>
                                </tr>
                                <?php

                              }
                            }


                            ?>
                          </tbody>
                          <tfoot>
                            <tr>
                              <th colspan="1" class="text-right text-uppercase small font-weight-bold"></th>
                              <th class="black text-uppercase small font-weight-bold">Total</th>
                              <?php
                              $sql4 = "select sum(Quantity) from user_order WHERE Randomorderid='$row[Randomorderid]'";
                              $qQuantity = mysqli_query($conn, $sql4);
                              $tQuantity = mysqli_fetch_array($qQuantity);
                              ?>
                              <th class="black text-uppercase small font-weight-bold">
                                <?php echo "$tQuantity[0]"; ?>
                              </th>

                              <?php
                              $sql6 = "select sum(Price) from user_order WHERE Randomorderid='$row[Randomorderid]'";
                              $pTotal_Price = mysqli_query($conn, $sql6);
                              $pTotal_Price = mysqli_fetch_array($pTotal_Price);
                              ?>
                              <th class="black text-uppercase small font-weight-bold">₹
                                <?php echo "$pTotal_Price[0]"; ?>/-
                              </th>

                              <?php
                              $sql5 = "select sum(Total_Price) from user_order WHERE Randomorderid='$row[Randomorderid]'";
                              $qTotal_Price = mysqli_query($conn, $sql5);
                              $tTotal_Price = mysqli_fetch_array($qTotal_Price);
                              ?>
                              <th class="black text-uppercase small font-weight-bold">₹
                                <?php echo "$tTotal_Price[0]"; ?>/-
                              </th>

                            </tr>
                          </tfoot>
                        </table>
                      </div>
                    </div>
                    <!-- 2----------------END---------------- -->


                    </p>
                  </div>
                </div>
              </div>
              <!-- 1----------------END---------------- -->
              <?php
            }
          }
          ?>
        </div>
      </section>
    </div>
    <!-- ----------------MAINDIV---------------- -->
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