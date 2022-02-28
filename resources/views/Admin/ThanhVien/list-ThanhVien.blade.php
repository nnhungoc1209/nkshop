@extends('Admin.adminMaster')
@section('content')
    <div class="text" style="text-align: center"><h3>DANH SÁCH THÀNH VIÊN WEBSITE</h3></div>
    <table id="table">
        <thead>
            <tr>
                <th>Username</th>
                <th>Họ Tên</th>
                <th>Ngày Sinh</th>
                <th>Số Điện Thoại</th>
                <th>Địa Chỉ</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($tv as $ThanhVien)
                <tr>
                    <td>{{ $ThanhVien->username }}</td>
                    <td>{{ $ThanhVien->HoTen}}</td>
                    <td>{{ $ThanhVien->NgaySinh}}</td>
                    <td>{{ $ThanhVien->SDT }}</td> 
                    <td>{{ $ThanhVien->DiaChi }}</td>                     
                </tr>
            @endforeach            
        </tbody>
    </table>    
@endsection

