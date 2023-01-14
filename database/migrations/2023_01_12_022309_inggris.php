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
        Schema::create('inggris', function (Blueprint $table) {
            $table->id();
            $table->integer('nisn');
            $table->string('nama_siswa');
            $table->string('kelas');
            $table->integer('ph1')->nullable();
            $table->integer('ph2')->nullable();
            $table->integer('ph3')->nullable();
            $table->integer('ph4')->nullable();
            $table->integer('ph5')->nullable();
            $table->integer('ph6')->nullable();
            $table->integer('ph7')->nullable();
            $table->integer('ph8')->nullable();
            $table->integer('ph9')->nullable();
            $table->timestamp('posted_at')->nullable();
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
        Schema::dropIfExists('inggris');
    }
};
