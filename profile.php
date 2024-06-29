<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <title>SPCPTA - Dashboard</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
   
 <link rel="apple-touch-icon" sizes="180x180" href="res/img/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="res/img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="res/img/favicon-16x16.png">
<link rel="manifest" href="res/img/site.webmanifest">
    <!-- Fonts and icons -->
    <script src="./assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["./assets/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/css/plugins.min.css" />
    <link rel="stylesheet" href="./assets/css/kaiadmin.min.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="./assets/css/demo.css" />
  </head>
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
      <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="dashboard.php" class="logo">
              <img
                src="assets/img/SPCPTA.png"
                alt="navbar brand"
                class="navbar-brand"
                height="200"
              />
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
              <li class="nav-item active">
                <a href="dashboard.php" class="" aria-expanded="false">
                  <i class="fas fa-home"></i>
                  <p>Dashboard</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="Manage-Subjects.php">
                  <i class="fas fa-layer-group"></i>
                  <p>Subjects</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="Manage-Users.php">
                  <i class="fas fa-users"></i>
                  <p>Users</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="Profile.php">
                  <i class="fas fa-user-alt"></i>
                  <p>Profile</p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- End Sidebar -->

      <div class="main-panel">
        <div class="main-header">
          <div class="main-header-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark">
              <a href="./dashboard.php" class="logo">
                <img
                  src="./assets/img/kaiadmin/logo_light.svg"
                  alt="navbar brand"
                  class="navbar-brand"
                />
              </a>
              <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                  <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                  <i class="gg-menu-left"></i>
                </button>
              </div>
              <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
              </button>
            </div>
            <!-- End Logo Header -->
          </div>
          <!-- Navbar Header -->
          <nav
            class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom"
          >
            <div class="container-fluid">
              <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                <li class="nav-item topbar-user dropdown hidden-caret">
                  <a
                    class="dropdown-toggle profile-pic"
                    data-bs-toggle="dropdown"
                    href="#"
                    aria-expanded="false"
                  >
                    <div class="avatar-sm">
                      <img
                        src="assets/img/profile.jpg"
                        alt="..."
                        class="avatar-img rounded-circle"
                      />
                    </div>
                    <span class="profile-username">
                      <span class="op-7">Hi,</span>
                      <span class="fw-bold">Jhone doe</span>
                    </span>
                  </a>
                  <ul class="dropdown-menu dropdown-user animated fadeIn">
                    <div class="dropdown-user-scroll scrollbar-outer">
                      <li>
                        <div class="user-box">
                          <div class="avatar-lg">
                            <img
                              src="assets/img/profile.jpg"
                              alt="image profile"
                              class="avatar-img rounded"
                            />
                          </div>
                          <div class="u-text">
                            <h4>Hizrian</h4>
                            <p class="text-muted">hello@example.com</p>
                            <a
                              href="Profile.php"
                              class="btn btn-xs btn-secondary btn-sm"
                              >View Profile</a
                            >
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href="logout.php">Logout</a>
                      </li>
                    </div>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>
          <!-- End Navbar -->
        </div>

        <div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Profile</h3>
              <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                  <a href="dashboard.php">
                    <i class="icon-home"></i>
                  </a>
                </li>
                
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Profile</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">User profile</div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6 col-lg-4">
                        <div class="form-group">
                          <label for="full-name">Full name</label>
                          <input
                            type="text"
                            class="form-control"
                            id="username"
                            placeholder="Enter Full name"
                          />
                         
                        </div>
                        <div class="form-group">
                          <label for="username">Username</label>
                          <input
                            type="text"
                            class="form-control"
                            id="username"
                            placeholder="Enter username"
                          />
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-4">
                        <div class="form-group">
                          <label for="email2">Email Address</label>
                          <input
                            type="email"
                            class="form-control"
                            id="email2"
                            placeholder="Enter Email"
                          />
                         
                        </div>
                        <div class="form-group">
                          <label for="PhoneNumber">Phone number</label>
                          <input
                            type="text"
                            class="form-control"
                            id="phone-number"
                            placeholder="Phone number"
                          />
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-4">

                        <div class="form-group">
                          <label for="password">Current Password</label>
                          <input
                            type="password"
                            class="form-control"
                            id="password"
                            placeholder="Password"
                          />
                        </div>

                        <div class="form-group">
                          <label for="password">New Password</label>
                          <input
                            type="password"
                            class="form-control"
                            id="password"
                            placeholder="Password"
                          />
                       
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <div class="card-action">
                    <button class="btn btn-success">Update</button>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

          <footer class="footer">
          <div class="container-fluid d-flex justify-content-between">
            <nav class="pull-left">
              <ul class="nav"></ul>
            </nav>
            <div class="copyright">
             © 2024 Copyright| 
              <a href="http://www.Idearigs.com">Idearigs |</a>
              All Rights Reserved.
            </div>
          </div>
        </footer>
      </div>

      <!-- Custom template | don't include it in your project! -->
      
    <!--   Core JS Files   -->
    <script src="./assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="./assets/js/core/popper.min.js"></script>
    <script src="./assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="./assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Chart JS -->
    <script src="./assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="./assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="./assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="./assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="./assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="./assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
    <script src="./assets/js/plugin/jsvectormap/world.js"></script>

    <!-- Google Maps Plugin -->
    <script src="./assets/js/plugin/gmaps/gmaps.js"></script>

    <!-- Sweet Alert -->
    <script src="./assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Kaiadmin JS -->
    <script src="./assets/js/kaiadmin.min.js"></script>

    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="./assets/js/setting-demo2.js"></script>
  </body>
</html>
