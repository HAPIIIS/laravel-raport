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
        Schema::create('hadis', function (Blueprint $table) {
            $table->id();
            $table->char('nisn', 15)->unique();
            $table->foreign('nisn')->references('nisn')->on('users');
            $table->string('nama_siswa');
            $table->string('kelas');
            $table->string('d1')->nullable();
            $table->string('d2')->nullable();
            $table->string('d3')->nullable();
            $table->string('d4')->nullable();
            $table->string('d5')->nullable();
            $table->string('d6')->nullable();
            $table->string('h1')->nullable();
            $table->string('h2')->nullable();
            $table->string('h3')->nullable();
            $table->string('h4')->nullable();
            $table->string('h5')->nullable();
            $table->string('h6')->nullable();            
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
        Schema::dropIfExists('hadis');
    }
};
