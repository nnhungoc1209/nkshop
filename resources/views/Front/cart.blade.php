@extends('Front.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/Front/giohang.css') }}">
@endsection

@section('title')
     <title>Giỏ hàng</title>
@endsection

@section('content')
    @if (is_null($dssp))
        <div class="mess" style="heigh: 100%; margin: 40px auto 23% auto;">
            <h4>Giỏ hàng của bạn đang trống!</h4>
        </div>
    @else
        <div class="content">
            <h1>Giỏ hàng</h1>
            <form action="{{ route('check-out') }}" method="POST">
                {{ csrf_field() }}
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
                            <th>Tùy chọn</th>
                        </tr>
                        @foreach ($dssp as $sp)
                            @php
                                $thanhtien = $sp->GiaSanPham*$cart[$sp->id_sanpham];
                                $tongtien += $thanhtien;
                            @endphp
                            <tr>
                                <td><img src="{{ asset($sp->HinhAnh[0]->DuongDan) }}" alt="hasp"></td>
                                <td>{{ $sp->TenSanPham }} </td>
                                <td>{{ number_format($sp->GiaSanPham) }}</td>
                                <td><input type="number" name="slsp[{{ $sp->id_sanpham }}]" id="slsp" value="{{ $cart[$sp->id_sanpham] }}" min="1"></td>
                                <td>{{ number_format($thanhtien) }}</td>
                                <td><a class="delete" href="{{ route('delete-product', ['idsp'=>$sp->id_sanpham]) }}">Xóa</a></td>
                            </tr>
                        @endforeach                   
                    </table>
                </div>
                <div class="checkout-container">
                    <div class="customer">
                        <div class="infor">
                            <h2>Thông tin khách hàng</h2>
                            <h3>Vui lòng điền đầy đủ thông tin để đặt hàng</h3>
                            @if (isset($user_login))
                                <input type="text" name="hoten" id="hoten" placeholder="Họ và tên" value="{{ $user_login->HoTen }}"><br>
                                <input type="tel" name="sdt" id="sdt" placeholder="Số điện thoại" value="{{ $user_login->SDT }}"> <br>
                                <input type="text" name="diachi" id="diachi" placeholder="Địa chỉ" value="{{ $user_login->DiaChi }}"> <br>
                            @else
                                <input type="text" name="hoten" id="hoten" placeholder="Họ và tên"><br>
                                <input type="tel" name="sdt" id="sdt" placeholder="Số điện thoại"> <br>
                                <input type="text" name="diachi" id="diachi" placeholder="Địa chỉ"> <br>
                            @endif
                            
                            <input type="hidden" name="tongtien" id="tongtien" value="{{ $tongtien }}">
                        </div>

                        <div class="note">
                            <label for="note">Chú thích</label> <br>
                            <textarea name="note" id="note" cols="30" rows="10"></textarea>
                        </div>
                    </div>
    
                    <div class="checkout">
                        <p>Tổng tiền: <b>{{ number_format($tongtien) }}</b></p>
                        <input type="submit" value="Cập nhật" formaction="{{ route('update-cart') }}" style="margin-right: 30px;">
                        <input type="submit" value="Đặt hàng">
                    </div>
                </div>
            </form>            
        </div>
    @endif
@endsection



