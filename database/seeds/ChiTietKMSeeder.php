<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChiTietKMSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ChiTietKM')->insert([
            ['id_khuyenmai' => 1, 'id_sanpham' => 1, 'GiaKM' => 666000, 'MucKM' => 30]
        ]);
    }
}
