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
            <div class="text">THÊM MỚI SẢN PHẨM</div>
        </div>
        <hr>
        <div class="form">        
            <form action="{{ route('postAddSP') }}" method="POST" onsubmit="return SP_check()" enctype="multipart/form-data"> 
                {{ csrf_field() }}
                <div class="input">
                    <label class="input-text">Tên danh mục sản phẩm</label>
                    <select id="id_dm" name="id_dm" class="select">
                        <option value="null" selected hidden>Chọn danh mục sản phẩm tương ứng</option>
                        @foreach ($dmsp as $DMSP)
                            <option value={{ $DMSP->id_danhmuc }}> {{ $DMSP->TenDanhMuc }} </option>   
                        @endforeach
                    </select>
                    <div class="thongbao">
                        <i id="tendm_TB"></i>
                    </div>
                </div>

                <div class="input"> 
                    <label class="input-text">Tên sản phẩm</label>
                    <input type="text" name="tensp" id="tensp" placeholder="Nhập tên sản phẩm">
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
                    <input type="nunber" name="giasp" id="giasp" placeholder="Nhập giá sản phẩm">
                    <div class="thongbao">
                        <i id="giasp_TB"></i>
                    </div>
                </div>

                <div class="input">
                    <label class="input-text">Số lượng</label>
                    <input type="text" name="slsp" id="slsp" placeholder="Nhập số lượng sản phẩm">
                    <div class="thongbao">
                        <i id="slsp_TB"></i>
                    </div>
                </div>
                
                <div class="input">
                    <label class="input-text">Hình ảnh sản phẩm</label>
                    <input type="file" multiple=multiple name="hasp[]" id="hasp" accept="image/*" required>
                    <div class="thongbao">
                        <i id="hasp_TB"></i>
                    </div>
                </div>
                
                <div class="input12">
                    <label class="input-text">Mô tả sản phẩm</label>
                    <textarea id="mota" name="mtsp"></textarea>
                    <div class="thongbao">
                        <i id="mtsp_TB"></i>
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