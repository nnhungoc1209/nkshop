<?php

namespace App\Http\Controllers;

use App\DanhMucSanPham;
use App\HinhAnh;
use App\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SanPhamController extends Controller
{
    // public function hienthi()
    // {
    //     $sanpham = new SanPham();
    //     $data = SanPham::get();
    //     foreach ($data as $row) {
    //             echo $row->TenSanPham."<br>";
    //             echo $row->GiaSanPham."<br>";
    //             echo $row->MoTa."<br>";
    //             foreach ($row->HinhAnh as $value) {
    //                 echo "<img style='heigth:500px; width:300px' src='$value->DuongDan'>";
    //        }
    //         echo "<hr>";
    //     }     
    // }

    public function show()
    {
        $SanPham= SanPham::all();
        return view('Admin.SanPham.list-SanPham', ['sp'=>$SanPham]);
    }

    public function delete($id) 
    {
        $SP = SanPham::find($id);
        $SP->delete();       
        return redirect()->route('list-SanPham');
    }

    public function getAdd()
    {
        $DMSP = DanhMucSanPham::all();
        return view('Admin.SanPham.add-SanPham', ['dmsp'=>$DMSP]);
    }

    public function add(Request $request)
    {
        $this->validate($request, 
        [
            'tensp' => 'unique:SanPham,TenSanPham'
        ], 
        [
            'tensp.unique' => 'Sản phẩm đã tồn tại.'
        ]);  

        $SP = new SanPham();
        $SP->TenSanPham = $request->tensp;
        $SP->GiaSanPham = $request->giasp;
        $SP->MoTa = $request->mtsp;
        $SP->SL_Ton = $request->slsp;   
        $SP->id_danhmuc = $request->id_dm;
        $SP->save();

        $SP1 = SanPham::where(['TenSanPham'=>$request->tensp])->select('id_sanpham')->first();
        foreach($request->file('hasp') as $value) {
            $HA = new HinhAnh();
            $name = $value->getClientOriginalName();    //Tên có sẵn
            $value->move("upload/SanPham/", $name);      //Upload lên server
            $HA->DuongDan = "upload/SanPham/".$name;     //Lưu vào csdl
            $HA->id_sanpham = $SP1->id_sanpham;
            $HA->save();
        }
        return redirect()->route('list-SanPham');
    }

    public function getEdit($id)
    {
        $DMSP = DanhMucSanPham::all();
        $SP = SanPham::find($id);
        return view('Admin.SanPham.edit-SanPham', ['dmsp'=>$DMSP, 'SP'=>$SP]);
    }

    public function edit(Request $request, $id)
    {
        $SP = SanPham::find($id);
        if(strtolower($SP->TenSanPham) != strtolower($request->tensp)){
            $this->validate($request,
            [
                'tensp' => 'unique:SanPham,TenSanPham'    
            ],
            [
                'tensp.unique' => 'Tên sản phẩm đã tồn tại.'
            ]);
        }
        
        $SP->TenSanPham = $request->tensp;
        $SP->GiaSanPham = $request->giasp;
        $SP->MoTa = $request->mtsp;
        $SP->SL_Ton = $request->slsp;   
        $SP->id_danhmuc = $request->id_dm;
        $SP->save();

        if ($request->hasFile('hasp')) {
            $HA = HinhAnh::where(['id_sanpham'=>$id])->delete();
            foreach($request->file('hasp') as $value) {
                $HA = new HinhAnh();
                $name = $value->getClientOriginalName();    //Tên có sẵn
                $value->move("upload/SanPham/", $name);      //Upload lên server
                $HA->DuongDan = "upload/SanPham/".$name;     //Lưu vào csdl
                $HA->id_sanpham = $SP->id_sanpham;
                $HA->save();
            }
        }
        return redirect()->route('list-SanPham');
    }
}

