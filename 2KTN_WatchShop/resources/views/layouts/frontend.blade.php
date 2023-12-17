<!doctype html>
<html lang="en">
  <head>
  	<title>2KTN WatchShop</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/Customer/img/cartlon.png') }}">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,900" rel="stylesheet"> 
	
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">	
	<!-- Bootstrap core CSS -->
    <link href="{{ asset('public/Customer/vendor/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('public/Customer/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('public/Customer/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('public/Customer/css/owl-carousel.css') }}" rel="stylesheet">
	<link href="{{ asset('public/Customer/css/lightbox.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
  </head>

  <body class="index layout2">
  	
	<header class="header-area header-sticky text-center header2">
	<div class="header-main-sticky">
	
	<div class="header-main-head">
	
    <div class="header-main">
	<div class="container">
		<div class="header-left text-center mx-auto d-inline-block">
			<div class="logo">
				<a href="{{ route('frontend.home') }}"><img src="{{ asset('public/Customer/img/logos/logoCus.png') }}" alt="NatureCircle"></a>	
			</div>		
		</div>
		<div class="header-middle float-left">
		<div class="leftmenu">
            <button id="menu"></button>
          </div>
		  <div class="menu">
		<!-- Navbar -->
		<nav class="navbar navbar-expand-lg navbar-light d-sm-none d-xs-none d-lg-block navbar-full">
		
		<!-- Navbar brand -->
		<a class="navbar-brand text-uppercase d-none" href="#">Navbar</a>
		
		<!-- Collapse button -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2"
		aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>		</button>
		
		<!-- Collapsible content -->
		<div class="collapse navbar-collapse">
		
		<!-- Links -->
		<ul class="navbar-nav m-auto justify-content-center">
		<li class="nav-item dropdown active">
		<a class="nav-link text-uppercase" href="{{ route('frontend.home') }}">
			Trang Chủ
		  <span class="sr-only">(current)</span>        </a>
		</li>
		<li class="nav-item dropdown mega-dropdown">
		<a class="nav-link dropdown-toggle text-uppercase" href="category.html">Sản Phẩm</a>
		<div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-3 px-3">
		  <div class="row">
			<div class="col-md-12 col-xl-4 sub-menu mb-xl-0 mb-4">
			  <h6 class="sub-title text-uppercase font-weight-bold white-text">Variation 1</h6>
			  <!--Featured image-->
			  <ul class="list-unstyled">
				@foreach($menu_loaisanpham as $value)
				 <li>
				  <a class="menu-item pl-0" href="{{ route('frontend.sanpham.phanloai', ['tenloai_slug' => $value->tenloai_slug]) }}">
				  {{ $value-> tenloai }}</a></li>
				<li>
				@endforeach
			  </ul>
			</div>
			<div class="col-md-6 col-xl-4 sub-menu mb-0">
		
					<ul class="list-unstyled">
				<li>
					<span class="menu-banner"><img src="{{ asset('public/Customer/img/banner/menu-banner.jpg') }}" alt="menu-banner" /></span>                </li>
			  </ul>
			</div>
		  </div>
		</div>
		</li>
		<li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle text-uppercase" href="category.html">
			Tin Tức
		  <span class="sr-only">(current)</span>        </a>
		<div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-3 px-3">
			<div class="sub-menu mb-xl-0 mb-4">
			  <ul class="list-unstyled">
				<li>
				  <a class="menu-item pl-0" href="product-grid.html">
					product grid                </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="product-sticky-right.html">
				   sticky right                  </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="product-extended-layout.html">
					Extended layout                 </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="product-details.html">
					Default layout                </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="product-compact.html">
					compact layout           </a>                </li>
			  </ul>
			</div>
		</div>
		</li>
		<li class="nav-item dropdown">   
		<a class="nav-link dropdown-toggle text-uppercase" href="{{ route('frontend.lienhe') }}">Liên Hệ</a>
		
		</li>
		</ul>
		<!-- Links -->
		</div>
		<!-- Collapsible content -->
		</nav>
	</div>
		</div>    
		  
		 
		
		<div class="header-right d-flex d-xs-flex d-sm-flex justify-content-end float-right">
		<div class="search-wrapper"> 
			<a>
			<i class="material-icons search">search</i>
			<i class="material-icons close">close</i>			</a>
			<form autocomplete="off" action="/action_page.php" class="search-form">
			  <div class="autocomplete" style="width:300px;">
				<input id="myInput" type="text" name="myCountry" placeholder="Search here">
				<button type="button"><i class="material-icons">search</i></button>
			  </div>
			</form>
		</div>  
		<div class="user-info">
		<button type="button" class="btn">
		<i class="material-icons">perm_identity</i>		</button>
		<div id="user-dropdown" class="user-menu">
		<div>
			@guest
				<div><a href="my-account.html" class="text-capitalize">Chưa Đăng Nhập</a></div>
				<li><hr class="dropdown-divider"></li>
				@if (Route::has('register'))
				<div><a href="#" class="modal-view button" data-toggle="modal" data-target="#modalRegisterForm">Đăng Ký</a></div>
				@endif
				<div><a href="{{ route('user.dangnhap') }}" class="modal-view button" data-toggle="modal" data-target="#modalLoginForm">Đăng Nhập</a></div>
				
			@else
				<div><a href="my-account.html" class="text-capitalize">{{ Auth::user()->name }}</a></div>
				<li><hr class="dropdown-divider"></li>
				<div><a href="{{ route('logout') }}" class="modal-view button" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Đăng Xuất</a>
					<form id="logout-form" action="{{ route('logout') }}" method="post" class="d-none">
						@csrf
					</form>
				</div>
			@endguest
		</div>
		</div>
		</div>
		<div class="cart-wrapper">
			<button type="button" class="btn">
				<i class="material-icons">shopping_cart</i>
				<span class="ttcount">2</span>			</button>
			<div id="cart-dropdown" class="cart-menu">
                <ul class="w-100 float-left">
                  <li>
                    <table class="table table-striped">
                      <tbody>
                        <tr>
                          <td class="text-center"><a href="#"><img src="{{ asset('public/Customer/img/products/dongho1.jpg') }}" alt="01" title="01"></a></td>
                          <td class="text-left product-name"><a href="#">aliquam quaerat voluptatem</a> 						  	
						  <div class="quantity float-left w-100">
                             <span class="cart-qty">1 × </span>
							<span class="text-left price"> $20.00</span>						    </div>                          </td>
                          <td class="text-center close"><a class="close-cart"><i class="material-icons">close</i></a></td>
                        </tr>
                      </tbody>
                    </table>
                  </li>
                  <li>
                    <table class="table price mb-30">
                      <tbody>
                        <tr>
                          <td class="text-left"><strong>Total</strong></td>
                          <td class="text-right"><strong>$2,122.00</strong></td>
                        </tr>
                      </tbody>
                    </table>
                  </li>
                  <li class="buttons w-100 float-left">
                    <form action="cart_page.html">
                      <input class="btn pull-left mt_10 btn-primary btn-rounded w-100" value="View cart" type="submit">
                    </form>
                    <form action="checkout_page.html">
                      <input class="btn pull-right mt_10 btn-primary btn-rounded w-100" value="Checkout" type="submit">
                    </form>
                  </li>
                </ul>
          </div>
		</div>
		</div>
	</div>
	</div> 
	
	</div>
	</div>
	</header>
    <main>
		@yield('content')
    </main>

    <!-- Footer -->
	<div class="block-newsletter"> 
				
