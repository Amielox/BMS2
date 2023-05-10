<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Panel</title>
        <link rel = "icon" href = 
	"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRBkjv5SmWMbXDry4p-t7EAcC8kWKt-tHlDRiQqPn3dmA&s" 
        type = "image/x-icon">
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="login/styles.css" rel="stylesheet" />
        <?php include 'login/session.php'; ?>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Barangay Culiat</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRBkjv5SmWMbXDry4p-t7EAcC8kWKt-tHlDRiQqPn3dmA&s" alt="..." /></span>
                
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#app">Admin Console</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#ql">Quick Links</a></li>
                    <a href="logout.php" onclick="return confirm('Are you sure to logout?');" class="  hide-on-collapse pos-right"><i style="color:white;"class="fa fa-sign-out"></i></a> 

                    
                    
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="app">
                <div class="resume-section-content">
                    <p class="lead mb-0">
                        CULIAT
                        <span class="text-primary">ADMIN PANEL</span>
                    </p>
                    <div class=" mb-4">
                        Tandang Sora Avenue, Quezon City ·
                        <a href="mailto:name@email.com">name@email.com</a>
                    </div>
                   
                <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
                    <div class="text-bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                    <div class="my-3 py-1">
                        <h6 class="display-6"> Web Portal</h6>
                        <p class="lead">And an even wittier subheading.</p>
                    </div>
                    <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 88px; border-radius: 21px 21px 0 0;"></div>
                    </div>
                    <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                        <div class="my-3 p-1">
                        <h6 class="display-6">Document Requests</h6>
                        <p class="lead">And an even wittier subheading.</p>
                        </div>
                        <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 88px; border-radius: 21px 21px 0 0;"></div>
                    </div>
                    <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                    <div class="my-3 p-1">
                        <h6 class="display-6">Health Information System</h6>
                        <p class="lead">And an even wittier subheading.</p>
                    </div>
                    <div class="bg-dark shadow-sm mx-auto" onclick="window.location.href='CuliatBMS/home.php';" style="background-image:url('login/r.png');background-size:cover;width: 100%;height: 88px; border-radius: 21px 21px 0 0;"></div>
                    </div>
                    <div class="text-bg-primary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                    <div class="my-3 py-1">
                        <h6 class="display-6">Record Information System</h6>
                        <p class="lead">And an even wittier subheading.</p>
                    </div>
                    <div class="bg-light shadow-sm mx-auto" onclick="window.location.href='records/home.php';" style="background-image:url('login/rims.png');background-size:cover;width: 100%; height: 88px; border-radius: 21px 21px 0 0;"></div>
                    </div>
                </div>


                </div>
            </section>
            <section  id="ql">
                <div class="container">
                    <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 px-5 py-3 my-3 border-top">
                      <div class="col mb-3">
                        <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                            <img class="mb-4" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRBkjv5SmWMbXDry4p-t7EAcC8kWKt-tHlDRiQqPn3dmA&s" alt="" style="border-radius:50px;" width="32" height="32">
                        </a>
                        <p class="text-muted">Quick Links</p>
                      </div>
                  
                     
                  
                      <div class="col mb-2">
                        <h5> MAIN</h5>
                        <ul class="nav flex-column">
                          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Create Admin Account</a></li>
                          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Content Information </a></li>
                          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Residents Information</a></li>
                          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Staff Information</a></li>
                          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Document Requests </a></li>
                          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Vaccine Scheduling </a></li>
                        </ul>
                      </div>
                      <div class="col mb-2">
                        <h5>Report</h5>
                        <ul class="nav flex-column">
                          <li class="nav-item mb-2"><a href="records/report.php" class="nav-link p-0 text-muted">Resident Report</a></li>
                          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Revenue Report</a></li>
                          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Health Report</a></li>
                          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Dashboard</a></li>
 
                        </ul>
                      </div>
                      <div class="col mb-2">
                        <h5>Others</h5>
                        <ul class="nav flex-column">
                          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">HM Log</a></li>
                          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Transaction Log</a></li>
                          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Login Log</a></li>
    
                        </ul>
                      </div>
                  
                      <div class="col mb-2">
                        <h5>User Web Page</h5>
                        <ul class="nav flex-column">
                          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Barangay Portal</a></li>
                          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">EService Web</a></li>
                          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Health Info Web</a></li>
   
                        </ul>
                      </div>
                      
                    </footer>
                  </div>
                  
            </section>
           
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
