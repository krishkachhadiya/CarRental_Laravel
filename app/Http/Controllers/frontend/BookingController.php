<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
   public function index()
    {
        if (!session('user_login')) {
            return redirect('/login');
        }

        // Fetch logged-in user bookings
        $bookings = DB::table('bookings')
            ->where('user_email', session('user_email'))
            ->orderBy('id', 'desc')
            ->get();

        return view('frontend.book', compact('bookings'));
    }

    public function store(Request $request)
    {
        if (!session('user_login')) {
            return redirect('/login');
        }

        DB::table('bookings')->insert([
            'user_email' => session('user_email'),
            'car_type' => $request->car_type,
            'pickup_location' => $request->pickup_location,
            'dropoff_location' => $request->dropoff_location,
            'pickup_date' => $request->pickup_date,
            'pickup_time' => $request->pickup_time,
            'dropoff_date' => $request->dropoff_date,
            'dropoff_time' => $request->dropoff_time
        ]);

        return redirect('/')->with('success', 'Booking successful!');
    }
    public function myBookings()
    {
        if (!session('user_login')) {
            return redirect('/login');
        }

        $bookings = DB::table('bookings')
            ->where('user_email', session('user_email'))
            ->orderBy('id', 'desc')
            ->get();

        return view('frontend.my-bookings', compact('bookings'));
    }
}
