<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MauSacSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('MauSac')->insert([
            ['TenMau' => 'Hoa'],
            ['TenMau' => 'Đen'],
            ['TenMau' => 'Trắng']
        ]);
    }
}
