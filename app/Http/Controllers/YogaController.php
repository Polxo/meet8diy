<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\YogaPendaftaran;

class YogaController extends Controller
{
    public function simpanPendaftaran(Request $r)
    {
    	// $r->nama_barang
		// $r->harga_barang
		// $r->qty_barang
		$data 	= new yogapendaftaran();
		$data->nama_lengkap 	= $r->nama_lengkap;
		$data->alamat 			= $r->alamat;
		$data->jk 				= $r->jk;
		$data->nohp 			= $r->nohp;
		$data->email 			= $r->email;
		$data->save();

		return redirect('/yoga/pendaftaran');
    }
}
