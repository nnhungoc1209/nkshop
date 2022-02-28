<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DanhMucSanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('DanhMucSanPham')->insert([
            ['TenDanhMuc' => 'Đầm suông', 'id_loai' => 1],
            ['TenDanhMuc' => 'Đầm maxi', 'id_loai' => 1],
            ['TenDanhMuc' => 'Áo sơ mi tay dài', 'id_loai' => 2],
            ['TenDanhMuc' => 'Quần dài', 'id_loai' => 3]
        ]);
    }
}
