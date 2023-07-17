<?php
$datas = file_get_contents('https://super7tech.com/web_developer_exam_sr/json/slideshow.json');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Front-End</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Custom Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="sub-header-menu">
      <div class="container pb-3 d-flex align-items-center justify-content-between">

        <h1 class="logo"><a href="javascript:;">KONGSI</a> <img src="assets/image/ole777-white.png" alt="Logo" class="img-fluid"></a></h1>

        <nav class="navbar2">
          <ul>
            <li><a class="getlogin scrollto" href="#login">Login</a></li>
            <li><a class="getdaftarsekarang scrollto" href="#daftar-sekarang">Daftar sekarang</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
      </div>
    </div>
    <div class="container d-flex align-items-center justify-content-first">
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#banner">TenTang OLE777</a></li>
          <li><a class="nav-link scrollto" href="#box-detail">Komisi</a></li>
          <li><a class="nav-link scrollto" href="#services">Peraturan</a></li>
          <li><a class="nav-link scrollto" href="#about">Pertanyaan & Jawaban</a></li>
          <li></li>
        </ul>
        <!-- <i class="bi bi-list mobile-nav-toggle"></i> -->
      </nav><!-- .navbar -->
      <a href="#OLE777-Official" class="logo-link"><span class="badge badge-custom">OLE777 Official</span></span></a>
    </div>

  </header>
  <!-- End Header -->
  <!-- ======= Testimonials Section ======= -->
  <section id="banner" class="d-flex align-items-center banner">
    <div class="container position-relative" data-aos="fade-up">
      <div class="banner-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">
          <?php foreach (json_decode($datas) ?: [] as $key => $value) : ?>
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="<?php echo $value->img; ?>" class="testimonial-img" alt="">
              </div>
            </div><!-- End testimonial item -->
          <?php endforeach; ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section>
  <!-- End Testimonials Section -->
  <main id="main">
    <!-- ======= box-detail-slider Section ======= -->
    <section id="box-detail" class="d-flex align-items-center box-detail">
      <div class="container position-relative " data-aos="fade-up">
        <div class="box-detail-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            <?php foreach (['assets/image/img-cta-3.jpg', 'assets/image/img-cta-2.jpg', 'assets/image/img-cta-1.jpg'] as $key => $value) : ?>
              <div class="swiper-slide py-1">
                <div class="box-detail-item">
                  <div class="membe">
                    <div class="member-img">
                      <img src="<?php echo $value; ?>" class="img-fluid" alt="">
                    </div>
                  </div>
                </div>
              </div><!-- End testimonial item -->
            <?php endforeach; ?>
          </div>
          <!-- <div class="swiper-pagination"></div> -->
        </div>
      </div>
    </section>
    <!-- End box-detail-slider Section -->
    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg pb-3">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-3 col-sm-6 col-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <img src="assets/image/img-group.svg" alt="Tim Pembayaran yang Profesional" />
              </div>
              <h4><a href="javascript:;">Tim Pembayaran yang Profesional</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 col-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <div class="icon">
                <img src="assets/image/img-domino.svg" alt="Brand yang Terkenal" />
              </div>
              <h4><a href="javascript:;">Brand yang Terkenal</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 col-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-pink">
              <div class="icon">
                <img src="assets/image/img-document.svg" alt="Sistem Laporan Professional" />
              </div>
              <h4><a href="javascript:;">Sistem Laporan Professional</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 col-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-teal">
              <div class="icon">
                <img src="assets/image/img-settings.svg" alt="Personalisasikan Paket Pribadi" />
              </div>
              <h4><a href="javascript:;">Personalisasikan Paket Pribadi</a></h4>
              <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Sevices Section -->
    <!-- ======= About Section ======= -->
    <section id="about" class="about pb-3">
      <div class="container" data-aos="fade-up">
        <div class="row content">
          <div class="col-lg-12 pt-4 pt-lg-0">
            <p>
              <strong>Ullamco laboris</strong> nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
          <div class="col-lg-12 pt-4">
            <p>
              <strong>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </strong>
            </p>
            <ul>
              <li><span class="badge badge-custom">1</span> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><span class="badge badge-custom">2</span> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><span class="badge badge-custom">3</span> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><span class="badge badge-custom">4</span> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul>
          </div>

        </div>

      </div>
    </section><!-- End About Section -->
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <img src="assets/image/Sticker WhatsApp Gratis - Kongsi OLE777.gif" alt="advertisement">
          </div>
        </div>
      </div>
    </div>
    <div class="footer-info">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 py-1 footer-contact">
            <span><img src="assets/image/icon-skype.svg" alt="skype"> Pelayanan Pelanggan Skype: <a href="javascript:;">affiliasi.id@oleintl.com</a> </span>
          </div>
          <div class="col-lg-4 col-md-4 py-1 footer-contact">
            <span><img src="assets/image/icon-email.svg" alt="email"> Email <a href="javascript:;">affiliasi.id@indo.com</a></span>
          </div>
          <div class="col-lg-4 col-md-4 py-1 footer-contact">
            <span><img src="assets/image/icon-whatsapp.svg" alt="whatsapp"> Whatsapp: <a href="javascript:;">+639506122324</a></span>
          </div>
        </div>
      </div>
    </div>
    <div class="container footer-bottom d-md-flex py-3">
      <div class="row info">
        <div class="col-lg-3 col-md-6 py-1">
          <div class="chelsea">
            <img src="assets/image/logo-chelsea.svg" alt="chelsea">
            <!-- <h4>Partner Resmi Chelsea FC</h4> -->
            <!-- <p></p> -->
          </div>
        </div>

        <div class="col-lg-3 col-md-6 py-1">
          <div class="pagcor">
            <img src="assets/image/logo-pagcor.png" alt="pagcor">
            <!-- <h4>Call:</h4>
            <p>+1 5589 55488 55s</p> -->
          </div>
        </div>

        <div class="col-lg-3 col-md-6 py-1">
          <div class="iom">
            <img src="assets/image/logo-iom.png" alt="iom">
            <!-- <h4>Call:</h4>
            <p>+1 5589 55488 55s</p> -->
          </div>
        </div>

        <div class="col-lg-3 col-md-6 py-1">
          <img src="assets/image/ole777-white.png" alt="Logo" class="img-fluid logo"></a>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
