<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('no_tiket',10);
            $table->string('kendala',50);
            $table->string('detail_kendala',250);
            $table->integer('id_assets');
            $table->integer('id_user');
            $table->integer('id_client');
            $table->enum('status',['created','onprocess','pending','resolved','finished','deleted']);
            $table->enum('priority',['high','medium','low']);
            $table->string('penilaian',50);
            $table->enum('jam_kerja',['ya','tidak']);
            $table->date('estimated');
            $table->string('foto',250);
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
        Schema::dropIfExists('tickets');
    }
}
