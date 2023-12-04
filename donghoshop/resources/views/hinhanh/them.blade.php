<form action="{{ route('sanpham.them') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label" for="hinhanh">Hình ảnh sản phẩm</label>
        <input type="file" class="form-control @error('hinhanh') is-invalid @enderror" id="hinhanh" name="hinhanh"
            value="{{ old('hinhanh') }}" />
        @error('hinhanh')
        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary"><i class="fa-light fa-save"></i> Thêm vào CSDL</button>
</form>