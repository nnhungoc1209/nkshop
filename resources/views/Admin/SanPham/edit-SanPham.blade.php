@extends('Admin.adminMaster')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/form.css') }}"> 
    <style>
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
            <div class="text"> CHỈNH SỬA THÔNG TIN SẢN PHẨM</div>
        </div>
        <hr>
        <div class="form">        
            <form action="{{ route('postEditSP', ['id'=>$SP->id_sanpham]) }}" method="POST" onsubmit="return SP_check()" enctype="multipart/form-data"> 
                {{ csrf_field() }}
                <div class="input">
                    <label class="input-text">Tên danh mục sản phẩm</label>
                    <select id="id_dm" name="id_dm" class="select">
                        @foreach ($dmsp as $DMSP)
                            <option 
                                @if ($SP->id_danhmuc == $DMSP->id_danhmuc)
                                    {{ "selected" }}
                                @endif
                                value="{{ $DMSP->id_danhmuc }}">{{ $DMSP->TenDanhMuc }}</option>                            
                        @endforeach
                    </select>
                    <div class="thongbao">
                        <i id="tendm_TB"></i>
                    </div>
                </div>

                <div class="input"> 
                    <label class="input-text">Tên sản phẩm</label>
                    <input type="text" name="tensp" id="tensp" value="{{ $SP->TenSanPham }}">
                    <div class="thongbao">
                        <i id="tensp_TB"></i>
                        @if (count($errors) > 0)
                            @foreach ($errors->all() as $err)
                                {{ $err }} <br>
                            @endforeach
                        @endif
                    </div>
                </div>

                <div class="input">
                    <label class="input-text">Giá sản phẩm</label>
                    <input type="nunber" name="giasp" id="giasp" value="{{ $SP->GiaSanPham }}">
                    <div class="thongbao">
                        <i id="giasp_TB"></i>
                    </div>
                </div>

                <div class="input">
                    <label class="input-text">Số lượng</label>
                    <input type="text" name="slsp" id="slsp" value="{{ $SP->SL_Ton }}">
                    <div class="thongbao">
                        <i id="slsp_TB"></i>
                    </div>
                </div>
                
                <div class="input">
                    <label class="input-text">Hình ảnh sản phẩm</label>
                    <input type="file" multiple=multiple name="hasp[]" id="hasp-edit" accept="image/*">
                    <div class="thongbao">
                        <i id="hasp-edit_TB"></i>
                    </div>
                </div>
                
                <div class="input12">
                    <label class="input-text">Mô tả sản phẩm</label>
                    <textarea id="mota" name="mtsp">{{ $SP->MoTa }}</textarea>
                    <div class="thongbao">
                        <i id="mtsp_TB"></i>
                    </div>
                </div>

                <div class="my-btn">
                    <input type="submit" class="submit" value="Chỉnh Sửa">                     
                    <input type="reset" class="reset" value="Nhập Lại">
                </div>                
            </form>
        </div> 
    </div>  

    @section('lowerScript')
        <script src="{{ asset('js/check.js') }}"></script>
    @endsection 
@endsection