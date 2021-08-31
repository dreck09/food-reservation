<?php

use App\Http\Controllers\FoodController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Models\Food;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/login/admin', [LoginController::class, 'showAdminLoginForm']);
Route::post('/login/admin', [LoginController::class,'adminLogin']);
Route::get('/register/admin', [RegisterController::class,'showAdminRegisterForm']);
Route::post('/register/admin', [RegisterController::class,'createAdmin']);
Route::get('logout', [LoginController::class,'logout']);

Route::group(['middleware' => 'auth:admin'], function () {
    Route::view('/admin', 'admin');
    Route::prefix('admin')->group(function(){
        Route::get('/food/package', function () {
            return view('admin-add-food-package');
        });
        Route::get('list/food', [FoodController::class, 'index'])->name('admin.foodmenu');
        Route::post('add/food', [FoodController::class, 'store'])->name('add.food');
        Route::delete('list/food/{id}', [FoodController::class, 'destroy'])->name('delete.food');
        Route::put('update/food', [FoodController::class, 'update'])->name('update.food');
    });
});