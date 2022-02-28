<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KhuyenMaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('KhuyenMai')->insert([
            ['TenKhuyenMai' => 'Khuyến mãi chào mừng Quốc Khánh 2/9', 'NoiDung' => 'Giảm 30% sản phẩm đầm',
            'NgayBatDau' => Carbon::parse('2021-09-01'), 'NgayKetThuc' => Carbon::parse('2021-09-09')]
        ]);
    }
}
