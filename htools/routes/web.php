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
Route::resource('callcenter/cdr', 'CdrController');
//Route::get('cdr', 'CdrController@index');
Route::get('pdf', 'AgentController@nameMethod');
Route::get('generate-pdf/','AgentController@generatePDF')->name('pdf');
Route::get('callcenter/report/generate-pdf','AgentReport@generatePDF');
Route::resource('callcenter/report','AgentReport');
Route::resource('report/report_agent','AgentReport');
Route::resource('report/report_count','ReportCountController');


Route::resource('dashboard','DashboardController');







Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
