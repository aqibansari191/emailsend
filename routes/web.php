<?php

use App\Http\Controllers\mailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('sendEmail', [mailController::class, 'emailsend']);
