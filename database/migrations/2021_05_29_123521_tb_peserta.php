<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbPeserta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_peserta', function (Blueprint $table) {
            $table->smallIncrements('id', 4);
            $table->string('email', 64);
            $table->char('username', 8);
            $table->char('password', 8);
            $table->char('nisn', 10);
            $table->string('nama', 64);
            $table->string('nama_panggilan', 32);
            $table->enum('jenis_kelamin', ['P', 'L']);
            $table->enum('agama', ['0', '1', '2', '3', '4', '5', '6']);
            $table->string('ket_agama', 32);
            $table->string('tempat_lahir', 32);
            $table->date('tanggal_lahir');
            $table->string('berat_badan', 3);
            $table->string('tinggi_badan', 3);
            $table->enum('golongan_darah', ['O', 'AB', 'B', 'A']);
            $table->enum('status_anak', ['0','1']);
            $table->longText('alamat_siswa');
            $table->string('username', 20);
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
        Schema::dropIfExists('tb_peserta');
    }
}
