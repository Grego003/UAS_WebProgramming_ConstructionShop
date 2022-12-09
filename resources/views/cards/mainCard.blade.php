<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
    <div class="catalog-item">
        <div class="catalog-img">
            <img src="{{ Storage::url($product->src_img) }}" alt="img">
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
                @foreach ($product->color as $color)
                <button
                class="btn btn btn-circle btn-circle-sm me-1">{{ $color->color_name }}
            </button>
        @endforeach
        </div>
        @endif
            <div class="catalog-footer">
                @can('only_admin', $product)                    
                <a href="/stores/{{ $product->id }}/edit" class="badge rounded-pill bg-secondary text-decoration-none">Edit</a>
                <form class="d-inline" action="/stores/{{ $product->id }}" method="post" id="del{{ $product->id }}">
                    @method('DELETE')
                    @csrf
                    <button style="border: 0pt" class="badge rounded-pill bg-danger" data-id="del{{ $product->id }}"  onclick="confirmDelete(event)" >Delete</button>
                </form>
                @endcan
                @if ($categoryID == 4)    
                <div class="d-flex justify-content-between align-items-center">
                    <small class="text">Price : Rp. {{ $product->harga }}</small>
                    <small class="text">Stock : {{ $product->stock }} </small>
                </div>
                <div class="d-flex">
                    <a href="{{ $product->link_tokopedia }}" style="background-color: #03AC0E" class="btn ms-auto text-white">Buy Now</a>
                </div>
                @endif
        </div>
    </div>
</div>