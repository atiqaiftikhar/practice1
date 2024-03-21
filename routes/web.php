<?php

use App\Http\Controllers\FirstController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//  Route::get('/', function () {
//     return view('home1');
// });
Route::get('/',[FirstController::class,'home']);


  Route::group(['prefix'=>'admin'], function(){

    Route::group(['prefix'=>'/first'], function(){

        Route::get('/',[HomeController::class,'index'])->name('booking.index');
        Route::get('/create',[HomeController::class,'create'])->name('booking.create');
        Route::post('/store',[HomeController::class,'store'])->name('booking.store');
        Route::get('/edit/{id}', [HomeController::class,'edit'])->name('booking.edit');
        Route::post('/update/{id}', [HomeController::class,'update'])->name('booking.update');
        Route::get('/delete/{id}', [HomeController::class,'delete'])->name('booking.delete');
    
   });

});