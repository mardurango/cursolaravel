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

Route::get('/', 'inicioController@index');

Route::group(['prefix' => 'admin', 'namespace'=>'admin'], function () {
    Route::get('permiso', 'permisoController@index')->name('permiso');
    Route::get('permiso/crear', 'permisoController@crear')->name('crear_permiso');
    Route::get('menu', 'menuController@index')->name('menu');
    Route::get('menu/crear', 'menuController@crear')->name('crear_menu');
    Route::post('menu', 'menuController@guardar')->name('guardar_menu');
    Route::post('menu/guardar-orden', 'menuController@guardarorden')->name('guardar_orden');
});
