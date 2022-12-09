<div class="row col-lg-8">
    <form action="{{ route('stores.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="category_id" value="1">
        <div class="mb-3">
            <label for="code" class="form-label">Kode</label>
            <input type="number" class="form-control @error('code') is-invalid @enderror" id="code" placeholder="Kode" name="code" value="{{ old('code') }}">
            @error('code')
                <div  class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="product_name" class="form-label">Nama Produk</label>
            <input type="text" class="form-control @error('product_name') is-invalid @enderror" id="product_name" placeholder="Nama Produk" name="product_name" value="{{ old('product_name') }}" required>
            @error('product_name')
                <div  class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="panjang" class="form-label">Panjang</label>
            <input type="number" class="form-control @error('length') is-invalid @enderror" id="panjang" placeholder="Panjang" name="length" value="{{ old('length') }}">
            @error('length')
                <div  class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="row mb-3 justify-content-around ms-2">
            @foreach ($colors as $color)
            <div class="form-check col-3">
                <input class="form-check-input" type="checkbox" name="color[]" value="{{ $color->id }}" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  {{ $color->color_name }}
                </label>
              </div>
            @endforeach
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">Options</label>
            <select class="form-select" id="inputGroupSelect01" name="sub_category">
              <option selected>Sub Category</option>
              @foreach ($subCategory as $sub)
              <option value="{{ $sub->id }}">{{ $sub->sub_category }}</option>
              @endforeach
            </select>
        </div>
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