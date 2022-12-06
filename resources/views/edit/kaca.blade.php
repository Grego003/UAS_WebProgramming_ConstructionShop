@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="{{ Storage::url($product->src_img) }}" class="rounded mx-auto d-block" height="100%" width="100%">
            </div>
            <div class="col-lg-6 d-flex align-items-center">
                <form action="/stores/{{ $product->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="category_id" value="2">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupFile01">Image</label>
                        <input type="file" class="form-control @error('img') is-invalid @enderror" id="inputGroupFile01" name="img">
                        @error('img')
                            <div  class="invalid-feedback">
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