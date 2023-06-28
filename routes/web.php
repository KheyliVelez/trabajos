<?php

use App\Http\Controllers\ejerController;
use Illuminate\Support\Facades\Route;





Route::get('ejercicio/create',[ejerController::class,'create']);

Route::post('ejercicio', [ejerController::class,'store'])->name('ejercicios.store');