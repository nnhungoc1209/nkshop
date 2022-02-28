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
    <div class="text" style="text-align: center"><h3>DANH SÁCH LOẠI SẢN PHẨM HIỆN CÓ</h3></div>
    <div id="add" class="add">
        <a href="{{ route('getAddLSP') }}">
            <i class='bx bx-add-to-queue'></i>
            <span>Thêm Loại Sản Phẩm Mới</span>
        </a>
    </div>

    <table id="table">
        <thead>
            <tr>
                <th>ID Loại</th>
                <th>Tên Loại</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($LSP as $LSP)
                <tr>
                    <td>{{ $LSP->id_loai }}</td>
                    <td>{{ $LSP->TenLoai }}</td>
                    <td><a href="{{ route('getEditLSP', ['id' => $LSP->id_loai]) }}"> <i class='bx bxs-edit'></i> </a></td>
                    {{-- <td><a href="#"><i class='bx bxs-trash'></i></a></td> --}}
                    <td><a href="{{ route('delete-LSP', ['id' => $LSP->id_loai]) }}"
                            onclick="return confirm('Xóa {{ $LSP->TenLoai }} ?')"> <i class='bx bxs-trash'></i> </a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection