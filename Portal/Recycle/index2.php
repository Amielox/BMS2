<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Arsha Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v4.9.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
    <?php
        session_start();
    ?>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">
    <div class="pic"><img src="assets/img/team/LOGO.png" class="img-fluid" alt="" style="width:55px; height:55px; margin-right:10px;"></div>
      <h1 class="logo me-auto"><a href="index.html">BARANGAY CULIAT</a></h1>

      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link   scrollto" href="#services"><span>E-Services</span></a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Annoucement</a></li>
          <li><a class="nav-link   scrollto" href="#team">About us</a></li>
          <li><a class="nav-link   scrollto" href="#team"><?php echo "".$_SESSION['surname']."," , " ".$_SESSION['firstname']."";?></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar --> 

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Welcome To</h1>
          <h1>Barangay Culiat</h1>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/Culiat.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    
 <!-- ======= Services Section ======= -->
 <section id="services" class="team section-bg">
 <div class="container" data-aos="fade-up">

<div class="section-title">
  <h2>E - Services</h2>
</div>

<div class="row">

<div class="col-lg-4 mt-4">
    <div class="member d-flex align-items-start" style="height: 340px; background-color: white;" data-aos="zoom-in" data-aos-delay="100">
      <div class="member-info">
        <img class="u-image u-image-default u-preserve-proportions u-image-7" src="images/image13.png" style="height: 280px; width: 300px; " alt="" data-image-width="642" data-image-height="642" data-href="bgyid">
      </div>
    </div>
  </div>


  <div class="col-lg-4 mt-4">
    <div class="member d-flex align-items-start" style="height: 340px; background-color: white;" data-aos="zoom-in" data-aos-delay="100">
      <div class="member-info">
        <img class="u-image u-image-default u-preserve-proportions u-image-7" src="images/image9.png" style="height: 280px; width: 300px; " alt="" data-image-width="642" data-image-height="642" data-href="bgyid">
      </div>
    </div>
  </div>

  <div class="col-lg-4 mt-4">
    <div class="member d-flex align-items-start" style="height: 340px; background-color: white;" data-aos="zoom-in" data-aos-delay="100">
      <div class="member-info">
        <img class="u-image u-image-default u-preserve-proportions u-image-7" src="images/image11.png" style="height: 280px; width: 300px; " alt="" data-image-width="642" data-image-height="642" data-href="tracking">
      </div>
    </div>
  </div>


  <div class="row">

  <div class="col-lg-4 mt-4">
    <div class="member d-flex align-items-start" style="height: 340px; background-color: white;" data-aos="zoom-in" data-aos-delay="100">
      <div class="member-info">
        <img class="u-image u-image-default u-preserve-proportions u-image-7" src="images/image13.png" style="height: 280px; width: 300px; " alt="" data-image-width="642" data-image-height="642" data-href="client">
      </div>
    </div>
  </div>


  <div class="col-lg-4 mt-4">
    <div class="member d-flex align-items-start" style="height: 340px; background-color: white;" data-aos="zoom-in" data-aos-delay="100">
      <div class="member-info">
        <img class="u-image u-image-default u-preserve-proportions u-image-7" src="images/image9.png" style="height: 280px; width: 300px; " alt="" data-image-width="642" data-image-height="642" data-href="bgyid">
      </div>
    </div>
  </div>

  <div class="col-lg-4 mt-4">
    <div class="member d-flex align-items-start" style="height: 340px; background-color: white;" data-aos="zoom-in" data-aos-delay="100">
      <div class="member-info">
        <img class="u-image u-image-default u-preserve-proportions u-image-7" src="images/image11.png" style="height: 280px; width: 300px; " alt="" data-image-width="642" data-image-height="642" data-href="bgyid">
      </div>
    </div>
  </div>

  </div>
    </section><!-- End Services Section -->

 <!-- ======= Portfolio Section ======= -->
 <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Annoucement</h2>

        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">App</li>
          <li data-filter=".filter-card">Card</li>
          <li data-filter=".filter-web">Web</li>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

      <!-- ======= Team Section ======= -->
      <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About us</h2>
