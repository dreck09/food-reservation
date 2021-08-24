<?php

use App\Http\Controllers\FoodController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
//Admin
Route::prefix('admin')->group(function(){
    //Food
    Route::get('list/food', [FoodController::class, 'index'])->name('admin.foodmenu');
    Route::post('add/food', [FoodController::class, 'store'])->name('add.food');
    Route::post('delete/food/{id}', [FoodController::class, 'destroy'])->name('del.food');
    Route::put('update/food', [FoodController::class, 'update'])->name('update.food');
});

//Client
Route::prefix('client')->group(function(){

});


