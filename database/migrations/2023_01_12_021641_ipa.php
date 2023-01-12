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
        Schema::create('ipa', function (Blueprint $table) {
            $table->id();
            $table->integer('nisn');
            $table->string('nama_siswa');
            $table->integer('ph1');
            $table->integer('ph2');
            $table->integer('ph3');
            $table->integer('ph4');
            $table->integer('ph5');
            $table->integer('ph6');
            $table->integer('ph7');
            $table->integer('ph8');
            $table->integer('ph9');
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
        Schema::dropIfExists('ipa');
    }
};
