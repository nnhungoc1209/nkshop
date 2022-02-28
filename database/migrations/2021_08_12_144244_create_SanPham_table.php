<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanPhamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SanPham', function (Blueprint $table) {
            $table->increments('id_sanpham');
            $table->string('TenSanPham', 80);
            $table->integer('GiaSanPham');
            $table->string('MoTa', 400);
            $table->integer('SL_Ton');
            $table->unsignedInteger('id_danhmuc');
            $table->timestamps();

            $table->foreign('id_danhmuc','FK_DanhMucSanPham')
            ->references('id_danhmuc')->on('DanhMucSanPham')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('SanPham');
    }
}
