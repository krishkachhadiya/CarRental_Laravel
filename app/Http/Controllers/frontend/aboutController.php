<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;


class aboutController extends Controller
{
    public function index()
    {
        return view('frontend.about');
    }
}
