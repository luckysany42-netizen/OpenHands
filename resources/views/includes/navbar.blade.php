<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
</div>
<!-- Spinner End -->

<!-- Navbar Start -->
<div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">

    <!-- Top Bar -->
    <div class="top-bar text-white-50 row gx-0 align-items-center d-none d-lg-flex">
        <div class="col-lg-6 px-5 text-start">
            <small><i class="fa fa-map-marker-alt me-2"></i>Jl. Manukan Kulon, Surabaya, Indonesia</small>
            <small class="ms-4"><i class="fa fa-envelope me-2"></i>openhands1718@gmail.com</small>
        </div>

        <div class="col-lg-6 px-5 text-end">
            <small>Ikuti Kami:</small>
            <a class="text-white-50 ms-3" href=""><i class="fab fa-facebook-f"></i></a>
            <a class="text-white-50 ms-3" href=""><i class="fab fa-twitter"></i></a>
            <a class="text-white-50 ms-3" href=""><i class="fab fa-linkedin-in"></i></a>
            <a class="text-white-50 ms-3" href=""><i class="fab fa-instagram"></i></a>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        
        <!-- Brand -->
        <a href="{{ route('home') }}" class="navbar-brand ms-4 ms-lg-0 d-flex align-items-center">
            <img src="{{ asset('assets/img/logo.png') }}" alt="OpenHands logo" class="me-2" style="height:40px; width:auto;">
            <h1 class="fw-bold text-primary m-0">Open<span class="text-white">Hands</span></h1>
        </a>

        <!-- Toggle -->
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbarCollapse">

            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ route('home') }}" 
                   class="nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a>

                <a href="{{ route('about') }}" 
                   class="nav-item nav-link {{ request()->routeIs('about') ? 'active' : '' }}">Tentang</a>

                <a href="{{ route('causes') }}" 
                   class="nav-item nav-link {{ request()->routeIs('causes') ? 'active' : '' }}">Program</a>

                <!-- Dropdown Pages -->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle 
                        {{ (request()->routeIs('service') || request()->routeIs('donate') || request()->routeIs('donate.history')) ? 'active' : '' }}" 
                        data-bs-toggle="dropdown">
                        Menu
                    </a>

                    <div class="dropdown-menu m-0">
                        <a href="{{ route('donate') }}" 
                           class="dropdown-item {{ request()->routeIs('donate') ? 'active' : '' }}">Donasi</a>

                        <!-- Our Team dihapus di sini -->

                        <a href="{{ route('donate.history') }}" 
                           class="dropdown-item {{ request()->routeIs('donate.history') ? 'active' : '' }}">
                          Riwayat Donasi
                        </a>
                    </div>
                </div>

                <a href="{{ route('contact') }}" 
                   class="nav-item nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Hubungi</a>

                <!-- Auth Buttons -->
                <div class="d-none d-lg-flex ms-2">

                    @guest
                    <a class="login-btn" href="{{ route('login') }}">
                        Login
                        <div class="login-icon ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                    @endguest

                    @auth
                        <!-- User Dropdown -->
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle text-white d-flex align-items-center" data-bs-toggle="dropdown">

                                @if(Auth::user()->photo)
                                    <img src="{{ asset('profile_photos/' . Auth::user()->photo) }}" 
                                        style="height:35px; width:35px; border-radius:50%; object-fit:cover;">
                                @else
                                    <div style="
                                        height:35px; width:35px; border-radius:50%;
                                        background:#FF7A00; color:white; display:flex;
                                        align-items:center; justify-content:center;
                                        font-weight:bold; text-transform:uppercase;">
                                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                                    </div>
                                @endif

                                <span class="ms-2">{{ Auth::user()->name }}</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end m-0">
                                <a class="dropdown-item" href="{{ route('profile') }}">
                                    <i class="fa fa-user me-2"></i> Profil
                                </a>

                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-danger">
                                        <i class="fa fa-sign-out-alt me-2"></i> Logout
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endauth

                </div>

            </div>

        </div>

    </nav>
</div>
<!-- Navbar End -->
