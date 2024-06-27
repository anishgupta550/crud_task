<?php

use App\Http\Controllers\crud;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('crud');
});


Route::resource('crud',crud::class);