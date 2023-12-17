@extends('layouts.frontend')

@section('title', 'Bài viết')

@section('content')
	<nav aria-label="breadcrumb" class ="w-100 float-left">
					<ol class="breadcrumb parallax justify-content-center" data-source-url="public/Customer/img/parallax.jpg" style="background-image: url(&quot;public/Customer/img/parallax.jpg&quot;); background-position: 50% 0.809717%;">
						<li class="breadcrumb-item">
							<a class="text-nowrap" href="{{ route('frontend.home') }}"><i class="ci-home"></i>Trang chủ</a>
						</li>
						<li class="breadcrumb-item text-nowrap active" aria-current="page">{{ $title }}</li>
					</ol>
				</nav>
	@php
		function LayHinhDau($strNoiDung)
		{
			$first_img = '';
			ob_start();
			ob_end_clean();
			$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $strNoiDung, $matches);
			if(empty($output))
				return asset('public\Customer\img\0222.jpg ');
			else
				return str_replace('&amp;', '&', $matches[1][0]);
		}
	@endphp
	@foreach($baiviet as $value)
	<div class="main-content w-100 float-left blog-list"> 
		<div class="container">
			<div class="row">
				<div class="products-grid col-xl-9 col-lg-9 order-lg-2">
					<div class="row">
					<div class="ttblog">
	<div class="item">
		<div class="ttblog_image_holder col-sm-6 float-left">
			<a href="#">
				<img src="{{ LayHinhDau($value->noidung) }}" alt="blog-01">							</a>
				<span class="blogicons">
                                        <a title="Click to view Full Image" href="img/banner/blog-01.jpg" data-lightbox="example-set" class="icon zoom"><i class="material-icons">search</i></a> 
							</span>
			</div>
		<div class="blog-content-wrap col-sm-6 float-left">
		<div class="blog_inner">
			<h4 class="blog-title"><a href="product-details.html">{{ $value->tieude }}</a></h4>
			<div class="post-info d-flex">
			<span class="author d-flex"><i class="material-icons">perm_identity</i><span>{{ $value->NguoiDung->name }}</span></span>
			<span class="date d-flex" href="#date">{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $value->created_at)->format('d/m/Y') }}</span></span>
			<a class="blog-entry-meta-link text-nowrap" href="#view"><i class="ci-eye"></i>{{ $value->luotxem }}</a>
			</div>
			<div class="blog-desc">{{ $value->tomtat }}</div>
			<div class="read-more text-capitalize">
				<a title="Click to view Read More" class="readmore btn-primary btn">read more</a>
			</div>
		</div>
		</div>
	</div>
	</div>	
	</div>
				</div>
				
			</div>
		</div>
	</div>
	@endforeach
@endsection