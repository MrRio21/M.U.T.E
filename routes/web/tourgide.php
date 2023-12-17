<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewTourGidesController;

Route::get('allTourguide',[viewHotelsController::class,'index']);

// Route::get('allTourguide', function(){
//     return view('allTourguide.allTourguide');
// });
