<?php
require_once('../auth.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>NoiseGarage | Dashboard</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="../vendor/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../vendor/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../vendor/lib/animate/animate.min.css" rel="stylesheet">
  <link href="../vendor/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="../vendor/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../vendor/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../vendor/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->

  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">NoiseGarage</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li class="menu-has-children"><a href="">Galeries</a>
            <ul>
              <li><a href="views/service.php">Service</a></li>
              <li><a href="views/otoparts.php">OtoParts</a></li>
            </ul>
          </li>
          <li class="menu-has-children"><a href="">Profile</a>
            <ul>
              <li><a onclick="$('#intro').fadeOut();$('#form').fadeIn();">Edit Profile</a></li>
              <li><a href="../logout.php">Logout</a></li>
            </ul>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
  <section id="form" style="padding: 20px 0 20px 0; display: none;">
    <section id="portfolio" class="section-bg">
      <div class="container">

        <div class="row portfolio-container">

          <div class="col-lg-6 col-md-6 portfolio-item wow fadeInUp" style="height: 650px;">

            <div class="portfolio-info" style="padding: 18px; height:100%;">
              <div class="panel-body">
                <form action="config/editprofile.php" method="POST">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input type="text" class="form-control" name="username" value="<?php echo $_SESSION['user']['username'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="<?= $_SESSION['user']['alamat'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" name="email" value="<?= $_SESSION['user']['email'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No. Hp</label>
                    <input type="number" class="form-control" name="telepon" value="<?= $_SESSION['user']['telepon'] ?>">
                  </div>
                  <div class="form-group">
                    <label>File image</label>
                    <input type="file" name="photo">
                    <img src="../vendor/img/user/<?= $_SESSION['user']['photo'] ?>" class="img-rounded" width="150px" height="100px" />
                  </div>

                  <input type="hidden" name="id" value="<?= $_SESSION['user']['id'] ?>">
                  <input type="hidden" name="username" value="<?= $_SESSION['user']['username'] ?>">
                  <input type="hidden" name="alamat" value="<?= $_SESSION['user']['alamat'] ?>">
                  <input type="hidden" name="email" value="<?= $_SESSION['user']['email'] ?>">
                  <input type="hidden" name="telepon" value="<?= $_SESSION['user']['telepon'] ?>">
                  <input type="hidden" name="photo" value="<?= $_SESSION['user']['photo'] ?>">


                  <button type="submit" class="btn btn-md btn-primary">Update</button>
                </form>
                <br>
                <button type="submit" class="btn btn-danger" onclick="batal()">Batal</button>

              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->
  </section>
  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="../vendor/img/intro-carousel/1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>We are professional</h2>
                <p>BENGKEL DENGAN KUALITAS TERJAMIN DAN TERPERCAYA.</p>

              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="../vendor/img/intro-carousel/2.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>We are professional</h2>
                <p>NOISE IN THE GARAGE, FULL TORQUE IN THE ROAD.</p>

              </div>
            </div>
          </div>


        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Our Portfolio</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter=".filter-mobil">Service</li>
              <li data-filter=".filter-motor">OtoParts</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-mobil wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="../vendor/img/portfolio/app1.jpg" class="img-fluid" alt="" height="700" width="700">
                <a href="../vendor/img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="fa fa-shopping-cart"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Servis Mesin</a></h4>
                <p></p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="../vendor/img/portfolio/web3.jpg" class="img-fluid" alt="">
                <a href="../vendor/img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Stir</a></h4>
                <p></p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-mobil wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="../vendor/img/portfolio/app2.jpg" class="img-fluid" alt="">
                <a href="../vendor/img/portfolio/app2.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Servis Kaki-kaki</a></h4>
                <p></p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-motor wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="../vendor/img/portfolio/card2.png" class="img-fluid" alt="">
                <a href="../vendor/img/portfolio/card2.png" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Ganti Ban</a></h4>
                <p></p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="../vendor/img/portfolio/web2.jpg" class="img-fluid" alt="" height="400" width="500">
                <a href="../vendor/img/portfolio/web2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Ganti Knalpot</a></h4>
                <p></p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-mobil wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="../vendor/img/portfolio/app3.jpg" class="img-fluid" alt="">
                <a href="../vendor/img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Konsultasi</a></h4>
                <p></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Our Supports</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <img src="../vendor/img/clients/yokohama.png" alt="" height="100" width="110">
          <img src="../vendor/img/clients/mobil1.png" alt="" height="100" width="110">
          <img src="../vendor/img/clients/bbs.png" height="100" width="110">
          <img src="../vendor/img/clients/client-4.jpg" alt="" height="100" width="110">
          <img src="../vendor/img/clients/3m.png" alt="" height="100" width="110">
          <img src="../vendor/img/clients/sparco.png" alt="" height="100" width="110">
        </div>

      </div>
    </section><!-- #clients -->


    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 footer-contact"></div>
            <center>
              <h4>Contact Us</h4>
              <p>
                Sekolah Tinggi Teknologi Bandung <br>
                Jl. Soekarno-Hatta No.378, Kb. Lega, <br>
                Kec. Bojongloa Kidul, Kota Bandung, Jawa Barat 40235<br>
                Indonesia <br>
                <strong>Trisnayudha Bachtiar</strong> 18111165<br>
                <strong>Mahasiswa</strong> TIF RP 18 CID A <br>
              </p>

              <div class="social-links">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              </div>
            </center>
          </div>
        </div>
      </div>
    </footer><!-- #footer -->


    <!-- JavaScript Libraries -->
    <script src="../vendor/lib/jquery/jquery.min.js"></script>
    <script src="../vendor/lib/jquery/jquery-migrate.min.js"></script>
    <script src="../vendor/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../vendor/lib/easing/easing.min.js"></script>
    <script src="../vendor/lib/superfish/hoverIntent.js"></script>
    <script src="../vendor/lib/superfish/superfish.min.js"></script>
    <script src="../vendor/lib/wow/wow.min.js"></script>
    <script src="../vendor/lib/waypoints/waypoints.min.js"></script>
    <script src="../vendor/lib/counterup/counterup.min.js"></script>
    <script src="../vendor/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../vendor/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="../vendor/lib/lightbox/js/lightbox.min.js"></script>
    <script src="../vendor/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="../vendor/js/main.js"></script>

</body>
<script>
  function pesan() {
    $('#close').fadeIn();
  }

  function batal() {
    $('#form').fadeOut();
    $('#intro').fadeIn();
  }
</script>

</html>