<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cocktail;

class PageController extends Controller
{
    public function home(){
        return view('home');
    }
    public function cocktails(){
        $cocktails = Cocktail::all();
        
        return view('cocktails',compact('cocktails'));
    }
}