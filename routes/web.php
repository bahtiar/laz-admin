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

    Route::prefix('analytics')->group(function(){
        Route::get('/','AnalyticsController@index')->name('analytics.index');
        Route::get('/{id}/edit','AnalyticsController@edit')->name('analytics.edit');
        Route::put('/{id}','AnalyticsController@update')->name('analytics.update');
        Route::delete('/{id}','AnalyticsController@destroy')->name('analytics.destroy');
    });


});
