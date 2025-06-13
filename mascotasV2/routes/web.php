<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetController;

Route::get('/pets',[PetController::class,'index'])->name('pets.index');