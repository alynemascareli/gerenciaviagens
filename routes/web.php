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
    'pagamento'=>'PagamentoController',
    // 'api'=>'APIController',
]);
Route::post('/cliente', 'ClienteController@store');
Route::get('/empresa/apagar/{id}', 'EmpresaController@destroy');
Route::get('api/pagamento/{id}', 'ApiController@pagamento');
Route::get('api/venda/{id}', 'ApiController@venda');
Route::post('pagamento/up', 'PagamentoController@up');
