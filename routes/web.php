<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainPageController;
use App\Http\Controllers\myController;
use App\Http\Controllers\PageController;

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
}); //Laravel Main Page

Route::get('/webinar',[mainPageController::class,'index']);
Route::get('/t/{id}',[mainPageController::class,'index2']);
Route::post('/webinarpost',[mainPageController::class,'sendMail'])->name('saveWebinar');











// Route::get('/create/{wid}',[mainPageController::class,'index2']);

// Route::get('/create',[PageController::class,'create']);

// Route::get('/index2',[mainPageController::class,'index2']);

// Route::get('/mailsend',[PageController::class,'index']);

// Route::post('/mailsendpost',[PageController::class,'sendMail'])->name('sendpost');

// Route::get('/create',[PageController::class,'create']);



// Route::get('/webinar',[mainPageController::class,'index']);

// Route::post('/create',[mainPageController::class,'saveWebinar'])->name('saveWebinar');

// Route::get('/try','myController@index');

// Route::view('/ilk','yeni');

// Route::get('/sonuc','mainPageController@index');

// Route::get('/deneme',[myController::class,'deneme']);

// Route::get('/about', function () {
//     return view('pages/about');
// });

// Route::get('/create',[mainPageController::class,'mail']);

