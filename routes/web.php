<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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





Route::group(['middleware' => ['guest:admin']], function() {

  //Admin Register
  Route::get('admin_register',[AdminController::class, 'registration'])->name('GetSignUp');
  Route::post('post_Register',[AdminController::class, 'customRegistration'])->name('aSignUp');  



  //Admin Login
  Route::get('admin_login',[AdminController::class, 'AdminGetLogin'])->name('login');
  Route::post('post_login',[AdminController::class, 'CustomLogin'])->name('aAuth');

});



    Route::group(['middleware' => ['auth:admin']], function() {
      // define your route, route groups here

          //Dashboard
          Route::get('dashboard',[AdminController::class, 'dashboard'])->name('dashboard');
          Route::get('/', function () {return redirect()->route('dashboard');});

          //SignOut
          Route::get('admin_signout',[AdminController::class, 'signOut'])->name('signout');

          //Products
          Route::get('add_product',[ProductController::class, 'create'])->name('add_product');
          Route::post('save_product',[ProductController::class, 'createProduct'])->name('save_product');
          Route::get('view_products',[ProductController::class, 'viewProducts'])->name('view_products');

           //Edit Product
          Route::get('edit_product/{id?}',[ProductController::class, 'edit'])->name('edit_product');

           //Update Product Data
          Route::post('update_product/{id}',[ProductController::class, 'update'])->name('update_product');

          //Delete Product
          Route::delete('/delete_product/{id}',[ProductController::class, 'destroy'])->name('delete_product');

          //Search Product
          Route::get('search',[ProductController::class, 'search'])->name('search');

   });
