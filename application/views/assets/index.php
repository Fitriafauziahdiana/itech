<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>INTECH</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="<?=base_url()?>/assets/assets/img/Integral.png" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Libraries Stylesheet -->
    <link href="<?=base_url()?>/assets/assets/lib/animate/animate.min.css" rel="stylesheet" />
    <link href="<?=base_url()?>/assets/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?=base_url()?>/assets/assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="<?=base_url()?>/assets/assets/css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Spinner Start -->
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <header id="home" class="hero-area">
      <div class="overlay">
        <span></span>
        <span></span>
      </div>
      <nav
        class="navbar navbar-expand-lg navbar-light fixed-top bgcolor p-0 px-4 px-lg-5-"
      >
        <a href="index.html" class="navbar-brand d-flex align-items-center">
          <h2 class="m-0 text-primary">
            <img
              class="imglogo-fluid me-2"
              src="<?=base_url()?>/assets/img/integraloutlinewhite.png"
              alt=""
              style="width: 100px"
            />
          </h2>
        </a>
        <button
          type="button"
          class="navbar-toggler"
          data-bs-toggle="collapse"
          data-bs-target="#navbarCollapse"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav ms-auto py-4 py-lg-0">
            <li class="nav-item">
              <a class="nav-link page-scroll" href="#home">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link page-scroll" href="#integral">Integral</a>
            </li>
            <li class="nav-item">
              <a class="nav-link page-scroll" href="#contact">Kontak</a>
            </li>
          </div>
        </div>
      </nav>
      <!-- Navbar End -->

      <!-- Home Start -->
      <div class="container-fluid hero-header bg-light py-6 mb-5">
        <div class="container py-5">
          <div class="row g-5 align-items-center">
            <div class="col-lg-6">
              <h1 class="display-4 mb-3 animated slideInDown">
                Integral Technology
              </h1>
              <p class="animated slideInDown text-justify">
                Website yang dinaungi oleh BPSDM memiliki beberapa aplikasi yang mendukung secara khusus dalam kegiatan pembelajaran dan pengetahuan yang terintegrasi dalam satu brand.
              </p>
              <a href="login" class="btn btn-primary animated slideInDown"
                >LOGIN</a
              >
            </div>
            <div class="col-lg-6 animated fadeIn">
              <img
                class="img-fluid animated pulse infinite"
                style="animation-duration: 3s"
                src="<?=base_url()?>/assets/assets/img/intro.png"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Home End -->



    <!-- Integral Start -->
    <section id="integral" class="cards">
      <div class="container-tmp">
        <div class="card-tmp">
            <div class="face-tmp face1-tmp">
                <div class="content-tmp">
                    <img src="<?=base_url()?>/assets/assets/img/Integral E-Services.png">
                    <h3></h3>
                </div>
            </div>
            <div class="face-tmp face2-tmp">
                <div class="content-tmp">
                    <p class="text-justify">Berfungsi untuk melakukan proses Pelayanan Administrasi Penyelenggaraan Pelatihan mulai dari registrasi sampai dengan sertifikasi.</p>
                </div>
            </div>
        </div>
        <div class="card-tmp">
            <div class="face-tmp face1-tmp">
                <div class="content-tmp">
                    <img src="<?=base_url()?>/assets/assets/img/Integral Multimedia.png">
                    <h3></h3>
                </div>
            </div>
            <div class="face-tmp face2-tmp">
                <div class="content-tmp">
                    <p class="text-justify">Berfungsi untuk pendokumentasian setiap kegiatan BPSDM, e-Sertifikat, dan pembuatan video bahan ajar Widyaiswara, serta pembuatan konten publikasi.</p>
                </div>
            </div>
        </div>
        <div class="card-tmp">
            <div class="face-tmp face1-tmp">
                <div class="content-tmp">
                    <img src="<?=base_url()?>/assets/assets/img/Integral elearning.png">
                    <h3></h3>
                </div>
            </div>
            <div class="face-tmp face2-tmp">
                <div class="content-tmp">
                    <p class="text-justify">Berfungsi untuk mengelola Pembelajaran yang ada baik internal maupun external.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cards2">
  <div class="container-tmp">
    <div class="card-tmp">
        <div class="face-tmp face1-tmp">
            <div class="content-tmp">
                <img src="<?=base_url()?>/assets/assets/img/Integral Big Data.png">
                <h3></h3>
            </div>
        </div>
        <div class="face-tmp face2-tmp">
            <div class="content-tmp">
                <p class="text-justify">Berfungsi untuk menghimpun data keseluruhan aktifitas yang ada di BPSDM</p>
            </div>
        </div>
    </div>
    <div class="card-tmp">
        <div class="face-tmp face1-tmp">
            <div class="content-tmp">
                <img src="<?=base_url()?>/assets/assets/img/Integral Aplikasi.png">
                <h3></h3>
            </div>
        </div>
        <div class="face-tmp face2-tmp">
            <div class="content-tmp">
                <p class="text-justify">Berfungsi untuk mengelola,memfasilitasi dan menerapkan aplikasi untuk mendukung proses learning secara mudah,lancar dan tersampaikan dengan baik.</p>
            </div>
        </div>
    </div>
    <div class="card-tmp">
        <div class="face-tmp face1-tmp">
            <div class="content-tmp">
                <img src="<?=base_url()?>/assets/assets/img/Integral publikasi.png">
                <h3></h3>
            </div>
        </div>
        <div class="face-tmp face2-tmp">
            <div class="content-tmp">
                <p class="text-justify">Berfungsi untuk mengelola Pembelajaran yang ada baik internal maupun external.</p>
            </div>
        </div>
    </div>
