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
                    <a class="btn animated fadeInUp" href="{{ url('contact') }}">Kontak Kami</a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('images/construction_assets/Kaca/ShowerBoxKacaPT10mmRekSledingAtas.jpeg') }}" alt="Carousel Image">
                <div class="carousel-caption">
                    <p class="animated fadeInRight">Menyediakan banyak ragam alat konstruksi</p>
                    <h1 class="animated fadeInLeft">Kami bersedia melayani anda</h1>
                    <a class="btn animated fadeInUp" href="{{ url('contact') }}">Kontak Kami</a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('images/construction_assets/Kaca/Partisi kaca PT12mm.jpeg') }}" alt="Carousel Image">
                <div class="carousel-caption">
                    <p class="animated fadeInRight">Kami dipercaya oleh banyak sekali pelanggan</p>
                    <h1 class="animated fadeInLeft">Tidak perlu ragu. Langsung saja kontak kami</h1>
                    <a class="btn animated fadeInUp" href="{{ url('contact') }}">Kontak Kami</a>
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#carousel" role="button" data-bs-target="#carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-bs-target="#carousel" data-bs-slide="next">
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
                        <p class="text-center">Lorem ipsum dolor sit amet elit. Phasus nec pretim ornare velit non</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="feature-item">
                    <div class="feature-text">
                        <h3 class="text-center">Kaca</h3>
                        <p class="text-center">Lorem ipsum dolor sit amet elit. Phasus nec pretim ornare velit non</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="feature-item">
                    <div class="feature-text">
                        <h3 class="text-center">Stainless</h3>
                        <p class="text-center">Lorem ipsum dolor sit amet elit. Phasus nec pretim ornare velit non</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End-->

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
                                Website kami tidak secara langsung menyediakan proses jual beli. Namun kami menyediakan fitur untuk menghubungkan antara pembeli dan penjual. Jadi, jika anda ingin memesan barang, anda harus menghubungi kami terlebih dahulu melalui WhatsApp di nomor 089676761828
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
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
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
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
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
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
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
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
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
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
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
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
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
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FAQs End -->

</div><!-- /.container -->

@endsection
