<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nik',10);
            $table->string('nama',50);
            $table->integer('id_position');
            $table->integer('id_location');
            $table->string('password',250);
            $table->enum('role',['user','service_desk','agent']);
            $table->enum('level',['chief','korwil','toko']);
            $table->string('foto',250);
            $table->string('updated_by',50);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
