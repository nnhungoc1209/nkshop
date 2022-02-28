
@extends('Admin.adminMaster')

@section('css')
    <style>
        .add{
            font-size: 18px;
            margin: 20px;
        }
        .add a{
            text-decoration: none;
        }
    </style>
@endsection

@section('content')
    <div class="text" style="text-align: center"><h3>DANH SÁCH SẢN PHẨM HIỆN CÓ</h3></div>
    <div id="add" class="add">
        <a href="{{ route('getAddSP') }}"> 
            <i class='bx bx-add-to-queue'></i>
            <span>Thêm Sản Phẩm Mới</span>
        </a>
    </div>

    <table id="table">
        <thead>
            <tr>
                <th>ID Sản Phẩm</th>
                <th>Tên Sản Phẩm</th>
                <th>Giá Sản Phẩm</th>
                <th>Số Lượng Tồn</th>
                <th>Thuộc Danh Mục</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($sp as $SP)
                <tr>
                    <td>{{ $SP->id_sanpham }}</td>
                    <td>{{ $SP->TenSanPham }}
                        @php
                            $hinhanh = DB::table('HinhAnh')->where(['id_sanpham'=>$SP->id_sanpham])->take(1)->select('DuongDan')->get();
                        @endphp
                        @foreach ($hinhanh as $row)
                            <br>
                            <img src="{{ asset($row->DuongDan) }}" style="height: 307px; width: 205px">
                        @endforeach
                    </td>
                    <td>{{ $SP->GiaSanPham }}</td>
                    <td>{{ $SP->SL_Ton }}</td>
                    <td>{{ $SP->DanhMucSP->TenDanhMuc }}</td>
                    <td><a href="{{ route('getEditSP', ['id' => $SP->id_sanpham]) }}"> <i class='bx bxs-edit'></i> </a></td>
                    <td><a href="{{ route('delete-SanPham', ['id' => $SP->id_sanpham]) }}"
                            onclick="return confirm('Xóa {{ $SP->TenSanPham }}?')"> <i class='bx bxs-trash'></i> </a></td> 
                    
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

{{--  --}}