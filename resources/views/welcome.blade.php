<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dexam - Pure VueJs + HTML + Bootstrap 4 Template for SaSS, StartUp,Agency, App And Product Landing page
    </title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets') }}/styles/vendor/slick.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/styles/vendor/slick-theme.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/styles/vendor/aos.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/styles/vendor/perfect-scrollbar.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/styles/css/themes/lite-purple.min.css">




</head>

<body class="text-left ">
    <!-- Pre Loader Strat  -->
    <div class='loadscreen' id="preloader">

        <div class="loader spinner-bubble spinner-bubble-primary">



        </div>
    </div>
    <!-- Pre Loader end  -->


    <div class="app-landing-wrap landing_wrap">
        <div id="landing_wrap" class="landing-gradient-red-orange">





            <!--=============== Header start ================-->
            <div class="main-header header-fixed-default " id="home-header">
                <nav class="navbar container w-100 navbar-expand-lg navbar-transparent bg-transparent">


                    <div class="logo">
                        <img src="./{{ asset('assets') }}/images/logo_white.png" alt="">
                    </div>

                    <div class="menu-toggle navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex align-items-center">
                            <!-- Mega menu -->
                            <div class="dropdown mega-menu d-none d-md-block">
                                <a href="#" class="btn  dropdown-toggle mr-3" id="dropdownMegaMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mega Menu</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <div class="row m-0">
                                        <div class="col-md-4 p-4 bg-img">
                                            <h2 class="title">Mega Menu <br> Sidebar</h2>
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores
                                                natus
                                                laboriosam fugit, consequatur.
                                            </p>
                                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing
                                                elit.
                                                Exercitationem odio amet eos dolore suscipit placeat.</p>
                                            <button class="btn btn-lg btn-rounded btn-outline-warning">Learn
                                                More</button>
                                        </div>
                                        <div class="col-md-4 p-4">
                                            <p class="text-primary text--cap border-bottom-primary d-inline-block">
                                                Demos
                                            </p>
                                            <div class="menu-icon-grid w-auto p-0">
                                                <a href="../views/landing.v1.html">Version 1</a>
                                                <a href="../views/landing.v2.html">Version 2</a>
                                                <a href="../views/landing.v3.html">Version 3</a>
                                                <a href="../views/landing.v4.html">Version 4</a>
                                                <a href="../views/landing.v5.html">Version 5</a>
                                                <a href="../views/landing.v6.html">Version 6</a>
                                                <a href="../views/landing.v7.html">Version 7</a>
                                                <a href="../views/landing.v8.html">Version 8</a>
                                                <a href="../views/landing.v9.html">Version 9</a>
                                                <a href="../views/landing.v10.html">Version 10</a>
                                                <a href="../views/landing.v11.html">Version 11</a>

                                            </div>
                                        </div>
                                        <div class="col-md-4 p-4">
                                            <p class="text-primary text--cap border-bottom-primary d-inline-block">
                                                Components</p>
                                            <ul class="links">
                                                <li><a href="../components/accordions.html">Accordion</a></li>
                                                <li><a href="../components/alerts.html">Alerts</a></li>
                                                <li><a href="../components/buttons.html">Buttons</a></li>
                                                <li><a href="../components/all-pricing.html">Pricing</a></li>
                                                <li><a href="../components/carousels.html">Carousels</a></li>
                                                <li><a href="../components/all-features.html">Features</a></li>
                                                <li><a href="../components/dropdown.html">Dropdown</a></li>
                                                <li><a href="../components/all-services.html">Services</a></li>
                                                <li><a href="../components/all-extra-features.html">Extra
                                                        Features</a>
                                                </li>
                                                <li><a href="../components/modals.html">Modals</a></li>
                                                <li><a href="../components/signin.html">Sign in</a></li>
                                                <li><a href="../components/signup.html">Sign up</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- / Mega menu -->

                        </div>

                        <div style="margin: auto"></div>

                        <div class="header-part-right">

                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="scroll-to nav-link m-2" href="#">Home <span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="scroll-to nav-link m-2" href="#features-wrap">Features</a>
                                </li>
                                <li class="nav-item">
                                    <a class="scroll-to nav-link m-2" href="#services-wrap">Services</a>
                                </li>
                                <!-- drop down menu start -->
                                <li class="nav-item">
                                    <a href="#" class="scroll-to nav-link m-2 m-2">Other Sections </a>
                                    <!-- First  Drop Down -->
                                    <ul>
                                        <li class="nav-item">
                                            <a href="#teams-wrap" class="scroll-to menu-item">Team</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#testimonials-wrap" class="scroll-to menu-item">Testimonial</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#extra-feature-wrap" class="scroll-to menu-item">Extra
                                                features</a>
                                        </li>
                                        <li><a>Second Level</a>
                                            <!-- Second  Drop Down -->
                                            <ul>
                                                <li class="nav-item">
                                                    <a href="#news-wrap" class="scroll-to menu-item">Blog</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#faqs-wrap" class="scroll-to  menu-item">Faqs</a>
                                                </li>
                                                <li><a>Third Level</a>

                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <!-- drop down menu end -->

                                <li class="nav-item">
                                    <a class="scroll-to nav-link m-2" href="#works-wrap">Works</a>
                                </li>
                                <li class="nav-item">
                                    <a class="scroll-to nav-link m-2" href="#pricing-wrap">Pricing</a>
                                </li>


                                <li class="nav-item">
                                    <a class="scroll-to nav-link m-2 " href="#contacts-wrap">Contact Us</a>
                                </li>
                            </ul>



                        </div>
                    </div>
                </nav>

            </div>

            <!--=============== Header End ================-->








            <!-- ============ Main content start ============= -->
            <div class="main-content-wrap">

                <!-- intro-section -->

                <section id="intro-wrap" class="intro1Wrap  text-left text-white">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 intro1LeftSection pb-5">
                                <h1 class=" font-weight-bold text-white text-42 mb-3 t-shadow">Your complete VueJs
                                    +
                                    HTML5 App Landing Page</h1>
                                <p class=" text-20 mb-4">Meet Dexam Highly customizable Pure VueJs + Bootstrap 4
                                    Landing
                                    template. </p>
                                <div class=" mb-5">
                                    <ul class="list-inline">
                                        <li class=" mb-3 "><i
                                                class="eva eva-checkmark-outline mr-2 text-warning"></i>Minimal,
                                            Intuitive
                                            and Fully Responsive Design
                                        </li>

                                        <li class="mb-3"><i class="eva eva-checkmark-outline mr-2 text-warning"></i>
                                            Super
                                            Flexible And Customizable</li>
                                    </ul>
                                </div>
                                <div class="intro1Buttons">
                                    <a name="" id="" href="/sessions/signin"
                                        class="btn half-button btn-outline-white btn-lg pl-5 pr-5 pb-2  mr-2 mb-4 text-uppercase"
                                        href="#" role="button">

                                        Sign in
                                    </a>
                                    <a id="" href="/sessions/signup"
                                        class="btn half-button btn-warning btn-lg pl-5 pr-5 pb-2 mb-4 text-uppercase"
                                        href="#" role="button">

                                        Sign up
                                    </a>

                                </div>

                            </div>
                            <div class="col-md-6  intro1RightSection d-flex align-items-center ">

                                <div class="intro1ProductImage">

                                    <img src="{{ asset('assets') }}/images/landing/svg/v1-header.svg"
                                        class="img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="overlay">

                    </div>

                </section>
                <!-- end::intro-section -->

                <!-- start-features -->
                <section id="features-wrap" class="features_wrap p-t-b-80">
                    <div class="container">
                        <div class="row">


                            <div class="col-md-12 section-header mb-5">
                                <h2 class="font-weight-bold">Our Exciting Features</h2>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat ea quam
                                    laborum,
                                    ducimus, laboriosam sint dolorum aspernatur libero.</p>

                            </div>


                            <div class="col-md-6 col-lg-6 col-sm-12 mb-4 mb-lg-0">
                                <div class="row">



                                    <div data-aos="fade-up" class="col-md-6 col-lg-4 col-sm-6 mb-4 ">
                                        <div class="card">

                                            <div class="card-body pt-4 pb-4 text-center">
                                                <i class="eva eva-clock-outline text-30"></i>
                                                <h4 class="card-title pt-2 text-16">Time Tracking</h4>

                                            </div>
                                        </div>
                                    </div>
                                    <div data-aos="fade-up" class="col-md-6 col-lg-4 col-sm-6 mb-4 ">
                                        <div class="card">

                                            <div class="card-body pt-4 pb-4 text-center">
                                                <i class="eva eva-file-text-outline text-30"></i>
                                                <h4 class="card-title pt-2 text-16">Invoicing</h4>

                                            </div>
                                        </div>
                                    </div>
                                    <div data-aos="fade-up" class="col-md-6 col-lg-4 col-sm-6 mb-4 ">
                                        <div class="card">

                                            <div class="card-body pt-4 pb-4 text-center">
                                                <i class="eva eva-shopping-bag-outline text-30"></i>
                                                <h4 class="card-title pt-2 text-16">Sales Report</h4>

                                            </div>
                                        </div>
                                    </div>
                                    <div data-aos="fade-up" class="col-md-6 col-lg-4 col-sm-6 mb-4 mb-lg-0">
                                        <div class="card">

                                            <div class="card-body pt-4 pb-4 text-center">
                                                <i class="eva eva-lock-outline text-30"></i>
                                                <h4 class="card-title pt-2 text-16">Data Safety</h4>

                                            </div>
                                        </div>
                                    </div>
                                    <div data-aos="fade-up" class="col-md-6 col-lg-4 col-sm-6 mb-4 mb-lg-0 mb-md-0">
                                        <div class="card">

                                            <div class="card-body pt-4 pb-4 text-center">
                                                <i class="eva eva-people-outline text-30"></i>
                                                <h4 class="card-title pt-2 text-16">Contracts</h4>

                                            </div>
                                        </div>
                                    </div>
                                    <div data-aos="fade-up" class="col-md-6 col-lg-4 col-sm-6 mb-4 mb-lg-0 mb-md-0">
                                        <div class="card">

                                            <div class="card-body pt-4 pb-4 text-center">
                                                <i class="eva eva-bell-outline text-30 text-gradient"></i>
                                                <h4 class="card-title pt-2 text-16">Notification</h4>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end of col-6 -->
                            <div data-aos="fade-left"
                                class="col-md-6 col-lg-5 col-sm-12 offset-lg-1 d-flex align-items-center">

                                <img src="{{ asset('assets') }}/images/landing/svg/features2.svg"
                                    class="img-responsive w-100" alt="">

                            </div>

                        </div>
                    </div>
                </section>
                <!-- end-features -->

                <!-- start-services -->
                <section id="services-wrap" class="services-wrap light-gray">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 section-header mb-5">
                                <h2 class="font-weight-bold">Our Services</h2>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat ea quam
                                    laborum,
                                    ducimus, laboriosam sint dolorum aspernatur libero.</p>

                            </div>


                            @foreach ($themes as $theme)
                            <div data-aos='fade-up' class="service-wrap col-md-6 col-lg-3 col-sm-12">
                                <div class="card o-hidden mb-4">

                                    <div class="card-header p-0 text-center ">

                                        <img class="img-responsive" src="{{ asset('storage/'.$theme->image) }}">
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title text-capitalize font-weight-bold ">{{ $theme->name }}
                                        </h3>

                                    </div>
                                    <div class="card-footer pl-3">
                                        <a href="{{ route('demo', $theme->slug) }}" target="_blank"
                                            style="color: linear-gradient(-29deg, #ff8a00, #da1b60) !important"
                                            class="btn  btn-gradient half-button tres p-1 mr-1 ">
                                            Demo
                                        </a>

                                        <a href="{{ route('login') }}"
                                            style="color: linear-gradient(-29deg, #ff8a00, #da1b60) !important"
                                            class="btn  btn-gradient half-button tres p-1 mr-1 ">
                                            Buat Undangan
                                        </a>

                                    </div>
                                </div>
                            </div>
                            @endforeach





                        </div>

                    </div>

                </section>
                <!-- end-services -->


                <!-- our-works -->
                <section id="works-wrap" class="work-carousel-wrap ">
                    <div class="container">
                        <div class="row">
                            <div class="section-header col-md-12 mb-5">
                                <h2 class="font-weight-bold">Our Works</h2>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat ea quam
                                    laborum,
                                    ducimus, laboriosam sint dolorum aspernatur libero.
                                </p>
                            </div>
                            <div class="col-md-12 text-center">
                                <div data-aos='fade-up' class="slick-work-carousel-wrap">
                                    <div class="card text-left o-hidden mb-4">

                                        <div class="card-body">
                                            <img alt="Card image cap" class="card-img-top mb-4"
                                                src="{{ asset('assets') }}/images/landing/products/products9.svg">
                                            <h5 class="card-title font-weight-bold">Project One</h5>
                                            <p class="card-text">
                                                Adipisci quas repellat sed. Quasi quaerat aut nam possimus vitae
                                                dignissimos, sapiente est atque tenetur
                                            </p>
                                        </div>
                                        <div class="card-footer pl-3">
                                            <a href="#" class="btn btn-lg p-1 mr-1 text-dark">
                                                <span class="eva eva-link-2-outline"></span>
                                            </a>
                                            <a href="#" class="btn btn-lg p-1 mr-1 text-dark">
                                                <span class="eva eva-share"></span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card  text-left o-hidden mb-4">

                                        <div class="card-body">
                                            <img alt="Card image cap" class="card-img-top mb-4"
                                                src="{{ asset('assets') }}/images/landing/products/products11.svg">
                                            <h5 class="card-title font-weight-bold">Project One</h5>
                                            <p class="card-text">
                                                Adipisci quas repellat sed. Quasi quaerat aut nam possimus vitae
                                                dignissimos, sapiente est atque tenetur
                                            </p>
                                        </div>
                                        <div class="card-footer pl-3">
                                            <a href="#" class="btn btn-lg p-1 mr-1 text-dark">
                                                <span class="eva eva-link-2-outline"></span>
                                            </a>
                                            <a href="#" class="btn btn-lg p-1 mr-1 text-dark">
                                                <span class="eva eva-share"></span>
                                            </a>
                                        </div>
                                    </div>


                                    <div class="card  text-left o-hidden mb-4">

                                        <div class="card-body">
                                            <img alt="Card image cap" class="card-img-top mb-4"
                                                src="{{ asset('assets') }}/images/landing/products/products15.svg">
                                            <h5 class="card-title font-weight-bold">Project One</h5>
                                            <p class="card-text">
                                                Adipisci quas repellat sed. Quasi quaerat aut nam possimus vitae
                                                dignissimos, sapiente est atque tenetur
                                            </p>
                                        </div>
                                        <div class="card-footer pl-3">
                                            <a href="#" class="btn btn-lg p-1 mr-1 text-dark">
                                                <span class="eva eva-link-2-outline"></span>
                                            </a>
                                            <a href="#" class="btn btn-lg p-1 mr-1 text-dark">
                                                <span class="eva eva-share"></span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card  text-left o-hidden mb-4">

                                        <div class="card-body">
                                            <img alt="Card image cap" class="card-img-top mb-4"
                                                src="{{ asset('assets') }}/images/landing/products/products17.svg">
                                            <h5 class="card-title font-weight-bold">Project One</h5>
                                            <p class="card-text">
                                                Adipisci quas repellat sed. Quasi quaerat aut nam possimus vitae
                                                dignissimos, sapiente est atque tenetur
                                            </p>
                                        </div>
                                        <div class="card-footer pl-3">
                                            <a href="#" class="btn btn-lg p-1 mr-1 text-dark">
                                                <span class="eva eva-link-2-outline"></span>
                                            </a>
                                            <a href="#" class="btn btn-lg p-1 mr-1 text-dark">
                                                <span class="eva eva-share"></span>
                                            </a>
                                        </div>
                                    </div>


                                    <div class="card  text-left o-hidden mb-4">

                                        <div class="card-body">
                                            <img alt="Card image cap" class="card-img-top mb-4"
                                                src="{{ asset('assets') }}/images/landing/products/products13.svg">
                                            <h5 class="card-title font-weight-bold">Project One</h5>
                                            <p class="card-text">
                                                Adipisci quas repellat sed. Quasi quaerat aut nam possimus vitae
                                                dignissimos, sapiente est atque tenetur
                                            </p>
                                        </div>
                                        <div class="card-footer pl-3">
                                            <a href="#" class="btn btn-lg p-1 mr-1 text-dark">
                                                <span class="eva eva-link-2-outline"></span>
                                            </a>
                                            <a href="#" class="btn btn-lg p-1 mr-1 text-dark">
                                                <span class="eva eva-share"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card  text-left o-hidden mb-4">

                                        <div class="card-body">
                                            <img alt="Card image cap" class="card-img-top mb-4"
                                                src="{{ asset('assets') }}/images/landing/products/products12.svg">
                                            <h5 class="card-title font-weight-bold">Project One</h5>
                                            <p class="card-text">
                                                Adipisci quas repellat sed. Quasi quaerat aut nam possimus vitae
                                                dignissimos, sapiente est atque tenetur
                                            </p>
                                        </div>
                                        <div class="card-footer pl-3">
                                            <a href="#" class="btn btn-lg p-1 mr-1 text-dark">
                                                <span class="eva eva-link-2-outline"></span>
                                            </a>
                                            <a href="#" class="btn btn-lg p-1 mr-1 text-dark">
                                                <span class="eva eva-share"></span>
                                            </a>
                                        </div>
                                    </div>



                                </div>


                                <span type="button"
                                    class="ngu_control_button half-button  leftRs  work-arrow-left  btn btn-circle btn-white btn-shadow"><i
                                        class="eva eva-chevron-left-outline"></i></span>

                                <button type="button"
                                    class="ngu_control_button half-button   rightRs work-arrow-right btn btn-circle btn-white btn-shadow"><i
                                        class="eva eva-chevron-right-outline"></i></button>




                            </div>

                        </div>
                    </div>
                </section>

                <!-- end::our-works -->


                <!-- best -->
                <section class="best-wrap p-t-b-80 light-gray" id="extra-feature-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 section-header mb-5">
                                <h2 class="font-weight-bold"> What Best For you</h2>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat ea quam
                                    laborum,
                                    ducimus, laboriosam sint dolorum aspernatur libero.</p>

                            </div>

                            <div data-aos='fade-right' class="col-md-6 mb-4">
                                <div class="card o-hidden text-left">

                                    <div class="card-body">
                                        <div class="left_icon float-left w-20 p-3 text-center">
                                            <i class="eva eva-clock-outline"></i>
                                        </div>
                                        <div class="right_content w-70 float-left p-3">
                                            <h4 class="card-title font-weight-bold">Get Response Faster</h4>
                                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing
                                                and
                                                typesetting industry. </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- end of col -->
                            <div data-aos='fade-left' class="col-md-6 mb-4">
                                <div class="card o-hidden text-left">

                                    <div class="card-body">
                                        <div class="left_icon float-left w-20 p-3 text-center">
                                            <i class="eva eva-calendar-outline"></i>
                                        </div>
                                        <div class="right_content w-70 float-left p-3">
                                            <h4 class="card-title font-weight-bold">Year-Round Availability</h4>
                                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing
                                                and
                                                typesetting industry. </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- end of col -->
                            <div data-aos='fade-up' class="col-md-6 mb-4 mb-lg-0 mb-md-0">
                                <div class="card o-hidden text-left">

                                    <div class="card-body">
                                        <div class="left_icon float-left w-20 p-3 text-center">
                                            <i class="eva eva-lock-outline"></i>
                                        </div>
                                        <div class="right_content w-70 float-left p-3">
                                            <h4 class="card-title font-weight-bold">Security & compliance</h4>
                                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing
                                                and
                                                typesetting industry. </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- end of col -->
                            <div data-aos='fade-up' class="col-md-6  mb-lg-0 mb-md-0">
                                <div class="card o-hidden text-left">

                                    <div class="card-body">
                                        <div class="left_icon float-left w-20 p-3 text-center">
                                            <i class="eva eva-book-open-outline"></i>
                                        </div>
                                        <div class="right_content w-70 float-left p-3">
                                            <h4 class="card-title font-weight-bold">Automate Invoicing</h4>
                                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing
                                                and
                                                typesetting industry. </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- end of col -->
                        </div>
                    </div>
                </section>
                <!-- end::best -->

                <!-- start::left-img -->
                <section class="left-image-wrap p-t-b-80">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 section-header mb-5">
                                <h2 class="font-weight-bold">We Ready to Provide</h2>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat ea quam
                                    laborum,
                                    ducimus, laboriosam sint dolorum aspernatur libero.</p>

                            </div>
                            <div class="col-md-6 col-sm-12 mb-5 mb-lg-0 mb-md-0 mt-mb-5">



                                <div class="left-image-carousel">

                                    <div>
                                        <img alt="Card image cap" class="img-responsive w-100 mb-4"
                                            src="{{ asset('assets') }}/images/landing/svg/slider4.svg">
                                    </div>
                                    <div><img alt="Card image cap" class="img-responsive w-100 mb-4"
                                            src="{{ asset('assets') }}/images/landing/svg/slider3.svg"></div>
                                    <div>
                                        <img alt="Card image cap" class="img-responsive w-100 mb-4"
                                            src="{{ asset('assets') }}/images/landing/svg/slider2.svg">
                                    </div>
                                </div>
                                <div class="slick_control_wrap text-center">


                                    <button type="button"
                                        class="ngu_control_button half-button   leftRs  btn btn-circle btn-white btn-shadow"><i
                                            class="eva eva-chevron-left-outline"></i></button>
                                    <button type="button"
                                        class="ngu_control_button half-button   rightRs btn btn-circle btn-white btn-shadow"><i
                                            class="eva eva-chevron-right-outline"></i></button>
                                </div>

                            </div>



                            <div class="col-md-5 offset-md-1 col-sm-12">
                                <div class="row">


                                    <div data-aos="fade-left" class="col-md-12 col-sm-6 mb-4">
                                        <div class="card">

                                            <div class="card-body pt-3 pb-3">

                                                <h4 class="card-title font-weight-bold">Sales and Marketing
                                                    Alignment
                                                </h4>
                                                <p class="m-0">Contrary to popular belief, Lorem Ipsum is not simply
                                                    random
                                                    text. It has roots in a piece of classical Latin literature from
                                                    45
                                                    BC
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of col  -->
                                    <div data-aos="fade-right" class="col-md-12 col-sm-6 mb-4">
                                        <div class="card">

                                            <div class="card-body pt-3 pb-3">

                                                <h4 class="card-title font-weight-bold">Relationship-based
                                                    Engagement
                                                </h4>
                                                <p class="m-0">Contrary to popular belief, Lorem Ipsum is not simply
                                                    random
                                                    text. It has roots in a piece of classical Latin literature from
                                                    45
                                                    BC
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of col  -->
                                    <div data-aos="fade-up" class="col-md-12 col-sm-6  mb-lg-0 mb-md-0 mb-sm-0">
                                        <div class="card">

                                            <div class="card-body pt-3 pb-3">

                                                <h4 class="card-title font-weight-bold">Transparent Pricing</h4>
                                                <p class="m-0">Contrary to popular belief, Lorem Ipsum is not simply
                                                    random
                                                    text. It has roots in a piece of classical Latin literature from
                                                    45
                                                    BC
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of col  -->
                                </div>
                            </div>
                            <!-- end of col6 row -->
                        </div>
                    </div>
                </section>
                <!-- end::left-img -->


                <!-- start::right-img -->
                <section class="right-image-wrap p-t-b-80 light-gray">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 section-header mb-5">
                                <h2 class="font-weight-bold">What Customer Love Most</h2>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat ea quam
                                    laborum,
                                    ducimus, laboriosam sint dolorum aspernatur libero.</p>

                            </div>

                            <div class="col-md-12 col-lg-6 col-sm-12 mb-4 mb-lg-0">
                                <div class="row m-0">
                                    <div data-aos="fade-right" class="col-md-6 col-sm-6 mb-4">
                                        <div class="card">

                                            <div class="card-body d-flex pt-4 pb-4 ">
                                                <div class="mr-2">
                                                    <i class="eva eva-pie-chart-outline mr-1 text-36 "></i>
                                                </div>
                                                <div class="">
                                                    <h4 class="card-title font-weight-bold">Full Analytics
                                                    </h4>
                                                    <p class="m-0">Contrary to popular belief, Lorem Ipsum is not
                                                        simply
                                                        random text.</p>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of col  -->
                                    <div data-aos="fade-left" class="col-md-6 col-sm-6 mb-4">
                                        <div class="card">

                                            <div class="card-body d-flex pt-4 pb-4">
                                                <div class="mr-2"><i class="eva eva-clock-outline mr-1 text-36 "></i>
                                                </div>
                                                <div class="">
                                                    <h4 class="card-title font-weight-bold"> Diagnose quickly</h4>
                                                    <p class="m-0">Contrary to popular belief, Lorem Ipsum is not
                                                        simply
                                                        random text.</p>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of col  -->
                                    <div data-aos="fade-up" class="col-md-6 col-sm-6 mb-4 mb-lg-0 mb-md-0 mb-sm-0">
                                        <div class="card">

                                            <div class="card-body d-flex pt-4 pb-4">
                                                <div class="mr-2"><i class="eva eva-lock-outline mr-1 text-36 "></i>
                                                </div>
                                                <div class="">
                                                    <h4 class="card-title font-weight-bold">Safe & Secure</h4>
                                                    <p class="m-0">Contrary to popular belief, Lorem Ipsum is not
                                                        simply
                                                        random text.</p>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of col  -->
                                    <div data-aos="fade-up" class="col-md-6 col-sm-6 mb-0 mb-lg-0 mb-md-0 mb-sm-0">
                                        <div class="card">

                                            <div class="card-body d-flex pt-4 pb-4">
                                                <div class="mr-2"><i
                                                        class="eva eva-pricetags-outline mr-1 text-36 "></i>
                                                </div>
                                                <div class="">
                                                    <h4 class="card-title font-weight-bold">Best Pricing
                                                    </h4>
                                                    <p class="m-0">Contrary to popular belief, Lorem Ipsum is not
                                                        simply
                                                        random text.</p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of col  -->

                                </div>
                            </div>
                            <!-- end of col6 row -->
                            <div class="col-md-12 col-lg-5 col-sm-12 offset-lg-1">

                                <div class="right-image-carousel">

                                    <div>
                                        <img alt="Card image cap" class="img-responsive w-100 mb-4"
                                            src="{{ asset('assets') }}/images/landing/svg/slider6.svg">
                                    </div>
                                    <div><img alt="Card image cap" class="img-responsive w-100 mb-4"
                                            src="{{ asset('assets') }}/images/landing/svg/slider9.svg"></div>
                                    <div>
                                        <img alt="Card image cap" class="img-responsive w-100 mb-4"
                                            src="{{ asset('assets') }}/images/landing/svg/slider8.svg">
                                    </div>
                                </div>
                                <div class="slick_control_wrap text-center">


                                    <button type="button"
                                        class="ngu_control_button half-button right-image-arrow-left  leftRs  btn btn-circle btn-white btn-shadow"><i
                                            class="eva eva-chevron-left-outline"></i></button>
                                    <button type="button"
                                        class="ngu_control_button half-button right-image-arrow-right  rightRs btn btn-circle btn-white btn-shadow"><i
                                            class="eva eva-chevron-right-outline"></i></button>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <!-- end::right-img -->

                <!-- start::price-1 -->
                <section id="pricing-wrap" class="pricing-one-wrap p-t-b-80">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 section-header mb-5">
                                <h2 class="font-weight-bold">Choose a Plan</h2>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat ea quam
                                    laborum,
                                    ducimus, laboriosam sint dolorum aspernatur libero.</p>
                            </div>
                            <div data-aos="fade-right"
                                class="col-sm-6 col-md-6 col-lg-3 mb-lg-0  mb-4  pricing-single-wrap">
                                <div class="card  o-hidden">
                                    <div class="card-header  text-center p-3 mb-2">
                                        <h3 class="card-title font-weight-bold mb-2 text-uppercase">Developer</h3>
                                        <p class="text-uppercase mb-0">Basic</p>
                                    </div>
                                    <div class="card-body pt-0 text-center">

                                        <p class="card-text  mb-2">
                                            <span class="money text-shadow  text-45 font-weight-bold"><sup
                                                    class="text-30 font-weight-normal">$</sup>9</span>.00
                                            <span>/Month</span>
                                        </p>
                                        <div class="offer-lists mb-4">

                                            <ul class="list-group  list-group-flush">

                                                <li class="list-group-item p-1 ">1 Users access</li>
                                                <li class="list-group-item p-1 ">10 GB of Bandwidth</li>
                                                <li class="list-group-item p-1 text-muted">Unlimited secure storage
                                                </li>

                                                <li class="list-group-item p-1 text-muted">24/7 phone support</li>
                                                <li class="list-group-item p-1 text-muted">Analytics</li>
                                                <li class="list-group-item p-1 text-muted">Advanced branding</li>
                                            </ul>

                                        </div>

                                        <a href="#"
                                            class="btn btn-gradient half-button  pl-5 pr-5 pt-2 pb-2 ">Select</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end of card -->
                            <div data-aos="fade-up"
                                class="col-sm-6 col-md-6 col-lg-3 mb-lg-0  mb-4  pricing-single-wrap">
                                <div class="card  o-hidden">
                                    <div class="card-header text-center p-3 mb-2 bg-gradient text-white">
                                        <h3 class="card-title text-white font-weight-bold mb-2 text-uppercase">
                                            starter
                                        </h3>
                                        <p class="text-uppercase mb-0">Basic</p>
                                    </div>
                                    <div class="card-body pt-0 text-center">

                                        <p class="card-text  mb-2">
                                            <span class="money text-shadow  text-45 font-weight-bold"><sup
                                                    class="text-30 font-weight-normal">$</sup>20</span>.00
                                            <span>/Month</span>
                                        </p>
                                        <div class="offer-lists mb-4">

                                            <ul class="list-group  list-group-flush">
                                                <li class="list-group-item p-1 ">5 Users access</li>
                                                <li class="list-group-item p-1 ">20 GB of Bandwidth</li>
                                                <li class="list-group-item p-1 ">Unlimited secure storage</li>

                                                <li class="list-group-item p-1 text-muted">24/7 phone support</li>
                                                <li class="list-group-item p-1 text-muted">Analytics</li>
                                                <li class="list-group-item p-1 text-muted">Advanced branding</li>
                                            </ul>

                                        </div>

                                        <a href="#" class="btn btn-gradient half-button pl-5 pr-5 pt-2 pb-2 ">Select</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end of card -->
                            <div data-aos="fade-up"
                                class="col-sm-6 col-md-6 col-lg-3 mb-lg-0 mb-md-0 mb-sm-0 mb-4  pricing-single-wrap">
                                <div class="card  o-hidden">
                                    <div class="card-header text-center p-3 mb-2 ">
                                        <h3 class="card-title font-weight-bold mb-2 text-uppercase">business</h3>
                                        <p class="text-uppercase mb-0">Basic</p>
                                    </div>
                                    <div class="card-body pt-0 text-center">

                                        <p class="card-text  mb-2">
                                            <span class="money text-shadow  text-45 font-weight-bold"><sup
                                                    class="text-30 font-weight-normal">$</sup>60</span>.00
                                            <span>/Month</span>
                                        </p>
                                        <div class="offer-lists mb-4">

                                            <ul class="list-group  list-group-flush">
                                                <li class="list-group-item p-1 ">10 Users access</li>
                                                <li class="list-group-item p-1 ">40 GB of Bandwidth</li>
                                                <li class="list-group-item p-1 ">Unlimited secure storage</li>

                                                <li class="list-group-item p-1 ">24/7 phone support</li>
                                                <li class="list-group-item p-1 text-muted">Analytics</li>
                                                <li class="list-group-item p-1 text-muted">Advanced branding</li>
                                            </ul>

                                        </div>

                                        <a href="#" class="btn btn-gradient half-button pl-5 pr-5 pt-2 pb-2 ">Select</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end of card -->
                            <div data-aos="fade-left"
                                class="col-sm-6 col-md-6 col-lg-3 mb-lg-0 mb-md-0 mb-sm-0   pricing-single-wrap">
                                <div class="card  o-hidden">
                                    <div class="card-header text-center p-3 mb-2">
                                        <h3 class="card-title font-weight-bold mb-2 text-uppercase">enterprise</h3>
                                        <p class="text-uppercase mb-0">Basic</p>
                                    </div>
                                    <div class="card-body pt-0 text-center">

                                        <p class="card-text  mb-2">
                                            <span class="money text-shadow  text-45 font-weight-bold"><sup
                                                    class="text-30 font-weight-normal">$</sup>100</span>.00
                                            <span>/Month</span>
                                        </p>
                                        <div class="offer-lists mb-4">

                                            <ul class="list-group  list-group-flush">
                                                <li class="list-group-item p-1 ">20 Users access</li>
                                                <li class="list-group-item p-1 "> Unlimited Bandwidth</li>
                                                <li class="list-group-item p-1 ">Unlimited secure storage</li>

                                                <li class="list-group-item p-1 ">24/7 phone support</li>
                                                <li class="list-group-item p-1 ">Analytics</li>
                                                <li class="list-group-item p-1 ">Advanced branding</li>
                                            </ul>

                                        </div>

                                        <a href="#" class="btn btn-gradient half-button pl-5 pr-5 pt-2 pb-2 ">Select</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end of card -->


                        </div>
                    </div>
                </section>
                <!-- end::price-1 -->

                <!-- start::team -->
                <section id="teams-wrap" class="team-wrap p-t-b-80 light-gray">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12  section-header mb-5">
                                <h2 class="font-weight-bold">Meet our Team</h2>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat ea quam
                                    laborum,
                                    ducimus, laboriosam sint dolorum aspernatur libero.</p>

                            </div>
                        </div>
                        <div class="row">
                            <div data-aos="fade-right" class="col-md-6 col-lg-3 col-sm-6 mb-lg-0  mb-4 ">
                                <div class="card card-profile-1">
                                    <div class="card-body text-center">
                                        <div class="avatar box-shadow-2 mb-3">
                                            <img src="{{ asset('assets') }}/images/landing/faces/15.jpg" alt="">
                                        </div>
                                        <h5 class="font-weight-medium card-title m-0">Jhon Doe</h5>
                                        <p class="mt-0">UI/UX Designer</p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        <button class="btn half-button btn-gradient">Contact Jhon</button>
                                        <div class="card-socials-simple mt-4">

                                            <a href="" class="text-20 mr-2">
                                                <i class="eva eva-twitter twitter"></i>
                                            </a>
                                            <a href="" class="text-20 mr-2">
                                                <i class="eva eva-google google"></i>
                                            </a>
                                            <a href="" class="text-20 mr-2">
                                                <i class="eva eva-facebook facebook"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end of col -->
                            <div data-aos="fade-up" class="col-md-6 col-lg-3 col-sm-6 mb-lg-0  mb-4 ">
                                <div class="card card-profile-1">
                                    <div class="card-body text-center">
                                        <div class="avatar box-shadow-2 mb-3">
                                            <img src="{{ asset('assets') }}/images/landing/faces/12.jpg" alt="">
                                        </div>
                                        <h5 class="font-weight-medium card-title m-0">Jassica Pearl</h5>
                                        <p class="mt-0">QA Tester</p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        <button class="btn half-button btn-gradient">Contact Jassica</button>
                                        <div class="card-socials-simple mt-4">

                                            <a href="" class="text-20 mr-2">
                                                <i class="eva eva-twitter twitter"></i>
                                            </a>
                                            <a href="" class="text-20 mr-2">
                                                <i class="eva eva-google google"></i>
                                            </a>
                                            <a href="" class="text-20 mr-2">
                                                <i class="eva eva-facebook facebook"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end of col -->
                            <div data-aos="fade-up" class="col-md-6 col-lg-3 col-sm-6  mb-lg-0 mb-md-0 mb-sm-0 mb-4 ">
                                <div class="card card-profile-1">
                                    <div class="card-body text-center">
                                        <div class="avatar box-shadow-2 mb-3">
                                            <img src="{{ asset('assets') }}/images/landing/faces/16.jpg" alt="">
                                        </div>
                                        <h5 class="font-weight-medium card-title m-0">Kara Smith</h5>
                                        <p class="mt-0">Backend Developer</p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        <button class="btn half-button btn-gradient">Contact Kara</button>
                                        <div class="card-socials-simple mt-4">

                                            <a href="" class="text-20 mr-2">
                                                <i class="eva eva-twitter twitter"></i>
                                            </a>
                                            <a href="" class="text-20 mr-2">
                                                <i class="eva eva-google google"></i>
                                            </a>
                                            <a href="" class="text-20 mr-2">
                                                <i class="eva eva-facebook facebook"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end of col -->

                            <div data-aos="fade-left" class="col-md-6 col-lg-3 col-sm-6 mb-lg-0 mb-md-0 mb-sm-0  ">
                                <div class="card card-profile-1">
                                    <div class="card-body text-center">
                                        <div class="avatar box-shadow-2 mb-3">
                                            <img src="{{ asset('assets') }}/images/landing/faces/5.jpg" alt="">
                                        </div>
                                        <h5 class="font-weight-medium card-title m-0">Mike Danvers</h5>
                                        <p class="mt-0">Frontend Developer</p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        <button class="btn half-button btn-gradient">Contact Mike</button>
                                        <div class="card-socials-simple mt-4">

                                            <a href="" class="text-20 mr-2">
                                                <i class="eva eva-twitter twitter"></i>
                                            </a>
                                            <a href="" class="text-20 mr-2">
                                                <i class="eva eva-google google"></i>
                                            </a>
                                            <a href="" class="text-20 mr-2">
                                                <i class="eva eva-facebook facebook"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end of col -->
                        </div>
                    </div>
                </section>
                <!-- end::team -->


                <!-- start::testimonial -->
                <section id="testimonials-wrap" class="testimonial-wrap p-t-b-80">
                    <div class="container">
                        <div class="row">
                            <div class="section-header col-md-12 mb-5">
                                <h2 class="font-weight-bold">What our customers says</h2>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat ea quam
                                    laborum,
                                    ducimus, laboriosam sint dolorum aspernatur libero.</p>
                            </div>
                            <div data-aos="fade-up" class="col-md-6 col-lg-4 col-sm-12   mb-4  single-testimonial-wrap">
                                <div class="card  p-3">

                                    <div class="card-body">




                                        <p class="mb-4"> Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do
                                            eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>



                                        <div class="test-user-details text-left abs">
                                            <div class="user-img w-20 float-left mr-1">
                                                <img src="{{ asset('assets') }}/images/landing/faces/15.jpg"
                                                    class="rounded-circle" alt="">
                                            </div>
                                            <span class="user-name font-weight-bold mt-1 w-75 float-right">Jhone
                                                Doe</span>
                                            <span class="user-designation w-75 float-right">Product Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end of single testimonial -->
                            <div data-aos="fade-up" class="col-md-6 col-lg-4 col-sm-12  mb-4  single-testimonial-wrap">
                                <div class="card  p-3">

                                    <div class="card-body">



                                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                            do
                                            eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>



                                        <div class="test-user-details text-left abs">
                                            <div class="user-img w-20 float-left mr-1">
                                                <img src="{{ asset('assets') }}/images/landing/faces/2.jpg"
                                                    class="rounded-circle" alt="">
                                            </div>
                                            <span class="user-name font-weight-bold mt-1 w-75 float-right">Alex
                                                Dan</span>
                                            <span class="user-designation w-75 float-right">Creative Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end of single testimonial -->
                            <div data-aos="fade-up" class="col-md-6 col-lg-4 col-sm-12 mb-4 single-testimonial-wrap">
                                <div class="card  p-3">

                                    <div class="card-body">



                                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                            do
                                            eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>



                                        <div class="test-user-details text-left abs">
                                            <div class="user-img w-20 float-left mr-1">
                                                <img src="{{ asset('assets') }}/images/landing/faces/3.jpg"
                                                    class="rounded-circle" alt="">
                                            </div>
                                            <span class="user-name font-weight-bold mt-1 w-75 float-right">Smith
                                                Doe</span>
                                            <span class="user-designation w-75 float-right">Assistant
                                                Director</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end of single testimonial -->
                            <div data-aos="fade-up"
                                class="col-md-6 col-lg-4 col-sm-12 mb-lg-0  mb-4 single-testimonial-wrap">
                                <div class="card  p-3">

                                    <div class="card-body">



                                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                            do
                                            eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>



                                        <div class="test-user-details text-left abs">
                                            <div class="user-img w-20 float-left mr-1">
                                                <img src="{{ asset('assets') }}/images/landing/faces/5.jpg"
                                                    class="rounded-circle" alt="">
                                            </div>
                                            <span class="user-name font-weight-bold mt-1 w-75 float-right">Micheal
                                                Clark</span>
                                            <span class="user-designation w-75 float-right">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end of single testimonial -->
                            <div data-aos="fade-up"
                                class="col-md-6 col-lg-4 col-sm-12 mb-lg-0  mb-4 single-testimonial-wrap">
                                <div class="card  p-3">

                                    <div class="card-body">



                                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                            do
                                            eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>



                                        <div class="test-user-details text-left abs">
                                            <div class="user-img w-20 float-left mr-1">
                                                <img src="{{ asset('assets') }}/images/landing/faces/12.jpg"
                                                    class="rounded-circle" alt="">
                                            </div>
                                            <span class="user-name font-weight-bold mt-1 w-75 float-right">Jassica
                                                June</span>
                                            <span class="user-designation w-75 float-right">Frontend
                                                Developer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end of single testimonial -->
                            <div data-aos="fade-up"
                                class="col-md-6 col-lg-4 col-sm-12 mb-lg-0 mb-md-0 mb-sm-0 mb-0 single-testimonial-wrap">
                                <div class="card  p-3">

                                    <div class="card-body">



                                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                            do
                                            eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>



                                        <div class="test-user-details text-left abs">
                                            <div class="user-img w-20 float-left mr-1">
                                                <img src="{{ asset('assets') }}/images/landing/faces/13.jpg"
                                                    class="rounded-circle" alt="">
                                            </div>
                                            <span class="user-name font-weight-bold mt-1 w-75 float-right">Gray
                                                Simon</span>
                                            <span class="user-designation w-75 float-right">Production Leader</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end of single testimonial -->

                        </div>
                    </div>
                </section>
                <!-- end::testimonial -->


                <!-- start::news-2 -->
                <section id="news-wrap" class="news-two-wrap light-gray p-t-b-80">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 section-header mb-5">
                                <h2 class="font-weight-bold">Recent News From Blog</h2>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat ea quam
                                    laborum,
                                    ducimus, laboriosam sint dolorum aspernatur libero.</p>

                            </div>
                        </div>

                        <div class="row">
                            <div data-aos="fade-right" class="col-md-6 col-sm-12 mb-lg-0 mb-md-0  mb-4">
                                <div class="card text-left  o-hidden">
                                    <div class="card_img_left w-40 float-left">
                                        <img class="card-img" src="{{ asset('assets') }}/images/landing/news/news1.svg"
                                            alt="Card image">
                                    </div>

                                    <div class="card_right_content w-60 p-3 float-right">
                                        <div class="pt-3 pb-4">
                                            <h3 class="m-0 text-capitalize font-weight-bold">Beauty of Sunshine</h3>
                                            <h5 class="font-weight-light text-uppercase">by Alex Doe</h5>
                                        </div>

                                        <div class="font-weight-light pb-3">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae
                                                reprehenderit,
                                                sequi quisquam repellendus corporis adipisci veniam! Mollitia
                                                suscipit
                                                excepturi laboriosam rem ut voluptas.
                                            </p>

                                            <a routerLink="/landing/blog-details"
                                                class="btn half-button text-white btn-gradient">Read More</a>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <!-- end of col -->
                            <div data-aos="fade-left" class="col-md-6 col-sm-12 mb-lg-0 mb-md-0  mb-0">
                                <div class="card text-left  o-hidden">
                                    <div class="card_img_left w-40 float-left">
                                        <img class="card-img" src="{{ asset('assets') }}/images/landing/news/news2.svg"
                                            alt="Card image">
                                    </div>

                                    <div class="card_right_content w-60 p-3 float-right">
                                        <div class="pt-3 pb-4">
                                            <h3 class="m-0 text-capitalize font-weight-bold">Never look backward
                                            </h3>
                                            <h5 class="font-weight-light text-uppercase">by Smith Doe</h5>
                                        </div>

                                        <div class="font-weight-light pb-3">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae
                                                reprehenderit,
                                                sequi quisquam repellendus corporis adipisci veniam! Mollitia
                                                suscipit
                                                excepturi laboriosam rem ut voluptas.
                                            </p>

                                            <a routerLink="/landing/blog-details"
                                                class="btn  half-button btn-gradient text-white">Read More</a>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <!-- end of col -->


                        </div>

                    </div>
                </section>
                <!-- end::news-2 -->


                <!-- start::faq -->
                <section class="faqs-wrap p-t-b-80 " id="faqs-wrap">
                    <div class="container">
                        <div class="row">

                        </div>

                        <div class="row">
                            <div class="col-md-6 col-sm-12 mb-4 mb-lg-0 mb-md-0  mb-4">
                                <div class=" section-header mb-5">
                                    <h2 class="font-weight-bold">Faqs</h2>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat ea quam
                                        laborum,
                                        ducimus, laboriosam sint dolorum aspernatur libero.</p>

                                </div>
                                <div class="accordion" id="accordionExample">
                                    <div class="card ul-card__border-radius">
                                        <div class="card-header ">
                                            <h6 class="card-title mb-0">
                                                <a data-toggle="collapse" class="text-default"
                                                    href="#accordion-item-group1">Accordion asd
                                                    Item #1</a>
                                            </h6>
                                        </div>

                                        <div id="accordion-item-group1" class="collapse show"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                terry
                                                richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                                skateboard
                                                dolor brunch.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card ul-card__border-radius">
                                        <div class="card-header">
                                            <h6 class="card-title mb-0">
                                                <a class="collapsed text-default" data-toggle="collapse"
                                                    href="#accordion-item-group2">Accordion Item #2</a>
                                            </h6>
                                        </div>

                                        <div id="accordion-item-group2" class="collapse"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod.
                                                Brunch
                                                3
                                                wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                coffee
                                                nulla assumenda.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card ul-card__border-radius">
                                        <div class="card-header">
                                            <h6 class="card-title mb-0">
                                                <a class="collapsed text-default" data-toggle="collapse"
                                                    href="#accordion-item-default3">Accordion Item #3</a>
                                            </h6>
                                        </div>

                                        <div id="accordion-item-default3" class="collapse"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                                Food
                                                truck
                                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                                aliqua
                                                put
                                                a bird on it.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end of col -->
                            <div class="col-md-5 offset-md-1 col-sm-12 d-flex align-items-center">

                                <img data-aos="fade-left" src="{{ asset('assets') }}/images/landing/svg/faqs2.svg"
                                    class="img-responsive w-100" alt="">
                            </div>
                        </div>

                    </div>
                </section>
                <!-- end::faq -->



                <!-- start::contact-form -->
                <section id="contacts-wrap" class="contact-form-wrap light-gray p-t-b-80">
                    <div class="container">
                        <div class="row">



                            <div data-aos="fade-right" class="form-wrap  col-md-6 mb-4">
                                <div class="section-header mb-5 ">
                                    <h2 class="font-weight-bold ">Get in Touch With Us !</h2>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat ea quam
                                        laborum,
                                        ducimus, laboriosam sint dolorum aspernatur libero</p>

                                </div>
                                <div *ngIf="success" class="alert alert-success alert-dismissible fade show"
                                    role="alert"
                                    [@animate]="{value:'*',params:{y:'-120px',opacity:'0',delay:'100ms', duration: '400ms'}}">
                                    <button type="button" class="close" onClick="success=false">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <strong>Your Message Sent succefully</strong>
                                </div>


                                <form class="row form" role="form">
                                    <div class="form-group mb-4 col-md-6">
                                        <label for="">
                                            <i class="eva eva-person-outline"></i>
                                        </label>
                                        <input type="text" name="Name" id="" class="form-control"
                                            placeholder="Your Name" required>

                                    </div>
                                    <div class="form-group mb-4 col-md-6">
                                        <label for="">
                                            <i class="eva eva-email-outline"></i>
                                        </label>
                                        <input type="email" required name='email' class="form-control"
                                            placeholder="Your email" aria-describedby="helpId">

                                    </div>
                                    <div class="form-group mb-4 col-md-12">
                                        <label for="">
                                            <i class="eva eva-edit-2-outline"></i>
                                        </label>
                                        <input type="text" required name='subject' class="form-control"
                                            placeholder="Your subject here" aria-describedby="helpId">

                                    </div>

                                    <div class="form-group mb-4 col-md-12">

                                        <label for="">
                                            <i class="eva eva-edit-outline"></i>
                                        </label>
                                        <textarea class="form-control" placeholder="Your message here" required
                                            name='message' rows="5"></textarea>


                                    </div>

                                    <div class="form-group  col-md-12">
                                        <button type="submit"
                                            class="btn btn-block half-button form-submit-button btn-large btn-gradient">Send
                                            message
                                        </button>

                                    </div>



                                </form>



                            </div>
                            <div class="col-md-6 align-items-center">
                                <div class="right-contact-wrap ml-5">

                                    <img data-aos="fade-left"
                                        src="{{ asset('assets') }}/images/landing/svg/contact2.svg"
                                        class="img-responsive zoom-fade" alt="Image">

                                    <!-- <div class="address-wrap mb-4">-->


                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- end::contact-form -->

                <!-- Footer Start -->
                <div class="flex-grow-1"></div>
                <!-- start subscribe section -->
                <section id="subscribe-wrap" class="subscribe p-t-b-80">
                    <div class="container">



                        <div class="row text-center">
                            <!-- start::subscribe-1 -->
                            <div data-aos="fade-up" class="col-md-12">
                                <div class="subscribe-1">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="subscribe-1__start mt-5 mb-5">
                                                <h2 class="heading mb-5 ">Subscribe to Our Channel</h2>
                                                <div class="subscribe-input">
                                                    <form class="form-inline justify-content-center  ">
                                                        <div class="form-group">
                                                            <input type="email" class="form-control  dexam-input h-55"
                                                                placeholder="Enter your email address" required="">
                                                        </div>
                                                        <button type="submit" class="btn btn-gradient h-55 text-19">
                                                            Subscribe Now
                                                        </button>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end::subscribe-1 -->
                        </div>

                    </div>
                </section>
                <!-- end subscribe section -->

                <section class="footer_wrap" id="footer-wrap">
                    <div class="container">
                        <div class="row">


                            <div data-aos="fade-up" class="col-md-3 mb-4">
                                <div class=" o-hidden text-left">



                                    <div class="">
                                        <h4 class="card-title font-weight-bold">Dexam</h4>
                                        <p class="">Dexam is highly customizable Pure VueJs + bootstrap 4 landing
                                            Page.
                                            Dexam
                                            is built with official @vue/cli tool and uses BootstrapVue . </p>
                                    </div>


                                </div>
                            </div>
                            <!-- end of col -->
                            <div data-aos="fade-up" class="col-md-3 mb-4">
                                <div class=" o-hidden text-left">



                                    <div class=" ">
                                        <h4 class="card-title font-weight-bold">Other Pages</h4>
                                        <div class=" mb-5 lead">
                                            <ul class="list-inline">
                                                <li class=" mb-3 "> <a href="#">Marketing</a></li>
                                                <li class=" mb-3 "><a href="#">Campaign</a>
                                                </li>
                                                <li class="mb-3"> <a href="#"> Digital Agency</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <!-- end of col -->
                            <div data-aos="fade-up" class="col-md-3 mb-4 mb-lg-0 mb-md-0">
                                <div class=" o-hidden text-left">

                                    <div class="">
                                        <h4 class="card-title font-weight-bold">Awesome Features</h4>
                                        <div class=" mb-5 lead">
                                            <ul class="list-inline">
                                                <li class=" mb-3 "><i
                                                        class="eva eva-checkmark-outline mr-2 text-warning"></i>Minimal
                                                </li>
                                                <li class=" mb-3 "><i
                                                        class="eva eva-checkmark-outline mr-2 text-warning"></i>Intuitive
                                                </li>


                                                <li class="mb-3"><i
                                                        class="eva eva-checkmark-outline mr-2 text-warning"></i>
                                                    Super Flexible</li>
                                            </ul>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <!-- end of col -->
                            <div data-aos="fade-up" class="col-md-3  mb-lg-0 mb-md-0">
                                <div class=" o-hidden text-left">

                                    <div class="">
                                        <h4 class="card-title font-weight-bold">Contact Info</h4>
                                        <div class="address-wrap mb-3">

                                            <ul class="list-group list-unstyled">
                                                <li class=""> <i class="eva eva-pin-outline mr-2"></i>UI-Lib ,United
                                                    Kingdom
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="address-wrap mb-3">

                                            <ul class="list-group list-unstyled">
                                                <li class=""><i class="eva eva-email-outline mr-2"></i>test@yahoo.com
                                                </li>

                                            </ul>
                                        </div>

                                        <div class="address-wrap mb-3">

                                            <ul class="list-group list-unstyled">
                                                <li class=""><i class="eva eva-phone-call-outline mr-2"></i>
                                                    +8801961081993
                                                </li>

                                            </ul>
                                        </div>


                                        <section class="social-wrap ">

                                            <div class="social-btns-wrap">

                                                <a class="social-btn text-30 facebook ml-0" href="#"><i
                                                        class="eva eva-facebook"></i></a>

                                                <a class="social-btn text-30 twitter" href="#"><i
                                                        class="eva eva-twitter"></i></a>

                                                <a class="social-btn text-30 google" href="#"><i
                                                        class="eva eva-google"></i></a>

                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                            <!-- end of col -->
                        </div>
                    </div>
                </section>
                <!-- end footer -->

                <!-- customizer start -->
                <div class="customizer card ">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="handle">
                                <i class="eva eva-settings-2-outline animated infinite rotateInUpLeft"></i>
                            </div>
                        </div>
                        <div class="col-md-12 o-hidden">

                            <div class="colors_wrap" data-perfect-scrollbar data-suppress-scroll-x="true">
                                <div class="card-body">
                                    <h2 class="card-title">Solid Colors</h2>
                                    <a name="" id="" data-class="teal" class="change-bg btn teal btn-circle m-2"
                                        role="button"></a>
                                    <a name="" id="" data-class="blue" class="change-bg btn blue btn-circle m-2"
                                        role="button"></a>
                                    <a data-class="midnight-blue" class="change-bg btn midnight-blue btn-circle m-2"
                                        role="button"></a>
                                    <a data-class="indigo" class="change-bg btn indigo btn-circle m-2"
                                        role="button"></a>
                                    <a data-class="indigo-light" class="change-bg btn indigo-light btn-circle m-2"
                                        role="button"></a>
                                    <a data-class="indigo-deep" class="change-bg btn indigo-deep btn-circle m-2"
                                        role="button"></a>
                                    <a data-class="indigo-ocean" class="change-bg btn indigo-ocean btn-circle m-2"
                                        role="button"></a>
                                    <a data-class="dark-purple" class="change-bg btn dark-purple btn-circle m-2"
                                        role="button"></a>
                                    <a data-class="purple" class="change-bg btn purple btn-circle m-2"
                                        role="button"></a>
                                    <a data-class="pink" class="change-bg btn pink btn-circle m-2" role="button"></a>
                                    <a data-class="pink-light" class="change-bg btn pink-light btn-circle m-2"
                                        role="button"></a>
                                    <a data-class="red" class="change-bg btn red btn-circle m-2" role="button"></a>
                                    <a data-class="red-light" class="change-bg btn red-light btn-circle m-2"
                                        role="button"></a>
                                    <a data-class="red-deep" class="change-bg btn red-deep btn-circle m-2"
                                        role="button"></a>
                                    <a data-class="red-extra" class="change-bg btn red-extra btn-circle m-2"
                                        role="button"></a>
                                    <a data-class="gray" class="change-bg btn gray btn-circle m-2" role="button"></a>
                                    <a data-class="light-black" class="change-bg btn light-black btn-circle m-2"
                                        role="button"></a>
                                    <a data-class="slate-gray" class="change-bg btn slate-gray btn-circle m-2"
                                        role="button"></a>
                                    <a data-class="orange" class="change-bg btn orange btn-circle m-2"
                                        role="button"></a>
                                    <a data-class="brown" class="change-bg btn brown btn-circle m-2" role="button"></a>

                                </div>

                                <div class="card-body">
                                    <h2 class="card-title">Gradient Colors</h2>
                                    <a data-class="gradient-purple-indigo"
                                        class="change-bg btn gradient-purple-indigo btn-circle m-2" role="button"></a>
                                    <a data-class="gradient-blue-red"
                                        class="change-bg btn gradient-blue-red btn-circle m-2" role="button"></a>
                                    <a data-class="gradient-red-orange"
                                        class="change-bg btn gradient-red-orange btn-circle m-2" role="button"></a>
                                    <a data-class="gradient-black-blue"
                                        class="change-bg btn gradient-black-blue btn-circle m-2" role="button"></a>
                                    <a data-class="gradient-black-gray"
                                        class="change-bg btn gradient-black-gray btn-circle m-2" role="button"></a>
                                    <a data-class="gradient-steel-gray"
                                        class="change-bg btn gradient-steel-gray btn-circle m-2" role="button"></a>
                                    <a data-class="gradient-grade-gray"
                                        class="change-bg btn gradient-grade-gray btn-circle m-2" role="button"></a>
                                    <a data-class="gradient-cristal-clear"
                                        class="change-bg btn gradient-cristal-clear btn-circle m-2" role="button"></a>
                                    <a data-class="gradient-cool-blue"
                                        class="change-bg btn gradient-cool-blue btn-circle m-2" role="button"></a>
                                    <a data-class="gradient-moonlight-asteriod"
                                        class="change-bg btn gradient-moonlight-asteriod btn-circle m-2"
                                        role="button"></a>
                                    <a data-class="gradient-hervey" class="change-bg btn gradient-hervey btn-circle m-2"
                                        role="button"></a>
                                    <a data-class="gradient-altra-violet"
                                        class="change-bg btn gradient-altra-violet btn-circle m-2" role="button"></a>
                                    <a data-class="gradient-slight-ocean"
                                        class="change-bg btn gradient-slight-ocean btn-circle m-2" role="button"></a>
                                    <a data-class="gradient-red-sunset"
                                        class="change-bg btn gradient-red-sunset btn-circle m-2" role="button"></a>
                                    <a data-class="gradient-quepal" class="change-bg btn gradient-quepal btn-circle m-2"
                                        role="button"></a>
                                    <a data-class="gradient-lawrencium"
                                        class="change-bg btn gradient-lawrencium btn-circle m-2" role="button"></a>
                                    <a data-class="gradient-meridian"
                                        class="change-bg btn gradient-meridian btn-circle m-2" role="button"></a>
                                    <!-- <a data-class="gradient-altra-violet')" class="btn gradient-altra-violet btn-circle m-2" role="button"></a> -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of customizer -->

            </div>
            <!-- ============ Main content End ============= -->




        </div>
    </div>

    <!--=============== End app-Landing-wrap ================-->



    <script src="{{ asset('assets') }}/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('assets') }}/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/js/vendor/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('assets') }}/js/vendor/slick.min.js"></script>
    <script src="{{ asset('assets') }}/js/es5/scroll.min.js"></script>
    <script src="{{ asset('assets') }}/js/es5/slick.script.min.js"></script>
    <script src="{{ asset('assets') }}/js/vendor/aos.js"></script>
    <script src="{{ asset('assets') }}/js/es5/script.min.js"></script>
</body>

</html>