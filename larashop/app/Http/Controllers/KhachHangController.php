<?php

namespace App\Http\Controllers;

use App\Models\NguoiDung;
use App\Models\DonHang;
use App\Models\DonHang_ChiTiet;
use App\Models\LoaiSanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Mail\DatHangEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class KhachHangController extends Controller
{
    public function getHome()
	{
		$loaisanpham = LoaiSanPham::all();
		if(Auth::check())
		{
			$nguoidung = NguoiDung::find(Auth::user()->id);
			return view('user.home', compact('nguoidung', 'loaisanpham'));
		}
		else
			return redirect()->route('user.dangnhap');
	}
	
	public function getDatHang()
	{
		if(Auth::check())
		{
			$loaisanpham = LoaiSanPham::all();
			return view('user.dathang', compact('loaisanpham'));
		}
		else
			return redirect()->route('user.dangnhap');
	}
	
	public function postDatHang(Request $request)
	{
		// Kiểm tra
		$this->validate($request, [
			'diachigiaohang' => ['required', 'string', 'max:255'],
			'dienthoaigiaohang' => ['required', 'string', 'max:255'],
		]);// Lưu vào đơn hàng
		$dh = new DonHang();
		$dh->nguoidung_id = Auth::user()->id;
		$dh->tinhtrang_id = 1; // Đơn hàng mới
		$dh->diachigiaohang = $request->diachigiaohang;
		$dh->dienthoaigiaohang = $request->dienthoaigiaohang;
		$dh->save();
		// Lưu vào đơn hàng chi tiết
		foreach(Cart::content() as $value)
		{
			$ct = new DonHang_ChiTiet();
			$ct->donhang_id = $dh->id;
			$ct->sanpham_id = $value->id;
			$ct->soluongban = $value->qty;
			$ct->dongiaban = $value->price;
			$ct->save();
		}
		Mail::to(Auth::user()->email)->send(new DatHangEmail($dh));
		return redirect()->route('user.dathangthanhcong');
	}
	
	public function getDatHangThanhCong()
	{
		// Xóa giỏ hàng khi hoàn tất đặt hàng?
		Cart::destroy();
		$loaisanpham = LoaiSanPham::all();
		return view('user.dathangthanhcong', compact('loaisanpham'));
	}
	
	public function getDonHang($id = '')
	{
		// Bổ sung code tại đây
		return view('user.donhang');
	}
	
	public function postDonHang(Request $request, $id)
	{
		// Bổ sung code tại đây
	}
	
	public function getHoSoCaNhan()
	{
		return redirect()->route('user.home');
	}
	
	public function postHoSoCaNhan(Request $request)
	{
		$id = Auth::user()->id;
		
		$request->validate([
			'name' => ['required', 'string', 'max:100'],
			'email' => ['required', 'string', 'email', 'max:255', 'unique:nguoidung,email,' . $id],
			'password' => ['confirmed'],
		]);
		
		$orm = NguoiDung::find($id);
		$orm->name = $request->name;
		$orm->username = Str::before($request->email, '@');
		$orm->email = $request->email;
		if(!empty($request->password)) $orm->password = Hash::make($request->password);
		$orm->save();
		
		return redirect()->route('user.home')->with('success', 'Đã cập nhật thông tin thành công.');
	}
	
	public function postDangXuat(Request $request)
	{
		// Bổ sung code tại đây
		return redirect()->route('frontend.home');
	}
}
