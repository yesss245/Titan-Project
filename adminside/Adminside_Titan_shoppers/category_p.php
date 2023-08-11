          

                    

                      <div class="row">
                        <?php

                          $conn=mysqli_connect("localhost","root","","titanshoppers");
                          $sql="SELECT * FROM product_category_id ";
                          $result=mysqli_query($conn,$sql);
                          while($row=mysqli_fetch_assoc($result))
                          {

                         ?>
                         
                          <div class="col-xl-3 col-sm-12 grid-margin stretch-card">
                            <div class="card">
                              <a style="text-decoration: none; color: #fff;" href="category_table.php?tpid=<?php echo $row['Id'] ?>">
                                <div class="card-body">
                                  
                                  <div class="row">
                                    <div class="col-9">
                                      <div class="d-flex align-items-center align-self-start">
                                        <h3 class="mb-0">
                                          
                                            <?php echo $row['product_title']; ?>
                                          
                                        </h3>
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

                                    $sql1="SELECT * FROM shopproduct WHERE productcategoryid= '$row[Id]' ";
                                    $resultgender=mysqli_query($conn,$sql1);
                                    if ($rowgender=mysqli_num_rows($resultgender)) {
                                      echo "<h2 class='mt-3 text-muted font-weight-normal'>$rowgender</h2>";
                                    }
                                    else{
                                      echo "<h2 class='mt-3 text-muted font-weight-normal'>0</h2>";
                                    }
                                   

                                    ?> 
                                </div>
                              </a>                    
                            </div>
                          </div>
                        
                        <?php } ?>
                      </div>
                  