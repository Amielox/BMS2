<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Main Sidebar Container -->
  <aside class="main-sidebar main-sidebar-custom sidebar-dark-primary sbg elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRBkjv5SmWMbXDry4p-t7EAcC8kWKt-tHlDRiQqPn3dmA&s" alt="Culiat Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text text-center text-bold">BARANGAY CULIAT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <span class="nav-header text-center text-bold">Health Monitoring</span>
          <li class="nav-header">MAIN</li>
          <li class="nav-item">
            <a href="home.php" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Dashboard
                <!--<span class="right badge badge-danger">New</span>-->
              </p>
            </a>
          </li>

          <li class="nav-header">MANAGE</li>
          <li class="nav-item">
            <a href="HealthMonitoring.php" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Health Monitoring
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="CovidBooster.php" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Covid Vaxx and Booster
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="Tracing.php" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
               Contact Tracing
              </p>
            </a>
          </li>
               
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
      <div class="sidebar-custom">

      <a href="#profile" data-toggle="modal"  id="admin_profile" class="btn btn-tool ">
        <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" alt="profileImg" class="img-circle" style="width:40px;"> 
        <big><?php echo ($user['username']);?></big>

      </a>
      <a href="logout.php" class="btn btn-secondary hide-on-collapse pos-right"><i class="fa fa-sign-out"></i></i></a> 

    </div>
    <!-- /.sidebar-custom -->
  </aside>
