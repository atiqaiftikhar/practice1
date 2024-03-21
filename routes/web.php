<?php

use App\Http\Controllers\FirstController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//  Route::get('/', function () {
//     return view('home1');
// });
Route::get('/',[HomeController::class,'home']);
Route::get('/admin',[FirstController::class,'index']);

//   Route::group(['prefix'=>'admin'], function(){

//     Route::group(['prefix'=>'/first'], function(){

//         Route::get('/',[FirstController::class,'index'])->name('booking.index');
//         Route::get('/create',[FirstController::class,'create'])->name('booking.create');
//         Route::post('/store',[FirstController::class,'store'])->name('booking.store');
//         Route::get('/edit/{id}', [FirstController::class,'edit'])->name('booking.edit');
//         Route::post('/update/{id}', [FirstController::class,'update'])->name('booking.update');
//         Route::get('/delete/{id}', [FirstController::class,'delete'])->name('booking.delete');
    
//    });

// });