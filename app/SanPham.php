<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    protected $table = "sanpham";
    protected $primaryKey = "id_sanpham";

    public function DanhMucSP()
    {
        return $this->belongsTo(DanhMucSanPham::class, 'id_danhmuc', 'id_danhmuc');
    }

    public function HinhAnh()
    {
        return $this->hasMany(HinhAnh::class, 'id_sanpham', 'id_sanpham');
    }

    public function HoaDonQuaGioHang()
    {
        return $this->belongsToMany(HoaDon::class, 'giohang', 'id_sanpham', 'id_hoadon');
    }
}