</div>

        <div class="row">

          <div class="col-lg-12">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="member-info">
                <h4>Barangay Culiat Location</h4>
                <p>A long  Tandang Sora Avenue beside Culiat High School</p>
                <div class="social">
                  
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-12 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
              <div class="member-info">
                <h4>Barangay Culiat Boundaries</h4>
                <p>NORTH: Congressional Avenue</p>
                <p>EAST: Luzon Avenue</p>
                <p>WEST: ​Southeast by Commonwealth Avenue</p>
                <p>SOUTH: Culiat & Pasong Tamo River and Visayas Ave.</p>
                <div class="social">
  
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-12 mt-4">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <div class="member-info">
                <h4>Barangay Culiat Land Area</h4>
                <div class="row content">
          <div class="col-lg-6 pt-4 pt-lg-4">
                <p>1.Luzon Avenue (Purok 1-5)</p>
                <p>2. Balud Extension</p>
                <p>3. Cenacle Drive 8A</p> 
                <p>4. Cenacle Drive 5A</p>
                <p>5. Cenacle Drive, Sitio Mabilog</p>
                <p>6. Forestry Sitio Mabilog</p>
                <p>7. Centro Sitio Mabilog</p>
                <p>8. FF Extension, Sitio Mabilog</p>
                <p>9.Lower Adelfa St., Metro Heights</p>
                <p>10.Pagkakaisa Compound, Visayas Avenue</p>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-4">
                <p>11. Vargas Compound</p> 
                <p>12. Palayan Compound</p> 
                <p>13. Morning Star Drive</p> 
                <p>14. Morning Star Heights</p> 
                <p>15. Pael Estate (Purok 1-6)</p> 
                <p>16. Machaca Compound</p>
                <p>17.Union Avenue Extension, (Creekside)</p> 
                <p>18.Saplan Compound</p>
                <p>19. Cruz Compound</p>
                <p>20.Salam Compound</p>
          </div>
        </div>
                <div class="social">
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-12 mt-4">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <div class="member-info">
              <h4>Barangay Culiat  Number of Polling Centers Two(2)</h4>
                <div class="row content">
          <div class="col-lg-6">
                <p>Culiat Elementary</p>
                <p>Culiat High School - (184) Polling Precinct</p>
                <div class="social float-right">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-12 mt-4">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
            <div class="member-info">
            <h4> Barangay Culiat Number of Registered Voters</h4>
                <div class="row content">
          <div class="col-lg-6  pt-4 pt-lg-4">
                <p>17,696 as of January 29,1995</p>
                <p>20,864 as of June, 1997</p>
                <p>26,200 as of 1999</p>
                <p>22,000 as of 2007</p>
              </div>

                <div class="col-lg-6 pt-4 pt-lg-4 ">
                <p>24,552 as of March, 1996  
                <p>25,983 as of Oct. 2013 
                <p>26,748 as of May 2018 
                <p>33,624 as of May 9, 2022 
                
              </div>
                <div class="social float-right">
                </div>
              </div>
            </div>
          </div>
        </div>

            <div class="col-lg-12 mt-4">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
            <div class="member-info">
            <h4>Barangay Culiat Population</h4>
                <div class="row content">
                <div class="col-lg-6 pt-4 pt-lg-4">
                <p>28,763 as of May 1990, NSO</p>
                <p>39,483 as of September, 1995, NSO</p>
                <p>43,300 as of 1999, NSO</p>
              </div>

              <div class="col-lg-6 pt-4 pt-lg-4">
                <p>65,000 as of 2007, NSO</p>
                <p>68,881 as of 2010, NSO </p>
                <p>74,304 as of 2015, NSO</p>
                
              </div>
                <div class="social float-right">
                </div>
              </div>
            </div>
          </div>
        </div>

    </section><!-- End Team Section -->
    
    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
          </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-1" class="collapsed"><span></span>Brief History of Barangay Culiat <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                    Noong unang panahon, bago dumating ang mga kastila sa ating bansa, ang bulubunduking lugar na ito ay isang masukal na kagubatan. Ayon sa mga matatanda, dito lang daw sila nakakita ng mga malaki at naggagandahang mga puno na napupuluputan ng kakaibang uri ng baging. ang nasabing mga puno ay tinawag na culiat. Sa pook ding ito ay may mala-kristal na batis na may mga batong kapag nabibiyak ay may tubig sa loob. Dahil dito, ang lugar na ito’y tinawag na paso ng culiat (batong may tubig sa Culiat). ng dumating ang mga kastila, sinimulan ang pagtatatag ng mga pamayanan. ang lugar na ito ay naging sakop ng lalawigan ng bulacan, bayan ng mecauayan, barrio ng Caloocan na kung saan sitio nito ang nasabing lugar. Taong 1902 ng itinatag ang bagong lalawigan ng Rizal. Isa sa mga naging bayan ay ang barrio ng Caloocan at ang lugar na ito ay naging barrio ng nasabing bayan. tatlumpo’t pitong taon din ang nakaraan ng may isang Manuel Luis Quezon na naging pangulo ng Commonwealth na nagpasiyang itatag ang lungsod na sa pangalan niya isinunod. Nabuo ang isang lungsod na sa pangalan niya isinunod. nabuo ang isang lungsod ng pangarap, ang Lungsod Quezon na kung saan naging barrio nito ang nasabing lugar noong 1939. 
                    </p>
                  </div>
                  </u>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span></span> Vision <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                    Ang barangay culiat ay mag iging isang matiwasay na pamayanan na papanatilihin ang kampanya upang mapuksa ang iligal na droga. nakatuon sa pagbibigay ng may kalidad na serbisyong pampubliko, matatag at makatarungang pagpapasya, pagmamahal sa kapaligiran, kahandaan sa panahon ng kalamidad, makatao at mapagkawang-gawang pamamahala na may pagkakapantay-pantay na pagtugon sa lahat ng pangangailangan ng bawat mamamayan: babae, lalaki, lgbt, bata, matanda, may kapansanan at mga biktima ng iligal na gamot. masiguro ang seguridad sa trabaho sa pamamagitan ng tuluy-tuloy na pagbibigay ng tulong-dunong sa mamamayan at lantad ng pamamamahala na magdadala ng dangal at karangalang magiging tatak barangay culiat.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span></span>Mission<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                    Panatilihin ang katahimikan at kaayusan ng barangay culiat sa pamamagitan ng patuloy na kampanya laban sa iligal na gamot. Masupil ang paglaganap ng mga mamamayang walang katiyakan sa paninirahan. Magkaroon ng tuluy-tuloy na tulong-dunong sa mamamayan upang makapagbigay ng pangkabuhayan at oportunidad upang magkaroon ng hanap-buhay. Magkaroon ng kahandaan sa panahon ng kalamidadmagkaroon ng disiplina sa pagtatapon ng basura at maipalaganap ang kahalagan ng 4rs. Recycle, Re-use, Redduction, at Recovery .magkaroon ng kalinga sa lahat ng sektor ng pamayanan (babae, lalaki, lgbt, may kapansanan, mga pamilya ng biktima ng ipinagbabawal na gamot, mga toda drayber at mananakay, single-parents, senior citizens, ofw at miyembro ng pamilyamaibaba ang bilang ng mga biktima ng gender-based violence at biktima ng pagpapalaking may halong pananakit. Maitaguyod ang urban-gardening: halamanan ni juan at juan magkaroon ng disiplinadong mga mamamayan.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4" class="collapsed"><span></span> Goal <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                    Barangay Culiat aims to have a comprehensive data bank of its barangay residents for faster identification, prioritization of families and residents during calamities, provision of assistance, and for the planning of barangay projects to have a banking system for effective and fast identification of persons who are threats to barangay peace and order and prevent the commission of crimes; to come up with comprehensive registrations of barangay inhabitants and institutionalization of barangay id system; to have a website wherein the barangay residents can see "On-Line" the on-going projects, development plans, livelihood and children development program. to have access to post their suggestions, recommendations, and opinions about the barangay management to implement disaster risk reduction measures and to strengthen the capacity of the communities to prevent and prepare for any disaster through IEC on disaster preparedness plans.
                  </div>
                </li>

              </ul>
            </div>

          </div>


      </div>
    </section><!-- End Why Us Section -->

   <!-- ======= Team Section ======= -->
   <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
        </div>

        <div class="row"> 
        <?php
      	  include 'includes/conn.php';
          $sql = "SELECT * FROM officials ORDER BY position ASC";
          $query = $conn->query($sql);
          while($row = $query->fetch_assoc()){                        
        ?> 
          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="<?php echo (!empty($row['photo'])) ? 'images/'.$row['photo'] : 'images/profile.jpg'; ?>" style="height:150px; width:150px;" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4><?php echo $row['name']; ?></h4>
                <span><?php echo $row['position']; ?></span>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->

    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Culiat Barangay Hall Tandang Sora Ave</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>brgyculiat@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+632 453-7370</p>
                <p>+632 456-3483</p>

              </div>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.787694686857!2d121.05448141357701!3d14.667986489759578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b7475e1333fb%3A0xb01b3d6a168686a5!2sCuliat%20Barangay%20Hall!5e0!3m2!1sen!2sph!4v1669095552013!5m2!1sen!2sph" width="100%" height="290px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- modal -->
<div class="modal fade modal-md" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Login Form</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <div class="col-sm-12">
            <center><div class="pic"><img src="assets/img/team/LOGO.png" class="img-fluid" alt="" style="width:130px; height:130px; margin-right:10px;"></div>
            <h5><b>Sign In</b></h5></center>
            </div>
          </div>
          <br>
          <div class="row">
            <center><div class="col-8">
              <input type="text" class="form-control" id="username" Placeholder="Please Type Username" name="username" required>
            </div></center>
          </div>
          <br>
          <div class="row">
            <center><div class="col-8">
              <input type="text" class="form-control" id="username" Placeholder="Please Type Password" name="username" required>
            </div></center>
          </div>
        </form>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Login</button>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1" data-bs-whatever="@mdo">Registration</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade modal-md" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Registration Form</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <table>
        <tr>
          <th>
     <div class="row">
          <div class="col-12">
              <div class="card-body">
              <form class="form-horizontal" method="POST" action="admin_add.php" enctype="multipart/form-data">
            <div class="form-group">
              </div>
                <div class="row">
                  <div class="col-6">
                    <label for="username" class="form-label">User Name</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                  </div>
                  <div class="col-6">
                    <label for="firstname" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <label for="firstname" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <label for="lastname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <label>Category</label>
                      <select class="form-control select2" name="category" style="width: 100%;">
                        <option selected="selected" value="Admin">Admin</option>
                        <option value="Super Admin">Super Admin</option>
                      </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                     <label for="photo" class="form-label">Photo</label>
                     <input class="form-control form-control-sm" id="photo" name="photo" type="file">
                  </div>
                </div>
              </div>
             
          </div>
        </div>

      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Login</button>
      <a href="index.php"><button type="button" class="btn btn-primary">Cancel</button>
                </a>
      </div>
    </div>
  </div>
</div>


  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>