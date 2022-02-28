@extends('Admin.adminMaster')
@section('content')
    <div class="text" style="text-align: center"><h3>DANH SÁCH ĐƠN HÀNG</h3></div>
    <table id="table">
        <thead>
            <tr>
                <th>Khách Hàng</th>
                <th>Địa Chỉ</th>
                <th>Số Điện Thoại</th>
                <th>Tổng Tiền</th>
                <th>Ghi Chú</th>
                <th>Trạng Thái</th>                
                <th>Ngày đặt hàng</th>
                <th>Chi tiết</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($hd as $HoaDon)
                <tr>
                    <td>{{ $HoaDon->HoTenKH }}</td>
                    <td>{{ $HoaDon->DiaChi }}</td>
                    <td>{{ $HoaDon->SDT }}</td> 
                    <td>{{ number_format($HoaDon->TongTien)}}</td>
                    <td>{{ $HoaDon->GhiChu }}</td>
                    <td>
                        @if ($HoaDon->status==1)
                            {{ "Đã giao hàng" }}
                        @else
                            <p id="{{ $HoaDon->id_hoadon }}">
                                {{ "Đã giao" }}
                                <input name="status" type="checkbox" onchange="change_Status({{ $HoaDon->id_hoadon }})">
                            </p>                            
                        @endif
                    </td>
                    <td>{{ $HoaDon->created_at }}</td>
                    <td><a href="{{ route('detail-HoaDon', ['idhd'=>$HoaDon->id_hoadon]) }}"><i style="font-size: 20px;" class='bx bxs-calendar-edit'></i></a></td>
                </tr>
            @endforeach            
        </tbody>
    </table>
    @section('lowerScript')
        <script>
            function change_Status(id) {
                $(document).ready(function () {
                    $.get("change/" + id, function (data) {
                        $("#" + id).html(data);
                    });
                });            
            }
        </script>        
    @endsection    
@endsection

