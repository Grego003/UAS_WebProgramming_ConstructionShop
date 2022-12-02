@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="pt-5 mt-5 d-flex justify-content-between">
            <h2>
                @switch($categoryID)
                    @case(1)
                        {{ $categories['0']->category_name }}
                    @break

                    @case(2)
                        {{ $categories['1']->category_name }}
                    @break

                    @case(3)
                        {{ $categories['2']->category_name }}
                    @break

                    @case(4)
                        {{ $categories['3']->category_name }}
                    @break

                    @case(5)
                        {{ $categories['4']->category_name }}
                    @break

                    @case(6)
                        {{ $categories['5']->category_name }}
                    @break

                    @case(7)
                        {{ $categories['6']->category_name }}
                    @break

                    @default
                        All Products
                @endswitch
            </h2>
            <div>
                <li class="categories list-unstyled pt-2">
                    <ul class="d-flex">
                        <li class="category-list list-unstyled me-3">
                            <a href={{ url('products') . '/' }}>
                                <p>All</p>
                            </a>
                        </li>
                        @foreach ($categories as $category)
                            <li class="category-list list-unstyled me-3">
                                <a href={{ url('products') . '/' . $category->id }}>
                                    <p>{{ $category->category_name }}</p>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            </div>
        </div>
        <hr />
        <div class="d-flex">
            {{-- {{ $products->links('pagination::bootstrap-4') }} --}}
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
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View
                                        Details</button>
                                </div>
                                <small class="text-muted">Price : </small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="d-flex">
                {{ $products->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
@endsection
