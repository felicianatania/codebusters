<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/make-api-request', function () {
    $url = 'http://34.101.154.14:8175/hackathon/user/auth/create';
    $data = [
        "ktpId" => "4746585764531234",
        "userName" => "Ayu",
        "phoneNumber" => "81234567890",
        "loginPassword" => "12345678",
        "birthDate" => "11101998",
        "gender" => 1,
        "email" => "ayu@gmail.com"
    ];

    $response = Http::post($url, $data);
    // dd($response);

    // Handle the response
    $responseData = $response->json();
    dd($response->status());
    // Do something with $responseData
});