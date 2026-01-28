<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

class VehicleController extends Controller
{
    public function index()
    {
        return view('frontend.vehicle');
    }
}