<footer class="page-footer font-small footer-default">
    <div class="container text-center text-md-left">
      <div class="row">
        <div class="col-md-3 footer-cms footer-column">
			<div class="ttcmsfooter">
              <div class="footer-logo"><img src="{{ asset('public/Customer/img/logos/logoCus.png') }}" alt="footer-logo"></div>
              <div class="footer-desc">Welcome to the watchs shop </div>
			  </div>
		</div>
        <div class="col-md-3 footer-column">
		<div class="title">
          <a href="#company" class="font-weight-normal text-capitalize mb-10" data-toggle="collapse" aria-expanded="false">CÔNG TY</a>		  </div>
          <ul id="company" class="list-unstyled collapse">
            <li>
              <a href="#">Tìm kiếm</a>            </li>
            <li>
              <a href="#">Sản phẩm mới</a>            </li>
            <li>
              <a href="category.html">Bộ sưu tập nổi bật</a>            </li>
            <li>
              <a href="wishlist.html">Danh sách yêu thích</a>            </li>
			 <li>
	 		 <a href="blog-details.html">Thông tin cá nhân</a>		    </li>         
          </ul>
        </div>
        <div class="col-md-3 footer-column">
			<div class="title">
          <a href="#products" class="font-weight-normal text-capitalize mb-10" data-toggle="collapse" aria-expanded="false">Sản phẩm</a>		  </div>
          <ul id="products" class="list-unstyled collapse">
            <li>
              <a href="blog-details.html">Tin tức</a>            </li>
            <li>
              <a href="about-us.html">Thông tin về chúng tôi</a>            </li>
            <li>
              <a href="contact-us.html">Liên hệ</a>            </li>
            <li>
              <a href="my-account.html">Tài khoản của tôi</a>            </li>
 <li>
	  <a href="contact-us.html">Địa chỉ</a>            </li>         
          </ul>

        </div>
		
        <div class="col-md-3 footer-column">
		<div class="title">
          <a href="#information" class="font-weight-normal text-capitalize mb-10" data-toggle="collapse" aria-expanded="false">Thông tin shop</a>		  </div>
          <ul id="information" class="list-unstyled collapse">
            <li class="contact-detail links">
              <span class="address">
			  		<span class="icon"><i class="material-icons">location_on</i></span>
					<span class="data"> 69 Trần Hưng Đạo, Long Xuyên, An Giang</span>			  </span>            </li>
            <li class="links">
               <span class="contact">
			  		<span class="icon"><i class="material-icons">phone</i></span>
					<span class="data"><a href="tel:(99)55669999">+84 0123 456 888</a></span>			  </span>            </li>
            <li class="links">
               <span class="email">
			  		<span class="icon"><i class="material-icons">email</i></span>
					<span class="data"><a href="mailto:demo.store@gmail.com">demo.store@gmail.com</a></span>  </span>          </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Copyright -->
	<div class="footer-bottom-wrap">
		<div class="container">
		<div class="row">
		<div class="footer-copyright text-center py-3">
             Bản quyền &copy; {{ date('Y') }} - {{ config('app.name', 'Laravel') }}™
		</div>
		</div>
    </div>
	</div>
         <a href="#" id="goToTop" title="Back to top" class="btn-primary"><i class="material-icons arrow-up">keyboard_arrow_up</i></a> 


  </footer>
  <!-- Footer -->
  <div class="alert text-center cookiealert" role="alert">
    <b>Do you like cookies?</b> We use cookies to ensure you get the best experience on our website. <a href="https://cookiesandyou.com/">Learn more</a>

    <button type="button" class="btn btn-primary btn-sm acceptcookies" aria-label="Close">
        I agree
    </button>
