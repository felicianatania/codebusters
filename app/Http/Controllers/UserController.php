<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function login() {
        return Inertia::render('Auth/Login');
    }

    public function register() {
        return Inertia::render('Auth/Register');
    }

    public function validateLogin(Request $request) {
        $accessToken = $request->input('token');
        Session::put('accessToken', $accessToken);
        return redirect('/dashboard');
    }

    public function logout() {
        if (Session::has('accessToken')) Session::forget('accessToken');
        return redirect('/login');
    }
}
