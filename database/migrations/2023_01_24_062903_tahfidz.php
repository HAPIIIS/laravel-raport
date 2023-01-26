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
        Schema::create('tahfidz', function (Blueprint $table) {
            $table->id();
            $table->char('nisn', 15)->unique();
            $table->foreign('nisn')->references('nisn')->on('users')->onDelete('cascade');
            $table->string('nama_siswa');
            $table->string('kelas');
            $table->string('sin_jan')->nullable();
            $table->string('fiz_jan')->nullable();
            $table->string('sin_feb')->nullable();
            $table->string('fiz_feb')->nullable();
            $table->string('sin_mar')->nullable();
            $table->string('fiz_mar')->nullable();
            $table->string('sin_apr')->nullable();
            $table->string('fiz_apr')->nullable();
            $table->string('sin_mei')->nullable();
            $table->string('fiz_mei')->nullable();
            $table->string('sin_jun')->nullable();
            $table->string('fiz_jun')->nullable();            
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
        Schema::dropIfExists('tahfidz');
    }
};
