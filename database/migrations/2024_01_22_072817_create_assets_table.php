<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->string('no_asset',50);
            $table->string('nama_barang',70);
            $table->integer('id_kategori');
            $table->string('no_serial',50);
            $table->string('merk',50);
            $table->string('model',50);
            $table->enum('status',['digunakan','stock']);
            $table->integer('id_location');
            $table->string('updated_by',50);
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
        Schema::dropIfExists('assets');
    }
}
