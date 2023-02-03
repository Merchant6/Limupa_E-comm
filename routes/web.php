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

Route::group(['middleware' => 'revalidate'], function() {

    //Store Routes
    Route::get('store',[StoreController::class, 'index'])->name('store');
    Route::get('/', function () {return redirect()->route('store');});

    //Single Product Page
    Route::get('show/{id?}',[StoreController::class, 'show'])->name('show');

    //Cart Functionalities
    Route::get('cart',[CartController::class, 'cart'])->name('cart');
    Route::post('add-to-cart', [CartController::class, 'addToCart'])->name('add-to-cart');
    Route::get('load-cart-data',[CartController::class, 'cartLoadAjax'])->name('load-cart-data');
    Route::post('update-cart-data',[CartController::class, 'updateCartData'])->name('update-cart-data');

    //Redirect if already authenticated middleware(Admin)
    Route::group(['middleware' => ['userAuth']], function() {

        //Profile
        Route::get('profile',[UserController::class, 'profile']); 
        //Checkout
        Route::get('checkout',[StoreController::class, 'checkOut'])->name('checkout')->middleware('cart_check');
        //Paypal 
        Route::post('payment', [PayPalController::class, 'payment'])->name('payment')->middleware('cart_check');
        Route::get('payment.success', [PayPalController::class, 'success'])->name('payment.success')->middleware('cart_check');

        //Create Comment
        Route::post('comments/{id}',[ReviewController::class, 'store'])->name('comment');

        //getDetails
        Route::get('get.details', [UserController::class, 'getDetails'])->name('get.details');

        //UserSignOut
        Route::get('UserSignOut',[UserController::class, 'UserSignOut'])->name('UserSignOut');


    });

    //Redirect if already authenticated middleware(Admin)
    Route::group(['middleware' => ['guest:web']], function() {

      //User Login and Registration
      Route::get('UserLogin',[UserController::class, 'UserLogin'])->name('UserLogin');
      Route::post('user.login',[UserController::class, 'UserCustomLogin'])->name('user.login');

      Route::post('UserRegis',[UserController::class, 'customUserRegistration'])->name('UserRegis');
    });





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
});

  
