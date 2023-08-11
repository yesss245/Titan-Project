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
              <h3 class="page-title">Users Information</h3>
            </div>
            <div class="row">
                  <div class="col-xl-4 col-sm-4 grid-margin stretch-card">
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

                  <div class="col-xl-4 col-sm-4 grid-margin stretch-card">
                    <div class="card">
                      <a style="text-decoration: none; color: #fff;" href="Male_user_tabel.php">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-9">
                              <div class="d-flex align-items-center align-self-start">
                                <h3 class="mb-0">Total Male User</h3>
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

                          $sql="SELECT userid FROM login WHERE Gender='M' ORDER BY userid";
                          $result=mysqli_query($conn,$sql);
                          $row=mysqli_num_rows($result);
                          echo "<h2 class='mt-3 text-muted font-weight-normal'>$row</h2>";

                          ?>
                        </div>
                      </a>
                    </div>
                  </div>

                  <div class="col-xl-4 col-sm-4 grid-margin stretch-card">
                    <div class="card">
                      <a style="text-decoration: none; color: #fff;" href="Female_user_tabel.php">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-9">
                              <div class="d-flex align-items-center align-self-start">
                                <h3 class="mb-0">Total Female User</h3>
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

                          $sql="SELECT userid FROM login WHERE Gender='F' ORDER BY userid";
                          $result=mysqli_query($conn,$sql);
                          $row=mysqli_num_rows($result);
                          echo "<h2 class='mt-3 text-muted font-weight-normal'>$row</h2>";

                          ?>
                        </div>
                      </a>
                    </div>
                  </div>
            </div>
            
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Users</h4>
                    
                    <div class="table-responsive">
                      <table class="table" >
                        <div  class="row center">
                            <?php

                            if (isset($_SESSION['userid'])) 
                            {
                              ?>
                              <div  class="alert alert-success" role="alert"><h5 style="align-items: center; justify-content: center; display: flex;"><strong>Hey!</strong> <?php  echo $_SESSION['userid']; ?></h5></div>
                              <?php
                             
                              unset($_SESSION['userid']);
                            }

                            ?>
                        </div>
                        <thead >
                          <tr>
                            <th>NO</th>
                            <th>Iage.</th>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Email</th>
                            <th>Phoneno</th>
                            <!-- <th>Edit</th> -->
                            <th>Remove</th>
                          </tr>
                        </thead>
                        <!-- <For delete code> -->
                        

                        <?php

                          $conn =mysqli_connect("localhost","root","","titanshoppers")or die("could not connect");
                          $sql="SELECT * FROM login";
                          $result=mysqli_query($conn,$sql);
                          if ($result) 
                            {
                            while ($row=mysqli_fetch_array($result)) 

                              {
                        ?>
                        <tbody>
                          <tr>
                            <td>
                              <a style="text-decoration:none; color:#6c7293;" href="user_profile.php?UID">
                              <?php echo $row['userid']; ?>
                              </a>
                            </td>
                            <td>
                              <a style="object-fit: cover;" href="php/Photoes/UserProfile/<?php echo $row['img'];?>">
                                <img style="object-fit: cover;" class="r" style=" height: 10vh; width:auto; border-radius: 50%;" src="php/Photoes/UuserProfile/<?php echo $row['img'];?>">
                              </a>
                            </td>
                            <td>
                              <?php echo $row['Username']; ?>
                              
                            </td>
                            <td>
                              <?php echo $row['Fname']; ?>
                              </td>
                            <td>
                              <?php echo $row['Gender']; ?>
                            </td>
                            <td>
                              <?php echo $row['Email']; ?>
                            </td>
                            <td>
                              <?php echo $row['Phoneno']; ?>
                            </td>
                            <!-- <td><button type="button" class="btn btn-success btn-md">Edit</button></td> -->
                            <td>
                              <a href="Delete/user_delete.php?userpid='<?php echo $row['userid'];?>'">
                                <button type="button" class="btn btn-danger btn-md">Delete
                                </button>
                              </a>
                            </td>
                          </tr>
                        </tbody>
                        <?php
                                  }
                          }
                          else
                          {
                            echo mysqli_error($conn);
                          } 


                        ?>

                        <tfoot>
                          <tr>
                            <th>NO</th>
                            <th>Iage.</th>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Email</th>
                            <th>Phoneno</th>
                            <!-- <th>Edit</th> -->
                            <th>Remove</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
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
     <?php include("mianfooterscript.php"); ?>
    