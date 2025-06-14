<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetController;

Route::get('/pets',[PetController::class,'index'])->name('pets.index');
Route::post('/pets',[PetController::class,'store'])->name('pets.store');
Route::delete('/pets/{id}',[PetController::class,'destroy'])->name('pets.destroy');