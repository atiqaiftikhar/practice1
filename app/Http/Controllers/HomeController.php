<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('navbar.home1');
    }

    public function admin(){
        return view('admin');
    }
}
