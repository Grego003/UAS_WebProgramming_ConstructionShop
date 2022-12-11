@extends('layouts.main')

@section('content')
    @include('layouts.partials.page-header', ['page' => 'Catalog'])
    <div class="categories container-fluid justify-content-center">
        <div>
            <div class="mt-5 d-flex flex-column justify-content-center">
                <div class="nav-categories row justify-content-around">
                    <div class="col-md-5 flex-start align-items-center">
                        <h1 class="text-start mt-2 px-4">Kategori</h1>
                    </div>
                    <ul class="col-md-5 d-flex flex-wrap text-center justify-content-around align-items-center">
                        @foreach ($categories as $category)
                            <a class="category-list me-3 mt-3" href={{ url('products') . '/' . $category->id }}>
                                {{ $category->category_name }}
                            </a>
                        @endforeach
                    </ul>
                </div>
                <h2 class="text-center my-2 mx-auto mb-5 mt-5">
                    @if ($subCategoryID != '')
                        {{ $subCategories->find($subCategoryID)->sub_category }}
                    @else
                        {{ $categories->find($categoryID)->category_name }}
                    @endif
                </h2>
                @if ($categoryID == 1 || !$subCategoryID == '')
                    <div class="d-flex justify-content-center">
                        <li class="text-center categories list-unstyled">
                            <h4>Sub-Kategori</h4>
                            <hr>
                            <ul class="d-flex flex-wrap justify-content-center">
                                @if (!$categoryID == '')
                                    @foreach ($subCategories->where('category_id', $categoryID) as $subCategory)
                                        <li class="text-center sub-category-list list-unstyled me-4">
                                            <a href={{ url('products/sub') . '/' . $subCategory->id }}>
                                                <p>{{ $subCategory->sub_category }}</p>
                                            </a>
                                        </li>
                                    @endforeach
                                @else
                                    @foreach ($subCategories->where('category_id', $subCategoryID) as $subCategory)
                                        <li class="text-center sub-category-list list-unstyled me-4">
                                            <a href={{ url('products/sub') . '/' . $subCategory->id }}>
                                                <p>{{ $subCategory->sub_category }}</p>
                                            </a>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </li>
                    </div>
                @endif
            </div>
        </div>

        <div class="catalog">
            <div class="container">
                @if ($products->isEmpty())
                    <h3 class="text-center">Barang Sedang Kosong!</h3>
                @endif
                <div class="row catalog-page">
                    @foreach ($products as $product)
                        @if ($categoryID == 3)
                            @include('cards.kacaCard')
                        @else
                            @include('cards.mainCard')
                        @endif
                    @endforeach
                </div>

                <div class="d-flex">
                    {{ $products->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
        <!-- Blog End -->
    @endsection
