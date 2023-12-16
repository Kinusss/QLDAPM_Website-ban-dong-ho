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
				<a href="index.html"><img src="{{ asset('public/Customer/img/logos/logoCus.png') }}" alt="NatureCircle"></a>	
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
		<a class="nav-link dropdown-toggle text-uppercase" href="category.html">
			Trang Chủ
		  <span class="sr-only">(current)</span>        </a>
		<div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-3 px-3">
			<div class="sub-menu mb-xl-0 mb-4">
			  <ul class="list-unstyled">
				<li>
				  <a class="menu-item pl-0" href="index.html">
					Home 1                  </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="index2.html">
				   Home 2                  </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="index3.html">
					Home 3                 </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="index4.html">
					Home 4                  </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="index5.html">
					Home 5                  </a>                </li>
			  </ul>
			</div>
		</div>
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
				  <a class="menu-item pl-0" href="{{ route('frontend.sanpham.phanloai', ['tenloai_slug' => $lsp->tenloai_slug]) }}">
				  {{ $value-> tenloai }}                </a>                </li>
				<li>
				@endforeach
			  </ul>
			</div>
			<div class="col-md-6 col-xl-4 sub-menu mb-md-0 mb-4">
			  <h6 class="sub-title text-uppercase font-weight-bold white-text">Variation 2</h6>
				<ul class="list-unstyled">
				<li>
				  <a class="menu-item pl-0" href="category-5-col.html">
					5 columns mode                 </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="category-6-col.html">
				   6 columns mode                     </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="category-7-col.html">
				   7 columns mode                     </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="category-8-col.html">
				   8 columns mode                 </a>                </li>
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
		<a class="nav-link dropdown-toggle text-uppercase" href="category.html">Liên Hệ</a>
		<div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-3 px-3">
			<div class="sub-menu">
			  <h6 class="sub-title text-uppercase font-weight-bold white-text d-none">Featured</h6>
			<ul class="list-unstyled">
				  <li>
				  <a class="menu-item pl-0" href="blog-2-column.html">
					blog 2 column                  </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="blog-3-column.html">
				   blog 3 column                  </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="blog-2-column-masonary.html">
				   blog masonary                 </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="blog-list.html">
					blog list                  </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="blog-details.html">
				   blog details                  </a>                </li>
			  </ul>
			</div>
		</div>
		</li>
		</ul>
		<!-- Links -->
		</div>
		<!-- Collapsible content -->
		</nav>
		<!-- Navbar -->
		<nav class="navbar navbar-expand-lg navbar-dark d-lg-none navbar-responsive">
		
		<!-- Navbar brand -->
		<a class="navbar-brand text-uppercase d-none" href="#">Navbar</a>
		
		<!-- Collapse button -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2"
		aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"><i class='material-icons'>sort</i></span>		</button>
		
		<!-- Collapsible content -->
		<div class="collapse navbar-collapse" id="navbarSupportedContent2">
		
		<!-- Links -->
		<ul class="navbar-nav m-auto justify-content-center">
		
		<!-- Features -->
		<li class="nav-item dropdown active">
		<a class="nav-link dropdown-toggle text-uppercase" data-toggle="collapse" data-target="#menu1"
		aria-controls="menu1" aria-expanded="false" aria-label="Toggle navigation" href="#">
			Home
		  <span class="sr-only">(current)</span>        </a>
		<div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-3 px-3" id="menu1">
			<div class="sub-menu mb-xl-0 mb-4">
			  <ul class="list-unstyled">
				<li>
				  <a class="menu-item pl-0" href="index.html">
					Home 1                  </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="index2.html">
				   Home 2                  </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="index3.html">
					Home 3                 </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="index4.html">
					Home 4                  </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="index5.html">
					Home 5                  </a>                </li>
			  </ul>
			</div>
		</div>
		</li>
		<li class="nav-item dropdown mega-dropdown">
		<a class="nav-link dropdown-toggle text-uppercase" data-toggle="collapse" data-target="#menu3"
		aria-controls="menu3" aria-expanded="false" aria-label="Toggle navigation" href="#">Category</a>
		<div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-3 px-3" id="menu3">
		  <div class="row">
			<div class="col-md-12 col-xl-4 sub-menu mb-xl-0 mb-4">
			  <h6 class="sub-title text-uppercase font-weight-bold white-text">Variation 1</h6>
			  <!--Featured image-->
			  <ul class="list-unstyled">
				 <li>
				  <a class="menu-item pl-0" href="filter-toggle.html">
					filter toggle                  </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="off-canvas-left.html">
					off canvas left                </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="off-canvas-right.html">
					off canvas right                </a>                </li>
			  </ul>
			</div>
			<div class="col-md-6 col-xl-4 sub-menu mb-md-0 mb-4">
			  <h6 class="sub-title text-uppercase font-weight-bold white-text">Variation 2</h6>
				<ul class="list-unstyled">
				<li>
				  <a class="menu-item pl-0" href="category-5-col.html">
					grid 5 column                 </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="category-6-col.html">
				   grid 6 column                  </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="category-7-col.html">
					grid 7 column                   </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="category-8-col.html">
					grid 8 column                </a>                </li>
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
		<a class="nav-link dropdown-toggle text-uppercase" data-toggle="collapse" data-target="#menu2"
		aria-controls="menu2" aria-expanded="false" aria-label="Toggle navigation" href="#">
			Shop
		  <span class="sr-only">(current)</span>        </a>
		<div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-3 px-3" id="menu2">
			<div class="sub-menu mb-xl-0 mb-4">
			  <h6 class="sub-title text-uppercase font-weight-bold white-text">Featured</h6>
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
		<!-- Technology -->
		
		
		
		<li class="nav-item dropdown">   
		<a class="nav-link dropdown-toggle text-uppercase"  data-toggle="collapse" data-target="#menu4"
		aria-controls="menu4" aria-expanded="false" aria-label="Toggle navigation" href="#">Blog</a>
		<div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-3 px-3" id="menu4">
			<div class="sub-menu">
			  <h6 class="sub-title text-uppercase font-weight-bold white-text d-none">Featured</h6>
			<ul class="list-unstyled">
				  <li>
				  <a class="menu-item pl-0" href="blog-2-column.html">
					blog 2 column                  </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="blog-3-column.html">
				   blog 3 column                  </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="blog-2-column-masonary.html">
				   blog masonary                 </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="blog-list.html">
					blog list                  </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="blog-details.html">
				   blog details                  </a>                </li>
			  </ul>
			</div>
		</div>
		</li>
		
		<li class="nav-item dropdown">
		<a class="nav-link text-uppercase" href="contact-us.html">contact us</a>      </li>
		
		<li class="nav-item dropdown">   
		<a class="nav-link dropdown-toggle text-uppercase"  data-toggle="collapse" data-target="#menu5"
		aria-controls="menu5" aria-expanded="false" aria-label="Toggle navigation" href="#">Pages</a>
		<div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-3 px-3" id="menu5">
			<div class="sub-menu">
			  <h6 class="sub-title text-uppercase font-weight-bold white-text d-none">Featured</h6>
			<ul class="list-unstyled">
				  <li>
				  <a class="menu-item pl-0" href="about-us.html">
					About us                 </a>				 </li>
					<li>
				  <a class="menu-item pl-0" href="accordions.html">
					Accordions                  </a>                </li>
	              <li>
				  <a class="menu-item pl-0" href="buttons.html">
				   Buttons              </a>                </li>
			  </ul>
			</div>
		</div>
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
                          <td class="text-center"><a href="#"><img src="{{ asset('public/Customer/img/products/01.jpg') }}" alt="01" title="01"></a></td>
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
			<div class="container">
			<div class="row">
				<div class="tt-title d-inline-block float-none w-100 text-center">Trending Products</div>
				<div class="tabs">
					<ul class="nav nav-tabs justify-content-center">
						<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#ttfeatured-main" id="featured-tab"><div class="tab-title">Featured</div></a></li>
						<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#ttnew-main" id="new-tab"><div class="tab-title">Latest</div></a></li>
						<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#ttbestseller-main" id="bestseller-tab"><div class="tab-title">Bestseller</div></a></li>
					</ul>
				</div>
				<div class="tab-content float-left w-100">
				  <div class="tab-pane active float-left w-100" id="ttfeatured-main" role="tabpanel" aria-labelledby="featured-tab">
					  <section id="ttfeatured" class="ttfeatured-products">
						<div class="ttfeatured-content products grid owl-carousel" id="owl1">
							<div class="product-layouts">
								<div class="product-thumb">
									<div class="image fade-hover">
										<a href="product-details.html">
											<img src="{{ asset('public/Customer/img/products/01.jpg') }}" alt="01"/>
											<img src="{{ asset('public/Customer/img/products/02.jpg') }}" alt="02" class="second_image img-responsive"/>										</a>
										<ul class="countdown1 countdown">
										  <li><span class="days">00</span><p class="days_text">Days</p></li>
										  <li><span class="hours">00</span><p class="hours_text">Hours</p></li>
										  <li><span class="minutes">00</span><p class="minutes_text">Minutes</p></li>
										  <li><span class="seconds">00</span><p class="seconds_text">Seconds</p></li>
										</ul>
										<div class="button-wrapper">
										<div class="button-group text-center">
											<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal" disabled="disabled"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
											<a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
											<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
											<button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
										</div>
										</div>	
									</div>
									<div class="thumb-description">
										<div class="caption">
											<h4 class="product-title text-capitalize"><a href="product-details.html">aliquam quaerat voluptatem</a></h4>
										</div>
										<div class="rating">
										<div class="product-ratings d-inline-block align-middle">
											<span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons off">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons off">star</i></span>										</div>
										</div>
										<div class="price">
											<div class="regular-price">$100.00</div>
											<div class="old-price">$150.00</div>
										</div>
									</div>
								</div>
							</div>
							<div class="product-layouts">
								<div class="product-thumb">
									<div class="image fade-hover">
										<a href="product-details.html">
											<img src="{{ asset('public/Customer/img/products/02.jpg') }}" alt="02"/>
											<img src="{{ asset('public/Customer/img/products/03.jpg') }}" alt="03" class="second_image img-responsive"/>										</a>
										<div class="flags">
											<div class="sale">sale</div>
											<div class="new">new</div>
										</div>
										<ul id="example" class="countdown">
										  <li><span class="days">00</span><p class="days_text">Days</p></li>
										  <li><span class="hours">00</span><p class="hours_text">Hours</p></li>
										  <li><span class="minutes">00</span><p class="minutes_text">Minutes</p></li>
										  <li><span class="seconds">00</span><p class="seconds_text">Seconds</p></li>
										</ul>
										<div class="button-wrapper">
										<div class="button-group text-center">
											<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
											<a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
											<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
											<button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
										</div>
										</div>
									</div>
									<div class="thumb-description">
										<div class="caption">
											<h4 class="product-title text-capitalize"><a href="product-details.html">aspetur autodit autfugit</a></h4>
										</div>
										<div class="rating">
										<div class="product-ratings d-inline-block align-middle">
											<span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons off">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons off">star</i></span>										</div>
										</div>
										<div class="price">
											<div class="regular-price">$100.00</div>
											<div class="old-price">$150.00</div>
										</div>
									</div>
								</div>
							</div>
							<div class="product-layouts">
								<div class="product-thumb">
									<div class="image fade-hover">
										<a href="product-details.html">
											<img src="{{ asset('public/Customer/img/products/03.jpg') }}" alt="03"/>
											<img src="{{ asset('public/Customer/img/products/04.jpg') }}" alt="04" class="second_image img-responsive"/>										</a>
										<div class="button-wrapper">
										<div class="button-group text-center">
											<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
											<a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
											<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
											<button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
										</div>
										</div>
									</div>
									<div class="thumb-description">
										<div class="caption">
											<h4 class="product-title text-capitalize"><a href="product-details.html">magni dolores eosquies</a></h4>
										</div>
										<div class="rating">
											<div class="product-ratings d-inline-block align-middle">
											<span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons off">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons off">star</i></span>										   </div>
										</div>
										<div class="price">
											<div class="regular-price">$100.00</div>
											<div class="old-price">$150.00</div>
										</div>
									</div>
								</div>
							</div>
							<div class="product-layouts">
								<div class="product-thumb">
									<div class="image fade-hover">
										<a href="product-details.html">
											<img src="{{ asset('public/Customer/img/products/04.jpg') }}" alt="04"/>
											<img src="{{ asset('public/Customer/img/products/05.jpg') }}" alt="05" class="second_image img-responsive"/>										</a>
										<div class="button-wrapper">
										<div class="button-group text-center">
											<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
											<a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
											<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
											<button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
										</div>
										</div>
									</div>
									<div class="thumb-description">
										<div class="caption">
											<h4 class="product-title text-capitalize"><a href="product-details.html">voluptas nulla pariatur</a></h4>
										</div>
										<div class="rating">
											<div class="product-ratings d-inline-block align-middle">
											<span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons off">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons off">star</i></span>										   </div>
										</div>
										<div class="price">
											<div class="regular-price">$100.00</div>
											<div class="old-price">$150.00</div>
										</div>
									</div>
								</div>
							</div>
							<div class="product-layouts">
								<div class="product-thumb">
									<div class="image fade-hover">
										<a href="product-details.html">
											<img src="{{ asset('public/Customer/img/products/05.jpg') }}" alt="05"/>
											<img src="{{ asset('public/Customer/img/products/06.jpg') }}" alt="06" class="second_image img-responsive"/>										</a>
										<div class="button-wrapper">
										<div class="button-group text-center">
											<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
											<a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
											<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
											<button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
										</div>
										</div>
									</div>
									<div class="thumb-description">
										<div class="caption">
											<h4 class="product-title text-capitalize"><a href="product-details.html">aliquam quat voluptatem</a></h4>
										</div>
										<div class="rating">
											<div class="product-ratings d-inline-block align-middle">
											<span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons off">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons off">star</i></span>										   </div>
										</div>
										<div class="price">
											<div class="regular-price">$100.00</div>
											<div class="old-price">$150.00</div>
										</div>
									</div>
								</div>
							</div>
							<div class="product-layouts">
								<div class="product-thumb">
									<div class="image fade-hover">
										<a href="product-details.html">
											<img src="{{ asset('public/Customer/img/products/06.jpg') }}" alt="06"/>
											<img src="{{ asset('public/Customer/img/products/07.jpg') }}" alt="07" class="second_image img-responsive"/>										</a>
										<div class="button-wrapper">
										<div class="button-group text-center">
											<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
											<a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
											<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
											<button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
										</div>
										</div>
									</div>
									<div class="thumb-description">
										<div class="caption">
											<h4 class="product-title text-capitalize"><a href="product-details.html">voluptas sit aspernatur</a></h4>
										</div>
										<div class="rating">
											<div class="product-ratings d-inline-block align-middle">
											<span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons off">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons off">star</i></span>										   </div>
										</div>
										<div class="price">
											<div class="regular-price">$100.00</div>
											<div class="old-price">$150.00</div>
										</div>
									</div>
								</div>
							</div>
							<div class="product-layouts">
								<div class="product-thumb">
									<div class="image fade-hover">
										<a href="product-details.html">
											<img src="{{ asset('public/Customer/img/products/07.jpg') }}" alt="07"/>
											<img src="{{ asset('public/Customer/img/products/08.jpg') }}" alt="08" class="second_image img-responsive"/>										</a>
										<div class="button-wrapper">
										<div class="button-group text-center">
											<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal" disabled="disabled"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
											<a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
											<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
											<button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
										</div>
										</div>
									</div>
									<div class="thumb-description">
										<div class="caption">
											<h4 class="product-title text-capitalize"><a href="product-details.html">similique suntin culpaqui</a></h4>
										</div>
										<div class="rating">
											<div class="product-ratings d-inline-block align-middle">
											<span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons off">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons off">star</i></span>										   </div>
										</div>
										<div class="price">
											<div class="regular-price">$100.00</div>
											<div class="old-price">$150.00</div>
										</div>
									</div>
								</div>
							</div>
							<div class="product-layouts">
								<div class="product-thumb">
									<div class="image fade-hover">
										<a href="product-details.html">
											<img src="{{ asset('public/Customer/img/products/08.jpg') }}" alt="03"/>
											<img src="{{ asset('public/Customer/img/products/09.jpg') }}" alt="09" class="second_image img-responsive"/>										</a>
										<div class="button-wrapper">
										<div class="button-group text-center">
											<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
											<a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
											<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
											<button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
										</div>
										</div>
									</div>
									<div class="thumb-description">
										<div class="caption">
											<h4 class="product-title text-capitalize"><a href="product-details.html">suscipit laboriosam nisi</a></h4>
										</div>
										<div class="rating">
											<div class="product-ratings d-inline-block align-middle">
											<span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons off">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons off">star</i></span>										   </div>
										</div>
										<div class="price">
											<div class="regular-price">$100.00</div>
											<div class="old-price">$150.00</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				  </div>
				  <div class="tab-pane float-left w-100" id="ttnew-main" role="tabpanel" aria-labelledby="new-tab">
				  <section id="ttnew" class="ttnew-products">
					<div class="ttnew-content products grid owl-carousel" id="owl2">
						<div class="product-layouts">
							<div class="product-thumb">
								<div class="image fade-hover">
									<a href="product-details.html">
										<img src="{{ asset('public/Customer/img/products/01.jpg') }}" alt="01"/>	
										<img src="{{ asset('public/Customer/img/products/02.jpg') }}" alt="02" class="second_image img-responsive"/>									</a>	
									<ul class="countdown1 countdown">
										  <li><span class="days">00</span><p class="days_text">Days</p></li>
										  <li><span class="hours">00</span><p class="hours_text">Hours</p></li>
										  <li><span class="minutes">00</span><p class="minutes_text">Minutes</p></li>
										  <li><span class="seconds">00</span><p class="seconds_text">Seconds</p></li>
								  </ul>		
										<div class="button-wrapper">										
									<div class="button-group text-center">
											<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal" disabled="disabled"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
											<a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
											<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
											<button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
										</div>
									</div>						
								</div>
								<div class="thumb-description">
									<div class="caption">
										<h4 class="product-title text-capitalize"><a href="product-details.html">aliquam quaerat voluptatem</a></h4>
									</div>
									<div class="rating">
										<div class="product-ratings d-inline-block align-middle">
											<span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons off">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons off">star</i></span>								      </div>
								  </div>
									<div class="price">
										<div class="regular-price">$100.00</div>
										<div class="old-price">$150.00</div>
									</div>
								</div>
							</div>
						</div>
						<div class="product-layouts">
							<div class="product-thumb">
								<div class="image fade-hover">
									<a href="product-details.html">
										<img src="{{ asset('public/Customer/img/products/02.jpg') }}" alt="02"/>	
										<img src="{{ asset('public/Customer/img/products/03.jpg') }}" alt="03" class="second_image img-responsive"/>									</a>	
									<div class="button-wrapper">										
									<div class="button-group text-center">
											<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
											<a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
											<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
											<button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
									  </div>
									</div>								
								</div>
								<div class="thumb-description">
									<div class="caption">
										<h4 class="product-title text-capitalize"><a href="product-details.html">aspetur autodit autfugit</a></h4>
									</div>
									<div class="rating">
										<div class="product-ratings d-inline-block align-middle">
											<span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons off">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons off">star</i></span>								      </div>		
								  </div>
									<div class="price">
										<div class="regular-price">$100.00</div>
										<div class="old-price">$150.00</div>
									</div>
								</div>
							</div>
						</div>
						<div class="product-layouts">
							<div class="product-thumb">
								<div class="image fade-hover">
									<a href="product-details.html">
										<img src="{{ asset('public/Customer/img/products/03.jpg') }}" alt="03"/>	
										<img src="{{ asset('public/Customer/img/products/04.jpg') }}" alt="04" class="second_image img-responsive"/>									</a>
									<div class="button-wrapper">										
									<div class="button-group text-center">
											<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
											<a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
											<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
											<button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
									  </div>
									</div>									
								</div>
								<div class="thumb-description">
									<div class="caption">
										<h4 class="product-title text-capitalize"><a href="product-details.html">magni dolores eosquies</a></h4>
									</div>
									<div class="rating">
										<div class="product-ratings d-inline-block align-middle">
											<span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons off">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons off">star</i></span>								      </div>
								  </div>
									<div class="price">
										<div class="regular-price">$100.00</div>
										<div class="old-price">$150.00</div>
									</div>
								</div>
							</div>
						</div>
						<div class="product-layouts">
							<div class="product-thumb">
								<div class="image fade-hover">
									<a href="product-details.html">
										<img src="{{ asset('public/Customer/img/products/04.jpg') }}" alt="04"/>	
										<img src="{{ asset('public/Customer/img/products/05.jpg') }}" alt="05" class="second_image img-responsive"/>									</a>	
									<div class="button-wrapper">										
									<div class="button-group text-center">
											<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
											<a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
											<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
											<button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
									  </div>
									</div>								
								</div>
								<div class="thumb-description">
									<div class="caption">
										<h4 class="product-title text-capitalize"><a href="product-details.html">voluptas nulla pariatur</a></h4>
									</div>
									<div class="rating">
										<div class="product-ratings d-inline-block align-middle">
											<span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons off">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons off">star</i></span>								      </div>
								  </div>
									<div class="price">
										<div class="regular-price">$100.00</div>
										<div class="old-price">$150.00</div>
									</div>
								</div>
							</div>
						</div>
						<div class="product-layouts">
							<div class="product-thumb">
								<div class="image fade-hover">
									<a href="product-details.html">
										<img src="{{ asset('public/Customer/img/products/05.jpg') }}" alt="05"/>	
										<img src="{{ asset('public/Customer/img/products/06.jpg') }}" alt="06" class="second_image img-responsive"/>									</a>
									<div class="button-wrapper">										
