<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetController;

Route::get('/pets',[PetController::class,'index'])->name('pets.index');
Route::delete('/pets/{id}',[PetController::class,'destroy'])->name('pets.destroy');