<?php

session_start();
if (!isset($_SESSION["user"])) header("Location: ../../login.php");
include('../config/data_service.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>NoiseGarage | Service</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="../../vendor/img/favicon.png" rel="icon">
  <link href="../../vendor/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="../../vendor/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../../vendor/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../../vendor/lib/animate/animate.min.css" rel="stylesheet">
  <link href="../../vendor/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="../../vendor/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../../vendor/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../../vendor/css/style.css" rel="stylesheet">

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
  <header id="header" style="background: black; height: 72px; padding: 20px 0;">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="../index.php" class="scrollto">NoiseGarage</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="../index.php">Home</a></li>
          <li class="menu-has-children"><a href="">Galeries</a>
            <ul>
              <li><a href="service.php">Service</a></li>
              <li><a href="otoparts.php">OtoParts</a></li>
            </ul>
          </li>
          <li><a href="../../logout.php">Logout</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->



  <!--==========================
      About Us Section
    ============================-->
  <section id="mobil" style="padding: 100px 0 40px 0;">
    <div class="container">

      <header class="section-header">
        <h3>Service</h3>
      </header>
      <div class="row about-cols">
        <?php
        $no = 0;
        while ($row = $q->fetch()) :
          $no++;
          $id_service = $row['id_service'];
          $nama_service = $row['nama_service'];
          $harga_service = $row['harga_service'];
          $merek_service = $row['merek_service'];
          $ukuran_service = $row['ukuran_service'];
          $deskripsi_service = $row['deskripsi_service'];
          $image_service = $row['image_service'];
        ?>
          <div class="col-md-4 wow fadeInUp " data-wow-delay="0.1s">
            <div class=" about-col">
              <div class="img">
                <img src="../../vendor/img/servis/<?= $image_service ?>" alt="" class="img-fluid">
                <form action="../sub/subservice.php" method="POST">
                  <div class="icon">
                    <!-- <button type="submit"><i class="fa fa-shopping-cart"></i></a></button> -->
                    <button class="btn btn-sm btn-success">
                      <li class="fa fa-shopping-cart"></li>
                    </button>

                    <input type="hidden" name="id_service" value="<?= $id_service ?>" />
                    <input type="hidden" name="nama_service" value="<?= $nama_service ?>" />
                    <input type="hidden" name="harga_service" value="<?= $harga_service ?>" />
                    <input type="hidden" name="merek_service" value="<?= $merek_service ?>" />
                    <input type="hidden" name="ukuran_service" value="<?= $ukuran_service ?>" />
                    <input type="hidden" name="deskripsi_service" value="<?= $deskripsi_service ?>" />
                    <input type="hidden" name="image_service" value="<?= $image_service ?>" />

                  </div>

                </form>
              </div>
              <h2 class="title"><a href="#"><?= $nama_service ?></a></h2>
              <p align="center">
                Rp. <?= $harga_service ?>
              </p>
            </div>
          </div>

        <?php endwhile; ?>
      </div>


    </div>
  </section><!-- #about -->


  <?php
  include '../footer.html';
  ?>


  <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->

  </div>
  </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="../../vendor/lib/jquery/jquery.min.js"></script>
  <script src="../../vendor/lib/jquery/jquery-migrate.min.js"></script>
  <script src="../../vendor/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../vendor/lib/easing/easing.min.js"></script>
  <script src="../../vendor/lib/superfish/hoverIntent.js"></script>
  <script src="../../vendor/lib/superfish/superfish.min.js"></script>
  <script src="../../vendor/lib/wow/wow.min.js"></script>
  <script src="../../vendor/lib/waypoints/waypoints.min.js"></script>
  <script src="../../vendor/lib/counterup/counterup.min.js"></script>
  <script src="../../vendor/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="../../vendor/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="../../vendor/lib/lightbox/js/lightbox.min.js"></script>
  <script src="../../vendor/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="../../vendor/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="../../vendor/js/main.js"></script>

</body>

</html>