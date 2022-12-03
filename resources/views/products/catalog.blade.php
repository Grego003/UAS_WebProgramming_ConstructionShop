@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="d-flex pt-3 justify-content-end">
            <h2>
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
        </div>
        <div class="d-flex pt-3 border">
            <div class=" d-flex flex-column justify-content-between me-3 border">
                <div class="mx-3 text-end">
                    <h4 class="mt-3">Kategori</h4>
                    <hr>

                    <div class="mt-2 d-flex flex-column">
                        <li class="category-list list-unstyled me-2">
                            <a href={{ url('products') . '/' }}>
                                <p>All</p>
                            </a>
                        </li>
                        @foreach ($categories as $category)
                            <li class="category-list list-unstyled me-2">
                                <a href={{ url('products') . '/' . $category->id }}>
                                    <p>{{ $category->category_name }}</p>
                                </a>
                            </li>
                        @endforeach
                    </div>

                    <h4 class="mt-3">Produk</h4>
                    <hr>

                    <div class="mt-2 d-flex flex-column">
                        @foreach ($subCategories as $subCategory)
                            <li class="sub-category-list list-unstyled me-2">
                                <a href={{ url('products/sub') . '/' . $subCategory->id }}>
                                    <p>{{ $subCategory->sub_category }}</p>
                                </a>
                            </li>
                        @endforeach
                    </div>
                </div>
            </div>
            <hr />
            <div class="d-flex">
                {{ $products->links('pagination::bootstrap-4') }}
            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($products as $product)
                    <div class="col">
                        <div class="product card shadow-sm ">
                            <img src="{{ $product->src_img }}" alt="{{ $product->src_img }}" srcset="">
                            <div class="card-body">
                                <h5 class="card-title"> {{ $product->product_name }}</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                    additional
                                    content. This content is a little bit longer.</p>
                                <div class="button-group text-center ">
                                    <p> Available Material/Colors </p>
                                    @foreach ($colors as $color)
                                        <button
                                            class="btn btn btn-circle btn-circle-sm me-1">{{ $color->color_name }}</button>
                                    @endforeach
                                </div>
                            </div>
                            <div class="card-footer" style="background-color: #fdbe33">
                                <div class="d-flex justify-content-between align-items-center">

                                    <small class="text">Price : </small>
                                    <small class="text">Stock : {{ $product->stock }} </small>
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
    </div>
@endsection
