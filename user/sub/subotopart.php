<?php
$id_otopart = $_POST['id_otopart'];
$nama_otopart = $_POST['nama_otopart'];
$harga_otopart = $_POST['harga_otopart'];
$merek_otopart = $_POST['merek_otopart'];
$ukuran_otopart = $_POST['ukuran_otopart'];
$deskripsi_otopart = $_POST['deskripsi_otopart'];
$image_otopart = $_POST['image_otopart'];
require_once('../../auth.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>NoiseGarage</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="../../vendor/img/favicon.png" rel="icon">
    <link href="../../vendor/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="../../vendor/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

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
                <h1><a href="../#intro" class="scrollto">NoiseGarage</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="../#intro"><img src="../img/logo.png" alt="" title="" /></a>-->
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="../index.html">Home</a></li>
                    <li class="menu-has-children"><a href="../">Galeries</a>
                        <ul>
                            <li><a href="../views/service.php">Service</a></li>
                            <li><a href="../views/otoparts.php">OtoParts</a></li>
                        </ul>
                    </li>
                    <li><a href="../../logout.php">Logout</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </header><!-- #header -->

    <!--==========================
    Intro Section
  ============================-->

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="main">
        <section id="portfolio" class="section-bg" style="padding: 100px 0 40px 0;">
            <div class="container">

                <div class="row portfolio-container">
                    <div class="col-lg-6 col-md-6 portfolio-item wow fadeInUp">
                        <div class="portfolio-wrap">
                            <figure style="height: 100%;">
                                <img src="../../vendor/img/otoparts/<?= $image_otopart ?>" class="img-fluid" alt="">
                                <a href="../../vendor/img/otoparts/<?= $image_otopart ?>" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 portfolio-item wow fadeInUp">
                        <div class="portfolio-info" style="padding: 18px;">

                            <h3 style="margin:0 0 0 0;"><strong>Rp. <?= $harga_otopart ?></strong></h3>
                            <span style="text-align: center;"><?= $nama_otopart ?></span>
                            <p align="left">Deskripsi</p>
                            <?= $deskripsi_otopart ?>
                        </div>
                        <div class="portfolio-info">
                            <button class="btn btn-success" onclick="$('#main').fadeOut();$('#form').fadeIn();"><i class="fa fa-shopping-cart"></i> Beli</button>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row portfolio-container">
                    <div class="col-lg-12 col-md-12 portfolio-item wow fadeInUp">
                        <div class="portfolio-info" style="padding: 18px; height: 210px;">
                            <p><b>Detail</b>
                            <p>
                                <br>
                            <table width="100%">
                                <tr>
                                    <td align="left" width="25%">
                                        <p>Merek</p>
                                    </td>
                                    <td align="left" width="25%"><?= $merek_otopart ?></td>
                                    <td align="left" width="25%">
                                        <p>Ukuran</p>
                                    </td>
                                    <td align="left" width="25%"><?= $ukuran_otopart ?></td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- #portfolio -->
    </section>

    <section id="form" style="padding: 40px 0 40px 0; display: none;">
        <section id="portfolio" class="section-bg">
            <div class="container">

                <div class="row portfolio-container">

                    <div class="col-lg-12 col-md-12 portfolio-item wow fadeInUp" style="height: 550px;">

                        <div class="portfolio-info" style="padding: 18px; height:100%;">
                            <div class="panel-body">
                                <form action="../config/beli_otopart.php" method="POST">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Lengkap</label>
                                        <input type="text" class="form-control" readonly name="username" value="<?php echo $_SESSION['user']['username'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Alamat</label>
                                        <input type="text" class="form-control" readonly name="alamat" value="<?= $_SESSION['user']['alamat'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control" readonly name="email" value="<?= $_SESSION['user']['email'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">No. Hp</label>
                                        <input type="number" class="form-control" readonly name="telepon" value="<?= $_SESSION['user']['telepon'] ?>">
                                    </div>

                                    <div class="form-group">
                                        <h3>Rp. <?= $harga_otopart ?></h3>
                                    </div>
                                    <input type="hidden" name="id_otopart" value="<?= $id_otopart ?>" />
                                    <input type="hidden" name="id" value="<?= $_SESSION['user']['id'] ?>">
                                    <input type="hidden" name="harga_otopart" value="<?= $harga_otopart ?>" />


                                    <button type="submit" class="btn btn-md btn-primary">Beli</button>
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
      Footer
    ============================-->
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

    <a href="../#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
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
    <script>
        function pesan() {
            $('#close').fadeIn();
        }

        function batal() {
            $('#form').fadeOut();
            $('#main').fadeIn();
        }
    </script>

</body>

</html>