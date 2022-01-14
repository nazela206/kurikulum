<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->increments('id');
            $table->String('Nama');
            $table->integer('Barang_ID')->unsigned();
            $table->String('Kode_Barang');
            $table->integer('Jumlah_Barang_Masuk')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('Barang_ID')->references('id')->on('barangs')->onUpdate('cascade')->onDelete('cascade');                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('suppliers');
    }
}
