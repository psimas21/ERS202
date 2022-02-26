<?php

use Illuminate\Support\Facades\Route;
use App\Events\MessageNotice;

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
// PROJECT ROUTES
Route::post('app/test_notice', 'TestController@addNotice');
Route::get('app/get_notice', 'TestController@getNotice');
// Route::get('/event', function(){
//     event(new MessageNotice('This is our 1st Notice'));
// });
// END PROJECT ROUTES
Route::get('/', function () {
    return view('app');
});
Route::get('/home', 'TestController@index');

Route::any('{any}', function(){
    return view('app');
});
