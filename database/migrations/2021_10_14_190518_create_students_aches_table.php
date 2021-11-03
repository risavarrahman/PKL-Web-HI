<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsAchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_aches', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mahasiswa');
            $table->string('nama_kegiatan');
            $table->date('waktu_penyelenggaraan');
            $table->string('tingkat');
            $table->string('prestasi');
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
        Schema::dropIfExists('students_aches');
    }
}
