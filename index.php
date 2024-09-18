<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Arsha Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

<!-- header -->
 <?php require_once 'header.php' ?>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <h1>SYAKA DESIGN KONSTRUKSI</h1>
            <p align="justify">Syaka Desain Konstruksi siap membantu mewujudkan impian anda dalam membangun proyek yang
              berkualitas dan
              aman.
              Dengan pengalaman lebih dari 8 tahun dalam jasa sketsa bangunan, kami menawarkan layanan yang mencakup
              berbagai jenis bangunan, termasuk gedung, rumah, hotel, jembatan dan lain-lain. </p>
            <div class="d-flex">
              <a href="#about" class="btn-get-started">Jawa</a> <br>
              <a href="#about" class="btn-get-started">Bali</a><br>
              <a href="#about" class="btn-get-started">NTB</a>
              <a href="https://www.youtube.com/watch?v=Gbx7tQ-XY4s&ab_channel=SYAKAKONSTRUKSI"
                class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Putar
                  Video</span></a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section light-background">

      <div class="container" data-aos="zoom-in">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 5,
                  "spaceBetween": 120
                },
                "1200": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>

    </section><!-- /Clients Section -->
    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->


      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <div class="container">
              <!-- untuk video -->
              <img src="assets/img/JANTUK.jpg" class="img-fluid animated" alt="">

              <!-- End Section video -->
            </div>


          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <h2>TENTANG KAMI</h2>
            <p align="justify"><strong>Syaka Design Konstruksi</strong>
              adalah perusahaan jasa kontraktor yang berfokus pada jasa
              Bangun Baru dan Renovasi rumah
              tinggal, rumah kost, ruko, kantor, dan kafe. Bangunan Kita memiliki manajemen yang profesional dan
              didukung oleh sumber daya manusia yang ahli dibidangnya masing-masing. memberikan pelayanan yang total
              kepada klien adalah tujuan kami sehingga memberikan kepuasan yang maksimal kepada klien. </p>

            <ul>
            </ul>
            <a href="tentang.html" class="read-more"><span>Tentang</span><i class="bi bi-arrow-right"></i></a>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->


    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->


      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h2> Kami adalah Layanan Kontraktor Renovasi Profesional Terbaik</h2>
            <p align="justify">
              Kami adalah jasa kontraktor bangun rumah yang berpengalaman dalam desain, konstruksi rumah, dan semua
              proses pembangunan rumah sampai serah terima dengan hasil memuaskan.
            <p align="justify">
              Jasa Bangun Rumah Jakarta, Depok, Tangerang, Bekasi, Surabaya, Makasar, Pekan Baru, Bali dan seluruh
              Indonesia.
            </p>

            <a href="tentang.html" class="read-more"><span>Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
          </div>
          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
            <div class="container">
              <!-- untuk video -->
              <iframe width="530" height="300" src="https://www.youtube.com/embed/Gbx7tQ-XY4s?si=H8uY1REkzEvaUtYI"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              <!-- End Section video -->
            </div>


          </div>



        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h3>JASA BANGUN RUMAH KLASIK MODREN "SYAKA DISGN KONSTRUKSI"</h3>
      <br>
      <div class="container">
      </div><!-- End Section Title -->

      <div class="row gy-6">


        <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="200">
          <div class="pricing-item ">
            <center>
              <div class="container">
                <!-- untuk video -->
                <iframe width="530" height="360" src="https://www.youtube.com/embed/xTY4ckHMnj4?si=Yp-40UyIhsD_m9mM"
                  title="YouTube video player" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <!-- End Section video -->
              </div>
              <p>RUMAH MINIMALIS TERBARU 4 KAMAR TIDUR- (12x12m²)</p>

            </center>
          </div>
        </div><!-- End Pricing Item -->

        <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="300">
          <div class="pricing-item">
            <center>
              <div class="container">
                <!-- untuk video -->
                <iframe width="530" height="360" src="https://www.youtube.com/embed/de0NbJgJP7o?si=akqSGKvngMbEd8Qj"
                  title="YouTube video player" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <!-- End Section video -->
              </div>
              <p>RUMAH MINIMALIS MODERN LANTAI 2</p>

            </center>
          </div>
        </div><!-- End Pricing Item -->
        <br>


        <!-- About Section -->
        <section id="about" class="about section">

          <!-- Section Title -->
          <div class="container section-title" data-aos="fade-up">
            <h2>SYAKA DESAIN KONSTRUKSI</h2>
          </div><!-- End Section Title -->

          <div class="container">

            <div class="row gy-4">

              <div class="col-lg-8 content" data-aos="fade-up" data-aos-delay="100">
                <div class="container">
                  <!-- untuk video -->
                  <iframe width="730" height="400" src="https://www.youtube.com/embed/Gbx7tQ-XY4s?si=H8uY1REkzEvaUtYI"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                  <!-- End Section video -->
                </div>


              </div>

              <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <h3>Bangun Rumah Mewah</h3>
                <p class="fst-bolt">
                  Kami adalah jasa kontraktor bangun rumah yang berpengalaman dalam desain, konstruksi rumah, dan semua
                  proses pembangunan rumah sampai serah terima dengan hasil memuaskan.
                <p class="fst-bolt">
                  Jasa Bangun Rumah Jakarta, Depok, Tangerang, Bekasi, Surabaya, Makasar, Pekan Baru, Bali dan seluruh
                  Indonesia.
                </p>

                <a href="tentang.html" class="read-more"><span>Klik Disini Untuk Chat Via WA</span><i
                    class="bi bi-arrow-right"></i></a>
              </div>

            </div>

          </div>

        </section><!-- /About Section -->

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h3>JASA BANGUN RUMAH KLASIK MODREN "SYAKA DISGN KONSTRUKSI"</h3>

          <div class="container">
          </div><!-- End Section Title -->

          <div class="row gy-4">

            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
              <div class="pricing-item">
                <center>
                  <div class="container">
                    <!-- untuk video -->
                    <iframe width="340" height="260" src="https://www.youtube.com/embed/Pj4zgZLzRlM?si=oqlTG7KDCHwUnbVx"
                      title="YouTube video player" frameborder="0"
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                      referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <!-- End Section video -->
                  </div>
                  <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                  <a href="xxxx.html" class="buy-btn">Selengkapnya</a>
                </center>
              </div>
            </div><!-- End Pricing Item -->

            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
              <div class="pricing-item ">
                <center>
                  <div class="container">
                    <!-- untuk video -->
                    <iframe width="340" height="260" src="https://www.youtube.com/embed/xTY4ckHMnj4?si=Yp-40UyIhsD_m9mM"
                      title="YouTube video player" frameborder="0"
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                      referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <!-- End Section video -->
                  </div>
                  <p>RUMAH MINIMALIS TERBARU 4 KAMAR TIDUR- (12x12m²)</p>
                  <a href="xxxx.html" class="buy-btn">Selengkapnya</a>
                </center>
              </div>
            </div><!-- End Pricing Item -->

            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
              <div class="pricing-item">
                <center>
                  <div class="container">
                    <!-- untuk video -->
                    <iframe width="340" height="260" src="https://www.youtube.com/embed/de0NbJgJP7o?si=akqSGKvngMbEd8Qj"
                      title="YouTube video player" frameborder="0"
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                      referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <!-- End Section video -->
                  </div>
                  <p>RUMAH MINIMALIS MODERN LANTAI 2</p>
                  <a href="xxxx.html" class="buy-btn">Selengkapnya</a>
                </center>
              </div>
            </div><!-- End Pricing Item -->



            <!-- Call To Action Section -->
            <section id="call-to-action" class="call-to-action section dark-background">

              <img src="assets/img/cta-bg.jpg" alt="">

              <div class="container">

                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                  <div class="col-xl-9 text-center text-xl-start">
                    <h3>Call To Action</h3>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                      pariatur.
                      Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                      id
                      est
                      laborum.</p>
                  </div>
                  <div class="col-xl-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="#">Call To Action</a>
                  </div>
                </div>

              </div>

            </section><!-- /Call To Action Section -->

            <!-- Services Section -->
            <section id="keunggulan" class="services section light-background">

              <!-- Section Title -->
              <div class="container section-title" data-aos="fade-up">
                <h2>Keunggulan kami</h2>
                <p>Perancangan Bangunan Kita didukung oleh tenaga ahli yang profesional dalam Merancang dan
                  membangunan
                  bagunan yang berkwalitas.<br> Ketepatan waktu dalam merancang sketsa bangunan menjadi perhatian
                  serius
                  kami.</p>
              </div><!-- End Section Title -->

              <div class="container">
                <div class="row gy-4">
                  <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                      <center>
                        <img src="assets/img/sketsa.png" alt="Bootstrap" width="480" height="300">
                        <h3><a href="" class="stretched-link">DISAIN BANGUNAN</a></h3>
                        <p>Disain bangunan yang di sket atau dirancang akan menyesuaikan dengan tanah dan tempat
                          yang
                          anda miliki</p>
                      </center>
                    </div>
                  </div><!-- End Service Item -->

                  <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item position-relative">
                      <center>
                        <img src="assets/img/lokasi.png" alt="Bootstrap" width="480" height="300">
                        <h3><a href="" class="stretched-link">FREE SURVEI LOKASI </a></h3>
                        <p>Nikmati free yang kami tawarkan, diantaranya dari survei lokasi dan kemudahan konsultasi</p>
                      </center>
                    </div>
                  </div><!-- End Service Item -->

                  <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item position-relative">
                      <center>
                        <img src="assets/img/garansi.png" alt="Bootstrap" width="480" height="300">
                        <h3><a href="" class="stretched-link">BERGARANSI </a></h3>
                        <p>Kami memberikan garansi seluruh pekerjaan yang kami kerjakan</p>
                      </center>
                    </div>
                  </div><!-- End Service Item -->
                  <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item position-relative">
                      <center>
                        <img src="assets/img/tukang.png" alt="Bootstrap" width="480" height="300">
                        <h3><a href="" class="stretched-link">PEKERJA YANG BERPENGALAMAN </a></h3>
                        <p>Tenaga yang bekerja merancang bangunan anda adalah tenaga yang berpengalaman</p>
                      </center>
                    </div>
                  </div><!-- End Service Item -->


                </div>

              </div>

            </section><!-- /Services Section -->

            <!-- Services Section -->
            <section id="services" class="services section light-background">

              <!-- Section Title -->
              <div class="container section-title" data-aos="fade-up">
                <h2>Layanan Kami</h2>
              </div><!-- End Section Title -->

              <div class="container">

                <div class="row gy-4">

                  <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                      <center>
                        <div class="icon"><i class="bi bi-activity icon"></i></div>
                        <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
                        <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                        <a href="xxxx.html" class="buy-btn">Selengkapnya</a>
                      </center>
                    </div>
                  </div><!-- End Service Item -->

                  <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item position-relative">
                      <center>
                        <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
                        <h4><a href="" class="stretched-link">Design Bangunan </a></h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                        <a href="xxxx.html" class="buy-btn">Selengkapnya</a>
                      </center>
                    </div>
                  </div><!-- End Service Item -->

                  <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item position-relative">
                      <center>
                        <div class="icon"><i class="bi bi-calendar4-week icon"></i>
                        </div>
                        <h4><a href="" class="stretched-link">Magni Dolores</a></h4>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                        <a href="xxxx.html" class="buy-btn">Selengkapnya</a>
                      </center>
                    </div>
                  </div><!-- End Service Item -->

                  <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item position-relative">
                      <center>
                        <div class="icon"><i class="bi bi-broadcast icon"></i></div>
                        <h4>
                          <a href="" class="stretched-link">Konsultasi</a>
                        </h4>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                        <a href="xxxx.html" class="buy-btn">Selengkapnya</a>
                      </center>
                    </div>
                  </div>
                </div><!-- End Service Item -->

              </div>

          </div>

          </section><!-- /Services Section -->

          <!-- Portfolio -->
           <?php require_once 'portfolio.php' ?>
          <!-- Pricing Section -->
          <section id="pricing" class="pricing section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
              <h2>Jenis Layanan</h2>
              <p>Silahkan tentukan pilihan anda dengan membaca kemudahan yang didapat pada setiap item</p>
            </div><!-- End Section Title -->

            <div class="container">

              <div class="row gy-4">

                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                  <div class="pricing-item">
                    <h3>PAKET BASIC </h3>
                    <h4><sup>Rp</sup>350.000/m²<span></span></h4>
                    <ul>
                      <li><i class="bi bi-check"></i> <span>Perencanaan Denah</span></li>
                      <li><i class="bi bi-check"></i> <span>Visual Desain</span></li>
                      <li><i class="bi bi-check"></i> <span>3D eksterior + Rendering </span></li>
                      <li><i class="bi bi-check"></i> <span>Gambar Kerja (Denah, Tampak Potongan dan Detail)</span>
                      </li>
                      <li><i class="bi bi-check"></i> <span>Print Out Gambar Detail dan Desain</span></li>
                      <li><i class="bi bi-check"></i> <span>Fail PDF. </span></li>
                      <li class="na"><i class="bi bi-x"></i> <span>Print Out Gambar Detail dan Desain</span></li>
                    </ul>
                    <a href="xxxx.html" class="buy-btn">Buy Now</a>
                  </div>
                </div><!-- End Pricing Item -->

                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                  <div class="pricing-item">
                    <h3>PAKET BASIC </h3>
                    <h4><sup>Rp</sup>350.000/m²<span></span></h4>
                    <ul>
                      <li><i class="bi bi-check"></i> <span>Perencanaan Denah</span></li>
                      <li><i class="bi bi-check"></i> <span>Visual Desain</span></li>
                      <li><i class="bi bi-check"></i> <span>3D eksterior + Rendering </span></li>
                      <li><i class="bi bi-check"></i> <span>Gambar Kerja (Denah, Tampak Potongan dan Detail)</span>
                      </li>
                      <li><i class="bi bi-check"></i> <span>Print Out Gambar Detail dan Desain</span></li>
                      <li><i class="bi bi-check"></i> <span>Fail PDF. </span></li>
                      <li class="na"><i class="bi bi-x"></i> <span>Print Out Gambar Detail dan Desain</span></li>
                    </ul>
                    <a href="xxxx.html" class="buy-btn">Buy Now</a>
                  </div>
                </div><!-- End Pricing Item -->


                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                  <div class="pricing-item">
                    <h3>PAKET BASIC </h3>
                    <h4><sup>Rp</sup>350.000/m²<span></span></h4>
                    <ul>
                      <li><i class="bi bi-check"></i> <span>Perencanaan Denah</span></li>
                      <li><i class="bi bi-check"></i> <span>Visual Desain</span></li>
                      <li><i class="bi bi-check"></i> <span>3D eksterior + Rendering </span></li>
                      <li><i class="bi bi-check"></i> <span>Gambar Kerja (Denah, Tampak Potongan dan Detail)</span>
                      </li>
                      <li><i class="bi bi-check"></i> <span>Print Out Gambar Detail dan Desain</span></li>
                      <li><i class="bi bi-check"></i> <span>Fail PDF. </span></li>
                      <li class="na"><i class="bi bi-x"></i> <span>Print Out Gambar Detail dan Desain</span></li>
                    </ul>
                    <a href="xxxx.html" class="buy-btn">Buy Now</a>
                  </div>
                </div><!-- End Pricing Item -->


                <!-- Testimonials Section -->
                <section id="testimonials" class="testimonials section">

                  <!-- Section Title -->
                  <div class="container section-title" data-aos="fade-up">
                    <h2>Testimonials</h2>
                    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
                  </div><!-- End Section Title -->

                  <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <div class="swiper init-swiper">
                      <script type="application/json" class="swiper-config">
                        {
                          "loop": true,
                          "speed": 600,
                          "autoplay": {
                            "delay": 5000
                          },
                          "slidesPerView": "auto",
                          "pagination": {
                            "el": ".swiper-pagination",
                            "type": "bullets",
                            "clickable": true
                          }
                        }
                      </script>
                      <div class="swiper-wrapper">

                        <div class="swiper-slide">
                          <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                            <h3>Saul Goodman</h3>
                            <h4>Ceo &amp; Founder</h4>
                            <div class="stars">
                              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i>
                            </div>
                            <p>
                              <i class="bi bi-quote quote-icon-left"></i>
                              <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum
                                suscipit
                                rhoncus.
                                Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at
                                semper.</span>
                              <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                          </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                          <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                            <div class="stars">
                              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i>
                            </div>
                            <p>
                              <i class="bi bi-quote quote-icon-left"></i>
                              <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum
                                quid
                                cillum
                                eram
                                malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim
                                culpa.</span>
                              <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                          </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                          <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                            <div class="stars">
                              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i>
                            </div>
                            <p>
                              <i class="bi bi-quote quote-icon-left"></i>
                              <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                veniam
                                duis
                                minim tempor labore quem eram duis noster aute amet eram fore quis sint
                                minim.</span>
                              <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                          </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                          <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                            <div class="stars">
                              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i>
                            </div>
                            <p>
                              <i class="bi bi-quote quote-icon-left"></i>
                              <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                fugiat
                                minim
                                velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore
                                labore
                                illum
                                veniam.</span>
                              <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                          </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                          <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                            <div class="stars">
                              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i>
                            </div>
                            <p>
                              <i class="bi bi-quote quote-icon-left"></i>
                              <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor
                                noster
                                veniam
                                enim
                                culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore
                                nisi
                                cillum
                                quid.</span>
                              <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                          </div>
                        </div><!-- End testimonial item -->

                      </div>
                      <div class="swiper-pagination"></div>
                    </div>

                  </div>

                </section><!-- /Testimonials Section -->

                <!-- Contact Section -->
                <section id="contact" class="contact section">

                  <!-- Section Title -->
                  <div class="container section-title" data-aos="fade-up">
                    <h2>Contact</h2>
                    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
                  </div><!-- End Section Title -->

                  <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <div class="row gy-4">

                      <div class="info-wrap">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                          <i class="bi bi-geo-alt flex-shrink-0"></i>
                          <div>
                            <h3>Address</h3>
                            <p>A108 Adam Street, New York, NY 535022</p>
                          </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                          <i class="bi bi-telephone flex-shrink-0"></i>
                          <div>
                            <h3>Call Us</h3>
                            <p>+1 5589 55488 55</p>
                          </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                          <i class="bi bi-envelope flex-shrink-0"></i>
                          <div>
                            <h3>Email Us</h3>
                            <p>info@example.com</p>
                          </div>
                        </div><!-- End Info Item -->

                        <iframe
                          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus"
                          frameborder="0" style="border:0; width: 100%; height: 470px;" allowfullscreen=""
                          loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      </div>
                    </div>

                  </div>

              </div>

          </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
            <form action="forms/newsletter.php" method="post" class="php-email-form">
              <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe">
              </div>
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your subscription request has been sent. Thank you!</div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <img src="assets/img/Syaka.png" alt="Bootstrap" width="130" height="100"><br>

          </a>
          <div class="footer-contact pt-3">
            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="index.html">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4>Follow Us</h4>
          <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
          <div class="social-links d-flex">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href="https://www.facebook.com/profile.php?id=100076057749835"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/syakadesign21/"><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Syaka Design</span> <strong class="px-1 sitename">Arsha</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>