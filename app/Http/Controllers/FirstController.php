<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    
    public function home(){
        return view('navbar.home1');
    }

}
