<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;


use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('admin.adminLayout');
});
// to view the product add form
Route::get('productadd', function () {
    return view('product.add');
})->name('addproduct');
// to view the product

Route::get('allproduct', function () {
    return view('product.allproduct');
})->name('allproduct');

Route::post('add',[ProductController::class,"add"])->name('add');
Route::get('showProduct',[ProductController::class,"showProduct"])->name('showProduct');
Route::get('delete/{id}',[ProductController::class,"destroy"])->name('destroy');
Route::get('Edit/{id}',[ProductController::class,"edit"])->name('edit')->name('edit');
Route::put('update',[ProductController::class,'update'])->name('update');

// for brand:-


// to view the brand add form
Route::get('brandadd', function () {
    return view('brand.add');
})->name('addbrand');
// to view the brand

Route::get('showbrandlist', [BrandController::class,'showbrandlist']);

Route::post('addbrand',[BrandController::class,"add"])->name('addbrand');
Route::get('showbrandform',[BrandController::class,"showbrandform"])->name('showbrandform');
Route::get('showbrand',[BrandController::class,"showbrand"])->name('showbrand');
Route::get('deletebrand/{id}',[BrandController::class,"destroy"])->name('destroy');
Route::get('Editbrand/{id}',[BrandController::class,"edit"])->name('edit')->name('edit');
Route::put('updatebrand',[BrandController::class,'update'])->name('updatebrand');











// for category:-


// to view the category add form
Route::get('categoryadd', function () {
    return view('category.add');
})->name('addcategory');
// to view the category

Route::get('showcategorylist', [CategoryController::class,'showcategorylist']);

Route::post('addcategory',[CategoryController::class,"add"])->name('add');
Route::get('showcategoryform',[CategoryController::class,"showcategoryform"])->name('showcategoryform');
Route::get('showcategory',[CategoryController::class,"showcategory"])->name('showcategory');
Route::get('deletecategory/{id}',[CategoryController::class,"destroy"])->name('destroy');
Route::get('Editcategory/{id}',[CategoryController::class,"edit"])->name('edit')->name('edit');
Route::put('updatecategory',[CategoryController::class,'update'])->name('updatecategory');