<div class="button-group text-center">
	<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
	<a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
	<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
	<button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
</div>
</div>			
						</div>
								<div class="thumb-description">
									<div class="caption">
										<h4 class="product-title text-capitalize"><a href="product-details.html">aliquam quat voluptatem</a></h4>
									</div>
									<div class="rating">
										<div class="product-ratings d-inline-block align-middle">
											<span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons off">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons off">star</i></span>								      </div>
									</div>
									<div class="price">
										<div class="regular-price">$100.00</div>
										<div class="old-price">$150.00</div>
									</div>
								</div>
							</div>
						</div>
						<div class="product-layouts">
							<div class="product-thumb">
								<div class="image fade-hover">
									<a href="product-details.html">
										<img src="{{ asset('public/Customer/img/products/06.jpg') }}" alt="06"/>		
										<img src="{{ asset('public/Customer/img/products/07.jpg') }}" alt="07" class="second_image img-responsive"/>                                  </a>
									 <div class="button-wrapper">										
									<div class="button-group text-center">
											<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
											<a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
											<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
											<button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
									   </div>
									</div>
							  </div>
								<div class="thumb-description">
									<div class="caption">
										<h4 class="product-title text-capitalize"><a href="product-details.html">voluptas sit aspernatur</a></h4>
									</div>
									<div class="rating">
										<div class="product-ratings d-inline-block align-middle">
											<span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons off">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons off">star</i></span>								      </div>			
									</div>
									<div class="price">
										<div class="regular-price">$100.00</div>
										<div class="old-price">$150.00</div>
									</div>
								</div>
							</div>
						</div>
						<div class="product-layouts">
							<div class="product-thumb">
								<div class="image fade-hover">
									<a href="product-details.html">
										<img src="{{ asset('public/Customer/img/products/07.jpg') }}" alt="03"/>	
										<img src="{{ asset('public/Customer/img/products/08.jpg') }}" alt="08" class="second_image img-responsive"/>									</a>	
									<div class="button-wrapper">										
									<div class="button-group text-center">
											<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal" disabled="disabled"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
											<a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
											<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
											<button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
									  </div>
									</div>					
								</div>
								<div class="thumb-description">
									<div class="caption">
										<h4 class="product-title text-capitalize"><a href="#">similique suntin culpaqui</a></h4>
									</div>
									<div class="rating">
										<div class="product-ratings d-inline-block align-middle">
											<span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons off">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons off">star</i></span>								      </div>
							      </div>
									<div class="price">
										<div class="regular-price">$100.00</div>
										<div class="old-price">$150.00</div>
									</div>
								</div>
							</div>
						</div>
						<div class="product-layouts">
							<div class="product-thumb">
								<div class="image fade-hover">
									<a href="product-details.html">
										<img src="{{ asset('public/Customer/img/products/08.jpg') }}" alt="08"/>
										<img src="{{ asset('public/Customer/img/products/09.jpg') }}" alt="09" class="second_image img-responsive"/>									</a>
									<div class="button-wrapper">										
								<div class="button-group text-center">
											<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
											<a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
											<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
											<button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
									  </div>
									</div>				
								</div>
								<div class="thumb-description">
									<div class="caption">
										<h4 class="product-title text-capitalize"><a href="product-details.html">suscipit laboriosam nisi</a></h4>
									</div>
									<div class="rating">
										<div class="product-ratings d-inline-block align-middle">
											<span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons off">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons off">star</i></span>								      </div>
							      </div>
									<div class="price">
										<div class="regular-price">$100.00</div>
										<div class="old-price">$150.00</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				  </div>
				  <div class="tab-pane float-left w-100" id="ttbestseller-main" role="tabpanel" aria-labelledby="bestseller-tab">
				  <section id="ttbestseller" class="ttbestseller-products">
					<div class="ttbestseller-content products grid owl-carousel" id="owl3">
						<div class="product-layouts">
							<div class="product-thumb">
								<div class="image fade-hover">
									<a href="product-details.html">
										<img src="{{ asset('public/Customer/img/products/01.jpg') }}" alt="01"/>	
										<img src="{{ asset('public/Customer/img/products/02.jpg') }}" alt="02" class="second_image img-responsive"/>									</a>	
									<ul class="countdown1 countdown">
										  <li><span class="days">00</span><p class="days_text">Days</p></li>
										  <li><span class="hours">00</span><p class="hours_text">Hours</p></li>
										  <li><span class="minutes">00</span><p class="minutes_text">Minutes</p></li>
										  <li><span class="seconds">00</span><p class="seconds_text">Seconds</p></li>
								  </ul>	
										<div class="button-wrapper">										
								<div class="button-group text-center">
												<button type="button" class="btn btn-primary btn-cart" data-toggle="modal" data-target="#product_view" disabled="disabled"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
												<a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
												<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
												<button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
										  </div>
									</div>	
								</div>
									<div class="thumb-description">
									<div class="caption">
										<h4 class="product-title text-capitalize"><a href="product-details.html">aliquam quaerat voluptatem</a></h4>
									</div>
									
									<div class="rating">
										<div class="product-ratings d-inline-block align-middle">
											<span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons off">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons off">star</i></span>								      </div>	
								      </div>
									<div class="price">
										<div class="regular-price">$100.00</div>
										<div class="old-price">$150.00</div>
									</div>
								</div>
							</div>
						</div>
						<div class="product-layouts">
							<div class="product-thumb">
								<div class="image fade-hover">
									<a href="product-details.html">
										<img src="{{ asset('public/Customer/img/products/02.jpg') }}" alt="02"/>		
										<img src="{{ asset('public/Customer/img/products/03.jpg') }}" alt="03" class="second_image img-responsive"/>									</a>								</div>
								<div class="thumb-description">
									<div class="caption">
										<h4 class="product-title text-capitalize"><a href="product-details.html">aspetur autodit autfugit</a></h4>
									</div>
									<div class="rating">
										<div class="product-ratings d-inline-block align-middle">
											<span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons off">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons off">star</i></span>								      </div>
							      </div>
									<div class="price">
										<div class="regular-price">$100.00</div>
										<div class="old-price">$150.00</div>
									</div>
									<div class="button-wrapper">										
									<div class="button-group text-center">
												<button type="button" class="btn btn-primary btn-cart" data-toggle="modal" data-target="#product_view"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
												<a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
												<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
												<button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
									  </div>
									</div>
								</div>
							</div>
						</div>
						<div class="product-layouts">
							<div class="product-thumb">
								<div class="image fade-hover">
									<a href="product-details.html">
										<img src="{{ asset('public/Customer/img/products/03.jpg') }}" alt="03"/>
										<img src="{{ asset('public/Customer/img/products/04.jpg') }}" alt="04" class="second_image img-responsive"/>									</a>
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
										<h4 class="product-title text-capitalize"><a href="product-details.html">magni dolores eosquies</a></h4>
									</div>
									<div class="rating">
										<div class="product-ratings d-inline-block align-middle">
											<span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons off">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons off">star</i></span>								      </div>
							      </div>
									<div class="price">
										<div class="regular-price">$100.00</div>
										<div class="old-price">$150.00</div>
									</div>
								</div>
							</div>
						</div>
						<div class="product-layouts">
							<div class="product-thumb">
								<div class="image fade-hover">
									<a href="product-details.html">
										<img src="{{ asset('public/Customer/img/products/04.jpg') }}" alt="04"/>		
										<img src="{{ asset('public/Customer/img/products/05.jpg') }}" alt="05" class="second_image img-responsive"/>										</a>
										<div class="button-wrapper">										
								<div class="button-group text-center">
												<button type="button" class="btn btn-primary btn-cart" data-toggle="modal" data-target="#product_view"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
												<a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
												<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
												<button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
										  </div>
									</div>									</div>
								<div class="thumb-description">
									<div class="caption">
										<h4 class="product-title text-capitalize"><a href="product-details.html">voluptas nulla pariatur</a></h4>
									</div>
									<div class="rating">
										<div class="product-ratings d-inline-block align-middle">
											<span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons off">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons off">star</i></span>								      </div>
							      </div>
									<div class="price">
										<div class="regular-price">$100.00</div>
										<div class="old-price">$150.00</div>
									</div>
								</div>
							</div>
						</div>
						<div class="product-layouts">
							<div class="product-thumb">
								<div class="image fade-hover">
									<a href="product-details.html">
										<img src="{{ asset('public/Customer/img/products/05.jpg') }}" alt="03"/>		
										<img src="{{ asset('public/Customer/img/products/06.jpg') }}" alt="06" class="second_image img-responsive"/>									</a>
										<div class="button-wrapper">										
								<div class="button-group text-center">
												<button type="button" class="btn btn-primary btn-cart" data-toggle="modal" data-target="#product_view"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
												<a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
												<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
												<button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
										  </div>
									</div>									</div>
								<div class="thumb-description">
									<div class="caption">
										<h4 class="product-title text-capitalize"><a href="product-details.html">aliquam quat voluptatem</a></h4>
									</div>
									<div class="rating">
										<div class="product-ratings d-inline-block align-middle">
											<span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons off">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons off">star</i></span>								      </div>
							      </div>
									<div class="price">
										<div class="regular-price">$100.00</div>
										<div class="old-price">$150.00</div>
									</div>
								</div>
							</div>
						</div>
						<div class="product-layouts">
							<div class="product-thumb">
								<div class="image fade-hover">
									<a href="product-details.html">
										<img src="{{ asset('public/Customer/img/products/06.jpg') }}" alt="03"/></a>	
										<div class="button-wrapper">										
									<div class="button-group text-center">
												<button type="button" class="btn btn-primary btn-cart" data-toggle="modal" data-target="#product_view"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
												<a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
												<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
												<button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
										  </div>
									</div>								</div>
								<div class="thumb-description">
									<div class="caption">
										<h4 class="product-title text-capitalize"><a href="product-details.html">voluptas sit aspernatur</a></h4>
									</div>
									<div class="rating">
										<div class="product-ratings d-inline-block align-middle">
											<span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons off">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons off">star</i></span>								      </div>
							      </div>
									<div class="price">
										<div class="regular-price">$100.00</div>
										<div class="old-price">$150.00</div>
									</div>
								</div>
							</div>
						</div>
						<div class="product-layouts">
							<div class="product-thumb">
								<div class="image fade-hover">
									<a href="product-details.html">
										<img src="{{ asset('public/Customer/img/products/07.jpg') }}" alt="03"/></a>	
										<div class="button-wrapper">										
									<div class="button-group text-center">
												<button type="button" class="btn btn-primary btn-cart" data-toggle="modal" data-target="#product_view" disabled="disabled"> <i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
												<a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
												<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
												<button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
										  </div>
									</div>								</div>
								<div class="thumb-description">
									<div class="caption">
										<h4 class="product-title text-capitalize"><a href="product-details.html">similique suntin culpaqui</a></h4>
									</div>
									<div class="rating">
										<div class="product-ratings d-inline-block align-middle">
											<span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons off">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons off">star</i></span>								      </div>
								  </div>
									<div class="price">
										<div class="regular-price">$100.00</div>
										<div class="old-price">$150.00</div>
									</div>
								</div>
							</div>
						</div>
						<div class="product-layouts">
							<div class="product-thumb">
								<div class="image fade-hover">
									<a href="product-details.html">
										<img src="{{ asset('public/Customer/img/products/08.jpg') }}" alt="03"/></a>	
										<div class="button-wrapper">										
									<div class="button-group text-center">
												<button type="button" class="btn btn-primary btn-cart" data-toggle="modal" data-target="#product_view"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
												<a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
												<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
												<button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
										  </div>
									</div>								</div>
								<div class="thumb-description">
									<div class="caption">
										<h4 class="product-title text-capitalize"><a href="product-details.html">suscipit laboriosam nisi</a></h4>
									</div>
									<div class="rating">
										<div class="product-ratings d-inline-block align-middle">
											<span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons off">star</i></span>
										   <span class="fa fa-stack"><i class="material-icons off">star</i></span>								      </div>
								  </div>
									<div class="price">
										<div class="regular-price">$100.00</div>
										<div class="old-price">$150.00</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				  </div>
				</div>
			</div>
			</div>
			</div>
			<div id="ttcmstestimonial" class="my-40 my-sm-25 bottom-to-top hb-animate-element">
			<div class="tttestimonial-content container">
				<div class="tttestimonial-inner">
				<ul class="tttestimonial owl-carousel">
				<li>
				<div class="testimonial-block">
					<div class="testimonial-image"><img alt="" src="{{ asset('public/Customer/img/banner/user1.jpg') }}" /></div>
					<div class="testimonial-content">
					<div class="testimonial-desc">
					<p>Duis faucibus enim vitae nunc molestie, nec facilisis arcu pulvinar. Nullam mattis arcu convallis, bibendum dui ac, laoreet est.Vivamus interdum egastas rutrum. Quisque laoreet ante sed placerat imperdiet.
					</p>
					</div>
					<div class="testimonial-user-title">
					<h4>John Duff</h4>
					<div class="user-designation">SEO & founder</div>
					</div>
					</div>
				</div>
				</li>
				<li>
				<div class="testimonial-block">
					<div class="testimonial-image"><img alt="" src="{{ asset('public/Customer/img/banner/user1.jpg') }}" /></div>
					<div class="testimonial-content">
					<div class="testimonial-desc">
					<p>Duis faucibus enim vitae nunc molestie, nec facilisis arcu pulvinar. Nullam mattis arcu convallis, bibendum dui ac, laoreet est.Vivamus interdum egastas rutrum. Quisque laoreet ante sed placerat imperdiet.
					</p>
					</div>
					<div class="testimonial-user-title">
					<h4>John Duff</h4>
					<div class="user-designation">SEO & founder</div>
					</div>
					</div>
				</div>
				</li>
				<li>
				<div class="testimonial-block">
					<div class="testimonial-image"><img alt="" src="{{ asset('public/Customer/img/banner/user1.jpg') }}" /></div>
					<div class="testimonial-content">
					<div class="testimonial-desc">
					<p>Duis faucibus enim vitae nunc molestie, nec facilisis arcu pulvinar. Nullam mattis arcu convallis, bibendum dui ac, laoreet est.Vivamus interdum egastas rutrum. Quisque laoreet ante sed placerat imperdiet.
					</p>
					</div>
					<div class="testimonial-user-title">
					<h4>John Duff</h4>
					<div class="user-designation">SEO & founder</div>
					</div>
					</div>
				</div>
				</li>
				</ul>
				</div>
			  </div>
			</div>
			<div id="ttspecial" class="ttspecial my-40 bottom-to-top hb-animate-element">
			<div class="container">
					<div class="row">
							<div class="tt-title d-inline-block float-none w-100 text-center">special products</div>
							<div class="ttspecial-content products grid owl-carousel">
							<div class="product-layouts">
								<div class="product-thumb">
									<div class="image fade-hover">
										<a href="#">
											<img src="{{ asset('public/Customer/img/products/01.jpg') }}" alt="01"/>
											<img src="{{ asset('public/Customer/img/products/02.jpg') }}" alt="02" class="second_image img-responsive"/>										</a>
										<ul class="countdown countdown3">
										  <li><span class="days">00</span><p class="days_text">Days</p></li>
										  <li><span class="hours">00</span><p class="hours_text">Hours</p></li>
										  <li><span class="minutes">00</span><p class="minutes_text">Minutes</p></li>
										  <li><span class="seconds">00</span><p class="seconds_text">Seconds</p></li>
										</ul>	
										<div class="button-wrapper">	
										<div class="button-group text-center">
												<button type="button" class="btn btn-primary btn-cart" data-toggle="modal" data-target="#product_view" disabled="disabled"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
												<a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
												<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
												<button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
										  </div>									
									  </div>
									</div>
									<div class="thumb-description">
										<div class="caption">
											<h4 class="product-title text-capitalize"><a href="product-details.html">aliquam quaerat voluptatem</a></h4>
										</div>
										<div class="rating">
											<div class="product-ratings d-inline-block align-middle">
												<span class="fa fa-stack"><i class="material-icons">star</i></span>
											   <span class="fa fa-stack"><i class="material-icons">star</i></span>
											   <span class="fa fa-stack"><i class="material-icons">star</i></span>
											   <span class="fa fa-stack"><i class="material-icons off">star</i></span>
											   <span class="fa fa-stack"><i class="material-icons off">star</i></span>									      </div>
								      </div>
										<div class="price">
											<div class="regular-price">$100.00</div>
											<div class="old-price">$150.00</div>
										</div>
									</div>
								</div>
							</div>
							<div class="product-layouts">
								<div class="product-thumb">
									<div class="image fade-hover">
										<a href="#">
											<img src="{{ asset('public/Customer/img/products/02.jpg') }}" alt="02"/>	
											<img src="{{ asset('public/Customer/img/products/03.jpg') }}" alt="03" class="second_image img-responsive"/>										</a>	
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
											<h4 class="product-title text-capitalize"><a href="product-details.html">aspetur autodit autfugit</a></h4>
										</div>
										<div class="rating">
									<div class="product-ratings d-inline-block align-middle">
												<span class="fa fa-stack"><i class="material-icons">star</i></span>
											   <span class="fa fa-stack"><i class="material-icons">star</i></span>
											   <span class="fa fa-stack"><i class="material-icons">star</i></span>
											   <span class="fa fa-stack"><i class="material-icons off">star</i></span>
											   <span class="fa fa-stack"><i class="material-icons off">star</i></span>									      </div>
								      </div>
										<div class="price">
											<div class="regular-price">$100.00</div>
											<div class="old-price">$150.00</div>
										</div>
									</div>
								</div>
							</div>
							<div class="product-layouts">
								<div class="product-thumb">
									<div class="image fade-hover">
										<a href="#">
											<img src="{{ asset('public/Customer/img/products/03.jpg') }}" alt="03"/>	
												<img src="{{ asset('public/Customer/img/products/04.jpg') }}" alt="04" class="second_image img-responsive"/>								</a>
												<div class="button-wrapper">	
										<div class="button-group text-center">
												<button type="button" class="btn btn-primary btn-cart" data-toggle="modal" data-target="#product_view"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
												<a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
												<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
												<button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
										  </div>									
										</div>									</div>
									<div class="thumb-description">
										<div class="caption">
											<h4 class="product-title text-capitalize"><a href="product-details.html">magni dolores eosquies</a></h4>
										</div>
										<div class="rating">
											<div class="product-ratings d-inline-block align-middle">
												<span class="fa fa-stack"><i class="material-icons">star</i></span>
											   <span class="fa fa-stack"><i class="material-icons">star</i></span>
											   <span class="fa fa-stack"><i class="material-icons">star</i></span>
											   <span class="fa fa-stack"><i class="material-icons off">star</i></span>
											   <span class="fa fa-stack"><i class="material-icons off">star</i></span>									      </div>
								      </div>
										<div class="price">
											<div class="regular-price">$100.00</div>
											<div class="old-price">$150.00</div>
										</div>
										
									</div>
								</div>
							</div>
							<div class="product-layouts">
								<div class="product-thumb">
									<div class="image fade-hover">
										<a href="#">
											<img src="{{ asset('public/Customer/img/products/04.jpg') }}" alt="04"/>
											<img src="{{ asset('public/Customer/img/products/05.jpg') }}" alt="05" class="second_image img-responsive"/>											</a>	
											<div class="button-wrapper">										
										<div class="button-group text-center">
												<button type="button" class="btn btn-primary btn-cart" data-toggle="modal" data-target="#product_view"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
												<a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
												<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
												<button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
											</div>
										</div>								</div>
									<div class="thumb-description">
										<div class="caption">
											<h4 class="product-title text-capitalize"><a href="product-details.html">voluptas nulla pariatur</a></h4>
										</div>
										<div class="rating">
											<div class="product-ratings d-inline-block align-middle">
												<span class="fa fa-stack"><i class="material-icons">star</i></span>
											   <span class="fa fa-stack"><i class="material-icons">star</i></span>
											   <span class="fa fa-stack"><i class="material-icons">star</i></span>
											   <span class="fa fa-stack"><i class="material-icons off">star</i></span>
									      <span class="fa fa-stack"><i class="material-icons off">star</i></span>									      </div>								</div>
										<div class="price">
											<div class="regular-price">$100.00</div>
											<div class="old-price">$150.00</div>
										</div>
									</div>
								</div>
							</div>
							<div class="product-layouts">
								<div class="product-thumb">
									<div class="image fade-hover">
										<a href="#">
											<img src="{{ asset('public/Customer/img/products/05.jpg') }}" alt="05"/>
											<img src="{{ asset('public/Customer/img/products/06.jpg') }}" alt="06" class="second_image img-responsive"/>										</a>
											<div class="button-wrapper">										
										<div class="button-group text-center">
												<button type="button" class="btn btn-primary btn-cart" data-toggle="modal" data-target="#product_view"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
												<a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
												<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
												<button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
											</div>
										</div>									</div>
									<div class="thumb-description">
										<div class="caption">
											<h4 class="product-title text-capitalize"><a href="product-details.html">aliquam quat voluptatem</a></h4>
										</div>
										<div class="rating">
											<div class="product-ratings d-inline-block align-middle">
												<span class="fa fa-stack"><i class="material-icons">star</i></span>
											   <span class="fa fa-stack"><i class="material-icons">star</i></span>
											   <span class="fa fa-stack"><i class="material-icons">star</i></span>
											   <span class="fa fa-stack"><i class="material-icons off">star</i></span>
											   <span class="fa fa-stack"><i class="material-icons off">star</i></span>									      </div>
								      </div>
										<div class="price">
											<div class="regular-price">$100.00</div>
											<div class="old-price">$150.00</div>
										</div>
									</div>
								</div>
							</div>
							<div class="product-layouts">
								<div class="product-thumb">
									<div class="image fade-hover">
										<a href="#">
											<img src="{{ asset('public/Customer/img/products/06.jpg') }}" alt="06"/>	
											<img src="{{ asset('public/Customer/img/products/07.jpg') }}" alt="07" class="second_image img-responsive"/>									  </a>		
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
											<h4 class="product-title text-capitalize"><a href="product-details.html">voluptas sit aspernatur</a></h4>
										</div>
										<div class="rating">
											<div class="product-ratings d-inline-block align-middle">
												<span class="fa fa-stack"><i class="material-icons">star</i></span>
											   <span class="fa fa-stack"><i class="material-icons">star</i></span>
											   <span class="fa fa-stack"><i class="material-icons">star</i></span>
											   <span class="fa fa-stack"><i class="material-icons off">star</i></span>
											   <span class="fa fa-stack"><i class="material-icons off">star</i></span>									      </div>
								      </div>
										<div class="price">
											<div class="regular-price">$100.00</div>
											<div class="old-price">$150.00</div>
										</div>
									</div>
								</div>
							</div>
							</div>
					</div>
			</div>
			</div>
			<div id="ttcmssubbanner" class="ttcmssubbanner my-40 my-sm-25 bottom-to-top hb-animate-element">
  <div class="ttbannerblock container">
    <div class="row">
      <div class="ttbanner1 ttbanner col-sm-6 col-xs-6">
        <div class="ttbanner-img"><a href="#"><img src="{{ asset('public/Customer/img/banner/cms-03.jpg') }}" alt="cms-03"></a></div>
        <div class="ttbanner-inner">
          <div class="ttbanner-desc text-center">
            <span class="title text-uppercase">summer shop</span> 
            <span class="subtitle text-uppercase py-20">up to 70% off</span> 
            <span class="shop-now text-capitalize"><a href="#" class="btn-primary">shop now</a></span>          </div>
        </div>
      </div>
      <div class="ttbanner2 ttbanner col-sm-6">
        <div class="ttbanner-img"><a href="#"><img src="{{ asset('public/Customer/img/banner/cms-04.jpg') }}" alt="cms-04"></a></div>
        <div class="ttbanner-inner">
          <div class="ttbanner-desc text-center">
            <span class="title text-uppercase">winter shop</span> 
            <span class="subtitle text-uppercase py-20">up to 70% off</span> 
            <span class="shop-now text-capitalize"><a href="#" class="btn-primary">shop now</a></span>          </div>
        </div>
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
                                        <a title="Click to view Full Image" href="img/banner/blog-01.jpg" data-lightbox="example-set" class="icon zoom"><i class="material-icons">search</i></a>							</span>					  </div>
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
					<div class="item">
						<a href="#"><img src="{{ asset('public/Customer/img/logos/brand-logo-01.png') }}" alt="brand-logo-01"></a>
					</div>
					<div class="item">
						<a href="#"><img src="{{ asset('public/Customer/img/logos/brand-logo-03.png') }}" alt="brand-logo-02"></a>
					</div>
					<div class="item">
						<a href="#"><img src="{{ asset('public/Customer/img/logos/brand-logo-03.png') }}" alt="brand-logo-03"></a>
					</div>
					<div class="item">
						<a href="#"><img src="{{ asset('public/Customer/img/logos/brand-logo-04.png') }}" alt="brand-logo-04"></a>
					</div>
					<div class="item">
						<a href="#"><img src="{{ asset('public/Customer/img/logos/brand-logo-05.png') }}" alt="brand-logo-05"></a>
					</div>
					<div class="item">
						<a href="#"><img src="{{ asset('public/Customer/img/logos/brand-logo-06.png') }}" alt="brand-logo-06"></a>
					</div>
					<div class="item">
						<a href="#"><img src="{{ asset('public/Customer/img/logos/brand-logo-07.png') }}" alt="brand-logo-07"></a>
					</div>
				</div>
				</div>
			</div>
			
			</div> 
			</div>
    </main>

    <!-- Footer -->
	<div class="block-newsletter"> 
				<div class="parallax">
				<div class="container">
					<div class="tt-newsletter col-sm-7">
							<h2 class="text-uppercase">Subscribe to our Newsletter</h2>
					</div>
					<div class="block-content col-sm-5">
					<form method="post" action="contact-us.html">
						<div class="input-group">
							<input type="email" name="email" value="" placeholder="Email address.." required="" class="form-control">
							<span class="input-group-btn">
			 <button class="btn btn-theme text-uppercase btn-secondary" type="submit">Subscribe</button>
			 </span>
						</div>
					</form>
		</div>
				</div>
				</div>
			</div>
