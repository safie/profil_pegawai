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
        Schema::create('t_penempatan', function (Blueprint $table) {
            $table->id();
            $table->string('idPenempatan');
            $table->string('idPengguna');
            $table->date('mulaTahunPenempatan');
            $table->date('akhirTahunPenempatan');
            $table->date('tempohPenempatan');
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
        Schema::dropIfExists('t_penempatan');
    }
};
