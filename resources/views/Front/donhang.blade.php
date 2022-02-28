@extends('Front.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/Front/giohang.css') }}">
@endsection

@section('title')
     <title>Đơn hàng</title>
@endsection

@section('content')
        <div class="content">
            <h1>Đơn hàng của bạn</h1>
                <div class="table">
                    @php
                        $tongtien = 0;
                    @endphp
                    <table>
                        <tr>
                            <th></th>
                            <th>Sản phẩm</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr>
                        @foreach ($dssp as $sp)
                            @php
                                $thanhtien = $sp->GiaSanPham*$dh['slsp'][$sp->id_sanpham];
                                $tongtien += $thanhtien;
                            @endphp
                            <tr>
                                <td><img src="{{ asset($sp->HinhAnh[0]->DuongDan) }}" alt="hasp"></td>
                                <td>{{ $sp->TenSanPham }} </td>
                                <td>{{ number_format($sp->GiaSanPham) }}</td>
                                <td>{{ $dh['slsp'][$sp->id_sanpham] }}</td>
                                <td>{{ number_format($thanhtien) }}</td>
                            </tr>
                        @endforeach                   
                    </table>
                </div>
                <div class="checkout-container">
                    <div class="customer">
                        <div class="infor">
                            <h2>Thông tin khách hàng</h2>
                                <input type="text" name="hoten" id="hoten" placeholder="Họ và tên" value="{{ $dh['hoten'] }}" readonly><br>
                                <input type="tel" name="sdt" id="sdt" placeholder="Số điện thoại" value="{{ $dh['sdt'] }}" readonly> <br>
                                <input type="text" name="diachi" id="diachi" placeholder="Địa chỉ" value="{{ $dh['diachi'] }}" readonly> <br>
                        </div> 

                        <div class="note">
                            <label for="note">Chú thích</label> <br>
                            <textarea name="note" id="note" cols="30" rows="10" readonly>{{ $dh['note'] }}</textarea>
                        </div>
                    </div>
    
                    <div class="checkout">
                        <p>Tổng tiền: <b>{{ number_format($tongtien) }}</b></p>
                    </div>
                </div>        
        </div>
@endsection



