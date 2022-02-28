<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GioHang extends Model
{
    protected $table = "giohang";
    protected $primaryKey = "id_giohang";

    public function GioHangQuaSanPham()
    {
        return $this->hasOne(SanPham::class, 'id_sanpham', 'id_sanpham');
    }

    public function GioHangQuaHoaDon()
    {
        return $this->hasOne(HoaDon::class, 'id_hoadon', 'id_hoadon');
    }
}
