<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;


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
//Client
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/class',[HomeController::class,'class'])->name('class');
Route::get('/producteye/{id}',[HomeController::class,'product'])->name('producteye');
Route::post('/producteye/{id}',[HomeController::class,'product'])->name('producteye');
Route::get('/about',[HomeController::class,'About'])->name('about');
Route::get('/course',[HomeController::class,'Course'])->name('course');
Route::get('/gallery',[HomeController::class,'Gallery'])->name('gallery');


Route::get('/shoppingcart',[HomeController::class,'shoppingbasket'])->name('shoppingcart');

Route::prefix('shoppingcart')->name('shoppingcart.')->group(function (){
    Route::get('{id}',[HomeController::class,'shoppingCart'])->name('add');
    Route::post('{id}',[HomeController::class,'PostShoppingcart'])->name('post_add');
    Route::get('delete/{id}',[HomeController::class,'ShopingBasketDelete'])->name('delete');
});



//Admin
Route::get('/admin',[AdminController::class,'index'])->name('admin');

Route::get('/product',[AdminController::class,'ProductDashboard'])->name('product');
Route::prefix('product')->name('product.')->group(function (){
    Route::get('/product',[AdminController::class,'ProductDashboard'])->name('productdashboard');
    Route::get('/add',[AdminController::class,'ProductAdd'])->name('add');
    Route::post('/add',[AdminController::class,'PostAdd'])->name('post-add');
    Route::get('/edit/{id}',[AdminController::class,'ProductEdit'])->name('edit');
    Route::post('/edit/{id}',[AdminController::class,'PostEdit'])->name('post-edit');
    Route::get('/delete/{id}',[AdminController::class,'ProductDelete'])->name('delete');
});

Route::get('/category',[CategoryController::class,'index'])->name('category');
Route::prefix('category')->name('category.')->group(function (){
    Route::get('/category',[CategoryController::class,'index'])->name('categorydashboard');
    Route::get('/add',[CategoryController::class,'CategoryAdd'])->name('add');
    Route::post('/add',[CategoryController::class,'PostAdd'])->name('post-add');
    Route::get('/edit/{id}',[CategoryController::class,'CategoryEdit'])->name('edit');
    Route::post('/edit/{id}',[CategoryController::class,'PostEdit'])->name('post-edit');
    Route::get('/delete/{id}',[CategoryController::class,'CategoryDelete'])->name('delete');
});

Route::redirect('/dashboard', '/product');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/product', [AdminController::class,'ProductDashboard'])->name('product');
});
