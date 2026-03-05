<?php
include 'config.php';


?>


<!--
=========================================================
* Soft UI Dashboard 3 - v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2024 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - OnePage Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->


  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Vendor CSS Files -->
  <link href="OnePage/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="OnePage/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="OnePage/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="OnePage/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="OnePage/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="OnePage/assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: OnePage
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

 <style>
       

        h1 {
            margin-bottom: 20px;
        }

        table {
            margin: auto;
            border-collapse: collapse;
            width: 80%;
            background-color: white;
            color: black;
            border-radius: 10px;
            overflow: hidden;
        }

        th {
            background-color: #2c5364;
            color: white;
            padding: 12px;
        }

        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f2f2f2;
        }

        footer {
            margin-top: 30px;
            font-size: 14px;
            opacity: 0.8;
        }
        .card {
          background: #2c5364;
        }
    </style>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Zakat Masjid Riyhadusshalihin</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <!-- <ul>
          <li><a href="#hero" class="active">Home<br></a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
          <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>
        </ul> -->
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="#tabel">Get Started</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <img src="OnePage/assets/img/hero-bg-abstract.jpg" alt="" data-aos="fade-in" class="">

      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-out">
          <div class="col-xl-7 col-lg-9 text-center">
            <h1>Zakat Masjid Riyhadusshalihin</h1>
            <p>We are a dedicated team managing Zakat Ramadan with transparency <br> and trust.</p>
          </div>
        </div>
        <div class="text-center" data-aos="zoom-out" data-aos-delay="100">
          <a href="#tabel" class="btn-get-started">Get Started</a>
        </div>

        <div class="row gy-4 mt-5">
          <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-easel"></i></div>
              <h4 class="title"><a href="">Pengertian Zakat Fitrah</a></h4>
              <p class="description">Zakat Fitrah adalah zakat yang wajib dibayarkan oleh setiap Muslim, baik laki-laki maupun perempuan, tua maupun muda, yang memiliki kemampuan.</p>
            </div>
          </div><!--End Icon Box -->

          <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="fa-solid fa-person-circle-question"></i></div>
              <h4 class="title"><a href="">Siapa yang Wajib Membayar?</a></h4>
              <p class="description">Setiap Muslim yang memiliki kelebihan makanan untuk diri sendiri dan keluarganya pada malam Idulfitri wajib membayar zakat fitrah.</p>
            </div>
          </div><!--End Icon Box -->

          <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="fa-solid fa-scale-balanced"></i></div>
              <h4 class="title"><a href="">Besar Zakat Fitrah</a></h4>
              <p class="description">Sebesar 1 sha’ atau setara ± 2,5 kg – 3 kg beras, Bisa juga dibayar dalam bentuk uang sesuai harga beras di daerah masing-masing</p>
            </div>
          </div><!--End Icon Box -->

          <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="fa-regular fa-clock"></i></div>
              <h4 class="title"><a href="">Waktu Pembayaran</a></h4>
              <p class="description">Zakat fitrah wajib dibayar sebelum berbuka puasa pada malam Idulfitri.</p>
            </div>
          </div><!--End Icon Box -->

        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="tabel" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
       
      </div><!-- End Section Title -->

        <h1 class="text-center">🌙 Tabel Zakat Penerimaan Zakat Ramadan 🌙</h1>
            <div class="row  justify-content-center">
                         
                        
                            <div class="col-xl-3 col-md-6">  
                                <div class="card  text-white mb-4"> <?php
                        $query = mysqli_query($koneksi, "SELECT SUM(jumlah_rupiah) AS Total FROM tbl_zakat;");   
                        $calon = mysqli_fetch_assoc($query); // mengambil data dari hasil query
                            
                        
                        ?>
                                    <div class="card-body">Total Penerimaan Uang Zakat</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                      RP  <?php echo number_format($calon['Total'], 0, ',', '.'); ?>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card text-white mb-4">
                                             <?php
                                            $query = mysqli_query($koneksi, "SELECT SUM(keterengan) AS jumlah FROM tbl_zakat");
                                            $data = mysqli_fetch_assoc($query);
                                            ?>
                                        <div class="card-body">Jumlah Orang yang Berzakat</div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                           <?php echo $data['jumlah']; ?> Jiwa
                                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card  text-white mb-4">
                                        <?php
                                                $query = mysqli_query($koneksi, "SELECT SUM(jumlah_beras) AS Total FROM tbl_zakat;");
                                                $calon = mysqli_fetch_assoc($query); // mengambil data dari hasil query
                                                ?>
                                    <div class="card-body">Jumlah Beras</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <?php echo $calon['Total']; ?> KG
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

    <table> 
      <tr>
            <th>No</th>
            <th>nama</th>
            <th>Jenis</th>
            <th>Nominal</th>
            <th>KG(Beras)</th>
            <th>Metode</th>
            <th>Tanggal</th>
            <th>Keterangan</th>
        </tr>
       

                  <?php 
                    $no =1;
                    $data = mysqli_query($koneksi, "SELECT * FROM tbl_zakat");
                     foreach($data as $row):
                  ?>
       
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['nama_zakat']; ?></td>
            <td><?php echo $row['jenis_zakat']; ?></td>
            <td><?php echo number_format($row['jumlah_rupiah'], 0, ',', '.'); ?></td>
            <td><?php echo $row['jumlah_beras']; ?></td>
            <td><?php echo $row['metode']; ?></td>
            <td><?php echo $row['tanggal']; ?></td>
            <td><?php echo $row['keterengan']; ?> (jiwa)</td>
        </tr>
      <?php endforeach; ?>
    </table>

    <footer class="text-center">
        © 2026 Website Ramadan | Dibuat dengan HTML & CSS
    </footer>


    </section><!-- /About Section -->

  

    

   
    

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>info@example.com</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer light-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">OnePage</span>
          </a>
          <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>A108 Adam Street</p>
          <p>New York, NY 535022</p>
          <p>United States</p>
          <p class="mt-4"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
          <p><strong>Email:</strong> <span>info@example.com</span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">OnePage</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> | <a href="https://bootstrapmade.com/tools/">DevTools</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="OnePage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="OnePage/assets/vendor/php-email-form/validate.js"></script>
  <script src="OnePage/assets/vendor/aos/aos.js"></script>
  <script src="OnePage/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="OnePage/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="OnePage/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="OnePage/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="OnePage/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="OnePage/assets/js/main.js"></script>

</body>

</html>