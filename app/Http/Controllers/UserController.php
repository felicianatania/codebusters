<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    public function login() {
        return Inertia::render('Auth/Login');
    }

    public function register() {
        return Inertia::render('Auth/Register');
    }

    public function validateLogin() {
        dd("Hello World");
    }

}
