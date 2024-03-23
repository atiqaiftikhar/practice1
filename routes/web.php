<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//  Route::get('/', function () {
//     return view('home1');
// });
Route::get('/',[HomeController::class,'home']);
Route::get('/img1',[HomeController::class,'img1']);

Route::get('/img2',[HomeController::class,'img2']);

Route::get('/img3',[HomeController::class,'img3']);

Route::get('/img4',[HomeController::class,'img4']);

// Route::get('/admin',[FirstController::class,'admin']);

Route::get('/admin',[HomeController::class,'admin']);

  Route::group(['prefix'=>'admin'], function(){

    Route::group(['prefix'=>'/banner'], function(){

        Route::get('/',[BannerController::class,'index'])->name('banner.index');
        Route::get('/create',[BannerController::class,'create'])->name('banner.create');
        Route::post('/store',[BannerController::class,'store'])->name('banner.store');
        Route::get('/edit/{id}', [BannerController::class,'edit'])->name('banner.edit');
        Route::post('/update/{id}', [BannerController::class,'update'])->name('banner.update');
        Route::get('/delete/{id}', [BannerController::class,'delete'])->name('banner.delete');
    
   });

});