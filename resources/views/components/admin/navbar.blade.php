<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="{{ route('admin.home') }}">
            <h4 style="color: #fff; font-size: 2rem">FASO-CLEAN</h4>
        </a>
        <a class="navbar-brand brand-logo-mini" href="{{ route('admin.home') }}">
            <h4 style="color: #fff; font-size: 2rem">GT</h4>
        </a>
    </div>

    <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
        </button>
        <div class="search-field d-none d-xl-block">
           
        </div>

        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                    <div class="nav-profile-img">
                        <img src="{{ asset('dashboard/assets/images/faces/face28.png') }}" alt="image">
                    </div>
                    <div class="nav-profile-text">
                        <p class="mb-1 text-black">{{ Auth::user()->name }}</p>
                    </div>
                </a>
                <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="profileDropdown" data-x-placement="bottom-end">
                    <div class="p-3 text-center bg-primary">
                        <img class="img-avatar img-avatar48 img-avatar-thumb" src="{{ asset('dashboard/assets/images/faces/face28.png') }}" alt="">
                    </div>

                    <div class="p-2">
                        <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                            <span>Profil</span>
                        </a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            <span>Se déconnecter</span>
                            <i class="mdi mdi-logout ml-1"></i>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </li>
        </ul>

        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>