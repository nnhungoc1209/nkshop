<?php

use Illuminate\Database\Seeder;

class SlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slide')->insert([
            ['Image' => 'damhoa', 'Link' => 'upload/sanpham/h1', 'username' => 'nngoc'], 
            ['Image' => 'quanshort', 'Link' => 'upload/sanpham/h2', 'username' => 'qkhanh'],
            ['Image' => 'vay', 'Link' => 'upload/sanpham/h3', 'username' => 'nngoc']
        ]);
    }
}
