<div class="row col-lg-8">
    <form action="{{ route('stores.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="category_id" value="3">
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupFile01">Image</label>
            <input type="file" class="form-control @error('img') is-invalid @enderror" id="inputGroupFile01" name="img">
            @error('product_name')
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