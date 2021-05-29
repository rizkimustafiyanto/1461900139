<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbKontak extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_kontak', function (Blueprint $table) {
            $table->increments('id', 11);
            $table->string('nama', 64);
            $table->string('email', 64);
            $table->string('judul', 128);
            $table->longText('isi');
            $table->enum('is_dibalas', ['0', '1']);
            $table->dateTime('created_at', $precision = 0);
            $table->dateTime('updated_at', $precision = 0);
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
        Schema::dropIfExists('tb_kontak');
    }
}
