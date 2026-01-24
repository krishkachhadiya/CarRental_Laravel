<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index()
    {
        return view('frontend.login');
    }

  public function login(Request $request)
{
    $user = \DB::table('users')
        ->where('email', trim($request->email))
        ->where('password', trim($request->password))
        ->first();

    if ($user) {
        // ✅ STORE EMAIL IN SESSION
        session([
            'user_login' => true,
            'user_email' => $user->email,
        ]);

        return redirect('/');
    }

    return back()->with('error', 'Wrong email or password');
}
}