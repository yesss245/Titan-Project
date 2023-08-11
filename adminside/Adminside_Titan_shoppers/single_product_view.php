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

              <div  class="main-panel">
                <div   class="content-wrapper  ">

                  <?php

                    $conn=mysqli_connect("localhost","root","","titanshoppers");
                    $sql="SELECT * FROM shopproduct WHERE productid=".$_REQUEST['Review'];
                    $result=mysqli_query($conn,$sql);
                    if ($result) {
                      while($row=mysqli_fetch_assoc($result))
                      {
                        $pro_img = json_decode($row['img'],true);
                        $count = count($pro_img); 

                  ?>
                  
                    <div style="justify-content: center;" class="row">
                      <div class=" col-md-8 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-5">
                                <?php

                                    if($row['img'] == '')
                                     {
                                        echo '<img style="height:150px; width:150px; object-fit: cover;" src="php/Photoes/AdminProfile/defaultimg.jpg">';
                                     }
                                     else
                                     {
                                      ?>
                                      <a href="php/Photoes/<?php echo $row['productname'].$pro_img[0];?>">
                                      <?php
                                      echo '<img style="height:auto; width:150px; object-fit: cover;" src="php/Photoes/'.$row['productname'].$pro_img[0].'">';
                                     }
                                     


                               ?>   
                                      </a> 
                              </div>
                              <div class="col-md-7">
                                <div class="row">
                                  <div class="col-md-6"> 
                                      <h4 class="mt-2  text-muted">Product Name :</h4>
                                  </div>
                                  <div class="col-md-6"> 
                                      <h4 class="mt-2 "><?php echo $row['productname'];  ?></h4>
                                  </div>         
                                </div>
                                <div class="row">
                                  <div class="col-md-6"> 
                                      <h4 class="mt-2  text-muted">Brand :</h4>
                                  </div>
                                  <div class="col-md-6"> 
                                      <h4 class="mt-2 "><?php echo $row['Brand'];  ?></h4>
                                  </div>         
                                </div>
                                <div class="row">
                                  <div class="col-md-6"> 
                                      <h4 class="mt-2  text-muted">Type :</h4>
                                  </div>
                                  <div class="col-md-6">
                                        <?php

                                            $conn=mysqli_connect("localhost","root","","titanshoppers");
                                            $sql1="SELECT * FROM `product_category_id` WHERE Id = '$row[productcategoryid]' ";
                                            $result1=mysqli_query($conn,$sql1);
                                            if ($result1)
                                            {                        
                                            while($row1=mysqli_fetch_assoc($result1))
                                            {


                                        ?>
                                      <h4 class="mt-2  "><?php echo $row1['product_title'];  ?></h4>
                                        <?php 
                                            }
                                          }
                                        ?>
                                  </div>         
                                </div>
                                <div class="row">
                                  <div class="col-md-6"> 
                                      <h4 class="mt-2  text-muted">Product Id :</h4>
                                  </div>
                                  <div class="col-md-6"> 
                                      <h4 class="mt-2  "><?php echo $row['productid'];  ?></h4>
                                  </div>         
                                </div>
                                <div class="row">
                                  <div class="col-md-6"> 
                                      <h4 class="mt-2  text-muted">Gender :</h4>
                                  </div>
                                  <div class="col-md-6"> 
                                      <h4 class="mt-2  "><?php echo $row['gender'];  ?></h4>
                                  </div>         
                                </div>
                                <div class="row">
                                  <div class="col-md-6"> 
                                      <h4 class="mt-2 text-muted">Rate :</h4>
                                  </div>
                                  <div class="col-md-6"> 
                                      <h4 class="mt-2  ">₹&nbsp;<?php echo $row['rate']; ?>/-</h4>
                                  </div>         
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <h4 class="mt-2 text-muted">Other Images :</h4>
                                  </div>
                                  <div class="col-md-6">
                                    <style>
                                      .product-gallery 
                                      {
                                        list-style: none;
                                        padding: 0;
                                        width: 100%;
                                      }

                                      .product-gallery li {
                                        display: inline-block;
                                        width: 45%;
                                       
                                      }
                                    </style>
                                    <div class="col-md-6"> 
                                      <ul class="product-gallery">
                                          <?php 

                                            for($i=0 ;$i<$count;$i++)
                                            {
                                          ?>
                                              <li >
                                                  <img style="width:100%; object-fit: cover;" src="php/Photoes/<?php echo $row['productname'].$pro_img[$i];?>" alt="Single Product"/>
                                                </a>
                                              </li>

                                          <?php  
                                            } 
                                          ?> 
                                      </ul>
                                    </div>
                                  </div>
                                  
                                </div>      
                              </div> 

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    

                    <div style="justify-content: center;" class="row">
                      <div class=" col-md-8 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body">
                            <h3>Product Review</h3>

                            <div>
                              <?php

                                  $conn=mysqli_connect("localhost","root","","titanshoppers");
                                  $sql9="SELECT * FROM `rating` WHERE Product_id = '$row[productid]' ORDER BY `Id` DESC";
                                  $result9=mysqli_query($conn,$sql9);
                                  if ($result9)
                                  {                        
                                  while($row9=mysqli_fetch_assoc($result9))
                                  {


                              ?>
                      
                              <div class="preview-list">

                                <div style="display:none;" class="blogBox1 moreBox1 preview-item border-bottom">
                                  <!-- <div class="preview-thumbnail">
                                    <img src="assets/images/faces/face6.jpg" alt="image" class="rounded-circle" />
                                  </div> -->
                                  <div  class="preview-item-content d-flex flex-grow  " >
                                    <div class="flex-grow">
                                      <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                        <h6 class="preview-subject"><?php echo $row9['Name']; ?><br><span style="font-weight: 200;"><?php echo $row9['Email']; ?></span></h6>
                                        <p class="text-muted text-small"><?php echo $row9['Date_time']; ?></p>
                                      </div>
                                      <p class="text-muted"><?php echo $row9['Review']; ?></p>
                                      <p class="text-muted"><?php echo $row9['Rating_number']; ?>&nbsp;<i style="color:yellow;" class="fa fa-star star"></i></p>
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
                    </div>

                    <?php  
          }
        }

            ?>
                </div>
              </div>


            






            
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <?php include("Admin_titanfooter.php"); ?>
    <!-- container-scroller -->
    <!-- plugins:js -->
<?php include("mianfooterscript.php"); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="load-more-button.js"></script>

                      <script>
                            $( document ).ready(function () {
                            $(".moreBox1").slice(0, 2).show();
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