@extends('layouts.main')

@section('content')
    <div class="wrapper">
        <!-- Carousel Start -->
        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></li>
                <li data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></li>
                <li data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/construction_assets/Kaca/Kaca Canopi PT8mm.jpeg') }}" alt="Carousel Image">
                    <div class="carousel-caption">
                        <p class="animated fadeInRight">40 tahun pengalaman di</p>
                        <h1 class="animated fadeInLeft">Bidang Konstruksi</h1>
                        <a class="btn animated fadeInUp" href="{{ url('stores') }}">Produk Kami</a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('images/construction_assets/Kaca/ShowerBoxKacaPT10mmRekSledingAtas.jpeg') }}"
                        alt="Carousel Image">
                    <div class="carousel-caption">
                        <p class="animated fadeInRight">Menyediakan banyak ragam alat konstruksi</p>
                        <h1 class="animated fadeInLeft">Kami bersedia melayani anda</h1>
                        <a class="btn animated fadeInUp" href="{{ url('stores') }}">Produk Kami</a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('images/construction_assets/Kaca/Partisi kaca PT12mm.jpeg') }}" alt="Carousel Image">
                    <div class="carousel-caption">
                        <p class="animated fadeInRight">Kami dipercaya oleh banyak sekali pelanggan</p>
                        <h1 class="animated fadeInLeft">Tidak perlu ragu. Langsung saja kontak kami</h1>
                        <a class="btn animated fadeInUp" href="{{ url('stores') }}">Produk Kami</a>
                    </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#carousel" role="button" data-bs-target="#carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-bs-target="#carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
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
                                <h3 class="text-center">Aluminium</h3>
                                <p class="text-center">Lorem ipsum dolor sit amet elit. Phasus nec pretim ornare velit non
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="feature-item">
                            <div class="feature-text">
                                <h3 class="text-center">Kaca</h3>
                                <p class="text-center">Lorem ipsum dolor sit amet elit. Phasus nec pretim ornare velit non
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="feature-item">
                            <div class="feature-text">
                                <h3 class="text-center">Stainless</h3>
                                <p class="text-center">Lorem ipsum dolor sit amet elit. Phasus nec pretim ornare velit non
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End-->
        <div class="review">
            <h2 class="text-center">Testimonials</h2>
            <div class="row justify-content-around">
                @foreach ($reviews as $review)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="image d-flex align-items-center mb-2">
                                    <img class="img-fluid rounded-circle" width="100px" height="100px"
                                        src="{{ asset('images/profil-default.png') }}" alt="" srcset="">
                                    {{ asset('images/profil-default.png') }}
                                    <h5 class="card-title ms-2">{{ $review->name }}</h5>
                                </div>
                                <p>{{ $review->comment }}</p>
                                <div class="d-flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- <div class="review">
    <h2 class="text-center">Testimonials</h2>
    <div class="overflow-auto d-flex justify-content-around">
        @foreach ($reviews as $review)
        <div class="test">
            <div class="card">
                <div class="card-body">
                    <div class="image d-flex align-items-center mb-2">
                        <img class="img-fluid rounded-circle" width="100px" height="100px" src="{{asset('images/construction_assets/profil-default.png')}}" alt="" srcset="">
                        <h5 class="card-title ms-2">{{$review->name}}</h5>
                    </div>
                  <p>{{$review->comment}}</p>
                  <div class="d-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                  </div>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>
<!-- Feature End-->
<div class="review">
    <h2 class="text-center">Testimonials</h2>
    <div class="overflow-auto d-flex justify-content-around">
        @foreach ($reviews as $review)
        <div class="test">
            <div class="card">
                <div class="card-body">
                    <div class="image d-flex align-items-center mb-2">
                        <img class="img-fluid rounded-circle" width="100px" height="100px" src="{{asset('images/construction_assets/profil-default.png')}}" alt="" srcset="">
                        <h5 class="card-title ms-2">{{$review->name}}</h5>
                    </div>
                  <p>{{$review->comment}}</p>
                  <div class="d-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                  </div>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>
</div><!-- /.container -->

@endsection
