<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Welcome;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Welcome::class);
