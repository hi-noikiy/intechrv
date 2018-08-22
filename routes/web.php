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
    return view('home');
});

Route::get('/flyer/chase', function () {
    return view('flyer.chase');
});

Route::get('/flyer/pursue', function () {
    return view('flyer.pursue');
});

Route::get('/flyer/explore', function () {
    return view('flyer.explore');
});

Route::get('/luna/luna-lite', function () {
    return view('luna.luna-lite');
});

Route::get('/luna/luna-rover', function () {
    return view('luna.luna-rover');
});

Route::get('/luna/luna', function () {
    return view('luna.luna');
});

Auth::routes();

Route::get('/admin/dashboard', 'DashboardController@index')->name('dashboard');
