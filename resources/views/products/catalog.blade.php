@extends('layouts.main')

@section('content')
@include('layouts.partials.page-header', ['page' => 'Catalog'])

    <div class="categories container justify-content-center">
        <div class="pt-5 mt-5 d-flex flex-column justify-content-center">
            <h2 class="text-center my-2">
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
            <div class="d-flex justify-content-center">
                <li class="text-center categories list-unstyled pt-2">
                    <ul class="d-flex">
                        <li class="category-list list-unstyled me-3">
                            <a href={{ url('products') . '/' }}>
                                <p>All</p>
                            </a>
                        </li>
                        @foreach ($categories as $category)
                            <li class="text-center category-list list-unstyled me-3">
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


<div class="blog">
    <div class="container">
        <div class="row blog-page">
            @foreach ($products as $product)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="https://thumbs.dreamstime.com/b/construction-crane-27702754.jpg" alt="Image">
                    </div>
                    <div class="blog-title">
                        <h3>{{ $product->product_name }}</h3>
                        <a class="code" href="">{{ $product->product_code }}</a>
                    </div>
                    <div class="blog-text">
                        <p>
                            This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="d-flex">
            {{ $products->links('pagination::bootstrap-4') }}
        </div>
    </div>
    </div>
</div>
<!-- Blog End -->

@endsection
