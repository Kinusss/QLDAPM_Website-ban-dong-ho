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
use Illuminate\Support\Facades\Mail;

use Socialite;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getHome()
    {
        $loaisanpham = LoaiSanPham::all();
		$hangsanxuat = HangSanXuat::all();
		$sanpham = SanPham::all();
		return view('home', compact('loaisanpham', 'hangsanxuat', 'sanpham'));
    }
    public function index()
    {
        return view('home');
    }
}
