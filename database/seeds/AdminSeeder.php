<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Admin')->insert([
            ['username' => 'nngoc', 'HoTen' => 'Nguyễn Như Ngọc', 'password' => bcrypt('1212'), 'id_role' => 1],
            ['username' => 'qkhanh', 'HoTen' => 'Nguyễn Vương Quốc Khánh', 'password' => bcrypt('1212'), 'id_role' => 1]
        ]);
    }
}
