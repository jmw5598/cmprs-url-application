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

use App\Redirect;
use Illuminate\Http\Request;
use App\Http\Controllers\RedirectController;

Route::get('/', 'RedirectController@index');
Route::post('/', 'RedirectController@store');
Route::get('/{hash}', 'RedirectController@redirect');
