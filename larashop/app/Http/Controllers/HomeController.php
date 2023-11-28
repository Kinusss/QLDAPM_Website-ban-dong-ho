<?php

namespace App\Http\Controllers;

use App\Models\NguoiDung;
use App\Models\SanPham;
use App\Models\LoaiSanPham;
use App\Models\HangSanXuat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\DonHang;
use App\Models\DonHang_ChiTiet;
use Socialite;

class HomeController extends Controller
{
	public function getGoogleLogin()
	{
		return Socialite::driver('google')->redirect();
	}
	public function getGoogleCallback()
	{
		try
		{
			$user = Socialite::driver('google')
				->setHttpClient(new \GuzzleHttp\Client(['verify' => false]))
				->stateless()
				->user();
		}
		catch(Exception $e)
		{
			return redirect()->route('user.dangnhap')->with('warning', 'Lỗi xác thực. Xin vui lòng thử lại!');
		}
		
		$existingUser = NguoiDung::where('email', $user->email)->first();
		if($existingUser)
		{
			// Nếu người dùng đã tồn tại thì đăng nhập
			Auth::login($existingUser, true);
			return redirect()->route('user.home');
		}
		else
		{
			// Nếu chưa tồn tại người dùng thì thêm mới
			$newUser = NguoiDung::create([
				'name' => $user->name,
				'email' => $user->email,
				'username' => Str::before($user->email, '@'),
				'password' => Hash::make('larashop@2023'), // Gán mật khẩu tự do
			]);
			
			// Sau đó đăng nhập
			Auth::login($newUser, true);
			return redirect()->route('user.home');
		}
	}

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getHome()
    {
        $loaisanpham = LoaiSanPham::all();
		$hangsanxuat = HangSanXuat::all();
		$sanpham = SanPham::all();
		return view('frontend.home', compact('loaisanpham', 'hangsanxuat', 'sanpham'));
    }
	
	public function getSanPham($tenloai_slug = '')
	{
		// Lấy tất cả các loại sản phẩm cho menu
		$loaisanpham = LoaiSanPham::all();

		// Lấy sản phẩm dựa trên loại đã chọn
		$selectedCategory = $tenloai_slug ? LoaiSanPham::where('tenloai_slug', $tenloai_slug)->first() : null;

		// Xử lý trường hợp không tìm thấy loại sản phẩm
		if (!$selectedCategory) {
			abort(404); // Hoặc hiển thị thông báo lỗi
		}

		// Lấy danh sách sản phẩm dựa trên loại sản phẩm và sử dụng phương thức paginate
		$sanpham = $selectedCategory ? SanPham::where('loaisanpham_id', $selectedCategory->id)->paginate(16) : SanPham::paginate(16);

		// Chuyển dữ liệu đến view
		return view('frontend.sanpham', compact('sanpham', 'loaisanpham', 'selectedCategory'));
	}
	
	public function getSanPham_ChiTiet($tenloai_slug = '', $tensanpham_slug = '')
	{
		$loaisanpham = LoaiSanPham::all();
    
		$sanpham = SanPham::where('tensanpham_slug', $tensanpham_slug)
                    ->whereHas('loaisanpham', function ($query) use ($tenloai_slug) {
                        $query->where('tenloai_slug', $tenloai_slug);
                    })
                    ->first();

		if (!$sanpham) {
			abort(404); // Trang không tồn tại nếu không tìm thấy sản phẩm
		}

		return view('frontend.sanpham_chitiet', compact('loaisanpham', 'sanpham'));
	}
	
	public function getBaiViet($tenchude_slug = '')
	{
		$loaisanpham = LoaiSanPham::all();
		return view('frontend.baiviet', compact('loaisanpham'));
	}
	
	public function getBaiViet_ChiTiet($tenchude_slug = '', $tieude_slug = '')
	{
		$loaisanpham = LoaiSanPham::all();
		return view('frontend.baiviet_chitiet', compact('loaisanpham'));
	}
	
	public function getGioHang()
	{
		if(Cart::count() > 0)
		{
			$loaisanpham = LoaiSanPham::all();
			return view('frontend.giohang', compact('loaisanpham'));
		}
		else
		{
			$loaisanpham = LoaiSanPham::all();
			return view('frontend.giohangrong', compact('loaisanpham'));
		}
	}
	
	public function getGioHang_Them($tensanpham_slug = '', Request $request)
	{
		// Số lượng mặc định là 1
		$quantity = 1;

		// Kiểm tra xem request có chứa số lượng hợp lệ không và cập nhật nếu có
		if ($request->has('quantity') && is_numeric($request->quantity) && $request->quantity > 0) {
			$quantity = $request->quantity;
		}

		$sanpham = SanPham::where('tensanpham_slug', $tensanpham_slug)->first();

		Cart::add([
			'id' => $sanpham->id,
			'name' => $sanpham->tensanpham,
			'price' => $sanpham->dongia,
			'qty' => $quantity, // Sử dụng số lượng đã xác định
			'weight' => 0,
			'options' => [
				'image' => $sanpham->hinhanh
			]
		]);

		return redirect()->route('frontend.giohang');
	}

	
	public function getGioHang_Xoa($row_id)
	{
		Cart::remove($row_id);
		
		return redirect()->route('frontend.giohang');
	}
	
	public function getGioHang_Giam($row_id)
	{
		$row = Cart::get($row_id);
		
		// Nếu số lượng là 1 thì không giảm được nữa
		if($row->qty > 1)
		{
			Cart::update($row_id, $row->qty - 1);
		}
		
		return redirect()->route('frontend.giohang');
	}
	
	public function getGioHang_Tang($row_id)
	{
		$row = Cart::get($row_id);
		
		// Không được tăng vượt quá 10 sản phẩm
		if($row->qty < 10)
		{
			Cart::update($row_id, $row->qty + 1);
		}
		return redirect()->route('frontend.giohang');
	}
	
	public function postGioHang_CapNhat(Request $request)
	{
		foreach($request->qty as $row_id => $quantity)
		{
			if($quantity <= 0)
				Cart::update($row_id, 1);
			else if($quantity > 10)
				Cart::update($row_id, 10);
			else
				Cart::update($row_id, $quantity);
		}

		return redirect()->route('frontend.giohang');
	}
	
	public function getTuyenDung()
	{
		$loaisanpham = LoaiSanPham::all();
		return view('frontend.tuyendung', compact('loaisanpham'));
	}
	
	public function getLienHe()
	{
		$loaisanpham = LoaiSanPham::all();
		return view('frontend.lienhe', compact('loaisanpham'));
	}
	
	// Trang đăng ký dành cho khách hàng
	public function postDangKy()
	{
		$loaisanpham = LoaiSanPham::all();
		return view('user.dangky', compact('loaisanpham'));
	}
	
	// Trang đăng nhập dành cho khách hàng
	public function getDangNhap(Request $request)
	{
		$loaisanpham = LoaiSanPham::all(); // Giữ lại biến $loaisanpham

		$credentials = $request->only('email', 'password');

		if (Auth::attempt($credentials)) {
			// Đăng nhập thành công
			return redirect()->route('user.home')->with('loaisanpham', $loaisanpham);
		} else {
			// Đăng nhập không thành công, hiển thị thông báo lỗi
			return back()->withErrors(['email' => 'Đăng nhập không thành công. Vui lòng kiểm tra lại email và mật khẩu.'])->with('loaisanpham', $loaisanpham);
		}
	}
}