<footer class="page-footer font-small footer-default">
    <div class="container text-center text-md-left">
      <div class="row">
        <div class="col-md-3 footer-cms footer-column">
			<div class="ttcmsfooter">
              <div class="footer-logo"><img src="{{ asset('public/Customer/img/logos/footer-logo.png') }}" alt="footer-logo"></div>
              <div class="footer-desc">At vero eos et accusamus et iusto odio dignissimos ducimus, duis faucibus enim vitae</div>
			  </div>
		</div>
        <div class="col-md-3 footer-column">
		<div class="title">
          <a href="#company" class="font-weight-normal text-capitalize mb-10" data-toggle="collapse" aria-expanded="false">company</a>		  </div>
          <ul id="company" class="list-unstyled collapse">
            <li>
              <a href="#">search</a>            </li>
            <li>
              <a href="#">New Products</a>            </li>
            <li>
              <a href="category.html">Best Collection</a>            </li>
            <li>
              <a href="wishlist.html">wishlist</a>            </li>
			 <li>
	 		 <a href="blog-details.html">personal info</a>		    </li>         
          </ul>
        </div>
        <div class="col-md-3 footer-column">
			<div class="title">
          <a href="#products" class="font-weight-normal text-capitalize mb-10" data-toggle="collapse" aria-expanded="false">products</a>		  </div>
          <ul id="products" class="list-unstyled collapse">
            <li>
              <a href="blog-details.html">blog</a>            </li>
            <li>
              <a href="about-us.html">about us</a>            </li>
            <li>
              <a href="contact-us.html">contact us</a>            </li>
            <li>
              <a href="my-account.html">my account</a>            </li>
 <li>
	  <a href="contact-us.html">addresses</a>            </li>         
          </ul>

        </div>
		
        <div class="col-md-3 footer-column">
		<div class="title">
          <a href="#information" class="font-weight-normal text-capitalize mb-10" data-toggle="collapse" aria-expanded="false">store information</a>		  </div>
          <ul id="information" class="list-unstyled collapse">
            <li class="contact-detail links">
              <span class="address">
			  		<span class="icon"><i class="material-icons">location_on</i></span>
					<span class="data"> 4030, Central Bazzar, opp. Varachha Police Station, Varachha Main Road, Surat, Gujarat 395006, India</span>			  </span>            </li>
            <li class="links">
               <span class="contact">
			  		<span class="icon"><i class="material-icons">phone</i></span>
					<span class="data"><a href="tel:(99)55669999">+ (99) 55-669-999</a></span>			  </span>            </li>
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
              © 2019 - Boostrap theme by store™
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
								<a href="img/products/01.jpg"><img src="{{ asset('public/Customer/img/products/01.jpg') }}" class="img-fluid" alt=""></a>
							</div>
						</div>
						<div class="tab-pane" id="product-2" role="tabpanel" aria-labelledby="product-tab-2">
							<div class="single-img">
								<a href="img/products/02.jpg"><img src="{{ asset('public/Customer/img/products/02.jpg') }}" class="img-fluid" alt=""></a>
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
                                        <a data-toggle="tab" id="product-tab-1" href="#product-1" class="img active"><img src="{{ asset('public/Customer/img/products/01.jpg') }}" class="img-fluid" alt=""></a>
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
					<img src="{{ asset('public/Customer/img/products/01.jpg') }}" class="img-responsive" alt="01">
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
					<div class="image"><img src="{{ asset('public/Customer/img/products/01.jpg') }}" class="img-fluid" alt=""></div>
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