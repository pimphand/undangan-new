<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="home Undangamo.com">

    <!-- ========== Page Title ========== -->
    <title>Undangamo</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{ asset('assets') }}/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{ asset('assets') }}/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('assets') }}/css/font-awesome.min.css" rel="stylesheet" />
    <link href="{{ asset('assets') }}/css/flaticon-set.css" rel="stylesheet" />
    <link href="{{ asset('assets') }}/css/magnific-popup.css" rel="stylesheet" />
    <link href="{{ asset('assets') }}/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="{{ asset('assets') }}/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="{{ asset('assets') }}/css/animate.css" rel="stylesheet" />
    <link href="{{ asset('assets') }}/css/bootsnav.css" rel="stylesheet" />
    <link href="{{ asset('assets') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/responsive.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">

</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-fixed dark no-background bootsnav">

            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav button">
                    <ul>
                        <li>
                            <a href="#">try it free</a>
                        </li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="{{ asset('assets') }}/img/logo.png" class="logo logo-display" alt="Logo">
                        <img src="{{ asset('assets') }}/img/logo.png" class="logo logo-scrolled" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                        <li class="dropdown dropdown-right">
                            <a href="#home" class="dropdown-toggle smooth-menu" data-toggle="dropdown">Home</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#features">{{ __("Fitur") }}</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#about">{{ __("Tentang Kami") }}</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#pricing">Harga</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#team">{{ __("Tema") }}</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#faq">Faq</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area fixed-top bg-theme-small bg-cover"
        style="background-image: url({{ asset('assets') }}/img/shape-bg.jpg);">
        <!-- Side Bg -->
        <div class="side-bg">
            <img src="{{ asset('assets') }}/img/illustrations/2.png" alt="Thumb">
        </div>
        <!-- End Side Bg -->
        <div class="box-table">
            <div class="box-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 left-info">
                            <div class="content" data-animation="animated fadeInUpBig">
                                <h1>We're building <span>Software</span> to help</h1>
                                <p>
                                    Celebrated delightful an especially increasing instrument am. Indulgence contrasted
                                    sufficient to unpleasant in in insensible favourable.
                                </p>
                                <a class="btn-animation border popup-youtube"
                                    href="https://www.youtube.com/watch?v=owhuBrGIOsE">
                                    <i class="fa fa-play"></i> Watch Video
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Features Area 
    ============================================= -->
    <div id="features" class="features-area icon-link carousel-shadow default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Apa Yang Kamu Dapat?</h2>
                        <p>
                            Apa saja keuntungan menggunakan undangan digital berbasis website
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="features-items features-carousel owl-carousel owl-theme">
                        <!-- Single Item -->
                        @foreach ($features as $feature)
                        <div class="item">
                            <div class="icon">
                                <span>{{ $loop->iteration }}</span>
                                <i class="flaticon-drag-2"></i>
                            </div>
                            <div class="info">
                                <h4>{{ $feature->name }}</h4>
                                <p>
                                    {{ $feature->description }}
                                </p>
                            </div>
                        </div>
                        @endforeach
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Features Area -->
{{--  --}}
    <!-- Start About 
    ============================================= -->
    <div id="about" class="about-area reverse default-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 thumb">
                    <img src="{{ asset('assets') }}/img/illustrations/6.png" alt="Thumb">
                </div>
                <div class="col-lg-6 col-md-6 info">
                    <h2>Mengapa harus mengundangmo?</h2>
                    <p>
                        Kami hadir sebagai layanan untuk membuat website undangan online pernikahan gratis semudah
                        bermain media sosial.
                    <ul id="why">

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->


    <!-- Start Work Process Area 
    ============================================= -->
    <div id="process" class="work-process-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Work Process</h2>
                        <p>
                            Learning day desirous informed expenses material returned six the. She enabled invited
                            exposed him another. Reasonably conviction solicitude me mr at discretion reasonable. Age
                            out full gate bed day lose.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="process-items">
                    <div class="col-md-6 thumb">
                        <img src="{{ asset('assets') }}/img/illustrations/4.svg" alt="Thumb">
                    </div>
                    <div class="col-md-6 info">
                        <ul>
                            <li>
                                <div class="list">
                                    <h3><i class="fas fa-chart-line"></i></h3>
                                </div>
                                <div class="content">
                                    <h4>Research Projec</h4>
                                    <p>
                                        Listening newspaper in advantage frankness to concluded unwilling. projection
                                        particular companions
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="list">
                                    <h3><i class="fas fa-crosshairs"></i></h3>
                                </div>
                                <div class="content">
                                    <h4>Targeting</h4>
                                    <p>
                                        Sentiments projection particular companions interested do at my delightful
                                        listening newspaper
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="list">
                                    <h3><i class="fas fa-check"></i></h3>
                                </div>
                                <div class="content">
                                    <h4>Result</h4>
                                    <p>
                                        Talking chamber as shewing projection particular companions interested do at my
                                        delightful. Particular companions
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Work Process Area -->

    <!-- Start Pricing Area
    ============================================= -->
    <div id="pricing" class="pricing-area default-padding bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Our Packages</h2>
                        <p>
                            Learning day desirous informed expenses material returned six the. She enabled invited
                            exposed him another. Reasonably conviction solicitude me mr at discretion reasonable. Age
                            out full gate bed day lose.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="pricing-items">
                        <div class="col-lg-4 col-md-4 single-item">
                            <div class="pricing-item">
                                <ul>
                                    <li class="pricing-header">
                                        <h4>Free</h4>
                                        <h2><sup>$</sup>0.00</h2>
                                        <span>1 user</span>
                                    </li>
                                    <li><i class="fas fa-times"></i> Update</li>
                                    <li><i class="fas fa-check"></i> Personal use</li>
                                    <li><i class="fas fa-times"></i> Support</li>
                                    <li><i class="fas fa-times"></i> 2 database</li>
                                    <li><i class="fas fa-check"></i> Documetation</li>
                                    <li class="footer">
                                        <a class="btn circle btn-theme border btn-sm" href="#">Buy This Plan</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 single-item">
                            <div class="pricing-item active">
                                <ul>
                                    <li class="pricing-header">
                                        <h4>Regular</h4>
                                        <h2><sup>$</sup>15.23</h2>
                                        <span>5 user</span>
                                    </li>
                                    <li><i class="fas fa-check"></i> Update</li>
                                    <li><i class="fas fa-check"></i> Official use</li>
                                    <li><i class="fas fa-check"></i> Support</li>
                                    <li><i class="fas fa-times"></i> 5 database</li>
                                    <li><i class="fas fa-check"></i> Documetation</li>
                                    <li class="footer">
                                        <a class="btn circle btn-theme effect btn-sm" href="#">Buy This Plan</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 single-item">
                            <div class="pricing-item">
                                <ul>
                                    <li class="pricing-header">
                                        <h4>Extended</h4>
                                        <h2><sup>$</sup>29.12</h2>
                                        <span>Unlimited user</span>
                                    </li>
                                    <li><i class="fas fa-times"></i> File compressed</li>
                                    <li><i class="fas fa-check"></i> Commercial use</li>
                                    <li><i class="fas fa-check"></i> Support</li>
                                    <li><i class="fas fa-check"></i> 8 database</li>
                                    <li><i class="fas fa-check"></i> Documetation</li>
                                    <li class="footer">
                                        <a class="btn circle btn-theme border btn-sm" href="#">Buy This Plan</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Pricing Area -->

    <!-- Start Team Area
    ============================================= -->
    <div id="team" class="team-area radius-less default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Tema Undangan</h2>
                        <p>
                            Kaka penasaran bagaimana jadinya? pilih salah satu untuk melihat demonya
                            selain itu WeddingCnk banyak pilihan tema undangan digital yang menarik dan eksklusif
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="team-items text-center">
                    <!-- Single Item -->
                    <div id="theme"></div>
                    <!-- End Single Item -->
                </div>
            </div>
            <div class="text-center">
                <h4>{{ __("Lihat Lebih Banyak Tema Undanganmo") }}</h4>
                <a href="{{ route('list-theme') }}" class="btn btn-info">{{ __("Lihat lebih banyak") }}</a>
            </div>
        </div>
    </div>
    <!-- End Team Area -->

    <div id="blog" class="blog-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Recent News</h2>
                        <p>
                            Learning day desirous informed expenses material returned six the. She enabled invited
                            exposed him another. Reasonably conviction solicitude me mr at discretion reasonable. Age
                            out full gate bed day lose.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog-items">
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="#"><img src="{{ asset('assets') }}/img/800x600.png" alt="Thumb"></a>
                            </div>
                            <div class="info">
                                <div class="content">
                                    <div class="date">
                                        15 Aug, 2019
                                    </div>
                                    <h4>
                                        <a href="#">Direct wicket little of talked lasted formed</a>
                                    </h4>
                                    <p>
                                        Pronounce we attention admitting on assurance of suspicion conveying. That his
                                        west quit had met till.
                                    </p>
                                    <a href="#">Read More <i class="fas fa-angle-right"></i></a>
                                </div>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('assets') }}/img/100x100.png" alt="Author">
                                                <span>Author</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-comments"></i>
                                                <span>05</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-share-alt"></i>
                                                <span>37</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="#"><img src="{{ asset('assets') }}/img/800x600.png" alt="Thumb"></a>
                            </div>
                            <div class="info">
                                <div class="content">
                                    <div class="date">
                                        27 Nov, 2019
                                    </div>
                                    <h4>
                                        <a href="#">Supported neglected met therefore unwilling</a>
                                    </h4>
                                    <p>
                                        Pronounce we attention admitting on assurance of suspicion conveying. That his
                                        west quit had met till.
                                    </p>
                                    <a href="#">Read More <i class="fas fa-angle-right"></i></a>
                                </div>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('assets') }}/img/100x100.png" alt="Author">
                                                <span>Author</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-comments"></i>
                                                <span>17</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-share-alt"></i>
                                                <span>22</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="#"><img src="{{ asset('assets') }}/img/800x600.png" alt="Thumb"></a>
                            </div>
                            <div class="info">
                                <div class="content">
                                    <div class="date">
                                        18 Sep, 2019
                                    </div>
                                    <h4>
                                        <a href="#">Concerns greatest margaret absolute entrance</a>
                                    </h4>
                                    <p>
                                        Pronounce we attention admitting on assurance of suspicion conveying. That his
                                        west quit had met till.
                                    </p>
                                    <a href="#">Read More <i class="fas fa-angle-right"></i></a>
                                </div>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('assets') }}/img/100x100.png" alt="Author">
                                                <span>Author</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-comments"></i>
                                                <span>25</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-share-alt"></i>
                                                <span>50</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area -->

    <!-- Start Faq  
    ============================================= -->
    <div id="faq" class="faq-area bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5 thumb">
                    <img src="{{ asset('assets') }}/img/illustrations/2.svg" alt="Thumb">
                </div>
                <div class="col-md-7 faq-items">
                    <div class="heading">
                        <h2>Answer & Question</h2>
                    </div>
                    <!-- Start Accordion -->
                    <div class="acd-items acd-arrow">
                        <div class="panel-group symb" id="accordion">

                        </div>
                    </div>
                    <!-- End Accordion -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Faq  -->

    <!-- Start Footer 
    ============================================= -->
    <footer class="default-padding bg-light">
        <div class="container">
            <div class="row">
                <div class="f-items">
                    <div class="col-md-4 col-sm-6 equal-height item">
                        <div class="f-item">
                            <img src="{{ asset('assets') }}/img/logo.png" alt="Logo">
                            <p>
                                Excellence decisively nay man yet impression for contrasted remarkably. There spoke
                                happy for you are out. Fertile how old address.
                            </p>
                            <p>
                                <i>Please write your email and get our amazing updates, news and support</i>
                            </p>
                            <div class="newsletter">
                                <form action="#">
                                    <div class="input-group stylish-input-group">
                                        <input type="email" name="email" class="form-control"
                                            placeholder="Enter your e-mail here">
                                        <button type="submit">
                                            <i class="fa fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 equal-height item">
                        <div class="f-item link">
                            <h4>Quick LInk</h4>
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li>
                                    <a href="#">About us</a>
                                </li>
                                <li>
                                    <a href="#">Compnay History</a>
                                </li>
                                <li>
                                    <a href="#">Management </a>
                                </li>
                                <li>
                                    <a href="#">Features</a>
                                </li>
                                <li>
                                    <a href="#">Blog Page</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 equal-height item">
                        <div class="f-item link">
                            <h4>Community</h4>
                            <ul>
                                <li>
                                    <a href="#">Career</a>
                                </li>
                                <li>
                                    <a href="#">Leadership</a>
                                </li>
                                <li>
                                    <a href="#">Strategy</a>
                                </li>
                                <li>
                                    <a href="#">Services</a>
                                </li>
                                <li>
                                    <a href="#">History</a>
                                </li>
                                <li>
                                    <a href="#">Jobs</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 equal-height item">
                        <div class="f-item twitter-widget">
                            <h4>Contact Info</h4>
                            <p>
                                Queenslad Victoria Building. 60 california street california USA, 20, floor
                            </p>
                            <div class="address">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-home"></i>
                                        </div>
                                        <div class="info">
                                            <h5>Website:</h5>
                                            <span>www.validtheme.com</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="info">
                                            <h5>Email:</h5>
                                            <span>support@validtheme.com</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <div class="info">
                                            <h5>Phone:</h5>
                                            <span>+44-20-7328-4499</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Footer Bottom -->
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="col-lg-6 col-md-6 col-sm-7">
                            <p>&copy; Copyright 2018. All Rights Reserved by <a href="#">validthemes</a></p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-5 text-right link">
                            <ul>
                                <li>
                                    <a href="#">Terms of user</a>
                                </li>
                                <li>
                                    <a href="#">License</a>
                                </li>
                                <li>
                                    <a href="#">Support</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer Bottom -->
        </div>
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{ asset('assets') }}/js/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets') }}/js/equal-height.min.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.appear.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.easing.min.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('assets') }}/js/modernizr.custom.13711.js"></script>
    <script src="{{ asset('assets') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('assets') }}/js/count-to.js"></script>
    <script src="{{ asset('assets') }}/js/wow.min.js"></script>
    <script src="{{ asset('assets') }}/js/bootsnav.js"></script>
    <script src="{{ asset('assets') }}/js/main.js"></script>
    <script>
        $(document).ready(function () {
            
            thema();
            function thema(){
                $.ajax({
                    url: "{{ route('tema-data') }}",
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        $('#theme').html("");
                       $.each(data.data, function (key, item) { 
                           $('#theme').append('<div class="col-md-4 single-item">\
                                <div class="item">\
                                    <div class="thumb">\
                                        <img src='+item.image+' alt="Thumb">\
                                        <ul>\
                                            <a class="btn btn-info btn-sm m-4" href='+item.url+'>Demo</a>\
                                            <a class="btn btn-warning btn-sm p-1" href="{{ route('login') }}">Buat Undangan</a>\
                                        </ul>\
                                    </div>\
                                    <div class="info">\
                                        <h4>'+item.name+'</h4>\
                                        <span>'+item.type+'</span>\
                                    </div>\
                                </div>\
                            </div>\
                        ');
                           console.log(item.url);
                       });
                    }
                });
            }

            $('#theme').on('click', '.btn-info', function(e){
                e.preventDefault();
                var url = $(this).attr('href');
                window.open(url, '_blank');
            });
        });

        var owl = $('.owl-carousel');

        owl.owlCarousel({
            nav:false,
            margin:10,
            loop:true,
            responsive:{
                0:{
                items:2
                },
                1000:{
                items:3
                }
            }
        });
