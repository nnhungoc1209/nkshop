@extends('Admin.adminMaster')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/form.css') }}"> 
    <style>
        /* .selectpicker{
            border-radius: 12px !important;
            outline: none !important;
            border: 1px solid #11101d !important;
            height: 40px !important;
        } */

        .select{
            width: 100%;
            border-radius: 12px;
            outline: none;
            border: 1px solid #11101d;
            height: 40px;
            font-size: 16px;
        }

        .select:focus{
            box-shadow: 2px 2px 4px 2px rgba(177, 132, 214, 0.877);
        }
    </style>
@endsection

@section('content')
    <div class="wrap">
        <div class="title">
            <div class="text">THÊM MỚI DANH MỤC SẢN PHẨM</div>
        </div>
        <hr>
        <div class="form">        
            <form action="{{ route('postAddDMSP') }}" method="POST" onsubmit="return DMSP_check()">
                {{ csrf_field() }}
                <div class="input">
                    <label class="input-text">Tên loại sản phẩm</label>
                    {{-- <select name="id_loai" class="selectpicker" title="Chọn loại sản phẩm tương ứng" data-width="100%">
                        @foreach ($LSP as $LSP)
                            <option value={{ $LSP->id_loai }}> {{ $LSP->TenLoai }} </option>   
                        @endforeach
                    </select> --}}
                    <select id="id_loai" name="id_loai" class="select">
                        <option value="null" selected hidden>Chọn loại sản phẩm tương ứng</option>
                        @foreach ($LSP as $LSP)
                            <option value={{ $LSP->id_loai }}> {{ $LSP->TenLoai }} </option>   
                        @endforeach
                    </select>
                    <div class="thongbao">
                        <i id="tenloai_TB"></i>
                        @if (count($errors) > 0)
                            @foreach ($errors->all() as $err)
                                {{ $err }} <br>
                            @endforeach
                        @endif
                    </div>
                </div>

                <div class="input">
                    <label class="input-text">Tên danh mục sản phẩm</label>
                    <input type="text" name="tendm" id="tendm" placeholder="Nhập tên danh mục sản phẩm">
                    <div class="thongbao">
                        <i id="tendm_TB"></i>
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
