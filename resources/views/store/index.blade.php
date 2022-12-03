@extends('layouts.main')

@section('content')
    <div class="container-fluid mt-5">
        <ul class="nav nav-tabs border-bottom mb-3">
            @foreach ($categories as $category)
            <li class="nav-item">
                <a class="nav-link active mx-3 mb-2" aria-current="page" tabindex="5" href="#">{{ $category->category_name }}</a>
            </li>
            @endforeach
        </ul>
        {{-- This is Card --}}
        <div class="row">
            @foreach ($products as $product)
            <div class="col-lg-4">
                <div class="card">
                    <img src="{{ Storage::url($product->img) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{ $product->product_name }}</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                      <a href="/stores/{{ $product->id }}/edit" class="badge rounded-pill bg-secondary text-decoration-none">Edit</a>
                      <form class="d-inline" action="/stores/{{ $product->id }}" method="post" id="del{{ $product->id }}">
                        @method('DELETE')
                        @csrf
                        <button style="border: 0pt" class="badge rounded-pill bg-danger" data-id="del{{ $product->id }}"  onclick="confirmDelete(event)" type="submit" >Delete</button>
                      </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection

<script>
    function confirmDelete(ev){
        ev.preventDefault();
        var submit = ev.currentTarget.getAttribute('data-id');
        console.log(submit);
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                swal("Poof! Your imaginary file has been deleted!", {
                icon: "success",
                });
                document.getElementById(submit).submit();
            } else {
                swal("Your imaginary file is safe!");
            }
        });
    }
</script>