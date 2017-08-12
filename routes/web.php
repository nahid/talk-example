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

Route::get('tests', 'MessageController@tests');

<<<<<<< HEAD
Route::get('/home', 'MessageController@index');
=======
Route::get('/home', 'HomeController@index');
>>>>>>> 08ed55357d1124fbf16f3a0a8a1d11baa1561e93


Route::get('message/{id}', 'MessageController@chatHistory')->name('message.read');

Route::group(['prefix'=>'ajax', 'as'=>'ajax::'], function() {
   Route::post('message/send', 'MessageController@ajaxSendMessage')->name('message.new');
   Route::delete('message/delete/{id}', 'MessageController@ajaxDeleteMessage')->name('message.delete');
});

<<<<<<< HEAD

Auth::routes();
=======
>>>>>>> 08ed55357d1124fbf16f3a0a8a1d11baa1561e93
