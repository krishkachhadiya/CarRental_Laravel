<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

class BookController extends Controller
{
    public function index()
    {
        return view('frontend.book');
    }
}
