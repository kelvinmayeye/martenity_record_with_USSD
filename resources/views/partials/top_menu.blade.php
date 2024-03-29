<div class="navbar navbar-expand-md navbar-dark" style="background-color: #2c9c5b;">
    <div class="mt-2 mr-5">
        <a href="" class="d-inline-block">
            <h4 class="text-bold text-white">MCHS</h4>
        </a>
    </div>
    {{--  <div class="navbar-brand">
        <a href="index.html" class="d-inline-block">
            <img src="{{ asset('global_assets/images/logo_light.png') }}" alt="">
        </a>
    </div> --}}

    <div class="d-md-none">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-tree5"></i>
        </button>
        <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
            <i class="icon-paragraph-justify3"></i>
        </button>
    </div>

    <div class="collapse navbar-collapse" id="navbar-mobile">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                    <i class="icon-paragraph-justify3"></i>
                </a>
            </li>
        </ul>

        <span class="navbar-text ml-md-3 mr-md-auto"></span>

        <ul class="navbar-nav">

            <li class="nav-item dropdown dropdown-user">
                <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                    <img style="width: 38px; height:38px;" src="{{ asset('global_assets/images/user.png') }}"
                        class="rounded-circle" alt="photo">
                    <span>{{ auth()->user()->first_name }}</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <a href="" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
                    <div class="dropdown-divider"></div>

                    <form action="{{ url('logout') }}" method="POST" style="">
                        @csrf
                        <button type="submit" class="dropdown-item"><i class="icon-switch2"></i> Logout</button>
                    </form>
                </div>
            </li>
        </ul>
    </div>
</div>
