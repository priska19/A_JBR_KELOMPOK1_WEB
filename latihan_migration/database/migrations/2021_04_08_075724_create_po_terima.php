<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoTerima extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('po_terima', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nopo');
            $table->string('kd_cus');
            $table->string('kode');
            $table->date('tanggal');
            $table->integer('qty');
            $table->integer('total');
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
        Schema::dropIfExists('po_terima');
    }
}
