<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{
    public function showLogin() {
        return view('auth.login');
    }

    public function login(Request $request) {
        $validatedData = $request->validate([
            'email'           => 'required|max:255|email',
            'password'           => 'required',
        ]);
        return $request->all();
    }
}
