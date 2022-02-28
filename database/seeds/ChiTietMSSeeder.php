<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChiTietMSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ChiTietMS')->insert([
            ['id_mau' => 1, 'id_sanpham' => 1],
            ['id_mau' => 2, 'id_sanpham' => 2]
        ]);
    }
}
