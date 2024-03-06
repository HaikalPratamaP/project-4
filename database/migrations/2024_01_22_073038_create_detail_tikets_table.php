<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailTiketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_tikets', function (Blueprint $table) {
            $table->id();
            $table->integer('id_kategori_ticket');
            $table->string('processed_by',50);
            $table->enum('role',['service_desk','agent']);
            $table->date('process_at');
            $table->date('pending_at');
            $table->bigInteger('pending_time')->nullablle();
            $table->bigInteger('solved_time')->nullablle();
            $table->text('note');
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
        Schema::dropIfExists('detail_tikets');
    }
}
