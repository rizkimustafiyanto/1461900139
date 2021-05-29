<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblNilai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_nilai', function (Blueprint $table) {
            $table->increments('id_nilai', 5);
            $table->integer('id_siswa', 5);
            $table->integer('id_pelajaran', 3);
            $table->integer('id_kelas', 3);
            $table->integer('id_guru', 3);
            $table->integer('nilai', 3);
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
        Schema::dropIfExists('tbl_nilai');
    }
}
