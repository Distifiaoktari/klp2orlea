<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pelanggan_id')->unsigned()->index();
            $table->foreign('pelanggan_id')->references('id')->on('pelanggan')->onDelete('cascade');;
            $table->bigInteger('barberman_id')->unsigned()->index();
            $table->foreign('barberman_id')->references('id')->on('barberman')->onDelete('cascade');;
            $table->date('tanggal_order');
            $table->string('status_bayar');
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
        Schema::dropIfExists('pemesanan');
    }
}
