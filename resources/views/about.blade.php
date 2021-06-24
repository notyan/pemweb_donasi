<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KIBATISA | HOME</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <!-- <div>Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>  -->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ URL::asset('css/home/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/home/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/home/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/home/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/home/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/home/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/home/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="{{ URL::asset('css/home/style.css') }}">

  <!-- =======================================================
  * Template Name: Arsha - v4.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="/">KibaTisa</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar navbar-fixed-top">
        <ul>
          <li><a class="nav-link active " href="/">Beranda</a></li>
          <li><a class="nav-link " href="{{ route('blog') }}">Blog</a></li>
          <li><a class="nav-link " href="{{ route('berita') }}">Berita</a></li>
          <li><a class="nav-link " href="/about">About</a></li>
        </ul>
            @if (Route::has('login'))
                <div class="hidden fixed ">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="" ><b>Dashboard</b></a>
                    @else
                        <a href="{{ route('login') }}" class="" ><b>Sign in</b></a>
                        
                        
                    @endauth
                </div>
            @endif
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" >
          <h1>Fundraising for the people and causes you care about</h1>
          <div class="d-flex justify-content-center justify-content-lg-start">
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="assets/img/logo.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <!-- ======= About Section ======= -->
    <section id="berita" class="faq section-bg overflow-auto" style="height: 600px;">
      <div class="container" >

        <div class="section-title">
          <h2>Kelompok 2</h2>
          <div class="container">
        <div class="row text-center">
          <div class="col"></div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row text-center">
            <div class="col">
                <h5>Fathiya Farahdilla Husna</h5>
                    <p>M0519036</p>
            </div>

            <div class="col">
                <h5>Fauzy Prasetyo</h5>
                    <p>M0519037</p>
            </div>
            </div>
            <div class="col">
                <h5>Harum Sukma Aji</h5>
                    <p>M0519047</p>
            </div>

           
      <div class="row text-center">
        <div class="col">
            <h5>Inayah Izzatil Islam</h5>
                <p>M0519048</p>
        </div>
        <div class="col">
            <h5>Muhammad Aufaditya Adinata</h5>
                <p>M0519058</p>
        </div>

        <div class="col">
            <h5>Muhammad Defaroyan</h5>
                <p>M0519059</p>
        </div>
  </div>
        </div>

        
    </section><!-- End About Section -->


  <!-- ======= Footer ======= -->
  <footer id="footer" class="fixed-bottom">

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->


</body>

</html>