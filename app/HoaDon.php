<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    protected $table = "hoadon";
    protected $primaryKey = "id_hoadon";

    public function SanPhamQuaGioHang()
    {
        return $this->belongsToMany(SanPham::class, 'giohang', 'id_hoadon', 'id_sanpham');
    }
}
