<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-black navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a id="toggleButton" class="nav-link" data-widget="pushmenu" href="#" role="button">
        <i class="fas fa-xmark"></i>
      </a>
    </li>
  </ul>

  <!-- Right navbar links -->
</nav>

<!-- toggle icon change -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    // Get the toggle button and the initial icon
    const toggleButton = document.getElementById("toggleButton");
    const initialIcon = toggleButton.querySelector("i").cloneNode(true);

    // Add a click event listener to the button
    toggleButton.addEventListener("click", function () {
      // Check the current icon class and toggle it
      const currentIcon = toggleButton.querySelector("i");

      if (currentIcon.classList.contains("fa-bars")) {
        // Change to close icon
        currentIcon.classList.remove("fa-bars");
        currentIcon.classList.add("fa-xmark");
      } else {
        // Change to bars icon
        currentIcon.classList.remove("fa-xmark");
        currentIcon.classList.add("fa-bars");
      }
    });
  });
</script>



  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->

    </a>
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/logo.jpg"
           alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><b>SLPA</b></span>
    </a>


    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-4 pb-3 mb-6 d-flex">

          <div class= "fas fa-user-circle info">
            <a href="#" class="d-block">User1</a>
          </div>
        </div>

          <!-- SidebarSearch Form -->
          <div class="form-inline">

          </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">

            </a>
          </li>
          <li class="nav-item">

            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>

                </a>
              </li>

              </li>

              </li>

                  <p></p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-file"></i>
              <p>
               Report
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="unit.php" class="nav-link">
                  <i class="fa fa-angle-left"></i>
                  <p>Unit Attendance Report</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="audit.php" class="nav-link">
                  <i class="fa fa-angle-left"></i>
                  <p>Audit Report</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="meal.php" class="nav-link">
                  <i class="fa fa-angle-left"></i>
                  <p>Meal report</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Admin
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="user.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create user</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="section.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add section</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="division.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Division</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="master.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Master Recors</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./chng_pwd.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change the Password</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Others
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./device.php" class="nav-link">
                <i class="fa-solid fa-circle-check"></i>
                  <p>Device List </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Tranfer Guide</p>
                </a>
              </li>


            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

            <h1 class="m-0">Time Attendance System</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
               <li class="breadcrumb-item"><a href="./logout.php">logout</a></li>
              <li class="breadcrumb-item active"></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-blue">
    <!-- Control sidebar content goes here -->
  </aside>

  <!-- /.control-sidebar -->


