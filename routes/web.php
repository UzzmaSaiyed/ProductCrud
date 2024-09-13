<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Blogcontroller;
use App\Http\Controllers\Prodcontroller;
// use App\Models\Blog3;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/blog',[Blogcontroller::class,'index'])->name('blog.index');
// Route::get('/blog/create',[Blogcontroller::class,'create'])->name('blog.create');
// Route::post('/blog/store',[Blogcontroller::class,'store'])->name('blog.store');
// Route::get('/blog/edit/{id}',[Blogcontroller::class,'edit'])->name('blog.edit');
// Route::post('/blog/update/{id}/{title}',[Blogcontroller::class,'update'])->name('blog.update');
// Route::get('/blog/delete/{id}',[Blogcontroller::class,'delete'])->name('blog.delete');

Route::get('/products',[Prodcontroller::class,'index'])->name('products.index');
Route::get('/products/create',[Prodcontroller::class,'create'])->name('products.create');
Route::post('/products/store',[Prodcontroller::class,'store'])->name('products.store');
Route::get('/products/edit/{productid}',[Prodcontroller::class,'edit'])->name('products.edit');
Route::post('/products/update/{productid}/{productname}',[Prodcontroller::class,'update'])->name('products.update');
Route::get('/products/delete/{productid}',[Prodcontroller::class,'delete'])->name('products.delete');

