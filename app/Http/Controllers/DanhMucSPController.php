<?php

namespace App\Http\Controllers;

use App\DanhMucSanPham;
use App\LoaiSanPham;
use Illuminate\Http\Request;

class DanhMucSpController extends Controller
{
    public function show()
    {
        $DMSP = DanhMucSanPham::all();
        return view('Admin.DanhMucSP.list-DMSP', ['DMSP1'=>$DMSP]);
    }

    public function delete($id)
    {
        $DMSP = DanhMucSanPham::find($id);
        $DMSP->delete();
        return redirect()->route(('list-DMSP'));
    }


    public function getAdd()
    {
        $LSP = LoaiSanPham::all();
        return view('Admin.DanhMucSP.add-DMSP', ['LSP'=>$LSP]);
    }

    public function add(Request $request)
    {
        $this->validate($request, 
        [
            'tendm' => 'unique:DanhMucSanPham,TenDanhMuc'
        ], 
        [
            'tendm.unique' => 'Danh mục sản phẩm đã tồn tại.'
        ]);   

        $DMSP = new DanhMucSanPham();
        $DMSP->TenDanhMuc = $request->tendm;
        $DMSP->id_loai = $request->id_loai;

        $DMSP->save();
        return redirect()->route('list-DMSP');
    }

    public function getEdit($id)
    {
        $LSP = LoaiSanPham::all();
        $DMSP = DanhMucSanPham::find($id);
        return view('Admin.DanhMucSP.edit-DMSP', ['DMSP'=>$DMSP, 'LSP'=>$LSP]);
    }

    public function edit(Request $request, $id)
    {
        $DMSP = DanhMucSanPham::find($id);
        if (strtolower($DMSP->TenDanhMuc) != strtolower($request->tendm)) {
            $this->validate($request, 
            [
                'tendm' => 'unique:DanhMucSanPham,TenDanhMuc'
            ], 
            [
                'tendm.unique' => 'Danh mục sản phẩm đã tồn tại.'
            ]);
        }
        $DMSP->id_loai = $request->id_loai;
        $DMSP->TenDanhMuc = $request->tendm;

        $DMSP->save();
        return redirect()->route('list-DMSP');
    }
}
