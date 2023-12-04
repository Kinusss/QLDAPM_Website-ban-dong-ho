<nav class="navbar navbar-expand-md navbar-light shadow-sm bg-warning">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('frontend.home') }}">
            <i class="fa-light fa-cart-shopping"></i> {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('frontend.sanpham') }}"><i class="fa-light fa-fw fa-box"></i> Sản phẩm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('frontend.baiviet') }}"><i
                            class="fa-light fa-fw fa-newspaper"></i> Tin tức</a>
                </li>

                <li class="nav-item">

                    <a class="nav-link" href="{{ route('frontend.giohang') }}"><i
                            class="fa-light fa-fw fa-cart-shopping"></i> Giỏ hàng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('frontend.lienhe') }}"><i class="fa-light fa-fw fa-phone"></i>Liên hệ</a>
                </li>
            </ul>
            <!-- Right side of Navbar -->
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                @guest
                @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.dangnhap') }}"><i
                            class="fa-light fa-fw fa-sign-in-alt"></i> Đăng nhập</a>
                </li>
                @endif

                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.dangky') }}"><i class="fa-light fa-user-plus"></i> Đăng ký</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#nguoidung" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-light fa-user-circle"></i> {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('user.dangxuat') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="fa-light fa-fw fa-sign-out-alt"></i> Đăng xuất
                        </a>
                        <form id="logout-form" action="{{ route('user.dangxuat') }}" method="post" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>