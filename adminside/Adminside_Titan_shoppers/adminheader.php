<!-- <for logout code > -->
<?php require("adminlogout.php"); ?>
<style>
  .SIcon{
    height: auto;
    width: 5px;
  }
</style>

<nav  class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="template/assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button onclick="window.location.reload()" tabindex="Hello" class=" navbar-toggler navbar-toggler align-self-center" type="button">
              <i class="mdi mdi-refresh"></i>
            </button>
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input id="searchBox" onkeyup="performSearch()"  type="text" class="form-control" placeholder="Search">
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">

              <?php

              require ("userdatafetch.php");

              ?>

              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <?php

                          if($fetch['Img'] == '')
                           {
                              echo '<img style="object-fit: cover;" class="img-xs rounded-circle " src="php/Photoes/AdminProfile/defaultimg.jpg" alt=""/>';
                           }
                           else
                           {
                            echo '<img style="object-fit: cover;" class="img-xs rounded-circle " src="php/Photoes/AdminProfile/'.$fetch['Img'].'">';
                           }

                     ?>
                    <p class="mb-0 d-none d-sm-block navbar-profile-name"><?php echo $fetch['FullName']; ?></p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <a href="adminprofile.php" class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-account-outline text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Profile</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="http://localhost/Titan-Project/adminside/Adminside_Titan_shoppers/Titanadminlogin.php?logout=<?php echo $Adminuserid; ?>">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Log out</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">Advanced settings</p>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>