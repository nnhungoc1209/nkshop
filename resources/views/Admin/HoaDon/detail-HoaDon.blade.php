@extends('Admin.adminMaster')
@section('content')
    <div class="text" style="text-align: center"><h3>CHI TIẾT HÓA ĐƠN</h3></div>
    <table id="table">
        <thead>
            <tr>
                <th>Sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
            </tr>
        </thead>

        <tbody>
                @foreach ($cthd as $CTHD)
                    <tr>
                        <td>{{ $CTHD->GioHangQuaSanPham->TenSanPham }} <br>
                        <img src="{{ asset($CTHD->GioHangQuaSanPham->HinhAnh[0]->DuongDan) }}" alt="hasp" style="width: 200px"> 
                        </td>
                        <td>{{ $CTHD->GioHangQuaSanPham->GiaSanPham }}</td>
                        <td>{{ $CTHD->SoLuong }}</td> 
                        <td>{{ number_format($CTHD->SoLuong*$CTHD->GioHangQuaSanPham->GiaSanPham)}}</td>      
                    </tr>
                @endforeach 
                <tr style="text-align: right; font-size: 18px"> 
                    <td colspan="4">Tổng tiền: {{ $CTHD->GioHangQuaHoaDon->TongTien }}</td> 
                </tr>
        </tbody>
    </table>    
@endsection

