<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
    <div class="catalog-item">
        <div class="catalog-img">
            <img src="{{ Storage::url($product->src_img) }}" alt="">
            <div class="catalog-overlay">
                <p> {{ $product->description }}</p>
            </div>
        </div>
        <div class="catalog-title">
            <h3>{{ $product->product_name }}</h3>
            <a class="code" href="">{{ $product->code }}</a>
        </div>
        @if ($categoryID == 1 || $product->category_id == 1)
            <div class="catalog-text">
                <h5>Available Material/Colors</h5>
                @foreach ($product->color as $colours)
                    @switch($colours->color_name)
                        @case('Black')
                            <button class="btn btn btn-box btn-sm me-2"
                                style="background-color: black; border-radius:12%; color:white">{{ $colours->color_name }}
                            </button>
                        @break

                        @case('Artic White Brown')
                            <button class="btn btn btn-box btn-sm me-2"
                                style="background-color: #f4f3ef; border-radius:12%; color:black">{{ $colours->color_name }}
                            </button>
                        @break

                        @case('CA')
                            <button class="btn btn btn-box btn-sm me-2"
                                style="background-color: #b3b3b3; border-radius:12%; color:black">{{ $colours->color_name }}
                            </button>
                        @break

                        @case('Urat Kayu Ebony')
                            <button class="btn btn btn-box btn-sm me-2" border-radius:12%;
                                color:black">{{ $colours->color_name }}
                            </button>
                        @break

                        @default
                    @endswitch
                @endforeach
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
            @if ($categoryID == 4)
                <div class="d-flex justify-content-between align-items-center">
                    <small class="text">Price : Rp. {{ $product->harga }}</small>
                    <small class="text">Stock : {{ $product->stock }} </small>
                </div>
                <div class="d-flex">
                    <a href="{{ $product->link_tokopedia }}" style="background-color: #03AC0E"
                        class="btn ms-auto text-white">Buy Now</a>
                </div>
            @endif
        </div>
    </div>
</div>
