<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGioHangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GioHang', function (Blueprint $table) {
            $table->increments('id_giohang');
            $table->unsignedInteger('id_hoadon');
            $table->unsignedInteger('id_sanpham');
            $table->integer('SoLuong');
            $table->timestamps();

            $table->foreign('id_hoadon','FK_GH_HD')
            ->references('id_hoadon')->on('hoadon')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_sanpham','FK_GH_SP')
            ->references('id_sanpham')->on('sanpham')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('GioHang');
    }
}
