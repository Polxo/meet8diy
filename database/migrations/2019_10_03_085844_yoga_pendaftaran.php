<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class YogaPendaftaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private $table = 'yogapendaftaran';
    public function up()
    {
        //
        Schema::create($this->table, function(Blueprint $t){
            $t->increments('id_pendaftaran');
            $t->string('nama_lengkap');
            $t->string('alamat');
            $t->string('jk');
            $t->integer('nohp');
            $t->string('email');
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