</div>
</section>
    
    <!-- Integral End -->

    <!-- Contact Start -->
    <section id="contact" class="section">
      <div class="container-fluid hero-header py-5 mb-5"></div>
      <div class="container-fluid hero-header bg-warning py-6 mb-5">
        <div class="container">
          <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-6">
              <h1 class="display-6">Kontak</h1>
              <h1 class="text-primary fs-5">
                Silakan kontak kami jika ada hal yang kiranya perlu kami bantu.
                Terimakasih</h1>
              </h1>
              <p class="mb-2 "><i class="bi bi-geo-alt-fill"></i> Alamat:</p>
              <h4>Jl. Kolonel Masturi No.11, KM 3,5
                Cipageran, Cimahi Utara,
                Kota Cimahi, Jawa Barat
                40511</h4>
              <hr class="w-100" />
              <p class="mb-2"><i class="bi bi-telephone-fill"></i> Telepon:</p>
              <h4>+62 813-8283-0814</h4>
              <hr class="w-100" />
              <p class="mb-2"><i class="bi bi-envelope-at-fill"></i> E-mail:</p>
              <h4>simpanakuaja@gmail.com</h4>
              <hr class="w-100" />
            </div>
            <div class="col-lg-6 animated fadeIn">
              <img
                class="imgkontak-fluid animated pulse infinite"
                style="animation-duration: 3s"
                src="<?=base_url()?>/assets/assets/img/01.png"
                alt=""
              />
            </div>
            <div class="col-lg-6 text-lg-end">
            </div>
          </div>
          <div class="row g-5">
            <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              
            </div>
            </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact End -->

    <!-- Google Map Start -->
    <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
      <iframe
        class="w-100 mb-n2"
        style="height: 450px"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.3423875678473!2d107.5442514759434!3d-6.849497167010389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e59745a2afe7%3A0xf270b66e61664fe0!2sBPSDM%20Provinsi%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1690381376857!5m2!1sid!2sid"
        frameborder="0"
        allowfullscreen=""
        aria-hidden="false"
        tabindex="0"
      ></iframe>
    </div>
    <!-- Google Map End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-light footer" data-wow-delay="0.1s">
      <div class="container-fluid copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center text-md mb-md-0">
              &copy; <a href="#">INTECH</a>, FF 2023.
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a
      href="#"
      class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"
      ><i class="bi bi-arrow-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    

    <!-- Template Javascript -->
    <script src="<?=base_url()?>/assets/assets/js/main.js"></script>
    <script>
      $(window).scroll(function(){
        $('nav').toggleClass('scrolled',$(this).scrollTop()>50);
      });
    </script>
  </body>
</html>