</div>
  
  <!-- Register modal -->
<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header text-center">
	<h4 class="modal-title w-100 font-weight-medium text-left">Sign up</h4>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	  <span aria-hidden="true">&times;</span>
	</button>
  </div>
  <div class="modal-body mx-3">
	<div class="md-form mb-4">
	  <input type="text" id="RegisterForm-name" class="form-control validate" placeholder="Your name">
	</div>
	<div class="md-form mb-4">
	  <input type="email" id="RegisterForm-email" class="form-control validate" placeholder="Your email">
	</div>
	<div class="md-form mb-4">
	  <input type="password" id="RegisterForm-pass" class="form-control validate" placeholder="Your password">
	</div>
	<div class="checkbox-link d-flex justify-content-between">
	<div class="left-col">
		<input id="remember-me" type="checkbox"><label for="remember_me">Remember Me</label>
	</div>
	<div class="right-col"><a href="#">Forget Password?</a></div>
</div>
  </div>
  
  <div class="modal-footer d-flex justify-content-center">
	<button class="btn btn-primary">Sign up</button>
  </div>
</div>
</div>
</div>

@include('user.dangnhap')

<!-- product_view modal -->
<div class="modal fade product_view" id="product_view" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			 <h4 class="modal-title w-100w-100w-100 font-weight-bold d-none">Quick view</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	  <span aria-hidden="true">×</span>
	</button>
		</div>
		<div class="modal-body">
			<div class="row">
				<div class="col-md-6 left-columm">
						<div class="product-large-image tab-content">
						<div class="tab-pane active" id="product-1" role="tabpanel" aria-labelledby="product-tab-1">
							<div class="single-img img-full">
								<a href="img/products/dongho1.jpg"><img src="{{ asset('public/Customer/img/products/dongho1.jpg') }}" class="img-fluid" alt=""></a>
							</div>
						</div>
						<div class="tab-pane" id="product-2" role="tabpanel" aria-labelledby="product-tab-2">
							<div class="single-img">
								<a href="img/products/dongho2.jpg"><img src="{{ asset('public/Customer/img/products/dongho2.jpg') }}" class="img-fluid" alt=""></a>
							</div>
						</div>
						<div class="tab-pane" id="product-3" role="tabpanel" aria-labelledby="product-tab-3">
							<div class="single-img">
								<a href="img/products/03.jpg"><img src="{{ asset('public/Customer/img/products/03.jpg') }}" class="img-fluid" alt=""></a>
							</div>
						</div>
						<div class="tab-pane" id="product-4" role="tabpanel" aria-labelledby="product-tab-4">
							<div class="single-img">
								<a href="img/products/04.jpg"><img src="{{ asset('public/Customer/img/products/04.jpg') }}" class="img-fluid" alt=""></a>
							</div>
						</div>
						<div class="tab-pane" id="product-5" role="tabpanel" aria-labelledby="product-tab-5">
							<div class="single-img">
								<a href="img/products/05.jpg"><img src="{{ asset('public/Customer/img/products/05.jpg') }}" class="img-fluid" alt=""></a>
							</div>
						</div>
				</div>
				<div class="small-image-list float-left w-100"> 
                                <div class="nav-add small-image-slider-single-product-tabstyle-3 owl-carousel" role="tablist">
                                    <div class="single-small-image img-full">
                                        <a data-toggle="tab" id="product-tab-1" href="#product-1" class="img active"><img src="{{ asset('public/Customer/img/products/dongho1.jpg') }}" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="single-small-image img-full">
                                        <a data-toggle="tab" id="product-tab-2" href="#product-2" class="img"><img src="{{ asset('public/Customer/img/products/02.jpg') }}" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="single-small-image img-full">
                                        <a data-toggle="tab" id="product-tab-3" href="#product-3" class="img"><img src="{{ asset('public/Customer/img/products/03.jpg') }}" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="single-small-image img-full">
                                        <a data-toggle="tab" id="product-tab-4" href="#product-4" class="img"><img src="{{ asset('public/Customer/img/products/04.jpg') }}" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="single-small-image img-full">
                                        <a data-toggle="tab" id="product-tab-5" href="#product-5" class="img"><img src="{{ asset('public/Customer/img/products/05.jpg') }}" class="img-fluid" alt=""></a>
                                    </div>
                                </div>
                            </div>
				</div>
				<div class="col-md-6 product_content">
					<h4 class="product-title text-capitalize">aliquam quaerat voluptatem</h4>
					<div class="rating">
					<div class="product-ratings d-inline-block align-middle">
																				<span class="fa fa-stack"><i class="material-icons">star</i></span>
									   <span class="fa fa-stack"><i class="material-icons">star</i></span>
									   <span class="fa fa-stack"><i class="material-icons">star</i></span>
									   <span class="fa fa-stack"><i class="material-icons off">star</i></span>
									   <span class="fa fa-stack"><i class="material-icons off">star</i></span>			</div>							</div>
					<span class="description float-left w-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
					<h3 class="price float-left w-100"><span class="regular-price align-middle">$75.00</span><span class="old-price align-middle">$60.00</span></h3>
					
					<div class="product-variants float-left w-100">
						<div class="col-md-4 col-sm-6 col-xs-12 size-options d-flex align-items-center">
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
                                                <a class="tt-pink" href="#" title="Pink"></a>                                            </li>
                                            <li>
                                                <a class="tt-blue" href="#" title="Blue"></a>                                            </li>
                                            <li>
                                                <a class="tt-yellow" href="#" title="Yellow"></a>                                            </li>
                                        </ul>
                                    </div>
					</div>
					<div class="btn-cart d-flex align-items-center float-left w-100">
						<h5>qty:</h5>
						<input value="1" type="number">
						<button type="button" class="btn btn-primary"><i class="material-icons">shopping_cart</i> Add To Cart</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<!-- cart-pop modal -->
