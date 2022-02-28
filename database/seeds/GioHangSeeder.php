<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GioHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('GioHang')->insert([
            ['username' => 'HoaAn', 'GhiChu' => 'Giao buổi sáng'],
            ['username' => 'KhaVy', 'GhiChu' => 'Gọi điện trước khi giao'],
            ['username' => 'KimNgan', 'GhiChu' => 'Giao giờ hành chính'],
            ['username' => 'KhanhVy', 'GhiChu' => 'Gọi điện trước khi giao']
        ]);
    }
}
