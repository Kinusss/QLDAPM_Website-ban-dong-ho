<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LoaiSanPham extends Model
{
	use HasFactory;
	protected $table = 'loaisanpham';
	
	public function SanPham(): HasMany
	{
		return $this->hasMany(SanPham::class, 'loaisanpham_id', 'id');
	}
}
