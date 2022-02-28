<!DOCTYPE html>
<html lang="en">

<head>

    <title>Starter Page | Minia - Admin & Dashboard Template</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/assets') }}/images/favicon.ico"> <!-- preloader css -->
    <link rel="stylesheet" href="{{ asset('admin/assets') }}/css/preloader.min.css" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{ asset('admin/assets') }}/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('admin/assets') }}/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('admin/assets') }}/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    @stack('css')
    @livewireStyles
</head>

<!--All Vertical Pages-->

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- if you select vertical Menu then comment Horizontal Menu and uncomment this-->
        <x-header></x-header>

        @include('layouts.sidebar')
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    {{ $slot }}
                    <!-- end page title -->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Minia.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by <a href="#!" class="text-decoration-underline">Themesbrand</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->
    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div><!-- /Right-bar -->

    <!-- JAVASCRIPT -->

    <!-- JAVASCRIPT -->
    <script src="{{ asset('admin/assets') }}/libs/jquery/jquery.min.js"></script>
    <script src="{{ asset('admin/assets') }}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('admin/assets') }}/libs/metismenu/metisMenu.min.js"></script>
    <script src="{{ asset('admin/assets') }}/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('admin/assets') }}/libs/node-waves/waves.min.js"></script>
    <script src="{{ asset('admin/assets') }}/libs/feather-icons/feather.min.js"></script>
    <!-- pace js -->
    <script src="{{ asset('admin/assets') }}/libs/pace-js/pace.min.js"></script>
    <script src="{{ asset('admin/assets') }}/js/app.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        const Toast = Swal.mixin({
        toast: true,
        position: 'top-right',
        showConfirmButton: false,
        showCloseButton: true,
        timer: 5000,
        timerProgressBar:true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    });

    window.addEventListener('alert',({detail:{type,message}})=>{
        Toast.fire({
            icon:type,
            title:message   
        })
    })
   
    </script>
    @livewireScripts
    @stack('js')
</body>

</html>