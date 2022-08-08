<?php

use App\Http\Controllers\AdminController;
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



Route::get('admin_signout',[AdminController::class, 'signOut'])->name('signout');

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
          Route::get('/', function () {
            return redirect()->route('dashboard');
        });
   });