<div class="modal fade" id="cart-pop" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header alert-success">
			 <h4 class="modal-title w-100w-100w-100">Product successfully added to your shopping cart</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	  <span aria-hidden="true">×</span>
	</button>
		</div>
		<div class="modal-body">
			<div class="row">
			<div class="col-md-6 divide-right">
			<div class="row">
				<div class="col-md-5 col-sm-4 col-xs-12 product-img float-left">
					<img src="{{ asset('public/Customer/img/products/dongho1.jpg') }}" class="img-responsive" alt="01">
				</div>
				<div class="col-md-7 col-sm-8 col-xs-12 product-desc float-left">
					<h4 class="product-title text-capitalize">aliquam quaerat voluptatem</h4>
					<div class="rating">
					<div class="product-ratings d-inline-block align-middle">
					<span class="fa fa-stack"><i class="material-icons">star</i></span>
				   <span class="fa fa-stack"><i class="material-icons">star</i></span>
				   <span class="fa fa-stack"><i class="material-icons">star</i></span>
				   <span class="fa fa-stack"><i class="material-icons off">star</i></span>
				   <span class="fa fa-stack"><i class="material-icons off">star</i></span></div></div>
					<h3 class="price float-left w-100"><span class="regular-price align-middle">$75.00</span><span class="old-price align-middle">$60.00</span></h3>
				</div>
			</div>
			</div>
				<div class="col-md-6 divide-left">
					<p class="cart-products-count">There are 2 items in your cart.</p>
					<p class="total-products float-left w-100">
						<strong>Total products:</strong> $150.00
					</p>
					<p class="shipping float-left w-100">
						<strong>Total shipping:</strong> free
					</p>
					<p class="total-price float-left w-100">
						<strong>Total:</strong> $150.00(tax incl.)
					</p>
					<div class="cart-content-btn float-left w-100">
					<form action="#">
                      <input class="btn pull-right mt_10 btn-primary" value="Continue shopping" type="submit">
                    </form>
					<form action="checkout_page.html">
                      <input class="btn pull-right mt_10 btn-secondary" value="Proceed to checkout" type="submit">
                    </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<div class="compare-wrapper float-left w-100">
	<div class="compare-inner d-flex align-items-center p-20">
		<span class="close"><i class='material-icons'>
  close
