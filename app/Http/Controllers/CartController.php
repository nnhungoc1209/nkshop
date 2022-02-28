<?php

namespace App\Http\Controllers;

use App\GioHang;
use App\HoaDon;
use App\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $idsp = (int) $request->idsp; 
        $sl = (int) $request->sl;
        $sanpham = $request->session()->get('giohang');
        //dd($sanpham);
        if(is_null($sanpham)){
            $request->session()->put('giohang', [$idsp => $sl]);
            return redirect()->route('showDetail', ['idsp'=>$idsp])->with('alert', 'Add');
        }else{
            if(!Arr::exists($sanpham, $idsp)){
                $sanpham[$idsp]=$sl;
                $request->session()->put('giohang', $sanpham);
                return redirect()->route('showDetail', ['idsp'=>$idsp])->with('alert', 'Add');

            }else{
                $sanpham[$idsp] += $sl;
                $request->session()->put('giohang', $sanpham); 
                return redirect()->route('showDetail', ['idsp'=>$idsp])->with('alert', 'Add');
            }
        }
    }

    public function show()
    {
        $sanpham = Session::get('giohang');
        // dd($sanpham);   
        if(is_null($sanpham)){
            return view('Front.cart', ['dssp'=>null]);
        }
        else{
            $idsp_arr = array_keys($sanpham);
            //$idsp_arr: chứa các idsp trong $sanpham (trong giỏ hàng)
            $danhsach = SanPham::whereIn('id_sanpham', $idsp_arr)->get();
            return view('Front.cart', ['cart'=>$sanpham, 'dssp'=>$danhsach]);
        }

    }

    public function update(Request $request)
    {
        //dd($request->all());
        $cart_update = $request->slsp;
        $request->session()->put('giohang', $cart_update);
        return redirect()->route('show-cart');
    }

    public function delete($idsp)
    {
        $sanpham = Session::get('giohang');
        unset($sanpham[$idsp]);
        Session::put('giohang', $sanpham);
        return redirect()->route('show-cart');
    }

    public function checkout(Request $request)
    {
        // $cut = HoaDon::where('HoTenKH', $request->hoten)->where('SDT', $request->sdt)->orderBy('id_hoadon', 'desc')->get();
        // dd($cut[0]->id_hoadon);
        //$cut: collection (vẫn là 1 mảng nên cần có chỉ số để có thể truy xuất các thuộc tính)

        try {
            DB::beginTransaction();
            $HD = new HoaDon();
            $HD->status = '0';
            $HD->HoTenKH = $request->hoten;
            $HD->DiaChi = $request->diachi;
            $HD->SDT = $request->sdt;
            $HD->TongTien = $request->tongtien;
            $HD->GhiChu = $request->note;
            $HD->save();

            $idhd = HoaDon::where('HoTenKH', $request->hoten)->where('SDT', $request->sdt)->orderBy('id_hoadon', 'desc')->get();

            $dssp = $request->slsp; 
            $dssp_keys = array_keys($dssp);
            foreach ($dssp_keys as $idsp) {
                $GH = new GioHang();
                $GH->id_hoadon = $idhd[0]->id_hoadon;
                $GH->id_sanpham = $idsp;
                $GH->SoLuong = $dssp[$idsp];
                $GH->save();
            }            
            $request->session()->forget('giohang');

            //forget(): xóa session 'giohang'
            //pull(): lấy và xóa giá trị của 'giohang'
            //dd($donhang);

            $donhang = $request->all();
            //dd($donhang['note']);
            //echo gettype($donhang);
            
            $idsp_arr = array_keys($donhang['slsp']);
            //$idsp_arr: chứa các idsp trong $donhang (trong đơn hàng)

            $danhsach = SanPham::whereIn('id_sanpham', $idsp_arr)->get();            
            //Cập nhật số lượng tồn
            foreach ($danhsach as $sanpham) {
                $sanpham->SL_Ton = $sanpham->SL_Ton - $donhang['slsp'][$sanpham->id_sanpham];
                $sanpham->save();
            }

            DB::commit();
            return view('Front.donhang', ['dh'=>$donhang, 'dssp'=>$danhsach ]);
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->route('show-cart');
        }
    }
}
