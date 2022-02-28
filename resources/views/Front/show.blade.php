@extends('Front.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/Front/danhmuc.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Front/paginate.css') }}">
@endsection

@section('title')
    <title>{{ $ten }}</title>
@endsection

@section('content')
    <div class="content">
        <div class="category">
            <ul class="child">
                <li><a href="{{ route('showSP') }}"><b> Tất cả sản phẩm</b></a></li>
                <ul class="child">
                    @foreach ($lsp as $LSP)
                        <li><a href="{{ route('showLSP', ['id'=>$LSP->id_loai]) }}"><b>{{ $LSP->TenLoai }}</b>
                            @if (count($LSP->DanhMucSP) > 0)
                                @if ($LSP->TenLoai != $LSP->DanhMucSP[0]->TenDanhMuc)
                                    {{-- <i style="transform: rotate(-90deg);" class='bx bxs-chevron-down'></i>--}} </a> 
                                    <ul class="grandchild">
                                        @foreach ($LSP->DanhMucSP as $DMSP)
                                            <li><a href="{{ route('showDMSP', ['iddm'=>$DMSP->id_danhmuc]) }}">{{ $DMSP->TenDanhMuc }}</a></li>
                                        @endforeach
                                    </ul>
                                @else </a> 
                                @endif
                            @else</a>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </ul>
        </div>

        @if (count($sp) == 0)
            <h2 style="margin: 40px auto;">Không tìm thấy sản phẩm!</h2>
        @else
            <div class="product">
                @foreach ($sp as $SP)
                    <div class="container">                        
                        <div class="product-img">
                            <a href="{{ route('showDetail', ['idsp'=>$SP->id_sanpham]) }}"><img src="{{ asset($SP->HinhAnh[0]->DuongDan) }}" alt="product"></a>
                        </div>
                        <div class="product-infor">
                            <p>{{ $SP->TenSanPham }}</p>
                            <p>{{ number_format($SP->GiaSanPham) }}</p>
                        </div>
                    </div>
                @endforeach
                <div class="paginate">
                    {{$sp->links()}}
                </div>            
            </div>
        @endif
    </div>
@endsection



    

