<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kibatisa</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ URL::asset('css/home/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/home/style.css') }}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>


    <!-- header-start -->
    <header>
        <div class="header-area fixed-top">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo">
                                <h1><a href="index.html">Kibatisa</a></h1> 
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index.html">home</a></li>
                                        <li><a href="About.html">About</a></li>
                                        <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">blog</a></li>
                                                <li><a href="single-blog.html">single-blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="elements.html">elements</a></li>
                                                <li><a href="Cause.html">Cause</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                                <div class="Appointment">
                                    
                                     @if (Route::has('login'))
                                        <div class="book_btn d-none d-lg-block">
                                            @auth
                                                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                                            @else
                                                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>
                                            @endauth
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1 overlay2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="slider_text ">
                            <span>Get Started Today.</span>
                            <h3> Help the children
                                When They Need</h3>
                            <p>With so much to consume and such little time, coming up <br>
                                with relevant title ideas is essential</p>
                            <a href="About.html" class="boxed-btn3">Learn More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- news__area_start  -->
    <div class="news__area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-55">
                        <h3><span>News & Updates</span></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="news_active owl-carousel">
                        <div class="single__blog d-flex align-items-center">
                            <div class="thum">
                                <img src="img/news/1.png" alt="">
                            </div>
                            <div class="newsinfo">
                                <span>July 18, 2019</span>
                                <a href="single-blog.html">
                                    <h3>Pure Water Is More 
                                        Essential</h3>
                                </a>
                                <p>The passage experienced a 
                                    surge in popularity during the 
                                    1960s when used it on their  
                                    sheets, and again.</p>
                                <a class="read_more" href="single-blog.html">Read More</a>
                            </div>
                        </div>
                        <div class="single__blog d-flex align-items-center">
                            <div class="thum">
                                <img src="img/news/2.png" alt="">
                            </div>
                            <div class="newsinfo">
                                <span>July 18, 2019</span>
                                <a href="single-blog.html">
                                    <h3>Pure Water Is More 
                                        Essential</h3>
                                </a>
                                <p>The passage experienced a 
                                    surge in popularity during the 
                                    1960s when used it on their  
                                    sheets, and again.</p>
                                <a class="read_more" href="single-blog.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- news__area_end  -->

    <!-- footer_start  -->
    <footer class="footer">
        
        <div class="copy-right_text">
            <div class="container">
                <div class="row">
                    <div class="bordered_1px "></div>
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_end  -->

    <!-- link that opens popup -->

    <!-- JS here -->

</body>

</html>