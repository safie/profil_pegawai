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
        Schema::create('t_pengguna', function (Blueprint $table) {
            $table->id();
            $table->string('idPengguna');
            $table->string('username');
            $table->string('katalaluan');
            $table->string('nama');
            $table->string('no_kp');
            $table->string('emel');
            $table->string('no_bimbit');
            $table->string('no_pejabat');
            $table->string('jawatan');
            $table->string('gelaranJawatan');
            $table->string('gred');
            $table->string('kumpulan');
            $table->string('bahagian');
            $table->string('agensi');
            $table->string('peranan');
            $table->string('status');
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
        Schema::dropIfExists('t_pengguna');
    }
};
