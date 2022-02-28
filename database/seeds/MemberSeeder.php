<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Member')->insert([
            // ['username' => 'HoaAn', 'HoTen' => 'Hoà An', 'password' => bcrypt('1212'), 'id_role' => 2],
            // ['username' => 'KhaVy', 'HoTen' => 'Khả Vy', 'password' => bcrypt('1212'), 'id_role' => 2]
            ['username' => 'KimNgan', 'HoTen' => 'Võ Kim Ngân', 
            'NgaySinh' => Carbon::parse('2005-09-09'), 'SDT' => '0775897215', 'DiaChi' => '123, KV Long Tuyền, Bình Thủy',
            'password' => bcrypt('1212'), 'id_role' => 2],

            ['username' => 'KhanhVy', 'HoTen' => 'Võ Khánh Vy', 
            'NgaySinh' => Carbon::parse('2009-08-04'), 'SDT' => '0776875142', 'DiaChi' => '123, KV Long Tuyền, Bình Thủy',
            'password' => bcrypt('1212'), 'id_role' => 2]
        ]);
    }
}
