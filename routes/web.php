<?php

use App\Http\Controllers\ThoughtController;
use App\Models\Thoughts;
use Illuminate\Support\Facades\Route;

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
    return view('triads/home');
});

Route::get('/triads', function() { 
    return view('triads/first'); 
});

Route::get('/chars', function() {
    return view('triads/chars');
});

Route::get('/works', function() {
    return view('triads/works');
});

// Route::get('/triads/add', [ThoughtController::class, 'index']);
// Route::post('/triads/add', [ThoughtsController::class, 'store']);