<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChiTietGHSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ChiTietGH')->insert([
            ['id_giohang' => 1, 'id_sanpham' => 1, 'soluong' => 1],
            ['id_giohang' => 2, 'id_sanpham' => 2, 'soluong' => 2],
            ['id_giohang' => 3, 'id_sanpham' => 1, 'soluong' => 3],
            ['id_giohang' => 4, 'id_sanpham' => 2, 'soluong' => 4]
        ]);
    }
}
