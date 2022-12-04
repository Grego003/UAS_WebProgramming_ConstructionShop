@extends('layouts.main')

@section('content')
@include('layouts.partials.page-header', ['page' => 'Catalog'])

    <div class="categories container justify-content-center">
        <div class="mt-5 d-flex flex-column justify-content-center">
            <h2 class="text-center my-2 mx-auto">
                @if (!$categoryID && $subCategoryID)
                    @switch($subCategoryID)
                        @case(1)
                            {{ $subCategories['0']->sub_category }}
                        @break

                        @case(2)
                            {{ $subCategories['1']->sub_category }}
                        @break

                        @case(3)
                            {{ $subCategories['2']->sub_category }}
                        @break

                        @case(4)
                            {{ $subCategories['3']->sub_category }}
                        @break

                        @case(5)
                            {{ $subCategories['4']->sub_category }}
                        @break

                        @case(6)
                            {{ $subCategories['5']->sub_category }}
                        @break

                        @case(7)
                            {{ $subCategories['6']->sub_category }}
                        @break

                        @case(8)
                            {{ $subCategories['7']->sub_category }}
                        @break

                        @case(9)
                            {{ $subCategories['8']->sub_category }}
                        @break

                        @case(10)
                            {{ $subCategories['9']->sub_category }}
                        @break

                        @default
                            Semua Produk
                    @endswitch
                @else
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
                            Semua Produk
                    @endswitch
                @endif
            </h2>
            <div class="d-flex justify-content-center">
                <li class="text-center categories list-unstyled pt-2">
                    <h4 class="mt-2">Kategori</h4>
                    <hr>
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

            <div class="d-flex justify-content-center">
                <li class="text-center categories list-unstyled">
                    <h4>Produk / Sub-Kategori</h4>
                    <hr>
                    <ul class="d-flex">
                        @foreach ($subCategories as $subCategory)
                        <li class="text-center category-list list-unstyled me-3">
                                <a href={{ url('products/sub') . '/' . $subCategory->id }}>
                                    <p>{{ $subCategory->sub_category }}</p>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            </div>
        </div>
    </div>

        <div class="catalog">
            <div class="container">
                <div class="row catalog-page">
                    @foreach ($products as $product)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="catalog-item">
                            <div class="catalog-img">
                                <img src="{{ $product->src_img }}" alt="{{ $product->src_img }}">
                                <div class="catalog-overlay">
                                    <p> {{ $product->description }}</p>
                                </div>
                            </div>
                            <div class="catalog-title">
                                <h3>{{ $product->product_name }}</h3>
                                <a class="code" href="">{{ $product->code }}</a>
                            </div>
                            <div class="catalog-text">
                                <h5>Available Material/Colors</h5>
                                @foreach ($colors as $color)
                                    <button
                                        class="btn btn btn-circle btn-circle-sm me-1">{{ $color->color_name }}
                                    </button>
                                    @endforeach
                            </div>
                                <div class="catalog-footer">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text">Price : </small>
                                        <small class="text">Stock : {{ $product->stock }} </small>
                                    </div>
                                </div>
                        </div>
                    </div>
                @endforeach
            </div>

        <div class="d-flex">
            {{ $products->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
<!-- Blog End -->

@endsection
