<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
    <div class="catalog-item">
        <div class="catalog-img">
            <img src="{{ Storage::url($product->src_img) }}" alt="img">
            <div class="catalog-overlay">
                <p> {{ $product->description }}</p>
            </div>
        </div>
    </div>
    @can('only_admin', $product)
    <div class="catalog-footer d-flex">
        <a href="/stores/{{ $product->id }}/edit" class="badge rounded-pill bg-secondary text-decoration-none">Edit</a>
        <form class="d-inline ms-auto" action="/stores/{{ $product->id }}" method="post" id="del{{ $product->id }}">
            @method('DELETE')
            @csrf
            <button style="border: 0pt" class="badge rounded-pill bg-danger" data-id="del{{ $product->id }}"  onclick="confirmDelete(event)" >Delete</button>
        </form>
    </div>
    @endcan
</div>