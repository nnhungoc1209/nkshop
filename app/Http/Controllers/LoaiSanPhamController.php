<?php

namespace App\Http\Controllers;

use App\LoaiSanPham;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;

class LoaiSanPhamController extends Controller
{
    //Hiển thị DL ra màn hình
    public function show()
    {
        $LSP = LoaiSanPham::all();
        return view('Admin.LoaiSanPham.list-LSP', ['LSP'=>$LSP]);     
    }

    /***********************************************************************************/
    public function getAdd()
    {
        return view('Admin.LoaiSanPham.add-LSP');
    }

    public function add(Request $request)
    {
        $this->validate($request, 
        [
            'tenloai' => 'unique:LoaiSanPham,TenLoai'
        ], 
        [
            'tenloai.unique' => 'Tên loại đã tồn tại.'
        ]);

        //Lấy DL đã nhập bằng $request
        //Tạo đối tượng LSP và thêm vào CSDL
        $LSP = new LoaiSanPham();
        $LSP->TenLoai = $request->tenloai;

        $LSP->save();

        return redirect()->route('list-LSP');
    }

    /***********************************************************************************/
    public function getEdit($id)
    {
        $LSP = LoaiSanPham::find($id);
        return view('Admin.LoaiSanPham.edit-LSP', ['LSP'=>$LSP]);
    }

    public function edit(Request $request, $id)
    {
        $LSP = LoaiSanPham::find($id); 
        if (strtolower($LSP->TenLoai) != strtolower($request->tenloai)) {
            $this->validate($request, 
            [
                'tenloai' => 'unique:LoaiSanPham,TenLoai'
            ], 
            [
                'tenloai.unique' => 'Loại sản phẩm đã tồn tại.'
            ]);
        }
        $LSP->TenLoai = $request->tenloai;

        $LSP->save();

        return redirect()->route('list-LSP');
    }


    /***********************************************************************************/
    public function delete($id) 
    {
        $LSP = LoaiSanPham::find($id);
        $LSP->delete();
        return redirect(route('list-LSP'));
    }
}
