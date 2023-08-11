<!-- < main head link etc> -->
<?php include("adminsidemainhead.php"); ?>

<body>
    <div class="container-scroller">\
        <!-- partial:partials/_sidebar.html -->
        <?php include("adminsidebar.php"); ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <?php include("adminheader.php"); ?>
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row ">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="card-title">Order Status</h2>
                                    <div style="width:100%;" class="">
                                        <table style="width:100%;" class="text-center table " id="myTable">
                                            <thead>

                                                <tr>
                                                    <td colspan="7">
                                                        <ul class="navbar-nav w-100">
                                                            <li class="nav-item w-100">
                                                                <form
                                                                    class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                                                                    <input type="text" id="searchBox"
                                                                        onkeyup="performSearch()" class="form-control"
                                                                        placeholder="Search">
                                                                    <!-- <button type="submit" class="btn btn-success btn-md">btn-md</button> -->
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <!-- <th>
                              <div class="form-check form-check-muted m-0">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">
                                </label>
                              </div>
                            </th> -->
                                                    <th> No </th>
                                                    <th> Order Id </th>
                                                    <th> Order Date </th>
                                                    <th> Client Name </th>
                                                    <th> Phone.no </th>
                                                    <!-- <th> Adress</th> -->
                                                    <th>Orders</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php

                                                $conn = mysqli_connect("localhost", "root", "", "titanshoppers");
                                                $sql = "SELECT * FROM order_user_info  ORDER BY `Order_id` DESC";
                                                $result = mysqli_query($conn, $sql);
                                                while ($row = mysqli_fetch_assoc($result)) {

                                                    ?>

                                                    <tr id="tr" style="display: none;" class="blogBox moreBox">
                                                        <!-- <td>
                              <div class="form-check form-check-muted m-0">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">
                                </label>
                              </div>
                            </td> -->
                                                        <td>
                                                            <?php echo $row['Order_id']; ?><input type="hidden"
                                                                name="orderid" value="<?php echo $row['Order_id']; ?>">
                                                        </td>
                                                        <td><!-- <a style="text-decoration:none; color:#6c7293;" href="userorderinvoice.php?Rid=<?php echo $row['Randomorderid']; ?>"> -->
                                                            <a style="text-decoration:none; color:#6c7293;"
                                                                href="User_order_profile.php?Rid=<?php echo $row['Randomorderid']; ?>">
                                                                <?php echo $row['Randomorderid']; ?>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['Order_date']; ?>
                                                        </td>
                                                        <td>
                                                            <span class="pl-2">
                                                                <?php echo $row['FullName']; ?>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['Phone_no']; ?>
                                                        </td>
                                                        <!-- <td class="text-left" id="orderid"><?php echo $row['House_no']; ?>,
                              <?php echo $row['Area']; ?>,<br>
                              <?php echo $row['Landmark']; ?>,<br>
                              <?php echo $row['Town_city']; ?><br>
                              <?php echo $row['State']; ?><br>
                              <?php echo $row['Country']; ?>,<br>
                              <?php echo $row['Pincode']; ?>.  </td>-->
                                                        <td>
                                                            <table style="width:100%;" class=" text-center  table-bordered">
                                                                <thead>
                                                                    <tr>

                                                                        <th>Product Name </th>
                                                                        <th>Price </th>
                                                                        <th>Qty</th>
                                                                        <th>Total</th>
                                                                    </tr>
                                                                </thead>

                                                                <tbody>
                                                                    <?php

                                                                    $sql2 = "SELECT * FROM user_order WHERE Randomorderid = '$row[Randomorderid]'";
                                                                    $result2 = mysqli_query($conn, $sql2);
                                                                    while ($row2 = mysqli_fetch_assoc($result2)) {
                                                                        ?>

                                                                        <tr style='color: #fff;'>

                                                                            <td>
                                                                                <?php echo $row2['Product_Name']; ?>
                                                                            </td>
                                                                            <td>₹
                                                                                <?php echo $row2['Price']; ?>/-
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $row2['Quantity']; ?>
                                                                            </td>
                                                                            <td>₹
                                                                                <?php echo $row2['Total_Price']; ?>/-
                                                                            </td>
                                                                        </tr>
                                                                        <?php
                                                                    }

                                                                    ?>

                                                                    <?php
                                                                    $sql3 = "select sum(Price)from user_order where Randomorderid = '$row[Randomorderid]'";
                                                                    $qPrice = mysqli_query($conn, $sql3);
                                                                    $tprice = mysqli_fetch_array($qPrice);
                                                                    ?>
                                                                    <tr>
                                                                        <td colspan=''>Sub Total</td>
                                                                        <td>₹
                                                                            <?php echo "$tprice[0]"; ?>/-
                                                                        </td>

                                                                        <?php
                                                                        $sql4 = "select sum(Quantity) from user_order where Randomorderid = '$row[Randomorderid]'";
                                                                        $qQuantity = mysqli_query($conn, $sql4);
                                                                        $tQuantity = mysqli_fetch_array($qQuantity);
                                                                        ?>
                                                                        <td>
                                                                            <?php echo "$tQuantity[0]"; ?>
                                                                        </td>
                                                                        <?php
                                                                        $sql5 = "select sum(Total_Price) from user_order where Randomorderid = '$row[Randomorderid]'";
                                                                        $qTotal_Price = mysqli_query($conn, $sql5);
                                                                        $tTotal_Price = mysqli_fetch_array($qTotal_Price);
                                                                        ?>
                                                                        <td>₹
                                                                            <?php echo "$tTotal_Price[0]"; ?>/-
                                                                        </td>
                                                                    </tr>

                                                                    <?php
                                                                    $sql6 = "select sum(Gst)from user_order where Randomorderid = '$row[Randomorderid]'";
                                                                    $qgst = mysqli_query($conn, $sql6);
                                                                    $tgst = mysqli_fetch_array($qgst);


                                                                    ?>
                                                                    <tr>
                                                                        <td colspan="3" align="right">GST 5%</td>
                                                                        <td>₹
                                                                            <?php echo "$tgst[0]"; ?>/-
                                                                        </td>
                                                                    </tr>

                                                                    <?php

                                                                    $tTotal_Price[0];
                                                                    $tgst[0];
                                                                    $sum = $tTotal_Price[0] + $tgst[0];


                                                                    ?>

                                                                    <tr>
                                                                        <td colspan="3" align="right">Grand Total</td>
                                                                        <td>₹
                                                                            <?php echo "$sum"; ?>/-
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>

                                                    </tr>

                                                    <?php
                                                }
                                                ?>

                                            </tbody>
                                        </table>

                                        <div align="center">
                                            <button align="center" id="loadMore" type="button"
                                                class="btn btn-secondary btn-fw">Load More</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <?php include("Admin_titanfooter.php"); ?>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <?php include("mianfooterscript.php"); ?>