<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WahyuPendaftaran extends Migration
{
    private $table = 'pendaftaran';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create($this->table, function(Blueprint $t){
            $t->increments('id_pendaftaran');
            $t->string('nama_pendaftar');
            $t->string('alamat_pendaftar');
            $t->integer('nomor_pendaftar');
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists($this->table);
    }
}
