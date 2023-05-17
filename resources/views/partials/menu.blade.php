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

                {{-- Maternity Patient --}}
                <li
                    class="nav-item nav-item-submenu {{ in_array(Route::currentRouteName(), ['add.parent', 'view.parents']) ? 'nav-item-expanded nav-item-open' : '' }} ">
                    <a href="#" class="nav-link"><i class="icon-users"></i> <span> Patients</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="">
                        <li class="nav-item"><a href="{{ url('patient/register') }}" class="nav-link">Add Patient</a>
                        </li>
                        <li class="nav-item"><a href="{{ url('all/patients') }}" class="nav-link">All Patient</a></li>
                    </ul>
                </li>

                {{-- Maternity pregnant --}}
                <li
                    class="nav-item nav-item-submenu {{ in_array(Route::currentRouteName(), ['add.student', 'view.student']) ? 'nav-item-expanded nav-item-open' : '' }} ">
                    <a href="#" class="nav-link"><i class="icon-users"></i> <span> Maternity Pregnant</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="">
                        <li class="nav-item"><a href="{{ url('maternitypregnant') }}" class="nav-link">All maternity
                                pregnant</a>
                        </li>
                    </ul>
                </li>

                {{-- Complication --}}
                @if(auth()->user()->specialist)
                <li
                    class="nav-item nav-item-submenu {{ in_array(Route::currentRouteName(), ['add.installments', 'view.installments']) ? 'nav-item-expanded nav-item-open' : '' }} ">
                    <a href="#" class="nav-link"><i class="icon-drawer"></i> <span>Complications</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Manage Complications">
                        <li class="nav-item">
                            <a href="{{ url('add/complication') }}" class="nav-link">Add
                                Complication</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('all/complication') }}" class="nav-link">
                                All Complication</a>
                        </li>
                    </ul>
                </li>
                @endif
                <li class="nav-item">
                    <a href="{{ url('reports') }}"
                        class="nav-link {{ in_array(Route::currentRouteName(), ['item']) ? 'active' : '' }}"><i
                            class="icon-user"></i> <span>Reported issues</span></a>
                </li>

                @if(auth()->user()->role == 1)
                {{-- User management --}}
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-drawer"></i> <span>Users Managements</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Manage Complications">
                        <li class="nav-item">
                            <a href="{{ url('all/users') }}" class="nav-link">All Users</a>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link">
                                Add Specialization</a>
                        </li>
                    </ul>
                </li>
                @endif
            </ul>
        </div>
    </div>
</div>
