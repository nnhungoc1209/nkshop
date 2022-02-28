<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DanhMucSanPham extends Model
{
    protected $table = "danhmucsanpham";
    protected $primaryKey = "id_danhmuc";

    public function LoaiSP ()
    {
        return $this->belongsTo(LoaiSanPham::class, 'id_loai', 'id_loai');
    }

    public function SanPham()
    {
        return $this->hasMany(SanPham::class, 'id_danhmuc', 'id_danhmuc');
    }
}


