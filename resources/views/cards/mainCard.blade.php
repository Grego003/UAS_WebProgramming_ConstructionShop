<div class="col-lg-4 col-md-5 wow fadeInUp" data-wow-delay="0.2s">
    <div class="catalog-item">
        <div class="catalog-img">
            <img src="{{ Storage::url($product->src_img) }}" alt="">
            <div class="catalog-overlay">
                <p> {{ $product->description }}</p>
            </div>
        </div>
        <div class="catalog-title">
            <h3>{{ $product->product_name }}</h3>
            <a class="code">{{ $product->code }}</a>
        </div>
        @if ($categoryID == 1 || $product->category_id == 1)
            <div class="catalog-text">
                <h5 class="mb-4">Available Material/Colors</h5>
                <div class="button-group">
                    @foreach ($product->color as $colours)
                        @switch($colours->color_name)
                            @case('Black')
                                <button class="btn-color me-2" style="background-color: black;color:white;">
                                </button>
                                <div class="hide text-center">
                                    black
                                </div>
                            @break

                            @case('Artic White')
                                <button class="btn-color me-2" style="background-color: #f4f3ef;color:black">
                                </button>
                                <div class="hide text-center">
                                    Artic White
                                </div>
                            @break

                            @case('CA')
                                <button class="btn-color me-2" style="background-color: #b3b3b3; color:black">
                                </button>
                                <div class="hide text-center">
                                    CA
                                </div>
                            @break

                            @default
                                <button class="btn-color me-2" style="background-color: #985b27; color:black">
                                </button>
                                <div class="hide text-top">
                                    Brown
                                </div>
                        @endswitch
                    @endforeach
                </div>
            </div>
        @endif
        @if ($categoryID == 4 || $product->category_id == 4)
            <div class="catalog-text">
                <div class="priceStock my-3 p-2 d-flex justify-content-between align-items-center">
                    <span class="text">Rp. {{ $product->harga }}</span>
                    <span class="text">Stock: {{ $product->stock }} </span>
                </div>
                <div class="catalog-shop-link d-flex">
                    @if ($product->link_tokopedia != null)
                        <a href="{{ $product->link_tokopedia }}" target="_blank" rel="noopener noreferrer"
                            style="background-color: #03AC0E" class="btn mx-auto text-white">Buy from Tokopedia</a>
                    @endif
                    @if ($product->link_shopee != null)
                        <a href="{{ $product->link_shopee }}" target="_blank" rel="noopener noreferrer"
                            style="background-color: #EE4D2D	" class="btn mx-auto text-white">Buy from Shopee</a>
                    @endif
                </div>
            </div>
        @endif
        <div class="catalog-footer">
            @can('only_admin', $product)
                <a href="/stores/{{ $product->id }}/edit"
                    class="badge rounded-pill bg-secondary text-decoration-none">Edit</a>
                <form class="d-inline" action="/stores/{{ $product->id }}" method="post" id="del{{ $product->id }}">
                    @method('DELETE')
                    @csrf
                    <button style="border: 0pt" class="badge rounded-pill bg-danger" data-id="del{{ $product->id }}"
                        onclick="confirmDelete(event)">Delete</button>
                </form>
            @endcan
        </div>
    </div>
</div>
