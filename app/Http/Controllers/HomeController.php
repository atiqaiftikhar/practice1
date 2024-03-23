<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('navbar.home1');
    }
    public function img1(){
        return view('navbar.img1');
    }
    public function img2(){
        return view('navbar.img2');
    }
    public function img3(){
        return view('navbar.img3');
    }
    public function img4(){
        return view('navbar.img4');
    }

    public function admin(){
        return view('admin');
    }
}
