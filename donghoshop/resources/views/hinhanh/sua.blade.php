<form action="{{ route('sanpham.sua', ['id' => $sanpham->id]) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label" for="hinhanh">Hình ảnh sản phẩm</label>
        @if(!empty($sanpham->hinhanh))
        <img class="d-block rounded img-thumbnail" src="{{ env('APP_URL') . '/storage/app/' . $sanpham->hinhanh }}"
            width="100" />
        <span class="d-block small text-danger">Bỏ trống nếu muốn giữ nguyên ảnh cũ.</span>
        @endif
        <input type="file" class="form-control @error('hinhanh') is-invalid @enderror" id="hinhanh" name="hinhanh"
            value="{{ $sanpham->hinhanh }}" />
        @error('hinhanh')
        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary"><i class="fa-light fa-save"></i> Cập nhật</button>
</form>