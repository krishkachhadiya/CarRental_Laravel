<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;


class homeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
}
