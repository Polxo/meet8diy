<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/wahyu', function () {
    return view('wahyu');
});
Route::post('/wahyu', 'WahyuController@simpanWahyu');
Route::get('/rendi/pendaftaran', function(){
	return view('rendi/pendaftaran');
});

Route::post('/rendi/pendaftaran', 'RendiPendaftaranController@simpanPendaftaran');

Route::get('/pendaftarannando', function(){
	return view('nando.pendaftarannando');
});

Route::post('/pendaftarannando','PendaftaranNandoController@simpandata');

Route::get('/formsidiq', function(){
	return view('sidiq.form');
});

Route::match(array('GET','POST'),'form/simpan', 'SidiqFormController@simpandata');
Route::get('/yoga/pendaftaran', function(){
	return view('yoga/pendaftaran');
});

Route::post('/yoga/pendaftaran', 'YogaController@simpanPendaftaran');


