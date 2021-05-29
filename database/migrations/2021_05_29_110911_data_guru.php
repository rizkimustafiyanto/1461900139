<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DataGuru extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_guru', function (Blueprint $table) {
            $table->increments('id_guru', 3);
            $table->string('nama_guru', 20);
            $table->string('nip', 12);
            $table->enum('kelamin', ['Laki-laki', 'Perempuan']);
            $table->longText('alamat_guru');
            $table->string('telpon_guru', 12);
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
        Schema::dropIfExists('data_guru');
    }
}