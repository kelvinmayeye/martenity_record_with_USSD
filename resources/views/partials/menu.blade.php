<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md navbar-backgoundcolor">

    <!-- Sidebar mobile toggler -->
    <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-left8"></i>
        </a>
        Navigation
        <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
        </a>
    </div>
    <!-- /sidebar mobile toggler -->

    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="card-body">
                <div class="media">
                    <div class="mr-3">
                        <a href=""><img src="{{ asset('global_assets/images/favicon.png') }}" width="48"
                                height="48" class="rounded-circle" alt="photo"></a>
                    </div>

                    <div class="media-body">
                        <div class="media-title font-weight-semibold">username</div>
                        <div class="font-size-xs opacity-50">
                            <i class="icon-user font-size-sm"></i> &nbsp;administrator
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->

        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                <li class="nav-item">
                    <a href="{{ url('home') }}" class="nav-link">
                        <i class="icon-home4"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                {{-- Parents --}}
                <li
                    class="nav-item nav-item-submenu {{ in_array(Route::currentRouteName(), ['add.parent', 'view.parents']) ? 'nav-item-expanded nav-item-open' : '' }} ">
                    <a href="#" class="nav-link"><i class="icon-users"></i> <span> Parents</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Manage Academics">
                        <li class="nav-item"><a href="" class="nav-link">Add Parents</a></li>
                        <li class="nav-item"><a href="" class="nav-link">View Parents</a></li>
                    </ul>
                </li>

                {{-- Students --}}
                <li
                    class="nav-item nav-item-submenu {{ in_array(Route::currentRouteName(), ['add.student', 'view.student']) ? 'nav-item-expanded nav-item-open' : '' }} ">
                    <a href="#" class="nav-link"><i class="icon-users"></i> <span> Students</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Manage Academics">
                        <li class="nav-item"><a href="" class="nav-link">View Students</a>
                        </li>
                        <li class="nav-item"><a href="" class="nav-link">Grade Students</a>
                        </li>
                    </ul>
                </li>

                {{-- Installment --}}
                <li
                    class="nav-item nav-item-submenu {{ in_array(Route::currentRouteName(), ['add.installments', 'view.installments']) ? 'nav-item-expanded nav-item-open' : '' }} ">
                    <a href="#" class="nav-link"><i class="icon-drawer"></i> <span> Installments</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Manage Academics">
                        <li class="nav-item"><a href="" class="nav-link">Add
                                Installments</a></li>
                        <li class="nav-item"><a href="" class="nav-link">All Payments</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Messeges</a></li>
                    </ul>
                </li>

                {{-- Transport --}}
                <li
                    class="nav-item nav-item-submenu {{ in_array(Route::currentRouteName(), ['add.installments', 'view.installments']) ? 'nav-item-expanded nav-item-open' : '' }} ">
                    <a href="#" class="nav-link"><i class="icon-drawer"></i> <span> Transport</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Manage Academics">
                        <li class="nav-item"><a href="" class="nav-link">Add
                                Student Rate</a></li>

                    </ul>
                </li>
                    <li class="nav-item">
                        <a href=""
                            class="nav-link {{ in_array(Route::currentRouteName(), ['home', 'item']) ? 'active' : '' }}"><i
                                class="icon-user"></i> <span>Users Management</span></a>
                    </li>
            </ul>
        </div>
    </div>
</div>
