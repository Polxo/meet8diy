<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SidiqPendaftar;

Use View;

class SidiqFormController extends Controller
{

    public function simpandata(Request $req)
    {
  		// $req->jk
		// $req->alamat
		// $req->no_telepon
		$data = new SidiqPendaftar();
		$data->nama = $req->name;
        if ($req->gender == 'red') {
            $data->jk = 'laki-laki';
        }elseif ($req->gender == 'green') {
            $data->jk = 'Perempuan';
        }
        // $data->jk =$req->gender;
		$data->alamat = $req->address;
		$data->no_telepon = $req->phone;
		$data->save();

		return view::make('sidiq.result')
            ->with('name', $req->name)
            ->with('gender', $req->gender)
            ->with('address', $req->address)
            ->with('phone', $req->phone);

    }
}
