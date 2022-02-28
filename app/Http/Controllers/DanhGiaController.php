<?php

namespace App\Http\Controllers;

use App\DanhGia;
use App\SanPham;
use Illuminate\Http\Request;

class DanhGiaController extends Controller
{
    public function show()
    {
        $SanPham = SanPham::all();
        $DanhGia = DanhGia::all();
        return view('Admin.DanhGia.list-DanhGia', ['DanhGia'=>$DanhGia, 'SanPham1'=>$SanPham]);
    }
}
