<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HinhAnhSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('HinhAnh')->insert([
            // ['DuongDan' => 'upload/SanPham/d1.jpg', 'id_sanpham' => 1],
            // ['DuongDan' => 'upload/SanPham/d2.jpg', 'id_sanpham' => 1],
            // ['DuongDan' => 'upload/SanPham/q1.jpg', 'id_sanpham' => 2],
            // ['DuongDan' => 'upload/SanPham/q2.jpg', 'id_sanpham' => 2]
            // ['DuongDan' => 'upload/SanPham/d3.jpg', 'id_sanpham' => 3],
            // ['DuongDan' => 'upload/SanPham/d4.jpg', 'id_sanpham' => 3],
             ['DuongDan' => 'upload/SanPham/d5.jpg', 'id_sanpham' => 4],
             ['DuongDan' => 'upload/SanPham/d6.jpg', 'id_sanpham' => 4]
        ]);
    }
}
