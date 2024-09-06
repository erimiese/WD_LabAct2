<?php

use Illuminate\Support\Facades\Route;

// Default route, displaying welcome.blade.php without any alert or message
Route::get('/', function () {
    return view('welcome', ['username' => null, 'showAlert' => false]);
})->name('root');

// Route to handle /welcome/ and /welcome/user
Route::get('/welcome/{username?}', function ($username = null) {
    if ($username === null || $username === 'user') {
        // If username is null or 'user', display guest message
        return view('welcome', ['username' => 'Guest', 'showAlert' => true]);
    }
    
    // Validate that username contains only alphabetic characters
    if (preg_match('/^[A-Za-z]+$/', $username)) {
        return view('welcome', ['username' => $username, 'showAlert' => true]);
    } else {
        return redirect()->route('root'); // Redirect to root if username is invalid
    }
})->name('welcome');

// Other routes
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

Route::get('/debug', function () {
    return session()->all();
});
