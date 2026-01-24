<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\frontend\loginController;




Route::get('/login', [loginController::class, 'index'])->name('login');
Route::post('/login', [loginController::class, 'login']);



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
