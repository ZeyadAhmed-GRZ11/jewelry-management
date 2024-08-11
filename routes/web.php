<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Livewire\Home;
use App\Livewire\JewelryList;
use App\Livewire\AddJewelry;




Route::get('/StartPage', Home::class);
Route::get('/jewelryList', JewelryList::class);
Route::get('/add/jewelry', AddJewelry::class);




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

Route::get('/home',[HomeController::class, 'index']);



