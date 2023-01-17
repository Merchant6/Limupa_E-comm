<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PayPalController;
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


//Dashboard
Route::get('store',[StoreController::class, 'index'])->name('store');
Route::get('/', function () {return redirect()->route('store');});

Route::get('show/{id?}',[StoreController::class, 'show'])->name('show');

Route::get('slogin',[UserController::class, 'UserLogin'])->name('slogin');
Route::post('UserRegis',[UserController::class, 'customUserRegistration'])->name('UserRegis');  
Route::post('UserLogin',[UserController::class, 'UserCustomLogin'])->name('UserLogin');

//Checkout
Route::get('checkout',[StoreController::class, 'checkOut'])->name('checkout');


//createComment
Route::post('comments/{id}',[ReviewController::class, 'store'])->name('comment');

//Cart Functionalities
Route::get('cart',[CartController::class, 'cart'])->name('cart');
Route::post('add-to-cart', [CartController::class, 'addToCart'])->name('add-to-cart');
Route::get('load-cart-data',[CartController::class, 'cartLoadAjax'])->name('load-cart-data');
Route::post('update-cart-data',[CartController::class, 'updateCartData'])->name('update-cart-data');

//Paypal 
Route::post('payment', [PayPalController::class, 'payment'])->name('payment');
Route::get('shopping',[PayPalController::class, 'getShop'])->name('shopping');


// Route::get('cancel', 'PayPalController')->name('payment.cancel');
Route::get('payment.success', [PayPalController::class, 'success'])->name('payment.success');

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
          

          //SignOut
          Route::get('admin_signout',[AdminController::class, 'signOut'])->name('signout');

          //Products
          Route::get('add_product',[ProductController::class, 'create'])->name('add_product');
          Route::post('save_product',[ProductController::class, 'createProduct'])->name('save_product');
          Route::get('view_products',[ProductController::class, 'viewProducts'])->name('view_products');

         
          //New Edit 
          Route::get('editNew/{id?}',[ProductController::class, 'editNew'])->name('editNew');

           //Update Product Data
          Route::post('update_product/{id}',[ProductController::class, 'update'])->name('update_product');

          //Delete Product
          Route::delete('/delete_product/{id}',[ProductController::class, 'destroy'])->name('delete_product');

          //Search Product
          Route::get('search',[ProductController::class, 'search'])->name('search');

   });


  
