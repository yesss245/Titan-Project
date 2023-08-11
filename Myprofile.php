<?php

session_start(); 
$conn = mysqli_connect('localhost','root','','titanshoppers') or die('connection failed');
$user_name=$_SESSION['user_name'];
$user_id=$_SESSION['user_id'];
//$user_name =$_SESSION['user_name'];
if(!isset($user_id)){
   header('location:exlogin.php');
};



?>




   
  <link rel="stylesheet" type="text/css" href="assets/css/myprofilestyle.css">
 <?php include("mainhead.php"); ?>
  
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>

      
      
      <div class="page-loader">
    <div class="loader">Loading...</div>
  </div>

  <nav class="navbar navbar-custom navbar-fixed-top " role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a style="font-family: 'OCR A Extended', sans-serif;" class="navbar-brand " href="home_shop.php" ><span class="border">Titan Shoppers</span></a>
          </div>
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">

              <!-- <li class="nav-border-hover">

                    
                  
                    <form role='form' style="margin-top:10px">
                    <input style="margin-top:10px; background: none;border: none; border-bottom: 1px solid #fff;" class="searchbar form-control"   type='text', placeholder='Search...'>
                  
                   <button style=" color: #fff; margin-top: -15px;" class="search-btn" type='submit'>
                    <i class="fa fa-search"></i>
                   </button>
                   </form>
                    
              </li> -->
              <!-- <style>
                   a.border:hover{
                    border: 1px solid #fff;
                    border-radius: 2px;
                    margin-bottom: -1px;
                    height: 15px;


                    
                  }
              </style> -->
              <li ><a class="border" href="home_shop.php"><span >Home</span></a>
               
              </li>

              <li><a class="border" href="shop_product.php"><span class="border">Shop</span></a>
                
              </li>

              <li ><a class="border"  href="pricing1.php" ><span class="border">Membership</span></a>
                
              </li>

              <li ><a class="border" href="service2.php" ><span class="border">Service</span></a>
                
              </li>

              <li><a class="border"  href="contact.php" ><span class="border">Contact</span></a>
                
              </li>

              <li><a  class="border" href="about5.php" ><span class="border">About</span></a>
                
              </li>

                    <?php
                         if (isset($_SESSION['user_name'])) 
                         {
                    ?>
                <li><a  href='mycart.php' >
                    <?php
                        $count=0;
                        if (isset($_SESSION['cart'])) 
                         {
                            $count=count($_SESSION['cart']);
                         }

                    ?>
                        <span style="margin-top: 2px;" class="icon-basket">
                            (<?php echo $count; ?>)
                        </span>
                      </a>
                </li>

                <li>

                    <?php
                        $user_name = $_SESSION['user_name'];
                           if($user_name==true)
                            {
                                echo "<a  href='Myprofile.php' >$user_name</a>";
                            }
                    ?>
                </li>
                    <?php      
                        }
                        else
                        {
                    ?>
                <li>
                    <a  href="exlogin.php" ><i class="fa-solid fa-user"></i> </a>     
                </li>
                    <?php
                        }
                    ?>
            </ul>
          </div>
        </div>
  </nav>

      <div class="main">
        <section class="module bg-dark-30" data-background="assets/images/shop/loginpage-01.JPG">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h1  style=" font-family: 'OCR A Extended', sans-serif; margin-top:80px;" class=" module-title font-alt mb-0">My Profile</h1>
              </div>
            </div>
          </div>
        </section>
        <section style="margin-top:-130px;" class="module">
          <div class="container">

           <div class="container emp-profile">

            <?php
               $select = mysqli_query($conn, "SELECT * FROM `login` WHERE userid = '$user_id'") or die('query failed');
               if(mysqli_num_rows($select) > 0){
                  $fetch=mysqli_fetch_assoc($select);
               }
              
             ?>
            

                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                          <?php

                          if($fetch['img'] == '')
                           {
                              echo '<img style="margin-top: -20px; object-fit: cover; border-radius: 50%; height:150px; width: 150px; " src="assets/images/defaultimg.jpg" alt=""/>';
                           }
                           else
                           {
                            echo '<img style="margin-top: -20px; object-fit: cover; border-radius: 50%; height:150px; width: 150px; " src="adminside/Adminside_Titan_shoppers/php/Photoes/UuserProfile/'.$fetch['img'].'">';
                           }

                          ?>
                            <!-- <img style="margin-top: -20px; object-fit: cover; border-radius: 50%; height:150px; width: 150px; " src="Photoes/profile.jpg" alt=""/> -->
                            <!-- <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h2 style="margin-top:-10px;" class="font-alt" >
                                        <?php echo $fetch['Fname']; ?>
                                    </h2>
                                    
                           <!--  <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                </li>
                            </ul> -->
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3">
                      <a href="logout.php">
                        <input type="submit" class="profile-edit-btn btn-danger" name="logout" value="Logout"/></a>
                    </div>
                </div>

                <hr style="margin-top:5px;" class="divider-w">

                <div class="row">
                    <div style="margin-top:30px;" class="col-sm-4   col-sm-offset-1 mb-sm-40">
                        <!-- <div class="profile-work">
                            <p>WORK LINK</p>
                            <a href="">Website Link</a><br/>
                            <a href="">Bootsnipp Profile</a><br/>
                            <a href="">Bootply Profile</a>
                            <p>SKILLS</p>
                            <a href="">Web Designer</a><br/>
                            <a href="">Web Developer</a><br/>
                            <a href="">WordPress</a><br/>
                            <a href="">WooCommerce</a><br/>
                            <a href="">PHP, .Net</a><br/>
                        </div> -->

                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-4">
                                                <p><?php echo $fetch['Username']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-4">
                                                <p><?php echo $fetch['Fname']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-4">
                                                <p><?php echo $fetch['Email']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-4">
                                                <p><?php echo $fetch['Phoneno']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-4">
                                            <a href="update_profile.php">
                                              <input type="submit" class="profile-edit-btn btn-primmary"  value="edit"/></a>
                                          </div>
                                        </div>
                                       

                    </div>


                    <div style="margin-top:30px;" class="col-sm-4   col-sm-offset-1 mb-sm-40">
                <a href="Userallorder.php?orderId=<?php echo $fetch['userid']; ?>">
                  <button class="btn btn-primary btn-sm">All Order
                    <input type="hidden" value="<?php echo $user_id; ?>">
                  </button>
                </a>
              </div>

                    <!-- address session> -->
                    <!-- <div style="margin-top:30px;" class="col-sm-7  mb-sm-40">
                      <form>
                                        <div style="margin-top: -30px;" class="row"> 
                                          <div class="col-md-12">
                                            <h3 class="font-alt">Add Adress</h3>
                                          </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-9">
                                                <label>Full Name</label><br>
                                                <input class="form-control" type="text" placeholder="Full Name"/>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-9">
                                                <label>Mobile.No</label><br>
                                                <input class="form-control" type="text" placeholder="Mobile.No"/>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-9">
                                                <label>Pin code</label><br>
                                                <input class="form-control" pattern="[0-9]{5}" maxlength="6" type="text" placeholder="Pin code"/>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-9">
                                                <label>Flat, House no., Building, Company, Apartment</label><br>
                                                <input class="form-control" type="text" placeholder="Flat, House no., Building, Company, Apartment"/>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-9">
                                                <label>Area, Colony, Street, Sector, Village</label><br>
                                                <input class="form-control" type="text" placeholder="Area, Colony, Street, Sector, Village"/>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-9">
                                                <label>Landmark</label><br>
                                                <input class="form-control" type="text" placeholder="//Like- near Afill tower... "/>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-9">
                                                <label>Town/City</label><br>
                                                <input class="form-control" type="text" placeholder="Town/City"/>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-9">
                                                <label>State / Province / Region</label><br>
                                                <input class="form-control" type="text" placeholder="State / Province / Region"/>
                                            </div>
                                            
                                        </div> 
                                        <div class="row">
                                          <div class="col-md-6 ">
                                            <button style="margin-top:5px; background: green;" align="center" class="btn btn-d btn-circle btn-sm" type="submit">Submit</button>
                                          </div>
                                          <div class="col-md-6">
                                           <button style="margin-top:5px; background: red;" align="center" class="btn btn-danger btn-d btn-circle btn-sm" type="reset">Reset</button>
                                          </div>
                                          
                                        </div>              
                      </form>                   
                    </div> -->

                </div>
            

           <!--  <div class="row">
                  <div class="col-sm-6 col-md-3 col-lg-3">

                    <div style="margin-top: 10px; border:2px solid #EAEAEA;">
                      <div style="margin-left:5px; letter-spacing: 2px; font-size: 11px;">
                        <h4 style="margin-bottom: -18px;" class="adress-name">Name</h4><br>
                        <h5 style="margin-bottom: -15px;">Mobile.no</h5><br>
                        Flat, House no., Building, Company, Apartment<br>
                        Area, Colony, Street, Sector, Village<br>
                        Landmark<br>
                        Town/City<br>
                        State / Province / Region<br>
                        Pincode
                       </div> 
                    </div>

                  </div>
            </div> -->

            

        </div>

        





            <!-- <div class="row">
              <div class="col-sm-5 col-sm-offset-1 mb-sm-40">
                <h4 class="font-alt">Login</h4>
                <hr class="divider-w mb-10">

                <form class="form" action="php/Tlogincode.php" method="GET">
                  <div class="form-group">

                    <input style="text-transform: lowercase;" class="form-control" id="username" type="text" name="username" placeholder="Username/E-mail/Phone no"/>

                  </div>
                  <div class="form-group">

                    <input style="text-transform: lowercase;" class="form-control" id="password" type="password" name="password" placeholder="Password"/>

                  </div>

                  <div class="form-group">
                    <button class="btn btn-round btn-b">Login</button>
                  </div>
                  <div class="form-group"><a href="forgot_password.php">Forgot Password?</a></div>
                </form>
              </div>
              
              <div class="col-sm-5">
                <h4 class="font-alt">Register</h4>
                <hr class="divider-w mb-10">

                <form  class="form" action="php/Tragistercode.php" method="GET" >
                  <div class="form-group">
                    <input style="text-transform: lowercase;" class="form-control" id="E-mail" type="Email" name="email" placeholder="Email"/>
                  </div>
                  <div class="form-group">
                    <input style="text-transform: lowercase;" class="form-control" id="E-mail" type="text" name="Phone_no" placeholder="Phone no"/>
                  </div>
                  <div class="form-group">
                    <input style="text-transform: lowercase;" class="form-control" id="username" type="text" name="username" placeholder="Username"/>
                  </div>
                  <div class="form-group">
                    <input style="text-transform: lowercase;" class="form-control" id="password" type="password" name="password" placeholder="Password"/>
                  </div>
                  <div class="form-group">
                    <input style="text-transform: lowercase;" class="form-control" id="re-password" type="password" name="re_password" placeholder="Re-enter Password"/>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-block btn-round btn-b">Register</button>
                  </div>
                </form>
              </div>
            </div> -->
          </div>
        </section>

        
        
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