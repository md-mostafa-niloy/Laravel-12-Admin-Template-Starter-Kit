<div class="container-fluid">

    <div id="two-column-menu">
    </div>
    <ul class="navbar-nav" id="navbar-nav">

        <li class="menu-title"><span data-key="t-menu">Menu</span></li>
        <li class="nav-item">
            <a href="{{ route('dashboard') }}"
               class="nav-link menu-link @if (Route::current()->getName() == 'dashboard') active @endif">
                <i class="ph-gauge"></i>
                <span data-key="t-dashboards">
                    Dashboards
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#sidebarUserManagement"
               class="nav-link menu-link {{ in_array(Route::current()->getName(), ['users.index', 'roles.index', 'roles.create', 'roles.edit']) ? 'active' : 'collapsed' }}"
               data-bs-toggle="collapse" role="button"
               aria-expanded="{{ in_array(Route::current()->getName(), ['users.index', 'roles.index', 'roles.create', 'roles.edit']) ? 'true' : 'false' }}"
               aria-controls="sidebarUserManagement">
                <i class="ph-user-gear"></i>
                <span data-key="t-company-information">User Management</span>
            </a>
            <div
                class="menu-dropdown collapse {{ in_array(Route::current()->getName(), ['users.index', 'roles.index', 'roles.create', 'roles.edit']) ? 'show' : '' }}"
                id="sidebarUserManagement" style="">
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                        <a href="{{ route('users.index') }}"
                           class="nav-link {{ Route::current()->getName() == 'users.index' ? 'active' : '' }}"
                           data-key="t-users">
                            Users
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('roles.index') }}"
                           class="nav-link {{ in_array(Route::current()->getName(), ['roles.index', 'roles.create', 'roles.edit']) ? 'active' : '' }}"
                           data-key="t-roles">
                            Roles
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        {{--        <li class="nav-item">--}}
        {{--            <a href="apps-file-manager.html" class="nav-link menu-link"> <i class="ph-folder-open"></i> <span--}}
        {{--                    data-key="t-file-manager">File Manager</span> </a>--}}
        {{--        </li>--}}
    </ul>
</div>
