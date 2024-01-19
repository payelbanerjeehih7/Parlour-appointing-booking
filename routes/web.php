<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\MainController;
Route::get('/index',[MainController::class,'index']);
Route::get('/about',[MainController::class,'about']);
Route::get('/pricing',[MainController::class,'pricing']);
Route::get('/contact',[MainController::class,'contact']);

Route::get('/insert',[MainController::class,'insert']);
Route::post('/submit',[MainController::class,'submit']);
Route::get('/login',[MainController::class,'login']);
Route::post('/save',[MainController::class,'save']);
Route::get('/logout',[MainController::class,'logout']);

Route::get('/displayall',[MainController::class,'displayall']);
Route::get('/displayclient',[MainController::class,'displayclient']);

Route::get('/edit{ep}',[MainController::class,'edit']);
Route::post('/update',[MainController::class,'update']);

Route::get('/changepassword{cp}',[MainController::class,'changepassword']);
Route::post('/changepasswordaction',[MainController::class,'changepasswordaction']);

Route::get('/block{blk}',[MainController::class,'block']);
Route::get('/unblock{ublk}',[MainController::class,'unblock']);
Route::get('/delete{del}',[MainController::class,'delete']);

Route::post('/smallform',[MainController::class,'smallform']);