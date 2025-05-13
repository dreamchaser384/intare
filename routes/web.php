<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;

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
//login as user
Route::get('/',[LoginController::class,'login'])->name('login');

route::post('/post',[LoginController::class,'post'])->name('post');
//create product
route::get('/create',[ProductController::class,'create'])->name('create');

route::post('/postp',[ProductController::class,'postp'])->name('postp');
//getting product status
route::get('/status',[ProductController::class,'status'])->name('status');

//edit data
route::get('/edit/{id}',[ProductController::class,'edit'])->name('edit');
//update
route::put('/update/{id}',[ProductController::class,'update'])->name('update');
//delete data
route::delete('/delete/{id}',[ProductController::class,'delete'])->name('delete');
//logout
route::get('/logout',[ProductController::class,'logout'])->name('logout');
//go back
route::get('/back',[ProductController::class,'back'])->name('back');