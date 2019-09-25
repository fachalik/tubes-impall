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

Auth::routes();

//home
Route::get('/login','ControllerAuth@index')->name('login');
Route::post('/postlogin','ControllerAuth@postlogin');
Route::get('/katalog', 'halamanutamaController@index');
Route::get('/katalog/detail_katalog', 'halamanutamaController@detail_katalog');
Route::get('/keranjang', 'halamanutamaController@keranjang');
Route::get('/service','halamanutamaController@service');
Route::get('/service/service-handphone','halamanutamaController@service_handphone');
Route::get('/service/service-handphone/kendala','halamanutamaController@kendala');
Route::get('/service/service-handphone/kendala/detail-service','halamanutamaController@detail_service');

Route::group(['middleware' => 'authuser'], function()
{
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/home/edit','HomeController@biodata_diri');
    Route::get('/home/lihatservice','HomeController@lihatservice');
});

Route::group(['middleware' => 'authadmin'], function()
{
    route::get('/dashboard', 'ControllerAdmin@index');
    route::get('/pengguna','ControllerAdmin@pengguna');
    route::get('/handphone','controllerproduct@handphone');
    route::get('/sparepart','controllerproduct@sparepart');
    route::post('/handphone/create','controllerproduct@hcreate');
    route::post('/sparepart/create','controllerproduct@screate');
    route::get('/handphone/{id}/edit','controllerproduct@edith');
    route::get('/sparepart/{id}/edit','controllerproduct@edits');
    route::post('/handphone/{id}/edit','controllerproduct@updateh');
    route::post('/sparepart/{id}/edit','controllerproduct@updates');
    route::get('/handphone/{id}/delete','controllerproduct@deleteh');
    route::get('/sparepart/{id}/delete','controllerproduct@deletes');
});