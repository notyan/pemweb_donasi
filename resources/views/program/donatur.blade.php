<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>KIBATISA | Program Aktif</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <!-- <div>Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>  -->
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

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
          <li><a class="nav-link " href="{{ url('about') }}">About</a></li>
          <li><a class="nav-link " href="{{ url('saran') }}">Saran</a></li>
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

    <main id="main" >

        <section id="services" class="services section-bg">
            <div class="container" style="margin-bottom: 250px">

                <div class="section-title">
                    <br><br>
                    <h2>Donasi</h2>
                        <div class="icon-box">
                            <form method="post" action="{{ route('program.donasi', ['id' => $data_program->id]) }}">
                            @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama Pengirim</label>
                                    <input type="text" class="form-control" id="name" name="nama_pengirim">
                                </div>
                                <div class="mb-3">
                                    <label for="vendor" class="form-label">Vendor</label>
                                    <select class="form-select" name="vendor" id="vendor">
                                        @foreach($list_vendor as $vendor)
                                            <option value="{{ $vendor->id }}">{{ $vendor->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="norek" class="form-label">No Rekening</label>
                                    <input type="text" class="form-control" id="norek" name="no_rekening_pengirim">
                                </div>
                                <div class="mb-3">
                                    <label for="nama_atas_nama" class="form-label">Nama atas nama Rekening</label>
                                    <input type="text" class="form-control" id="nama_atas_nama" name="nama_atas_nama">
                                </div>
                                <div class="mb-3">
                                    <label for="nominal_donasi" class="form-label">Nominal Donasi</label>
                                    <input type="number" class="form-control" id="nominal_donasi" name="nominal_donasi">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="mb-3">
                                    <label for="pesan" class="form-label">Pesan</label>
                                    <textarea class="form-control" id="pesan" name="pesan"></textarea>
                                </div>
                                <input class="btn btn-success" type="submit" value="Donasi!">
                            </form>
                        </div>
                        <section id="team" class="team section-bg">
                            <h3>Informasi tentang Program Terkait</h3>
                            <br>
                            <div class="row ">
                                <div class="col-lg-4" >
                                    <div class="member"  style="height:120px; padding-top:30px;" >
                                    <div class="member-info" style="margin:0px;">
                                        <h4>Pemilik</h4>
                                        <p>{{ DB::table('users')->where('id', $data_program->id_user)->get()->first()->name }} </p>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="member align-item-center"style="height:120px; padding-top:30px;">
                                    <div class="member-info">
                                        <h4>Target</h4>
                                        <p>{{ $data_program->target }} </p>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="member " style="height:120px; padding-top:30px;" >
                                    <div class="member-info">
                                        <h4>Batas Akhir</h4>
                                        <p>{{ $data_program->batas_akhir }} </p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <br>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

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