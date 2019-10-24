<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pendaftarannando;
use Validator;
class PendaftaranNandoController extends Controller
{
    public function simpandata(Request $r){
    	$massage=[
            'required'=> ':attribut wajib diisi',
        'min'=>':attribut minimal :min',
        'max'=>':attribut maksimal :max',];

        $validate=Validator::make($r->all(),[
            'nama'=>'required|unique:pendaftarannando,nama|min:5',
            'notelp'=>'required',
        ],$massage);

        if($validate->fails()){
            return back()->withErrors($validate);
        }else{
            $data = new pendaftarannando();
        $data->nama     = $r->nama;
        $data->alamat   = $r->alamat;
        $data->notelp   = $r->notelp;
        $data->tgllahir = $r->tgllahir;
        $data->save();

        return redirect('/pendaftarannando');
        }
    }
}

