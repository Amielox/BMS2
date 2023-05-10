<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Main Sidebar Container -->
  <aside class="main-sidebar main-sidebar-custom sidebar-dark-primary sbg elevation-4" >
    <!-- Brand Logo -->
    <a href="../adminconsole.php" class="brand-link">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRBkjv5SmWMbXDry4p-t7EAcC8kWKt-tHlDRiQqPn3dmA&s" alt="Culiat Logo" class="brand-image img-circle elevation-3" style="opacity: .8;height:500px;">
      <span class="brand-text text-center text-bold">BARANGAY CULIAT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : 'images/profile.jpg'; ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#profile" data-toggle="modal"  id="admin_profile" class="d-block"><?php echo ($user['lastname']);?>, <?php echo ($user['firstname']);?></a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        
         
          <li class="nav-header">MAIN</li>
          <li class="nav-item">
            <a href="home.php" class="nav-link">
              <i class="nav-icon fas fa-chart-area"></i>
              <p>
                Dashboard
                <!--<span class="right badge badge-danger">New</span>-->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-bar"></i>
              <p>
                Profile
              </p>
            </a>
          </li>
          
          <li class="nav-header">Manage</li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Certificate Request
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="clearance_log.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Barangay Clearance</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../CuliatBMS/services/client/residency.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Certificate of Residency</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../CuliatBMS/services/client/indigency.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Certificate of Indigency</p>
                </a>
              </li>
     
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Barangay ID Request
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../CuliatBMS/services/bgyid/barangayid.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Barangay ID</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-check"></i>
              <p>
                Health Monitoring
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Health Form</p>
                </a>
              </li>
     
            </ul>
          </li>
                 
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
      <div class="sidebar-custom">

      <span class="hide-on-collapse" id="time_span" style="color: #f0f0f0 ;">
     <!--   <php 
          date_default_timezone_set("Asia/Manila");

          echo date("Y-m-d h:i:sa");
        ?>-->
      </span>
      <a href="logout.php" onclick="return confirm('Are you sure to logout?');" class="btn btn-secondary pos-right "><i class="fa fa-sign-out"></i></i></a> 

    </div>
    <script>
      var el = document.getElementById('time_span')
setInterval(function() {

    var currentTime = new Date(),
        today = currentTime.toLocaleDateString(),
        hours = currentTime.getHours(),
        minutes = currentTime.getMinutes(),
        ampm = hours > 11 ? 'PM' : 'AM';

    hours += hours < 10 ? '0' : '';
    minutes += minutes < 10 ? '0' : '';

    el.innerHTML =  today +" "+ hours + ":" + minutes + " " + ampm;
}, 1000);
    </script>
    <!-- /.sidebar-custom -->
  </aside>
