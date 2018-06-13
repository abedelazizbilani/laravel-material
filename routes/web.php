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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});


/*
 * Dashboard Routes
 */
Route::prefix('dashboard')->namespace('admin')->group(function () {

    Route::name('dashboard.index')->get('/', 'DashboardController@index');
    Route::name('dashboard.table')->get('/table', 'DashboardController@table');
    Route::name('dashboard.icons')->get('/icons', 'DashboardController@icons');

    Route::resource('users', 'UserController');
},['middleware'=>'auth']);