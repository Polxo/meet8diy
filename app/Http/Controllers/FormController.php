<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RendiPendaftaran;
use Validator;

class FormController extends Controller
{
	public function saveForm(Request $r)
	{
		$messages = [
			'required' => ':attribute wajib diisi',
			'min' => ':attribute minimal :min',
			'max' => ':attribute maksimal :max',
		];

		$validate = Validator::make($r->all(),[
			'nama_lengkap' 	=> 'required|unique:rendipendaftaran,nama_lengkap|min:5',
			'nohp' 			=> 'required',
		],$messages);

		if($validate->fails()){
            // Redirect to error pages
			// view('errors.123')->withErrors($validate);
            
            // Redirect to pages form
			return back()->withErrors($validate);
		} else {
			$data 	= new rendipendaftaran();
			$data->nama_lengkap 	= $r->nama_lengkap;
			$data->alamat 			= $r->alamat;
			$data->jk 				= $r->jk;
			$data->nohp 			= $r->nohp;
			$data->email 			= $r->email;
			$data->save();

			return redirect('/form');
		}
	}
}
