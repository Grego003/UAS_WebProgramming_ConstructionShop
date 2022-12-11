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
                    <h2>20 Years Experience</h2>
                </div>
                <div class="about-text">
                    <p>
                        Kami yakin perusahaan kami selama lebih dari 20 tahun dalam bidang konstruksi dapat menjadi jaminan bahwa kami adalah ahlinya. Kami meberikan respon yang poitif dan cepat, harga yang bersaing, dan sangat berpengalaman dalam menangani proses pemasangan barang.
                    </p>
                    <a class="btn" href="whatsapp://send?text=Halo!&phone=+6289676761828">Contact Us<br><b>WhatsApp</b></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
{{-- Review --}}

<h2 class="text-center wow fadeInUp" data-wow-delay="0.1s">Review Us</h2>
<div class="form-review row mx-2 justify-content-center wow fadeInUp" data-wow-delay="0.2s">
    <form action="/review" class="col-lg-8" method="post">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="floatingInput" name="name" placeholder="Name" value="{{old('name')}}">
            <label for="floatingInput">Name</label>
            @error('name')
            <div  class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" name="email" placeholder="email" value="{{old('email')}}">
            <label for="floatingInput">Email</label>
            @error('email')
            <div  class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <input type="hidden" id="review" name="review" value="">
            <span class="d-block mb-2">Review</span>
            <h4 class="d-inline me-2 text-warning" onclick="star(event)"  data-id="1"><i id="1" class="bi bi-star"></i></h4>
            <h4 class="d-inline me-2 text-warning" onclick="star(event)"  data-id="2"><i id="2" class="bi bi-star"></i></h4>
            <h4 class="d-inline me-2 text-warning" onclick="star(event)"  data-id="3"><i id="3" class="bi bi-star"></i></h4>
            <h4 class="d-inline me-2 text-warning" onclick="star(event)"  data-id="4"><i id="4" class="bi bi-star"></i></h4>
            <h4 class="d-inline me-2 text-warning" onclick="star(event)"  data-id="5"><i id="5" class="bi bi-star"></i></h4>
            @error('review')
                <span class="text-danger d-block">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-floating">
            <textarea class="form-control @error('comment') is-invalid @enderror" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="comment">{{old('comment')}}</textarea>
            <label for="floatingTextarea2">Comments</label>
            @error('comment')
            <div  class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
          <button type="submit" class="btn btn-warning m-auto mt-2">Submit</button>
    </form>
</div>
</div>
@endsection

<script>
    function star(ev){
        ev.preventDefault();
        var rate = ev.currentTarget.getAttribute('data-id');
        var input = document.getElementById('review');
        input.value = rate;
        for(var i = 1; i <= 5; i++){
            var stars = document.getElementById(i);
            stars.classList.remove("bi-star-fill")
            stars.classList.add("bi-star")
        }
        for(var i = 1; i <= rate; i++){
            var stars = document.getElementById(i);
            stars.classList.toggle("bi-star")
            stars.classList.add("bi-star-fill")
        }
    }
</script>
