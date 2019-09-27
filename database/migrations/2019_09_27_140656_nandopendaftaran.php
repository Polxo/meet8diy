<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Nandopendaftaran extends Migration
{
   private $p='pendaftarannando';
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create($this->p, function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nama');
            $table->string('alamat');
            $table->integer('notelp');
            $table->date('tgllahir');
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
        Schema::dropIfExists($this->p);
    }
}
