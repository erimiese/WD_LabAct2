<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('enter-username');
})->name('enter-username');

Route::post('/user', function (\Illuminate\Http\Request $request) {
    $username = $request->input('username');
    return redirect()->route('user', ['username' => $username]);
})->name('submit-username');

Route::get('/user/{username?}', function ($username = null) {
    $message = $username ? "Welcome, $username!" : "Welcome, Guest!";
    return view('user', ['message' => $message]);
})->where('username', '[a-zA-Z]+')->name('user');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/content', function () {
    return view('content');
})->name('content');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::post('/redirect-to-home', function () {
    return redirect()->route('welcome');
})->name('redirect-to-home');
