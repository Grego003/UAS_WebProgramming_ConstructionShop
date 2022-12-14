@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ Storage::url($product->img_src) }}" class="rounded mx-auto d-block" height="100%" width="100%">
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <form action="/stores/{{ $product->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="category_id" value="3">
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
                        @error('product_name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-info">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
