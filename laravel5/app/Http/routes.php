<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('pengguna/{pengguna}',function ($pengguna)
{
		return "hallo world dari pengguna $pengguna";
});
route::get('berita/{berita?}',function ($berita = "kupu kupu bapakanya naga")
{
	return "berita $berita belum di baca";
});