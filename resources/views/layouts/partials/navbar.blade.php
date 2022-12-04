<div class="wrapper">
    <!-- Top Bar Start -->
    <div class="top-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12">
                    <div class="logo">
                        <a href="#">
                            <img src="{{ asset('images/logo_nusa_karya.png')}}">
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
                                    <p>Mon - Sun, 06:00 - 17:00</p>
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

    <!-- Nav Bar Start -->
    <div class="nav-bar">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                <a href="#" class="navbar-brand">MENU</a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
                    <div class="navbar-nav mr-auto">
                        <a href={{ url('dashboard') }} class="nav-item nav-link active" aria-current="page">Home</a>
                        <a href={{ url('about') }} class="nav-item nav-link">About</a>
                        <a href={{ url('products') }} class="nav-item nav-link">Catalog</a>
                        <a href="#" class="nav-item nav-link">Aluminium</a>
                        <a href="#" class="nav-item nav-link">Kaca</a>
                        <a href="#" class="nav-item nav-link">Stainless</a>
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Aksesoris
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                              <a class="dropdown-item" href="#">Kunci</a>
                              <a class="dropdown-item" href="#">Plat</a>
                              <a class="dropdown-item" href="#">Siku</a>
                              <a class="dropdown-item" href="#">Bracket</a>
                            </div>
                          </div>
                    </div>

                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-1 sm:block">
                            @auth
                                <form action="logout" method="POST" class="ms-auto">
                                    @csrf
                                    <button type="submit" class="btn btn-warning">Logout</button>
                                </form>
                            @else
                                <a href="{{ route('login') }}"
                                    class="text-sm btn btn-light text-dark text-decoration-none rounded">Log in</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="text-sm btn btn-light text-dark text-decoration-none rounded">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </nav>
        </div>
    </div>
    <!-- Nav Bar End -->
