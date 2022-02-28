<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member', function (Blueprint $table) {
            $table->string('username', 15);
            $table->string('HoTen',100);
            $table->string('NgaySinh', 10);
            $table->string('SDT', 10);
            $table->string('DiaChi', 50);
            $table->string('password', 100);
            $table->unsignedInteger('id_role');
            $table->rememberToken();
            $table->timestamps();

            $table->primary('username');
            $table->foreign('id_role','FK_member_role')->references('id_role')->on('role')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('member');
    }
}
