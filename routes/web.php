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


Route::auth();
Auth::routes();
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
});

Route::middleware('auth')->group(function() {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('dashboard', 'HomeController@index')->name('home');

    Route::prefix('question')->group(function(){
        Route::get('/','QuestionController@index')->name('question.index');
        Route::get('/{id}/edit','QuestionController@edit')->name('question.edit');
        Route::put('/{id}','QuestionController@update')->name('question.update');
        Route::delete('/{id}','QuestionController@destroy')->name('question.destroy');
    });

    Route::prefix('agen')->group(function(){
        Route::get('/','AgenController@index')->name('agen.index');
        Route::get('/{id}/edit','AgenController@edit')->name('agen.edit');
        Route::put('/{id}','AgenController@update')->name('agen.update');
        Route::delete('/{id}','AgenController@destroy')->name('agen.destroy');
    });

    Route::prefix('kpi')->group(function(){
        Route::get('/','KpiController@index')->name('kpi.index');
        Route::get('/detail/{id}','KpiController@detail')->name('kpi.detail');
        Route::get('/{id}/edit','KpiController@edit')->name('kpi.edit');
        Route::put('/{id}','KpiController@update')->name('kpi.update');
        Route::delete('/{id}','KpiController@destroy')->name('kpi.destroy');
    });


});
