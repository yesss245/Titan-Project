

<!-- < main head link etc> -->
<?php include("adminsidemainhead.php"); ?>
  <body>
    <div class="container-scroller">
     
      <!-- partial:partials/_sidebar.html -->
      <?php include("adminsidebar.php"); ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        
        <!-- partial:partials/_navbar.html -->
            <?php include("adminheader.php"); ?>

            <!-- <for logout code > -->
            <?php require("adminlogout.php"); ?>
            <!-- <div class="row">
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-3 grid-margin">
                        <img src="php/Photoes/AdminProfile/defaultimg.jpg">
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div> -->  

            

        <div  class="main-panel">
          <div  class="content-wrapper  page-body-wrapper full-page-wrapper">
            <?php

                  $conn=mysqli_connect("localhost","root","","titanshoppers");
                  $sql="SELECT * FROM order_user_info WHERE Randomorderid=".$_REQUEST['Rid'];
                  $result=mysqli_query($conn,$sql);
                  if ($result) {
                    while($row=mysqli_fetch_assoc($result)){
                    

                ?>
            <div style="justify-content: center;"  class=" content-wrapper full-page-wrapper d-flex align-items-center row">
              <div class=" col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body"> 

                    <div class="row">
                      <div class="col-md-10 col-sm-10">
                        <h2 style="margin-bottom:-5px;" class="text-muted font-weight-normal">
                          <?php echo $row['FullName']; ?></h2>
                        <br>
                        <span class="text-muted">Order No</span>
                        <br>
                        <h4 style="margin-bottom:-14px;" class="font-weight-normal">
                          <?php echo $row['Randomorderid']; ?></h4>
                        <br>
                        <span class="text-muted">Phone No</span>
                        <br>
                        <h4 style="margin-bottom:-14px;" class="font-weight-normal">
                          <?php echo $row['Phone_no']; ?>   
                        </h4>
                        <br>
                        <span class="text-muted">Order Date</span>
                        <br>
                        <h4 class="font-weight-normal">
                          <?php echo $row['Order_date']; ?>    
                        </h4>
                      </div>
                      <div class="col-md-2 col-sm-2">
                        <h4 class="text-muted font-weight-normal"><?php echo $row['User_name']; ?></h4>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6 col-sm-12">
                        <h5 style="letter-spacing: 1px; font-weight: 200;" class="mt-4 font-weight-normal">
                          <?php echo $row['FullName']; ?></h5>
                          <br >
                          <h5 style="letter-spacing: 1px; font-weight: 200; margin-top: -15px;" class=" font-weight-normal"><?php echo $row['House_no']; ?>,<?php echo $row['Area']; ?>,</h5>
                          <br>
                          <h5 style="letter-spacing: 1px; font-weight: 200; margin-top: -15px;" class=" font-weight-normal"><?php echo $row['Landmark']; ?>,</h5>
                          <br>
                          <h5 style="letter-spacing: 1px; font-weight: 200; margin-top: -15px;" class=" font-weight-normal"><?php echo $row['Town_city']; ?>-<?php echo $row['Pincode']; ?>,</h5>
                          <br>
                          <h5 style="letter-spacing: 1px; font-weight: 200; margin-top: -15px;" class=" font-weight-normal"><?php echo $row['State']; ?>,<?php echo $row['Country']; ?>,</h5>
                          <br>
                          <h5 style="letter-spacing: 1px; font-weight: 200; margin-top: -15px; " class="mb-5 font-weight-normal"> 
                           <span class="text-muted">Phone No -</span> <span><?php echo $row['Phone_no']; ?>.</span></h5>

                        
                      </div>

                      <div class="col-md-6 col-sm-12 text-right">
                        <h5 style="letter-spacing: 1px;" class="mt-4 font-weight-normal">
                          <?php echo $row['FullName']; ?>
                          <br >
                          <span class="text-muted">Payment Date </span><br> <span><?php echo $row['Payment_time_date']; ?></span>
                          <br>
                          <span class="text-muted">Payment Status </span><br> <span> <?php echo $row['Status']; ?></span>
                          

                        </h5>
                      </div>
                      
                  </div>

                    <div class="row">
                      <div class="col-md-12">

                        <table class="text-center table table-bordered" >
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th> Product Name </th>
                                      <th> Price </th>
                                      <th> Qty</th>
                                      <th>Total</th>
                                    </tr>
                                  </thead>

                                  <tbody>
                                    <?php
                                    $counter = 0;
                                      $sql2="SELECT * FROM user_order WHERE Randomorderid = '$row[Randomorderid]'";
                                      $result2=mysqli_query($conn,$sql2);
                                      while($row2=mysqli_fetch_assoc($result2))
                                      {
                                        ?>

                                        
                                              <tr style='color: #fff;'>
                                                <td><?php echo ++$counter; ?></td>
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
                                              <td  colspan='2' >Sub Total</td>
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
                                              <td colspan="4" align="right">GST 5%</td>
                                              <td>₹<?php echo "$tgst[0]"; ?>/-</td>
                                            </tr>

                                    <?php
                                      
                                     $tTotal_Price[0];
                                     $tgst[0];
                                     $sum=$tTotal_Price[0]+$tgst[0];


                                    ?>        

                                            <tr>
                                              <td colspan="4" align="right">Grand Total</td>
                                              <td>₹<?php echo "$sum"; ?>/-</td>
                                            </tr>       
                                  </tbody>
                                </table>
                        
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class=" print text-light mt-5 mb-5 text-center small"> <a class="text-light" target="_blank" href="userinvoice2.php?Rid=<?php echo $row['Randomorderid']; ?>"><button  id="printpagebutton" class="  btn btn-primary ">Print Original Invoice</button></a></div>
                        
                      </div>
                      
                    </div>


                  </div>
                </div>

              </div>


              
            </div>
            <?php  
          }
        }

            ?>

            </div> 
          </div>
        </div>


      </div>
      
      <!-- page-body-wrapper ends -->
    </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
<?php include("mianfooterscript.php"); ?>      