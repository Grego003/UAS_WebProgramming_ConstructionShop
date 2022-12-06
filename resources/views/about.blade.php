@extends('layouts.main')

@section('content')
<div class="wrapper">
@include('layouts.partials.page-header', ['page' => 'About'])

<!-- About Start -->
<div class="about wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6">
                <div class="about-img">
                    <img src="{{ asset('images/construction_assets/Kaca/Kaca Whiteboard PT10mm.jpeg') }}" alt="Nusa Karya Utama">
                </div>
            </div>
            <div class="col-lg-7 col-md-6">
                <div class="section-header text-left">
                    <p>Welcome to Nusa Karya Utama Website</p>
                    <h2>40 Years Experience</h2>
                </div>
                <div class="about-text">
                    <p>
                        Perusahaan konstruksi terbaik sejagat raya milik Lord Paduka Bapak Renfred
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <a class="btn" href="whatsapp://send?text=Halo!&phone=+6289676761828">Contact Us<br><b>WhatsApp</b></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
</div>
@endsection
