<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\frontend\loginController;
use App\Http\Controllers\frontend\registerationController;




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
