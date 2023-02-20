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
        Schema::create('t_g_a_s', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('jdl_tga')->nullable;
            $table->string('laporan');
            $table->string('link_git');
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
        Schema::dropIfExists('t_g_a_s');
    }
};
