@extends('Admin.adminMaster')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/form.css') }}"> 
@endsection

@section('content')
    <div class="wrap">
        <div class="title">
            <div class="text">THÊM MỚI LOẠI SẢN PHẨM <br>
            <h5>Lưu ý: Thêm Danh Mục Sản Phẩm sau khi thêm Loại Sản Phẩm</h5></div>
        </div>
        <hr>
        <div class="form">        
            <form action="{{ route('postAddLSP') }}" method="POST" onsubmit="return LSP_check()">
                {{ csrf_field() }}
                <div class="input">
                    <label class="input-text">Tên loại sản phẩm</label>
                    <input type="text" name="tenloai" id="ten" placeholder="Nhập tên loại sản phẩm">
                    <div class="thongbao">
                        <i id="tenTB"></i>
                        @if (count($errors) > 0)
                            @foreach ($errors->all() as $err)
                                {{ $err }} <br>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="my-btn">
                    <input type="submit" class="submit" value="Thêm Mới">                     
                    <input type="reset" class="reset" value="Nhập Lại">
                </div>               
            </form>
        </div> 
    </div>  

    @section('lowerScript')
        <script src="{{ asset('js/check.js') }}"></script>
    @endsection 
@endsection
