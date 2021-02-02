<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cerdas Codding</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="../vendor/img/favicon.png" rel="icon">
    <link href="../vendor/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="../../vendor/../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- ../libraries CSS Files -->
    <link href="../vendor/../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../vendor/../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../vendor/../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../vendor/../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../vendor/../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

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
    <?php
    include '../header.html';
    ?>


    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio" class="section-bg">
        <div class="container">

            <header class="section-header">
                <h3 class="section-title">Our Class</h3>
            </header>

            <div class="row">
                <div class="col-lg-12">
                    <ul id="portfolio-flters">
                        <li data-filter=".filter-mobile">Mobile</li>
                        <li data-filter=".filter-web">Web</li>
                        <li data-filter=".filter-desktop">Desktop</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">
                <div class="col-lg-4 portfolio-item filter-mobile wow fadeInUp">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="../vendor/img/portfolio/flutter.png" class="img-fluid">
                            <a href="../vendor/img/portfolio/flutter.png" data-lightbox="portfolio" data-title="Flutter" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                            <a href="../class/flutter.php" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="#">Flutter</a></h4>
                            <p></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 portfolio-item filter-mobile wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="../vendor/img/portfolio/androidstudio.png" class="img-fluid" alt="">
                            <a href="../vendor/img/portfolio/androidstudio.png" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                            <a href="../class/android.php" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="#">Android Studio</a></h4>
                            <p></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="../vendor/img/portfolio/codeigniter.png" class="img-fluid" alt="">
                            <a href="../vendor/img/portfolio/codeigniter.png" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                            <a href="../class/codeigniter.php" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="#">CodeIgniter</a></h4>
                            <p></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 portfolio-item filter-web wow fadeInUp">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="../vendor/img/portfolio/laravel.png" class="img-fluid" alt="">
                            <a href="../vendor/img/portfolio/laravel.png" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                            <a href="../class/laravel.php" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="#">Laravel</a></h4>
                            <p></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 portfolio-item filter-desktop wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="../vendor/img/portfolio/java.jpg" class="img-fluid" alt="" height="400" width="500">
                            <a href="../vendor/img/portfolio/java.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                            <a href="../class/java.php" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="#">Java</a></h4>
                            <p></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 portfolio-item filter-desktop wow fadeInUp" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="../vendor/img/portfolio/python.png" class="img-fluid" alt="">
                            <a href="../vendor/img/portfolio/python.png" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                            <a href="../class/python.php" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="#">Python</a></h4>
                            <p></p>
                        </div>
                    </div>
                </div>



            </div>

        </div>
    </section>

    <?php
    include '../footer.html'
    ?>
    <script src="../lib/jquery/jquery-migrate.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/superfish/hoverIntent.js"></script>
    <script src="../lib/superfish/superfish.min.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/counterup/counterup.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/isotope/isotope.pkgd.min.js"></script>
    <script src="../lib/lightbox/js/lightbox.min.js"></script>
    <script src="../lib/touchSwipe/jquery.touchSwipe.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>

</body>

</html>