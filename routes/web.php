<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', fn() => view('home'));
Route::get('/', function () {
    return "Laravel hidup di Vercel";
});