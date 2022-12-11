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
                        <p class="animated fadeInRight">20 tahun pengalaman di</p>
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
                                <p class="text-center">Bahan aluminium yang berkualitas tentunya kami tawarkan untuk mendukung pembuatan berbagai macam produk barang eksterior maupun interior.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="feature-item">
                            <div class="feature-text">
                                <h3 class="text-center">Kaca</h3>
                                <p class="text-center">Kaca dengan tipe grade A kami tawarkan dengan ukuran sesuai dengan yang diinginkan, adapun best seller dari toko kami adalah pembuatan kaca kanopi dan etalase.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="feature-item">
                            <div class="feature-text">
                                <h3 class="text-center">Stainless</h3>
                                <p class="text-center">Bahan stainless yang diperuntukan untuk pembuatan berbagai macam produk barang eksterior maupun interior anti karat. 
                                </p>
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
                                        Bagaimana saya bisa membeli barang secara langsung melalui website ini? 
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
                                        Apakah saya bisa datang ke toko langsung ketika saya membeli barang lewat tokopedia?
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordion-1">
                                    <div class="card-body">
                                        Kami melayani pemesanan baik itu datang langsung di tempat atau melalui platform e commerce kami tetapi hanya berupa aksesoris, untuk pemesanan barang yang dapat di ambil di toko bisa melalui WhatsApp di nomor 089676761828.
                                    </div>
                                </div>
                            </div>
                            <div class="card wow fadeInLeft" data-wow-delay="0.3s">
                                <div class="card-header">
                                    <a class="card-link collapsed" data-bs-toggle="collapse" href="#collapseThree">
                                        Dimanakah alamat lokasi toko Nusa Karya utama apakah ada cabang lain?
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordion-1">
                                    <div class="card-body">
                                        Kami hanya beroperasi di  1, Jl. H. Nawi Raya No.1, RT.1/RW.2, Gandaria Utara, Kec. Cilandak, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12420. Untuk cabang lain silahkan di tunggu kedepannya.
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
                                        Bagaimana cara memastikan bahwa barang yang diantar ke tempat saya akan aman dan tanpa kerusakan?
                                    </a>
                                </div>
                                <div id="collapseSix" class="collapse" data-parent="#accordion-2">
                                    <div class="card-body">
                                        Toko kami menyediakan kendaraan khusus untuk mengantarkan barang-barang customer ke tempat tujuan, kami akan memastikan keamanan, kualitas dan tanggung jawab penuh pada barang kami jika terjadi hal-hal yang diluar dugaan. Maka kami dapat menjamin barang pesanan akan sampai di tempat tujuan dengan selamat.
                                    </div>
                                </div>
                            </div>
                            <div class="card wow fadeInRight" data-wow-delay="0.2s">
                                <div class="card-header">
                                    <a class="card-link collapsed" data-bs-toggle="collapse" href="#collapseSeven">
                                        Apakah saya bisa menukar produk yang telah saya pesan sebelumnya?

                                    </a>
                                </div>
                                <div id="collapseSeven" class="collapse" data-parent="#accordion-2">
                                    <div class="card-body">
                                        Pemesanan barang yang sudah fix tentu saja akan menjadi prioritas bagi kami, kami hanya bisa mengganti/menukar produk dengan ketentuan barang pesanan yang belum dibuat atau kendala seperti bahan yang kurang/habis. Kami tidak bisa melayani penukaran apabila produk sudah selesai dibuat sesuai pesanan. Maka kami menyarankan sebelum memesan produk pastikan ukuran, bahan, dan detail-detail kecil dapat disampaikan ketika pemesanan agar terhindar dari hal seperti ini.
                                    </div>
                                </div>
                            </div>
                            <div class="card wow fadeInRight" data-wow-delay="0.3s">
                                <div class="card-header">
                                    <a class="card-link collapsed" data-bs-toggle="collapse" href="#collapseEight">
                                        Apakah toko ini menyediakan pemasangan atau instalasi langsung di tempat pembeli?
                                    </a>
                                </div>
                                <div id="collapseEight" class="collapse" data-parent="#accordion-2">
                                    <div class="card-body">
                                        Ya, kami menyediakan instalasi langsung karena itu merupakan fokus dari usaha kami yaitu pemasangan secara langsung karena kami sangat mengutamakan kepuasan pelanggan dari awal konsultasi sampai dengan pemasangan. 
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


        {{-- Review End --}}

        <!-- Location Start -->
        <div class="location d-flex flex-column justify-content-center wow fadeInLeft" data-wow-delay="0.2s">
            <div class="section-header text-center mt-5">
                <h2 class="mb-2">Lokasi Kami</h2>
                <p>Jangan ragu untuk menghubungi kontak kami untuk mendapatkan informasi lebih detail mengenai jasa yang
                    kami berikan. <br> Anda juga dapat langsung mendatangi lokasi kami berikut ini</p>
            </div>
            <div class="overflow-auto" style="width: 100%">
                <div class="mapouter mx-auto">
                    <div class="gmap_canvas map-responsive"><iframe class="gmap_iframe" frameborder="0" scrolling="no"
                            marginheight="0" marginwidth="0"
                            src="https://maps.google.com/maps?width=800&amp;height=400&amp;hl=en&amp;q=Jl. H. Nawi Raya No.1, RT.1/RW.2&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
                            href="https://formatjson.org/word-counter">Word Counter</a></div>
                    <style>
                        .mapouter {
                            position: relative;
                            text-align: right;
                            width: 800px;
                            height: 400px;
                        }
    
                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            width: 800px;
                            height: 400px;
                        }
    
                        .gmap_iframe {
                            width: 800px !important;
                            height: 400px !important;
                        }
                    </style>
                </div>
            </div>
        </div>
        <!-- Location End-->

        <!-- Testimonial Start -->
        <div class="testimonial wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="testimonial-slider-nav">
                            Testimonials
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-9 mx-auto">
                        <div class="testimonial-slider">
                            @foreach ($reviews as $review)
                                <div class="slider-item">
                                    <h3 class="mb-">{{ $review->name }}</h3>
                                    <div class="slider-nav">
                                        @for ($i = 0; $i < $review->review; $i++)
                                            <h4 class="text-warning me-2"><i class="bi bi-star-fill"></i></h4>
                                        @endfor
                                        @for ($i = 0; $i < 5 - $review->review; $i++)
                                            <h4 class="text-warning me-2"><i class="bi bi-star"></i></h4>
                                        @endfor
                                    </div>
                                    <p>{{ $review->comment }}</p>
                                    @can('only_admin', $review)
                                        <form class="d-inline" action="/review/{{ $review->id }}" method="post"
                                            id="del{{ $review->id }}">
                                            @method('DELETE')
                                            @csrf
                                            <button style="border: 0pt" class="badge rounded-pill bg-danger"
                                                data-id="del{{ $review->id }}"
                                                onclick="confirmDelete(event)">Delete</button>
                                        </form>
                                    @endcan
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


    </div><!-- /.container -->
@endsection
