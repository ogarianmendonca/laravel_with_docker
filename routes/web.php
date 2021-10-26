<?php

use Illuminate\Support\Facades\Route;

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

Route::prefix('banda')->group(function () {
    Route::get('', 'BandaController@index')->name('banda.index');
    Route::get('cadastrar', 'BandaController@cadastrar')->name('banda.cadastrar');
    Route::post('cadastra', 'BandaController@cadastra')->name('banda.cadastra');
    Route::get('editar/{id}', 'BandaController@editar')->name('banda.editar');
    Route::put('edita/{id}', 'BandaController@edita')->name('banda.edita');
    Route::get('detalhes/{id}', 'BandaController@detalhes')->name('banda.detalhes');
    Route::delete('excluir/{id}', 'BandaController@excluir')->name('banda.excluir');
});

