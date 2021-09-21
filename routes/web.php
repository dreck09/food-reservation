<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\{
    LoginController,
    RegisterController
};

use App\Http\Controllers\{
    FoodController,
    FoodPackageController,
    HomeController,
    ReservationController
};

Route::get('/', function () {
    return view('homepage');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/transaction', function () {
    return view('transaction');
})->name('transaction');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation');
    Route::post('add/reservation', [ReservationController::class, 'store'])->name('add.reservation');
    Route::post('add/transaction', [ReservationController::class, 'transaction'])->name('transaction');
});

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
        Route::get('pending/transaction', [ReservationController::class, 'pendingList'])->name('pending.transaction');
        Route::get('inprocess/transaction/list', function(){
            return view('admin-inprocess-transaction');
        })->name('inprocess.transaction');
        Route::get('completed/transaction/list', function(){
            return view('admin-completed-transaction');
        })->name('completed.transaction');
    });
});