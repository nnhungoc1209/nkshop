@extends('Front.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/Front/ctsp.css') }}">
@endsection

@section('title')
     <title>{{ $ten }}</title>
@endsection

@section('content')
    <div class="content">
        @foreach ($sp as $SP)
                <div class="img-container">
                <div class="img-slides">
                    <img src="{{ asset($SP->HinhAnh[0]->DuongDan) }}" alt="ctsp1">
                </div>

                <div class="img-slides">
                    <img src="{{ asset($SP->HinhAnh[1]->DuongDan) }}" alt="ctsp2">
                </div>

                <a class="prev" onclick="plusSlide(-1)">&#10094;</a>
                <a class="next" onclick="plusSlide(1)">&#10095;</a>

                <div class="thumbnail">
                    <div class="img-thumbnail">
                        <img src="{{ asset($SP->HinhAnh[0]->DuongDan) }}" alt="ctsp1" onclick="currentSlide(1)">
                    </div>

                    <div class="img-thumbnail">
                        <img src="{{ asset($SP->HinhAnh[1]->DuongDan) }}" alt="ctsp2" onclick="currentSlide(2)">
                    </div>
                </div>
            </div>

            <div class="infor">
                <h1>{{ $SP->TenSanPham }}</h1>
                <h1>{{ number_format($SP->GiaSanPham) }}</h1>
                <p>{!! $SP->MoTa !!}</p> 

                <div class="form-container">
                    @if ($SP->SL_Ton == 0)
                        <h3>Sản phẩm đã hết hàng.</h3>
                    @else
                        <form action="{{ route('add-cart') }}" method="post" onsubmit="return SLM_check()">
                            {{ csrf_field() }}
                            <label for="sl-mua">Số lượng</label>
                            <input id="sl-mua" type="number" value="1" min="1" name="sl">
                            <input type="hidden" value="{{ $SP->id_sanpham }}" name="idsp">
                            <p id="sl-ton" style="display: none;">{{ $SP->SL_Ton }}</p>
                            <h3 id="thongbao"></h3>
                            <br>
                            <input type="submit" value="THÊM VÀO GIỎ">
                        </form>
                    @endif
                </div>
                @if (session('alert'))
                    <div>Sản phẩm đã được thêm vào giỏ hàng!</div>
                @endif
            </div>
        @endforeach
        
    </div>
    @section('lower-script')
        <script src="{{ asset('js/Front/slideShow.js') }}"></script>
        <script src="{{ asset('js/check.js') }}"></script>
    @endsection
@endsection
