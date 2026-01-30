<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\aboutController;
use App\Http\Controllers\frontend\blogController;
use App\Http\Controllers\frontend\homeController;
use App\Http\Controllers\frontend\loginController;
use App\Http\Controllers\frontend\registerationController;
use App\Http\Controllers\frontend\teamController;
use App\Http\Controllers\frontend\vehicleController;



Route::get('/login', [loginController::class, 'index'])->name('login');
Route::post('/login', [loginController::class, 'login']);
Route::get('/registeration', [RegisterationController::class, 'index']);
Route::post('/registeration', [RegisterationController::class, 'store']);


Route::get('/logout', function () {
    session()->flush();
    return redirect('/login');
});


Route::get('/', function () {
    if (!session('user_login')) {
        return redirect('/login');
    }
    return app(homeController::class)->index();
});

Route::get('/about', function () {
    if (!session('user_login')) {
        return redirect('/login');
    }
    return app(aboutController::class)->index();
});

Route::get('/blog', function () {
    if (!session('user_login')) {
        return redirect('/login');
    }
    return app(blogController::class)->index();
});



Route::get('/team', function () {
    if (!session('user_login')) {
        return redirect('/login');
    }
    return app(TeamController::class)->index();
});

Route::get('/vehicle', function () {
    if (!session('user_login')) {
        return redirect('/login');
    }
    return app(VehicleController::class)->index();
});

Route::middleware(['auth'])->group(function () {


   
});