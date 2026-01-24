<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; // ✅ THIS LINE IS CRUCIAL
use Illuminate\Support\Facades\DB;


class RegisterationController extends Controller
{
    public function index()
    {
        return view('frontend.registeration');
    }
     public function store(Request $request)
    {
        $name = trim($request->name);
        $email = trim($request->email);
        $password = trim($request->password);

        // check if email already exists
        $exists = DB::table('users')->where('email', $email)->first();
        if ($exists) {
            return back()->with('error', 'Email already registered');
        }

        // insert user
        DB::table('users')->insert([
            'name' => $name,
            'email' => $email,
            'password' => $password
        ]);

        return back()->with('success', 'Registration successful! You can now login.');
    }
}
