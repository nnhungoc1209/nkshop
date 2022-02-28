<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DanhGiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('DanhGia')->insert([
            // ['Rating' => 4, 'id_sanpham' => 1, 'username' => 'KhaVy'],
            // ['Rating' => 5, 'id_sanpham' => 1, 'username' => 'HoaAn'],
            // ['Rating' => 1, 'id_sanpham' => 2, 'username' => 'HoaAn'],
            // ['Rating' => 4, 'id_sanpham' => 2, 'username' => 'HoaAn'],
            // ['Rating' => 2, 'id_sanpham' => 2, 'username' => 'KhaVy'],
            // ['Rating' => 3, 'id_sanpham' => 1, 'username' => 'KhaVy'],
            // ['Rating' => 5, 'id_sanpham' => 2, 'username' => 'KhaVy']
        ]);
    }
}
