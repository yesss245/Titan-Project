<nav  class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.html"><img src="template/assets/images/Tlogo.svg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="template/assets/images/Tlogo-mini11-01.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <?php

              require ("userdatafetch.php");

          ?>
          <li class="nav-item profile">
            <div class="profile-desc">
              <!-- <profile> -->
              <div class="profile-pic">
                <div class="count-indicator">
                  <?php

                          if($fetch['Img'] == '')
                           {
                              echo '<img  style="object-fit: cover;" class="img-xs rounded-circle "  src="php/Photoes/AdminProfile/defaultimg.jpg" alt=""/>';
                           }
                           else
                           {
                            echo '<img style="object-fit: cover;" class="img-xs rounded-circle "  src="php/Photoes/AdminProfile/'.$fetch['Img'].'">';
                           }

                  ?>
                  <span class="count bg-success"></span>
                </div>
                <div  class="profile-name">
                  <h5 class="mb-0 font-weight-normal">
                    <a style="text-decoration:none; color: #fff;" href="http://localhost/Titan-Project/adminside/Adminside_Titan_shoppers/adminprofile.php">
                      <?php echo $fetch['FullName']; ?> 
                    </a>
                  </h5>
                  <!-- <span>Gold Member</span> -->
                </div>
              </div>

              <!-- <account side three dots> -->
              <!-- <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-calendar-today text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                  </div>
                </a>
              </div> -->
            </div>
          </li>

          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="index.php">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="user_order.php">
              <span class="menu-icon">
                <i class="mdi mdi-account-box-outline"></i>
              </span>
              <span class="menu-title">Order</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="user_tabel.php">
              <span class="menu-icon">
                <i class="mdi mdi-account-box-outline"></i>
              </span>
              <span class="menu-title">Users</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            
            <a class="nav-link" data-toggle="collapse" href="#logo-baanner" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-application"></i>
              </span>
              <span class="menu-title">Banners/Social Link</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="logo-baanner">
              <ul class="nav flex-column sub-menu">
                <!-- <li class="nav-item"> <a class="nav-link" href="http://localhost/Titan-Project/adminside/Adminside_Titan_shoppers/logo_tabel.php">Logo</a></li> -->
                <li class="nav-item"> <a class="nav-link" href="http://localhost/Titan-Project/adminside/Adminside_Titan_shoppers/Logo_banners.php">Shop Banner</a></li>
                <li class="nav-item"> <a class="nav-link" href="Social_link.php">Social link</a></li>
               <!--  <li class="nav-item"> <a class="nav-link" href="Female_product.php">All Female Product</a></li> -->
                <!-- <li class="nav-item"> <a class="nav-link" href="Exclusive_product.php">Exclusive Product</a></li> -->
              </ul>
            </div>
          </li>

         

          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#Product" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-basket-fill"></i>
              </span>
              <span class="menu-title">Product</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="Product">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="Add_product.php">Add Product</a></li>
                <li class="nav-item"> <a class="nav-link" href="All_product.php">All Product</a></li>
                <li class="nav-item"> <a class="nav-link" href="Male_product.php">All Male Product</a></li>
                <li class="nav-item"> <a class="nav-link" href="Female_product.php">All Female Product</a></li>
                <li class="nav-item"> <a class="nav-link" href="Exclusive_product.php">Exclusive Product</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#Latest-basic" aria-expanded="false" aria-controls="Latest-basic">
              <span class="menu-icon">
                <i class="mdi mdi-brightness-7"></i>
              </span>
              <span class="menu-title">Latest Product</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="Latest-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="Add_Latest_Product.php">Add Latest Product</a></li>
                <li class="nav-item"> <a class="nav-link" href="Latest_product_tabel.php">Latest Product</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="contact_us.php">
              <span class="menu-icon">
                <i class="mdi mdi-account-convert"></i>
              </span>
              <span class="menu-title">Contact</span>
            </a>
          </li>
          
          <li class="nav-item menu-items">
            <a class="nav-link" href="Review.php">
              <span class="menu-icon">
                <i class="mdi mdi-account-convert"></i>
              </span>
              <span class="menu-title">Review</span>
            </a>
          </li>

        </ul>
      </nav>