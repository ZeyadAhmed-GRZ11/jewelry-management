<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Livewire\Home;
use App\Livewire\StartPage;
use App\Livewire\Gallery;
use App\Livewire\Category;
use App\Livewire\Cart;
use App\Livewire\Aboutus;
use App\Livewire\JewelryList;
use App\Livewire\AddJewelry;
use App\Livewire\Updatejewlery;




Route::get('/test', Home::class);

Route::get('/StartPage ',  StartPage::class);
Route::get('/Gallery ',  Gallery::class);
Route::get('/Category ',  Category::class);
Route::get('/cart ',  Cart::class);
Route::get('/AboutUs ',  Aboutus::class);

Route::get('/jewelryList/admin', JewelryList::class);
Route::get('/add/jewelry', AddJewelry::class);
Route::get('/edit/jewelry/{id}', Updatejewlery::class);




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



