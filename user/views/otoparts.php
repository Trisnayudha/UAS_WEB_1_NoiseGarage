<?php
require_once('../../auth.php');
include('../config/data_otoparts.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>NoiseGarage | Otoparts</title>
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

  <!-- ../../vendor/libraries CSS Files -->
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
  <section id="motor" style="padding: 100px 0 40px 0;">
    <div class="container">

      <header class="section-header">
        <h3>OtoParts</h3>
      </header>

      <div class="row about-cols">
        <?php
        $no = 0;
        while ($row = $q->fetch()) :
          $no++;
          $id_otopart = $row['id_otopart'];
          $nama_otopart = $row['nama_otopart'];
          $harga_otopart = $row['harga_otopart'];
          $merek_otopart = $row['merek_otopart'];
          $ukuran_otopart = $row['ukuran_otopart'];
          $deskripsi_otopart = $row['deskripsi_otopart'];
          $image_otopart = $row['image_otopart'];
        ?>
          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="../../vendor/img/otoparts/<?= $image_otopart ?>" alt="" class="img-fluid">
                <form action="../sub/subotopart.php" method="POST">
                  <div class="icon">
                    <!-- <button type="submit"><i class="fa fa-shopping-cart"></i></a></button> -->
                    <button class="btn btn-sm btn-success">
                      <li class="fa fa-shopping-cart"></li>
                    </button>

                    <input type="hidden" name="id_otopart" value="<?= $id_otopart ?>" />
                    <input type="hidden" name="nama_otopart" value="<?= $nama_otopart ?>" />
                    <input type="hidden" name="harga_otopart" value="<?= $harga_otopart ?>" />
                    <input type="hidden" name="merek_otopart" value="<?= $merek_otopart ?>" />
                    <input type="hidden" name="ukuran_otopart" value="<?= $ukuran_otopart ?>" />
                    <input type="hidden" name="deskripsi_otopart" value="<?= $deskripsi_otopart ?>" />
                    <input type="hidden" name="image_otopart" value="<?= $image_otopart ?>" />

                  </div>

                </form>
              </div>
              <h2 class="title"><a href="#"><?= $nama_otopart ?></a></h2>
              <p align="center">
                Rp. <?= $harga_otopart ?>
              </p>
            </div>
          </div>
        <?php endwhile; ?>


      </div>

    </div>
  </section><!-- #about -->

  <?php
  require_once '../footer.html';
  ?>

  <!-- JavaScript ../../vendor/libraries -->
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