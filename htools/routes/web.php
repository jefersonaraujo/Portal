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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('cadastro/concentrador', 'ConcentradorController');
Route::resource('callcenter/agent', 'AgentController');
Route::resource('callcenter/pausas', 'PausasController');
Route::resource('pabx/chamadas', 'ChamadasController');
Route::resource('pabx/abandonadas', 'AbandonadasController');
Route::resource('pabx/mramais', 'MonitorRamaisController');



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
