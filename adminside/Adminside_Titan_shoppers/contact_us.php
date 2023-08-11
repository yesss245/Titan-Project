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
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Contact Us</h3>
            </div>
            
            <div class="row">
              <div class="col-md-12  grid-margin stretch-card">
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
                              <h6 class="preview-subject"><?php echo $row9['Name']; ?><br><span style="font-weight: 200;"><a href="mailto: <?php echo $row9['Email_id']; ?>" style="text-decoration: none; color:#fff;"><?php echo $row9['Email_id']; ?></a></span></h6>
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
            

          </div>
          <!-- content- ends -->
          <?php include("Admin_titanfooter.php"); ?>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
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
    