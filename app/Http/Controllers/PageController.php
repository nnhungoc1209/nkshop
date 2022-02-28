<?php

namespace App\Http\Controllers;

use App\DanhMucSanPham;
use App\GioHang;
use App\LoaiSanPham;
use App\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function mainPage()
    {
        $SPM = SanPham::orderBy('id_sanpham', 'desc')->take(4)->get();
        
        //$year = date("Y");
        $year = 2021;

        $ID_SPNB = GioHang::select('id_sanpham', DB::raw('sum(SoLuong) as TSL'))->whereYear('created_at', '=', $year)
                            ->groupBy('id_sanpham')->orderBy('TSL', 'desc')->take(4)->get();
        // //dd($SPNB);

        $id_spnb = array();     //mảng chứa id của các sản phẩm nổi bật
        foreach ($ID_SPNB as  $value) {
            array_push($id_spnb, $value->id_sanpham);            
        }
        //dd($id_spnb);

        $SPNB = SanPham::whereIn('id_sanpham', $id_spnb)->get();
        //dd($SPNB);

        return view("Front.index", ['spm'=>$SPM, 'spnb'=>$SPNB]);
    }

    public function showLSP($id)
    {
        $tenLoai = LoaiSanPham::select('TenLoai')->where('id_loai', $id)->first();
        $iddm_Array = DanhMucSanPham::select('id_danhmuc')->where('id_loai', $id)->get()->toArray();
        //$iddm_Array se tra ve 1 Collection, can phai chuyen Collection sang Array bang ->toArray() de co the su dung ham whereIn
        
        $SP = SanPham::whereIn('id_danhmuc', $iddm_Array)->paginate(6);   
        return view('Front.show', ['sp'=>$SP, 'ten'=>$tenLoai->TenLoai]);
    }

    public function showDMSP($iddm)
    {
        $tenDM = DanhMucSanPham::select('TenDanhMuc')->where('id_danhmuc', $iddm)->first();
        // $SP = SanPham::where('id_danhmuc', $iddm)->get();
        $SP = SanPham::where('id_danhmuc', $iddm)->paginate(6); //paginate(x): get() va phan trang gom co x san pham trong 1 trang
        return view('Front.show', ['sp'=>$SP, 'ten'=>$tenDM->TenDanhMuc]);
    }

    public function showSP()
    {
        $SP = SanPham::paginate(6);
        $ten = "Tất cả sản phẩm";
        return view('Front.show', ['sp'=>$SP, 'ten'=>$ten]);
    }

    public function showDetail($idsp)
    {
        $SP = SanPham::where('id_sanpham', $idsp)->get();
        $tenSP = SanPham::select('TenSanPham')->where('id_sanpham', $idsp)->first();
        return view('Front.showDetail', ['sp'=>$SP, 'ten'=>$tenSP->TenSanPham]);
    }

    public function search(Request $request)
    {
        $keyword = $request->keyword;
        $SP = SanPham::where('TenSanPham', 'like', '%' .$keyword. '%')->paginate(1212);
        // if (count($SP) == 0) {
        //     echo "Rong";
        // }
        // else{
        //     dd($SP);
        // }        

        $ten = "Kết quả tìm kiếm";
        return view('Front.show', ['sp'=>$SP, 'ten'=>$ten]);
    }
}
