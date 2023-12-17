@extends('layouts.frontend')

@section('title', 'Sản phẩm chi tiết')

@section('content')
	<nav aria-label="breadcrumb" class="w-100 float-left">
  <ol class="breadcrumb parallax justify-content-center" data-source-url="img/banner/parallax.jpg" style="background-image: url(&quot;img/banner/parallax.jpg&quot;); background-position: 50% 0.809717%;">
    <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">Trang chủ</a></li>
    <li class="breadcrumb-item" href="#">Sản Phẩm</li>
	<li class="breadcrumb-item active" aria-current="page">{{ $sanpham->tensanpham }}</li>
  </ol>
</nav>
	<div class="product-deatils-section float-left w-100">
		<div class="container">
			<div class="row">
				<div class="left-columm col-lg-5 col-md-5">
					<div class="product-large-image tab-content">
						<div class="tab-pane active" id="product-01" role="tabpanel" aria-labelledby="product-tab-01">
							<div class="single-img img-full">
								<a href="img/products/01.jpg"><img src="img/products/01.jpg" class="img-fluid zoomImg" alt=""></a>
							</div>
						</div>
					</div>
				</div>
				<div class="right-columm col-lg-7 col-md-7">
					<div class="product-information">
					<h4 class="product-title text-capitalize float-left w-100"><a href="product-details.html" class="float-left w-100">aliquam quaerat voluptatem</a></h4>
					<div class="description">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis viverra purus, non viverra nulla. Sed vehicula libero eu lectus eleifend volutpat. Sed et placerat arcu. Proin mi leo, interdum eu tortor at, euismod gravida velit. Fusce non enim lectus. Duis euismod, lorem vitae pharetra rhoncus, ligula risus elementum nunc, at interdum eros nunc eget augue. Donec dapibus nec diam ut tempor. Duis malesuada neque turpis, ut congue ipsum euismod eget. Sed egestas ipsum enim, sed semper magna auctor non. 
					</div>
					<div class="rating">
											<div class="product-ratings d-inline-block align-middle">
												<span class="fa fa-stack"><i class="material-icons">star</i></span>
											   <span class="fa fa-stack"><i class="material-icons">star</i></span>
											   <span class="fa fa-stack"><i class="material-icons">star</i></span>
											   <span class="fa fa-stack"><i class="material-icons off">star</i></span>
											   <span class="fa fa-stack"><i class="material-icons off">star</i></span>
											</div>
											<a href="#" class="review-down">(customer reviews)</a>
												
											</div>
											<ul class="countdown countdown1 float-left w-100">
										  <li><span class="days">00</span><p class="days_text">Days</p></li>
										  <li><span class="hours">00</span><p class="hours_text">Hours</p></li>
										  <li><span class="minutes">00</span><p class="minutes_text">Minutes</p></li>
										  <li><span class="seconds">00</span><p class="seconds_text">Seconds</p></li>
										</ul>
																<div class="price float-left w-100 d-flex">
												<div class="regular-price">$100.00</div>
												<div class="old-price">$150.00</div>
											</div>
											<div class="product-variants float-left w-100">
						<div class="col-md-3 col-sm-6 col-xs-12 size-options d-flex align-items-center">
											<h5>Size:</h5>

								<select class="form-control" name="select">
											<option value="" selected="">Size</option>
											<option value="black">Medium</option>
											<option value="white">Large</option>
											<option value="gold">Small</option>
											<option value="rose gold">Extra large</option>
								</select>
						</div>
						<div class="color-option d-flex align-items-center">
                                        <h5>color :</h5>
                                        <ul class="color-categories">
                                            <li class="active">
                                                <a class="tt-pink" href="#" title="Pink"></a>
                                            </li>
                                            <li>
                                                <a class="tt-blue" href="#" title="Blue"></a>
                                            </li>
                                            <li>
                                                <a class="tt-yellow" href="#" title="Yellow"></a>
                                            </li>
                                        </ul>
                                    </div>
					</div>
											<div class="btn-cart d-flex align-items-center float-left w-100"> 
						<h5>qty:</h5>
						<input value="1" type="number">
						<button type="button" class="btn btn-primary btn-cart m-0" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i> Add To Cart</button>
					</div>
					
					</div>

				</div>
			</div>
		</div>
	</div>
	<div class="product-tab-area float-left w-100">
	<div class="container">
					<div class="tabs">
					<ul class="nav nav-tabs justify-content-start">
						<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#product-tab1" id="tab1"><div class="tab-title">Description</div></a></li>
						<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#product-tab2" id="tab2"><div class="tab-title">Reviews (2)</div></a></li>
					</ul>
				</div>
					<div class="tab-content float-left w-100">
					  <div class="tab-pane active" id="product-tab1" role="tabpanel" aria-labelledby="tab1">
						  <div class="description">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis viverra purus, non viverra nulla. Sed vehicula libero eu lectus eleifend volutpat. Sed et placerat arcu. Proin mi leo, interdum eu tortor at, euismod gravida velit. Fusce non enim lectus. Duis euismod, lorem vitae pharetra rhoncus, ligula risus elementum nunc, at interdum eros nunc eget augue. Donec dapibus nec diam ut tempor. Duis malesuada neque turpis, ut congue ipsum euismod eget. Sed egestas ipsum enim, sed semper magna auctor non. Praesent risus nunc, ultricies vel velit nec, fringilla venenatis sem. Nunc condimentum, elit sed posuere accumsan, mauris nisl ornare metus, nec hendrerit quam velit ut nibh. Vivamus sodales neque vel sodales porta. Mauris hendrerit felis in mi auctor posuere. Mauris a consequat sapien, eget condimentum risus. Curabitur iaculis lorem non pretium varius. In hac habitasse platea dictumst.
						  </div>
					  </div>
					  <div class="tab-pane" id="product-tab2" role="tabpanel" aria-labelledby="tab2">
					  	<div class="reviews-tab  float-left w-100">
							<div class="ttreview-tab float-left w-100 p-30">
							  <h2>Customer Reviews</h2>
							  <div class="rating float-left w-100">
													<div class="product-ratings d-inline-block align-middle">
														<span class="fa fa-stack"><i class="material-icons">star</i></span>
													   <span class="fa fa-stack"><i class="material-icons">star</i></span>
													   <span class="fa fa-stack"><i class="material-icons">star</i></span>
													   <span class="fa fa-stack"><i class="material-icons off">star</i></span>
													   <span class="fa fa-stack"><i class="material-icons off">star</i></span>
													</div>
													</div>
							  <div class="review-title float-left w-100"><span class="user">admin</span> <span class="date">– February 14, 2019</span></div>
							  <div class="review-desc  float-left w-100">Aliquam at ipsum tellus. Donec arcu est, posuere quis orci vel, commodo cursus augue. </div>
							</div>
							  <form action="#" class="rating-form float-left w-100">
                                    <h5>Add your rating</h5>
                                   <div class="rating">
													<div class='rating-stars text-left'>
    <ul id='stars'>
      <li class='star' title='Poor' data-value='1'>
   <i class="material-icons">star</i>
      </li>
      <li class='star' title='Fair' data-value='2'>
   <i class="material-icons">star</i>
      </li>
      <li class='star' title='Good' data-value='3'>
   <i class="material-icons">star</i>
      </li>
      <li class='star' title='Excellent' data-value='4'>
   <i class="material-icons">star</i>
      </li>
      <li class='star' title='WOW!!!' data-value='5'>
   <i class="material-icons">star</i>
      </li>
    </ul>
  </div>
   <div class='success-box'>
    <div class='clearfix'></div>
    <div class='text-message text-success'></div>
    <div class='clearfix'></div>
  </div>
													</div>
													<div class="row d-block">
													
													<div class="col-sm-6 float-left form-group">
									 <label>Name <span class="required">*</span></label>
                                    <input type="text" placeholder="" required="">
									</div>
									<div class="col-sm-6 float-left form-group">
									 <label>Email <span class="required">*</span></label>
                                    <input type="email" placeholder="" id="r-email" required>
									</div>
									<div class="col-sm-12 float-left form-group">
									 <label for="r-textarea">Your Review</label>
                                    <textarea name="review" id="r-textarea" cols="30" rows="10" class="w-100"></textarea>
									</div>
									</div>
                                   <input type="submit" class="btn btn-primary submit" value="Submit Review">
                                </form>
							</div>
							
					</div>
	</div>
	</div>
	</div>
@endsection