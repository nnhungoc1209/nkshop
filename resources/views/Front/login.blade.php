@extends('Front.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/Front/login.css') }}"> 
@endsection

@section('title')
    <title>Tài khoản</title> 
@endsection

@section('content')
<div class="content">
    <div class="login">
        <h1>ĐĂNG NHẬP</h1>
        <form action="{{ route('Auth-login') }}" method="post">
            {{ csrf_field() }}
            <label for="username">Tên đăng nhập</label> <br>
            <input type="text" id="username1" placeholder="Tên đăng nhập" name="username" required> <br>

            <label for="pw">Mật khẩu</label> <br>
            <input type="password" id="pw1" placeholder="Mật khẩu" name="password" required>

            <input type="submit" value="ĐĂNG NHẬP">
        </form>
    </div>

    <div class="sign-up">
        <h1>ĐĂNG KÝ</h1>
        <form action="{{ route('sign-up') }}" method="post" onsubmit="return signUp_check()">
            {{ csrf_field() }}
            <label for="hoten">Họ và tên</label> <br>
            <input type="text" id="hoten" name="hoten" placeholder="Họ và tên" value="{{ old('hoten') }}" required> <br>
            <div class="thongbao">
                <i id="hoten_TB" style="color: red; font-size: 16px;"></i>
            </div>

            <label for="hoten">Ngày sinh</label> <br>
            <input type="date" id="ns" name="ns" placeholder="Ngày sinh" value="{{ old('ns') }}" required> <br>
            <div class="thongbao">
                <i id="ns_TB" style="color: red; font-size: 16px;"></i>
            </div>

            <label for="sdt">Số điện thoại</label> <br>
            <input type="tel" id="sdt" name="sdt" placeholder="Số điện thoại" value="{{ old('sdt') }}" pattern="[0-9]{10}" required> <br>
            <div class="thongbao">
                <i id="sdt_TB" style="color: red; font-size: 16px;"></i>
            </div>

            <label for="diachi">Địa chỉ</label> <br>
            <input type="text" id="diachi" name="diachi" placeholder="Địa chỉ" value="{{ old('diachi') }}" required> <br>
            <div class="thongbao">
                <i id="diachi_TB" style="color: red; font-size: 16px;"></i>
            </div>

            <label for="username">Tên đăng nhập</label> <br>
            <input type="text" id="username" name="username" placeholder="Tên đăng nhập" value="{{ old('username') }}" required> <br>
            <div class="thongbao">
                <i id="username_TB" style="color: red; font-size: 16px;">
                    @if (count($errors) > 0)
                        @foreach ($errors->all() as $err)
                            {{ $err }} <br>
                        @endforeach
                    @endif
                </i>
            </div>

            <label for="pw">Mật khẩu (Gồm chữ, số và ký tự đặc biệt. Từ 6 đến 32 ký tự)</label> <br>
            <input type="password" id="pw" name="pw" placeholder="Mật khẩu" value="{{ old('pw') }}" required>
            <div class="thongbao">
                <i id="password_TB" style="color: red; font-size: 16px;"></i>
            </div>

            <input type="submit" value="ĐĂNG KÝ">
        </form>
    </div>
</div>
    @section('lower-script')
        <script src="{{ asset('js/check.js') }}"></script>
    @endsection 
@endsection


