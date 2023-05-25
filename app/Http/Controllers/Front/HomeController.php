<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Futsal;

class HomeController extends Controller
{
    public function index(){
        $futsal = Futsal::all();
        return view('front.home', compact('futsal'));
    }
}
