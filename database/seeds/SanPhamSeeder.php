<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('SanPham')->insert([
            // ['TenSanPham' => 'ĐẦM MAXI HOA D02562', 'GiaSanPham' => 999000, 
            // 'MoTa' => 'Chất liệu:  vải tổng hợp cao cấp mềm mại, không nhăn, bền màu.
            // Kiểu dáng: Đầm maxi thiết kế tone màu hồng tím kết hợp họa tiết hoa cùng tone, tay rủ, cổ V
            // Phù hợp :  đi làm, đi sự kiện, hay đi dạo phố,tạo vẻ trẻ trung quyến nữ tính cho người mặc.',
            // 'SL_Ton' => 12, 'id_danhmuc' => 2],

            // ['TenSanPham' => 'QUẦN THIẾT KẾ Q03012', 'GiaSanPham' => 559000, 
            // 'MoTa' => 'Chất liệu: vải tổng hợp cao cấp
            // Kiểu dáng: ​quần thiết kế tone màu đen trơn, cạp thường
            // Phù hợp: đi làm hay đi dạo phố, tạo vẻ thanh lịch cho người mặc.',
            // 'SL_Ton' => 12, 'id_danhmuc' => 4]

            // ['TenSanPham' => 'ĐẦM MAXI DẬP LI D05702', 'GiaSanPham' => 499000, 
            // 'MoTa' => 'Chất liệu: vải tổng hợp cao cấp
            // Kiểu dáng: Đầm maxi 2 dây thiết kế, dập ly nhỏ, tone màu xanh coban nổi bật
            // Phù hợp:  đi làm, dạo phố đều tạo vẻ trẻ trung, nữ tính cho người mặc.',
            // 'SL_Ton' => 12, 'id_danhmuc' => 2],

            ['TenSanPham' => 'ĐẦM MAXI HOA VÀNG D05762', 'GiaSanPham' => 499000, 
            'MoTa' => 'Chất liệu: vải tổng hợp cao cấp
            Kiểu dáng: Đầm maxi 2 dây thiết kế, dập ly nhỏ, tone màu xanh coban nổi bật
            Phù hợp:  đi làm, dạo phố đều tạo vẻ trẻ trung, nữ tính cho người mặc.',
            'SL_Ton' => 12, 'id_danhmuc' => 2]
        ]);
    }
}
