@extends('layouts.main')

@section('content')
<div class="wrapper">
    <!-- Carousel Start -->
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
        </ol>
        <!-- Carouselnya masih rusak helpp -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/construction_assets/Kaca/ShowerBoxKacaPT10mmRekSledingAtas.jpeg') }}" alt="Carousel Image">
                <div class="carousel-caption">
                    <p class="animated fadeInRight">40 tahun pengalaman</p>
                    <h1 class="animated fadeInLeft">Bidang Konstruksi</h1>
                    <a class="btn animated fadeInUp" href="#">Get A Quote</a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('images/construction_assets/Kaca/Kaca Canopi PT8mm.jpeg') }}" alt="Carousel Image">
                <div class="carousel-caption">
                    <p class="animated fadeInRight">Menyediakan banyak ragam alat konstruksi</p>
                    <h1 class="animated fadeInLeft">Kami bersedia melayani anda</h1>
                    <a class="btn animated fadeInUp" href="#">Get A Quote</a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="img/carousel-3.jpg" alt="Carousel Image">
                <div class="carousel-caption">
                    <p class="animated fadeInRight">Kami dipercaya oleh banyak sekali pelanggan</p>
                    <h1 class="animated fadeInLeft">Tidak perlu ragu. Langsung saja kontak kami</h1>
                    <a class="btn animated fadeInUp" href="#">Get A Quote</a>
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Carousel End -->

<!-- Feature Start-->
<div class="feature wow fadeInUp" data-wow-delay="0.1s">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-12">
                <div class="feature-item">
                    <div class="feature-text">
                        <h3>Aluminium</h3>
                        <p>Lorem ipsum dolor sit amet elit. Phasus nec pretim ornare velit non</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="feature-item">
                    <div class="feature-text">
                        <h3>Kaca</h3>
                        <p>Lorem ipsum dolor sit amet elit. Phasus nec pretim ornare velit non</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="feature-item">
                    <div class="feature-text">
                        <h3>Stainless</h3>
                        <p>Lorem ipsum dolor sit amet elit. Phasus nec pretim ornare velit non</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End-->

</div><!-- /.container -->

@endsection
