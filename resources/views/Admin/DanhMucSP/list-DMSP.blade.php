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
    <div class="text" style="text-align: center"><h3>DANH SÁCH DANH MỤC SẢN PHẨM HIỆN CÓ</h3></div>
    <div id="add" class="add">
        <a href="{{ route('getAddDMSP') }}"> 
            <i class='bx bx-add-to-queue'></i>
            <span>Thêm Danh Mục Sản Phẩm Mới</span>
        </a>
    </div>

    <table id="table">
        <thead>
            <tr>
                <th>ID Danh Mục</th>
                <th>Tên Danh Mục</th>
                <th>Thuộc Loại</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($DMSP1 as $DMSP)
                <tr>
                    <td>{{ $DMSP->id_danhmuc }}</td>
                    <td>{{ $DMSP->TenDanhMuc }}</td>
                    <td>{{ $DMSP->LoaiSP->TenLoai }}</td>
                    <td><a href="{{ route('getEditDMSP', ['id' => $DMSP->id_danhmuc]) }}"> <i class='bx bxs-edit'></i> </a></td>
                    {{-- <td><a href="#"><i class='bx bxs-edit'></i></a></td> --}}
                    <td><a href="{{ route('delete-DMSP', ['id' => $DMSP->id_danhmuc]) }}"
                            onclick="return confirm('Xóa {{ $DMSP->TenDanhMuc }}?')"> <i class='bx bxs-trash'></i> </a></td> 
                    
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

{{--  --}}