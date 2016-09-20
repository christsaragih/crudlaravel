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

Route::get('read', 'UserManagement@index');
Route::get('/', function()
{
     $data=App\Anggota::all();
    foreach ($data as $list) {
    	# code...
    	echo $list->nama.' '.$list->alamat.'<br/>';
    }
});
