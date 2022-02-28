<?php

namespace App\Http\Controllers;

use App\GioHang;
use App\HoaDon;
use App\SanPham;
use Illuminate\Http\Request;

class HoaDonController extends Controller
{
    public function show()
    {
        $HoaDon = HoaDon::all();
        return view('Admin.HoaDon.list-HoaDon', ['hd'=>$HoaDon]);
    }

    public function showDetail($idhd)
    {
        $CTHD = GioHang::where('id_hoadon', $idhd)->get();

        $idsp_cthd = array();
        foreach ($CTHD as $value) {
            array_push($idsp_cthd, $value->id_sanpham);
        }

        $SP_HD = SanPham::whereIn('id_sanpham', $idsp_cthd)->get();

        // foreach ($CTHD as $value) {
        //     echo $value->id_giohang;
        //     echo "<br>";
        //     echo $value->id_hoadon;
        //     echo "<br>";
        //     echo $value->id_sanpham;
        //     echo "<br>";
        // }
        //dd($CTHD);
        return view('Admin.HoaDon.detail-HoaDon', ['cthd'=>$CTHD, 'sp_hd'=>$SP_HD]);
    }

    public function change($id)
    {
        $DH = HoaDon::find($id);
        if ($DH->status == 0) {
            $DH->status = 1;
            $DH->save();
            echo "Đã giao hàng";    
        }        
    }
}
