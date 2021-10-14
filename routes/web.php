<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


    Route::prefix('admin')->group(function(){
        Route::get('/', function(){
        return view('admin.index');
    });
        Route::get('/', function(){
        return view('admin.create');
    });
    Route::get('/', function(){
        return view('admin.show');
    });
    Route::get('/', function(){
        return view('admin.edit');
    });
    });
Route::resource('admin', BookController::class);
Route::resource('user', UserController::class);
