<div class="navbar-header">
    <div class="d-flex">
        <!-- LOGO -->
        <div class="navbar-brand-box horizontal-logo">
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
        </div>

        <button type="button" class="px-3 shadow-none btn btn-sm fs-16 header-item vertical-menu-btn topnav-hamburger"
            id="topnav-hamburger-icon">
            <span class="hamburger-icon">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </button>

        <form class="app-search d-none d-md-inline-flex">
            <div class="position-relative">
                <input type="text" class="form-control" placeholder="Search..." autocomplete="off"
                    id="search-options" value="">
                <span class="mdi mdi-magnify search-widget-icon"></span>
                <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none"
                    id="search-close-options"></span>
            </div>
            <div class="dropdown-menu dropdown-menu-lg" id="search-dropdown">
                <div data-simplebar style="max-height: 320px;">
                    <!-- item-->
                    <div class="dropdown-header">
                        <h6 class="mb-0 text-overflow text-muted text-uppercase">Recent Searches</h6>
                    </div>

                    <div class="bg-transparent dropdown-item text-wrap">
                        <a href="index.html" class="btn btn-subtle-secondary btn-sm btn-rounded">how
                            to setup <i class="mdi mdi-magnify ms-1"></i></a>
                        <a href="index.html" class="btn btn-subtle-secondary btn-sm btn-rounded">buttons <i
                                class="mdi mdi-magnify ms-1"></i></a>
                    </div>
                    <!-- item-->
                    <div class="mt-2 dropdown-header">
                        <h6 class="mb-1 text-overflow text-muted text-uppercase">Pages</h6>
                    </div>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="align-middle ri-bubble-chart-line fs-18 text-muted me-2"></i>
                        <span>Analytics Dashboard</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="align-middle ri-lifebuoy-line fs-18 text-muted me-2"></i>
                        <span>Help Center</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="align-middle ri-user-settings-line fs-18 text-muted me-2"></i>
                        <span>My account settings</span>
                    </a>

                    <!-- item-->
                    <div class="mt-2 dropdown-header">
                        <h6 class="mb-2 text-overflow text-muted text-uppercase">Members</h6>
                    </div>

                    <div class="notification-list">
                        <!-- item -->
                        <a href="javascript:void(0);" class="py-2 dropdown-item notify-item">
                            <div class="d-flex">
                                <img src="assets/images/users/avatar-2.jpg" class="me-3 rounded-circle avatar-xs"
                                    alt="user-pic">
                                <div class="flex-1">
                                    <h6 class="m-0">Angela Bernier</h6>
                                    <span class="mb-0 fs-2xs text-muted">Manager</span>
                                </div>
                            </div>
                        </a>
                        <!-- item -->
                        <a href="javascript:void(0);" class="py-2 dropdown-item notify-item">
                            <div class="d-flex">
                                <img src="assets/images/users/avatar-3.jpg" class="me-3 rounded-circle avatar-xs"
                                    alt="user-pic">
                                <div class="flex-1">
                                    <h6 class="m-0">David Grasso</h6>
                                    <span class="mb-0 fs-2xs text-muted">Web Designer</span>
                                </div>
                            </div>
                        </a>
                        <!-- item -->
                        <a href="javascript:void(0);" class="py-2 dropdown-item notify-item">
                            <div class="d-flex">
                                <img src="assets/images/users/avatar-5.jpg" class="me-3 rounded-circle avatar-xs"
                                    alt="user-pic">
                                <div class="flex-1">
                                    <h6 class="m-0">Mike Bunch</h6>
                                    <span class="mb-0 fs-2xs text-muted">React Developer</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="pt-3 pb-1 text-center">
                    <a href="#" class="btn btn-primary btn-sm">View All Results <i
                            class="ri-arrow-right-line ms-1"></i></a>
                </div>
            </div>
        </form>
    </div>

    <div class="d-flex align-items-center">
        <div class="ms-1 header-item d-none d-sm-flex">
            <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle"
                data-toggle="fullscreen">
                <i class='bi bi-arrows-fullscreen fs-lg'></i>
            </button>
        </div>

        <div class="dropdown topbar-head-dropdown ms-1 header-item">
            <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle mode-layout"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="align-middle bi bi-sun fs-3xl"></i>
            </button>
            <div class="p-2 dropdown-menu dropdown-menu-end" id="light-dark-mode">
                <a href="#!" class="dropdown-item" data-mode="light"><i
                        class="align-middle bi bi-sun me-2"></i> Default (light mode)</a>
                <a href="#!" class="dropdown-item" data-mode="dark"><i
                        class="align-middle bi bi-moon me-2"></i> Dark</a>
                <a href="#!" class="dropdown-item" data-mode="auto"><i
                        class="align-middle bi bi-moon-stars me-2"></i> Auto (system default)</a>
            </div>
        </div>
        <div class="ms-1 header-item d-none d-sm-flex">
            <a href="{{ route('home') }}" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle"
                data-bs-toggle="tooltip" data-bs-title="Visit Site">
                <i class="bi bi-globe fs-3xl"></i>
            </a>
        </div>

        <div class="dropdown ms-sm-3 header-item topbar-user">
            <button type="button" class="shadow-none btn" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="d-flex align-items-center">
                    <img class="rounded-circle header-profile-user"
                        src="{{ asset('assets/images/users/32/avatar-1.jpg') }}" alt="Header Avatar">
                    <span class="text-start ms-xl-2">
                        <span
                            class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">{{ auth()->user()->name }}</span>
                        <span class="d-none d-xl-block ms-1 fs-sm user-name-sub-text">
                            {{ ucfirst(auth()->user()->roles()->first()->name) }}
                        </span>
                    </span>
                </span>
            </button>
            <div class="dropdown-menu dropdown-menu-end">
                <!-- item-->
                <h6 class="dropdown-header">Welcome {{ auth()->user()->name }}!</h6>
                <a class="dropdown-item" href="{{ route('profile.show') }}">
                    <i class="align-middle mdi mdi-account-circle text-muted fs-lg me-1"></i>
                    <span class="align-middle">
                        Profile
                    </span>
                </a>
                <a class="dropdown-item" href="pages-profile-settings.html"><i
                        class="align-middle mdi mdi-cog-outline text-muted fs-lg me-1"></i> <span
                        class="align-middle">Settings</span></a>
                <form action="{{ route('logout') }}" method="post" class="dropdown-item">
                    @csrf
                    <i class="align-middle mdi mdi-logout text-muted fs-lg me-1"></i>
                    <button type="submit" class="logoutBtn">Logout</button>
                </form>
            </div>
        </div>
    </div>
</div>
<style>
    .logoutBtn {
        background: transparent;
        border: none;
        margin-left: -6px;
    }
</style>
