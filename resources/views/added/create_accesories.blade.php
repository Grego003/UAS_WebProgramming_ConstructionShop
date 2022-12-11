{{-- Nama. Gambar. Stock. Deskripsi --}}
<div class="row col-lg-8">
    <form action="{{ route('stores.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="category_id" value="4">
        <div class="mb-3">
            <label for="product_name" class="form-label">Nama Produk</label>
            <input type="text" class="form-control @error('product_name') is-invalid @enderror" id="product_name"
                name="product_name" value="{{ old('product_name') }}" required>
            @error('product_name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupFile01">Image</label>
            <input type="file" class="form-control @error('img') is-invalid @enderror" id="inputGroupFile01"
                name="img">
            @error('img')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control @error('description') is-invalid @enderror" placeholder="Deskripsi" id="floatingTextarea2"
                style="height: 100px" name="description">{{ old('description') }}</textarea>
            <label for="floatingTextarea2">Deskripsi</label>
            @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="row mb-2">
            <div class="col-6">
                <label for="basic-url" class="form-label">Harga</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">Rp.</span>
                    <input type="number" class="form-control @error('stock') is-invalid @enderror" id="basic-url"
                        name="harga" aria-describedby="basic-addon3" value="{{ old('harga') }}">
                    @error('harga')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="col-6">
                <label for="stock" class="form-label">Stock</label>
                <input type="number" class="form-control @error('stock') is-invalid @enderror" id="stock"
                    name="stock" value="{{ old('stock') }}">
                @error('stock')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-md-6">
                <label for="basic-url" class="form-label">Shopee</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">URL</span>
                    <input type="text" class="form-control @error('link_shopee') is-invalid @enderror" id="basic-url"
                        name="link_shopee" aria-describedby="basic-addon3" value="{{ old('link_shopee') }}">
                    @error('link_shopee')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <label for="basic-url" class="form-label">Tokopedia</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">URL</span>
                    <input type="text" class="form-control @error('link_tokopedia') is-invalid @enderror"
                        id="basic-url" name="link_tokopedia" aria-describedby="basic-addon3"
                        value="{{ old('link_tokopedia') }}">
                    @error('link_tokopedia')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-info">Submit</button>
        </div>
    </form>
</div>
