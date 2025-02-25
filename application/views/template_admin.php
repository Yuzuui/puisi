
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> <?= $judul_halaman ?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?=base_url()?>assets/korona/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/korona/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?=base_url()?>assets/korona/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/korona/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/korona/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/korona/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?=base_url()?>assets/korona/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?=base_url()?>assets/korona/assets/images/favicon.png" />
  


  </head>
  <body>
  <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <span class="sidebar-brand brand-logo" style="color: white;">CMS</span>
        <span class="sidebar-brand brand-logo-mini" style="color: white;">C</span>
      </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="<?=base_url()?>assets/korona/assets/images/faces/face15.jpg" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal"><?= $this->session->userdata('nama') ?></h5>
                  <span><?= $this->session->userdata('level') ?></span>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?= base_url('admin/home')?>">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?= base_url('admin/carousel')?>">
              <span class="menu-icon">
                <i class="mdi mdi-crown"></i>
              </span>
              <span class="menu-title">carousel</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?= base_url('admin/kategori')?>">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Kategori Konten</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?= base_url('admin/konten')?>">
              <span class="menu-icon">
                <i class="mdi mdi-dialpad"></i>
              </span>
              <span class="menu-title">Konten</span>
            </a>
          </li>
          <?php  if($this->session->userdata('level')=='Admin'){?>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?= base_url('admin/user')?>">
              <span class="menu-icon">
                <i class="mdi mdi-account-card-details"></i>
              </span>
              <span class="menu-title">User</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?= base_url('admin/konfigurasi')?>">
              <span class="menu-icon">
                <i class="mdi mdi-brush"></i>
              </span>
              <span class="menu-title">Konfigurasi</span>
            </a>
          </li>
          <?php } ?>
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <?= $judul_halaman?>
              </li>
            </ul>

            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="<?=base_url()?>assets/korona/assets/images/faces/face15.jpg" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name"><?= $this->session->userdata('nama') ?></p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-key-variant"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Password</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="<?=base_url('auth/logout')?>">
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
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <?= $contents; ?>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>              
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
    <script src="<?=base_url()?>assets/korona/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?=base_url()?>assets/korona/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="<?=base_url()?>assets/korona/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="<?=base_url()?>assets/korona/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="<?=base_url()?>assets/korona/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?=base_url()?>assets/korona/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?=base_url()?>assets/korona/assets/js/off-canvas.js"></script>
    <script src="<?=base_url()?>assets/korona/assets/js/hoverable-collapse.js"></script>
    <script src="<?=base_url()?>assets/korona/assets/js/misc.js"></script>
    <script src="<?=base_url()?>assets/korona/assets/js/settings.js"></script>
    <script src="<?=base_url()?>assets/korona/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?=base_url()?>assets/korona/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->

    <script>
        $('#menghilang').delay('slow').slideDown('slow').delay(1000).slideUp(600);
    </script>

  </body>
</html>