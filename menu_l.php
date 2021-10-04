<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-info elevation-4" style="background-image: url(assets/images/sidebar2.jpg);">
  <!-- Brand Logo -->
  <a href="" class="brand-link bg-info">
    <img src="assets/images/Logo.png" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">KATA HOT YOGA</span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar" >
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar nav-child-indent flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-header">MENU</li>
       
          <li class="nav-item" >
            <a href="index.php" class="nav-link <?php if($menu=="index"){echo "active";} ?> ">
              <i class="nav-icon fas fa-store-alt"></i>
              <p>Dashboard </p>
            </a>
          </li>

          <li class="nav-item" >
            <a href="customer.php" class="nav-link <?php if($menu=="customer"){echo "active";} ?> ">
              <i class="nav-icon fas fa-address-card"></i>
              <p>Customer </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="teacher.php" class="nav-link <?php if($menu=="teacher"){echo "active";} ?> ">
              <i class="nav-icon fas fa-address-card"></i>
              <p>Teacher</p>
            </a>
          </li>

           <li class="nav-item">
            <a href="report.php" class="nav-link <?php if($menu=="report"){echo "active";} ?> ">
              <i class="nav-icon fas fa-list-alt"></i>
              <p>Report</p>
            </a>
          </li>

            <li class="nav-item">
            <a href="checkin.php" class="nav-link <?php if($menu=="checkin"){echo "active";} ?> ">
              <i class="nav-icon fas fa-check-square"></i>
              <p>Checkin</p>
            </a>
          </li>

      <!-- <div class="user-panel mt-2 pb-3 mb-2 d-flex">
  
      </div> -->
          <!-- <li class="nav-item">
            <a href="" class="nav-link text-danger">
              <i class="nav-icon fas fa-power-off"></i>
              <p>ออกจากระบบ</p>
            </a>
          </li> -->
      
        </ul>
    </nav>

  </div>
  <!-- /.sidebar -->
</aside>