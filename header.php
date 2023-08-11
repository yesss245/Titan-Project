<?php
  
  session_start();
?>

<!-- <basic color css in all pagte > -->
  


  <div class="page-loader">
    <div class="loader">Loading...</div>
  </div>

  <nav class="navbar navbar-custom navbar-fixed-top " role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a style="font-family: 'OCR A Extended', sans-serif;" class="navbar-brand" href="home_shop.php" >
             Titan Shoppers
            </a>
          </div>
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">

              <!-- <li >

                
              
               <form role='form' style="margin-top:10px">
                  <input style="margin-top:10px; background: none;border: none; border-bottom: 1px solid #fff;" class="searchbar form-control"   type='text', placeholder='Search...'>
                
                 <button style=" color: #fff; margin-top: -15px;" class="search-btn" type='submit'>
                  <i class="fa fa-search"></i>
                 </button>
              </form> 
                
              </li> -->
              
              <li><a class="" href="home_shop.php" >Home</a>
               
              </li>

              <li><a  href="shop_product.php">Shop</a>
                
              </li>

              <li ><a  href="pricing1.php" >Membership</a>
                
              </li>

              <li ><a href="service2.php" >Service</a>
                
              </li>

              <li><a  href="contact.php" >Contact</a>
                
              </li>

              <li><a  href="about5.php" >About</a>
                
              </li>


              

                
                
                

                

                <?php

            if (isset($_SESSION['user_name'])) {
            ?>

            <li><a  href='mycart.php' >
                <?php

                $count=0;
                if (isset($_SESSION['cart'])) 
                 {
                    $count=count($_SESSION['cart']);
                 }

              ?>
                    <span class="icon-basket">(<?php echo $count; ?>)</span>
                  </a>
              </li>

            <li>

              <?php
                $user_name = $_SESSION['user_name'];
                   if($user_name==true){
                  

                echo "<a  href='Myprofile.php' >$user_name</a>";
                }
               ?>
               </li>



            <?php

              
            }
            else{
              ?>
              <li><a  href="exlogin.php" ><i class="fa-solid fa-user"></i> </a>
                  
                </li>
              <?php
            }
            ?>

                

              
            </ul>
          </div>
        </div>
      </nav>

   
