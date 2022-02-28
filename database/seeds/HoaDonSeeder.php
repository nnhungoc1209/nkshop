<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HoaDonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('HoaDon')->insert([
            ['id_giohang' => 1, 'status' => 'Đã nhận hàng', 
             'HoTenKH' => 'Hòa An', 'DiaChi' => '520 Bùi Hữu Nghĩa, Bình Thủy, Cần Thơ', 'SDT' => '0776243091', 
             'TongTien' => '999000'],
            ['id_giohang' => 2, 'status' => 'Đã nhận hàng', 
             'HoTenKH' => 'Khả Vy', 'DiaChi' => '521 Bùi Hữu Nghĩa, Bình Thủy, Cần Thơ', 'SDT' => '0776243092', 
             'TongTien' => '1118000'],
            ['id_giohang' => 3, 'status' => 'Đã nhận hàng', 
             'HoTenKH' => 'Võ Kim Ngân', 'DiaChi' => '123, KV Long Tuyền, Bình Thủy', 'SDT' => '0775897215', 
             'TongTien' => '2997000'],
            ['id_giohang' => 4, 'status' => 'Chờ xử lý', 
             'HoTenKH' => 'Võ Khánh Vy', 'DiaChi' => '123, KV Long Tuyền, Bình Thủy', 'SDT' => '0776875142', 
             'TongTien' => '2236000'],
        ]);
    }
}
