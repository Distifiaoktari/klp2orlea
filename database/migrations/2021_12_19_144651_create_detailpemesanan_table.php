<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailpemesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailpemesanan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pemesanan_id')->unsigned()->index();
            $table->foreign('pemesanan_id')->references('id')->on('pemesanan')->onDelete('cascade');;
            $table->bigInteger('paketbarber_id')->unsigned()->index();
            $table->foreign('paketbarber_id')->references('id')->on('paketbarber')->onDelete('cascade');;
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
        Schema::dropIfExists('detailpemesanan');
    }
}
