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
        Schema::create('alumnis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_alumni', 50);
            $table->bigInteger('nik');
            $table->string('jenis_kelamin', 20);
            $table->string('alamat', 128);
            $table->string('jurusan', 50);
            $table->integer('tahun_lulus');
            $table->string('no_telp', 20);
            $table->string('sosmed', 50);
            $table->string('keg_set_lulus', 50);
            $table->string('nama_industry', 256);
            $table->string('upload_foto', 50);
            $table->string('rating_smksa', 50);
            $table->string('saran_smksa', 500);
            $table->date('tanggal_daftar');
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
        Schema::dropIfExists('alumnis');
    }
};
