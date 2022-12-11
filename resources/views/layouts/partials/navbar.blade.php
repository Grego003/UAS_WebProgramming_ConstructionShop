<div class="wrapper">
    <!-- Top Bar Start -->
    <div class="top-bar d-none d-xxl-block d-lg-block">
        <div class="container-fluid ">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12">
                    <div class="logo">
                        <a href="#">
                            <img src="{{ asset('images/logo_nusa_karya.png') }}">
                            <h1>Nusa Karya Utama</h1>
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 d-none d-lg-block">
                    <div class="row">
                        <div class="col-4">
                            <div class="top-bar-item">
                                <div class="top-bar-icon">
                                    <i class="flaticon-calendar"></i>
                                </div>
                                <div class="top-bar-text">
                                    <h3>Opening Hour</h3>
                                    <p>Mon - Fri, 08:30 - 17:00</p>
                                    <p>Sat, 08:30 - 15:00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="top-bar-item">
                                <div class="top-bar-icon">
                                    <i class="flaticon-call"></i>
                                </div>
                                <div class="top-bar-text">
                                    <h3>Call Us</h3>
                                    <p>+62 89676761828</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="top-bar-item">
                                <div class="top-bar-icon">
                                    <i class="flaticon-send-mail"></i>
                                </div>
                                <div class="top-bar-text">
                                    <h3>Email Us</h3>
                                    <p>leeman@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Bar End -->

    {{-- navbar md --}}
    <div class="d-xxl-none d-lg-none text-white fixed-top">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
                <div class="container-fluid">
                  <a class="navbar-brand" href="/dashboard"><img height="50px" width="50px" src="{{ asset('images/logo_nusa_karya.png') }}"><small class="text-warning">Nusa Karya Utama</small></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" aria-current="page" href={{ url('dashboard') }}>Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href={{ url('about') }}>About</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href={{ url('stores') }}>Catalog</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
        </div>
    {{-- end navbar md --}}

    <!-- Nav Bar Start -->
    <div class="nav-bar">
        {{--  d-none d-xxl-block d-lg-block  --}}
        <div class="container-fluid d-none d-xxl-block d-lg-block">
            <nav class="navbar navbar-expand-xl bg-dark navbar-dark">
                <a href="/dashboard" class="navbar-brand">Nusa Karya Utama</a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
                    <div class="navbar-nav mr-auto">
                        <a href={{ url('dashboard') }} class="nav-item nav-link">Home</a>
                        <a href={{ url('about') }} class="nav-item nav-link">About</a>
                        <a href={{ url('stores') }} class="nav-item nav-link">Catalog</a>
                        <div class="nav-catalog-items d-flex flex-row mx-3 ps-2">
                            <a href="{{ url('products/1') }}" class="nav-item nav-link">Aluminium</a>
                            <a href="{{ url('products/2') }}" class="nav-item nav-link">Kaca</a>
                            <a href="{{ url('products/3') }}" class="nav-item nav-link">Stainless</a>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ url('products/4') }}"
                                    id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Aksesoris
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="{{ url('products/sub/7') }}">Kunci</a>
                                    <a class="dropdown-item" href="{{ url('products/sub/8') }}">Plat</a>
                                    <a class="dropdown-item" href="{{ url('products/sub/9') }}">Siku</a>
                                    <a class="dropdown-item" href="{{ url('products/sub/10') }}">Bracket</a>
                                </div>
                            </div>
                        </div>
                        @can('only_admin')
                            <a href={{ route('stores.create') }}
                                class="nav-item nav-link btn btn-danger border-0 text-light rounded mx-3">Admin</a>
                        @endcan
                    </div>

                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-1 sm:block">
                            @auth
                                <form action={{ url('logout') }} method="POST" class="ms-auto">
                                    @csrf
                                    <button type="submit" class="btn btn-light text-dark rounded border-0">Logout</button>
                                </form>
                            @endauth
                        </div>
                    @endif
                </div>
            </nav>
        </div>
    </div>
    <!-- Nav Bar End -->
