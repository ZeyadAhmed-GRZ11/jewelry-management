<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
   public function index(){

    $user = Auth::user();

     if($user){
        if($user->usertype == 'user'){
           return view('dashboard');
        }
        else{
           return view('admin.home');
        }
     }
     else{
        // Handle the case when the user is not logged in
        return redirect()->route('login');
     }
     
   } 

}