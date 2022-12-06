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
<<<<<<< HEAD

        <!-- FAQs Start -->
        <div class="faqs">
            <div class="container">
                <div class="section-header text-center">
                    <p>Frequently Asked Question</p>
                    <h2>Pertanyaan</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div id="accordion-1">
                            <div class="card wow fadeInLeft" data-wow-delay="0.1s">
                                <div class="card-header">
                                    <a class="card-link collapsed" data-bs-toggle="collapse" href="#collapseOne">
                                        Bagaimana cara memesan barang di website ini?
                                    </a>
                                </div>
                                <div id="collapseOne" class="collapse" data-parent="#accordion-1">
                                    <div class="card-body">
                                        Website kami tidak secara langsung menyediakan proses jual beli. Namun kami
                                        menyediakan fitur untuk menghubungkan antara pembeli dan penjual. Jadi, jika anda
                                        ingin memesan barang, anda harus menghubungi kami terlebih dahulu melalui WhatsApp
                                        di nomor 089676761828
                                    </div>
                                </div>
                            </div>
                            <div class="card wow fadeInLeft" data-wow-delay="0.2s">
                                <div class="card-header">
                                    <a class="card-link collapsed" data-bs-toggle="collapse" href="#collapseTwo">
                                        Lorem ipsum dolor sit amet?
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordion-1">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.
                                        Curabitur facilisis ornare velit non.
                                    </div>
                                </div>
                            </div>
                            <div class="card wow fadeInLeft" data-wow-delay="0.3s">
                                <div class="card-header">
                                    <a class="card-link collapsed" data-bs-toggle="collapse" href="#collapseThree">
                                        Lorem ipsum dolor sit amet?
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordion-1">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.
                                        Curabitur facilisis ornare velit non.
                                    </div>
                                </div>
                            </div>
                            <div class="card wow fadeInLeft" data-wow-delay="0.4s">
                                <div class="card-header">
                                    <a class="card-link collapsed" data-bs-toggle="collapse" href="#collapseFour">
                                        Lorem ipsum dolor sit amet?
                                    </a>
                                </div>
                                <div id="collapseFour" class="collapse" data-parent="#accordion-1">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.
                                        Curabitur facilisis ornare velit non.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div id="accordion-2">
                            <div class="card wow fadeInRight" data-wow-delay="0.1s">
                                <div class="card-header">
                                    <a class="card-link collapsed" data-bs-toggle="collapse" href="#collapseSix">
                                        Lorem ipsum dolor sit amet?
                                    </a>
                                </div>
                                <div id="collapseSix" class="collapse" data-parent="#accordion-2">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.
                                        Curabitur facilisis ornare velit non.
                                    </div>
                                </div>
                            </div>
                            <div class="card wow fadeInRight" data-wow-delay="0.2s">
                                <div class="card-header">
                                    <a class="card-link collapsed" data-bs-toggle="collapse" href="#collapseSeven">
                                        Lorem ipsum dolor sit amet?
                                    </a>
                                </div>
                                <div id="collapseSeven" class="collapse" data-parent="#accordion-2">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.
                                        Curabitur facilisis ornare velit non.
                                    </div>
                                </div>
                            </div>
                            <div class="card wow fadeInRight" data-wow-delay="0.3s">
                                <div class="card-header">
                                    <a class="card-link collapsed" data-bs-toggle="collapse" href="#collapseEight">
                                        Lorem ipsum dolor sit amet?
                                    </a>
                                </div>
                                <div id="collapseEight" class="collapse" data-parent="#accordion-2">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.
                                        Curabitur facilisis ornare velit non.
                                    </div>
                                </div>
                            </div>
                            <div class="card wow fadeInRight" data-wow-delay="0.4s">
                                <div class="card-header">
                                    <a class="card-link collapsed" data-bs-toggle="collapse" href="#collapseNine">
                                        Lorem ipsum dolor sit amet?
                                    </a>
                                </div>
                                <div id="collapseNine" class="collapse" data-parent="#accordion-2">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.
                                        Curabitur facilisis ornare velit non.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQs End -->

        <!-- Fact Start -->
        <div class="fact">
            <div class="container-fluid">
                <div class="row counters">
                    <div class="col-md-6 fact-left wow slideInLeft">
                        <div class="row">
                            <div class="fact-content col-6">
                                <div class="fact-icon">
                                    <img
                                        src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/64/null/external-construction-emergency-service-flaticons-lineal-color-flat-icons.png" />
                                </div>
                                <div class="fact-text">
                                    <p>Pekerja Profesional</p>
                                </div>
                            </div>
                            <div class="fact-content col-6">
                                <div class="fact-icon">
                                    <img
                                        src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/64/null/external-materials-tools-and-material-ecommerce-flaticons-lineal-color-flat-icons-3.png" />
                                </div>
                                <div class="fact-text">
                                    <p>Bahan Berkualitas</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 fact-right wow slideInRight">
                        <div class="row">
                            <div class="fact-content col-6">
                                <div class="fact-icon">
                                    <img src="https://img.icons8.com/ultraviolet/40/null/money--v1.png" />
                                </div>
                                <div class="fact-text">
                                    <p>Harga Terjangkau</p>
                                </div>
                            </div>
                            <div class="fact-content col-6">
                                <div class="fact-icon">
                                    <img src="https://img.icons8.com/doodle/48/null/maintenance.png" />
                                </div>
                                <div class="fact-text">
                                    <p>Instalasi Cepat</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fact End -->

        <!-- Location Start -->
        <div class="location d-flex flex-column justify-content-center">
            <div class="section-header text-center mt-5">
                <h2 class="mb-2">Lokasi Kami</h2>
                <p>Jangan ragu untuk menghubungi kontak kami untuk mendapatkan informasi lebih detail mengenai jasa yang
                    kami berikan. <br> Anda juga dapat langsung mendatangi lokasi kami berikut ini</p>
            </div>

    <div class="mapouter mx-auto"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=800&amp;height=400&amp;hl=en&amp;q=Jl. H. Nawi Raya No.1, RT.1/RW.2&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://formatjson.org/word-counter">Word Counter</a></div><style>.mapouter{position:relative;text-align:right;width:800px;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:800px;height:400px;}.gmap_iframe {width:800px!important;height:400px!important;}</style></div>
</div>
<!-- Location End-->

=======
<div class="review">
    <h2 class="text-center">Testimonials</h2>
    <div class="row justify-content-around">
        @foreach ($reviews as $review)
        <div class="col-md-4">
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
>>>>>>> 679b2e8 (tes2)
</div><!-- /.container -->

@endsection
