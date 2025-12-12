<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-layout="vertical" data-sidebar="dark"
    data-sidebar-size="lg" data-preloader="disable" data-theme="default" data-topbar="light" data-bs-theme="light">

<head>

    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - {{ env('APP_NAME') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Minimal Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Fonts css load -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link id="fontsLink"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">

    <!-- Layout config Js -->
    <script src="{{ asset('assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css">
    <!-- custom Css-->
    <link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet" type="text/css">

</head>

<body>


    <section
        class="py-5 auth-page-wrapper position-relative d-flex align-items-center justify-content-center min-vh-100">
        <div class="container">
            <div class="row justify-content-center">
                @yield('content')
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/plugins.js') }}"></script> --}}
    <!-- Plugin Js -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            if (document.querySelector("[toast-list]")) {
                let script = document.createElement("script");
                script.src = "{{ asset('assets/libs/toastify-js/src/toastify.js') }}";
                document.body.appendChild(script);
            }

            if (document.querySelector("[data-provider]")) {
                let script = document.createElement("script");
                script.src = "{{ asset('assets/libs/flatpickr/flatpickr.min.js') }}";
                document.body.appendChild(script);
            }

            if (document.querySelector("[data-choices]")) {
                let script = document.createElement("script");
                script.src = "{{ asset('assets/libs/choices.js/public/assets/scripts/choices.min.js') }}";
                document.body.appendChild(script);
            }
        });
    </script>


    <!-- password-addon init -->
    <script src="{{ asset('assets/js/pages/password-addon.init.js') }}"></script>

    {{-- <script src="{{ asset('assets/js/pages/passowrd-create.init.js') }}"></script> --}}

    <!--Swiper slider js-->
    <script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- swiper.init js -->
    <script src="{{ asset('assets/js/pages/swiper.init.js') }}"></script>

</body>

</html>
