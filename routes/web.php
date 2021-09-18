<?php

use App\Http\Controllers\FoodController;
use App\Http\Controllers\FoodPackageController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Models\Food;
use App\Models\FoodPackage;

Route::get('/', function () {
    return view('homepage');
});
Route::get('/reservation', function () {
    return view('reservation');
})->name('reservation');
Route::get('/transaction', function () {
    return view('transaction');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/home/transaction', function () {
    return view('transaction');
})->name('transaction');


Auth::routes();

Route::get('/login/admin', [LoginController::class, 'showAdminLoginForm']);
Route::post('/login/admin', [LoginController::class,'adminLogin']);
Route::get('/register/admin', [RegisterController::class,'showAdminRegisterForm']);
Route::post('/register/admin', [RegisterController::class,'createAdmin']);
Route::get('logout', [LoginController::class,'logout']);

Route::group(['middleware' => 'auth:admin'], function () {
    Route::view('/admin', 'admin-dashboard')->name('admin.dashboard');
    Route::prefix('admin')->group(function(){
        // food package
        Route::get('list/package', [FoodPackageController::class, 'index'])->name('admin.foodpackage');
        Route::post('add/package', [FoodPackageController::class, 'store'])->name('add.foodpackage');
        Route::put('update/package', [FoodPackageController::class, 'update'])->name('update.foodpackage');
        Route::delete('list/package/{id}', [FoodPackageController::class, 'destroy'])->name('delete.foodpackage');
        // foods
        Route::get('list/food', [FoodController::class, 'index'])->name('admin.foodmenu');
        Route::post('add/food', [FoodController::class, 'store'])->name('add.food');
        Route::delete('list/food/{id}', [FoodController::class, 'destroy'])->name('delete.food');
        Route::put('update/food', [FoodController::class, 'update'])->name('update.food');
        //trasaction
        Route::get('pending/transaction/list', function(){
            return view('admin-pending-transaction');
        })->name('pending.transaction');
        Route::get('inprocess/transaction/list', function(){
            return view('admin-inprocess-transaction');
        })->name('inprocess.transaction');
        Route::get('completed/transaction/list', function(){
            return view('admin-completed-transaction');
        })->name('completed.transaction');
    });
});