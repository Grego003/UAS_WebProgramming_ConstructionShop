@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="pt-5 d-flex justify-content-between">
            <h2>All Products</h2>
            <li class="categories list-unstyled mt-2">
                <ul class="d-flex">
                    @foreach ($categories as $category)
                        <li class="category-list list-unstyled me-3">
                            <a href=#>
                                <h5>{{ $category->category_name }}</h5>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>
        </div>
        <hr />
        <div class="btn-group pb-3 justify-content-evenly">
            <nav class="page nav">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    @for ($i = 9, $x = 1; $i <= $totalProduct + 9; $i += 9, $x++)
                        <li class="page-item">
                            <a class="page-link" href={{ url('products/' . ($i - 9) . '/' . $i) }}>{{ $x }}</a>
                        </li>
                    @endfor
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach ($products as $product)
                <div class="col">
                    <div class="product card shadow-sm">
                        <img src="https://pixabay.com/get/gc60f369d1b53616468afb32bcbbde217cb6a87209eec664c8577e8fd1c7cc9340012bf967f375da44f2713df8fdd1ea4350d88773b8bf2b2a5c0b11f0746bedd_640.jpg"
                            alt="" srcset="">
                        <div class="card-body">
                            <h5 class="card-title"> {{ $product->product_name }} --> {{ $product->product_code }}</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional
                                content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View Details</button>
                                </div>
                                <small class="text-muted">Price : </small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endsection
