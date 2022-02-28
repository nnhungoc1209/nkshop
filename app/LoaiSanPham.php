<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiSanPham extends Model
{
    protected $table = "loaisanpham";
    protected $primaryKey = "id_loai";

    public function DanhMucSP()
    {
        return $this->hasMany(DanhMucSanPham::class, 'id_loai', 'id_loai');
    }
}

