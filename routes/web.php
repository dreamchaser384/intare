<?php

use Illuminate\Support\Facades\Route;

USE App\Http\Controllers\ProductController;
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


//my home page of website
route::get('/dash',[ProductController::class,'dash'])->name('dash');

route::get('/create',[ProductController::class,'create'])->name('create');

route::post('/store',[ProductController::class,'store'])->name('store');

route::get('/edit',[ProductController::class,'edit'])->name('edit');