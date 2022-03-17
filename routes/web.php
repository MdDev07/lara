<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;



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

Route::get('/test/{id}', function ($id) {
    return 'welcome with git'.$id;
});


/* Route::get('users/', 'App\Http\Controllers\Front\UserController@Showusername');

 Route::namespace('Front')->group(function(){
    Route::get('users/', 'UserController@Showusername');
});  */

Route::group(['namespace' => 'App\Http\Controllers\Front'], function()
{
    Route::get('users/', 'UserController@Showusername');
    Route::get('users2/', 'UserController@Showusername2');
});


Route::resource('student','App\Http\Controllers\StudentController');

/*comment test*/ 