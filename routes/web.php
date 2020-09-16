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

/* Closure Route*/
// Route::get('/kalaso/home', function () {
//     return view('home');
// })->name('kalaso.home');

/*route prefixing */
Route::group(['prefix' => 'kalaso'], function(){
    // Route::get('home', function () {
    //     return view('home');
    // })->name('kalaso.home');
    Route::get('home','homeController@index')->name('kalaso.home');
/*route closure*/
    Route::get('card', function () {
        return view('card');
    })->name('kalaso.card');
});



