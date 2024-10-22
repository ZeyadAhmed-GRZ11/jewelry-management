<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Livewire\Home;
use App\Livewire\StartPage;
use App\Livewire\Category;
use App\Livewire\Cart;
use App\Livewire\Aboutus;
use App\Livewire\JewelryList;
use App\Livewire\Test;
use App\Livewire\JewelryDetails;




Route::get('/welcomePage', Home::class);
Route::get('/test', Test::class);
Route::get('/Details', JewelryDetails::class);

Route::get('/StartPage ',  StartPage::class);
Route::get('/Category ',  Category::class);
Route::get('/cart ',  Cart::class);
Route::get('/AboutUs ',  Aboutus::class);

Route::get('/jewelryList/admin', JewelryList::class);





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



