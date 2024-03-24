<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Content;

// use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function home(){
    //     return view('navbar.home1');
    // }


    public function home(){


        // $banner= Banner::orderBy('rank')->get();
        $banner = Banner::where('expiry_date', '>=', now()) // Filter out expired banners
        ->orderBy('rank')
        ->get();

        return view('navbar.home1',compact('banner'));
    }


    public function img1(){
        return view('navbar.img1');
    }
    public function img2(){
        $content = Content::first();
        return view('navbar.img2',compact('content'));
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
