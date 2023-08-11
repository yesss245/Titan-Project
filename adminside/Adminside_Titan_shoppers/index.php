



<!-- < main head link etc> -->
<?php include("adminsidemainhead.php"); ?>

<?php

$Adminuserid=$_SESSION['Adminuser_id'];
if (!isset($Adminuserid)) {
  header('location:http://localhost/Titan-Project/adminside/Adminside_Titan_shoppers/Titanadminlogin.php');
};

?>
  <body style="overflow: hidden;">

    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <?php include("adminsidebar.php"); ?>

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
            <?php include("adminheader.php"); ?>

      
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <!-- <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                  <div class="card-body py-0 px-0 px-sm-3">
                    <div class="row align-items-center">
                      <div class="col-4 col-sm-3 col-xl-2">
                        <img src="assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt="">
                      </div>
                      <div class="col-5 col-sm-7 col-xl-8 p-0">
                        <h4 class="mb-1 mb-sm-0">Want even more features?</h4>
                        <p class="mb-0 font-weight-normal d-none d-sm-block">Check out our Pro version with 5 unique layouts!</p>
                      </div>
                      <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                        <span>
                          <a href="https://www.bootstrapdash.com/product/corona-admin-template/" target="_blank" class="btn btn-outline-light btn-rounded get-started-btn">Upgrade to PRO</a>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
            <div class="row">
              
                  <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                    <div class="card">
                      <a style="text-decoration: none; color: #fff;" href="user_tabel.php">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-9">
                              <div class="d-flex align-items-center align-self-start">
                                <h3 class="mb-0">Total User</h3>
                                <!-- <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p> -->
                              </div>
                            </div>
                             <div class="col-3">
                              <!-- <div class="icon icon-box-success ">
                                <span class="mdi mdi-arrow-top-right icon-item"></span>
                              </div> -->
                            </div> 
                          </div>
                          <?php

                          $conn=mysqli_connect("localhost","root","","titanshoppers");

                          $sql="SELECT userid FROM login ORDER BY userid";
                          $result=mysqli_query($conn,$sql);
                          $row=mysqli_num_rows($result);
                          echo "<h2 class='mt-3 text-muted font-weight-normal'>$row</h2>";

                          ?>
                        </div>
                      </a>
                    </div>
                  </div>
              
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <a style="text-decoration: none; color: #fff;" href="All_product.php">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">Total Product</h3>
                           <!--  <p class="text-success ml-2 mb-0 font-weight-medium">+11%</p> -->
                          </div>
                        </div>
                        <!-- <div class="col-3">
                          <div class="icon icon-box-success">
                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                          </div>
                        </div> -->
                      </div>

                      <?php

                      $conn=mysqli_connect("localhost","root","","titanshoppers");

                      $sql="SELECT productid FROM shopproduct ORDER BY productid";
                      $result=mysqli_query($conn,$sql);
                      $row=mysqli_num_rows($result);
                      echo "<h2 class='mt-3 text-muted font-weight-normal'>$row</h2>";

                      ?>

                      
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <a style="text-decoration: none; color: #fff;" href="http://localhost/Titan-Project/adminside/Adminside_Titan_shoppers/Male_product.php">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">Total Male Product</h3>
                           <!--  <p class="text-success ml-2 mb-0 font-weight-medium">+11%</p> -->
                          </div>
                        </div>
                        <!-- <div class="col-3">
                          <div class="icon icon-box-success">
                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                          </div>
                        </div> -->
                      </div>
                      <?php

                      $conn=mysqli_connect("localhost","root","","titanshoppers");

                      $sql1="SELECT * FROM shopproduct WHERE gender='M' ";
                      $resultgender=mysqli_query($conn,$sql1);
                      if ($rowgender=mysqli_num_rows($resultgender)) {
                        echo "<h2 class='mt-3 text-muted font-weight-normal'>$rowgender</h2>";
                      }
                     

                      ?>
                    </div>
                  </a>  
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <a style="text-decoration: none; color: #fff;" href="http://localhost/Titan-Project/adminside/Adminside_Titan_shoppers/Female_product.php">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">Total Femal Product</h3>
                           <!--  <p class="text-success ml-2 mb-0 font-weight-medium">+11%</p> -->
                          </div>
                        </div>
                        <!-- <div class="col-3">
                          <div class="icon icon-box-success">
                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                          </div>
                        </div> -->
                      </div>
                      <?php

                      $conn=mysqli_connect("localhost","root","","titanshoppers");

                      $sql1="SELECT * FROM shopproduct WHERE gender='F' ";
                      $resultgender=mysqli_query($conn,$sql1);
                      if ($rowgender=mysqli_num_rows($resultgender)) {
                        echo "<h2 class='mt-3 text-muted font-weight-normal'>$rowgender</h2>";
                      }
                     

                      ?>
                    </div>
                  </a>  
                </div>
              </div>
            </div>
            <!-- <div class="row">
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Transaction History</h4>
                    <canvas id="transaction-history" class="transaction-chart"></canvas>
                    <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                      <div class="text-md-center text-xl-left">
                        <h6 class="mb-1">Transfer to Paypal</h6>
                        <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>
                      </div>
                      <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                        <h6 class="font-weight-bold mb-0">$236</h6>
                      </div>
                    </div>
                    <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                      <div class="text-md-center text-xl-left">
                        <h6 class="mb-1">Tranfer to Stripe</h6>
                        <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>
                      </div>
                      <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                        <h6 class="font-weight-bold mb-0">$593</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                      <h4 class="card-title mb-1">Open Projects</h4>
                      <p class="text-muted mb-1">Your data status</p>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="preview-list">
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-primary">
                                <i class="mdi mdi-file-document"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Admin dashboard design</h6>
                                <p class="text-muted mb-0">Broadcast web app mockup</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">15 minutes ago</p>
                                <p class="text-muted mb-0">30 tasks, 5 issues </p>
                              </div>
                            </div>
                          </div>
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-success">
                                <i class="mdi mdi-cloud-download"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Wordpress Development</h6>
                                <p class="text-muted mb-0">Upload new design</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">1 hour ago</p>
                                <p class="text-muted mb-0">23 tasks, 5 issues </p>
                              </div>
                            </div>
                          </div>
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-info">
                                <i class="mdi mdi-clock"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Project meeting</h6>
                                <p class="text-muted mb-0">New project discussion</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">35 minutes ago</p>
                                <p class="text-muted mb-0">15 tasks, 2 issues</p>
                              </div>
                            </div>
                          </div>
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-danger">
                                <i class="mdi mdi-email-open"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Broadcast Mail</h6>
                                <p class="text-muted mb-0">Sent release details to team</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">55 minutes ago</p>
                                <p class="text-muted mb-0">35 tasks, 7 issues </p>
                              </div>
                            </div>
                          </div>
                          <div class="preview-item">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-warning">
                                <i class="mdi mdi-chart-pie"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">UI Design</h6>
                                <p class="text-muted mb-0">New application planning</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">50 minutes ago</p>
                                <p class="text-muted mb-0">27 tasks, 4 issues </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
            <!-- < total sale and revenue > -->
            <div class="row">
              <div class="col-xl-4 col-sm-12 grid-margin stretch-card">
                <div class="card">
                  <a style="text-decoration: none; color: #fff;" href="http://localhost/Titan-Project/adminside/Adminside_Titan_shoppers/Latest_product_tabel.php">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">Latest Product</h3>
                           <!--  <p class="text-success ml-2 mb-0 font-weight-medium">+11%</p> -->
                          </div>
                        </div>
                        <!-- <div class="col-3">
                          <div class="icon icon-box-success">
                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                          </div>
                        </div> -->
                      </div>
                      <?php

                      $conn=mysqli_connect("localhost","root","","titanshoppers");

                      $sql="SELECT Id FROM latestproduct ORDER BY Id";
                      $result=mysqli_query($conn,$sql);
                      $row=mysqli_num_rows($result);
                      echo "<h2 class='mt-3 text-muted font-weight-normal'>$row</h2>";

                      ?>
                    </div>
                  </a>                    
                </div>
              </div>
              <div class="col-xl-4 col-sm-12 grid-margin stretch-card">
                <div class="card">
                  <a style="text-decoration: none; color: #fff;" href="http://localhost/Titan-Project/adminside/Adminside_Titan_shoppers/Exclusive_product.php">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">Exclusive Product</h3>
                           <!--  <p class="text-success ml-2 mb-0 font-weight-medium">+11%</p> -->
                          </div>
                        </div>
                        <!-- <div class="col-3">
                          <div class="icon icon-box-success">
                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                          </div>
                        </div> -->
                      </div>
                      <?php

                      $conn=mysqli_connect("localhost","root","","titanshoppers");

                      $sql1="SELECT * FROM shopproduct WHERE exclusive_product='1' ";
                      $resultgender=mysqli_query($conn,$sql1);
                      if ($rowgender=mysqli_num_rows($resultgender)) {
                        echo "<h2 class='mt-3 text-muted font-weight-normal'>$rowgender</h2>";
                      }
                     

                      ?>
                    </div>
                  </a>  
                </div>
              </div>

              <div class="col-xl-4 col-sm-12 grid-margin stretch-card">
                <div class="card">
                  <a style="text-decoration: none; color: #fff;" href="All_product.php">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">Regulur Product</h3>
                           <!--  <p class="text-success ml-2 mb-0 font-weight-medium">+11%</p> -->
                          </div>
                        </div>
                        <!-- <div class="col-3">
                          <div class="icon icon-box-success">
                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                          </div>
                        </div> -->
                      </div>
                      <?php

                      $conn=mysqli_connect("localhost","root","","titanshoppers");

                      $sql1="SELECT * FROM shopproduct WHERE exclusive_product='0' ";
                      $resultgender=mysqli_query($conn,$sql1);
                      if ($rowgender=mysqli_num_rows($resultgender)) {
                        echo "<h2 class='mt-3 text-muted font-weight-normal'>$rowgender</h2>";
                      }
                     

                      ?>
                    </div>
                  </a>  
                </div>
              </div>

            </div>

            <!-- <order status> -->

            <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h2 class="card-title">Order Status</h2>
                    <div style="width:100%;" class="">
                      <table style="width:100%;"  class="text-center table " id="myTable" >
                        <thead>

                          <tr>
                            <td colspan="7">
                              <ul class="navbar-nav w-100">
                                <li class="nav-item w-100">
                                  <form  class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                                    <input type="text"  id="searchBox" onkeyup="performSearch()"  class="form-control" placeholder="Search">
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
                        <tbody >

                         <?php

                          $conn=mysqli_connect("localhost","root","","titanshoppers");
                          $sql="SELECT * FROM order_user_info  ORDER BY `Order_id` DESC";
                          $result=mysqli_query($conn,$sql);
                          while($row=mysqli_fetch_assoc($result))
                          {

                         ?>

                          <tr id="tr" style="display: none;" class="blogBox moreBox" >
                            <!-- <td>
                              <div class="form-check form-check-muted m-0">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">
                                </label>
                              </div>
                            </td> -->
                            <td><?php echo $row['Order_id']; ?><input type="hidden" name="orderid" value="<?php echo $row['Order_id']; ?>"></td>
                            <td ><!-- <a style="text-decoration:none; color:#6c7293;" href="userorderinvoice.php?Rid=<?php echo $row['Randomorderid']; ?>"> -->
                              <a style="text-decoration:none; color:#6c7293;" href="User_order_profile.php?Rid=<?php echo $row['Randomorderid']; ?>">
                                <?php echo $row['Randomorderid']; ?>
                              </a>
                            </td>
                            <td ><?php echo $row['Order_date']; ?></td>
                            <td>
                              <span class="pl-2"><?php echo $row['FullName']; ?> </span>
                            </td>                        
                            <td> <?php echo $row['Phone_no']; ?> </td>
                            <!-- <td class="text-left" id="orderid"><?php echo $row['House_no']; ?>,
                              <?php echo $row['Area']; ?>,<br>
                              <?php echo $row['Landmark']; ?>,<br>
                              <?php echo $row['Town_city']; ?><br>
                              <?php echo $row['State']; ?><br>
                              <?php echo $row['Country']; ?>,<br>
                              <?php echo $row['Pincode']; ?>.  </td>-->
                            <td>
                              <table style="width:100%;"  class=" text-center  table-bordered" >
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

                                    $sql2="SELECT * FROM user_order WHERE Randomorderid = '$row[Randomorderid]'";
                                    $result2=mysqli_query($conn,$sql2);
                                    while($row2=mysqli_fetch_assoc($result2))
                                    {
                                      ?>
                                      
                                            <tr style='color: #fff;'>
                                              
                                              <td> <?php echo $row2['Product_Name']; ?></td>
                                              <td>₹<?php echo$row2['Price']; ?>/-</td>
                                              <td><?php echo$row2['Quantity']; ?></td>
                                              <td>₹<?php echo$row2['Total_Price']; ?>/-</td>
                                            </tr>
                                        <?php
                                    }

                                  ?>
                                
                                  <?php
                                    $sql3 = "select sum(Price)from user_order where Randomorderid = '$row[Randomorderid]'";
                                    $qPrice = mysqli_query($conn,$sql3);
                                    $tprice = mysqli_fetch_array($qPrice);
                                  ?>
                                          <tr >
                                            <td  colspan='' >Sub Total</td>
                                            <td>₹<?php echo "$tprice[0]"; ?>/-</td>                                          
                                          
                                  <?php
                                    $sql4 = "select sum(Quantity) from user_order where Randomorderid = '$row[Randomorderid]'";
                                    $qQuantity = mysqli_query($conn,$sql4);
                                    $tQuantity = mysqli_fetch_array($qQuantity);
                                  ?>
                                          <td><?php echo "$tQuantity[0]"; ?></td>
                                  <?php
                                    $sql5 = "select sum(Total_Price) from user_order where Randomorderid = '$row[Randomorderid]'";
                                    $qTotal_Price = mysqli_query($conn,$sql5);
                                    $tTotal_Price = mysqli_fetch_array($qTotal_Price);
                                  ?>
                                          <td>₹<?php echo "$tTotal_Price[0]"; ?>/-</td>
                                        </tr>

                                  <?php
                                   $sql6 = "select sum(Gst)from user_order where Randomorderid = '$row[Randomorderid]'";
                                    $qgst = mysqli_query($conn,$sql6);
                                    $tgst = mysqli_fetch_array($qgst);


                                  ?>
                                          <tr>
                                            <td colspan="3" align="right">GST 5%</td>
                                            <td>₹<?php echo "$tgst[0]"; ?>/-</td>
                                          </tr>

                                  <?php
                                    
                                   $tTotal_Price[0];
                                   $tgst[0];
                                   $sum=$tTotal_Price[0]+$tgst[0];


                                  ?>        

                                          <tr>
                                            <td colspan="3" align="right">Grand Total</td>
                                            <td>₹<?php echo "$sum"; ?>/-</td>
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
                        <button align="center" id="loadMore" type="button" class="btn btn-secondary btn-fw">Load More</button>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h2>Sales</h2>
                    <h4>Total Recevie Payment</h4>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <?php
                            $conn=mysqli_connect("localhost","root","","titanshoppers");
                            $sql6 = "select sum(Total_Price + Gst)from user_order";
                            $Grandtotal = mysqli_query($conn,$sql6);
                                            $totalrecevivepayment = mysqli_fetch_array($Grandtotal);
                          ?>
                          <h2 class="mb-0"><?php echo "₹".$totalrecevivepayment[0]. "/-"; ?></h2>
                          <p class="text-success ml-2 mb-0 font-weight-medium">+8.3%</p>
                        </div>
                        <h6 class="text-muted font-weight-normal"> 9.61% Since last month</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-wallet-travel text-danger ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-8  grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                      <h4 class="card-title">Messages</h4>
                      <p class="text-muted mb-1 small">View all</p>
                    </div>
                    <?php

                          $conn=mysqli_connect("localhost","root","","titanshoppers");
                          $sql9="SELECT * FROM `contact_us` ORDER BY `Id` DESC";
                          $result9=mysqli_query($conn,$sql9);
                          if ($result9)
                          {                        
                          while($row9=mysqli_fetch_assoc($result9))
                          {


                      ?>
                    <div class="preview-list">

                      <div style="display: none;" class="blogBox1 moreBox1 preview-item border-bottom">
                        <!-- <div class="preview-thumbnail">
                          <img src="assets/images/faces/face6.jpg" alt="image" class="rounded-circle" />
                        </div> -->
                        <div  class="preview-item-content d-flex flex-grow  " >
                          <div class="flex-grow">
                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                              <h6 class="preview-subject"><?php echo $row9['Name']; ?><br><span style="font-weight: 200;"><?php echo $row9['Email_id']; ?></span></h6>
                              <p class="text-muted text-small"><?php echo $row9['Date_Time']; ?></p>
                            </div>
                            <p class="text-muted"><?php echo $row9['message']; ?></p>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                    <?php

                         }
                        }

                      ?>
                      <button style=" margin-top: 10px; " align="center" id="loadMore1" type="button" class="btn btn-secondary ">Load More</button>
                      
                  </div>

                </div>

              </div>
                      
                        
                       
            </div>

            <?php include("category_p.php"); ?>

            
          </div>
          
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">&copy; 2023&nbsp;Titan Shoppers All Rights Reserved</span>
              
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="load-more-button.css" rel="stylesheet"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="load-more-button.js"></script>

                      <script>
                            $( document ).ready(function () {
                            $(".moreBox1").slice(0, 5).show();
                              if ($(".blogBox1:hidden").length != 0) {
                                $("#loadMore1").show();
                              }   
                              $("#loadMore1").on('click', function (e) {
                                e.preventDefault();
                                $(".moreBox1:hidden").slice(0, 4).slideDown();
                                if ($(".moreBox1:hidden").length == 0) {
                                  $("#loadMore1").fadeOut('slow');
                                }
                              });
                            });
                      </script>

                      <!-- <for last message contact> -->
                      <script>
                            $( document ).ready(function () {
                            $(".moreBox").slice(0, 2).show();
                              if ($(".blogBox:hidden").length != 0) {
                                $("#loadMore").show();
                              }   
                              $("#loadMore").on('click', function (e) {
                                e.preventDefault();
                                $(".moreBox:hidden").slice(0, 4).slideDown();
                                if ($(".moreBox:hidden").length == 0) {
                                  $("#loadMore").fadeOut('slow');
                                }
                              });
                            });
                      </script>

                      
                      <?php include("All_tabel_main_search_code.php"); ?>
    <?php include("mianfooterscript.php"); ?>
    