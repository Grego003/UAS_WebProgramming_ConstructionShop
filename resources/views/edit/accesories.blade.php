@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-md-6">
                <img src="{{ Storage::url($product->src_img) }}" class="rounded mx-auto d-block" height="100%"
                    width="100%">
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <form action="/stores/{{ $product->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="category_id" value="4">
                    <div class="mb-3">
                        <label for="product_name" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control @error('product_name') is-invalid @enderror"
                            id="product_name" placeholder="Nama Produk" name="product_name"
                            value="{{ old('product_name') ?? $product->product_name }}" required>
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
                            style="height: 100px" name="description">{{ old('description') ?? $product->description }}</textarea>
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
                                <input type="number" class="form-control @error('stock') is-invalid @enderror"
                                    id="basic-url" name="harga" aria-describedby="basic-addon3"
                                    value="{{ old('harga') ?? $product->harga }}">
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
                                name="stock" value="{{ old('stock') ?? $product->stock }}">
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
                                <input type="text" class="form-control @error('link_shopee') is-invalid @enderror"
                                    id="basic-url" name="link_shopee" aria-describedby="basic-addon3"
                                    value="{{ old('link_shopee') ?? $product->link_shopee }}">
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
                                    value="{{ old('link_tokopedia') ?? $product->link_tokopedia }}">
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
        </div>
    </div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', () => {
        $('.alert').alert()
    })
</script>
