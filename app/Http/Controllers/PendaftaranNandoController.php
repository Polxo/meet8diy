<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pendaftarannando;
class PendaftaranNandoController extends Controller
{
    public function simpandata(Request $r){
    	//$r->nama_barang
    	//$r->hargabarang
    	//$r->qty

    	$data = new pendaftarannando();
    	$data->nama 	= $r->nama;
    	$data->alamat 	= $r->alamat;
    	$data->notelp 	= $r->notelp;
    	$data->tgllahir = $r->tgllahir;
    	$data->save();

    	return redirect('/pendaftarannando');
    }
}

