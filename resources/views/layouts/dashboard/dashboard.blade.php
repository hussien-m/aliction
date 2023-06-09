<!doctype html>
<html lang="en" dir="rtl">

<head>

    <meta charset="utf-8">
    <title>{{ $option->site_name." | "}} لوحة التحكم</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/favicon.png') }}">
    @yield('styles')

    <!-- Bootstrap Css -->
    <link href="{{asset('dashboard/assets/css/bootstrap-rtl.min.css')}}" id="bootstrap-style" rel="stylesheet"
        type="text/css">
    <!-- Icons Css -->
    <link href="{{asset('dashboard/assets/css/icons-rtl.min.css')}}" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="{{asset('dashboard/assets/css/app-rtl.min.css')}}" id="app-style" rel="stylesheet" type="text/css">



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Cairo&amp;family=Noto+Kufi+Arabic&amp;family=Noto+Naskh+Arabic&amp;family=Noto+Sans+Arabic:wght@500&amp;display=swap" rel="stylesheet">

    <style>
        *,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        span,
        a,
        p,
        li,
        #sidebar-menu ul li a {
            font-family: 'Noto Kufi Arabic', sans-serif;

        }
    </style>



</head>

<body data-sidebar="dark">

    <div id="layout-wrapper">

        @include('layouts.dashboard.navbar')

        @include('layouts.dashboard.sidebar')
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->

                    @if(!Request::is('admin/dashboard'))
                    @include('layouts.dashboard.crumb')
                    @endif
                    <!-- end page title -->

                    <!-- Start Your Main Content Here-->
                    @yield('content')
                    <!-- END Your Main Content Here-->
                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                         <span class="d-none d-sm-inline-block">
                                جميع الحقوق محفوظة {{ $option->site_name }} {{ date("Y") }} &copy;
                                     </span>
                        </div>
                    </div>
                </div>
                <audio autoplay="true" id="notificationSound" src="{{ asset('notification.mp3') }}" muted></audio>
            </footer>


        </div>
        <!-- end main content-->

    </div>
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->

    <script src="{{asset('dashboard/assets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('dashboard/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('dashboard/assets/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('dashboard/assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('dashboard/assets/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{asset('dashboard/assets/js/app.js')}}"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @yield('scripts')
    <script>
        @if (Session::has('message'))

                toastr.options = {
                    "closeButton": true,
                    "debug": false,
                    "progressBar": true,
                    "positionClass": "toast-top-center",
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                    }
                    var type = "{{ Session::get('type', 'info') }}";
                    switch (type) {
                        case 'info':
                            toastr.info("{{ Session::get('message') }}");
                            break;
                        case 'warning':
                            toastr.warning("{{ Session::get('message') }}");
                            break;
                        case 'success':
                            toastr.success("{{ Session::get('message') }}");
                            break;
                        case 'error':
                            toastr.error("{{ Session::get('message') }}");
                            break;
                    }
                @endif
    </script>

</body>

</html>
