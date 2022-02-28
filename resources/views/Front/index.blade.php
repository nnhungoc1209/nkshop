@extends('Front.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/Front/index.css') }}">
@endsection

@section('title')
    <title>Trang Chủ</title>
@endsection

@section('content')
@if (session('alert'))
    <script>alert('Đã đăng ký tài khoản thành công!')</script>
@endif

<div class="content">
    <div class="cover-image">
        <img src="{{ asset('upload/7.jpg') }}" alt="cover-img">
    </div>
    <div class="sp-moi">
        <h2>SẢN PHẨM MỚI</h2>
        <div class="spm-wrap">
            @foreach ($spm as $SPM)
                <div class="spm">
                    <div class="spm-img">
                        <a href="{{ route('showDetail', ['idsp'=>$SPM->id_sanpham]) }}"><img src="{{ asset($SPM->HinhAnh[0]->DuongDan) }}" alt="sp-img"></a>
                    </div>
                    <div class="spm-info">
                        {{ $SPM->TenSanPham }} <br>
                        {{ number_format($SPM->GiaSanPham) }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="sp-noibat">
        <h2>SẢN PHẨM NỔI BẬT</h2>
        <div class="spnb-wrap">
            @foreach ($spnb as $SPNB)
                <div class="spnb">
                    <div class="spnb-img">
                    <a href="{{ route('showDetail', ['idsp'=>$SPNB->id_sanpham]) }}"><img src="{{ asset($SPNB->HinhAnh[0]->DuongDan) }}" alt="sp-img"></a>
                    </div>
                    <div class="spnb-info">
                        {{ $SPNB->TenSanPham }} <br>
                        {{ number_format($SPNB->GiaSanPham) }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection