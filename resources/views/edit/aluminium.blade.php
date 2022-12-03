@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6">
                <img src="{{ Storage::url($product->src_img) }}" class="rounded img-fluid mx-auto d-block" alt="..."
                    height="100%" width="100%">
            </div>
            <div class="col-lg-6">
                <form action="/stores/{{ $product->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="category_id" value="1">
                    <div class="mb-3">
                        <label for="code" class="form-label">Kode</label>
                        <input type="number" class="form-control @error('code') is-invalid @enderror" id="code"
                            placeholder="Kode" name="code" value="{{ old('code') ?? $product->code }}">
                        @error('code')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
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
                    <div class="mb-3">
                        <label for="panjang" class="form-label">Panjang</label>
                        <input type="text" class="form-control @error('length') is-invalid @enderror" id="panjang"
                            placeholder="Panjang" name="length" value="{{ old('length') ?? $product->length }}">
                        @error('length')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Options</label>
                        <select class="form-select" id="inputGroupSelect01" name="sub_category"
                            value="{{ old('sub_category') ?? $product->sub_category }}">
                            <option selected>Sub Category</option>
                            @foreach ($subCategory as $sub)
                                <option value="{{ $sub->id }}"
                                    {{ $sub->id == $product->subcategory_id ? 'selected' : '' }}>{{ $sub->sub_category }}
                                </option>
                            @endforeach
                        </select>
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
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-info">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
