@extends('layouts.frontend')

@section('title', 'Trang chủ')

@section('content')
	<!-- Main jumbotron for a primary marketing message or call to action -->
	  <div class="slider-wrapper my-40 my-sm-25 float-left w-100">
		<div class="ttloading-bg"></div>
	  	<div class="slider slider-for owl-carousel">
			<div>
				<a href="#">
					<img src="{{ asset('public/Customer/img/slider/sample-07.png') }}" alt=""/>
				</a>
				<div class="slider-content-wrap center effect_top">
				  <div class="slider-title mb-20 text-capitalize float-left w-100">our specials</div>
				  <div class="slider-subtitle mb-50 text-capitalize float-left w-100">fashion trend</div>
				  <div class="slider-button text-uppercase float-left w-100"><a href=" #">Shop Now</a></div>
				</div>
			</div>
			<div>
				<a href="#">
					<img src="{{ asset('public/Customer/img/slider/sample-08.png') }}" alt=""/>
				</a>
				<div class="slider-content-wrap center effect_bottom">
				  <div class="slider-title mb-20 text-capitalize float-left w-100">about us</div>
				  <div class="slider-subtitle mb-50 text-capitalize float-left w-100">fashion style</div>
				  <div class="slider-button text-uppercase float-left w-100"><a href=" #">Shop Now</a></div>
				</div>
			</div>
	  </div>
	  </div>
      
			<div class="main-content">
			<div id="category-products" class="category-products">
			<div class="container">
				<div class="inner-category owl-carousel">
					<div class="ttproduct-cat-item">
						<div class="tt_cat_content">
							<div class="category-img left-block">
								<a href="#" class="ttcategoy-image">
									<img src="{{ asset('public/Customer/img/category/01.jpg') }}" alt="collection-img"/>
								</a>
							</div>
							<div class="description right-block text-center">
								<div class="title text-capitalize mb-10">women</div>
								<div class="desc">Lorem Ipsum is simply dummy text</div>
							</div>
						</div>
					</div>
					<div class="ttproduct-cat-item">
						<div class="tt_cat_content">
							<div class="category-img left-block">
								<a href="#" class="ttcategoy-image">
									<img src="{{ asset('public/Customer/img/category/02.jpg') }}" alt="collection-img"/>
								</a>
							</div>
							<div class="description right-block text-center">
								<div class="title text-capitalize mb-10">men</div>
								<div class="desc">Lorem Ipsum is simply dummy text</div>
							</div>
						</div>
					</div>
					<div class="ttproduct-cat-item">
						<div class="tt_cat_content">
							<div class="category-img left-block">
								<a href="#" class="ttcategoy-image">
									<img src="{{ asset('public/Customer/img/category/03.jpg') }}" alt="collection-img"/>
								</a>
							</div>
							<div class="description right-block text-center">
								<div class="title text-capitalize mb-10">kids</div>
								<div class="desc">Lorem Ipsum is simply dummy text</div>
							</div>
						</div>
					</div>
					<div class="ttproduct-cat-item">
						<div class="tt_cat_content">
							<div class="category-img left-block">
								<a href="#" class="ttcategoy-image">
									<img src="{{ asset('public/Customer/img/category/04.jpg') }}" alt="collection-img"/>
								</a>
							</div>
							<div class="description right-block text-center">
								<div class="title text-capitalize mb-10">girls</div>
								<div class="desc">Lorem Ipsum is simply dummy text</div>
							</div>
						</div>
					</div>
								<div class="ttproduct-cat-item">
						<div class="tt_cat_content">
							<div class="category-img left-block">
								<a href="#" class="ttcategoy-image">
									<img src="{{ asset('public/Customer/img/category/01.jpg') }}" alt="collection-img"/>
								</a>
							</div>
							<div class="description right-block text-center">
								<div class="title text-capitalize mb-10">fashion</div>
								<div class="desc">Lorem Ipsum is simply dummy text</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			</div>
          	
			<div id="main"> 
			<div id="hometab" class="home-tab my-40 my-sm-25 bottom-to-top hb-animate-element">
			
			
			<div id="ttspecial" class="ttspecial my-40 bottom-to-top hb-animate-element">
			<div class="container">
					<div class="row">
							<div class="tt-title d-inline-block float-none w-100 text-center">special products</div>
							<div class="ttspecial-content products grid owl-carousel">
							@foreach($sanpham as $sp)
							<div class="product-layouts">
								<div class="product-thumb">
									<div class="image fade-hover">
										<a href="#">
											<img src="{{ env('APP_URL') . '/storage/app/' . $sp->hinhanh }}" alt="06"/>	
										 </a>		
										<div class="button-wrapper">								
										<div class="button-group text-center">
												<button type="button" class="btn btn-primary btn-cart" data-toggle="modal" data-target="#product_view"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
												<a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
												<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
												<button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
											</div>
												</div>		
								  </div>
									<div class="thumb-description">
										<div class="caption">
											<h4 class="product-title text-capitalize"><a href="product-details.html">{{ $sp->tensanpham }}</a></h4>
										</div>
										<div class="rating">
											<div class="product-ratings d-inline-block align-middle">
												<span class="fa fa-stack"><i class="material-icons">star</i></span>
											   <span class="fa fa-stack"><i class="material-icons">star</i></span>
											   <span class="fa fa-stack"><i class="material-icons">star</i></span>
											   <span class="fa fa-stack"><i class="material-icons off">star</i></span>
											   <span class="fa fa-stack"><i class="material-icons off">star</i></span>									
											   </div>
								      </div>
										<div class="price">
											<div class="regular-price">{{ number_format($sp->dongia, 0, ',', '.') }}<small>VNĐ</small></div>
										</div>
									</div>
								</div>
							</div>
							@endforeach
							</div>
					</div>
			</div>
			</div>
			
			
			<div id="ttsmartblog" class="my-40 my-sm-25 bottom-to-top hb-animate-element">
				<div class="tt-title d-inline-block float-none w-100 text-center text-capitalize">latest news</div>
				<div class="container">
				<div class="row">
				<div class="smartblog-content owl-carousel">
					<div class="ttblog">
					<div class="item">
						<div class="ttblog_image_holder">
							<a href="#">
								<img src="{{ asset('public/Customer/img/banner/blog-01.jpg') }}" alt="blog-01">							</a>
							<span class="blogicons">
                                        <a title="Click to view Full Image" href="img/banner/blog-01.jpg" data-lightbox="example-set" class="icon zoom"><i class="material-icons">search</i></a></span></div>
						<div class="blog-content-wrap float-left w-100">
						<div class="blog_inner">
							<h4 class="blog-title"><span>Share the Love</span></h4>
							<div class="blog-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
							<div class="read-more text-capitalize">
								<a title="Click to view Read More" class="readmore">read more</a>							</div>
						</div>
						</div>
					</div>
					</div>
					<div class="ttblog">
					<div class="item">
						<div class="ttblog_image_holder">
							<a href="#">
								<img src="{{ asset('public/Customer/img/banner/blog-02.jpg') }}" alt="blog-02">							</a>
								<span class="blogicons">
                                        <a title="Click to view Full Image" href="img/banner/blog-02.jpg" data-lightbox="example-set" class="icon zoom"><i class="material-icons">search</i></a>							</span>					  </div>
						<div class="blog-content-wrap float-left w-100">
						<div class="blog_inner">
							<h4 class="blog-title"><span>Upon of seasons earth</span></h4>
							<div class="blog-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
							<div class="read-more text-capitalize">
								<a title="Click to view Read More" class="readmore">read more</a>							</div>
						</div>
						</div>
					</div>
					</div>
					<div class="ttblog">
					<div class="item">
						<div class="ttblog_image_holder">
							<a href="#">
								<img src="{{ asset('public/Customer/img/banner/blog-03.jpg') }}" alt="blog-03">							</a>
																<span class="blogicons">
                                        <a title="Click to view Full Image" href="img/banner/blog-03.jpg" data-lightbox="example-set" class="icon zoom"><i class="material-icons">search</i></a>							</span>					  </div>
						<div class="blog-content-wrap float-left w-100">
						<div class="blog_inner">
							<h4 class="blog-title"><span>From Now we are certified web</span></h4>
							<div class="blog-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
							<div class="read-more text-capitalize">
								<a title="Click to view Read More" class="readmore">read more</a>							</div>
						</div>
						</div>
					</div>
					</div>
					<div class="ttblog">
					<div class="item">
						<div class="ttblog_image_holder">
							<a href="#">
								<img src="{{ asset('public/Customer/img/banner/blog-04.jpg') }}" alt="blog-04">							</a>
								<span class="blogicons">
                                        <a title="Click to view Full Image" href="img/banner/blog-04.jpg" data-lightbox="example-set" class="icon zoom"><i class="material-icons">search</i></a>							</span>					  </div>
						<div class="blog-content-wrap float-left w-100">
						<div class="blog_inner">
							<h4 class="blog-title"><span>Viderer voluptatum te eum</span></h4>
							<div class="blog-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
							<div class="read-more text-capitalize">
								<a title="Click to view Read More" class="readmore">read more</a>							</div>
						</div>
						</div>
					</div>
					</div>
					<div class="ttblog">
					<div class="item">
						<div class="ttblog_image_holder">
							<a href="#">
								<img src="{{ asset('public/Customer/img/banner/blog-05.jpg') }}" alt="blog-05">							</a>
								<span class="blogicons">
                                        <a title="Click to view Full Image" href="img/banner/blog-05.jpg" data-lightbox="example-set" class="icon zoom"><i class="material-icons">search</i></a>							</span>					  </div>
						<div class="blog-content-wrap float-left w-100">
						<div class="blog_inner">
							<h4 class="blog-title"><span>Share the Love</span></h4>
							<div class="blog-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
							<div class="read-more text-capitalize">
								<a title="Click to view Read More" class="readmore">read more</a>							</div>
						</div>
						</div>
					</div>
					</div>
				</div>
				</div>
				</div>
			</div>
			<div id="ttbrandlogo" class="my-40 my-sm-25 bottom-to-top hb-animate-element">
				<div class="container">
					<div class="tt-brand owl-carousel">
						@foreach ($hangsanxuat as $hsx)
						<div class="item">
							<a href="#"><img src="{{ env('APP_URL') . '/storage/app/' . $hsx->hinhanh }}" alt="brand-logo-01"></a>
						</div>
						@endforeach
					</div>
				</div>
			</div>	
		</div> 
	</div>
@endsection
