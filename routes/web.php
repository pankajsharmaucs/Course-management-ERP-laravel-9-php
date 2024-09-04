<?php

use Illuminate\Support\Facades\Route;
use App\Http\Request;
use App\Http\Controllers\Admin;


Route::get('/', function() {
    Session::put('subFolder', '');
    return redirect('login');
});

Route::get('/login', function () {
    Session::put('subFolder', '');
    return view('login');
});


// =============Admin==============

Route::post("/admin_login",[Admin::class, 'login']);

Route::get('/dashboard', function () {
    return view('dashboard');
});



// ====user=============
Route::view("/user/list","user/list");


// ====Client=============
Route::view("/client/list","client/list");

// ====consultant=============
Route::view("/consultant/list","consultant/list");


// ============================
Route::view("/settings","settings");
