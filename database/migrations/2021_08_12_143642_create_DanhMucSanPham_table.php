<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDanhMucSanPhamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DanhMucSanPham', function (Blueprint $table) {
            $table->increments('id_danhmuc');
            $table->string('TenDanhMuc', 60);
            $table->unsignedInteger('id_loai');
            $table->timestamps();
           
            $table->foreign('id_loai','FK_LoaiSanPham')
            ->references('id_loai')->on('loaisanpham')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('DanhMucSanPham');
    }
}
