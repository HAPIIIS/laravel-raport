<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archive_data', function (Blueprint $table) {
            $table->id();
            $table->string('nama_uploader');
            $table->date('tgl_upload');
            $table->string('nama_file');
            $table->string('jenis_file');
            $table->string('dokumen_file');
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
        Schema::dropIfExists('archive_data');
    }
};
