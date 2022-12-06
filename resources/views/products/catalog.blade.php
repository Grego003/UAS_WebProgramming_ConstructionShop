@extends('layouts.main')

@section('content')
@include('layouts.partials.page-header', ['page' => 'Catalog'])

    @if ($products->isEmpty())
        <h2 class="text-center">Barang Sedang Kosong</h2>
    @endif
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
            @if ($categoryID == 1)               
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
            @endif
        </div>
    </div>

        <div class="catalog">
            <div class="container">
                <div class="row catalog-page">
                    @foreach ($products as $product)
                        @if ($categoryID == 2)
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
            } 
        });
    }
</script>
