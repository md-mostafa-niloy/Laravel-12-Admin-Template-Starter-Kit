<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-layout="vertical" data-sidebar="dark"
      data-sidebar-size="lg" data-preloader="disable" data-theme="default" data-topbar="light" data-bs-theme="light">

<head>

    <meta charset="utf-8">
    <title>@yield('title') - {{ env('APP_NAME') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Minimal Admin & Dashboard Template" name="description">
    <meta content="{{ env('APP_NAME') }}" name="author">
    {{--    @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
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
    <link rel="stylesheet" href="{{ asset('assets/libs/toastr/toastr.min.css') }}">
    @yield('vendor-style')
    @yield('page-style')
    @livewireStyles
</head>

<body>

<!-- Begin page -->
<div id="layout-wrapper">

    <!-- ========== App Menu ========== -->
    <div class="app-menu navbar-menu">
        <!-- LOGO -->
        <div class="navbar-brand-box">
            <a href="{{ route('dashboard') }}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="22">
                    </span>
                <span class="logo-lg">
                        <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="22">
                    </span>
            </a>
            <a href="{{ route('dashboard') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="22">
                    </span>
                <span class="logo-lg">
                        <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="22">
                    </span>
            </a>
            <button type="button" class="p-0 btn btn-sm fs-3xl header-item float-end btn-vertical-sm-hover"
                    id="vertical-hover">
                <i class="ri-record-circle-line"></i>
            </button>
        </div>

        <div id="scrollbar">
            @include('layouts.partials.sidebar')
            <!-- Sidebar -->
        </div>

        <div class="sidebar-background"></div>
    </div>
    <!-- Left Sidebar End -->
    <!-- Vertical Overlay-->
    <div class="vertical-overlay"></div>
    <header id="page-topbar">
        <div class="layout-width">
            @include('layouts.partials.topbar')
        </div>
    </header>
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                @yield('content')
            </div><!--end row-->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    @include('layouts.partials.footer')
</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->
<!--start back-to-top-->
<button class="btn btn-dark btn-icon" id="back-to-top">
    <i class="bi bi-caret-up fs-3xl"></i>
</button>
<!--end back-to-top-->

<!--preloader-->
<div id="loader"
     style="display: none; position: fixed; top: 50%; left: 50%;
    transform: translate(-50%, -50%); z-index: 1051; background-color: rgba(208,208,208,0.3); width: 100% ; height: 100%;">
    <div class="d-flex justify-content-center align-items-center h-100">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
</div>

<div class="customizer-setting d-none d-md-block">
    <div class="p-2 shadow-lg btn btn-info text-uppercase rounded-end-0" data-bs-toggle="offcanvas"
         data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
        <i class="mb-1 bi bi-gear"></i> Customizer
    </div>
</div>

<!-- Theme Settings -->
@include('layouts.partials.theme-setting')

<!-- JAVASCRIPT -->
<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/libs/toastr/toastr.min.js') }}"></script>
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <script>
            notify('error', "{{ $error }}");
        </script>
    @endforeach
@endif
<script>
    function showLoader() {
        $('#loader').removeClass('d-none');
    }

    function hideLoader() {
        $('#loader').addClass('d-none');
    }

    document.addEventListener("DOMContentLoaded", function () {
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

    @if (Session::has('success'))
    notify('success', "{{ session('success') }}");
    @elseif (Session::has('error'))
    notify('error', "{{ Session::get('error') }}");
    @elseif (Session::has('warning'))
    notify('warning', "{{ Session::get('warning') }}");
    @elseif (Session::has('info'))
    notify('info', "{{ Session::get('info') }}");
    @endif

    @foreach (session('toasts', collect())->toArray() as $toast)
    const options = {
        title: '{{ $toast['title'] ?? '' }}',
        message: '{{ $toast['message'] ?? 'No message provided' }}',
        position: '{{ $toast['position'] ?? 'topRight' }}',
    };
    show('{{ $toast['type'] ?? 'info' }}', options);
    @endforeach

    function notify(type, msg, position = 'topRight') {
        toastr[type](msg);
    }

    function show(type, options) {
        if (['info', 'success', 'warning', 'error'].includes(type)) {
            toastr[type](options);
        } else {
            toastr.show(options);
        }
    }
</script>
<!-- App js -->
<script src="{{ asset('assets/js/app.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@yield('vendor-script')
@yield('page-script')
@stack('modals')

@livewireScripts
</body>

</html>
