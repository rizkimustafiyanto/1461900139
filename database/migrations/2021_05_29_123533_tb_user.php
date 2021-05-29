<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_user', function (Blueprint $table) {
            $table->increments('id_siswa', 5);
            $table->string('nama_siswa', 20);
            $table->string('nis', 12);
            $table->enum('kelamin', ['Laki-laki', 'Perempuan']);
            $table->longText('alamat_siswa');
            $table->string('telpon_siswa', 12);
            $table->string('username', 20);
            $table->string('password', 100);
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
        Schema::dropIfExists('tb_user');
    }
}
