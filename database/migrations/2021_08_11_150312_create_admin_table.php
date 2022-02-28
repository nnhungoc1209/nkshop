<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->string('username', 15);
            $table->string('HoTen',100);
            $table->string('password', 100);
            $table->unsignedInteger('id_role');
            $table->rememberToken();
            $table->timestamps();

            $table->primary('username');
            $table->foreign('id_role','FK_admin_role')
                  ->references('id_role')
                  ->on('role')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin');
    }
}

