@extends('Admin.adminMaster')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/form.css') }}"> 
@endsection

@section('content') 
    <div class="wrap">
        <div class="title">
            <div class="text">CHỈNH SỬA THÔNG TIN "{{ $LSP->TenLoai }}"</div>
        </div>
        <hr>
        <div class="form">
            <form action="{{ route('postEditLSP', ['id'=>$LSP->id_loai] ) }}" method="POST" onsubmit="return LSP_check()">  
                {{ csrf_field() }}
                <div class="input">
                    <label class="input-text">Tên loại sản phẩm</label>
                    <input type="text" name="tenloai" id="ten" value="{{ $LSP->TenLoai }}">
                    <div class="thongbao">
                        <p id="tenTB"></p>
                        @if (count($errors) > 0)
                            @foreach ($errors->all() as $err)
                                {{ $err }} <br>
                            @endforeach
                        @endif
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

