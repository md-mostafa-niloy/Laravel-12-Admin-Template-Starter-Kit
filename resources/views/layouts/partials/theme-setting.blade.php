<div class="border-0 offcanvas offcanvas-end" tabindex="-1" id="theme-settings-offcanvas">
    <div class="p-3 d-flex align-items-center bg-primary bg-gradient offcanvas-header">
        <div class="me-2">
            <h5 class="mb-1 text-white">Theme Settings</h5>
            <p class="mb-0 text-white text-opacity-75">Choose your themes & layouts etc.</p>
        </div>

        <button type="button" class="btn-close btn-close-white ms-auto" id="customizerclose-btn"
            data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="p-0 offcanvas-body">
        <div data-simplebar class="h-100">
            <div class="p-4">
                <h6 class="mb-1 fs-md">Layout</h6>
                <p class="text-muted fs-sm">Choose your layout</p>

                <div class="row">
                    <div class="col-4">
                        <div class="form-check card-radio">
                            <input id="customizer-layout01" name="data-layout" type="radio" value="vertical"
                                class="form-check-input">
                            <label class="p-0 form-check-label avatar-md w-100" for="customizer-layout01">
                                <span class="gap-1 d-flex h-100">
                                    <span class="flex-shrink-0">
                                        <span class="gap-1 p-1 bg-light d-flex h-100 flex-column">
                                            <span class="p-1 px-2 mb-2 rounded d-block bg-primary-subtle"></span>
                                            <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                            <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                            <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="p-1 bg-light d-block"></span>
                                            <span class="p-1 mt-auto bg-light d-block"></span>
                                        </span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <h5 class="mt-2 text-center fs-sm fw-medium">Vertical</h5>
                    </div>
                    <div class="col-4">
                        <div class="form-check card-radio">
                            <input id="customizer-layout02" name="data-layout" type="radio" value="horizontal"
                                class="form-check-input">
                            <label class="p-0 form-check-label avatar-md w-100" for="customizer-layout02">
                                <span class="gap-1 d-flex h-100 flex-column">
                                    <span class="gap-1 p-1 bg-light d-flex align-items-center">
                                        <span class="p-1 rounded d-block bg-primary-subtle me-1"></span>
                                        <span class="p-1 px-2 pb-0 d-block bg-primary-subtle ms-auto"></span>
                                        <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                    </span>
                                    <span class="p-1 bg-light d-block"></span>
                                    <span class="p-1 mt-auto bg-light d-block"></span>
                                </span>
                            </label>
                        </div>
                        <h5 class="mt-2 text-center fs-sm fw-medium">Horizontal</h5>
                    </div>
                    <div class="col-4">
                        <div class="form-check card-radio">
                            <input id="customizer-layout03" name="data-layout" type="radio" value="twocolumn"
                                class="form-check-input">
                            <label class="p-0 form-check-label avatar-md w-100" for="customizer-layout03">
                                <span class="gap-1 d-flex h-100">
                                    <span class="flex-shrink-0">
                                        <span class="gap-1 bg-light d-flex h-100 flex-column">
                                            <span class="p-1 mb-2 d-block bg-primary-subtle"></span>
                                            <span class="p-1 pb-0 d-block bg-primary-subtle"></span>
                                            <span class="p-1 pb-0 d-block bg-primary-subtle"></span>
                                            <span class="p-1 pb-0 d-block bg-primary-subtle"></span>
                                        </span>
                                    </span>
                                    <span class="flex-shrink-0">
                                        <span class="gap-1 p-1 bg-light d-flex h-100 flex-column">
                                            <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                            <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                            <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                            <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="p-1 bg-light d-block"></span>
                                            <span class="p-1 mt-auto bg-light d-block"></span>
                                        </span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <h5 class="mt-2 text-center fs-sm fw-medium">Two Column</h5>
                    </div>
                    <!-- end col -->
                </div>

                <h6 class="mt-4 mb-1 fs-md">Theme</h6>
                <p class="text-muted fs-sm">Choose your suitable Theme.</p>

                <div class="row">
                    <div class="col-6">
                        <div class="form-check card-radio">
                            <input id="customizer-theme01" name="data-theme" type="radio" value="default"
                                class="form-check-input">
                            <label class="p-0 form-check-label" for="customizer-theme01">
                                <img src="{{ asset('assets/images/custom-theme/light-mode.png') }}" alt=""
                                    class="img-fluid">
                            </label>
                        </div>
                        <h5 class="mt-2 text-center fs-sm fw-medium">Default</h5>
                    </div>
                    <div class="col-6">
                        <div class="form-check card-radio">
                            <input id="customizer-theme02" name="data-theme" type="radio" value="material"
                                class="form-check-input">
                            <label class="p-0 form-check-label" for="customizer-theme02">
                                <img src="{{ asset('assets/images/custom-theme/material.png') }}" alt=""
                                    class="img-fluid">
                            </label>
                        </div>
                        <h5 class="mt-2 text-center fs-sm fw-medium">Material</h5>
                    </div>
                    <div class="col-6">
                        <div class="form-check card-radio">
                            <input id="customizer-theme03" name="data-theme" type="radio" value="creative"
                                class="form-check-input">
                            <label class="p-0 form-check-label" for="customizer-theme03">
                                <img src="{{ asset('assets/images/custom-theme/creative.png') }}" alt=""
                                    class="img-fluid">
                            </label>
                        </div>
                        <h5 class="mt-2 text-center fs-sm fw-medium">Creative</h5>
                    </div>
                    <div class="col-6">
                        <div class="form-check card-radio">
                            <input id="customizer-theme04" name="data-theme" type="radio" value="minimal"
                                class="form-check-input">
                            <label class="p-0 form-check-label" for="customizer-theme04">
                                <img src="{{ asset('assets/images/custom-theme/minimal.png') }}" alt=""
                                    class="img-fluid">
                            </label>
                        </div>
                        <h5 class="mt-2 text-center fs-sm fw-medium">Minimal</h5>
                    </div>
                    <div class="col-6">
                        <div class="form-check card-radio">
                            <input id="customizer-theme05" name="data-theme" type="radio" value="modern"
                                class="form-check-input">
                            <label class="p-0 form-check-label" for="customizer-theme05">
                                <img src="{{ asset('assets/images/custom-theme/modern.png') }}" alt=""
                                    class="img-fluid">
                            </label>
                        </div>
                        <h5 class="mt-2 text-center fs-sm fw-medium">Modern</h5>
                    </div>
                    <!-- end col -->
                    <div class="col-6">
                        <div class="form-check card-radio">
                            <input id="customizer-theme06" name="data-theme" type="radio" value="interaction"
                                class="form-check-input">
                            <label class="p-0 form-check-label" for="customizer-theme06">
                                <img src="{{ asset('assets/images/custom-theme/interaction.png') }}" alt=""
                                    class="img-fluid">
                            </label>
                        </div>
                        <h5 class="mt-2 text-center fs-sm fw-medium">Interaction</h5>
                    </div><!-- end col -->
                </div>

                <h6 class="mt-4 mb-1 fs-md">Color Scheme</h6>
                <p class="text-muted fs-sm">Choose Light or Dark Scheme.</p>

                <div class="colorscheme-cardradio">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-bs-theme"
                                    id="layout-mode-light" value="light">
                                <label class="p-0 bg-transparent form-check-label" for="layout-mode-light">
                                    <img src="{{ asset('assets/images/custom-theme/light-mode.png') }}" alt=""
                                        class="img-fluid">
                                </label>
                            </div>
                            <h5 class="mt-2 text-center fs-sm fw-medium">Light</h5>
                        </div>

                        <div class="col-6">
                            <div class="form-check card-radio dark">
                                <input class="form-check-input" type="radio" name="data-bs-theme"
                                    id="layout-mode-dark" value="dark">
                                <label class="p-0 bg-transparent form-check-label" for="layout-mode-dark">
                                    <img src="{{ asset('assets/images/custom-theme/dark-mode.png') }}" alt=""
                                        class="img-fluid">
                                </label>
                            </div>
                            <h5 class="mt-2 text-center fs-sm fw-medium">Dark</h5>
                        </div>
                    </div>
                </div>

                <div id="layout-width">
                    <h6 class="mt-4 mb-1 fs-md">Layout Width</h6>
                    <p class="text-muted fs-sm">Choose Fluid or Boxed layout.</p>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-layout-width"
                                    id="layout-width-fluid" value="fluid">
                                <label class="p-0 form-check-label avatar-md w-100" for="layout-width-fluid">
                                    <span class="gap-1 d-flex h-100">
                                        <span class="flex-shrink-0">
                                            <span class="gap-1 p-1 bg-light d-flex h-100 flex-column">
                                                <span class="p-1 px-2 mb-2 rounded d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="p-1 bg-light d-block"></span>
                                                <span class="p-1 mt-auto bg-light d-block"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="mt-2 text-center fs-sm fw-medium">Fluid</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-layout-width"
                                    id="layout-width-boxed" value="boxed">
                                <label class="p-0 px-2 form-check-label avatar-md w-100" for="layout-width-boxed">
                                    <span class="gap-1 d-flex h-100 border-start border-end">
                                        <span class="flex-shrink-0">
                                            <span class="gap-1 p-1 bg-light d-flex h-100 flex-column">
                                                <span class="p-1 px-2 mb-2 rounded d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="p-1 bg-light d-block"></span>
                                                <span class="p-1 mt-auto bg-light d-block"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="mt-2 text-center fs-sm fw-medium">Boxed</h5>
                        </div>
                    </div>
                </div>

                <div id="layout-position">
                    <h6 class="mt-4 mb-1 fs-md">Layout Position</h6>
                    <p class="text-muted fs-sm">Choose Fixed or Scrollable Layout Position.</p>

                    <div class="btn-group radio" role="group">
                        <input type="radio" class="btn-check" name="data-layout-position"
                            id="layout-position-fixed" value="fixed">
                        <label class="btn btn-light w-sm" for="layout-position-fixed">Fixed</label>

                        <input type="radio" class="btn-check" name="data-layout-position"
                            id="layout-position-scrollable" value="scrollable">
                        <label class="btn btn-light w-sm ms-0" for="layout-position-scrollable">Scrollable</label>
                    </div>
                </div>

                <h6 class="mt-4 mb-1 fs-md">Topbar Color</h6>
                <p class="text-muted fs-sm">Choose Light or Dark Topbar Color.</p>

                <div class="row">
                    <div class="col-4">
                        <div class="form-check card-radio">
                            <input class="form-check-input" type="radio" name="data-topbar"
                                id="topbar-color-light" value="light">
                            <label class="p-0 form-check-label avatar-md w-100" for="topbar-color-light">
                                <span class="gap-1 d-flex h-100">
                                    <span class="flex-shrink-0">
                                        <span class="gap-1 p-1 bg-light d-flex h-100 flex-column">
                                            <span class="p-1 px-2 mb-2 rounded d-block bg-primary-subtle"></span>
                                            <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                            <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                            <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="p-1 bg-light d-block"></span>
                                            <span class="p-1 mt-auto bg-light d-block"></span>
                                        </span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <h5 class="mt-2 text-center fs-sm fw-medium">Light</h5>
                    </div>
                    <div class="col-4">
                        <div class="form-check card-radio">
                            <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-dark"
                                value="dark">
                            <label class="p-0 form-check-label avatar-md w-100" for="topbar-color-dark">
                                <span class="gap-1 d-flex h-100">
                                    <span class="flex-shrink-0">
                                        <span class="gap-1 p-1 bg-light d-flex h-100 flex-column">
                                            <span class="p-1 px-2 mb-2 rounded d-block bg-primary-subtle"></span>
                                            <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                            <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                            <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="p-1 bg-primary d-block"></span>
                                            <span class="p-1 mt-auto bg-light d-block"></span>
                                        </span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <h5 class="mt-2 text-center fs-sm fw-medium">Dark</h5>
                    </div>
                </div>

                <div id="sidebar-size">
                    <h6 class="mt-4 mb-1 fs-md">Sidebar Size</h6>
                    <p class="text-muted fs-sm">Choose a size of Sidebar.</p>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-size"
                                    id="sidebar-size-default" value="lg">
                                <label class="p-0 form-check-label avatar-md w-100" for="sidebar-size-default">
                                    <span class="gap-1 d-flex h-100">
                                        <span class="flex-shrink-0">
                                            <span class="gap-1 p-1 bg-light d-flex h-100 flex-column">
                                                <span class="p-1 px-2 mb-2 rounded d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="p-1 bg-light d-block"></span>
                                                <span class="p-1 mt-auto bg-light d-block"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="mt-2 text-center fs-sm fw-medium">Default</h5>
                        </div>

                        <div class="col-4">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-size"
                                    id="sidebar-size-compact" value="md">
                                <label class="p-0 form-check-label avatar-md w-100" for="sidebar-size-compact">
                                    <span class="gap-1 d-flex h-100">
                                        <span class="flex-shrink-0">
                                            <span class="gap-1 p-1 bg-light d-flex h-100 flex-column">
                                                <span class="p-1 mb-2 rounded d-block bg-primary-subtle"></span>
                                                <span class="p-1 pb-0 d-block bg-primary-subtle"></span>
                                                <span class="p-1 pb-0 d-block bg-primary-subtle"></span>
                                                <span class="p-1 pb-0 d-block bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="p-1 bg-light d-block"></span>
                                                <span class="p-1 mt-auto bg-light d-block"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="mt-2 text-center fs-sm fw-medium">Compact</h5>
                        </div>

                        <div class="col-4">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-size"
                                    id="sidebar-size-small" value="sm">
                                <label class="p-0 form-check-label avatar-md w-100" for="sidebar-size-small">
                                    <span class="gap-1 d-flex h-100">
                                        <span class="flex-shrink-0">
                                            <span class="gap-1 bg-light d-flex h-100 flex-column">
                                                <span class="p-1 mb-2 d-block bg-primary-subtle"></span>
                                                <span class="p-1 pb-0 d-block bg-primary-subtle"></span>
                                                <span class="p-1 pb-0 d-block bg-primary-subtle"></span>
                                                <span class="p-1 pb-0 d-block bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="p-1 bg-light d-block"></span>
                                                <span class="p-1 mt-auto bg-light d-block"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="mt-2 text-center fs-sm fw-medium">Small (Icon View)</h5>
                        </div>

                        <div class="col-4">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-size"
                                    id="sidebar-size-small-hover" value="sm-hover">
                                <label class="p-0 form-check-label avatar-md w-100" for="sidebar-size-small-hover">
                                    <span class="gap-1 d-flex h-100">
                                        <span class="flex-shrink-0">
                                            <span class="gap-1 bg-light d-flex h-100 flex-column">
                                                <span class="p-1 mb-2 d-block bg-primary-subtle"></span>
                                                <span class="p-1 pb-0 d-block bg-primary-subtle"></span>
                                                <span class="p-1 pb-0 d-block bg-primary-subtle"></span>
                                                <span class="p-1 pb-0 d-block bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="p-1 bg-light d-block"></span>
                                                <span class="p-1 mt-auto bg-light d-block"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="mt-2 text-center fs-sm fw-medium">Small Hover View</h5>
                        </div>
                    </div>
                </div>

                <div id="sidebar-view">
                    <h6 class="mt-4 mb-1 fs-md">Sidebar View</h6>
                    <p class="text-muted fs-sm">Choose Default or Detached Sidebar view.</p>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-layout-style"
                                    id="sidebar-view-default" value="default">
                                <label class="p-0 form-check-label avatar-md w-100" for="sidebar-view-default">
                                    <span class="gap-1 d-flex h-100">
                                        <span class="flex-shrink-0">
                                            <span class="gap-1 p-1 bg-light d-flex h-100 flex-column">
                                                <span class="p-1 px-2 mb-2 rounded d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="p-1 bg-light d-block"></span>
                                                <span class="p-1 mt-auto bg-light d-block"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="mt-2 text-center fs-sm fw-medium">Default</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-layout-style"
                                    id="sidebar-view-detached" value="detached">
                                <label class="p-0 form-check-label avatar-md w-100" for="sidebar-view-detached">
                                    <span class="d-flex h-100 flex-column">
                                        <span class="gap-1 p-1 px-2 bg-light d-flex align-items-center">
                                            <span class="p-1 rounded d-block bg-primary-subtle me-1"></span>
                                            <span class="p-1 px-2 pb-0 d-block bg-primary-subtle ms-auto"></span>
                                            <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                        </span>
                                        <span class="gap-1 p-1 px-2 d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="gap-1 p-1 bg-light d-flex h-100 flex-column">
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                        </span>
                                        <span class="p-1 px-2 mt-auto bg-light d-block"></span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="mt-2 text-center fs-sm fw-medium">Detached</h5>
                        </div>
                    </div>
                </div>
                <div id="sidebar-color">
                    <h6 class="mt-4 mb-1 fs-md">Sidebar Color</h6>
                    <p class="text-muted fs-sm">Choose a color of Sidebar.</p>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check sidebar-setting card-radio" data-bs-toggle="collapse"
                                data-bs-target="#collapseBgGradient.show">
                                <input class="form-check-input" type="radio" name="data-sidebar"
                                    id="sidebar-color-light" value="light">
                                <label class="p-0 form-check-label avatar-md w-100" for="sidebar-color-light">
                                    <span class="gap-1 d-flex h-100">
                                        <span class="flex-shrink-0">
                                            <span class="gap-1 p-1 bg-white border-end d-flex h-100 flex-column">
                                                <span class="p-1 px-2 mb-2 rounded d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="p-1 bg-light d-block"></span>
                                                <span class="p-1 mt-auto bg-light d-block"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="mt-2 text-center fs-sm fw-medium">Light</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check sidebar-setting card-radio" data-bs-toggle="collapse"
                                data-bs-target="#collapseBgGradient.show">
                                <input class="form-check-input" type="radio" name="data-sidebar"
                                    id="sidebar-color-dark" value="dark">
                                <label class="p-0 form-check-label avatar-md w-100" for="sidebar-color-dark">
                                    <span class="gap-1 d-flex h-100">
                                        <span class="flex-shrink-0">
                                            <span class="gap-1 p-1 bg-primary d-flex h-100 flex-column">
                                                <span class="p-1 px-2 mb-2 rounded d-block bg-soft-light"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-soft-light"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-soft-light"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-soft-light"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="p-1 bg-light d-block"></span>
                                                <span class="p-1 mt-auto bg-light d-block"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="mt-2 text-center fs-sm fw-medium">Dark</h5>
                        </div>
                        <div class="col-4">
                            <button class="p-0 overflow-hidden border btn btn-link avatar-md w-100 collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient"
                                aria-expanded="false" aria-controls="collapseBgGradient">
                                <span class="gap-1 d-flex h-100">
                                    <span class="flex-shrink-0">
                                        <span class="gap-1 p-1 bg-vertical-gradient d-flex h-100 flex-column">
                                            <span class="p-1 px-2 mb-2 rounded d-block bg-soft-light"></span>
                                            <span class="p-1 px-2 pb-0 d-block bg-soft-light"></span>
                                            <span class="p-1 px-2 pb-0 d-block bg-soft-light"></span>
                                            <span class="p-1 px-2 pb-0 d-block bg-soft-light"></span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="p-1 bg-light d-block"></span>
                                            <span class="p-1 mt-auto bg-light d-block"></span>
                                        </span>
                                    </span>
                                </span>
                            </button>
                            <h5 class="mt-2 text-center fs-sm fw-medium">Gradient</h5>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="collapse" id="collapseBgGradient">
                        <div class="flex-wrap gap-2 p-2 px-3 rounded d-flex img-switch bg-light">

                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar"
                                    id="sidebar-color-gradient" value="gradient">
                                <label class="p-0 form-check-label avatar-xs rounded-circle"
                                    for="sidebar-color-gradient">
                                    <span class="avatar-title rounded-circle bg-vertical-gradient"></span>
                                </label>
                            </div>
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar"
                                    id="sidebar-color-gradient-2" value="gradient-2">
                                <label class="p-0 form-check-label avatar-xs rounded-circle"
                                    for="sidebar-color-gradient-2">
                                    <span class="avatar-title rounded-circle bg-vertical-gradient-2"></span>
                                </label>
                            </div>
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar"
                                    id="sidebar-color-gradient-3" value="gradient-3">
                                <label class="p-0 form-check-label avatar-xs rounded-circle"
                                    for="sidebar-color-gradient-3">
                                    <span class="avatar-title rounded-circle bg-vertical-gradient-3"></span>
                                </label>
                            </div>
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar"
                                    id="sidebar-color-gradient-4" value="gradient-4">
                                <label class="p-0 form-check-label avatar-xs rounded-circle"
                                    for="sidebar-color-gradient-4">
                                    <span class="avatar-title rounded-circle bg-vertical-gradient-4"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="sidebar-img">
                    <h6 class="mt-4 fw-semibold fs-base">Sidebar Images</h6>
                    <p class="text-muted fs-sm">Choose a image of Sidebar.</p>

                    <div class="flex-wrap gap-2 d-flex img-switch">
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-sidebar-image"
                                id="sidebarimg-none" value="none">
                            <label class="h-auto p-0 form-check-label avatar-sm" for="sidebarimg-none">
                                <span
                                    class="w-auto avatar-md bg-light d-flex align-items-center justify-content-center">
                                    <i class="ri-close-fill fs-3xl"></i>
                                </span>
                            </label>
                        </div>

                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-sidebar-image"
                                id="sidebarimg-01" value="img-1">
                            <label class="h-auto p-0 form-check-label avatar-sm" for="sidebarimg-01">
                                <img src="{{ asset('assets/images/sidebar/img-sm-1.jpg') }}" alt=""
                                    class="object-cover w-auto avatar-md">
                            </label>
                        </div>

                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-sidebar-image"
                                id="sidebarimg-02" value="img-2">
                            <label class="h-auto p-0 form-check-label avatar-sm" for="sidebarimg-02">
                                <img src="{{ asset('assets/images/sidebar/img-sm-2.jpg') }}" alt=""
                                    class="object-cover w-auto avatar-md">
                            </label>
                        </div>
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-sidebar-image"
                                id="sidebarimg-03" value="img-3">
                            <label class="h-auto p-0 form-check-label avatar-sm" for="sidebarimg-03">
                                <img src="{{ asset('assets/images/sidebar/img-sm-3.jpg') }}" alt=""
                                    class="object-cover w-auto avatar-md">
                            </label>
                        </div>
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-sidebar-image"
                                id="sidebarimg-04" value="img-4">
                            <label class="h-auto p-0 form-check-label avatar-sm" for="sidebarimg-04">
                                <img src="{{ asset('assets/images/sidebar/img-sm-4.jpg') }}" alt=""
                                    class="object-cover w-auto avatar-md">
                            </label>
                        </div>
                    </div>
                </div>

                <div id="preloader-menu">
                    <h6 class="mt-4 fw-semibold fs-base">Preloader</h6>
                    <p class="text-muted fs-sm">Choose a preloader.</p>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-preloader"
                                    id="preloader-view-custom" value="enable">
                                <label class="p-0 form-check-label avatar-md w-100" for="preloader-view-custom">
                                    <span class="gap-1 d-flex h-100">
                                        <span class="flex-shrink-0">
                                            <span class="gap-1 p-1 bg-light d-flex h-100 flex-column">
                                                <span class="p-1 px-2 mb-2 rounded d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="p-1 bg-light d-block"></span>
                                                <span class="p-1 mt-auto bg-light d-block"></span>
                                            </span>
                                        </span>
                                    </span>
                                    <!-- <div id="preloader"> -->
                                    <span class="d-flex align-items-center justify-content-center">
                                        <span class="m-auto spinner-border text-primary avatar-xxs" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </span>
                                    </span>
                                    <!-- </div> -->
                                </label>
                            </div>
                            <h5 class="mt-2 text-center fs-sm fw-medium">Enable</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-preloader"
                                    id="preloader-view-none" value="disable">
                                <label class="p-0 form-check-label avatar-md w-100" for="preloader-view-none">
                                    <span class="gap-1 d-flex h-100">
                                        <span class="flex-shrink-0">
                                            <span class="gap-1 p-1 bg-light d-flex h-100 flex-column">
                                                <span class="p-1 px-2 mb-2 rounded d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="p-1 bg-light d-block"></span>
                                                <span class="p-1 mt-auto bg-light d-block"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="mt-2 text-center fs-sm fw-medium">Disable</h5>
                        </div>
                    </div>

                </div><!-- end preloader-menu -->
            </div>
        </div>

    </div>
    <div class="p-3 text-center offcanvas-footer border-top">
        <div class="row">
            <div class="col-12">
                <button type="button" class="btn btn-light w-100" id="reset-layout">Reset</button>
            </div>
        </div>
    </div>
</div>
