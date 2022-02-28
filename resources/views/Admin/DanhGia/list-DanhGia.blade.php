@extends('Admin.adminMaster')
@section('content')
    <div class="text" style="text-align: center"><h3>ĐÁNH GIÁ TRUNG BÌNH THEO SẢN PHẨM</h3></div>
    <table id="table">
        <thead>
            <tr>
                <th>ID Sản Phẩm</th>
                <th>Sản Phẩm</th>
                <th>Thuộc Danh Mục</th>
                <th>Đánh Giá Trung Bình</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($SanPham1 as $SanPham)
                <tr>
                    <td>{{ $SanPham->id_sanpham }}</td>
                    <td>{{ $SanPham->TenSanPham}}
                        @php
                            $hinhanh = DB::table('HinhAnh')->where(['id_sanpham'=>$SanPham->id_sanpham])->take(1)->select('DuongDan')->get();
                        @endphp
                        @foreach ($hinhanh as $row)
                            <br>
                            <img src="{{ asset($row->DuongDan) }}" style="height: 307px; width: 205px">
                        @endforeach
                    </td>
                    <td>{{ $SanPham->DanhMucSP->TenDanhMuc}}</td>
                    <td>
                        @php
                            $danhgia = DB::table('DanhGia')->where(['id_sanpham'=>$SanPham->id_sanpham])->select('Rating')->get();
                            if (count($danhgia)==NULL) {
                                    echo "Sản phẩm chưa có đánh giá nào";
                                }else{
                                    $sum = 0;
                                    foreach ($danhgia as $giatri) {
                                        $sum+=$giatri->Rating;
                                        //echo $giatri->Rating;
                                    }
                                    echo round($sum/count($danhgia), 2); 
                                }                      
                        @endphp
                    </td>                    
                </tr>
            @endforeach            
        </tbody>
    </table>    
@endsection

