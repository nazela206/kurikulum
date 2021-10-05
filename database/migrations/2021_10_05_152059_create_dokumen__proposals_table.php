<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDokumenProposalsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokumen__proposals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomor_proposal');
            $table->string('nama_pengirim');
            $table->text('deskripsi');
            $table->string('file');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('dokumen__proposals');
    }
}
