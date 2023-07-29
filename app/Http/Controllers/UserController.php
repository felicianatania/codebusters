<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login() {
        return Inertia::render('login');
    }

    public function register() {
        return Inertia::render('register');
    }

    public function validateLogin() {
        dd("Hello World");
    }

}