</i></span>
		<div class="col-xs-12 col-sm-2 col-md-3 float-left d-flex align-items-center flex-column compare-left">
		<h2>compare products</h2>
		<div class="compare-btn">show all</div>
		</div>
		<div class="col-xs-12 col-sm-10 col-md-9 d-flex float-left align-items-center compare-right">
			<div class="compare-close-btn"></div>
			<div class="compare-products d-flex col-sm-7 col-lg-5">
			<div class="row">
				<div class="single-item col-sm-4 col-xs-4">
					<div class="remove"></div>
					<div class="image"><img src="{{ asset('public/Customer/img/products/dongho1.jpg') }}" class="img-fluid" alt=""></div>
				</div>
				<div class="single-item col-sm-4 col-xs-4">
					<div class="remove"></div>
					<div class="image"><img src="{{ asset('public/Customer/img/products/02.jpg') }}" class="img-fluid" alt=""></div>
				</div>
				<div class="single-item col-sm-4 col-xs-4">
					<div class="remove"></div>
					<div class="image"><img src="{{ asset('public/Customer/img/products/03.jpg') }}" class="img-fluid" alt=""></div>
				</div>
			</div>
			</div>
			<div class="buttons col-sm-5 col-lg-2">
				<div class="clear-btn btn btn-primary float-left w-100 mb-15">clear</div>
				<a href="compare.html" class="compare-btn btn btn-primary float-left w-100">compare</a>
			</div>
		</div>
	</div>
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
		<script src="{{ asset('public/Customer/js/jquery.min.js') }}"></script>
		<script src="{{ asset('public/Customer/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('public/Customer/js/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('public/Customer/js/custom.js') }}"></script>
		<script src="{{ asset('public/Customer/js/parallax.js') }}"></script>
		<script src="{{ asset('public/Customer/js/lightbox-2.6.min.js') }}"></script>
		<script src="{{ asset('public/Customer/js/ResizeSensor.min.js') }}"></script>
		<script src="{{ asset('public/Customer/js/theia-sticky-sidebar.min.js') }}"></script>
		<script src="{{ asset('public/Customer/js/inview.js') }}"></script>
		<script src="{{ asset('public/Customer/js/cookiealert.js') }}"></script>
		<script src="{{ asset('public/Customer/js/jquery.countdown.min.js') }}"></script>
		<script src="{{ asset('public/Customer/js/masonry.pkgd.min.js') }}"></script>
		<script src="{{ asset('public/Customer/js/imagesloaded.pkgd.min.js') }}"></script>
		<script src="{{ asset('public/Customer/js/jquery.zoom.min.js') }}"></script>
		<script src="{{ asset('public/Customer/js/jquery.lazy.min.js') }}"></script>

		</body>
</html>