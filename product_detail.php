<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Hanampi.com</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url() ?>assets/frontend/assets/img/LOGO.jpg" rel="icon">
  <link href="<?= base_url() ?>assets/frontend/assets/img/LOGO.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>assets/frontend/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/frontend/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/frontend/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/frontend/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/frontend/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/frontend/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url() ?>assets/frontend/assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
/>
<script src="https://kit.fontawesome.com/8e2a013e27.js" crossorigin="anonymous"></script>
  <style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.floating-icons {
    position: fixed;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
    display: flex;
    flex-direction: column;
    gap: 10px;
    z-index: 1000;
}

.floating-icons a:hover {
    transform: scale(1.1);
}

.floating-icons img {
    width: 100%;
    height: 100%;
    border-radius: 50%;
}
    html,
    body {
      position: relative;
      height: 100%;
    }

    body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
    }

    swiper-container {
      width: 100%;
      padding-top: 50px;
      padding-bottom: 50px;
    }

    swiper-slide {
      background-color: #ffffff;
      background-position: center;
      background-size: cover;
      width: 300px;
      height: 300px;
      display: flex;
      border-radius: 10px;
    }

    swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
    }
  </style>
</head>

<body>
  <div class="floating-icons">
  <a
    href="https://api.whatsapp.com/send?text=<?php echo urlencode($title . ' ' . base_url('product/' . $product_id)); ?>"
    class="share-button whatsapp"><i class="fab fa-whatsapp"></i></a>
    <!-- Tombol Share ke Facebook -->
  <a 
    href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($title . ' ' . base_url('product/' . $product_id)); ?>" 
    target="_blank" class="share-button facebook"><i class="fab fa-facebook-f"></i></a>
  </div>

  <!-- ======= Top Bar ======= -->
  <!-- <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">info@example.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> +1 5589 55488 55
      </div>
      <div class="social-links d-none d-md-block">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section> -->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="<?= base_url() ?>home"><img src="<?= base_url() ?>assets/frontend/assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto active" href="<?= base_url() ?>home">HOME</a></li>
        <li><a class="nav-link scrollto active" href="#services-area-two">KEUNGGULAN</a></li>
          <li><a class="nav-link scrollto" href="#portfolio-details">SPESIFIKASI</a></li>
          <li><a class="nav-link scrollto" href="#shop"><button type="button" class="btn btn-warning">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-fill" viewBox="0 0 16 16">
            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z"/>
            </svg> Beli</button></a></li>
          <li><a class="nav-link scrollto" href="<?= base_url() ?>product"><button type="button" class="btn btn-outline-warning">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
            </svg> Produk Kami</button></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  

  <!-- ======= Hero Section ======= -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .share-button {
            display: inline-block;
            padding: 10px 15px;
            margin: 5px;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-family: Arial, sans-serif;
        }

        .share-button.facebook {
            background-color: #4267B2;
        }

        .share-button.facebook:hover {
            background-color: #365899;
        }

        .share-button.whatsapp {
            background-color: #25D366;
        }

        .share-button.whatsapp:hover {
            background-color: #1DA851;
        }

        .share-button i {
            margin-right: 5px;
        }
    </style>
  <div class="main-banner" id="home">
            <div
                class="d-table"
                style="background-image: url('<?= base_url() ?>/assets/frontend/images/background.jpg');">
                <div class="d-table-cell c">
                    <div class="container">
                        <div class="row h-100 justify-content-center align-items-center">
                            <div class="col-lg-8">
                                <div class="hero-content text-left text-white" data-aos="fade-right">
                                    <h1 class="text-white" style="text-transform: uppercase;"><?= $title; ?></h1>
                                    <div class="text-white">
                                        <h4><?= $deskripsi; ?></h4>
                                    </div>
                                    <a
                                        href="https://api.whatsapp.com/send?text=<?php echo urlencode($title . ' ' . base_url('product/' . $product_id)); ?>"
                                        class="share-button whatsapp"><i class="fab fa-whatsapp"></i></a>
                                        <!-- Tombol Share ke Facebook -->
                                    <a 
                                        href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($title . ' ' . base_url('product/' . $product_id)); ?>" 
                                        target="_blank" class="share-button facebook"><i class="fab fa-facebook-f"></i></a>
                                        
                                    <a
                                        href="#services-area-two"
                                        class="btn-get-started animate__animated animate__fadeInUp scrollto">Keunggulan</a>
                                    <a
                                        href="<?= base_url() . 'assets/backend/images/brosur/' . $brosur; ?>"
                                        class="btn-get-started animate__animated animate__fadeInUp scrollto">
                                        <i class="bi bi-download"></i>
                                        Brosur</a>
                                    <!-- <i class="fa fa-check-circle"></i> -->
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="entry-img" data-aos="fade-left">
                                    <img
                                        src="<?= base_url() . 'assets/backend/images/product/' . $image; ?>"
                                        alt=""
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--FITUR DESC-->
        <section class="services-area-two" id="services-area-two">
            <div class="container" data-aos="fade-up">
                <div class="title">
                    <h2>Keunggulan</h2>
                    <p>Keunggulan Pupuk
                        <?= $title; ?>
                    </p>
                </div>
                <div class="row">
                    <?php
                 $split_tag = explode(",", $keunggulan);
                    foreach ($split_tag as $keunggulan) :
                    ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-services-box">
                            <div class="icon">
                                <i class="fa-solid fa-seedling" style='font-size:48px;color:green'></i>
                            </div>
                            <h3><?= $keunggulan; ?></h3>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>


            <!-- ======= Portfolio Details Section ======= -->
            <section id="portfolio-details" class="portfolio-details">
                <div class="container" data-aos="fade-up">
                    <div class="row gy-4">
                        <div class="col-4 col-lg-3">
                            <div class="portfolio-details-slider swiper">
                                <div class="swiper-wrapper align-items-center">
                                    <div class="swiper-slide">
                                        <img
                                            src="<?= base_url() . 'assets/backend/images/product/' . $image; ?>"
                                            alt="">
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                        <div class="col-8 col-lg-9">
                            <div class="portfolio-info">
                                <h3 class="mb-3">Spesifikasi</h3>
                                <ul style="list-style-type:circle; margin-left: 35px;">
                                    <?php
                                $split_spek = explode(",", $spesifikasi);
                                    foreach ($split_spek as $spesifikasi) :
                                    ?>
                                    <li><?= $spesifikasi; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Portfolio Details Section -->

            <!-- ======= Portfolio Details Section ======= -->
            <section id="shop" class="shop">
                <div
                    class="shop-info" 
                    style="background-image: url('<?= base_url() ?>/assets/frontend/images/shop-hsk.png');">
                    <div class="shop-content text-left" data-aos="fade-right">
                        <h1 class="" style="text-transform:">Pembelian</h1>
                        <h4>Mendapatkan produk kami kini lebih mudah dengan menghubungi mitra penjualan atau kontak person kami</h4>
                        <a href="https://api.whatsapp.com/send?phone=6285815338115&text=hello" class="btn-get-wa animate__animated animate__fadeInUp scrollto float"><i class="bi bi-whatsapp"></i> Whatsapp 
                        </a>
                        <a href="mailto:bizteam@hanampi.com?subject=hello%20team%20marketing%20hanampi%20&body=Saya%20mau%20order%20produk%"
                        class="btn-get-email animate__animated animate__fadeInUp scrollto"><i class="bi bi-envelope"></i>
                        Email</a>
                    </div>

                </div>

            </section>


            <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 footer-info">
            <div class="logo me-auto">
              <!-- Uncomment below if you prefer to use an image logo -->
              <a href=""><img src="<?= base_url() ?>/assets/frontend/assets/img/logo.png" alt="" class="img-fluid"></a>
            </div>
            <p>
            PT Hanampi Sejahtera Kahuripan merupakan Produsen Pupuk di Indonesia 
            yang memproduksi berbagai macam pupuk dan bahan kimia untuk solusi agroindustri.<br>
            </p>
            <div class="social-links mt-3">
              <a href="https://www.instagram.com/hanampisejahterakahuripan?igsh=c2Vld3N2cmM3cDky" class="instagram">
                <i class="bx bxl-instagram"></i>
              </a>
              <a href="https://www.tiktok.com/@pt.hsk?_t=8jQdEouMe3U&_r=1" class="google-plus">
                <i class="bx bxl-tiktok"></i>
              </a>

            </div>
            
          </div>
          <div class="col-lg-4 col-md-6 footer-links">
            <h4>KANTOR PUSAT</h4>
            <ul>
              <li><span style="color:#fbeba3;">ALAMAT<span><br>
                <span>Beta Maspion Blok I,Kawasan Industri Maspion, Jalan Manyar KM 25 Desa Manyar  Sidomukti,
                Gresik 61151, Jawa Timur, Indonesia</span>
               </li>
               <li><span style="color:#fbeba3;">TELEPON<span><br>
                <span>031-3930722, 031-3930723</span>
               </li>
              
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>PUSAT PELAYANAN</h4>
            <ul>
            <li><span style="color:#fbeba3;">JAM OPERASIONAL<span><br>
                <span>Hari Senin s/d jum'at, pukul 08.00 - 17.00 WIB</span>
               </li>
               <ul>
            <li><span style="color:#fbeba3;">SMS/WHATSAPP<span><br>
                <span><a href="https://api.whatsapp.com/send?phone=6281249900020&text=hello%20PT%20HSK,%20Saya%20Mau%20Bertanya%">081249900020</a></span>
               </li>
               <li><span style="color:#fbeba3;">Email<span><br>
                <span><a href="mailto:bizteam@hanampi.com?">bizteam@hanampi.com</a></span>
               </li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
    <div class="row">
    <div class="col-md-8">
      <div class="copyright">
        <span>Hak Cipta © 2023 PT Hanampi Sejahtera Kahuripan. All Rights Reserved.</span><br>
        <span>Untuk tampilan terbaik gunakan Mozilla Firefox atau Google Chrome.</span>
      </div>
    </div>
    <div class="col-md-4">
      <div class="credits">
      <img src="<?= base_url() . 'assets/frontend/images/icon-iso.png'; ?>" alt="" class="img-fluid">
      </div>
      <div class="pengunjung">
       <span>Total Pengunjung : <?php echo number_format($all_visitors); ?></span>
       </div>
    </div>
    </div>
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url() ?>assets/frontend/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?= base_url() ?>assets/frontend/assets/vendor/aos/aos.js"></script>
  <script src="<?= base_url() ?>assets/frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>assets/frontend/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url() ?>assets/frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url() ?>assets/frontend/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url() ?>assets/frontend/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url() ?>assets/frontend/assets/js/main.js"></script>
  
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>



</body>
</html>