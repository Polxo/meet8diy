<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\wahyu;

class WahyuController extends Controller
{
    //
    public function simpanWahyu(Request $r)
    {
    	
		$data = new wahyu();
    	$data->nama_pendaftar	= $r->nama_pendaftar;
    	$data->alamat_pendaftar = $r->alamat_pendaftar;
    	$data->nomor_pendaftar 	= $r->nomor_pendaftar;
      	$data->save();

		return redirect('/wahyu');
    }
}
