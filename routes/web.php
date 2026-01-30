<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\aboutController;
use App\Http\Controllers\frontend\blogController;
use App\Http\Controllers\frontend\bookController;
use App\Http\Controllers\frontend\contactController;
use App\Http\Controllers\frontend\homeController;
use App\Http\Controllers\frontend\loginController;
use App\Http\Controllers\frontend\registerationController;
use App\Http\Controllers\frontend\teamController;
use App\Http\Controllers\frontend\vehicleController;
use App\Http\Controllers\frontend\BookingController;

// Book Now page
Route::get('/book', [BookingController::class, 'index']);
Route::post('/book-now', [BookingController::class, 'store']);
Route::get('/my-bookings', [BookingController::class, 'myBookings']); // Show bookings page

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

Route::get('/book', function () {
    if (!session('user_login')) {
        return redirect('/login');
    }
    return app(BookController::class)->index();
});

Route::get('/contact', function () {
    if (!session('user_login')) {
        return redirect('/login');
    }
    return app(ContactController::class)->index();
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