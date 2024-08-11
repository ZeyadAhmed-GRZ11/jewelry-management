<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Jewelry;
use App\Livewire\Home;
use App\Http\Controllers\HomeController;


Route::get('/home',[HomeController::class, 'index']);

Route::get('/jewelry', Jewelry::class);
Route::get('/StartPage', Home::class);




Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});




