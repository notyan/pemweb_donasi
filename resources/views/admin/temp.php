<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>KIBATISA | Program Aktif</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
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

        <section id="why-us" class="why-us section-bg">
          <div class="container-fluid" >
            <div class="row">
              <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
                <div class="content">
                  <h3>Berikan <strong>Saran</strong></h3>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action='/createSaran' method="post">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" id="nama" name="nama" class="form-control" value="{{ old('nama') }}">
                        </div>
            
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}">
                        </div>
            
                        <div class="form-group">
                            <label for="no_hp">Nomor Hp</label>
                            <div class="input-group mb-3" id="no_hp">
                                <span class="input-group-text">+62</span>
                                <input type="number" class="form-control" name="no_hp" value="{{ old('no_hp') }}">
                            </div>
                        </div>
            
                        <div class="form-group">
                            <label for="subyek">Subyek</label>
                            <input type="text" id="subyek" name="subyek" class="form-control" value="{{ old('subyek') }}">
                        </div>
            
                        <div class="form-group">
                            <label for="konten" class="form-label">Pesan</label>
                            <textarea class="form-control" id="konten" name="konten"
                            rows="3">{{ old('konten') }}</textarea>
                        </div>
                        <br>
                        <div class="form-group col input-group  mb-3 ">
                            <div class="captcha">
                               <span>{!! captcha_img() !!}</span>
                               <button type="button" class="btn btn-success" id="refresh"><i class="fa fa-refresh" ></i></button>
                           </div>
                            <input id="captcha "  type="text" class="form-control col-lg-10" placeholder="Enter Captcha" name="captcha" value="{{ old('captcha') }}">
                        </div>
                        <button type="submit" class="btn btn-primary my-2 mx-1">Kirim</button>
                    </form>
                </div>
              </div>
              <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/about.png");' >&nbsp;</div>
            </div>
          </div>
        </section><!-- End Why Us Section -->

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
    <!-- @push('custom-scripts') -->
    <script type="text/javascript">
        $('#refresh').click(function(){
          $.ajax({
             type:'GET',
             url:'refreshcaptcha',
             success:function(data){
                $(".captcha span").html(data.captcha);
             }
          });
        });
    </script>
    <!-- @endpush -->
</html>