// feth faq ajax
        $(document).ready(function () {
            faq();
            function faq(){
                $.ajax({
                    url: "{{ route('faq-data') }}",
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        $('#accordion').html("");
                       $.each(data.data, function (key, item) { 
                           $('#accordion').append('<div class="panel panel-default">\
                            <div class="panel-heading">\
                                <h4 class="panel-title">\
                                    <a data-toggle="collapse" data-parent="#accordion" href="#id'+item.id+'">\
                                        '+item.question+'\
                                    </a>\
                                </h4>\
                            </div>\
                            <div id="id'+item.id+'" class="panel-collapse collapse in">\
                                <div class="panel-body">\
                                    <p>'+item.answer+'</p>\
                                </div>\
                            </div>\
                        </div>');
                           console.log(item);
                       });
                    }
                });
            }
        });

        // fetch why choose us ajax
        $(document).ready(function () {
            why();
            function why(){
                $.ajax({
                    url: "{{ route('why-data') }}",
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        $('#why').html("");
                       $.each(data.data, function (key, item) { 
                           $('#why').append('<li>\
                            <h5>'+item.title+'</h5>\
                            <p>'+item.description+'</p>\
                        </li>');
                           console.log(item);
                       });
                    }
                });
            }
        });

        // ajax fetch tema
        $(document).ready(function () {
            tema();
            function tema(){
                $.ajax({
                    url: "{{ route('tema-data') }}",
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        $('#theme').html("");
                       $.each(data.data, function (key, item) { 
                           $('#theme').append('<div class="col-md-4 single-item">\
                                <div class="item">\
                                    <div class="thumb">\
                                        <img src='+item.image+' alt="Thumb">\
                                        <ul>\
                                            <a class="btn btn-info btn-sm m-4" href='+item.url+'>Demo</a>\
                                            <a class="btn btn-warning btn-sm p-1" href="{{ route('login') }}">Buat Undangan</a>\
                                        </ul>\
                                    </div>\
                                    <div class="info">\
                                        <h4>'+item.name+'</h4>\
                                        <span>'+item.type+'</span>\
                                    </div>\
                                </div>\
                            </div>\
                        ');
                           console.log(item.url);
                       });
                    }
                });
            }
        });
        
    </script>
</body>

</html>

{{-- <li>
    <h5></h5>
    <p>

    </p>
</li>
<li>
    <h5></h5>
    <p>

    </p>
</li>
<li>
    <h5></h5>
    <p></p>
</li> --}}