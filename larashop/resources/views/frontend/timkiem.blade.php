@extends('layouts.frontend')

@section('title', 'Tìm Kiếm')

@section('content')
    <h2>Kết quả tìm kiếm cho "{{ $query }}"</h2>
    <div class="row">
        @if(count($sanpham) > 0)
			<div class="mb-3">
            @foreach ($loaisanpham as $lsp)
				<a href="{{ route('frontend.sanpham.phanloai', ['tenloai_slug' => $lsp->tenloai_slug]) }}" @if($selectedCategory == $lsp) class="font-weight-bold" @endif></a>
			@endforeach
			</div>
            @foreach($sanpham as $sp)
                <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
                    <div class="card product-card">
                        <a class="card-img-top d-block overflow-hidden" href="{{ route('frontend.sanpham.chitiet', ['tenloai_slug' => $sanpham->loaisanpham->tenloai_slug, 'tensanpham_slug' => $sanpham->tensanpham_slug]) }}">
                            <img src="{{ env('APP_URL') . '/storage/app/' . $sanpham->hinhanh }}" />
                        </a>
                        <div class="card-body py-2">
                            <a class="product-meta d-block fs-xs pb-1" href="{{ route('frontend.sanpham.phanloai', ['tenloai_slug' => $sanpham->loaisanpham->tenloai_slug]) }}">{{ $sanpham->loaisanpham->tenloai }}</a>
                            <h3 class="product-title fs-sm">
                                <a href="{{ route('frontend.sanpham.chitiet', ['tenloai_slug' => $sanpham->loaisanpham->tenloai_slug, 'tensanpham_slug' => $sanpham->tensanpham_slug]) }}">{{ $sanpham->tensanpham }}</a>
                            </h3>
                            <div class="d-flex justify-content-between">
                                <div class="product-price">
                                    <span class="text-accent">{{ number_format($sanpham->dongia, 0, ',', '.') }}<small>đ</small></span>
                                </div>
                                <div class="star-rating">
                                    <!-- Điều chỉnh số sao tương ứng với đánh giá sản phẩm -->
                                    @for ($i = 0; $i < $sanpham->rating; $i++)
                                        <i class="star-rating-icon ci-star-filled active"></i>
                                    @endfor
                                    @for ($i = $sanpham->rating; $i < 5; $i++)
                                        <i class="star-rating-icon ci-star"></i>
                                    @endfor
                                </div>
                            </div>
                        </div>
                        <form method="post" action="{{ route('frontend.giohang.them', ['tensanpham_slug' => $sanpham->tensanpham_slug]) }}">
                            @csrf
                            <!-- Các trường và nút submit của bạn -->
                            <div class="card-body card-body-hidden">
                                <button type="submit" class="btn btn-primary btn-sm d-block w-100 mb-2">
                                    <i class="ci-cart fs-sm me-1"></i>Thêm vào giỏ hàng
                                </button>
                            </div>
                        </form>
                    </div>
                    <hr class="d-sm-none">
                </div>
            @endforeach
        @else
            <p>Không tìm thấy kết quả nào.</p>
        @endif
    </div>
@endsection
