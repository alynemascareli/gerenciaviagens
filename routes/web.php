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

Route::get('/', 'DashboardController@index');
Route::get('/home', 'DashboardController@home');

Route::resources([
    'empresa' => 'EmpresaController',
    'viagem' => 'ViagemController',
    'onibus' => 'OnibusController',
    'hotel' => 'HotelController',
    'venda' => 'VendaController',
    'cliente' => 'ClienteController',
    'home'=>'DashboardController',
    'motorista' => 'MotoristaController'
]);
Route::post('/cliente', 'ClienteController@store');
Route::get('/empresa/apagar/{id}', 'EmpresaController@destroy');
Route::get('api/pagamento/{id}', 'APIController@pagamento');
Route::get('api/venda/{id}', 'APIController@venda');
Route::get('pagamento/recebidos', 'PagamentoController@recebidos');
Route::get('pagamento', 'PagamentoController@index');
Route::post('pagamento/up', 'PagamentoController@up');
Route::get('pagamento/create', 'PagamentoController@create');
